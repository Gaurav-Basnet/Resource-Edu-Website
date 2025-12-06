@extends('master')
@section('title', 'SiteMap')
@section('content')

<div class="min-h-screen bg-gray-50 p-6">
  <div class="max-w-3xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-3xl font-bold text-gray-800 mb-6 text-center">Resource Education Hub Sitemap</h1>
    
    <div class="grid md:grid-cols-2 gap-6">
      <!-- Main Pages -->
      <div>
        <h2 class="text-xl font-semibold text-blue-700 mb-4 border-b pb-2">Main Pages</h2>
        <ul class="space-y-2">
          <li><a href="/" class="text-blue-600 hover:underline">Home</a></li>
          <li><a href="/about" class="text-blue-600 hover:underline">About Us</a></li>
          <li><a href="/services" class="text-blue-600 hover:underline">Our Services</a></li>
          <li><a href="/contact" class="text-blue-600 hover:underline">Contact Us</a></li>
        </ul>
      </div>
      
      <!-- Educational Resources -->
      <div>
        <h2 class="text-xl font-semibold text-blue-700 mb-4 border-b pb-2">Education Resources</h2>
        <ul class="space-y-2">
          <li><a href="/courses" class="text-blue-600 hover:underline">All Courses</a></li>
          <li><a href="/tutorials" class="text-blue-600 hover:underline">Tutorials</a></li>
        
        </ul>
      </div>
      
      <!-- Support -->
      <div>
        <h2 class="text-xl font-semibold text-blue-700 mb-4 border-b pb-2">Support</h2>
        <ul class="space-y-2">
          <li><a href="/faq" class="text-blue-600 hover:underline">FAQs</a></li>
          <li><a href="/help-center" class="text-blue-600 hover:underline">Help Center</a></li>
          <li><a href="/feedback" class="text-blue-600 hover:underline">Give Feedback</a></li>
        </ul>
      </div>
      
      <!-- Additional Pages -->
      <div>
        <h2 class="text-xl font-semibold text-blue-700 mb-4 border-b pb-2">More</h2>
        <ul class="space-y-2">
          <li><a href="/blog" class="text-blue-600 hover:underline">Blog</a></li>
          <li><a href="/gallery" class="text-blue-600 hover:underline">Gallery</a></li>
          <li><a href="/privacy-policy" class="text-blue-600 hover:underline">Privacy Policy</a></li>
        </ul>
      </div>
    </div>
  </div>
</div>

@endsection