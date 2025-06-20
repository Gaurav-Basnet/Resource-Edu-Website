@extends('master')
@section('title', 'Home')
@section('content')


<script src="assests\js\forms.js"></script>

  <!-- main slider -->
  <section class="relative w-full overflow-hidden ">
    <!-- Slider Container -->
    <div class="swiper-container  w-full h-[300px] md:h-[450px]">
    <!-- Slider Wrapper -->
    <div class="swiper-wrapper">
      <!-- Slide 1 -->
      <div class="swiper-slide relative">
      <!-- Image with overlay -->
      <div class="absolute inset-0 bg-black/40 "></div>
      <img src="assests/images/main.png" alt="Study abroad" class="w-full h-full object-cover">

      <!-- Content 1-->
      <div class="absolute inset-0  flex items-center ">
        <div class="container px-6 lg:px-20">
        <div class="  max-w-2xl text-white  ">
          <h1 class="text-4xl md:text-5xl font-bold mb-4 text-shadow-lg/30 ">Study Abroad With <span
            class="text-yellow-300 ">Confidence</span></h1>
          <p class="text-lg md:text-xl mb-8">We guide you through every step of your international education
          journey</p>
          <a href="#" id="see-more-btn"
          class="inline-block bg-[#3a0461] hover:bg-[#F60002] text-white font-bold py-3 px-8 rounded-md transition duration-300">
          Explore Services
          </a>
        </div>
        </div>
      </div>
      </div>

      <!-- Slide 2 -->
      <div class="swiper-slide relative w-full">
      <div class="absolute inset-0 bg-black/40 "></div>
      <img src="assests/images/main1.png" alt="Group of students" class="w-full h-full object-cover">
      <!-- Content 2 -->
      <div class="absolute inset-0 z-20 flex items-center">
        <div class="container px-6 lg:px-20 ">
        <div class="max-w-2xl text-white">
          <h1 class="text-4xl md:text-5xl font-bold mb-4 text-shadow-lg/30">University Admission <span
            class="text-yellow-300">Support</span></h1>
          <p class="text-lg md:text-xl mb-8">95% acceptance rate for our students at top global universities</p>
          <a href="#"
          class="inline-block bg-[#3a0461] hover:bg-[#F60002] text-white font-bold py-3 px-8 rounded-md transition duration-300">
          Get Consultation
          </a>
        </div>
        </div>
      </div>
      </div>

      <!-- Slide 3 -->
      <div class="swiper-slide relative">
      <div class="absolute inset-0 bg-black/40"></div>
      <img src="assests/images/slide2.jpg" alt="Group of students" class="w-full h-full object-cover">

      <div class="absolute inset-0  flex items-center">
        <div class="container px-6 lg:px-20 ">
        <div class="see-more-btn max-w-2xl text-white">
          <h1 class="text-4xl md:text-5xl font-bold mb-4 text-shadow-lg/30">Expert Visa <span
            class="text-yellow-300">Guidance</span></h1>
          <p class="text-lg md:text-xl mb-8">98% success rate in student visa applications</p>
          <a href="#"
          class="inline-block bg-[#3a0461] hover:bg-[#F60002] text-white font-bold py-3 px-8 rounded-md transition duration-300">
          Get Consultation
          </a>
        </div>
        </div>
      </div>
      </div>
    </div>

    <!-- Navigation Buttons -->
    <div class="swiper-button-next hidden md:flex !text-what after:!text-2xl "></div>
    <div class="swiper-button-prev hidden md:flex !text-white after:!text-2xl "></div>

    <!-- Pagination -->
    <div class="swiper-pagination !bottom-3"></div>
    </div>
  </section>

