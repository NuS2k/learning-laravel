<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use App\Rules\ValidateNotStartWithNumber;
use App\Rules\ValidateEmailUnique;

class UserRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => [
                'required',
                'min:2',
                'not_regex:/^[@#$%&*]/',
                new ValidateNotStartWithNumber(),
            ],
            'email' => [
                'required',
                'email',
                'not_regex:/^[root]/',
                new ValidateEmailUnique(),
            ],
            'password' => [
                'required',
                'min:8',
                'regex:/^(?=.*[a-z])(?=.*[!@#$%^&"*()\-_=+{};:,<.>]).{8,255}+$/',
                'confirmed',
            ],
            'fblink' => 'url',  
            'ytlink' => 'url',
        ];
    }
}