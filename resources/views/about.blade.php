@extends('master')
@section('title', 'About')


@section('content')

<!-- Compact Hero Section -->
<section class="gsap relative bg-gradient-to-br from-purple-800 to-indigo-700 h-10 min-h-[300px] md:min-h-[350px] overflow-hidden">
  <!-- Simplified Background -->
  <div class="absolute inset-0 z-0">
    <!-- Subtle floating elements -->
    <div class="absolute top-20 left-10 w-20 h-20 rounded-full bg-purple-600/10 blur-lg animate-float1"></div>
    <div class="absolute bottom-1/4 right-20 w-24 h-24 rounded-full bg-indigo-600/10 blur-lg animate-float2"></div>
    
    <!-- Background image with subtle overlay -->
    <img src="../assests/images/main.png" alt="Students studying abroad" 
         class="w-full h-full object-cover opacity-20 mix-blend-overlay" />
  </div>
<!-- Hero Content - Centered Version -->
<div class="relative z-0 h-full flex items-center justify-center">
  <div class="container mx-auto px-6 text-center py-10">
    <!-- Compact Heading -->
    <h1 class="text-xl md:text-2xl lg:text-3xl font-bold text-white mb-3 leading-tight">
      <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-300 to-white">Pioneering</span> Your Global Academic Journey
    </h1>
    
    <!-- Compact Subheading -->
    <p class="text-xs md:text-sm text-purple-100/90 max-w-xs mx-auto">
      "Study Smart, Go Abroad with Resource Education"
    </p>
  </div>
</div>

  <!-- Smaller Scroll Indicator -->
  <div class="absolute bottom-6 left-1/2 transform -translate-x-1/2 z-10 animate-bounce">
    <svg class="w-6 h-6 text-white/80" fill="none" stroke="currentColor" viewBox="0 0 24 24">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
    </svg>
  </div>
