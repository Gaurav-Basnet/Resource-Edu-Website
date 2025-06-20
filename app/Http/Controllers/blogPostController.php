<?php

namespace App\Http\Controllers;
use App\Models\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    public function create()
    {
        return view('blog.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'           => 'required|string|max:255',
            'featured_image'  => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category'        => 'required|string|max:255',
            'content'         => 'required|string',
            'publish_date'    => 'required|date',
        ]);

        // Save the uploaded file
        $imagePath = $request->file('featured_image')->store('blog_images', 'public');

        BlogPost::create([
            'title'          => $request->title,
            'featured_image' => $imagePath,
            'category'       => $request->category,
            'content'        => $request->content,
            'publish_date'   => $request->publish_date,
            'is_popular'     => $request->has('is_popular'),
            'is_featured'     => $request->has('is_featured'),
        ]);
        
        return redirect()->back()->with('success', 'Blog post published successfully!');
    }


   


}

