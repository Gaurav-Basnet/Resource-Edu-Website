<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogPost extends Model
{
    use HasFactory;

 protected $fillable = [
    'title', 
    'featured_image', 
    'category', 
    'content', 
    'publish_date',
    'is_popular',
    'is_featured'
];
}