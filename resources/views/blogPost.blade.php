@extends('master')
@section('title', 'Create Blog Post')
@section('content')

  <section class="bg-white py-12">
    <div class="max-w-4xl mx-auto px-6 lg:px-20">
    <div class="bg-white rounded-xl shadow-md p-8">
      <h1 class="text-3xl font-bold text-gray-900 mb-6">Create New Blog Post</h1>

      <!-- Blog Post Form -->
      <form id="blogForm" class="space-y-6" action="{{ route('blog.store') }}" method="POST"
      enctype="multipart/form-data">
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
        <label for="blog_category" class="block text-sm font-medium text-gray-700 mb-1">Category*</label>
        <select id="blog_category" name="category" required
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

      <!-- Publish Date (hidden input + display only) -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-1">Publish Date</label>
        <div class="w-full px-4 py-3 rounded-lg bg-gray-100">
        {{ now()->format('Y-m-d') }}
        </div>
        <input type="hidden" name="publish_date" value="{{ now()->format('Y-m-d') }}">
      </div>

      <!-- Popular Post -->
      <div class="flex items-center">
        <input type="checkbox" id="is_popular" name="is_popular"
        class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
        <label for="is_popular" class="ml-2 block text-sm text-gray-700">Mark as Popular Post</label>
      </div>

      <!-- Featured Post -->
      <div class="flex items-center">
        <input type="checkbox" id="is_featured" name="is_featured"
        class="h-4 w-4 text-purple-600 focus:ring-purple-500 border-gray-300 rounded">
        <label for="is_featured" class="ml-2 block text-sm text-gray-700">Mark as Featured Post</label>
      </div>

      <!-- Form Actions -->
      <div class="flex justify-end space-x-4 pt-6">
        <button type="button" onclick="resetForm()"
        class="px-6 py-3 border border-gray-300 rounded-lg text-gray-700 hover:bg-gray-50 transition">
        Reset Form
        </button>
        <button type="submit"
        class="px-6 py-3 bg-purple-800 hover:bg-purple-900 text-white font-medium rounded-lg shadow transition">
        Publish Post
        </button>
      </div>
      </form>

      <!-- Resource Download Form -->
      <div class="mt-12 pt-8 border-t border-gray-200">
      <h2 class="text-2xl font-bold text-gray-900 mb-6">Add New Resource</h2>

      <form id="resourceForm" action="{{ route('resources.store') }}" method="POST" enctype="multipart/form-data"
        class="space-y-4">
        @csrf

        <div>
        <label for="pdf_name" class="block text-sm font-medium text-gray-700">PDF Name*</label>
        <input type="text" name="pdf_name" id="pdf_name" required
          class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent">
        </div>

        <div>
        <label for="link" class="block text-sm font-medium text-gray-700">PDF Link*</label>
        <input type="text" name="link" id="link" required
          class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent">
        </div>

        <div>
        <label for="resource_category" class="block text-sm font-medium text-gray-700">Category*</label>
        <select name="category" id="resource_category" required
          class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent">
          <option value="">-- Select Category --</option>
          <option value="IELTS Academic">IELTS Academic</option>
          <option value="IELTS General">IELTS General</option>
          <option value="IELTS UKVI">IELTS UKVI</option>
          <option value="IELTS A1/B1">LifeSkill A1/B1</option>
          <option value="General">General</option>
          <option value="English">English</option>
        </select>
        </div>

        <div>
        <label for="section" class="block text-sm font-medium text-gray-700">Section*</label>
        <select name="section" id="section" required
          class="w-full px-4 py-2 rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent">
          <option value="">-- Select Section --</option>
          <option value="Listening">Listening</option>
          <option value="Reading">Reading</option>
          <option value="Writing">Writing</option>
          <option value="Speaking">Speaking</option>

        </select>
        </div>

        <div class="flex justify-end pt-4">
        <button type="submit"
          class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow transition">
          Save Resource
        </button>
        </div>
      </form>
      </div>
    </div>
    </div>
    <!-- Form for gallery  -->
    <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6 px-10">
    @csrf

    <!-- Title -->
    <div>
      <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
      <input type="text" name="title" id="title" required
      class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
    </div>

    <!-- Description -->
    <div>
      <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
      <textarea name="description" id="description" rows="3"
      class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
    </div>


    <!-- Media Type -->
    <div>
      <label for="type" class="block text-sm font-medium text-gray-700">Media Type</label>
      <select name="type" id="type" required
      class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
      <option value="photo" class="">Photo</option>
      <option value="video">Video</option>
      </select>
    </div>
    <!-- URL Input -->
    <div class="mt-4">
      <label for="media_url" class="block text-sm font-medium text-gray-700">Media URL</label>
      <input type="url" name="media_url" id="media_url" required
      class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
      placeholder="https://example.com/ or https://youtube.com/watch?v=...">
    </div>

    <!-- Thumbnail URL -->
    <div class="mt-4" id="thumbnail-input">
      <label for="thumbnail_url" class="block text-sm font-medium text-gray-700">Thumbnail URL (only for videos)</label>
      <input type="url" name="thumbnail_url" id="thumbnail_url"
      class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
      placeholder="https://example.com/thumbnail.jpg">
    </div>

    <!-- Submit Button -->
    <div>
      <button type="submit"
      class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
      Upload Media
      </button>
    </div>
    </form>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
    const blogForm = document.getElementById('blogForm');
    const resetForm = () => {
      blogForm.reset();
      document.getElementById('blog_category').selectedIndex = 0;
      document.getElementById('is_popular').checked = false;
      document.getElementById('is_featured').checked = false;
      document.getElementById('featured_image').value = '';
    };

    const resourceCategory = document.getElementById('resource_category');
    const sectionSelect = document.getElementById('section');

    function updateSectionOptions(category) {
      // Clear existing options
      sectionSelect.innerHTML = '';

      if (category === 'General') {
      sectionSelect.disabled = true;
      sectionSelect.required = false;
      } else {
      sectionSelect.disabled = false;
      sectionSelect.required = true;

      let options = [];

      if (category === 'English') {
        options = ['Basic', 'Intermediate', 'Advanced'];
      } else {
        options = ['Listening', 'Reading', 'Writing', 'Speaking'];
      }

      // Add a default option
      const defaultOption = document.createElement('option');
      defaultOption.value = '';
      defaultOption.textContent = '-- Select Section --';
      sectionSelect.appendChild(defaultOption);

      // Add new options
      options.forEach(function (opt) {
        const option = document.createElement('option');
        option.value = opt;
        option.textContent = opt;
        sectionSelect.appendChild(option);
      });
      }
    }

    // Initial setup
    updateSectionOptions(resourceCategory.value);

    // Listen for category change
    resourceCategory.addEventListener('change', function () {
      updateSectionOptions(this.value);
    });

    const mediaUrlInput = document.getElementById('media_url');
    const mediaTypeSelect = document.getElementById('type');

    mediaUrlInput.addEventListener('input', function () {
      const url = this.value.toLowerCase();

      // Check for common video extensions/domains
      if (url.match(/\.(mp4|mov|avi|webm)$/) ||
      url.includes('youtube.com') ||
      url.includes('youtu.be') ||
      url.includes('vimeo.com')) {
      mediaTypeSelect.value = 'video';
      }
      // Default to photo for other URLs
      else if (url.match(/\.(jpg|jpeg|png|gif|webp|bmp)$/)) {
      mediaTypeSelect.value = 'photo';
      }
    });
    });


  </script>


@endsection