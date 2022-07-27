<?php

namespace App\Http\Requests\Admin;

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
            'attachment' => 'nullable | mimes:docx,pdf,pptx,xlsx, png,jpg, mkv,mp4',
        ];
    }
}
