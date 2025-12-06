<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Testimonial;
use Illuminate\Support\Facades\Storage; 

class testemonialsPostingController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'title' => 'nullable|string',
            'message' => 'required',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('testimonials', 'public');
            $validated['image'] = $path;
        }

        Testimonial::create($validated);

        return redirect()->back()->with('success', 'Testimonial submitted successfully!');
    }

    
    public function index()
    {
         $testimonials = Testimonial::latest()->get(); // Fetch all team members
         return view('admin.testemonials' , compact('testimonials'));
    }
    
public function destroy($id)
{
    $testimonial = Testimonial::findOrFail($id);

    // Delete the image from storage if it exists
    if ($testimonial->image && Storage::disk('public')->exists($testimonial->image)) {
        Storage::disk('public')->delete($testimonial->image);
    }

    // Delete the database record
    $testimonial->delete();

    return redirect()->back()->with('success', 'Resource deleted successfully.');
}
}

