@extends('master')
@section('title', 'Study in Canada')

@section('content')

<!-- Hero Section -->
<section class="gsap relative overflow-hidden bg-gradient-to-br from-purple-900 to-indigo-800 text-white px-6 py-20 lg:px-20 text-center">
  <div class="absolute top-0 left-0 w-full h-full opacity-10">
    <div class="absolute top-20 left-10 w-40 h-40 rounded-full bg-purple-400 mix-blend-screen animate-float1"></div>
    <div class="absolute top-1/2 right-20 w-32 h-32 rounded-full bg-indigo-400 mix-blend-screen animate-float2"></div>
    <div class="absolute bottom-10 left-1/3 w-24 h-24 rounded-full bg-white mix-blend-screen animate-float3"></div>
  </div>
  
  <div class="relative max-w-4xl mx-auto">
    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight animate-fadeIn">
      Study in <span class="text-yellow-300">Canada</span>
    </h1>
    <p class="text-xl md:text-2xl mb-8 opacity-90 animate-fadeIn delay-100">
      World-class education, multicultural cities, and pathways to permanent residency
    </p>
    <div class="animate-fadeIn delay-200">
      <a href="{{ 'appointment' }}" class="inline-block bg-yellow-400 hover:bg-yellow-300 text-purple-900 font-bold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        Free Canada Consultation →
      </a>
    </div>
  </div>
</section>

<!-- Why Canada Section -->
<section class="gsap py-16 bg-white">
  <div class="max-w-full px-6 lg:px-20">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        Why Choose <span class="text-purple-600">Canada</span>?
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Top reasons international students prefer Canada
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Benefit 1 -->
      <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300 border border-gray-100 hover:border-purple-200">
        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3">Top-Ranked Education</h3>
        <p class="text-gray-600">Canadian degrees are globally recognized with 3 universities in the top 50 worldwide.</p>
      </div>
      
      <!-- Benefit 2 -->
      <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300 border border-gray-100 hover:border-purple-200">
        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3">Work & Immigration</h3>
        <p class="text-gray-600">3-year post-graduation work permit and pathways to permanent residency.</p>
      </div>
      
      <!-- Benefit 3 -->
      <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300 border border-gray-100 hover:border-purple-200">
        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3">Affordable Tuition</h3>
        <p class="text-gray-600">Lower costs compared to US/UK with similar quality education.</p>
      </div>
    </div>
  </div>
</section>

<!-- Top Universities Section -->
<section class="gsap py-16 bg-gray-50">
  <div class="max-w-full px-6 lg:px-20">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">
      Top <span class="text-purple-600">Canadian Universities</span>
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      Partner institutions with excellent international student support
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Uni 1 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
        <div class="h-48 bg-red-900 flex items-center justify-center">
          <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShxdAj1OSoVbVRTY7beEWuC34tkECL7R2bkA&s" alt="University of Toronto" class="h-full w-full">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">University of Toronto</h3>
          <p class="text-gray-600 mb-4">Ranked #1 in Canada, #21 globally (QS 2024)</p>
          <div class="flex items-center text-sm text-gray-500">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Toronto, Ontario
          </div>
        </div>
      </div>
      
      <!-- Uni 2 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
        <div class="h-48 bg-blue-800 flex items-center justify-center">
          <img src="https://images.shiksha.com/mediadata/images/1533551492phpLKGGFI.jpeg" alt="University of British Columbia" class="h-full w-full">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">University of British Columbia</h3>
          <p class="text-gray-600 mb-4">Ranked #2 in Canada, #34 globally (QS 2024)</p>
          <div class="flex items-center text-sm text-gray-500">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Vancouver, BC
          </div>
        </div>
      </div>
      
      <!-- Uni 3 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
        <div class="h-48 bg-purple-900 flex items-center justify-center">
          <img src="https://www.usnews.com/object/image/00000156-6b7c-d0b3-ad56-ff7dbd8b0000/160808-mcgilluniversity-submitted.jpg?update-time=1470682544421&size=responsiveFlow970" alt="McGill University" class="h-full w-full">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">McGill University</h3>
          <p class="text-gray-600 mb-4">Ranked #3 in Canada, #30 globally (QS 2024)</p>
          <div class="flex items-center text-sm text-gray-500">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Montreal, Quebec
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
        Canadian <span class="text-purple-600">Education System</span>
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Understanding qualifications and study options
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- College -->
      <div class="bg-purple-50 p-8 rounded-xl border border-purple-100">
        <h3 class="text-xl font-bold mb-4 text-purple-800">Colleges & Polytechnics</h3>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Diploma (1-2 years)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Advanced Diploma (2-3 years)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Practical, career-focused programs</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Pathways to university degrees</span>
          </li>
        </ul>
      </div>
      
      <!-- University -->
      <div class="bg-purple-50 p-8 rounded-xl border border-purple-100">
        <h3 class="text-xl font-bold mb-4 text-purple-800">Universities</h3>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Bachelor's Degree (4 years)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Master's Degree (1-2 years)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>PhD Programs (3-5 years)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Research-focused education</span>
          </li>
        </ul>
      </div>
      
      <!-- Co-op -->
      <div class="bg-purple-50 p-8 rounded-xl border border-purple-100">
        <h3 class="text-xl font-bold mb-4 text-purple-800">Co-op Programs</h3>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Paid work terms integrated with study</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Gain Canadian work experience</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Available at many colleges/universities</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Improves post-graduation employment</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Popular Courses Section -->
