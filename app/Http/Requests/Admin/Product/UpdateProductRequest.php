<?php

namespace App\Http\Requests\Admin\Product;

use App\Models\Product;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check() == true && auth()->user()['role'] == User::ADMIN;
    }

    public function prepareForValidation()
    {
        return $this->merge([
            'slug' => str_slug_persian(request('slug')),
            'price' => str_replace(',', '', request('price')),
            'count' => str_replace(',', '', request('count'))
        ]);
    }

    public function rules()
    {
        $id = request()->route('product');

        return [
            'name' => ['required', 'string', 'max:255', 'unique:products,name,' . $id],
            'slug' => ['required', 'string', 'max:255', 'unique:products,slug,' . $id],
            'category_id' => ['required', 'exists:categories,id'],
            'brand_id' => ['required', 'exists:brands,id'],
            'image' => ['nullable', 'mimes:jpg,png,jpeg', 'max:1024'],
            'price' => ['required', 'numeric', 'min:1000'],
            'discount' => ['nullable', 'numeric', 'between:1,100'],
            'feature' => ['required', 'string'],
            'text' => ['required', 'string'],
            'count' => ['required', 'numeric', 'min:1'],
            'status' => ['required', Rule::in(Product::$statuses)]
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'نام محصول',
            'slug' => 'اسلاگ محصول',
            'category_id' => 'دسته بندی محصول',
            'brand_id' => 'برند محصول',
            'image' => 'تصویر محصول',
            'price' => 'قیمت محصول',
            'discount' => 'درصد تخفیف محصول',
            'feature' => 'ویژگی های محصول',
            'text' => 'توضیحات محصول',
            'count'=>'تعداد موجودی محصول',
            'status' => 'وضعیت محصول'
        ];
    }
}
