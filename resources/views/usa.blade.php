@extends('master')
@section('title', 'Study in USA')

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
      Study in <span class="text-yellow-300">USA</span>
    </h1>
    <p class="text-xl md:text-2xl mb-8 opacity-90 animate-fadeIn delay-100">
      World-class education, cutting-edge research, and unparalleled career opportunities
    </p>
    <div class="animate-fadeIn delay-200">
      <a href="{{ 'appointment' }}" class="inline-block bg-yellow-400 hover:bg-yellow-300 text-purple-900 font-bold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        Free USA Consultation →
      </a>
    </div>
  </div>
</section>

<!-- Why USA Section -->
<section class="py-16 bg-white">
  <div class="gsap max-w-full px-6 lg:px-20">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        Why Choose <span class="text-purple-600">USA</span>?
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Top reasons international students prefer American universities
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
        <h3 class="text-xl font-bold mb-3">Top-Ranked Universities</h3>
        <p class="text-gray-600">8 of the top 10 global universities are in the US (QS 2024) with unparalleled research opportunities.</p>
      </div>
      
      <!-- Benefit 2 -->
      <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300 border border-gray-100 hover:border-purple-200">
        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3">STEM OPT Extension</h3>
        <p class="text-gray-600">3 years of post-study work for STEM graduates with pathways to H-1B visa and permanent residency.</p>
      </div>
      
      <!-- Benefit 3 -->
      <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300 border border-gray-100 hover:border-purple-200">
        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3">Flexible Education</h3>
        <p class="text-gray-600">Liberal arts system allows exploration before declaring majors and double major opportunities.</p>
      </div>
    </div>
  </div>
</section>

<!-- Top Universities Section -->
<section class="gsap py-16 bg-gray-50">
  <div class="max-w-full px-6 lg:px-20">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">
      Top <span class="text-purple-600">US Universities</span>
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      World-renowned institutions with excellent international student support
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Uni 1 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
        <div class="h-48 bg-purple-900 flex items-center justify-center">
          <img src="https://news.harvard.edu/wp-content/uploads/2020/07/Harvard_University_01-1.jpg" alt="Harvard University" class="h-full w-full object-cover">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">Harvard University</h3>
          <p class="text-gray-600 mb-4">#1 in World University Rankings (QS 2024)</p>
          <div class="flex items-center text-sm text-gray-500">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Cambridge, Massachusetts
          </div>
        </div>
      </div>
      
      <!-- Uni 2 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
        <div class="h-48 bg-indigo-800 flex items-center justify-center">
          <img src="https://news.stanford.edu/wp-content/uploads/2022/03/200303_commencement_11.jpg" alt="Stanford University" class="h-full w-full object-cover">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">Stanford University</h3>
          <p class="text-gray-600 mb-4">#2 in World University Rankings (QS 2024)</p>
          <div class="flex items-center text-sm text-gray-500">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Stanford, California
          </div>
        </div>
      </div>
      
      <!-- Uni 3 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
        <div class="h-48 bg-purple-900 flex items-center justify-center">
          <img src="https://www.mit.edu/files/images/202108/MIT%20Great%20Dome%20and%20Killian%20Court.jpg" alt="Massachusetts Institute of Technology" class="h-full w-full object-cover">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">MIT</h3>
          <p class="text-gray-600 mb-4">#3 in World University Rankings (QS 2024)</p>
          <div class="flex items-center text-sm text-gray-500">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Cambridge, Massachusetts
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
        US <span class="text-purple-600">Education System</span>
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Understanding the American academic structure
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Undergraduate -->
      <div class="bg-purple-50 p-8 rounded-xl border border-purple-100">
        <h3 class="text-xl font-bold mb-4 text-purple-800">Undergraduate</h3>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>4-year Bachelor's degree</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Liberal arts curriculum</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Major + minor/double major options</span>
          </li>
        </ul>
      </div>
      
      <!-- Graduate -->
      <div class="bg-purple-50 p-8 rounded-xl border border-purple-100">
        <h3 class="text-xl font-bold mb-4 text-purple-800">Graduate</h3>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Master's (1-2 years)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>PhD (5-7 years average)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Professional degrees (MBA, JD, MD)</span>
          </li>
        </ul>
      </div>
      
      <!-- Unique Features -->
      <div class="bg-purple-50 p-8 rounded-xl border border-purple-100">
        <h3 class="text-xl font-bold mb-4 text-purple-800">Unique Features</h3>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Flexible curriculum</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Undergraduate research opportunities</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Strong alumni networks</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Popular Programs Section -->
