<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Resource Edu | @yield('title', 'Resource Education')</title>
  <link rel="stylesheet" href="src/output.css">

  <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
  <!-- Add Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="assests/js/index.js"></script>
  <script src="assests/js/about.js"></script>
  <script src="assests/js/nav.js"></script>
  <!-- <script src="assests/js/animation.js"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js"></script>


  <!-- Load GSAP in your HTML head or before closing body tag -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/gsap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.4/ScrollTrigger.min.js"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <style>

  </style>
</head>


<body class="bg-white">
  @if(session('success'))
<div id="errorBox" class="error-message">
    {{ session('success') }}
</div>
@endif

@if(session('error'))
    <div id="errorBox" class="error-message">
        {{ session('error') }}
    </div>
@endif
 <!-- code for loader -->
<div class="round-loader-container" id="loader">
  <div class="round-loader">
    <!-- Outer animated rings -->
    <div class="loader-ring"></div>
    <div class="loader-ring"></div>
    <div class="loader-ring"></div>
    <!-- Inner static/pulsing circle -->
    <div class="loader-inner-circle"></div>
  </div>
  <div class="loader-text">Loading...</div>
</div>


  <!-- contact bar -->
  <div class="w-full bg-[#510585] text-white px-6 lg:px-20 py-2">
    <div class="flex flex-col md:flex-row items-center justify-between gap-2 text-sm">

      <!-- Contact Info -->
      <div class="flex items-center gap-4">
        <a href="mailto:info@resourceeduhub.com" class="hover:underline flex items-center gap-1">
          <svg width="12" height="12" class="h-4 w-4" viewBox="0 0 24 24" fill="none"
            xmlns="http://www.w3.org/2000/svg">
            <path
              d="M2 6C2 4.89543 2.89543 4 4 4H20C21.1046 4 22 4.89543 22 6V18C22 19.1046 21.1046 20 20 20H4C2.89543 20 2 19.1046 2 18V6Z"
              stroke="white" stroke-width="2" fill="none" />
            <path d="M22 6L12 13L2 6" stroke="white" stroke-width="2" fill="none" />
          </svg>

          info@resourceeduhub.com
        </a>
        <a href="tel:+9779852082384" class="hover:underline flex items-center gap-1">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-white" fill="none" viewBox="0 0 24 24"
            stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
              d="M3 5a2 2 0 012-2h3.6a1 1 0 01.95.68l1.2 3.6a1 1 0 01-.24 1.06L9.8 10.2a11.05 11.05 0 005 5l1.86-1.86a1 1 0 011.06-.24l3.6 1.2a1 1 0 01.68.95V19a2 2 0 01-2 2h-.2C7.61 21 3 16.39 3 10.2V10a2 2 0 010-.2V5z" />
          </svg>
          <span class="md:block hidden">025-590684 |</span>9852082384
        </a>
      </div>

      <!-- Social Icons -->
      <div class="flex items-center gap-3">

        <a href="" class="hover:text-gray-300">
          <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
            <path
              d="M12 2.04c-5.5 0-9.96 4.46-9.96 9.96 0 4.4 3.57 8.14 8.15 8.79v-6.2H8.1v-2.6h2.09V9.58c0-2.07 1.23-3.22 3.11-3.22.9 0 1.84.16 1.84.16v2.02h-1.04c-1.03 0-1.35.64-1.35 1.3v1.56h2.3l-.37 2.6h-1.93v6.2c4.58-.65 8.15-4.39 8.15-8.79 0-5.5-4.46-9.96-9.96-9.96z" />
          </svg>
        </a>
        <a href="#" class="hover:text-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="w-5 h-5">
            <path
              d="M16.003 2.001c-7.732 0-14 6.268-14 14 0 2.476.645 4.894 1.87 7.032L2 30l7.197-1.843a13.94 13.94 0 006.806 1.739h.001c7.732 0 14-6.268 14-14s-6.267-14-14-14zm.002 25.5a11.49 11.49 0 01-5.786-1.544l-.414-.24-4.27 1.092 1.14-4.163-.269-.428A11.47 11.47 0 014.5 16c0-6.341 5.16-11.5 11.503-11.5 6.34 0 11.5 5.159 11.5 11.5s-5.16 11.5-11.498 11.5zm6.26-8.698c-.342-.171-2.03-1-2.346-1.112-.314-.114-.543-.17-.773.17-.23.342-.886 1.113-1.085 1.342-.199.228-.398.256-.74.085-.343-.17-1.45-.534-2.761-1.701-1.02-.909-1.71-2.031-1.91-2.372-.199-.342-.021-.526.15-.697.154-.153.343-.399.514-.599.17-.2.228-.342.343-.57.114-.228.057-.427-.028-.599-.085-.171-.773-1.867-1.06-2.555-.28-.672-.563-.58-.773-.591-.2-.01-.427-.012-.656-.012s-.599.085-.914.427c-.314.342-1.2 1.17-1.2 2.844 0 1.673 1.229 3.291 1.4 3.52.171.228 2.42 3.694 5.867 5.179.82.354 1.462.566 1.96.726.823.262 1.57.225 2.16.137.659-.098 2.03-.83 2.317-1.63.286-.799.286-1.484.2-1.63-.085-.142-.313-.227-.656-.399z" />
          </svg>

        </a>
        <a href="#" class="hover:text-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
            <path
              d="M21,7V9a1,1,0,0,1-1,1,8,8,0,0,1-4-1.08V15.5A6.5,6.5,0,1,1,6.53,9.72a1,1,0,0,1,1.47.9v2.52a.92.92,0,0,1-.28.62,2.49,2.49,0,0,0,2,4.23A2.61,2.61,0,0,0,12,15.35V3a1,1,0,0,1,1-1h2.11a1,1,0,0,1,1,.83A4,4,0,0,0,20,6,1,1,0,0,1,21,7Z" />
          </svg>
        </a>
      </div>

    </div>
  </div>

  <!-- nav bar -->
  <nav id="main-nav" class="bg-white shadow-sm sticky top-0 md:top-0 transition-transform duration-300 z-30">

    <div class="max-w-full  px-6  lg:px-20">
      <div class="flex justify-between items-center h-16">

        <!-- Logo -->
        <div class=" flex-shrink-0 ">
          <a href="/"><img class="h-14 w-auto" src="assests/images/logo.png" alt="Logo" /></a>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden md:flex space-x-8 items-center">

          <a href="/" class="nav-link text-purple-700 font-medium hover:text-purple-900 px-3 py-2 relative group">
            Home
            <span
              class=" nav-underline absolute bottom-0 left-0 w-0 h-0.5 bg-purple-700 group-hover:w-full transition-all duration-300"></span>
          </a>
          <a href="{{'about'}}"
            class="nav-link text-purple-700 font-medium hover:text-purple-900 px-3 py-2 relative group">
            About
            <span
              class="nav-underline absolute bottom-0 left-0 w-0 h-0.5 bg-purple-700 group-hover:w-full transition-all duration-300"></span>
          </a>


          <a href="{{'services'}}"
            class="nav-link text-purple-700 font-medium hover:text-purple-900 px-3 py-2 relative group">
            Service
            <span
              class="nav-underline absolute bottom-0 left-0 w-0 h-0.5 bg-purple-700 group-hover:w-full transition-all duration-300"></span>
          </a>

          <!-- Dropdown -->
          <div class="relative group">
            <button class=" text-purple-700 font-medium hover:text-purple-900 px-3 py-2 flex items-center">
              <a href="{{ 'studyabroad' }}"
                class="nav-link text-purple-700 font-medium hover:text-purple-900 px-0 py-2 relative group">
                Study Abroad
                <span
                  class=" nav-underline absolute bottom-0 left-0 w-0 h-0.5 bg-purple-700 group-hover:w-full transition-all duration-300"></span>
              </a>
              <svg class="ml-0 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                  d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                  clip-rule="evenodd" />
              </svg>
            </button>
            <div
              class="absolute left-0 mt-2 w-48 bg-white rounded-md shadow-lg py-1 z-10 opacity-0 invisible group-hover:opacity-100 group-hover:visible dropdown-transition">
              <a href="{{ 'australia' }}"
                class="block px-4 py-2 text-sm text-purple-700 hover:bg-purple-50">Australia</a>
              <a href="{{ 'canada' }}" class="block px-4 py-2 text-sm text-purple-700 hover:bg-purple-50">Canada</a>
              <a href="{{ 'uk' }}" class="block px-4 py-2 text-sm text-purple-700 hover:bg-purple-50">UK</a>
              <a href="{{ 'usa' }}" class="block px-4 py-2 text-sm text-purple-700 hover:bg-purple-50">USA</a>
              <a href="{{ 'japan' }}" class="block px-4 py-2 text-sm text-purple-700 hover:bg-purple-50">Japan</a>
              <a href="{{ 'south_korea' }}" class="block px-4 py-2 text-sm text-purple-700 hover:bg-purple-50">South
                Korea</a>
              <a href="{{ 'european' }}" class="block px-4 py-2 text-sm text-purple-700 hover:bg-purple-50">European
                Countries</a>
            </div>
          </div>
          <a href="{{ 'contact' }}"
            class="nav-link text-purple-700 font-medium hover:text-purple-900 px-3 py-2 relative group">
            Contact
            <span
              class="nav-underline absolute bottom-0  left-0 w-0 h-0.5 bg-purple-700 group-hover:w-full transition-all duration-300"></span>
          </a>
          <a href="{{'blogs'}}"
            class="nav-link text-purple-700 font-medium hover:text-purple-900 px-3 py-2 relative group">
            Blog
            <span
              class="nav-underline absolute bottom-0  left-0 w-0 h-0.5 bg-purple-700 group-hover:w-full transition-all duration-300"></span>
          </a>
        </div>

        <!-- Login Button (Desktop) -->
        <div class="hidden md:block">
          <a href="{{ 'login' }}">
            <button
              class="ml-4 border border-purple-700 text-purple-700 px-4 py-1.5 rounded-md hover:bg-purple-700 hover:text-white transition-colors duration-300">
              Login
            </button></a>
        </div>

        <!-- Mobile Menu Button -->
        <div class="md:hidden flex items-center">
          <button id="menu-btn"
            class="inline-flex items-center justify-center p-2 rounded-md text-purple-700 hover:text-purple-900 focus:outline-none">
            <!-- Hamburger Icon -->
            <svg id="menu-icon" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <!-- Close Icon -->
            <svg id="close-icon" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu -->
    <div id="mobile-menu" class="mobile-menu bg-white md:hidden px-4 pb-3">
      <div class="pt-2 pb-3 space-y-1">
        <a href="/" class="block px-3 py-2 text-base font-medium text-purple-700 hover:bg-purple-50 rounded-md">Home</a>
        <a href="{{'about'}}"
          class="block px-3 py-2 text-base font-medium text-purple-700 hover:bg-purple-50 rounded-md">About</a>
        <a href="{{'services'}}"
          class="block px-3 py-2 text-base font-medium text-purple-700 hover:bg-purple-50 rounded-md">Services</a>


        <!-- Dropdown for Mobile -->
        <div>
          <button id="mobile-dropdown-btn"
            class="w-full text-left px-3 py-2 text-base font-medium text-purple-700 hover:bg-purple-50 rounded-md flex justify-between items-center">
            Study Abroad
            <svg id="dropdown-icon" class="ml-2 h-4 w-4 transform transition-transform duration-200"
              xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd"
                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                clip-rule="evenodd" />
            </svg>
          </button>
          <div id="mobile-dropdown" class="pl-5 mt-1 hidden space-y-1">
            <a href="{{ 'australia' }}"
              class="block px-3 py-2 text-sm text-purple-700 hover:bg-purple-50 rounded-md">Australia</a>
            <a href="{{ 'canada' }}"
              class="block px-3 py-2 text-sm text-purple-700 hover:bg-purple-50 rounded-md">Canada</a>
            <a href="{{ 'uk' }}" class="block px-3 py-2 text-sm text-purple-700 hover:bg-purple-50 rounded-md">UK</a>
            <a href="{{ 'usa' }}" class="block px-3 py-2 text-sm text-purple-700 hover:bg-purple-50 rounded-md">USA</a>
            <a href="{{ 'japan' }}"
              class="block px-3 py-2 text-sm text-purple-700 hover:bg-purple-50 rounded-md">Japan</a>
          </div>
        </div>
        <a href="{{'contact'}}"
          class="block px-3 py-2 text-base font-medium text-purple-700 hover:bg-purple-50 rounded-md">Contact</a>
        <a href="{{'blogs'}}"
          class="block px-3 py-2 text-base font-medium text-purple-700 hover:bg-purple-50 rounded-md">Blogs</a>
      </div>
      <div class="pt-2 pb-2 border-t border-gray-200">
      <a href="{{'login'}}"> 
      <button
          class="w-full flex justify-center items-center px-4 py-2 border border-purple-700 text-sm font-medium rounded-md text-purple-700 bg-white hover:bg-purple-700 hover:text-white transition-colors duration-300">
          Login
        </button>
