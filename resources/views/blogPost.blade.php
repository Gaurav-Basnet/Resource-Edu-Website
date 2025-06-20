@extends('master')
@section('title', 'Create Blog Post')
@section('content')

<section class="bg-white py-12">
  <div class="max-w-4xl mx-auto px-6 lg:px-20">
    <div class="bg-white rounded-xl shadow-md p-8">
      <h1 class="text-3xl font-bold text-gray-900 mb-6">Create New Blog Post</h1>
      
      <!-- Pure HTML form (no backend actions) -->
      <form class="space-y-6" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <!-- Post Title -->
        <div>
          <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Post Title*</label>
          <input type="text" id="title" name="title" required
                 class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                 placeholder="e.g. 10 Essential Tips for International Students">
        </div>

        <!-- Featured Image -->
        <div>
          <label for="featured_image" class="block text-sm font-medium text-gray-700 mb-1">Featured Image*</label>
          <input type="file" id="featured_image" name="featured_image" accept="image/*" required
                 class="w-full px-4 py-2 rounded-lg border border-gray-300 file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-sm file:font-semibold file:bg-purple-50 file:text-purple-700 hover:file:bg-purple-100">
        </div>

        <!-- Category -->
        <div>
          <label for="category" class="block text-sm font-medium text-gray-700 mb-1">Category*</label>
          <select id="category" name="category" required
                  class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent">
            <option value="">Select a category</option>
            <option value="IELTS">IELTS</option>
            <option value="Scholarships">Scholarships</option>
            <option value="Visa Guide">Visa Guide</option>
            <option value="Student Life">Student Life</option>
            <option value="Study Destinations">Study Destinations</option>
          </select>
        </div>

        <!-- Content -->
        <div>
          <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Post Content*</label>
          <textarea id="content" name="content" rows="8" required
                    class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent"
                    placeholder="Write your blog post content here..."></textarea>
        </div>



        <!-- Publish Date -->
        <div>
          <label for="publish_date" class="block text-sm font-medium text-gray-700 mb-1">Publish Date*</label>
          <input type="date" id="publish_date" name="publish_date" required
                 class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:ring-2 focus:ring-purple-600 focus:border-transparent">
        </div>

        <!-- Popular Post -->
     <div class="flex items-center">
          <input type="checkbox" id="is_popular" name="is_popular"
                 class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
          <label for="is_featured" class="ml-2 block text-sm text-gray-700">Mark as Popular Post</label>
        </div>
        <!-- Form Actions -->
        <div class="flex justify-end space-x-4 pt-6">
          <button type="reset"  class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">
            Reset Form
          </button>
          <button type="submit" class="px-6 py-3 bg-purple-800 hover:bg-purple-900 text-white font-medium rounded-lg shadow transition">
            Publish Post
          </button>
        </div>
      </form>
    </div>
  </div>
</section>

@endsection