</section>

  <!-- about section -->
  <div id="about" class="gsap relative w-full py-12 px-6 lg:px-20 bg-white">
    <div class="w-full max-w-full ">
      <!-- About Us Heading -->
      <div class="mb-10">
        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-1font-roboto">
          About Us
        </h1>
      </div>
      <!-- About Content -->
      <div class="grid md:grid-cols-2 gap-8 items-start">
        <div>
          <p class="text-lg text-gray-700 mb-2 leading-relaxed text-justify">
            <span class="font-semibold text-purple-600">Resource Education Hub Pvt. Ltd</span>
            is a premier education consultancy based in Nepal, passionately
            committed to transforming academic aspirations into global
            opportunities.
          </p>

          <div id="expandable-content" class="hidden">
            <p class="text-lg text-gray-700 mb-2 leading-relaxed text-justify font-roboto font-small">
              Our team of experienced counselors provides personalized
              guidance to help students find the perfect academic fit at top
              universities worldwide.
            </p>
            <p class="text-lg text-gray-700 mb-2 leading-relaxed text-justify font-roboto font-small">
              We maintain partnerships with hundreds of institutions across
              the UK, USA, Canada, Australia, and Europe, ensuring our
              students have access to the best educational opportunities.
            </p>
            <p class="text-lg text-gray-700 mb-6 leading-relaxed text-justify font-roboto font-small">
              Beyond admissions, we offer comprehensive support including
              scholarship assistance, accommodation arrangements, and cultural
              orientation to ensure a smooth transition for our students.
            </p>
          </div>

          <p class="text-lg text-gray-700 mb-6 leading-relaxed text-justify   font-roboto font-small">
            We specialize in guiding students through every step of their
            international education journey - from university selection and
            application assistance to visa processing and pre-departure
            orientation.
          </p>

          <a href="#" id="read-more-btn"
            class="inline-block bg-[#510585] hover:bg-[#3a0461] text-white font-bold py-3 px-8 rounded-md transition duration-300">
            Read More
          </a>
        </div>

        <!-- Image Section - Proper Implementation -->
        <div class="relative rounded-xl overflow-hidden h-64 xs:h-72 sm:h-80 md:h-96 shadow-lg w-full mt-4 md:mt-0">
          <!-- Carousel Container -->
          <div class="relative h-full w-full overflow-hidden">
            <!-- Images -->
            <div id="image-carousel" class="flex h-full transition-transform duration-300 ease-in-out">
              <!-- Slide 1 -->
              <div class="min-w-full h-full relative flex-shrink-0">
                <img src="../assests/images/europe.jpg" alt="Resource Education Hub team helping students"
                  class="w-full h-full object-cover object-center" loading="lazy" />
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-3 sm:p-4">
                  <p class="text-white text-xs sm:text-sm font-medium font-roboto">
                    Guiding students to global education since 2020
                  </p>
                </div>
              </div>

              <!-- Slide 2 -->
              <div class="min-w-full h-full relative flex-shrink-0">
                <img src="../assests/images/carrer.png" alt="Student consultation session"
                  class="w-full h-full object-cover object-center overflow-hidden" loading="lazy" />
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-3 sm:p-4">
                  <p class="text-white text-xs sm:text-sm font-medium font-roboto">
                    Personalized guidance for each student
                  </p>
                </div>
              </div>

              <!-- Slide 3 -->
              <div class="min-w-full h-full relative flex-shrink-0">
                <img src="../assests/images/main1.png" alt="University admission process"
                  class="w-full h-full object-cover object-center" loading="lazy" />
                <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black/70 to-transparent p-3 sm:p-4">
                  <p class="text-white text-xs sm:text-sm font-medium font-roboto">
                    Connecting students with top universities
                  </p>
                </div>
              </div>
            </div>

            <!-- Navigation Arrows - Smaller on mobile -->
            <button id="prev-btn"
              class="absolute left-1 sm:left-2 top-1/2 -translate-y-1/2 bg-black/50 text-white rounded-full p-1 sm:p-2 hover:bg-black/70 transition-all duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            </button>

            <button id="next-btn"
              class="absolute right-1 sm:right-2 top-1/2 -translate-y-1/2 bg-black/50 text-white rounded-full p-1 sm:p-2 hover:bg-black/70 transition-all duration-300">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 sm:h-5 sm:w-5 md:h-6 md:w-6" fill="none"
                viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </button>

            <!-- Indicator Dots - Smaller on mobile -->
            <div class="absolute bottom-2 sm:bottom-4 left-1/2 -translate-x-1/2 flex space-x-1 sm:space-x-2">
              <button
                class="carousel-dot w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-white/50 hover:bg-white transition-all duration-300"
                data-index="0"></button>
              <button
                class="carousel-dot w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-white/50 hover:bg-white transition-all duration-300"
                data-index="1"></button>
              <button
                class="carousel-dot w-1.5 h-1.5 sm:w-2 sm:h-2 rounded-full bg-white/50 hover:bg-white transition-all duration-300"
                data-index="2"></button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- mission and vision  -->
  <section class="gsap py-16 bg-gradient-to-br from-purple-50 to-white">
  <div class="max-w-full px-6 lg:px-20 ">
    <!-- Section Header -->
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold font-robototext-purple-800 mb-4">Our Guiding Principles</h2>
      <div class="w-20 h-1 bg-purple-500 mx-auto mb-6"></div>
      <p class="text-gray-600 font-roboto text-lg max-w-2xl mx-auto">What drives Resource Education Hub forward</p>
    </div>

    <!-- Mission & Vision Cards -->
    <div class="grid gap-10 md:grid-cols-2">
      <!-- Vision Card -->
      <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-500 transform hover:-translate-y-2 border-l-4 border-purple-500">
        <div class="flex items-center mb-6">
          <div class="bg-purple-100 p-3 rounded-full mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
            </svg>
          </div>
          <h3 class="text-2xl font-bold font-roboto text-purple-800">Our Vision</h3>
        </div>
        <p class="text-gray-700 text-lg font-roboto leading-relaxed">
          "To become a global leader in accessible education, empowering learners of all ages with the knowledge and skills needed to thrive in an ever-evolving world."
        </p>
      </div>

      <!-- Mission Card -->
      <div class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition duration-500 transform hover:-translate-y-2 border-l-4 border-purple-500">
        <div class="flex items-center mb-6">
          <div class="bg-purple-100 p-3 rounded-full mr-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path d="M12 14l9-5-9-5-9 5 9 5z" />
              <path d="M12 14l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l9-5-9-5-9 5 9 5zm0 0l6.16-3.422a12.083 12.083 0 01.665 6.479A11.952 11.952 0 0012 20.055a11.952 11.952 0 00-6.824-2.998 12.078 12.078 0 01.665-6.479L12 14zm-4 6v-7.5l4-2.222" />
            </svg>
          </div>
          <h3 class="text-2xl font-bold font-roboto text-purple-800">Our Mission</h3>
        </div>
        <p class="text-gray-700 text-lg font-roboto leading-relaxed">
          "To provide high-quality, innovative, and inclusive educational resources that inspire lifelong learning, bridge knowledge gaps, and foster personal and professional growth for individuals and communities worldwide."
        </p>
      </div>
    </div>

    <!-- Core Values -->
    <div class="gsap mt-16 text-center">
      <h3 class="text-2xl font-bold text-purple-800 mb-8">Our Core Values</h3>
      <div class="grid grid-cols-2 md:grid-cols-5 gap-4">
        <!-- Value 1 -->
        <div class="overCard bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition" >
          <div class="bg-purple-100 w-12 h-12 mx-auto rounded-full flex items-center justify-center mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
            </svg>
          </div>
          <h4 class="font-semibold text-purple-700">Accessibility</h4>
          <p class="text-sm text-gray-600">Breaking barriers to education</p>
        </div>
        
        <!-- Value 2 -->
        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition">
          <div class="bg-purple-100 w-12 h-12 mx-auto rounded-full flex items-center justify-center mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
          </div>
          <h4 class="font-semibold text-purple-700">Innovation</h4>
          <p class="text-sm text-gray-600">Creative learning solutions</p>
        </div>
        
        <!-- Value 3 -->
        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition">
          <div class="bg-purple-100 w-12 h-12 mx-auto rounded-full flex items-center justify-center mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
            </svg>
          </div>
          <h4 class="font-semibold text-purple-700">Excellence</h4>
          <p class="text-sm text-gray-600">Top-tier quality content</p>
        </div>
        
        <!-- Value 4 -->
        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg ">
          <div class="bg-purple-200 w-12 h-12 mx-auto rounded-full flex items-center justify-center mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
          </div>
          <h4 class="font-semibold text-purple-600">Community</h4>
          <p class="text-sm text-gray-600">Supportive learning network</p>
        </div>
        
        <!-- Value 5 -->
        <div class="bg-white p-4 rounded-lg shadow-md hover:shadow-lg transition">
          <div class="bg-purple-100 w-12 h-12 mx-auto rounded-full flex items-center justify-center mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 5a1 1 0 011-1h14a1 1 0 011 1v2a1 1 0 01-1 1H5a1 1 0 01-1-1V5zM4 13a1 1 0 011-1h6a1 1 0 011 1v6a1 1 0 01-1 1H5a1 1 0 01-1-1v-6zM16 13a1 1 0 011-1h2a1 1 0 011 1v6a1 1 0 01-1 1h-2a1 1 0 01-1-1v-6z" />
            </svg>
          </div>
          <h4 class="font-semibold text-purple-700">Sustainability</h4>
          <p class="text-sm text-gray-600">Education that lasts</p>
        </div>
      </div>
    </div>

    <!-- Tagline -->
    <div class="mt-16 text-center bg-purple-600 text-white py-8 px-6 rounded-xl">
      <h3 class="text-2xl md:text-3xl font-roboto font-bold italic mb-2">"Empowering Minds, Enriching Futures."</h3>
      <p class="text-purple-100 font-roboto">Resource Education Hub</p>
    </div>
  </div>
  </section>

