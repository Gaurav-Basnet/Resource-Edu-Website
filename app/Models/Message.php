<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

     // ✅ Specify which fields can be mass assigned
    protected $fillable = [
        'name',
        'email',
        'phone',
        'country',
        'message',
    ];
}
