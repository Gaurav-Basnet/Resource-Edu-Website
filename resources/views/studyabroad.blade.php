@extends('master')
@section('title', 'Abroad')


@section('content')

<!-- Hero Section with Gradient & Animated Background -->
<section class="gsap relative overflow-hidden bg-gradient-to-br from-purple-900 to-indigo-800 text-white px-6 py-20 lg:px-20 text-center">
  <!-- Animated background elements -->
  <div class="absolute top-0 left-0 w-full h-full opacity-10">
    <div class="absolute top-20 left-10 w-40 h-40 rounded-full bg-purple-400 mix-blend-screen animate-float1"></div>
    <div class="absolute top-1/2 right-20 w-32 h-32 rounded-full bg-indigo-400 mix-blend-screen animate-float2"></div>
    <div class="absolute bottom-10 left-1/3 w-24 h-24 rounded-full bg-white mix-blend-screen animate-float3"></div>
  </div>
  
  <div class="relative max-w-4xl mx-auto">
    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight animate-fadeIn">
      Study Abroad with <span class="text-yellow-300">Confidence</span>
    </h1>
    <p class="text-xl md:text-2xl mb-8 opacity-90 animate-fadeIn delay-100">
      Discover your dream university with expert guidance and personalized support
    </p>
    <div class="animate-fadeIn delay-200">
      <a href="{{ 'appointment' }}" class="inline-block bg-yellow-400 hover:bg-yellow-300 text-purple-900 font-bold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        Get Free Counselling →
      </a>
    </div>
  </div>
</section>

<!-- Popular Destinations - Card Hover Effect -->
<section class="gsap py-16 bg-gray-50">
  <div class="max-w-full px-6 lg:px-20">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">
      Top <span class="text-purple-600">Study Destinations</span>
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      We help students get into top universities across these popular countries
    </p>
    
    <div class="grid grid-cols-2 md:grid-cols-4 gap-6">
      <!-- UK Card -->
      <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500 h-48">
        <img src="assests/images/uk.jpg" alt="UK" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent flex items-end p-4">
          <h3 class="text-white font-bold text-xl group-hover:text-yellow-300 transition">United Kingdom</h3>
        </div>
        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black/30">
          <a href="{{ 'uk' }}" class="px-4 py-2 bg-white text-purple-800 rounded-full font-medium">Explore →</a>
        </div>
      </div>
      
      <!-- USA Card -->
      <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500 h-48">
        <img src="https://blog.onevasco.com/wp-content/uploads/Reasons-to-Visit-USA.png" alt="USA" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent flex items-end p-4">
          <h3 class="text-white font-bold text-xl group-hover:text-yellow-300 transition">United States</h3>
        </div>
        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black/30">
          <a href="{{ 'usa' }}" class="px-4 py-2 bg-white text-purple-800 rounded-full font-medium">Explore →</a>
        </div>
      </div>
      
      <!-- Australia Card -->
      <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500 h-48">
        <img src="assests/images/australia.jpg" alt="Australia" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent flex items-end p-4">
          <h3 class="text-white font-bold text-xl group-hover:text-yellow-300 transition">Australia</h3>
        </div>
        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black/30">
          <a href="{{ 'australia' }}" class="px-4 py-2 bg-white text-purple-800 rounded-full font-medium">Explore →</a>
        </div>
      </div>
      
      <!-- Japan Card -->
      <div class="group relative overflow-hidden rounded-xl shadow-md hover:shadow-xl transition-all duration-500 h-48">
        <img src="assests/images/japan.jpg" alt="Japan" class="w-full h-full object-cover group-hover:scale-105 transition duration-700">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/40 to-transparent flex items-end p-4">
          <h3 class="text-white font-bold text-xl group-hover:text-yellow-300 transition">Japan</h3>
        </div>
        <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition duration-300 bg-black/30">
          <a href="{{ 'japan' }}" class="px-4 py-2 bg-white text-purple-800 rounded-full font-medium">Explore →</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Services Section with Icons -->
<section class="gsap py-16 bg-white">
  <div class=" max-w-full px-6 lg:px-20">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">
      Our <span class="text-purple-600">Premium Services</span>
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      Comprehensive support at every step of your study abroad journey
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <!-- Service 1 -->
      <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-purple-200 group">
        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6 group-hover:bg-purple-600 transition duration-300">
          <svg class="w-8 h-8 text-purple-600 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3">Application Assistance</h3>
        <p class="text-gray-600">We help you choose the right course and university with personalized guidance.</p>
      </div>
      
      <!-- Service 2 -->
      <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-purple-200 group">
        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6 group-hover:bg-purple-600 transition duration-300">
          <svg class="w-8 h-8 text-purple-600 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3">Visa Support</h3>
        <p class="text-gray-600">98% success rate with document preparation and mock visa interviews.</p>
      </div>
      
      <!-- Service 3 -->
      <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-purple-200 group">
        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6 group-hover:bg-purple-600 transition duration-300">
          <svg class="w-8 h-8 text-purple-600 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3">Test Preparation</h3>
        <p class="text-gray-600">IELTS, PTE, JLPT coaching with mock tests and score improvement strategies.</p>
      </div>
      
      <!-- Service 4 -->
      <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-2xl transition-all duration-300 border border-gray-100 hover:border-purple-200 group">
        <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mb-6 group-hover:bg-purple-600 transition duration-300">
          <svg class="w-8 h-8 text-purple-600 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3">Pre-departure</h3>
        <p class="text-gray-600">Travel tips, accommodation help, and cultural orientation for smooth transition.</p>
      </div>
    </div>
  </div>
</section>

<!-- Counselling CTA - Animated Section -->
<section id="counselling" class="gsap relative bg-purple-900 text-white px-6 lg:px-20 py-20 overflow-hidden">
  <!-- Background pattern -->
  <div class="absolute inset-0 opacity-10">
    <div class="absolute top-0 left-0 w-full h-full bg-repeat" style="background-image: url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI2MCIgaGVpZ2h0PSI2MCIgdmlld0JveD0iMCAwIDYwIDYwIj48Y2lyY2xlIGN4PSIzMCIgY3k9IjMwIiByPSIxMCIgZmlsbD0ibm9uZSIgc3Ryb2tlPSJyZ2JhKDI1NSwyNTUsMjU1LDAuMSkiIHN0cm9rZS13aWR0aD0iMiIvPjwvc3ZnPg==');"></div>
  </div>
  
  <div class="relative max-w-4xl mx-auto text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">
      Ready to Begin Your <span class="text-yellow-300">Global Journey</span>?
    </h2>
    <p class="text-xl mb-8 max-w-2xl mx-auto">
      Book a free counselling session with our expert advisors today
    </p>
    
    <div class="flex flex-col sm:flex-row justify-center gap-4">
      <a href="{{ 'appointment' }}" class="inline-flex items-center justify-center bg-yellow-400 hover:bg-yellow-300 text-purple-900 font-bold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        Book Free Session
        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg>
      </a>
      
      <a href="tel:+9779852082384" class="inline-flex items-center justify-center bg-transparent hover:bg-white/10 border-2 border-white text-white font-bold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
        </svg>
        Call Now
      </a>
    </div>
  </div>
</section>



@endsection 