<section class="gsap py-16 bg-gray-50">
  <div class="max-w-full px-6 lg:px-20">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">
      In-Demand <span class="text-purple-600">Programs</span>
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      Fields with excellent career prospects in Canada
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Course 1 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-purple-600">
        <h3 class="text-xl font-bold mb-3">Computer Science</h3>
        <p class="text-gray-600 mb-4">AI, Software Engineering, Data Science, Cybersecurity</p>
        <div class="text-sm text-purple-600 font-medium">Starting from CAD $25,000/year</div>
      </div>
      
      <!-- Course 2 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-blue-600">
        <h3 class="text-xl font-bold mb-3">Business Administration</h3>
        <p class="text-gray-600 mb-4">Finance, Marketing, International Business, MBA</p>
        <div class="text-sm text-blue-600 font-medium">Starting from CAD $22,000/year</div>
      </div>
      
      <!-- Course 3 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-green-600">
        <h3 class="text-xl font-bold mb-3">Health Sciences</h3>
        <p class="text-gray-600 mb-4">Nursing, Pharmacy, Public Health, Kinesiology</p>
        <div class="text-sm text-green-600 font-medium">Starting from CAD $28,000/year</div>
      </div>
      
      <!-- Course 4 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-yellow-600">
        <h3 class="text-xl font-bold mb-3">Engineering</h3>
        <p class="text-gray-600 mb-4">Civil, Mechanical, Electrical, Chemical</p>
        <div class="text-sm text-yellow-600 font-medium">Starting from CAD $30,000/year</div>
      </div>
    </div>
  </div>
</section>

<!-- Study Permit Section -->
<section class="gsap py-16 bg-white">
  <div class="max-w-full px-6 lg:px-20">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        Canadian <span class="text-purple-600">Study Permit</span>
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Requirements and application process
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
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
            </div>
            <div class="ml-4">
              <h4 class="text-lg font-medium text-gray-900">Letter of Acceptance</h4>
              <p class="mt-1 text-gray-600">From a Designated Learning Institution (DLI)</p>
            </div>
          </div>
          
          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-10 w-10 rounded-md bg-purple-100 text-purple-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
            </div>
            <div class="ml-4">
              <h4 class="text-lg font-medium text-gray-900">Proof of Funds</h4>
              <p class="mt-1 text-gray-600">CAD $10,000+ per year (plus tuition)</p>
            </div>
          </div>
          
          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-10 w-10 rounded-md bg-purple-100 text-purple-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
            </div>
            <div class="ml-4">
              <h4 class="text-lg font-medium text-gray-900">Medical Exam</h4>
              <p class="mt-1 text-gray-600">Required for programs longer than 6 months</p>
            </div>
          </div>
          
          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-10 w-10 rounded-md bg-purple-100 text-purple-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
            </div>
            <div class="ml-4">
              <h4 class="text-lg font-medium text-gray-900">English Proficiency</h4>
              <p class="mt-1 text-gray-600">IELTS 6.0+ or equivalent (varies by program)</p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Process -->
      <div>
        <h3 class="text-2xl font-bold mb-6 text-purple-700">Application Process</h3>
        <div class="flow-root">
          <ul class="-mb-8">
            <li>
              <div class="relative pb-8">
                <div class="relative flex items-start space-x-3">
                  <div>
                    <div class="relative px-1">
                      <div class="h-8 w-8 bg-purple-100 rounded-full ring-8 ring-white flex items-center justify-center">
                        <svg class="h-5 w-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="min-w-0 flex-1 py-0">
                    <div class="text-lg text-gray-700">
                      <span class="font-bold text-gray-900">1. Get accepted</span> to a Canadian DLI
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
                      <div class="h-8 w-8 bg-purple-100 rounded-full ring-8 ring-white flex items-center justify-center">
                        <svg class="h-5 w-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="min-w-0 flex-1 py-0">
                    <div class="text-lg text-gray-700">
                      <span class="font-bold text-gray-900">2. Prepare documents</span> including financial proofs
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
                      <div class="h-8 w-8 bg-purple-100 rounded-full ring-8 ring-white flex items-center justify-center">
                        <svg class="h-5 w-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="min-w-0 flex-1 py-0">
                    <div class="text-lg text-gray-700">
                      <span class="font-bold text-gray-900">3. Apply online</span> through IRCC portal
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
                      <div class="h-8 w-8 bg-purple-100 rounded-full ring-8 ring-white flex items-center justify-center">
                        <svg class="h-5 w-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="min-w-0 flex-1 py-0">
                    <div class="text-lg text-gray-700">
                      <span class="font-bold text-gray-900">4. Biometrics appointment</span> at VAC
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
                      <div class="h-8 w-8 bg-purple-100 rounded-full ring-8 ring-white flex items-center justify-center">
                        <svg class="h-5 w-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                      </div>
                    </div>
                  </div>
                  <div class="min-w-0 flex-1 py-0">
                    <div class="text-lg text-gray-700">
                      <span class="font-bold text-gray-900">5. Receive decision</span> typically in 8-12 weeks
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