<!-- Dream Big CTA Section - Enhanced -->
<section class=" gsap w-full bg-gradient-to-r from-purple-900 to-indigo-900 py-12">
  <div class="container mx-auto px-6 text-center">
    <div class="mb-8">
      <h1 class="text-3xl md:text-4xl font-bold text-white mb-4 animate-fade-in">
        Dream Big. <span class="text-yellow-300 animate-fade-in ">Study Abroad.</span> Start Now!
      </h1>
      <p class="text-lg text-purple-100 max-w-2xl mx-auto animate-fade-in ">
        Take the first step towards your global education journey with our expert guidance
      </p>
    </div>
    <div id="see-more-btn" class="see-more-btn flex flex-col md:flex-row items-center justify-center gap-6">
      <a href="{{ 'appointment' }}" class=" relative overflow-hidden group">
        <div class="absolute inset-0 bg-gradient-to-r from-purple-600 to-indigo-600 group-hover:from-purple-700 group-hover:to-indigo-700 transition-all duration-300 rounded-lg"></div>
        <div  class=" relative flex items-center justify-center px-8 py-3 text-white font-semibold rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
          </svg>
          Book Appointment Now
        </div>
      </a>
      <a href="{{ 'apply' }}" class="relative overflow-hidden group">
        <div class="absolute inset-0 bg-white/10 backdrop-blur-sm group-hover:bg-white/20 transition-all duration-300 rounded-lg border-2 border-white/30"></div>
        <div class="relative flex items-center justify-center px-8 py-3 text-white font-semibold rounded-lg hover:text-yellow-100 transition-all duration-300">
          <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
          </svg>
          Apply Now
        </div>
      </a>
    </div>
  </div>
</section>

