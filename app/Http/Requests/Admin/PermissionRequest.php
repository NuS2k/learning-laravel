<?php

namespace App\Http\Requests\Admin;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class PermissionRequest extends FormRequest
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
                Rule::unique('permissions')->ignore($this->permission)
            ],

            'key' => [
                'required',
                Rule::unique('permissions')->ignore($this->permission)
            ],

            'permission_group_id' => [
                'required',
                Rule::exists('permission_groups', 'id'),
            ],
        ];
    }
}