<!-- PGWP & Immigration Section -->
<section class="gsap py-16 bg-gray-50">
  <div class="max-w-full px-6 lg:px-20">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        <span class="text-purple-600">Post-Graduation</span> Work Permit
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Work in Canada after your studies and pathways to PR
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- PGWP -->
      <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition duration-300">
        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6 mx-auto">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-4 text-center">PGWP Details</h3>
        <ul class="space-y-3 text-gray-600">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Valid for 8 months to 3 years</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Length depends on program duration</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Open work permit (any employer)</span>
          </li>
        </ul>
      </div>
      
      <!-- Work -->
      <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition duration-300">
        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6 mx-auto">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-4 text-center">Work While Studying</h3>
        <ul class="space-y-3 text-gray-600">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Up to 20 hours/week during school</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Full-time during scheduled breaks</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Co-op work permits available</span>
          </li>
        </ul>
      </div>
      
      <!-- PR -->
      <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition duration-300">
        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6 mx-auto">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-4 text-center">Permanent Residency</h3>
        <ul class="space-y-3 text-gray-600">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Express Entry (FSW/CEC)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Provincial Nominee Programs (PNP)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Quebec Experience Program (PEQ)</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Cost of Living Section -->
<section class="gsap py-16 bg-white">
  <div class="max-w-full px-6 lg:px-20">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">
      <span class="text-purple-600">Living Costs</span> in Canada
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      Estimated monthly expenses (varies by city)
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Toronto -->
      <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
        <h3 class="text-xl font-bold mb-4 text-purple-700">Toronto/Vancouver</h3>
        <ul class="space-y-3 text-gray-700">
          <li class="flex justify-between">
            <span>Accommodation</span>
            <span class="font-medium">CAD $1,200-$1,800</span>
          </li>
          <li class="flex justify-between">
            <span>Food</span>
            <span class="font-medium">CAD $300-$500</span>
          </li>
          <li class="flex justify-between">
            <span>Transport</span>
            <span class="font-medium">CAD $100-$150</span>
          </li>
          <li class="flex justify-between">
            <span>Other Expenses</span>
            <span class="font-medium">CAD $300-$500</span>
          </li>
          <li class="flex justify-between pt-3 border-t border-gray-200">
            <span class="font-bold">Total</span>
            <span class="font-bold text-purple-600">CAD $1,900-$2,950</span>
          </li>
        </ul>
      </div>
      
      <!-- Montreal -->
      <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
        <h3 class="text-xl font-bold mb-4 text-purple-700">Montreal</h3>
        <ul class="space-y-3 text-gray-700">
          <li class="flex justify-between">
            <span>Accommodation</span>
            <span class="font-medium">CAD $800-$1,200</span>
          </li>
          <li class="flex justify-between">
            <span>Food</span>
            <span class="font-medium">CAD $250-$400</span>
          </li>
          <li class="flex justify-between">
            <span>Transport</span>
            <span class="font-medium">CAD $85</span>
          </li>
          <li class="flex justify-between">
            <span>Other Expenses</span>
            <span class="font-medium">CAD $250-$400</span>
          </li>
          <li class="flex justify-between pt-3 border-t border-gray-200">
            <span class="font-bold">Total</span>
            <span class="font-bold text-purple-600">CAD $1,385-$2,085</span>
          </li>
        </ul>
      </div>
      
      <!-- Other Cities -->
      <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
        <h3 class="text-xl font-bold mb-4 text-purple-700">Other Cities</h3>
        <ul class="space-y-3 text-gray-700">
          <li class="flex justify-between">
            <span>Accommodation</span>
            <span class="font-medium">CAD $600-$1,000</span>
          </li>
          <li class="flex justify-between">
            <span>Food</span>
            <span class="font-medium">CAD $200-$350</span>
          </li>
          <li class="flex justify-between">
            <span>Transport</span>
            <span class="font-medium">CAD $70-$100</span>
          </li>
          <li class="flex justify-between">
            <span>Other Expenses</span>
            <span class="font-medium">CAD $200-$350</span>
          </li>
          <li class="flex justify-between pt-3 border-t border-gray-200">
            <span class="font-bold">Total</span>
            <span class="font-bold text-purple-600">CAD $1,070-$1,800</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Consultation CTA -->
