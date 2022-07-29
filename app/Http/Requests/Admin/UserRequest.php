<?php

namespace App\Http\Requests\Admin;

use App\Rules\ValidateEmailUnique;
use App\Rules\ValidateNotStartWithNumber;
use Illuminate\Foundation\Http\FormRequest;

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
            'address' => 'required',
            'phone' => 'required|numeric',
        ];
    }
}
