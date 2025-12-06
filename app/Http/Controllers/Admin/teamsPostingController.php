<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Team;
class teamsPostingController extends Controller
{
     public function store(Request $request)
    {
        
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'bio' => 'nullable|string',
            'facebook' => 'nullable|url',
            'instagram' => 'nullable|url',
            'email' => 'nullable|email',
        ]);

        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('team', 'public');
        }

        Team::create([
            'name' => $validated['name'],
            'position' => $validated['position'],
            'image' => $imagePath,
            'bio' => $request->bio,
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'email' => $request->email,
        ]);

        
        return redirect()->back()->with('success', 'Team member added successfully!');
    }
     public function get()
    {
         $team = Team::latest()->get(); // Fetch all team members
     
         return view('admin/tem', compact('team'));
 
    }
 public function destroy($id)
{
    $team = Team::findOrFail($id);

    // Delete image from storage
    if ($team->image && \Storage::disk('public')->exists($team->image)) {
        \Storage::disk('public')->delete($team->image);
    }

    // Delete the database record
    $team->delete();

    return redirect()->back()->with('success', 'Resource deleted successfully.');
}


}


   