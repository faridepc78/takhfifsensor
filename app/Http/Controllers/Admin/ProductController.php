<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ProductsExport;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Product\Gallery\GalleryRequest;
use App\Http\Requests\Admin\Product\Media\MediaRequest;
use App\Http\Requests\Admin\Product\StoreProductRequest;
use App\Http\Requests\Admin\Product\UpdateProductRequest;
use App\Imports\ProductsImport;
use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ExcelMediaRepository;
use App\Repositories\ProductRepository;
use App\Services\Media\MediaFileService;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Facades\Excel;

class ProductController extends Controller
{
    private $productRepository;
    private $categoryRepository;
    private $brandRepository;
    private $excelMediaRepository;

    public function __construct(ProductRepository    $productRepository,
                                CategoryRepository   $categoryRepository,
                                BrandRepository      $brandRepository,
                                ExcelMediaRepository $excelMediaRepository)
    {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->brandRepository = $brandRepository;
        $this->excelMediaRepository = $excelMediaRepository;
    }

    public function index()
    {
        $products = $this->productRepository->paginateByFilters();
        return view('admin.products.index', compact('products'));
    }

    public function create()
    {
        $categories = $this->categoryRepository->getParents();
        $brands = $this->brandRepository->getAll();
        return view('admin.products.create', compact('categories', 'brands'));
    }

    public function store(StoreProductRequest $request)
    {
        try {
            DB::transaction(function () use ($request) {
                $product = $this->productRepository->store($request);
                $image_id = MediaFileService::publicUpload($request->file('image'),
                    'products', null)->id;
                $this->productRepository->addImage($image_id, $product->id);
            });
            DB::commit();
            newFeedback();
        } catch (Exception $exception) {
            DB::rollBack();
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('products.create');
    }

    public function edit($id)
    {
        $product = $this->productRepository->findById($id);
        $categories = $this->categoryRepository->getParents();
        $brands = $this->brandRepository->getAll();
        return view('admin.products.edit', compact('product', 'categories', 'brands'));
    }

    public function update(UpdateProductRequest $request, $id)
    {
        try {
            DB::transaction(function () use ($request, $id) {
                $product = $this->productRepository->findById($id);

                if ($request->hasFile('image')) {
                    $this->productRepository->update($request, null, $id);
                    $image_id = MediaFileService::publicUpload($request->file('image'),
                        'products', null)->id;
                    $this->productRepository->addImage($image_id, $product->id);
                    if ($product->image) {
                        if (!$this->excelMediaRepository->checkMediaId($product->image->id)) {
                            $product->image->delete();
                        }
                    }
                } else {
                    $this->productRepository->update($request, $product->image_id, $id);
                }
            });
            DB::commit();
            newFeedback();
        } catch (Exception $exception) {
            DB::rollBack();
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('products.edit', $id);
    }

    public function destroy($id)
    {
        try {
            DB::transaction(function () use ($id) {
                $product = $this->productRepository->findById($id);

                if ($product->image) {
                    $product->image->delete();
                }

                if (count($product->gallery)) {
                    foreach ($product->gallery as $gallery) {
                        $gallery->image->delete();
                    }
                }

                $product->delete();
            });
            DB::commit();
            newFeedback();
        } catch (Exception $exception) {
            DB::rollBack();
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('products.index');
    }

    public function import_page()
    {
        return view('admin.products.exel.import');
    }

    public function import(Request $request)
    {
        try {
            Excel::import(new ProductsImport(), request()->file('file'));
            newFeedback();
        } catch (Exception $exception) {
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('products.import_page');
    }

    public function export()
    {
        try {
            return Excel::download(new ProductsExport(), 'products.xlsx');
        } catch (Exception $exception) {
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('products.import_page');
    }

    public function media_index($id)
    {
        $product = $this->productRepository->findById($id);
        $media = $this->productRepository->findMediaByProductId($id);
        return view('admin.products.media.index', compact('product', 'media'));
    }

    public function media_store(MediaRequest $request, $id)
    {
        try {
            DB::transaction(function () use ($request) {
                $product = $this->productRepository->storeMedia($request);
                $media_id = MediaFileService::publicUpload($request->file('media'),
                    'products/media', null)->id;
                $this->productRepository->addMedia($media_id, $product->id);
            });
            DB::commit();
            newFeedback();
        } catch (Exception $exception) {
            DB::rollBack();
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('product_media_index', $id);
    }

    public function media_destroy($id, $media_id)
    {
        try {
            DB::transaction(function () use ($media_id) {
                $media = $this->productRepository->findMediaById($media_id);

                if ($media->media) {
                    $media->media->delete();
                }

                $media->delete();
            });
            DB::commit();
            newFeedback();
        } catch (Exception $exception) {
            DB::rollBack();
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('product_media_index', $id);
    }

    public function gallery_index($id)
    {
        $product = $this->productRepository->findById($id);
        $gallery = $this->productRepository->findGalleryByProductId($id);
        return view('admin.products.gallery.index', compact('product', 'gallery'));
    }

    public function gallery_store(GalleryRequest $request, $id)
    {
        try {
            DB::transaction(function () use ($request) {
                $product = $this->productRepository->storeGallery($request);
                $media_id = MediaFileService::publicUpload($request->file('image'),
                    'products/gallery', null)->id;
                $this->productRepository->addImageGallery($media_id, $product->id);
            });
            DB::commit();
            newFeedback();
        } catch (Exception $exception) {
            DB::rollBack();
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('product_gallery_index', $id);
    }

    public function gallery_destroy($id, $media_id)
    {
        try {
            DB::transaction(function () use ($media_id) {
                $gallery = $this->productRepository->findGalleryById($media_id);

                if ($gallery->image) {
                    $gallery->image->delete();
                }

                $gallery->delete();
            });
            DB::commit();
            newFeedback();
        } catch (Exception $exception) {
            DB::rollBack();
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('product_gallery_index', $id);
    }
}
