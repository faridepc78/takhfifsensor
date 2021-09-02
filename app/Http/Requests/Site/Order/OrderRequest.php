<?php

namespace App\Http\Requests\Site\Order;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class OrderRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function prepareForValidation()
    {
        return $this->merge([
            'user_id' => Auth::id()
        ]);
    }

    public function rules()
    {
        return [
            'province_id' => ['required', 'exists:provinces,id'],
            'city_id' => ['required', 'exists:cities,id'],
            'address' => ['required', 'string'],
            'phone' => ['required', 'numeric', 'digits_between:10,20'],
            'g-recaptcha-response' => ['required', 'captcha']
        ];
    }

    public function attributes()
    {
        return [
            'province_id' => 'استان',
            'city_id' => 'شهر',
            'address' => 'آدرس',
            'phone' => 'تلفن ثابت'
        ];
    }

    public function messages()
    {
        return [
            'g-recaptcha-response.required' => 'فیلد ریکپچا الزامی است',
            'g-recaptcha-response.captcha' => 'لطفا فیلد ریکپچا را مجداد پر کنید'
        ];
    }
}