<!-- Enhanced Partner Logos Section -->
<section class="gsap py-6   bg-white relative overflow-hidden">
  <div class="absolute inset-0 pattern-dots pattern-purple-500 pattern-bg-white pattern-size-4 pattern-opacity-10"></div>
  <div class="container mx-auto px-6 relative z-10">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold text-purple-900 mb-4">
      Your Future  <span class="text-purple-600"></span>Starts Here
      </h2>
      <div class="w-24 h-1.5 bg-gradient-to-r from-purple-400 to-indigo-500 mx-auto mb-6"></div>
      
    </div>
    
    <div class="relative">
      <div class="absolute inset-y-0 left-0 w-32 bg-gradient-to-r from-white to-transparent z-10"></div>
      <div class="absolute inset-y-0 right-0 w-32 bg-gradient-to-l from-white to-transparent z-10"></div>
      
      <div class="flex overflow-hidden">
        <div class="flex items-center animate-marquee whitespace-nowrap py-4 lg:px-auto  ">
          <!-- Logo Set -->
          <div class="lg:mx-8 mx-0 w-40 h-20 flex items-center justify-center">
            <img src="assests/images/logo1.png" alt="Partner logo" class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300">
          </div>
          <div class="lg:mx-8 mx-0 w-40 h-20 flex items-center justify-center">
            <img src="assests/images/logo2.png" alt="Partner logo" class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300">
          </div>
          <div class="lg:mx-8 mx-0 w-40 h-20 flex items-center justify-center">
            <img src="assests/images/logo3.png" alt="Partner logo" class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300">
          </div>
          <div class="lg:mx-8 mx-0 w-40 h-20 flex items-center justify-center">
            <img src="assests/images/logo4.png" alt="Partner logo" class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300">
          </div>
          <div class="lg:mx-8 mx-0 w-40 h-20 flex items-center justify-center">
            <img src="assests/images/logo5.png" alt="Partner logo" class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300">
          </div>
          
          <!-- Duplicates for seamless looping -->
          <div class="mx-8 w-40 h-20 flex items-center justify-center">
            <img src="assests/images/logo1.png" alt="Partner logo" class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300">
          </div>
          <div class="mx-8 w-40 h-20 flex items-center justify-center">
            <img src="assests/images/logo2.png" alt="Partner logo" class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300">
          </div>
          <div class="mx-8 w-40 h-20 flex items-center justify-center">
            <img src="assests/images/logo3.png" alt="Partner logo" class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300">
          </div>
          <div class="mx-8 w-40 h-20 flex items-center justify-center">
            <img src="assests/images/logo4.png" alt="Partner logo" class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300">
          </div>
          <div class="mx-8 w-40 h-20 flex items-center justify-center">
            <img src="assests/images/logo5.png" alt="Partner logo" class="max-h-full max-w-full object-contain grayscale hover:grayscale-0 transition-all duration-300">
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- About Us Section -->
<section class="gsap about  bg-white ">
  <div class="container max-w-full px-6 lg:px-20">
    <div class="flex flex-col md:flex-row items-center gap-10 lg:gap-16">
      <!-- Text Content (Left Side) -->
      <div class="md:w-1/2 order-2 md:order-1">
        <div class="max-w-2xl">
          <!-- Section Tag -->
          <span class="inline-block mb-4 text-purple-600 font-semibold text-lg">WHO WE ARE</span>
          
          <!-- Heading -->
          <h2 class="text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-6 leading-tight">
            Empowering Global Education Journeys
          </h2>
          
          <!-- Description -->
          <div class="space-y-4 text-gray-700 text-lg">
            <p>
              <span class="font-semibold text-purple-600">Resource Education Hub Pvt. Ltd</span> is a premier education consultancy based in Nepal, passionately committed to transforming academic aspirations into global opportunities.
            </p>
            <p>
              We specialize in guiding students through every step of their international education journey - from university selection and application assistance to visa processing and pre-departure orientation.
            </p>
          </div>
          
          <!-- Stats/Counter -->
          <div class="grid grid-cols-2 gap-4 mt-8">
            <div class="bg-purple-50 p-4 rounded-lg">
              <p class="text-purple-600 font-bold text-2xl md:text-3xl">95%</p>
              <p class="text-gray-600">Acceptance Rate</p>
            </div>
            <div class="bg-purple-50 p-4 rounded-lg">
              <p class="text-purple-600 font-bold text-2xl md:text-3xl">500+</p>
              <p class="text-gray-600">Students Helped</p>
            </div>
          </div>
          
          <!-- CTA Button -->
          <div class="mt-8" id="see-more-btn">
            <a href="{{ 'about' }}#about" class="inline-flex items-center px-8 py-3 bg-purple-600 hover:bg-purple-700 text-white font-semibold rounded-lg transition duration-300 shadow-lg hover:shadow-xl">
              Learn More About Us
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 ml-2" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
              </svg>
            </a>
          </div>
        </div>
      </div>
      
      <!-- Image (Right Side) -->
      <div class="md:w-1/2 order-1 md:order-2">
        <div class="relative rounded-xl overflow-hidden shadow-xl h-80 md:h-96 lg:h-[500px]">
          <!-- Main Image -->
          <img src="assests/images/main1.png" alt="Resource Education Hub team helping students" 
               class="w-full h-full object-cover transition-transform duration-500 hover:scale-105">
          
          <!-- Image Overlay -->
          <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black/40"></div>
          
          <!-- Experience Badge -->
          <div class="absolute top-6 right-6 bg-white/90 backdrop-blur-sm px-4 py-2 rounded-full shadow-md">
            <div class="flex items-center">
              <span class="text-purple-600 font-bold text-xl mr-2">5+</span>
              <span class="text-gray-800">Years Experience</span>
            </div>
          </div>
          
          <!-- Image Caption -->
          <div class="absolute bottom-0 left-0 right-0 p-6 text-white">
            <p class="text-lg font-medium">Guiding students to global education since 2020</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

  <!-- Services Section - Enhanced -->
  <section class="gsap services w-full px-6 lg:px-20 py-10 bg-gray-50">
    <div class="container ">
    <!-- Section Header -->
    <div class="mb-10">
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
      Our Services
      </h2>
      <p class="text-gray-600 max-w-2xl text-lg">
      Comprehensive solutions tailored to your educational journey
      </p>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10">
      <!-- Study Abroad Card -->
      <div
      class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border-l-4 border-indigo-600 group">
      <div class="p-8 flex flex-col md:flex-row items-center">
        <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-6">
        <div class="bg-indigo-100 p-4 rounded-full">
          <img src="https://png.pngtree.com/png-clipart/20230816/original/pngtree-trainee-going-studying-abroad-rgb-color-icon-linear-logo-international-vector-picture-image_10900150.pngx" class="h-16 w-16" alt="Study Abroad">
        </div>
        </div>
        <div>
        <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-indigo-700 transition-colors">Study Abroad
        </h3>
        <p class="text-gray-600 mb-4">
          End-to-end guidance for international education including university selection, application support, and
          visa assistance.
        </p>
        <a href="#"
          class="inline-flex items-center text-indigo-600 font-medium hover:text-indigo-800 transition-colors">
          Learn more
          <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </a>
        </div>
      </div>
      </div>

      <!-- Test Preparation Card -->
      <div
      class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border-l-4 border-purple-600 group">
      <div class="p-8 flex flex-col md:flex-row items-center">
        <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-6">
        <div class="bg-purple-100 p-4 rounded-full">
          <img src="assests/images/testprepare.png" class="h-16 w-16" alt="Test Preparation">
        </div>
        </div>
        <div>
        <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-purple-700 transition-colors">Test
          Preparation</h3>
        <p class="text-gray-600 mb-4">
          Professional support for IELTS, PTE, JLPT with mock exams, expert tips, and customized coaching.
        </p>
        <a href="#"
          class="inline-flex items-center text-purple-600 font-medium hover:text-purple-800 transition-colors">
          Learn more
          <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </a>
        </div>
      </div>
      </div>

      <!-- Career Counselling Card -->
      <div
      class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border-l-4 border-blue-600 group">
      <div class="p-8 flex flex-col md:flex-row items-center">
        <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-6">
        <div class="bg-blue-100 p-4 rounded-full">
          <img src="assests/images/carrer.png" class="h-16 w-16" alt="Career Counselling">
        </div>
        </div>
        <div id="see-more-btn">
        <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-blue-700 transition-colors">Career
          Counselling</h3>
        <p class="text-gray-600 mb-4">
          Tailored advice to select the ideal country, course, and career path that aligns with your goals.
        </p>
        <a href="#"
          class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition-colors">
          Learn more
          <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </a>
        </div>
      </div>
      </div>

      <!-- Documentation Guidance Card -->
      <div
      class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border-l-4 border-orange-600 group">
      <div class="p-8 flex flex-col md:flex-row items-center">
        <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-6">
        <div class="bg-orange-100 p-4 rounded-full">
          <img src="assests/images/docs.png" class="h-16 w-16" alt="Documentation Guidance">
        </div>
        </div>
        <div>
        <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-orange-700 transition-colors">Documentation
          Guidance</h3>
        <p class="text-gray-600 mb-4">
          Expert support to simplify your application journey with precise documentation assistance.
        </p>
        <a href="#"
          class="inline-flex items-center text-orange-600 font-medium hover:text-orange-800 transition-colors">
          Learn more
          <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
          </svg>
        </a>
        </div>
      </div>
      </div>
    </div>

    <!-- CTA Button -->
    <div class="text-center mt-12" >
      <a href="{{ 'services' }}#serif"
      class="inline-block bg-[#3a0461] hover:bg-[#510585] text-white font-semibold py-3 px-8 rounded-lg shadow-md transition-all duration-300 transform hover:-translate-y-1">
      Explore All Services
      </a>
    </div>
    </div>
  </section>

  <!-- TOp countries Content -->
  <section class="gsap countries" id="countries">
    <div class="w-full mb-4 mt-10 px-6  lg:px-20 flex flex-col">
    <div class="mb-10">
      <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
      Top Destinations
      </h1>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 items-center justify-center">

      <!-- South Korea -->
      <div
      class="max-w-[500px] h-auto rounded-2xl overflow-hidden shadow-md bg-white transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
      <div class="h-40 bg-gray-200">
        <img src="assests/images/south korea.jpg" alt="Sample image" class="w-full h-full object-cover rounded-t-2xl">
      </div>
      <div class="p-5 rounded-b-2xl">
        <h3 class="text-2xl font-bold text-purple-800 mb-2">South <span class="text-blue-600">Korea</span></h3>
        <p class="text-gray-600">-Courses: IT/Business and many more</p>
        <p class="text-gray-600">-D2-Visa Programme</p>
        <p class="text-gray-600">-Globally recognized degree</p>
      </div>
      </div>

      <!-- United States (USA) -->
      <div
      class="max-w-[500px] h-auto rounded-2xl overflow-hidden shadow-md bg-white transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
      <div class="h-40 bg-gray-200">
        <img src="assests/images/usa.png" alt="Sample image" class="w-full h-full object-cover rounded-t-2xl">
      </div>
      <div class="p-5 rounded-b-2xl">
        <h3 class="text-2xl font-bold text-purple-800 mb-2">United <span class="text-blue-600">States</span></h3>
        <p class="text-gray-600">-Vibrant Campus life</p>
        <p class="text-gray-600">-Famous University Culture</p>
        <p class="text-gray-600">-Study: Bachelor/Masters</p>
      </div>
      </div>

      <!-- United Kingdom (UK) -->
      <div
      class="max-w-[500px] sm:countries-hided hidden md:block  h-auto rounded-2xl overflow-hidden shadow-md bg-white transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
      <div class="h-40 bg-gray-200">
        <img src="assests/images/uk.jpg" alt="Sample image" class="w-full h-full object-cover rounded-t-2xl">
      </div>
      <div class="p-5 rounded-b-2xl">
        <h3 class="text-2xl font-bold text-purple-800 mb-2">United <span class="text-blue-600">Kingdom</span></h3>
        <p class="text-gray-600">-Top-ranked universities</p>
        <p class="text-gray-600">-Academic Excellence</p>
        <p class="text-gray-600">-Study: Bachelor/Masters/PG</p>
      </div>
      </div>

      <!-- New Zealand -->
      <div
      class="max-w-[500px] sm:countries-hided hidden md:block  h-auto rounded-2xl overflow-hidden shadow-md bg-white transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
      <div class="h-40 bg-gray-200">
        <img src="assests/images/newzealand.jpg" alt="Sample image" class="w-full h-full object-cover rounded-t-2xl">
      </div>
      <div class="p-5 rounded-b-2xl">
        <h3 class="text-2xl font-bold text-purple-800 mb-2">New <span class="text-blue-600">Zealand</span></h3>
        <p class="text-gray-600">-High-quality education system</p>
        <p class="text-gray-600">-Welcoming and safe environment</p>
        <p class="text-gray-600">-Study: Diploma/Bachelor/Masters</p>
      </div>
      </div>

      <!-- Canada -->
      <div
      class="max-w-[500px]sm:countries-hided hidden md:block h-auto rounded-2xl overflow-hidden shadow-md bg-white transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
      <div class="h-40 bg-gray-200">
        <img src="assests/images/canada.jpg" alt="Sample image" class="w-full h-full object-cover rounded-t-2xl">
      </div>
      <div class="p-5 rounded-b-2xl">
        <h3 class="text-2xl font-bold text-purple-800 mb-2">Study in <span class="text-blue-600">Canada</span></h3>
        <p class="text-gray-600">-World-class education</p>
        <p class="text-gray-600">-Academic Excellence</p>
        <p class="text-gray-600">-Study: Bachelor/Masters</p>
      </div>
      </div>

      <!-- Japan -->
      <div
      class="max-w-[500px] h-auto rounded-2xl overflow-hidden shadow-md bg-white transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
      <div class="h-40 bg-gray-200">
        <img src="assests/images/japan.jpg" alt="Sample image" class="w-full h-full object-cover rounded-t-2xl">
      </div>
      <div class="p-5 rounded-b-2xl">
        <h3 class="text-2xl font-bold text-purple-800 mb-2">Study in <span class="text-blue-600">Japan</span></h3>
        <p class="text-gray-600">-Lower tuition fees</p>
        <p class="text-gray-600">-Safe and secure environment</p>
        <p class="text-gray-600">-Post-study opportunities</p>
      </div>
      </div>

      <!-- Australia -->
      <div
      class="max-w-[500px] hidden countries-hided h-auto rounded-2xl overflow-hidden shadow-md bg-white transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
      <div class="h-40 bg-gray-200">
        <img src="assests/images/australia.jpg" alt="Sample image" class="w-full h-full object-cover rounded-t-2xl">
      </div>
      <div class="p-5 rounded-b-2xl">
        <h3 class="text-2xl font-bold text-purple-800 mb-2">Study in <span class="text-blue-600">Australia</span>
        </h3>
        <p class="text-gray-600">-Quality education & quality of life</p>
        <p class="text-gray-600">-Global Recognition</p>
        <p class="text-gray-600">-Study: Diploma/Adv. Diploma/Bachelor/Masters</p>
      </div>
      </div>

      <!-- Europe -->
      <div
      class="max-w-[500px] hidden countries-hided h-auto rounded-2xl overflow-hidden shadow-md bg-white transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
      <div class="h-40 bg-gray-200">
        <img src="assests/images/europe.jpg" alt="Sample image" class="w-full h-full object-cover rounded-t-2xl">
      </div>
      <div class="p-5 rounded-b-2xl">
        <h3 class="text-2xl font-bold text-purple-800 mb-2">Study in <span class="text-blue-600">Europe</span></h3>
        <p class="text-gray-600">-Affordable tuition fees</p>
        <p class="text-gray-600">-Learning about rich history and art</p>
        <p class="text-gray-600">-Study: Bachelor/Masters</p>
      </div>
      </div>

      <!-- Bonus Placeholder (for layout balance) -->
      <div
      class="max-w-[500px] hidden countries-hided  h-auto rounded-2xl overflow-hidden shadow-md bg-white transition-all duration-300 hover:shadow-xl hover:-translate-y-1">
      <div class="h-40 bg-gray-200">
        <img src="assests/images/yourfuture.jpeg" alt="Sample image" class="w-full h-full object-cover rounded-t-2xl">
      </div>
      <div class="p-5 rounded-b-2xl ">
        <h3 class="text-2xl font-bold text-purple-800 mb-2">Your <span class="text-blue-600">Future</span></h3>
        <p class="text-gray-600">-Choose your dream destination</p>
        <p class="text-gray-600">-Plan with confidence</p>
        <p class="text-gray-600">-Study abroad made easy</p>
      </div>
      </div>

    </div class="see-more-btn">

    <button id="see-more-btn"
      class=" my-5 px-6 py-3 w-48 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition-colors duration-300">
      See More
    </button>
    </div>
  </section>


  <section class="gsap universities">
    <div class="lg:px-20 px-6 py-7">
    <div class="mb-10">
      <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">
      Top universities
      </h1>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
      <!-- Card 1 -->
      <div class="relative group overflow-hidden rounded-lg shadow-md hover:shadow-lg transition-all duration-300">
      <a href="#">
        <img class="w-full h-64 object-cover transition-all duration-500 group-hover:scale-105"
        src="assests/images/1university.png" alt="Australia">
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
        src="assests/images/2university.jpeg" alt="Canada">
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
        src="assests/images/monash.jpeg" alt="United Kingdom">
        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-black/30 to-transparent"></div>
        <figcaption class="absolute bottom-0 left-0 right-0 p-4 text-white">
        <p class="text-lg font-medium">Monash University</p>
        <p class="text-sm mt-1 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
          Prestigious universities with rich history and cultural experience
        </p>
        </figcaption>
      </a>
      </div>
    </div>

    <!-- See More Button -->
    <div class="flex justify-center mt-10">
      <a href="{{ 'about' }}#uni"
      class="inline-block bg-[#510585] hover:bg-[#3a0461] text-white text-lg font-semibold py-3 px-6 rounded-md transition duration-300">
      See More Universities
      </a>
    </div>
    </div>
  </section>

  <!-- //Client Words -->
  <section id="gsap testimonials" class="px-6 lg:px-20 py-7 bg-gradient-to-r from-purple-900 via-purple-800 to-indigo-900">

    <div class="mb-10 text-center">
    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Voices of Success</h1>
    <p class="text-white max-w-2xl mx-auto">Hear what our students say about their experience</p>
    </div>

    <div class="relative max-w-5xl mx-auto px-4">
    <!-- Navigation Buttons (Hidden on small screens) -->
    <button id="prevBtn"
      class=" hidden md:flex absolute left-0 top-1/2 -translate-y-1/2 bg-white hover:bg-red-100 text-red-600 p-3 rounded-full shadow-md z-10 transition duration-300">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
    </button>

    <button id="nextBtn"
      class=" hidden md:flex absolute right-0 top-1/2 -translate-y-1/2 bg-white hover:bg-red-100 text-red-600 p-3 rounded-full shadow-md z-10 transition duration-300">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 md:h-6 md:w-6" fill="none" viewBox="0 0 24 24"
      stroke="currentColor">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
    </button>

    <!-- Testimonial Cards Container -->
    <div id="testimonialContainer" class="gsap flex overflow-hidden relative h-[460px] md:h-96 transition-all duration-500">
      <!-- Cards will be added dynamically -->
    </div>

    <!-- Indicators -->
    <div id="indicators" class="gsap flex justify-center mt-6 space-x-2">
      <!-- Dots inserted dynamically -->
    </div>
    </div>
  </section>

  <!-- 
  //Visit office   -->
  <section id=" visit-office" class="gsap py-16 px-6 lg:px-20">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-10 items-center">

    <!-- Info Section -->
    <div>
      <h2 class="text-4xl font-bold text-black-800 mb-8">Visit Our Office</h2>
      <p class="text-gray-600 mb-6">
      We'd love to meet you in person. Come by for a chat, consultation, or just to say hello!
      </p>

      <ul class="space-y-4 text-gray-700">
      <li>
        <strong> Address:</strong><br>
        3rd Floor, Sky Plaza, Dharanline, Itahari, Sunsari
      </li>
      <li>
        <strong> Phone:</strong><br>
        <a href="tel:+977-9811005186" class="text-blue-600 hover:underline"> 025-590684 |
        9852082384 | 9811005186</a>
      </li>
      <li>
        <strong> Email:</strong><br>
        <a href="mailto:info@resourceeduhub.com" class="text-blue-600 hover:underline">info@resourceeduhub.com</a>
      </li>
      </ul>
    </div>

    <!-- Google Map -->
    <div class="rounded-lg overflow-hidden shadow-md h-72 md:h-full">
      <iframe class="w-full h-full"
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2864.4973658965096!2d87.27112757429826!3d26.663424870761343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef6d0029737075%3A0xd2b2a3e04f22e239!2sResource%20Education%20Hub%20Pvt%20Ltd!5e1!3m2!1sen!2snp!4v1749460566177!5m2!1sen!2snp"
      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

    </div>

  </section>

