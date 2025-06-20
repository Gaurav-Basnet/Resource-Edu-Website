@extends('master')
@section('title', 'Services')


@section('content')

<section class="relative text-white py-20 overflow-hidden">
  <!-- Background Video -->
  <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
    <source src="../assests/images/main-vid.mp4" type="video/mp4" />
    Your browser does not support the video tag.
  </video>

  <!-- Overlay to darken video for better text readability -->
  <div class="absolute inset-0 bg-purple-900 bg-opacity-70 "></div>

  <!-- Content -->
  <div class="relative z-20 max-w-7xl mx-auto px-6 lg:px-20 text-center">
    <h1 class="text-4xl md:text-5xl font-bold mb-4 font-roboto">Our Services</h1>
    <p class="text-lg md:text-xl mb-6 font-roboto">
      Explore how we support your educational journey and study abroad dreams.
    </p>

    <!-- Search Box -->
    <div class="max-w-xl mx-auto">
      <form action="#" method="GET" class="flex items-center bg-white rounded-full overflow-hidden shadow-md">
        <input
          type="text"
          name="search"
          placeholder="Search services..."
          class="w-full px-5 py-3 text-gray-800 focus:outline-none"
        />
        <button
          type="submit"
          class="bg-purple-600 hover:bg-purple-800 text-white px-5 py-3 rounded-r-full font-semibold transition duration-300"
        >
          Search
        </button>
      </form>
    </div>
  </div>
</section>

<!-- Services Section - Enhanced -->
<section id="seri" class="gsap services w-full px-6 lg:px-20 py-10 bg-gray-50">
  <div class="container ">
    <!-- Section Header -->
    <div class="mb-9 text-center">
      <h2 class="text-3xl md:text-4xl font-bold text-purple-900 mb-4">
        Our Services
      </h2>
      <p class="text-center text-gray-600 max-w-full text-lg">
        Comprehensive solutions tailored to your educational journey
      </p>
    </div>

    <!-- Services Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 lg:gap-10">
      <!-- Study Abroad Card -->
      <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border-l-4 border-indigo-600 group">
        <div class="p-8 flex flex-col md:flex-row items-center">
          <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-6">
            <div class="bg-indigo-100 p-4 rounded-full">
              <img src="assests/images/study-abroad.png" class="h-16 w-16" alt="Study Abroad">
            </div>
          </div>
          <div>
            <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-indigo-700 transition-colors">Study Abroad</h3>
            <p class="text-gray-600 mb-4">
              End-to-end guidance for international education including university selection, application support, and visa assistance.
            </p>
            <a href="#" class="inline-flex items-center text-indigo-600 font-medium hover:text-indigo-800 transition-colors">
              Learn more
              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Test Preparation Card -->
      <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border-l-4 border-purple-600 group">
        <div class="p-8 flex flex-col md:flex-row items-center">
          <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-6">
            <div class="bg-purple-100 p-4 rounded-full">
              <img src="assests/images/testprepare.png" class="h-16 w-16" alt="Test Preparation">
            </div>
          </div>
          <div>
            <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-purple-700 transition-colors">Test Preparation</h3>
            <p class="text-gray-600 mb-4">
              Professional support for IELTS, PTE, JLPT with mock exams, expert tips, and customized coaching.
            </p>
            <a href="#" class="inline-flex items-center text-purple-600 font-medium hover:text-purple-800 transition-colors">
              Learn more
              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Career Counselling Card -->
      <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border-l-4 border-blue-600 group">
        <div class="p-8 flex flex-col md:flex-row items-center">
          <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-6">
            <div class="bg-blue-100 p-4 rounded-full">
              <img src="assests/images/carrer.png" class="h-16 w-16" alt="Career Counselling">
            </div>
          </div>
          <div>
            <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-blue-700 transition-colors">Career Counselling</h3>
            <p class="text-gray-600 mb-4">
              Tailored advice to select the ideal country, course, and career path that aligns with your goals.
            </p>
            <a href="#" class="inline-flex items-center text-blue-600 font-medium hover:text-blue-800 transition-colors">
              Learn more
              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Documentation Guidance Card -->
      <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border-l-4 border-orange-600 group">
        <div class="p-8 flex flex-col md:flex-row items-center">
          <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-6">
            <div class="bg-orange-100 p-4 rounded-full">
              <img src="assests/images/docs.png" class="h-16 w-16" alt="Documentation Guidance">
            </div>
          </div>
          <div>
            <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-orange-700 transition-colors">Documentation Guidance</h3>
            <p class="text-gray-600 mb-4">
              Expert support to simplify your application journey with precise documentation assistance.
            </p>
            <a href="#" class="inline-flex items-center text-orange-600 font-medium hover:text-orange-800 transition-colors">
              Learn more
              <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
              </svg>
            </a>
          </div>
        </div>
      </div>

      <!-- Visa Assistance Card -->
