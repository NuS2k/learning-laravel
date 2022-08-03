<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    public function sender()
    {
        return $this->belongsTo(User::class);
    }

    protected $fillable = [
        'room',
        'sender_id',
        'sender_type',
        'receiver_id',
        'receiver_type',
        'content',
        'content_type',
        'association_id',
        'association_type',
    ];
}