<section class="gsap py-16 bg-gray-50">
  <div class="max-w-full px-6 lg:px-20">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">
      In-Demand <span class="text-purple-600">Programs</span>
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      Fields with excellent career prospects in USA
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Program 1 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-purple-600">
        <h3 class="text-xl font-bold mb-3">Computer Science</h3>
        <p class="text-gray-600 mb-4">AI, Data Science, Cybersecurity, Software Engineering</p>
        <div class="text-sm text-purple-600 font-medium">Starting from $30,000/year</div>
      </div>
      
      <!-- Program 2 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-blue-600">
        <h3 class="text-xl font-bold mb-3">Business Administration</h3>
        <p class="text-gray-600 mb-4">MBA, Finance, Marketing, Entrepreneurship</p>
        <div class="text-sm text-blue-600 font-medium">Starting from $35,000/year</div>
      </div>
      
      <!-- Program 3 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-green-600">
        <h3 class="text-xl font-bold mb-3">Engineering</h3>
        <p class="text-gray-600 mb-4">Mechanical, Electrical, Civil, Biomedical</p>
        <div class="text-sm text-green-600 font-medium">Starting from $40,000/year</div>
      </div>
      
      <!-- Program 4 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-yellow-600">
        <h3 class="text-xl font-bold mb-3">Health Sciences</h3>
        <p class="text-gray-600 mb-4">Public Health, Nursing, Pharmacy, Biotechnology</p>
        <div class="text-sm text-yellow-600 font-medium">Starting from $35,000/year</div>
      </div>
    </div>
  </div>
</section>

<!-- Student Visa Section -->
<section class="gsap py-16 bg-white">
  <div class="max-w-full px-6 lg:px-20">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        US <span class="text-purple-600">Student Visa</span>
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        F-1 Visa requirements and application process
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
              <h4 class="text-lg font-medium text-gray-900">I-20 Form</h4>
              <p class="mt-1 text-gray-600">From SEVP-approved institution</p>
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
              <h4 class="text-lg font-medium text-gray-900">Financial Proof</h4>
              <p class="mt-1 text-gray-600">1 year tuition + living expenses</p>
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
              <p class="mt-1 text-gray-600">TOEFL 80+ or IELTS 6.5+ (varies)</p>
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
              <h4 class="text-lg font-medium text-gray-900">Non-immigrant Intent</h4>
              <p class="mt-1 text-gray-600">Proof of ties to home country</p>
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
                      <span class="font-bold text-gray-900">1. Get accepted</span> to SEVP-approved school
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
                      <span class="font-bold text-gray-900">2. Pay SEVIS fee</span> and receive I-20
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
                      <span class="font-bold text-gray-900">3. Complete DS-160</span> online application
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
                      <span class="font-bold text-gray-900">4. Schedule interview</span> at US embassy
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
                      <span class="font-bold text-gray-900">5. Receive visa</span> typically within 2 weeks
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