<!-- Why Choose Us Section -->
  <div class="gsap py-16 bg-gray-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center">
      <h2 class="text-3xl font-bold text-purple-800 mb-6">Why Choose Our Education Hub</h2>
      <p class="text-lg text-gray-600 max-w-3xl mx-auto">We're committed to providing the best learning resources with these key advantages</p>
    </div>

    <div class="mt-10 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Feature 1 -->
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
        <div class="flex items-start">
          <div class="flex-shrink-0 bg-purple-100 rounded-full p-2">
            <svg class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <div class="ml-4">
            <h3 class="text-lg font-medium text-gray-900">Comprehensive Resources</h3>
            <p class="mt-2 text-gray-600">Access to thousands of high-quality educational materials across all subjects and levels.</p>
          </div>
        </div>
      </div>

      <!-- Feature 2 -->
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
        <div class="flex items-start">
          <div class="flex-shrink-0 bg-purple-100 rounded-full p-2">
            <svg class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <div class="ml-4">
            <h3 class="text-lg font-medium text-gray-900">Expert-Curated Content</h3>
            <p class="mt-2 text-gray-600">All resources are carefully selected and reviewed by subject matter experts.</p>
          </div>
        </div>
      </div>

      <!-- Feature 3 -->
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
        <div class="flex items-start">
          <div class="flex-shrink-0 bg-purple-100 rounded-full p-2">
            <svg class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <div class="ml-4">
            <h3 class="text-lg font-medium text-gray-900">Always Accessible</h3>
            <p class="mt-2 text-gray-600">24/7 availability from any device, with offline options for remote learning.</p>
          </div>
        </div>
      </div>

      <!-- Feature 4 -->
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
        <div class="flex items-start">
          <div class="flex-shrink-0 bg-purple-100 rounded-full p-2">
            <svg class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <div class="ml-4">
            <h3 class="text-lg font-medium text-gray-900">Personalized Learning</h3>
            <p class="mt-2 text-gray-600">Adaptive tools that customize content based on your learning style and progress.</p>
          </div>
        </div>
      </div>

      <!-- Feature 5 -->
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
        <div class="flex items-start">
          <div class="flex-shrink-0 bg-purple-100 rounded-full p-2">
            <svg class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <div class="ml-4">
            <h3 class="text-lg font-medium text-gray-900">Cost Effective</h3>
            <p class="mt-2 text-gray-600">Premium educational resources at a fraction of traditional education costs.</p>
          </div>
        </div>
      </div>

      <!-- Feature 6 -->
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
        <div class="flex items-start">
          <div class="flex-shrink-0 bg-purple-100 rounded-full p-2">
            <svg class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
            </svg>
          </div>
          <div class="ml-4">
            <h3 class="text-lg font-medium text-gray-900">Community Support</h3>
            <p class="mt-2 text-gray-600">Connect with educators and learners worldwide through our interactive platform.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>

