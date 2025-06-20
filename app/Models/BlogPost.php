<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'content',
        'featured_image',
        'author_name',
        'publish_date',
        'is_featured',
        'is_popular',
        'category'
    ];

    protected $dates = ['publish_date'];
}