<!-- Work & Immigration Section -->
<section class="gsap py-16 bg-gray-50">
  <div class="max-w-full px-6 lg:px-20">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        <span class="text-purple-600">Work Opportunities</span> After Study
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Career prospects and immigration pathways
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- OPT -->
      <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition duration-300">
        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6 mx-auto">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-4 text-center">OPT (Optional Practical Training)</h3>
        <ul class="space-y-3 text-gray-600">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>12 months for all graduates</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>24-month STEM extension</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Can apply before graduation</span>
          </li>
        </ul>
      </div>
      
      <!-- Work While Studying -->
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
            <span>On-campus employment (20 hrs/week)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>CPT for internships/co-ops</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Off-campus work with authorization</span>
          </li>
        </ul>
      </div>
      
      <!-- Immigration -->
      <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition duration-300">
        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6 mx-auto">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-4 text-center">Immigration Pathways</h3>
        <ul class="space-y-3 text-gray-600">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>H-1B visa (employer sponsorship)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>EB-2/EB-3 employment-based green cards</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>O-1 visa for extraordinary ability</span>
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
      <span class="text-purple-600">Living Costs</span> in USA
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      Estimated annual expenses (varies by location)
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- High Cost -->
      <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
        <h3 class="text-xl font-bold mb-4 text-purple-700">High Cost Cities</h3>
        <p class="text-gray-600 mb-4">(New York, San Francisco, Boston)</p>
        <ul class="space-y-3 text-gray-700">
          <li class="flex justify-between">
            <span>Tuition</span>
            <span class="font-medium">$35,000-$60,000</span>
          </li>
          <li class="flex justify-between">
            <span>Housing</span>
            <span class="font-medium">$15,000-$25,000</span>
          </li>
          <li class="flex justify-between">
            <span>Food & Transport</span>
            <span class="font-medium">$8,000-$12,000</span>
          </li>
          <li class="flex justify-between pt-3 border-t border-gray-200">
            <span class="font-bold">Total</span>
            <span class="font-bold text-purple-600">$58,000-$97,000</span>
          </li>
        </ul>
      </div>
      
      <!-- Medium Cost -->
      <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
        <h3 class="text-xl font-bold mb-4 text-purple-700">Medium Cost Cities</h3>
        <p class="text-gray-600 mb-4">(Chicago, Seattle, Los Angeles)</p>
        <ul class="space-y-3 text-gray-700">
          <li class="flex justify-between">
            <span>Tuition</span>
            <span class="font-medium">$25,000-$45,000</span>
          </li>
          <li class="flex justify-between">
            <span>Housing</span>
            <span class="font-medium">$10,000-$18,000</span>
          </li>
          <li class="flex justify-between">
            <span>Food & Transport</span>
            <span class="font-medium">$6,000-$10,000</span>
          </li>
          <li class="flex justify-between pt-3 border-t border-gray-200">
            <span class="font-bold">Total</span>
            <span class="font-bold text-purple-600">$41,000-$73,000</span>
          </li>
        </ul>
      </div>
      
      <!-- Low Cost -->
      <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
        <h3 class="text-xl font-bold mb-4 text-purple-700">Lower Cost Cities</h3>
        <p class="text-gray-600 mb-4">(Texas, Midwest, South)</p>
        <ul class="space-y-3 text-gray-700">
          <li class="flex justify-between">
            <span>Tuition</span>
            <span class="font-medium">$15,000-$30,000</span>
          </li>
          <li class="flex justify-between">
            <span>Housing</span>
            <span class="font-medium">$6,000-$12,000</span>
          </li>
          <li class="flex justify-between">
            <span>Food & Transport</span>
            <span class="font-medium">$4,000-$8,000</span>
          </li>
          <li class="flex justify-between pt-3 border-t border-gray-200">
            <span class="font-bold">Total</span>
            <span class="font-bold text-purple-600">$25,000-$50,000</span>
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
      Start Your American <span class="text-yellow-300">Education Journey</span> Today
    </h2>
    <p class="text-xl mb-8 max-w-2xl mx-auto">
      Get personalized guidance from our US education experts
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
      Hear from students who made USA their education destination
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Testimonial 1 -->
      <div class="bg-white p-8 rounded-xl shadow-md">
        <div class="flex items-center mb-6">
          <img class="w-12 h-12 rounded-full object-cover" src="https://randomuser.me/api/portraits/men/42.jpg" alt="Raj">
          <div class="ml-4">
            <h4 class="font-bold">Raj P.</h4>
            <p class="text-purple-600 text-sm">Carnegie Mellon University</p>
          </div>
        </div>
        <p class="text-gray-600 italic mb-4">"The OPT program helped me transition to an H-1B visa. I'm now working at a top tech company in Silicon Valley!"</p>
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
            <p class="text-purple-600 text-sm">New York University</p>
          </div>
        </div>
        <p class="text-gray-600 italic mb-4">"The liberal arts education allowed me to explore different fields before choosing my major. I graduated with double majors!"</p>
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
          <img class="w-12 h-12 rounded-full object-cover" src="https://randomuser.me/api/portraits/men/65.jpg" alt="Amit">
          <div class="ml-4">
            <h4 class="font-bold">Amit S.</h4>
            <p class="text-purple-600 text-sm">University of Texas at Austin</p>
          </div>
        </div>
        <p class="text-gray-600 italic mb-4">"The STEM OPT extension gave me 3 years to work after graduation. My employer is now sponsoring my H-1B visa."</p>
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