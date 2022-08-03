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
        'code',
        'address',
        'type',
        'phone',
        'hotline',
        'province_code',
        'institution_code',
        'main_branch',
        'zip_code',
        'attribute_information_setting_date',
        'old_school_investigation_number',
        'facebook_url',
        'twitter_url',
        'youtube_url',
        'fax_number',
    ];
}
