<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    public function roles()
    {
        return $this->hasMany(Role::class);
    }
    public function users()
    {
        return $this->hasMany(User::class);
    }

    protected $fillable = [
        'id',
        'name',
        'mkh',
        'age',
        'address',
        'note',
        'phone',
        'cmnd',
        'bank',
        'role_id',
        'sex',
        'birthday',
        'user_id',
    ];
}
