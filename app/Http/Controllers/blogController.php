<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BlogPost;

class blogController extends Controller
{
    public function index()
    {
        // Fetch featured blogs
        $featuredBlogs = BlogPost::where('is_featured', 1)
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();

        // Fetch popular blogs
        $popularBlogs = BlogPost::where('is_popular', 1)
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();

        // Collect IDs of featured and popular blogs
        $excludedIds = $featuredBlogs->pluck('id')->merge($popularBlogs->pluck('id'))->unique();

        // Fetch all blogs excluding featured and popular ones
        $blogs = BlogPost::whereNotIn('id', $excludedIds)
            ->orderBy('created_at', 'desc')
            ->get();

        // Return view with all data
        return view('blogs', compact('blogs', 'popularBlogs', 'featuredBlogs'));
    }

    public function show($id)
    {
        $blog = BlogPost::findOrFail($id); 
        return view('show', compact('blog'));
    }
}
