<?php

namespace App\Http\Controllers\Admin;
use App\Models\Media;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class galleryPostingController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'title' => 'required|string|max:255',
        'description' => 'nullable|string',
        'type' => 'required|in:photo,video',
        'media_url' => 'required|url',
        'thumbnail_url' => 'url'
    ]);

    Media::create([
        'title' => $request->title,
        'description' => $request->description,
        'type' => $request->type,
        'media_url' => $request->media_url,
        'thumbnail_url' => $request->thumbnail_url
    ]);

    return back()->with('success', 'Media uploaded successfully!');
}
  public function media()
    {

        $mediaItems = Media::latest()->get();
    return view('admin/galleryPosting', compact('mediaItems'));
    }
     public function destroy($id)
    {
        $media = Media::findOrFail($id);
        
        // Delete associated thumbnail file if exists
        if ($media->thumbnail) {
            \Storage::disk('public')->delete($media->thumbnail);
        }
        
        $media->delete();

        return back()->with('success', 'Media deleted successfully!');
    }
}
