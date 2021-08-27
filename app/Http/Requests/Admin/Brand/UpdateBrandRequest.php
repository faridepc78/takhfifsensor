<?php

namespace App\Http\Requests\Admin\Brand;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdateBrandRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check() == true && auth()->user()['role'] == User::ADMIN;
    }

    public function prepareForValidation()
    {
        return $this->merge([
            'slug' => str_slug_persian(request('slug'))
        ]);
    }

    public function rules()
    {
        $id = request()->route('brand');

        return [
            'name' => ['required', 'string', 'max:255', 'unique:brands,name,' . $id],
            'slug' => ['required', 'string', 'max:255', 'unique:brands,slug,' . $id],
            'image' => ['nullable', 'mimes:jpg,png,jpeg', 'max:1024']
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'نام برند',
            'slug' => 'اسلاگ برند',
            'image' => 'تصویر برند'
        ];
    }
}
