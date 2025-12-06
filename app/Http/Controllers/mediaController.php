<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Media;
use Illuminate\Support\Facades\Storage;

class mediaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title'        => 'required|string|max:255',
            'description'  => 'nullable|string',
            'type'         => 'required|in:photo,video',
            'media_url'    => 'required|url',
            'thumbnail'    => 'nullable|image|mimes:jpg,jpeg,png|max:2048', // max 2MB
        ]);

        $thumbnailPath = null;

        if ($request->hasFile('thumbnail')) {
            $thumbnailPath = $request->file('thumbnail')->store('thumbnails', 'public');
        }

        Media::create([
            'title'        => $request->title,
            'description'  => $request->description,
            'type'         => $request->type,
            'media_url'    => $request->media_url,
            'thumbnail'    => $thumbnailPath,
        ]);

        return back()->with('success', 'Media uploaded successfully!');
    }

    public function media()
    {
        $photos = Media::where('type', 'photo')->latest()->get();
        $videos = Media::where('type', 'video')->latest()->get();

        return view('gallery', compact('photos', 'videos'));
    }
}
