<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    public function school()
    {
        return $this->belongsTo(School::class);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function tags()
    {
        return $this->morphedToMany(Tag::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }

    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'address',
        'parent_id',
        'school_id',
        'parent_id',
        'social_id',
        'social_name',
        'user_id',
        'role_id',
    ];
}