<!-- top universities -->
<section id="uni" class="gsap universities">
  <div class="lg:px-20 px-6 py-7">
    <div class="mb-10">
      <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
        Top universities
      </h1>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      <!-- Initial 3 Cards (always visible) -->
      <!-- Card 1 -->
      <div class="relative group overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
        <a href="#">
          <img class="w-full h-64 object-cover transition-all duration-500 group-hover:scale-105"
            src="../assests/images/1university.png" alt="Australia">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
          <figcaption class="absolute bottom-0 left-0 right-0 p-4 text-white">
            <p class="text-lg font-medium">The University of Sydney</p>
            <p class="text-sm mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              World-class universities with excellent post-study work opportunities
            </p>
          </figcaption>
        </a>
      </div>

      <!-- Card 2 -->
      <div class="relative group overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
        <a href="#">
          <img class="w-full h-64 object-cover transition-all duration-500 group-hover:scale-105"
            src="../assests/images/2university.jpeg" alt="Canada">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
          <figcaption class="absolute bottom-0 left-0 right-0 p-4 text-white">
            <p class="text-lg font-medium">Manahattan University</p>
            <p class="text-sm mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              Affordable education with great quality of life and immigration options
            </p>
          </figcaption>
        </a>
      </div>

      <!-- Card 3 -->
      <div class="relative group overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
        <a href="#">
          <img class="w-full h-64 object-cover transition-all duration-500 group-hover:scale-105"
            src="../assests/images/monash.jpeg" alt="United Kingdom">
          <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
          <figcaption class="absolute bottom-0 left-0 right-0 p-4 text-white">
            <p class="text-lg font-medium">Monash University</p>
            <p class="text-sm mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
              Prestigious universities with rich history and cultural experience
            </p>
          </figcaption>
        </a>
      </div>

      <!-- Additional 3 Cards (hidden by default) -->
      <!-- Card 4 -->
      <div id="additional-cards" class="hidden col-span-1 sm:col-span-2 lg:col-span-3 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
        <!-- Card 4 -->
        <div class="relative group overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
          <a href="#">
            <img class="w-full h-64 object-cover transition-all duration-500 group-hover:scale-105"
              src="../assests/images/harvard.png" alt="USA">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
            <figcaption class="absolute bottom-0 left-0 right-0 p-4 text-white">
              <p class="text-lg font-medium">Harvard University</p>
              <p class="text-sm mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                Ivy League institution with world-renowned programs
              </p>
            </figcaption>
          </a>
        </div>

        <!-- Card 5 -->
        <div class="relative group overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
          <a href="#">
            <img class="w-full h-64 object-cover transition-all duration-500 group-hover:scale-105"
              src="../assests/images/oxfort.png" alt="UK">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
            <figcaption class="absolute bottom-0 left-0 right-0 p-4 text-white">
              <p class="text-lg font-medium">University of Oxford</p>
              <p class="text-sm mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                One of the oldest and most prestigious universities in the world
              </p>
            </figcaption>
          </a>
        </div>

        <!-- Card 6 -->
        <div class="relative group overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
          <a href="#">
            <img class="w-full h-64 object-cover transition-all duration-500 group-hover:scale-105"
              src="../assests/images/toronto.png" alt="Canada">
            <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
            <figcaption class="absolute bottom-0 left-0 right-0 p-4 text-white">
              <p class="text-lg font-medium">University of Toronto</p>
              <p class="text-sm mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                Canada's leading institution with diverse academic programs
              </p>
            </figcaption>
          </a>
        </div>
      </div>
    </div>

    <!-- See More/See Less Button -->
    <div class="flex justify-center mt-10">
      <button id="toggle-universities-btn"
        class="inline-block bg-[#510585] hover:bg-[#3a0461] text-white text-lg font-semibold py-3 px-6 rounded-md transition duration-300">
        See More Universities
      </button>
    </div>
  </div>
