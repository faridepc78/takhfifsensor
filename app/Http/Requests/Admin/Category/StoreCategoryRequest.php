<?php

namespace App\Http\Requests\Admin\Category;

use App\Models\User;
use App\Repositories\CategoryRepository;
use Illuminate\Foundation\Http\FormRequest;

class StoreCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check() == true && auth()->user()['role'] == User::ADMIN;
    }

    public function prepareForValidation()
    {
        $parent_id = request('parent_id');

        $categoryRepository = new CategoryRepository();
        $level = $categoryRepository->setLevel($parent_id);

        return $this->merge([
            'level' => $level,
            'slug' => str_slug_persian(request('slug'))
        ]);
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255', 'unique:categories,name'],
            'slug' => ['required', 'string', 'max:255', 'unique:categories,slug'],
            'parent_id' => ['nullable', 'exists:categories,id']
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'نام دسته بندی',
            'slug' => 'اسلاگ دسته بندی',
            'parent_id' => 'والد دسته بندی'
        ];
    }
}
