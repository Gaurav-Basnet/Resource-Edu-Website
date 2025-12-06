<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Resource Edu | @yield('title', 'Resource Education')</title>
    <link rel="icon" type="image/jpg" href="assests\images\icon.jpg">
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
  <div class="w-full bg-[#510585] text-white px-6 lg:px-8 py-2">
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

        <a href="https://www.facebook.com/resourceeducationhub" class="hover:text-gray-300">
          <svg class="w-6 h-6 fill-current" viewBox="0 0 24 24">
            <path
              d="M12 2.04c-5.5 0-9.96 4.46-9.96 9.96 0 4.4 3.57 8.14 8.15 8.79v-6.2H8.1v-2.6h2.09V9.58c0-2.07 1.23-3.22 3.11-3.22.9 0 1.84.16 1.84.16v2.02h-1.04c-1.03 0-1.35.64-1.35 1.3v1.56h2.3l-.37 2.6h-1.93v6.2c4.58-.65 8.15-4.39 8.15-8.79 0-5.5-4.46-9.96-9.96-9.96z" />
          </svg>
        </a>
        <a href="tel:+9779852082384" class="hover:text-gray-300">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32" fill="currentColor" class="w-5 h-5">
            <path
              d="M16.003 2.001c-7.732 0-14 6.268-14 14 0 2.476.645 4.894 1.87 7.032L2 30l7.197-1.843a13.94 13.94 0 006.806 1.739h.001c7.732 0 14-6.268 14-14s-6.267-14-14-14zm.002 25.5a11.49 11.49 0 01-5.786-1.544l-.414-.24-4.27 1.092 1.14-4.163-.269-.428A11.47 11.47 0 014.5 16c0-6.341 5.16-11.5 11.503-11.5 6.34 0 11.5 5.159 11.5 11.5s-5.16 11.5-11.498 11.5zm6.26-8.698c-.342-.171-2.03-1-2.346-1.112-.314-.114-.543-.17-.773.17-.23.342-.886 1.113-1.085 1.342-.199.228-.398.256-.74.085-.343-.17-1.45-.534-2.761-1.701-1.02-.909-1.71-2.031-1.91-2.372-.199-.342-.021-.526.15-.697.154-.153.343-.399.514-.599.17-.2.228-.342.343-.57.114-.228.057-.427-.028-.599-.085-.171-.773-1.867-1.06-2.555-.28-.672-.563-.58-.773-.591-.2-.01-.427-.012-.656-.012s-.599.085-.914.427c-.314.342-1.2 1.17-1.2 2.844 0 1.673 1.229 3.291 1.4 3.52.171.228 2.42 3.694 5.867 5.179.82.354 1.462.566 1.96.726.823.262 1.57.225 2.16.137.659-.098 2.03-.83 2.317-1.63.286-.799.286-1.484.2-1.63-.085-.142-.313-.227-.656-.399z" />
          </svg>

        </a>
        <a href="https://www.tiktok.com/@resource.education" class="hover:text-gray-300">
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
    <div class="max-w-full px-6 lg:px-8">
      <div class="flex justify-between items-center h-16">
        <!-- Logo -->
        <div class="flex-shrink-0">
          <a href="/dashboard"><img class="h-14 w-auto" src="assests/images/logo.png" alt="Logo" /></a>
        </div>


        <!-- Dashboard Navigation -->
        <div class="hidden md:flex space-x-8 items-center">
          <a href="/dashboard"
            class="nav-link text-purple-700 font-medium hover:text-purple-900 px-3 py-2 relative group">
            Dashboard
            <span
              class="nav-underline absolute bottom-0 left-0 w-0 h-0.5 bg-purple-700 group-hover:w-full transition-all duration-300"></span>
          </a>

          <a href="/mock"
            class="nav-link text-purple-700 font-medium hover:text-purple-900 px-3 py-2 relative group">
            Mock Test
            <span
              class="nav-underline absolute bottom-0 left-0 w-0 h-0.5 bg-purple-700 group-hover:w-full transition-all duration-300"></span>
          </a>

          <a href="/resources"
            class="nav-link text-purple-700 font-medium hover:text-purple-900 px-3 py-2 relative group">
            Resources
            <span
              class="nav-underline absolute bottom-0 left-0 w-0 h-0.5 bg-purple-700 group-hover:w-full transition-all duration-300"></span>
          </a>

          <div class="flex items-center space-x-4">
            <a href="/profile" class="nav-link flex items-center text-purple-700 hover:text-purple-900 relative group">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
              </svg>
              Profile
              <span
                class="nav-underline absolute bottom-0 left-0 top-[30px] w-0 h-0.5 bg-purple-700 group-hover:w-full transition-all duration-300">

            </a>
            <form method="POST" action="{{ route('logout') }}">
              @csrf
              <button type="submit"
                class="ml-4 border border-purple-700 text-purple-700 px-4 py-1.5 rounded-md hover:bg-purple-700 hover:text-white transition-colors duration-300">
                Logout
              </button>
            </form>
          </div>
        </div>


        <!-- Mobile Menu Button (Same for both) -->
        <div class="md:hidden flex items-center">
          <button id="menu-btn"
            class="inline-flex items-center justify-center p-2 rounded-md text-purple-700 hover:text-purple-900 focus:outline-none">
            <svg id="menu-icon" class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
              stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
            <svg id="close-icon" class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
              viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
          </button>
        </div>
      </div>
    </div>

    <!-- Mobile Menu (Conditional based on route) -->
    <div id="mobile-menu" class="mobile-menu bg-white md:hidden px-4 pb-3">

      <div class="pt-2 pb-3 space-y-1">
        <a href="/dashboard"
          class="block px-3 py-2 text-base font-medium text-purple-700 hover:bg-purple-50 rounded-md">Home</a>
        <a href="/mock"
          class="block px-3 py-2 text-base font-medium text-purple-700 hover:bg-purple-50 rounded-md">Mock Test</a>
        <a href="/resources"
          class="block px-3 py-2 text-base font-medium text-purple-700 hover:bg-purple-50 rounded-md">Resources</a>
        <a href="/profile"
          class="block px-3 py-2 text-base font-medium text-purple-700 hover:bg-purple-50 rounded-md">Profile</a>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit"
            class="w-full text-center b px-3 py-2 text-base font-medium border border-purple-700 text-purple-700 hover:bg-purple-200 rounded-md">
            Logout
          </button>
        </form>
      </div>

    </div>
  </nav>
  <main>
    @yield('content')
  </main>




  <!-- //footer -->
  <footer class="bg-gradient-to-b from-purple-900 to-purple-800 text-white pt-12 pb-8 px-6 lg:px-8 z-50">
    <div class="max-w-full mx-auto">

      <div class="border-t border-purple-700 pt-6 flex flex-col md:flex-row justify-between items-center">
        <p class="text-purple-300 text-sm  md:mb-0">
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





</body>

<script>
  // GSAP Animation Code
  document.addEventListener('DOMContentLoaded', function () {
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

      var errorBox = document.getElementById("errorBox");
  errorBox.style.display = "block"; // Show the box
  setTimeout(function () {
    errorBox.style.display = "none"; // Hide the box after 3 seconds
  }, 3000);

  });
</script>

</html>