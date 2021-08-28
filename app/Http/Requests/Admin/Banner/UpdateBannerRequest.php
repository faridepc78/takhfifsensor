<?php

namespace App\Http\Requests\Admin\Banner;

use App\Models\Banner;
use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBannerRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check() == true && auth()->user()['role'] == User::ADMIN;
    }

    public function rules()
    {
        $id = request()->route('banner');

        return [
            'name' => ['required', 'string', 'max:255', 'unique:banners,name,' . $id],
            'url' => ['required', 'url', 'unique:banners,url,' . $id],
            'image' => ['nullable', 'mimes:jpg,png,jpeg', 'max:1024'],
            'type' => ['required', Rule::in(Banner::$types)]
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'نام بنر',
            'url' => 'لینک بنر',
            'image' => 'تصویر بنر',
            'type' => 'نوع بنر'
        ];
    }
}
