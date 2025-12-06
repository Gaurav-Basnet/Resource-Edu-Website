<?php

namespace App\Http\Controllers\Admin;
use App\Models\BlogPost;
use App\Models\Resource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class blogPostingController extends Controller
{

    public function store(Request $request)
    {
        \Log::info(message: 'Blog store method hit!');
        $request->validate([
            'title' => 'required|string|max:255',
            'featured_image' => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'category' => 'required|string|max:255',
            'content' => 'required|string',
            'publish_date' => 'required|date',
        ]);

        // Save the uploaded file
        $imagePath = $request->file('featured_image')->store('blog_images', 'public');

        BlogPost::create([
            'title' => $request->title,
            'featured_image' => $imagePath,
            'category' => $request->category,
            'content' => $request->content,
            'publish_date' => $request->publish_date,
            'is_popular' => $request->has('is_popular'),
            'is_featured' => $request->has('is_featured'),
        ]);

        return redirect()->back()->with('success', 'Blog post published successfully!');
    }

    public function get()
    {

        $blogs = BlogPost::latest()->get();
        return view('admin.blogPosting', compact('blogs'));
    }
    public function destroy($id)
    {
        $post = BlogPost::findOrFail($id);

        // Delete the image file from storage
        if ($post->featured_image && Storage::disk('public')->exists($post->featured_image)) {
            Storage::disk('public')->delete($post->featured_image);
        }

        // Delete the post from the database
        $post->delete();

        return redirect()->back()->with('success', 'Post and its image deleted successfully.');
    }



}
