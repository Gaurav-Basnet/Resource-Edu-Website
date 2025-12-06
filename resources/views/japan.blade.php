@extends('master')
@section('title', 'Study in Japan')

@section('content')

  <!-- Hero Section -->
  <section
    class="gsap relative overflow-hidden bg-gradient-to-br from-purple-900 to-indigo-800 text-white px-6 py-20 lg:px-20 text-center">
    <div class="absolute top-0 left-0 w-full h-full opacity-10">
    <div class="absolute top-20 left-10 w-40 h-40 rounded-full bg-purple-400 mix-blend-screen animate-float1"></div>
    <div class="absolute top-1/2 right-20 w-32 h-32 rounded-full bg-indigo-400 mix-blend-screen animate-float2"></div>
    <div class="absolute bottom-10 left-1/3 w-24 h-24 rounded-full bg-white mix-blend-screen animate-float3"></div>
    </div>

    <div class="relative max-w-4xl mx-auto">
    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight animate-fadeIn">
      Study in <span class="text-yellow-300">Japan</span>
    </h1>
    <p class="text-xl md:text-2xl mb-8 opacity-90 animate-fadeIn delay-100">
      Cutting-edge technology, rich culture, and world-class education
    </p>
    <div class="animate-fadeIn delay-200">
      <a href="{{ 'appointment' }}"
      class="inline-block bg-yellow-400 hover:bg-yellow-300 text-purple-900 font-bold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
      Free Japan Consultation →
      </a>
    </div>
    </div>
  </section>

  <!-- Why Japan Section -->
  <section class="gsap py-16 bg-white">
    <div class="max-w-full px-6 lg:px-20">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
      Why Study in <span class="text-purple-600">Japan</span>?
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
      Unique advantages of Japanese education
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Benefit 1 -->
      <div
      class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300 border border-gray-100 hover:border-purple-200">
      <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
        </svg>
      </div>
      <h3 class="text-xl font-bold mb-3">Technological Excellence</h3>
      <p class="text-gray-600">Learn from global leaders in robotics, engineering, and innovation.</p>
      </div>

      <!-- Benefit 2 -->
      <div
      class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300 border border-gray-100 hover:border-purple-200">
      <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
        </svg>
      </div>
      <h3 class="text-xl font-bold mb-3">Work Opportunities</h3>
      <p class="text-gray-600">Part-time work allowed (28 hrs/week) and post-study work visas available.</p>
      </div>

      <!-- Benefit 3 -->
      <div
      class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300 border border-gray-100 hover:border-purple-200">
      <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z">
        </path>
        </svg>
      </div>
      <h3 class="text-xl font-bold mb-3">Cultural Experience</h3>
      <p class="text-gray-600">Immerse yourself in unique traditions blending ancient and modern.</p>
      </div>
    </div>
    </div>
  </section>

  <!-- Top Institutions Section -->
  <section class="gsap py-16 bg-gray-50">
    <div class="max-w-full px-6 lg:px-20">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">
      Top <span class="text-purple-600">Japanese Institutions</span>
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      Partner universities with English-taught programs
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Uni 1 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
      <div class="h-48 bg-red-600 flex items-center justify-center">
        <img
        src="https://media.istockphoto.com/id/614858790/photo/university-of-tokyo-building.jpg?s=612x612&w=0&k=20&c=vQnftg1uPW6-B8OV4zHL02UYaxvrOZ_WdKQTnOBjQGM="
        alt="University of Tokyo" class="h-full w-full object-cover">
      </div>
      <div class="p-6">
        <h3 class="text-xl font-bold mb-2">University of Tokyo</h3>
        <p class="text-gray-600 mb-4">Ranked #1 in Japan, #23 globally (QS 2024)</p>
        <div class="flex items-center text-sm text-gray-500">
        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
        </svg>
        Tokyo
        </div>
      </div>
      </div>

      <!-- Uni 2 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
      <div class="h-48 bg-blue-800 flex items-center justify-center">
        <img
        src="https://www.shutterstock.com/image-photo/kyoto-japan-23-oct-2019-260nw-1831574179.jpg"
        alt="Kyoto University" class="h-full w-full object-cover">
      </div>
      <div class="p-6">
        <h3 class="text-xl font-bold mb-2">Kyoto University</h3>
        <p class="text-gray-600 mb-4">Ranked #2 in Japan, #36 globally (QS 2024)</p>
        <div class="flex items-center text-sm text-gray-500">
        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
        </svg>
        Kyoto
        </div>
      </div>
      </div>

      <!-- Uni 3 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
      <div class="h-48 bg-gray-800 flex items-center justify-center">
        <img
        src="https://images.adsttc.com/media/images/61d7/ea9e/336e/2873/4574/5495/large_jpg/001-top.jpg?1641540284"
        alt="Tokyo Institute of Technology" class="h-full w-full object-cover">
      </div>
      <div class="p-6">
        <h3 class="text-xl font-bold mb-2">Tokyo Institute of Technology</h3>
        <p class="text-gray-600 mb-4">Top STEM university, #55 globally (QS 2024)</p>
        <div class="flex items-center text-sm text-gray-500">
        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
        </svg>
        Tokyo
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Education System Section -->
  <section class="gsap py-16 bg-white">
    <div class="max-w-full px-6 lg:px-20">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
      Japanese <span class="text-purple-600">Education System</span>
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
      Understanding academic pathways in Japan
      </p>
    </div>

    <div class="bg-purple-50 rounded-xl p-8 md:p-12">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Pathway 1 -->
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
        <div class="text-purple-600 font-bold text-lg mb-3">1. Language Schools</div>
        <p class="text-gray-600 mb-4">1-2 year intensive Japanese language programs</p>
        <ul class="space-y-2 text-sm text-gray-600">
        <li class="flex items-start">
          <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span>Prepare for JLPT exams</span>
        </li>
        <li class="flex items-start">
          <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span>Pathway to vocational/degree programs</span>
        </li>
        </ul>
      </div>

      <!-- Pathway 2 -->
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
        <div class="text-purple-600 font-bold text-lg mb-3">2. Vocational Schools (Senmon Gakko)</div>
        <p class="text-gray-600 mb-4">2-3 year career-focused training</p>
        <ul class="space-y-2 text-sm text-gray-600">
        <li class="flex items-start">
          <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span>Technology, design, business programs</span>
        </li>
        <li class="flex items-start">
          <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span>Strong industry connections</span>
        </li>
        </ul>
      </div>

      <!-- Pathway 3 -->
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
        <div class="text-purple-600 font-bold text-lg mb-3">3. Universities</div>
        <p class="text-gray-600 mb-4">Bachelor's (4 years) and Graduate programs</p>
        <ul class="space-y-2 text-sm text-gray-600">
        <li class="flex items-start">
          <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span>Growing number of English-taught programs</span>
        </li>
        <li class="flex items-start">
          <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span>Research opportunities</span>
        </li>
        </ul>
      </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Popular Courses Section -->
  <section class="gsap py-16 bg-gray-50">
    <div class="max-w-full px-6 lg:px-20">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">
      Popular <span class="text-purple-600">Programs</span>
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      High-demand fields with excellent career prospects
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Course 1 -->
      <div
      class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-purple-600">
      <h3 class="text-xl font-bold mb-3">Engineering & Robotics</h3>
      <p class="text-gray-600 mb-4">Mechanical, Electrical, Automotive, AI</p>
      <div class="text-sm text-purple-600 font-medium">Starting from ¥800,000/year</div>
      </div>

      <!-- Course 2 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-blue-600">
      <h3 class="text-xl font-bold mb-3">Computer Science</h3>
      <p class="text-gray-600 mb-4">Software Engineering, Data Science, Cybersecurity</p>
      <div class="text-sm text-blue-600 font-medium">Starting from ¥900,000/year</div>
      </div>

      <!-- Course 3 -->
      <div
      class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-green-600">
      <h3 class="text-xl font-bold mb-3">Business & Economics</h3>
      <p class="text-gray-600 mb-4">International Business, Finance, MBA</p>
      <div class="text-sm text-green-600 font-medium">Starting from ¥750,000/year</div>
      </div>

      <!-- Course 4 -->
      <div
      class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-yellow-600">
      <h3 class="text-xl font-bold mb-3">Japanese Language & Culture</h3>
      <p class="text-gray-600 mb-4">Intensive language, Traditional Arts</p>
      <div class="text-sm text-yellow-600 font-medium">Starting from ¥600,000/year</div>
      </div>
    </div>
    </div>
  </section>

  <!-- Visa & Requirements Section -->
  <section class="gsap py-16 bg-white">
    <div class="max-w-full px-6 lg:px-20">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
      Student <span class="text-purple-600">Visa Process</span>
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
      Requirements for studying in Japan
      </p>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
      <!-- Requirements -->
      <div>
      <h3 class="text-2xl font-bold mb-6 text-purple-700">Key Requirements</h3>
      <div class="space-y-6">
        <div class="flex">
        <div class="flex-shrink-0">
          <div class="flex items-center justify-center h-10 w-10 rounded-md bg-purple-100 text-purple-700">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          </div>
        </div>
        <div class="ml-4">
          <h4 class="text-lg font-medium text-gray-900">Certificate of Eligibility</h4>
          <p class="mt-1 text-gray-600">Issued by your Japanese school</p>
        </div>
        </div>

        <div class="flex">
        <div class="flex-shrink-0">
          <div class="flex items-center justify-center h-10 w-10 rounded-md bg-purple-100 text-purple-700">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          </div>
        </div>
        <div class="ml-4">
          <h4 class="text-lg font-medium text-gray-900">Financial Proof</h4>
          <p class="mt-1 text-gray-600">¥1.5-2 million/year available funds</p>
        </div>
        </div>

        <div class="flex">
        <div class="flex-shrink-0">
          <div class="flex items-center justify-center h-10 w-10 rounded-md bg-purple-100 text-purple-700">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          </div>
        </div>
        <div class="ml-4">
          <h4 class="text-lg font-medium text-gray-900">Academic Records</h4>
          <p class="mt-1 text-gray-600">High school/university transcripts</p>
        </div>
        </div>

        <div class="flex">
        <div class="flex-shrink-0">
          <div class="flex items-center justify-center h-10 w-10 rounded-md bg-purple-100 text-purple-700">
          <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
          </div>
        </div>
        <div class="ml-4">
          <h4 class="text-lg font-medium text-gray-900">Japanese Proficiency</h4>
          <p class="mt-1 text-gray-600">JLPT N2/N5 depending on program</p>
        </div>
        </div>
      </div>
      </div>

      <!-- Process -->
      <div>
      <h3 class="text-2xl font-bold mb-6 text-purple-700">Application Timeline</h3>
      <div class="flow-root">
        <ul class="-mb-8">
        <li>
          <div class="relative pb-8">
          <div class="relative flex items-start space-x-3">
            <div>
            <div class="relative px-1">
              <div
              class="h-8 w-8 bg-purple-100 rounded-full ring-8 ring-white flex items-center justify-center">
              <svg class="h-5 w-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                </path>
              </svg>
              </div>
            </div>
            </div>
            <div class="min-w-0 flex-1 py-0">
            <div class="text-lg text-gray-700">
              <span class="font-bold text-gray-900">1. Apply to school</span> (6-12 months before start)
            </div>
            </div>
          </div>
          </div>
        </li>

        <li>
          <div class="relative pb-8">
          <div class="relative flex items-start space-x-3">
            <div>
            <div class="relative px-1">
              <div
              class="h-8 w-8 bg-purple-100 rounded-full ring-8 ring-white flex items-center justify-center">
              <svg class="h-5 w-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                </path>
              </svg>
              </div>
            </div>
            </div>
            <div class="min-w-0 flex-1 py-0">
            <div class="text-lg text-gray-700">
              <span class="font-bold text-gray-900">2. Receive COE</span> (3-6 months processing)
            </div>
            </div>
          </div>
          </div>
        </li>

        <li>
          <div class="relative pb-8">
          <div class="relative flex items-start space-x-3">
            <div>
            <div class="relative px-1">
              <div
              class="h-8 w-8 bg-purple-100 rounded-full ring-8 ring-white flex items-center justify-center">
              <svg class="h-5 w-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                </path>
              </svg>
              </div>
            </div>
            </div>
            <div class="min-w-0 flex-1 py-0">
            <div class="text-lg text-gray-700">
              <span class="font-bold text-gray-900">3. Apply for visa</span> at Japanese embassy
            </div>
            </div>
          </div>
          </div>
        </li>

        <li>
          <div class="relative">
          <div class="relative flex items-start space-x-3">
            <div>
            <div class="relative px-1">
              <div
              class="h-8 w-8 bg-purple-100 rounded-full ring-8 ring-white flex items-center justify-center">
              <svg class="h-5 w-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7">
                </path>
              </svg>
              </div>
            </div>
            </div>
            <div class="min-w-0 flex-1 py-0">
            <div class="text-lg text-gray-700">
              <span class="font-bold text-gray-900">4. Enter Japan</span> within 3 months of visa issuance
            </div>
            </div>
          </div>
          </div>
        </li>
        </ul>
      </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Cost of Living Section -->
  <section class="gsap py-16 bg-gray-50">
    <div class="max-w-full px-6 lg:px-20">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">
      <span class="text-purple-600">Living Costs</span> in Japan
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      Estimated monthly expenses for students
    </p>

    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
      <div class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-gray-200">
      <!-- Tokyo -->
      <div class="p-8 text-center">
        <h3 class="text-lg font-medium text-gray-900 mb-4">Tokyo/Osaka</h3>
        <div class="text-3xl font-bold text-purple-600 mb-6">¥120,000-¥180,000</div>
        <ul class="space-y-3 text-gray-600">
        <li class="flex items-center justify-center">
          <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          Shared accommodation
        </li>
        <li class="flex items-center justify-center">
          <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          Public transport
        </li>
        <li class="flex items-center justify-center">
          <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          Basic meals
        </li>
        </ul>
      </div>

      <!-- Kyoto -->
      <div class="p-8 text-center">
        <h3 class="text-lg font-medium text-gray-900 mb-4">Kyoto/Fukuoka</h3>
        <div class="text-3xl font-bold text-blue-600 mb-6">¥90,000-¥140,000</div>
        <ul class="space-y-3 text-gray-600">
        <li class="flex items-center justify-center">
          <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          Private dormitory
        </li>
        <li class="flex items-center justify-center">
          <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          Bicycle transport
        </li>
        <li class="flex items-center justify-center">
          <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          Occasional dining out
        </li>
        </ul>
      </div>

      <!-- Smaller Cities -->
      <div class="p-8 text-center">
        <h3 class="text-lg font-medium text-gray-900 mb-4">Smaller Cities</h3>
        <div class="text-3xl font-bold text-green-600 mb-6">¥70,000-¥110,000</div>
        <ul class="space-y-3 text-gray-600">
        <li class="flex items-center justify-center">
          <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          Shared house
        </li>
        <li class="flex items-center justify-center">
          <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          Walking distance
        </li>
        <li class="flex items-center justify-center">
          <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          Home cooking
        </li>
        </ul>
      </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Work & Immigration Section -->
  <section class="gsap py-16 bg-white">
    <div class="max-w-full px-6 lg:px-20">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
      <span class="text-purple-600">Work Opportunities</span> in Japan
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
      Working during and after your studies
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
      <!-- Part-time Work -->
      <div class="bg-purple-50 p-8 rounded-xl border border-purple-100">
      <h3 class="text-xl font-bold mb-4 text-purple-800">Part-time Work</h3>
      <ul class="space-y-3 text-gray-700">
        <li class="flex items-start">
        <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        <span>Up to 28 hours/week during school terms</span>
        </li>
        <li class="flex items-start">
        <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        <span>Full-time during school breaks</span>
        </li>
        <li class="flex items-start">
        <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        <span>Common jobs: Convenience stores, restaurants, tutoring</span>
        </li>
      </ul>
      </div>

      <!-- Post-Study Work -->
      <div class="bg-purple-50 p-8 rounded-xl border border-purple-100">
      <h3 class="text-xl font-bold mb-4 text-purple-800">Post-Study Work</h3>
      <ul class="space-y-3 text-gray-700">
        <li class="flex items-start">
        <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        <span>Change visa status to work visa after graduation</span>
        </li>
        <li class="flex items-start">
        <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        <span>Job offer required from Japanese company</span>
        </li>
        <li class="flex items-start">
        <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
        </svg>
        <span>Pathway to permanent residency after 5-10 years</span>
        </li>
      </ul>
      </div>
    </div>
    </div>
  </section>

  <!-- Consultation CTA -->
  <section id="consultation" class="gsap py-20 bg-gradient-to-br from-purple-900 to-indigo-800 text-white">
    <div class="max-w-full px-6 lg:px-20  text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">
      Ready to Begin Your <span class="text-yellow-300">Japanese Journey</span>?
    </h2>
    <p class="text-xl mb-8 max-w-2xl mx-auto">
      Book a free consultation with our Japan education specialists
    </p>

    <div class="flex flex-col sm:flex-row justify-center gap-4">
      <a href="{{ 'appointment' }}"
      class="inline-flex items-center justify-center bg-yellow-400 hover:bg-yellow-300 text-purple-900 font-bold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
      Book Free Session
      <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
      </svg>
      </a>

      <a href="tel:9852082384"
      class="inline-flex items-center justify-center bg-transparent hover:bg-white/10 border-2 border-white text-white font-bold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300">
      <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
        </path>
      </svg>
      Call: 9852082384
      </a>
    </div>
    </div>
  </section>

<section class="gsap relative text-white py-20 h-96 overflow-hidden">
  <!-- Background Video -->
  <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
    <source src="../assests/images/video.mp4" type="video/mp4" />
    Your browser does not support the video tag.
  </video>



</section>



@endsection