<!-- Contact Form Section --> 
<section class="gsap py-16 bg-white">
  <div class="max-w-full px-6 lg:px-20 ">
    <div class=" mb-12">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        Send Us a <span class="text-purple-600">Message</span>
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl ">
        Have questions about studying abroad? Fill out the form below and we'll get back to you soon.
      </p>
    </div>
    <form class="form" method="POST" action="{{ 'message' }}" id="queryform" class="bg-gray-50 p-8 rounded-xl shadow-lg">
      @csrf
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div>
          <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
          <input type="text" id="name" name="name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="Your name" required>
        </div>
        <div>
          <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
          <input type="email" id="email" name="email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="your@email.com" required>
        </div>
      </div>
      
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
        <div>
          <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
          <input type="number" id="phone" name="phone" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="+977 98xxxxxxx">
        </div>
        <div>
          <label for="country" class="block text-gray-700 font-medium mb-2">Interested Country</label>
          <select id="country" name="country" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
            <option value="">Select a country</option>
            <option value="UK">United Kingdom</option>
            <option value="USA">United States</option>
            <option value="Australia">Australia</option>
            <option value="Canada">Canada</option>
            <option value="Japan">Japan</option>
            <option value="Other">Other</option>
          </select>
        </div>
      </div>
      
      <div class="mb-6">
        <label for="message" class="block text-gray-700 font-medium mb-2">Your Message</label>
        <textarea id="message" required name="message" rows="4" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent" placeholder="Tell us about your study abroad plans..."></textarea>
      </div>
      
      <div class="flex items-center mb-6">
        <input id="consent" name="consent" type="checkbox" class="w-4 h-4 text-purple-600 rounded focus:ring-purple-500" required>
        <label for="consent" class="ml-2 text-gray-700">I agree to receive emails and phone calls regarding my inquiry</label>
      </div>
      
      <button type="submit" name="submit" class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-4 px-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
        Send Message
        <svg class="w-5 h-5 inline ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg>
      </button>
    </form>
  </div>
</section>

@endsection