</a> 
      </div>
    </div>
  </nav>
  <main>
    666*6
  <img src="assests/images/1university.png" alt="">
<div class="max-w-full  px-6 lg:px-20 py-10">
    <!-- Blog Title -->
    <h1 class="text-4xl font-bold text-gray-800 mb-6 leading-tight tracking-tight">{{ $blog->title }}</h1>
    
    <!-- Featured Image -->
    <div class="mb-8 h-96 rounded-lg overflow-hidden shadow-md border border-gray-100">
        <img 
            src="{{ asset('storage/' . $blog->featured_image) }}" 
            alt="Blog Image" 
            class="w-full h-full  object-fit"
        >
    </div>
  
    <!-- Blog Content -->
    <div class="text-gray-700 text-lg leading-relaxed space-y-6">
        @foreach(explode("\n", $blog->content) as $paragraph)
            <p class="mb-6 text-justify">{{ $paragraph }}</p>
        @endforeach
    </div>

    <!-- Optional Back Button --> 
    <div class="mt-12">
        <a href="{{ url()->previous() }}" class="inline-flex items-center text-blue-600 hover:text-blue-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Back to Articles
        </a>
    </div>
</div>



</main>




  <!-- //footer -->
  <footer class=" gsap bg-gradient-to-b from-purple-900 to-purple-800 text-white pt-12 pb-8 px-6 lg:px-20">
    <div class="max-w-7xl mx-auto">
      <!-- Main Footer Content -->
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-10 mb-12">
        <!-- Logo and About -->
        <div class="space-y-4">
          <h3 class="text-2xl font-bold flex items-center">
            <span class="bg-white text-purple-800 rounded-full p-2 flex items-center  justify-center">
              <img src="assests/images/logo.png" alt="" class="w-10 h-10 object-cover ">

            </span>
            <span class="px-2">Resource Edu.</span>
          </h3>
          <p class="text-purple-200 text-sm leading-relaxed">
            Empowering students worldwide with quality education resources and study abroad opportunities since 2020
          </p>
          <div class="flex space-x-4 pt-2">
            <a href="https://www.facebook.com/resourceeducationhub/"
              class="text-purple-200 hover:text-white transition-colors duration-300">
              <span class="sr-only">Facebook</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                  clip-rule="evenodd" />
              </svg>
            </a>
            <a href="#" class="text-purple-200 hover:text-white transition-colors duration-300">
              <span class="sr-only">Instagram</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                  clip-rule="evenodd" />
              </svg>
            </a>
            <a href="#" class="text-purple-200 hover:text-white transition-colors duration-300">
              <span class="sr-only">Twitter</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path
                  d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
              </svg>
            </a>
            <a href="#" class="text-purple-200 hover:text-white transition-colors duration-300">
              <span class="sr-only">LinkedIn</span>
              <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path fill-rule="evenodd"
                  d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"
                  clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>

        <!-- Quick Links -->
        <div class="space-y-4">
          <h3 class="text-lg font-bold uppercase tracking-wider">Quick Links</h3>
          <ul class="space-y-2">
            <li><a href="#" class="text-purple-200 hover:text-white transition-colors duration-300">Home</a></li>
            <li><a href="#" class="text-purple-200 hover:text-white transition-colors duration-300">About Us</a></li>
            <li><a href="#" class="text-purple-200 hover:text-white transition-colors duration-300">Services</a></li>
            <li><a href="#" class="text-purple-200 hover:text-white transition-colors duration-300">Study
                Destinations</a></li>
            <li><a href="#" class="text-purple-200 hover:text-white transition-colors duration-300">Testimonials</a>
            </li>
            <li><a href="#" class="text-purple-200 hover:text-white transition-colors duration-300">Contact</a></li>
          </ul>
        </div>

        <!-- Study Destinations -->
        <div class="space-y-4">
          <h3 class="text-lg font-bold uppercase tracking-wider">Study Destinations</h3>
          <ul class="space-y-2">
            <li><a href="#" class="text-purple-200 hover:text-white transition-colors duration-300">United States</a>
            </li>
            <li><a href="#" class="text-purple-200 hover:text-white transition-colors duration-300">Canada</a></li>
            <li><a href="#" class="text-purple-200 hover:text-white transition-colors duration-300">United Kingdom</a>
            </li>
            <li><a href="#" class="text-purple-200 hover:text-white transition-colors duration-300">Australia</a></li>
            <li><a href="#" class="text-purple-200 hover:text-white transition-colors duration-300">Germany</a></li>
            <li><a href="#" class="text-purple-200 hover:text-white transition-colors duration-300">New Zealand</a>
            </li>
          </ul>
        </div>

        <!-- Contact Info -->
        <div class="space-y-4">
          <h3 class="text-lg font-bold uppercase tracking-wider">Contact Us</h3>
          <address class="not-italic text-purple-200 space-y-2">
            <div class="flex items-start">
              <svg class="h-5 w-5 mr-3 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
              <span>Resource Education Hub Itahari-1, Sunsari</span>
            </div>
            <div class="flex items-center">
              <svg class="h-5 w-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
              </svg>
              <a href="tel:+11234567890" class="hover:text-white transition-colors duration-300">
                025-590684 |
                9852082384</a>
            </div>
            <div class="flex items-center">
              <svg class="h-5 w-5 mr-3 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"
                  d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <a href="mailto:info@resourceedhub.com" class="hover:text-white transition-colors duration-300">
                info@resourceeduhub.com</a>
            </div>
          </address>

          <!-- Newsletter -->

        </div>
      </div>

      <!-- Copyright and Bottom Links -->
      <div class="border-t border-purple-700 pt-6 flex flex-col md:flex-row justify-between items-center">
        <p class="text-purple-300 text-sm mb-4 md:mb-0">
          &copy; 2024 Resource Education Hub. All rights reserved.
        </p>
        <div class="flex space-x-6">
          <a href="#" class="text-purple-300 hover:text-white text-sm transition-colors duration-300">Privacy
            Policy</a>
          <a href="#" class="text-purple-300 hover:text-white text-sm transition-colors duration-300">Terms of
            Service</a>
          <a href="#" class="text-purple-300 hover:text-white text-sm transition-colors duration-300">Sitemap</a>
        </div>
      </div>
    </div>
  </footer>

  <!-- floating action button -->
  <div style="z-index:100" class="animate-bounce fixed block bottom-[30px] lg:bottom-[80px] right-4">
    <button id="socialButton"
      class="bg-blue-500 hover:border-4 border-purple-400 text-white rounded-full w-12 h-12 flex items-center justify-center">
      <p style="margin-top:-6px;" class="flex items-center justify-center text-3xl">+</p>
    </button>

    <!-- Social media buttons -->
    <div id="socialIcon"
      class="flex flex-col my-3 p-1 absolute bottom-16 right-0 transition-all duration-300 transform opacity-0 pointer-events-none">

      <!-- Facebook -->
      <a href="https://facebook.com" target="_blank"
        class="bg-white rounded-full w-10 h-10 my-2 flex items-center justify-center shadow-md hover:scale-110 transition-all">
        <svg fill="#1877F2" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path
            d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z" />
        </svg>
      </a>

      <!-- Instagram -->
      <a href="https://instagram.com" target="_blank"
        class="bg-white rounded-full w-10 h-10 my-2 flex items-center justify-center shadow-md hover:scale-110 transition-all">
        <svg fill="#E4405F" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
          <path
            d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z" />
        </svg>
      </a>

      <!-- WhatsApp -->
      <a href="https://wa.me/yourNumber" target="_blank"
        class="bg-white rounded-full w-10 h-10 my-2 flex items-center justify-center shadow-md hover:scale-110 transition-all">
        <svg viewBox="0 0 48 48" width="24" height="24" version="1.1" xmlns="http://www.w3.org/2000/svg"
          xmlns:xlink="http://www.w3.org/1999/xlink" fill="#000000">
          <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
          <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
          <g id="SVGRepo_iconCarrier">
            <title>Whatsapp-color</title>
            <desc>Created with Sketch.</desc>
            <defs> </defs>
            <g id="Icons" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g id="Color-" transform="translate(-700.000000, -360.000000)" fill="#67C15E">
                <path
                  d="M723.993033,360 C710.762252,360 700,370.765287 700,383.999801 C700,389.248451 701.692661,394.116025 704.570026,398.066947 L701.579605,406.983798 L710.804449,404.035539 C714.598605,406.546975 719.126434,408 724.006967,408 C737.237748,408 748,397.234315 748,384.000199 C748,370.765685 737.237748,360.000398 724.006967,360.000398 L723.993033,360.000398 L723.993033,360 Z M717.29285,372.190836 C716.827488,371.07628 716.474784,371.034071 715.769774,371.005401 C715.529728,370.991464 715.262214,370.977527 714.96564,370.977527 C714.04845,370.977527 713.089462,371.245514 712.511043,371.838033 C711.806033,372.557577 710.056843,374.23638 710.056843,377.679202 C710.056843,381.122023 712.567571,384.451756 712.905944,384.917648 C713.258648,385.382743 717.800808,392.55031 724.853297,395.471492 C730.368379,397.757149 732.00491,397.545307 733.260074,397.27732 C735.093658,396.882308 737.393002,395.527239 737.971421,393.891043 C738.54984,392.25405 738.54984,390.857171 738.380255,390.560912 C738.211068,390.264652 737.745308,390.095816 737.040298,389.742615 C736.335288,389.389811 732.90737,387.696673 732.25849,387.470894 C731.623543,387.231179 731.017259,387.315995 730.537963,387.99333 C729.860819,388.938653 729.198006,389.89831 728.661785,390.476494 C728.238619,390.928051 727.547144,390.984595 726.969123,390.744481 C726.193254,390.420348 724.021298,389.657798 721.340985,387.273388 C719.267356,385.42535 717.856938,383.125756 717.448104,382.434484 C717.038871,381.729275 717.405907,381.319529 717.729948,380.938852 C718.082653,380.501232 718.421026,380.191036 718.77373,379.781688 C719.126434,379.372738 719.323884,379.160897 719.549599,378.681068 C719.789645,378.215575 719.62006,377.735746 719.450874,377.382942 C719.281687,377.030139 717.871269,373.587317 717.29285,372.190836 Z"
                  id="Whatsapp"> </path>
              </g>
            </g>
          </g>
        </svg>
      </a>

      <!-- TikTok -->
      <a href="https://tiktok.com" target="_blank"
        class="bg-white rounded-full w-10 h-10 my-2 flex items-center justify-center shadow-md hover:scale-110 transition-all">
        <svg fill="#000000" viewBox="0 0 32 32" width="24" height="24" xmlns="http://www.w3.org/2000/svg">
          <path
            d="M16.656 1.029c1.637-0.025 3.262-0.012 4.886-0.025 0.054 2.031 0.878 3.859 2.189 5.213l-0.002-0.002c1.411 1.271 3.247 2.095 5.271 2.235l0.028 0.002v5.036c-1.912-0.048-3.71-0.489-5.331-1.247l0.082 0.034c-0.784-0.377-1.447-0.764-2.077-1.196l0.052 0.034c-0.012 3.649 0.012 7.298-0.025 10.934-0.103 1.853-0.719 3.543-1.707 4.954l0.020-0.031c-1.652 2.366-4.328 3.919-7.371 4.011l-0.014 0c-0.123 0.006-0.268 0.009-0.414 0.009-1.73 0-3.347-0.482-4.725-1.319l0.040 0.023c-2.508-1.509-4.238-4.091-4.558-7.094l-0.004-0.041c-0.025-0.625-0.037-1.25-0.012-1.862 0.49-4.779 4.494-8.476 9.361-8.476 0.547 0 1.083 0.047 1.604 0.136l-0.056-0.008c0.025 1.849-0.050 3.699-0.050 5.548-0.423-0.153-0.911-0.242-1.42-0.242-1.868 0-3.457 1.194-4.045 2.861l-0.009 0.030c-0.133 0.427-0.21 0.918-0.21 1.426 0 0.206 0.013 0.41 0.037 0.61l-0.002-0.024c0.332 2.046 2.086 3.59 4.201 3.59 0.061 0 0.121-0.001 0.181-0.004l-0.009 0c1.463-0.044 2.733-0.831 3.451-1.994l0.010-0.018c0.267-0.372 0.45-0.822 0.511-1.311l0.001-0.014c0.125-2.237 0.075-4.461 0.087-6.698 0.012-5.036-0.012-10.060 0.025-15.083z">
          </path>
        </svg>
      </a>

    </div>
  </div>



