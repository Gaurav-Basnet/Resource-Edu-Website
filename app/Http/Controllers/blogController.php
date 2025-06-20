<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogPost;

class blogController extends Controller
{
    public function index()
    {
        // Fetch all blogs ordered by date (latest first)
        $blogs = BlogPost::orderBy('created_at', 'desc')->get();

        // Fetch popular blogs
        $popularBlogs = BlogPost::where('is_popular', 1)
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();

        // Fetch featured blogs
        $featuredBlogs = BlogPost::where('is_featured', 1)
            ->orderBy('views', 'desc')
            ->take(5)
            ->get();

        // Pass all to view
        return view('blogs', compact('blogs', 'popularBlogs', 'featuredBlogs'));
    }

    public function show($id)
    {
        $blog = BlogPost::findOrFail($id); 
        return view('show', compact('blog'));
    }
}