<section id="consultation" class="gsap py-20 bg-gradient-to-br from-purple-900 to-indigo-800 text-white">
  <div class="max-w-full px-6 lg:px-20 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">
      Start Your Canadian <span class="text-yellow-300">Education Journey</span> Today
    </h2>
    <p class="text-xl mb-8 max-w-2xl mx-auto">
      Get personalized guidance from our Canada education experts
    </p>
    
    <div class="flex flex-col sm:flex-row justify-center gap-4">
      <a href="{{ 'appointment' }}" class="inline-flex items-center justify-center bg-yellow-400 hover:bg-yellow-300 text-purple-900 font-bold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        Book Free Consultation
        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg>
      </a>
      
      <a href="tel:+9779811005186" class="inline-flex items-center justify-center bg-transparent hover:bg-white/10 border-2 border-white text-white font-bold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300">
        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
        </svg>
        Call Now
      </a>
    </div>
  </div>
</section>

<!-- Testimonials Section -->
<section class="gsap py-16 bg-gray-50">
  <div class="max-w-full px-6 lg:px-20">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">
      Student <span class="text-purple-600">Success Stories</span>
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      Hear from students who made Canada their education destination
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Testimonial 1 -->
      <div class="bg-white p-8 rounded-xl shadow-md">
        <div class="flex items-center mb-6">
          <img class="w-12 h-12 rounded-full object-cover" src="https://randomuser.me/api/portraits/men/42.jpg" alt="Aarav">
          <div class="ml-4">
            <h4 class="font-bold">Aarav S.</h4>
            <p class="text-purple-600 text-sm">University of Waterloo</p>
          </div>
        </div>
        <p class="text-gray-600 italic mb-4">"The co-op program helped me gain Canadian work experience even before graduation. I had a job offer before completing my degree!"</p>
        <div class="flex text-yellow-400">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
          </svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
          </svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
          </svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
          </svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
          </svg>
        </div>
      </div>
      
      <!-- Testimonial 2 -->
      <div class="bg-white p-8 rounded-xl shadow-md">
        <div class="flex items-center mb-6">
          <img class="w-12 h-12 rounded-full object-cover" src="https://randomuser.me/api/portraits/women/33.jpg" alt="Priya">
          <div class="ml-4">
            <h4 class="font-bold">Priya K.</h4>
            <p class="text-purple-600 text-sm">Seneca College</p>
          </div>
        </div>
        <p class="text-gray-600 italic mb-4">"I chose a 2-year diploma program that gave me 3 years PGWP. Now I'm working full-time and applying for permanent residency."</p>
        <div class="flex text-yellow-400">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
          </svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
          </svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
          </svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
          </svg>
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
          </svg>
        </div>
      </div>
      
      <!-- Testimonial 3 -->
      <div class="bg-white p-8 rounded-xl shadow-md">
        <div class="flex items-center mb-6">
          <img class="w-12 h-12 rounded-full object-cover" src="https://randomuser.me/api/portraits/men/65.jpg" alt="Rohan">
          <div class="ml-4">
            <h4 class="font-bold">Rohan P.</h4>
            <p class="text-purple-600 text-sm">University of Alberta</p>
          </div>
        </div>
        <p class="text-gray-600 italic mb-4">"The Alberta Advantage immigration program helped me transition from student to permanent resident within 1 year of graduating."</p>
        <div class="flex text-yellow-400">
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
          </svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
          </svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
          </svg>
          <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20">
            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
          </svg>
          <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11.049 2.927c.3-.921 1.603-.921 1.902 0l1.519 4.674a1 1 0 00.95.69h4.915c.969 0 1.371 1.24.588 1.81l-3.976 2.888a1 1 0 00-.363 1.118l1.518 4.674c.3.922-.755 1.688-1.538 1.118l-3.976-2.888a1 1 0 00-1.176 0l-3.976 2.888c-.783.57-1.838-.197-1.538-1.118l1.518-4.674a1 1 0 00-.363-1.118l-3.976-2.888c-.784-.57-.38-1.81.588-1.81h4.914a1 1 0 00.951-.69l1.519-4.674z"></path>
          </svg>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection