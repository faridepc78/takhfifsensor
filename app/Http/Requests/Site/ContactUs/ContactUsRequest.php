<?php

namespace App\Http\Requests\Site\ContactUs;

use App\Rules\ValidationMobile;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class ContactUsRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function prepareForValidation()
    {
        if (Auth::check()) {
            return $this->merge([
                'user_id' => Auth::id()
            ]);
        }
    }

    public function rules()
    {
        if (Auth::check()) {
            return [
                'subject' => ['required', 'string', 'max:255'],
                'text' => ['required', 'string'],
                'g-recaptcha-response' => ['required', 'captcha']
            ];
        } else {
            return [
                'f_name' => ['required', 'string', 'max:255'],
                'l_name' => ['required', 'string', 'max:255'],
                'mobile' => ['required', 'numeric', 'digits:11', 'unique:users,mobile', new ValidationMobile()],
                'subject' => ['required', 'string', 'max:255'],
                'text' => ['required', 'string'],
                'g-recaptcha-response' => ['required', 'captcha']
            ];
        }
    }

    public function attributes()
    {
        return [
            'f_name' => 'نام',
            'l_name' => 'نام خانوادگی',
            'mobile' => 'تلفن همراه',
            'subject' => 'موضوع',
            'text' => 'پیام'
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