</body>

<script>
  // GSAP Animation Code
  document.addEventListener('DOMContentLoaded', function() {
    // Register ScrollTrigger plugin
    if (typeof gsap !== 'undefined' && gsap.registerPlugin) {
      gsap.registerPlugin(ScrollTrigger);
    }

    // Animation for all sections with class 'gsap'
    gsap.utils.toArray(".gsap").forEach((section) => {
      gsap.from(section, {
        opacity: 0,
        y: 70,
        duration: 0.7,
        ease: "power2.out",
        scrollTrigger: {
          trigger: section,
          start: "top 80%",
          toggleActions: "play none none reverse",
          markers: false
        }
      });
    });

    // Special animation for grid items (cards)
    if (document.querySelector('.countries .grid > div')) {
      gsap.from(".countries .grid > div", {
        opacity: 1,
        y: 10,
        duration: 0.8,
        stagger: 0.1,
        ease: "back.out(1.2)",
        scrollTrigger: {
          trigger: ".countries .grid",
          start: "top 70%",
          toggleActions: "play none none reverse"
        }
      });
    }

    // Button animation
    if (document.getElementById('see-more-btn')) {
      gsap.from("#see-more-btn", {
        scale: 0.8,
        opacity: 0,
        duration: 0.8,
        ease: "power3.out",
        scrollTrigger: {
          trigger: "#see-more-btn",
          start: "top 75%",
          toggleActions: "play none none none"
        }
      });
    }
  });
</script>

<script>
      var errorBox = document.getElementById("errorBox");
      errorBox.style.display = "block"; // Show the box
      setTimeout(function() {
        errorBox.style.display = "none"; // Hide the box after 3 seconds
      }, 3000);


</script>

</html>