<div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border-l-4 border-green-600 group">
  <div class="p-8 flex flex-col md:flex-row items-center">
    <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-6">
      <div class="bg-green-100 p-4 rounded-full">
        <img src="assests/images/visa.png" class="h-16 w-16" alt="Visa Assistance">
      </div>
    </div>
    <div>
      <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-green-700 transition-colors">Visa Assistance</h3>
      <p class="text-gray-600 mb-4">
        Comprehensive visa guidance including application preparation, document checklist, and interview coaching with 98% success rate.
      </p>
      <a href="#" class="inline-flex items-center text-green-600 font-medium hover:text-green-800 transition-colors">
        Learn more
        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
      </a>
    </div>
  </div>
</div>

<!-- Scholarship Guidance Card -->
<div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 border-l-4 border-pink-600 group">
  <div class="p-8 flex flex-col md:flex-row items-center">
    <div class="flex-shrink-0 mb-6 md:mb-0 md:mr-6">
      <div class="bg-pink-100 p-4 rounded-full">
        <img src="assests/images/scholarship.png" class="h-16 w-16" alt="Scholarship Guidance">
      </div>
    </div>
    <div>
      <h3 class="text-xl font-bold text-gray-800 mb-3 group-hover:text-pink-700 transition-colors">Scholarship Guidance</h3>
      <p class="text-gray-600 mb-4">
        Expert help in identifying and applying for scholarships, grants, and financial aid opportunities worldwide.
      </p>
      <a href="#" class="inline-flex items-center text-pink-600 font-medium hover:text-pink-800 transition-colors">
        Learn more
        <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
        </svg>
      </a>
    </div>
  </div>
</div>

    </div>

  </div>
</section>

  <!-- CTA Section -->
  <section class="gsap bg-gradient-to-r from-purple-800 to-purple-600 text-white py-16">
    <div class="max-w-4xl mx-auto px-6 lg:px-20 text-center">
      <h2 class="text-3xl font-bold mb-6">Ready to take the next step?</h2>
      <p class="mb-8">
        Connect with our advisors today and begin your study abroad journey with confidence.
      </p>
      <a href="{{ 'login' }}" class="inline-block bg-white text-purple-700 font-semibold px-8 py-3 rounded-md shadow-lg hover:bg-gray-100 transition">
        Get Started
      </a>
    </div>
  </section>

<section class="gsap bg-gray-100 py-16">
  <div class="max-w-full px-6 lg:px-20">
    <div class="text-center mb-12">
      <h2 class="text-4xl font-bold text-purple-800">Our Facilities</h2>
      <p class="text-gray-700 mt-4 text-lg">We provide world-class facilities to make your learning and preparation journey smooth and effective.</p>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 items-center justify-center">
      
      <!-- Facility 1 - Library -->
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">
        <div class="overflow-hidden">
          <img src="../assests/images/lab1.jpg" 
               class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105" 
               alt="Library">
        </div>
        <div class="p-5">
          <h4 class="text-xl font-semibold text-purple-900 mb-2 group-hover:text-purple-700 transition-colors duration-300">
            Resource-Rich Library
          </h4>
          <p class="text-gray-600 leading-relaxed">
            Access updated study materials, books, past papers, and international guides in a quiet study zone.
          </p>
        </div>
      </div>

      <!-- Facility 2 - Computer Lab -->
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">
        <div class="overflow-hidden">
          <img src="../assests/images/computer-lab.jpg" 
               class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105" 
               alt="Computer Lab">
        </div>
        <div class="p-5">
          <h4 class="text-xl font-semibold text-purple-900 mb-2 group-hover:text-purple-700 transition-colors duration-300">
            Modern Computer Lab
          </h4>
          <p class="text-gray-600 leading-relaxed">
            High-speed internet with latest software for test preparation and research with comfortable workstations.
          </p>
        </div>
      </div>

      <!-- Facility 3 - Study Rooms -->
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">
        <div class="overflow-hidden">
          <img src="../assests/images/study-room.jpg" 
               class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105" 
               alt="Study Rooms">
        </div>
        <div class="p-5">
          <h4 class="text-xl font-semibold text-purple-900 mb-2 group-hover:text-purple-700 transition-colors duration-300">
            Private Study Rooms
          </h4>
          <p class="text-gray-600 leading-relaxed">
            Bookable private spaces for individual or group study sessions with whiteboards and presentation tools.
          </p>
        </div>
      </div>

      <!-- Facility 4 - Mock Test Center -->
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">
        <div class="overflow-hidden">
          <img src="../assests/images/test-center.jpg" 
               class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105" 
               alt="Test Center">
        </div>
        <div class="p-5">
          <h4 class="text-xl font-semibold text-purple-900 mb-2 group-hover:text-purple-700 transition-colors duration-300">
            Mock Test Center
          </h4>
          <p class="text-gray-600 leading-relaxed">
            Experience real exam conditions with our timed mock tests and detailed performance analytics.
          </p>
        </div>
      </div>

      <!-- Facility 5 - Counseling Center -->
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">
        <div class="overflow-hidden">
          <img src="../assests/images/counseling.jpg" 
               class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105" 
               alt="Counseling">
        </div>
        <div class="p-5">
          <h4 class="text-xl font-semibold text-purple-900 mb-2 group-hover:text-purple-700 transition-colors duration-300">
            Expert Counseling
          </h4>
          <p class="text-gray-600 leading-relaxed">
            One-on-one sessions with experienced counselors for career guidance and university applications.
          </p>
        </div>
      </div>

      <!-- Facility 6 - Language Lab -->
      <div class="bg-white rounded-xl shadow-md hover:shadow-xl transition duration-300 overflow-hidden group">
        <div class="overflow-hidden">
          <img src="../assests/images/language-lab.jpg" 
               class="w-full h-48 object-cover transition-transform duration-500 group-hover:scale-105" 
               alt="Language Lab">
        </div>
        <div class="p-5">
          <h4 class="text-xl font-semibold text-purple-900 mb-2 group-hover:text-purple-700 transition-colors duration-300">
            Language Lab
          </h4>
          <p class="text-gray-600 leading-relaxed">
            Specialized audio-visual equipment for perfecting pronunciation and language skills.
          </p>
        </div>
      </div>
      

    </div>
  </div>
