<?php

namespace App\Http\Requests\Admin\Slider;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class StoreSliderRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check() == true && auth()->user()['role'] == User::ADMIN;
    }

    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255', 'unique:sliders,name'],
            'url' => ['required', 'url', 'unique:sliders,url'],
            'image' => ['required', 'mimes:jpg,png,jpeg', 'max:1024']
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'نام اسلایدر',
            'url' => 'لینک اسلایدر',
            'image' => 'تصویر اسلایدر'
        ];
    }
}
