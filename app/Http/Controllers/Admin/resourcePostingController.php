<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Resource;
class resourcePostingController extends Controller
{
       public function store(Request $request)
    {
        $request->validate([
            'pdf_name' => 'required|string|max:255',
            'link' => 'required|url',
            'category' => 'required|string',
            'section' => 'string',
        ]);

        Resource::create([
            'pdf_name' => $request->pdf_name,
            'link' => $request->link,
            'category' => $request->category,
            'section' => $request->section,
        ]);

        return redirect()->back()->with('success', 'Resource saved successfully.');
    }

    public function index()
    {
        $resources = Resource::latest()->get();
        $categories = Resource::select('category')->distinct()->pluck('category')->toArray();
        return view('admin.resource', compact('resources','categories'));
    }
    public function destroy($id)
    {
    $post = Resource::findOrFail($id);
    $post->delete();

    return redirect()->back()->with('success', 'Resource deleted successfully.');
    }
}