</section>

<!-- //Faq Section -->
<section class="gsap max-w-7xl mx-auto px-6 lg:px-20 py-16">
  <h2 class="text-3xl font-bold text-gray-900 mb-8 text-center">Frequently Asked Questions</h2>

  <div class="space-y-4 max-w-3xl mx-auto">
    <!-- FAQ Item 1 -->
    <div class="border border-gray-300 rounded-lg">
      <button 
        class="w-full px-6 py-4 text-left text-lg font-medium text-gray-800 focus:outline-none flex justify-between items-center"
        aria-expanded="false"
        onclick="toggleFAQ(this)"
      >
        What services do you offer for study abroad?
        <svg class="w-5 h-5 text-purple-700 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
      </button>
      <div class="px-6 pb-4 hidden text-gray-700">
        We provide test preparation, career counseling, documentation guidance, and more to support your study abroad journey.
      </div>
    </div>

    <!-- FAQ Item 2 -->
    <div class="border border-gray-300 rounded-lg">
      <button 
        class="w-full px-6 py-4 text-left text-lg font-medium text-gray-800 focus:outline-none flex justify-between items-center"
        aria-expanded="false"
        onclick="toggleFAQ(this)"
      >
        How can I prepare for IELTS with your help?
        <svg class="w-5 h-5 text-purple-700 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
      </button>
      <div class="px-6 pb-4 hidden text-gray-700">
        We offer expert tips, mock exams, and customized coaching sessions tailored to improve your IELTS score.
      </div>
    </div>

    <!-- FAQ Item 3 -->
    <div class="border border-gray-300 rounded-lg">
      <button 
        class="w-full px-6 py-4 text-left text-lg font-medium text-gray-800 focus:outline-none flex justify-between items-center"
        aria-expanded="false"
        onclick="toggleFAQ(this)"
      >
        Do you help with documentation for visa applications?
        <svg class="w-5 h-5 text-purple-700 transition-transform duration-300" fill="none" stroke="currentColor" stroke-width="2" viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round"><path d="M6 9l6 6 6-6"/></svg>
      </button>
      <div class="px-6 pb-4 hidden text-gray-700">
        Yes, our experts assist you in preparing and organizing all necessary documentation for your visa and application process.
      </div>
    </div>
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

<script>
    //services toogle button  
  function toggleFAQ(button) {
    const answer = button.nextElementSibling;
    const isExpanded = button.getAttribute('aria-expanded') === 'true';

    button.setAttribute('aria-expanded', !isExpanded);
    answer.classList.toggle('hidden');
    
    // Rotate the arrow
    const svg = button.querySelector('svg');
    if (!isExpanded) {
      svg.classList.add('rotate-180');
    } else {
      svg.classList.remove('rotate-180');
    }
  }
      // Register ScrollTrigger plugin
  if (typeof gsap !== 'undefined' && gsap.registerPlugin) {
    gsap.registerPlugin(ScrollTrigger);
  }

  // Animation for all sections with class 'gsap'
  gsap.utils.toArray(".gsap").forEach((section) => {
    gsap.from(section, {
      opacity: 1,
      y: 70,
      duration: 0.7,
      ease: "power2.out",
      scrollTrigger: {
        trigger: section,
        start: "top 80%",
        toggleActions: "play none none reverse",
        markers: false // Set to true to debug
      }
    });
  });


  // Special animation for grid items (cards)
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

gsap.from("#see-more-btn", {
  scale: 0.8,
  opacity: 0,
  duration: 0.8,
  ease: "power3.out",
  scrollTrigger: {
    trigger: "#see-more-btn",
    start: "top 75%",
    toggleActions: "play none none none",
   
  }
});

</script>

@endsection