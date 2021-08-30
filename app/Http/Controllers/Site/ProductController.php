<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use App\Repositories\BrandRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $productRepository;
    private $brandRepository;
    private $categoryRepository;

    public function __construct(ProductRepository $productRepository,
                                BrandRepository $brandRepository,
                                CategoryRepository $categoryRepository)
    {
        $this->productRepository = $productRepository;
        $this->brandRepository = $brandRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function category($slug)
    {
        $category_id = extractId($slug);
        $category = $this->categoryRepository->findById($category_id);
        $products = $this->productRepository->findByCategoryId($category_id);
        return view('site.products.category.index',
            compact('category', 'products'));
    }

    public function brand($slug)
    {
        $brand_id = extractId($slug);
        $brand = $this->brandRepository->findById($brand_id);
        $products = $this->productRepository->findByBrandId($brand_id);
        return view('site.products.brand.index',
            compact('brand', 'products'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $products = $this->productRepository->search($keyword);
        return view('site.products.search.index',
            compact('keyword', 'products'));
    }

    public function single($slug)
    {
        $product_id = extractId($slug);
        $product=$this->productRepository->findById($product_id);
        return view('site.products.index', compact('product'));
    }
}
