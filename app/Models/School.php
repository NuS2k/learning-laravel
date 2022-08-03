<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->hasMany(User::class);
    }

    protected $fillable = [
        'name',
        'email',
        'address',
        'type',
        'phone',
        'hotline',
        'province_code',
        'institution_code',
        'main_branch',
        'zip_code',
        'attribute_information_setting_date',
        'fax_number',
    ];
}