</section>

<!-- voice of success -->
  <section id="testimonials" class="gsap px-6 lg:px-20 py-7 bg-gradient-to-r from-purple-900 via-purple-800 to-indigo-900">

  <div class="mb-10 text-center">
    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Voices of Success</h1>
    <p class="text-white max-w-2xl mx-auto">Hear what our students say about their experience</p>
  </div>

  <div class="relative max-w-5xl mx-auto px-4">
    <!-- Navigation Buttons (Hidden on small screens) -->
    <button id="prevBtn"
      class="hidden md:flex absolute left-0 top-1/2 -translate-y-1/2 bg-white hover:bg-red-100 text-red-600 p-3 rounded-full shadow-md z-10 transition duration-300">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
    </button>

    <button id="nextBtn"
      class="hidden md:flex absolute right-0 top-1/2 -translate-y-1/2 bg-white hover:bg-red-100 text-red-600 p-3 rounded-full shadow-md z-10 transition duration-300">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
    </button>

    <!-- Testimonial Cards Container -->
    <div id="testimonialContainer"
      class="flex overflow-hidden relative h-[460px] md:h-96 transition-all duration-500">
      <!-- Cards will be added dynamically -->
    </div>

    <!-- Indicators -->
    <div id="indicators" class="flex justify-center mt-6 space-x-2">
      <!-- Dots inserted dynamically -->
    </div>
  </div>
