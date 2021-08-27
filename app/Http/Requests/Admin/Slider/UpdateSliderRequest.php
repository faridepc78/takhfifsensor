<?php

namespace App\Http\Requests\Admin\Slider;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UpdateSliderRequest extends FormRequest
{
    public function authorize()
    {
        return auth()->check() == true && auth()->user()['role'] == User::ADMIN;
    }

    public function rules()
    {
        $id = request()->route('slider');

        return [
            'name' => ['required', 'string', 'max:255', 'unique:sliders,name,' . $id],
            'url' => ['required', 'url', 'unique:sliders,url,' . $id],
            'image' => ['nullable', 'mimes:jpg,png,jpeg', 'max:1024']
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
