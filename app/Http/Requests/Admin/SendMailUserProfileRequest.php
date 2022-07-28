<?php

namespace App\Http\Requests\Admin;

use App\Rules\ValidateNoExeFile;
use Illuminate\Foundation\Http\FormRequest;

class SendMailUserProfileRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'mail' => 'required',
            'attachment' => [
                'nullable',
                new ValidateNoExeFile(),
            ],
        ];
    }
}