</section>
  <!-- message from director -->
  <div class="gsap bg-gradient-to-br from-purple-50 to-white py-16 px-6 lg:px-20">
    <div class="max-w-7xl mx-auto">
      <div class="flex flex-col lg:flex-row gap-12 items-center">
        <!-- Director's Image  -->
        <div class="lg:w-2/5 relative group">
          <div
            class="relative rounded-2xl overflow-hidden shadow-2xl transform group-hover:-translate-y-2 transition duration-300">
            <img src="../assests/images/director.jpg" alt="Director of Resource Education Hub"
              class="w-full h-auto object-cover" />
            <div class="absolute inset-0 bg-gradient-to-t from-purple-900/30 via-purple-900/10 to-transparent"></div>
          </div>
          <div class="absolute -bottom-4 -right-4 bg-purple-600 text-white px-6 py-2 rounded-lg shadow-lg">
            <p class="text-sm">Managing Director</p>
          </div>
        </div>

        <!-- Text Content - Right Side -->
        <div class="lg:w-3/5">
          <div class="relative">
            <span class="text-purple-600 font-bold text-lg mb-2 block">Message From Managing Director </span>
            <h2 class="text-4xl font-bold text-gray-900 mb-8 leading-tight">
              Resource <span class="text-purple-600">Education Hub </span>
            </h2>

            <div class="prose prose-lg text-gray-600 space-y-5">
              <p>Dear Students, Parents, and Well-Wishers,</p>
              <p>Warm greetings from Resource Education Pvt. Ltd.!</p>

              <p class="">
                "In today's globalized world, education beyond borders is no longer a dream, but a practical reality."
              </p>

              <!-- Visible content on mobile -->
              <div id="mobile-visible-content">
                <p>
                  Our team understands the challenges of navigating international
                  education systems. That's why we've built a comprehensive
                  support system — from university selection to visa assistance —
                  to make your journey seamless.
                </p>
              </div>

              <!-- Hidden content that expands on mobile -->
              <div id="mobile-expandable-content" class="hidden lg:block">
                <p>
                  Education transforms lives. Whether you dream of attending an
                  Ivy League university, a technical college, or a specialized
                  program, we're here to guide you every step of the way.
                </p>

                <p>
                  Welcome to our educational family. Let's build your future
                  together.
                </p>
              </div>
            </div>

            <!-- Read More/Less Button (Mobile Only) -->
            <div class="lg:hidden mt-6 text-center">
              <button id="mobile-read-btn" class="inline-block bg-[#510585] hover:bg-[#3a0461] text-white font-bold py-3 px-8 rounded-md transition duration-300">
                Read More
              </button>
            </div>

            <div class="mt-10 flex items-center">
              <div class="mr-4">
                <svg class="w-12 h-12 text-purple-600" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd"
                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                    clip-rule="evenodd"></path>
                </svg>
              </div>
              <div>
                <p class="font-bold text-gray-900">Warm regards,</p>
                <p class="text-purple-600 font-medium">Resource Education Team</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- our team  -->
  <section class="gsap py-16 px-6 md:px-16 relative overflow-hidden">
  <!-- Decorative elements -->
  <div class="absolute -top-20 -left-20 w-64 h-64 bg-purple-100 rounded-full opacity-20"></div>
  <div class="absolute -bottom-20 -right-20 w-64 h-64 bg-purple-100 rounded-full opacity-20"></div>
  
  <div class="text-center mb-12 relative z-10">
    <h2 class="text-4xl font-bold font-roboto text-purple-800 mb-2">Meet Our Team</h2>
    <p class="text-gray-600 text-lg font-roboto max-w-xl mx-auto">The dedicated professionals behind Resource Education Hub</p>
  </div>

  <!-- Scrolling team container -->
  <div class="relative">
    <div class="team-scroll-container overflow-x-auto pb-8 -mx-6 px-6">
      <div class="grid gap-10 grid-flow-col auto-cols-[minmax(280px,1fr)] lg:auto-cols-[minmax(300px,1fr)]">
        <!-- Team Member 1 -->
        <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition duration-300 text-center transform hover:-translate-y-2 group">
          <div class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-purple-100 group-hover:border-purple-300 transition-all">
            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="../assests/images/director.jpg" alt="Director">
          </div>
          <h3 class="text-xl font-semibold font-roboto text-purple-700">Director Name</h3>
          <p class="text-gray-500 font-roboto text-sm mb-3">Founder & CEO</p>
          <p class="text-gray-600 font-roboto text-sm mb-4">Visionary leader with a passion for empowering learners worldwide.</p>
          <div class="flex justify-center space-x-3">
            <a href="#" class="text-purple-500 hover:text-purple-700 transition"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-purple-500 hover:text-purple-700 transition"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-purple-500 hover:text-purple-700 transition"><i class="fas fa-envelope"></i></a>
          </div>
        </div>

        <!-- Team Member 2 -->
        <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition duration-300 text-center transform hover:-translate-y-2 group">
          <div class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-purple-100 group-hover:border-purple-300 transition-all">
            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="" alt="">
          </div>
          <h3 class="text-xl font-semibold font-roboto text-purple-700">Name</h3>
          <p class="text-gray-500 font-roboto text-sm mb-3">Program Director</p>
          <p class="text-gray-600 font-roboto text-sm mb-4">Oversees educational strategy and course quality for optimal outcomes.</p>
          <div class="flex justify-center space-x-3">
            <a href="#" class="text-purple-500 hover:text-purple-700 transition"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-purple-500 hover:text-purple-700 transition"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-purple-500 hover:text-purple-700 transition"><i class="fas fa-envelope"></i></a>
          </div>
        </div>

        <!-- Team Member 3 -->
        <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition duration-300 text-center transform hover:-translate-y-2 group">
          <div class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-purple-100 group-hover:border-purple-300 transition-all">
            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="" alt="">
          </div>
          <h3 class="text-xl font-semibold font-roboto text-purple-700">Name</h3>
          <p class="text-gray-500  font-robototext-sm mb-3">Tech Lead</p>
          <p class="text-gray-600 font-robototext-sm mb-4">Drives platform development and ensures smooth digital experience.</p>
          <div class="flex justify-center space-x-3">
            <a href="#" class="text-purple-500 hover:text-purple-700 transition"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-purple-500 hover:text-purple-700 transition"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-purple-500 hover:text-purple-700 transition"><i class="fas fa-envelope"></i></a>
          </div>
        </div>

        <!-- Team Member 4 (Additional) -->
        <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition duration-300 text-center transform hover:-translate-y-2 group">
          <div class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-purple-100 group-hover:border-purple-300 transition-all">
            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="" alt="">
          </div>
          <h3 class="text-xl font-semibold font-roboto text-purple-700">Name</h3>
          <p class="text-gray-500 font-roboto text-sm mb-3">Content Specialist</p>
          <p class="text-gray-600 font-robototext-sm mb-4">Creates engaging educational materials that resonate with learners.</p>
          <div class="flex justify-center space-x-3">
            <a href="#" class="text-purple-500 hover:text-purple-700 transition"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-purple-500 hover:text-purple-700 transition"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-purple-500 hover:text-purple-700 transition"><i class="fas fa-envelope"></i></a>
          </div>
        </div>

        <!-- Team Member 5 (Additional) -->
        <div class="bg-white p-6 rounded-2xl shadow-md hover:shadow-xl transition duration-300 text-center transform hover:-translate-y-2 group">
          <div class="relative w-32 h-32 mx-auto mb-4 overflow-hidden rounded-full border-4 border-purple-100 group-hover:border-purple-300 transition-all">
            <img class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" src="" alt="">
          </div>
          <h3 class="text-xl font-semibold font-roboto text-purple-700">Name </h3>
          <p class="text-gray-500 font-robototext-sm mb-3">UX Designer</p>
          <p class="text-gray-600 font-robototext-sm mb-4">Crafts intuitive interfaces that enhance the learning experience.</p>
          <div class="flex justify-center space-x-3">
            <a href="#" class="text-purple-500 hover:text-purple-700 transition"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-purple-500 hover:text-purple-700 transition"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-purple-500 hover:text-purple-700 transition"><i class="fas fa-envelope"></i></a>
          </div>
        </div>
      </div>
    </div>

    <!-- Custom scrollbar indicator -->
    <div class="w-full h-2 bg-gray-100 hidden rounded-full mt-6 relative">
      <div class="h-full bg-purple-500 rounded-full w-1/3"></div>
    </div>
  </div>

  <!-- Navigation arrows (optional) -->
  <div class="flex justify-center mt-8 space-x-4">
    <button class="team-scroll-left bg-purple-100 text-purple-700 w-10 h-10 rounded-full flex items-center justify-center hover:bg-purple-200 transition">
      <i class="fas fa-chevron-left"></i>
    </button>
    <button class="team-scroll-right bg-purple-100 text-purple-700 w-10 h-10 rounded-full flex items-center justify-center hover:bg-purple-200 transition">
      <i class="fas fa-chevron-right"></i>
    </button>
  </div>
  </section>


