<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\Show\ShowCategoryRequest;
use App\Http\Requests\Admin\Category\StoreCategoryRequest;
use App\Http\Requests\Admin\Category\UpdateCategoryRequest;
use App\Repositories\CategoryRepository;
use Exception;

class CategoryController extends Controller
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $categories = $this->categoryRepository->paginate();
        return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        $getParents = $this->categoryRepository->getParents();
        return view('admin.categories.create', compact('getParents'));
    }

    public function store(StoreCategoryRequest $request)
    {
        try {
            $this->categoryRepository->store($request);
            newFeedback();
        } catch (Exception $exception) {
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('categories.create');
    }

    public function show($id)
    {
        $category = $this->categoryRepository->findById($id);

        if ($category['level'] == 1 || $category['level'] == 2) {
            $categories = $this->categoryRepository->getSubs($category['id']);
            return view('admin.categories.show', compact('categories', 'category'));
        } else {
            abort(404);
        }
    }

    public function edit($id)
    {
        $category = $this->categoryRepository->findById($id);
        $getParents = $this->categoryRepository->getParents();
        return view('admin.categories.edit', compact('category', 'getParents'));
    }

    public function update(UpdateCategoryRequest $request, $id)
    {
        try {
            $this->categoryRepository->update($request, $id);
            newFeedback();
        } catch (Exception $exception) {
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('categories.edit', $id);
    }

    public function destroy($id)
    {
        try {
            $category = $this->categoryRepository->findById($id);

            if ($category['level'] == 1) {
                if (count($category->sub)) {
                    newFeedback('پیام', 'این دسته بندی دارای زیر دسته است لطفا ابتدا زیر دسته ها را حذف کنید', 'warning');
                    return redirect()->route('categories.index');
                } else {
                    $category->delete();
                    newFeedback();
                    return redirect()->route('categories.index');
                }
            }

            if ($category['level'] == 2) {
                if (count($category->sub)) {
                    newFeedback('پیام', 'این دسته بندی دارای زیر دسته است لطفا ابتدا زیر دسته ها را حذف کنید', 'warning');
                    return redirect()->route('categories.index');
                } else {
                    $category->delete();
                    newFeedback();
                    return redirect()->route('categories.show', $category->parent->id);
                }
            }

            if ($category['level'] == 3) {
                $category->delete();
                newFeedback();
                return redirect()->route('categories.show', $category->parent->id);
            }
        } catch (Exception $exception) {
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('categories.index');
    }

    public function index_show()
    {
        $categories = $this->categoryRepository->getParents();
        $getShow = $this->categoryRepository->getShow();
        $array_selectShowCategories = $getShow->pluck('category_id')->toArray();
        return view('admin.categories.show.index',
            compact('categories', 'getShow', 'array_selectShowCategories'));
    }

    public function store_show(ShowCategoryRequest $request)
    {
        try {
            $this->categoryRepository->storeShow($request);
            newFeedback();
        } catch (Exception $exception) {
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('categories.index_show');
    }

    public function destroy_show($id)
    {
        try {
            $showCategory = $this->categoryRepository->findShowById($id);
            $showCategory->delete();
            newFeedback();
        } catch (Exception $exception) {
            newFeedback('پیام', 'عملیات با شکست مواجه شد', 'error');
        }
        return redirect()->route('categories.index_show');
    }
}
