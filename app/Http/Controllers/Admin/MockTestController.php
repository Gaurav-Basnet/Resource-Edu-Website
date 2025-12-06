<?php

namespace App\Http\Controllers\Admin;

use App\Models\MockQuestion;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
;
use App\Imports\MockTestImport;
use Maatwebsite\Excel\Facades\Excel;

class MockTestController extends Controller
{
    public function uploadForm()
    {
        return view('admin.upload-mock');
    }

    public function uploadExcel(Request $request)
    {
        $request->validate([
            'excel_file' => 'required|mimes:xlsx,xls',
        ]);

        Excel::import(new MockTestImport, $request->file('excel_file'));

        return back()->with('success', 'Mock test questions uploaded successfully!');
    }

    public function index()
    {
        $questions = MockQuestion::latest()->get(); // Fetch all team members
        return view('admin.upload-mock', compact('questions'));
    }
    public function deleteqn($id)
    {
        $post = MockQuestion::findOrFail($id);
        $post->delete();

        return redirect()->back()->with('success', 'Post deleted successfully.');
    }
}