<!-- Partners Section -->
<section class="gsap bg-gray-100 py-12">
  <div class="max-w-7xl mx-auto px-6 lg:px-20 text-center">
    <h2 class="text-3xl font-bold text-gray-900 mb-8">Our Trusted Partners & Accreditations</h2>
    <div class="flex flex-wrap justify-center items-center gap-8">
      <!-- Logo 1 -->
      <img src="https://1000logos.net/wp-content/uploads/2021/03/IELTS-logo.png" alt="IELTS Logo" class="h-16  transition duration-300" />

      <!-- Logo 2 -->
      <img src="https://www.pngitem.com/pimgs/m/399-3990213_pearson-pte-academic-logo-hd-png-download.png" alt="PTE Academic Logo" class="h-16  transition duration-300" />

      <!-- Logo 3 -->
      <img src="https://upload.wikimedia.org/wikipedia/commons/0/05/Japanese-Language_Proficiency_Test_logo.svg" alt="JLPT Logo" class="h-16 0 transition duration-300" />

      <!-- Logo 4 -->
      <img src="https://media.edusanjal.com/__sized__/logos/british-council-logo-thumbnail-200x200.png" alt="ISO 9001 Certification" class="h-16  transition duration-300" />

      <!-- Logo 5 -->
      <img src="../assests/images/at.jpg" alt="At Solution Logo" class="h-16 transition duration-300" />
      <!-- Logo 6 -->
      <img src="../assests/images/neca.jpg" alt="At Solution Logo" class="h-16 transition duration-300" />

          <!-- Logo 7 -->
      <img src="../assests/images/yalambar.jpg" alt="At Solution Logo" class="h-16 transition duration-300" />
    </div>
  </div>
</section>
@endsection 