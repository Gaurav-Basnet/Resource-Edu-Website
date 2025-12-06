@extends('master')
@section('title', 'Study in Australia')

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
      Study in <span class="text-yellow-300">Australia</span>
    </h1>
    <p class="text-xl md:text-2xl mb-8 opacity-90 animate-fadeIn delay-100">
      World-class education, vibrant cities, and post-study work opportunities
    </p>
    <div class="animate-fadeIn delay-200">
      <a href="{{ 'appointment' }}"
      class="inline-block bg-yellow-400 hover:bg-yellow-300 text-purple-900 font-bold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
      Free Australia Consultation →
      </a>
    </div>
    </div>
  </section>

  <!-- Why Australia Section -->
  <section class="gsap py-16 bg-white">
    <div class="max-w-full px-6 lg:px-20">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
      Why Study in <span class="text-purple-600">Australia</span>?
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
      Discover the benefits of Australian education and lifestyle
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Benefit 1 -->
      <div
      class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300 border border-gray-100 hover:border-purple-200">
      <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9">
        </path>
        </svg>
      </div>
      <h3 class="text-xl font-bold mb-3">Global Recognition</h3>
      <p class="text-gray-600">Australian degrees are recognized worldwide with 7 universities in the top 100
        globally.</p>
      </div>

      <!-- Benefit 2 -->
      <div
      class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300 border border-gray-100 hover:border-purple-200">
      <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2">
        </path>
        </svg>
      </div>
      <h3 class="text-xl font-bold mb-3">Post-Study Work</h3>
      <p class="text-gray-600">2-4 years post-study work visa depending on your qualification.</p>
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
      <h3 class="text-xl font-bold mb-3">Quality of Life</h3>
      <p class="text-gray-600">6 of the top 40 best student cities worldwide are in Australia.</p>
      </div>
    </div>
    </div>
  </section>

  <!-- Top Universities Section -->
  <section class="gsap py-16 bg-gray-50">
    <div class="max-w-full px-6 lg:px-20">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">
      Top <span class="text-purple-600">Australian Universities</span>
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      We partner with leading institutions across Australia
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Uni 1 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
      <div class="h-48 bg-blue-900 flex items-center justify-center">
        <img
        src="https://images.shiksha.com/mediadata/images/1539748284phpkXrez1.jpeg"
        alt="University of Melbourne" class="h-full w-full object-cover">
      </div>
      <div class="p-6">
        <h3 class="text-xl font-bold mb-2">University of Melbourne</h3>
        <p class="text-gray-600 mb-4">Ranked #1 in Australia, #33 globally (QS 2024)</p>
        <div class="flex items-center text-sm text-gray-500">
        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
        </svg>
        Melbourne, Victoria
        </div>
      </div>
      </div>

      <!-- Uni 2 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
      <div class="h-48 bg-red-800 flex items-center justify-center">
        <img
        src="https://www.applyboard.com/wp-content/uploads/2021/11/australian-national-university.jpeg"
        alt="Australian National University" class="h-full w-full object-cover">
      </div>
      <div class="p-6">
        <h3 class="text-xl font-bold mb-2">Australian National University</h3>
        <p class="text-gray-600 mb-4">Ranked #2 in Australia, #34 globally (QS 2024)</p>
        <div class="flex items-center text-sm text-gray-500">
        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
        </svg>
        Canberra, ACT
        </div>
      </div>
      </div>

      <!-- Uni 3 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
      <div class="h-48 bg-yellow-600 flex items-center justify-center">
        <img
        src="https://images.shiksha.com/mediadata/images/1515481785phpZsgL9D_g.png"
        alt="University of Sydney" class="h-full w-full object-cover">
      </div>
      <div class="p-6">
        <h3 class="text-xl font-bold mb-2">University of Sydney</h3>
        <p class="text-gray-600 mb-4">Ranked #3 in Australia, #41 globally (QS 2024)</p>
        <div class="flex items-center text-sm text-gray-500">
        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
        </svg>
        Sydney, NSW
        </div>
      </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Study Pathways Section -->
  <section class="gsap py-16 bg-white">
    <div class="max-w-full px-6 lg:px-20">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
      Study <span class="text-purple-600">Pathways</span> in Australia
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
      Multiple entry points to suit your academic background
      </p>
    </div>

    <div class="bg-purple-50 rounded-xl p-8 md:p-12">
      <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Pathway 1 -->
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
        <div class="text-purple-600 font-bold text-lg mb-3">1. Foundation Studies</div>
        <p class="text-gray-600 mb-4">1-year preparation for students who don't meet direct entry requirements</p>
        <ul class="space-y-2 text-sm text-gray-600">
        <li class="flex items-start">
          <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span>For high school graduates</span>
        </li>
        <li class="flex items-start">
          <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span>Guaranteed entry to bachelor's upon completion</span>
        </li>
        </ul>
      </div>

      <!-- Pathway 2 -->
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
        <div class="text-purple-600 font-bold text-lg mb-3">2. Vocational Education (VET)</div>
        <p class="text-gray-600 mb-4">Practical courses at TAFE and private colleges</p>
        <ul class="space-y-2 text-sm text-gray-600">
        <li class="flex items-start">
          <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span>Certificates III to Advanced Diplomas</span>
        </li>
        <li class="flex items-start">
          <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span>Pathway to university degrees</span>
        </li>
        </ul>
      </div>

      <!-- Pathway 3 -->
      <div class="bg-white p-6 rounded-lg shadow-md hover:shadow-lg transition duration-300">
        <div class="text-purple-600 font-bold text-lg mb-3">3. Direct University Entry</div>
        <p class="text-gray-600 mb-4">Bachelor's, Master's and PhD programs</p>
        <ul class="space-y-2 text-sm text-gray-600">
        <li class="flex items-start">
          <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span>3-4 year bachelor's degrees</span>
        </li>
        <li class="flex items-start">
          <svg class="w-4 h-4 text-green-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor"
          viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          <span>1-2 year master's programs</span>
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
      Popular <span class="text-purple-600">Courses</span> in Australia
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      High-demand programs with excellent career prospects
    </p>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Course 1 -->
      <div
      class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-purple-600">
      <h3 class="text-xl font-bold mb-3">Business & Management</h3>
      <p class="text-gray-600 mb-4">MBA, Finance, Marketing, International Business</p>
      <div class="text-sm text-purple-600 font-medium">Starting from AUD $30,000/year</div>
      </div>

      <!-- Course 2 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-blue-600">
      <h3 class="text-xl font-bold mb-3">Engineering</h3>
      <p class="text-gray-600 mb-4">Civil, Mechanical, Electrical, Software</p>
      <div class="text-sm text-blue-600 font-medium">Starting from AUD $35,000/year</div>
      </div>

      <!-- Course 3 -->
      <div
      class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-green-600">
      <h3 class="text-xl font-bold mb-3">Health Sciences</h3>
      <p class="text-gray-600 mb-4">Nursing, Medicine, Pharmacy, Physiotherapy</p>
      <div class="text-sm text-green-600 font-medium">Starting from AUD $33,000/year</div>
      </div>

      <!-- Course 4 -->
      <div
      class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-yellow-600">
      <h3 class="text-xl font-bold mb-3">Information Technology</h3>
      <p class="text-gray-600 mb-4">Computer Science, Cybersecurity, Data Science</p>
      <div class="text-sm text-yellow-600 font-medium">Starting from AUD $32,000/year</div>
      </div>
    </div>
    </div>
  </section>

  <!-- Visa & Requirements Section -->
  <section class="gsap py-16 bg-white">
    <div class="max-w-full px-6 lg:px-20">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
      Visa & <span class="text-purple-600">Requirements</span>
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
      Essential information for your Australian student visa
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
          <h4 class="text-lg font-medium text-gray-900">Confirmation of Enrollment (CoE)</h4>
          <p class="mt-1 text-gray-600">From a registered Australian education provider</p>
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
          <h4 class="text-lg font-medium text-gray-900">Financial Capacity</h4>
          <p class="mt-1 text-gray-600">Proof of funds for tuition, living costs, and travel</p>
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
          <h4 class="text-lg font-medium text-gray-900">English Proficiency</h4>
          <p class="mt-1 text-gray-600">IELTS 6.0 or equivalent (varies by course)</p>
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
          <h4 class="text-lg font-medium text-gray-900">Overseas Student Health Cover (OSHC)</h4>
          <p class="mt-1 text-gray-600">Mandatory health insurance for duration of stay</p>
        </div>
        </div>
      </div>
      </div>

      <!-- Visa Process -->
      <div>
      <h3 class="text-2xl font-bold mb-6 text-purple-700">Visa Application Process</h3>
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
              <span class="font-bold text-gray-900">1. Receive offer letter</span> from your chosen institution
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
              <span class="font-bold text-gray-900">2. Pay tuition deposit</span> and receive CoE
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
              <span class="font-bold text-gray-900">3. Prepare documents</span> including financial proofs
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
              <span class="font-bold text-gray-900">4. Apply online</span> for Subclass 500 student visa
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
              <span class="font-bold text-gray-900">5. Visa decision</span> typically within 1-3 months
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
      <span class="text-purple-600">Cost</span> of Living in Australia
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      Estimated monthly expenses for international students
    </p>

    <div class="bg-white rounded-xl shadow-lg overflow-hidden">
      <div class="grid grid-cols-1 md:grid-cols-3 divide-y md:divide-y-0 md:divide-x divide-gray-200">
      <!-- Budget -->
      <div class="p-8 text-center">
        <h3 class="text-lg font-medium text-gray-900 mb-4">Budget</h3>
        <div class="text-3xl font-bold text-purple-600 mb-6">AUD $1,400 - $2,000</div>
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
          Cooking at home
        </li>
        </ul>
      </div>

      <!-- Moderate -->
      <div class="p-8 text-center">
        <h3 class="text-lg font-medium text-gray-900 mb-4">Moderate</h3>
        <div class="text-3xl font-bold text-blue-600 mb-6">AUD $2,000 - $2,800</div>
        <ul class="space-y-3 text-gray-600">
        <li class="flex items-center justify-center">
          <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          Private studio/1BR
        </li>
        <li class="flex items-center justify-center">
          <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          Occasional dining out
        </li>
        <li class="flex items-center justify-center">
          <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          Some entertainment
        </li>
        </ul>
      </div>

      <!-- Comfortable -->
      <div class="p-8 text-center">
        <h3 class="text-lg font-medium text-gray-900 mb-4">Comfortable</h3>
        <div class="text-3xl font-bold text-green-600 mb-6">AUD $2,800+</div>
        <ul class="space-y-3 text-gray-600">
        <li class="flex items-center justify-center">
          <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          Private apartment
        </li>
        <li class="flex items-center justify-center">
          <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          Regular dining out
        </li>
        <li class="flex items-center justify-center">
          <svg class="h-5 w-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
          Car ownership possible
        </li>
        </ul>
      </div>
      </div>
    </div>
    </div>
  </section>

  <!-- Consultation CTA -->
  <section id="consultation" class="gsap py-20 bg-gradient-to-br from-purple-900 to-indigo-800 text-white">
    <div class="max-w-full px-6 lg:px-20 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">
      Ready to Begin Your Australian <span class="text-yellow-300">Education Journey</span>?
    </h2>
    <p class="text-xl mb-8 max-w-2xl mx-auto">
      Book a free consultation with our Australia education experts
    </p>

    <div class="flex flex-col sm:flex-row justify-center gap-4">
      <a href="{{ 'appointment' }}"
      class="inline-flex items-center justify-center bg-yellow-400 hover:bg-yellow-300 text-purple-900 font-bold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
      Book Free Consultation
      <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
      </svg>
      </a>

      <a href="tel:+9779811005186"
      class="inline-flex items-center justify-center bg-transparent hover:bg-white/10 border-2 border-white text-white font-bold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300">
      <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
        d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
        </path>
      </svg>
      Call Now
      </a>
    </div>
    </div>
  </section>


<!-- //map -->

  <section class="gsap relative text-white py-20 h-96 overflow-hidden">
    <!-- Background Video -->
    <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
    <source src="../assests/images/video.mp4" type="video/mp4" />
    Your browser does not support the video tag.
    </video>
  </section>
@endsection