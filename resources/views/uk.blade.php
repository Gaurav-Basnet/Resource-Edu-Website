@extends('master')
@section('title', 'Study in UK')

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
      Study in <span class="text-yellow-300">UK</span>
    </h1>
    <p class="text-xl md:text-2xl mb-8 opacity-90 animate-fadeIn delay-100">
      World-renowned universities, rich cultural heritage, and global career opportunities
    </p>
    <div class="animate-fadeIn delay-200">
      <a href="{{ 'appointment' }}" class="inline-block bg-yellow-400 hover:bg-yellow-300 text-purple-900 font-bold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        Free UK Consultation →
      </a>
    </div>
  </div>
</section>

<!-- Why UK Section -->
<section class="gsap py-16 bg-white">
  <div class="max-w-full px-6 lg:px-20">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        Why Choose <span class="text-purple-600">UK</span>?
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Top reasons international students prefer UK universities
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
        <h3 class="text-xl font-bold mb-3">World-Class Education</h3>
        <p class="text-gray-600">4 of the top 10 global universities are in the UK (QS 2024) with centuries of academic excellence.</p>
      </div>
      
      <!-- Benefit 2 -->
      <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300 border border-gray-100 hover:border-purple-200">
        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3">Shorter Programs</h3>
        <p class="text-gray-600">Bachelor's in 3 years, Master's in 1 year means lower tuition and living costs.</p>
      </div>
      
      <!-- Benefit 3 -->
      <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300 border border-gray-100 hover:border-purple-200">
        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3">Work Opportunities</h3>
        <p class="text-gray-600">2-year post-study work visa for graduates and part-time work during studies.</p>
      </div>
    </div>
  </div>
</section>

<!-- Top Universities Section -->
<section class="gasp py-16 bg-gray-50">
  <div class="max-w-full px-6 lg:px-20">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">
      Top <span class="text-purple-600">UK Universities</span>
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      World-leading institutions with global recognition
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Uni 1 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
        <div class="h-48 bg-purple-900 flex items-center justify-center">
          <img src="https://cdn.britannica.com/03/117103-050-F4C2FC83/view-University-of-Oxford-England-Oxfordshire.jpg" alt="University of Oxford" class="h-full w-full object-cover">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">University of Oxford</h3>
          <p class="text-gray-600 mb-4">Ranked #1 in UK, #2 globally (QS 2024)</p>
          <div class="flex items-center text-sm text-gray-500">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Oxford, England
          </div>
        </div>
      </div>
      
      <!-- Uni 2 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
        <div class="h-48 bg-indigo-800 flex items-center justify-center">
          <img src="https://cdn.britannica.com/85/13085-050-C2E88389/Corpus-Christi-College-University-of-Cambridge-England.jpg" alt="University of Cambridge" class="h-full w-full object-cover">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">University of Cambridge</h3>
          <p class="text-gray-600 mb-4">Ranked #2 in UK, #3 globally (QS 2024)</p>
          <div class="flex items-center text-sm text-gray-500">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Cambridge, England
          </div>
        </div>
      </div>
      
      <!-- Uni 3 -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
        <div class="h-48 bg-purple-900 flex items-center justify-center">
          <img src="https://www.imperial.ac.uk/ImageCropToolT4/imageTool/uploaded-images/newseventsimage_1694176603297_mainnews2012_x1.jpg  " alt="Imperial College London" class="h-full w-full object-cover">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">Imperial College London</h3>
          <p class="text-gray-600 mb-4">Ranked #3 in UK, #6 globally (QS 2024)</p>
          <div class="flex items-center text-sm text-gray-500">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            London, England
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
        UK <span class="text-purple-600">Education System</span>
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Understanding qualifications and study options
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
            <span>Bachelor's Degree (3 years in England/Wales/NI)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>4 years in Scotland (MA/MEng)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Foundation Year available for some students</span>
          </li>
        </ul>
      </div>
      
      <!-- Postgraduate -->
      <div class="bg-purple-50 p-8 rounded-xl border border-purple-100">
        <h3 class="text-xl font-bold mb-4 text-purple-800">Postgraduate</h3>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Taught Master's (1 year)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Research Master's (2 years)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>PhD (3-4 years)</span>
          </li>
        </ul>
      </div>
      
      <!-- Pathway Programs -->
      <div class="bg-purple-50 p-8 rounded-xl border border-purple-100">
        <h3 class="text-xl font-bold mb-4 text-purple-800">Pathway Programs</h3>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>International Foundation Year</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Pre-Master's Programs</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>English Language Preparation</span>
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
      Popular <span class="text-purple-600">Programs</span>
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      Fields with excellent career prospects in UK and globally
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Course 1 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-purple-600">
        <h3 class="text-xl font-bold mb-3">Business & Management</h3>
        <p class="text-gray-600 mb-4">MBA, Finance, Marketing, International Business</p>
        <div class="text-sm text-purple-600 font-medium">Starting from £15,000/year</div>
      </div>
      
      <!-- Course 2 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-blue-600">
        <h3 class="text-xl font-bold mb-3">Engineering</h3>
        <p class="text-gray-600 mb-4">Mechanical, Civil, Electrical, Computer</p>
        <div class="text-sm text-blue-600 font-medium">Starting from £20,000/year</div>
      </div>
      
      <!-- Course 3 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-green-600">
        <h3 class="text-xl font-bold mb-3">Computer Science</h3>
        <p class="text-gray-600 mb-4">AI, Data Science, Cybersecurity, Software Eng</p>
        <div class="text-sm text-green-600 font-medium">Starting from £18,000/year</div>
      </div>
      
      <!-- Course 4 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-yellow-600">
        <h3 class="text-xl font-bold mb-3">Law</h3>
        <p class="text-gray-600 mb-4">LLB, LLM, International Law, Commercial Law</p>
        <div class="text-sm text-yellow-600 font-medium">Starting from £16,000/year</div>
      </div>
    </div>
  </div>
</section>

<!-- Visa Section -->
<section class="gsap py-16 bg-white">
  <div class="max-w-full px-6 lg:px-20">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        UK <span class="text-purple-600">Student Visa</span>
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
              <h4 class="text-lg font-medium text-gray-900">CAS Letter</h4>
              <p class="mt-1 text-gray-600">Confirmation of Acceptance for Studies from UK institution</p>
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
              <p class="mt-1 text-gray-600">£1,334/month for London, £1,023/month outside London (for 9 months) plus tuition fees</p>
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
          
          <div class="flex">
            <div class="flex-shrink-0">
              <div class="flex items-center justify-center h-10 w-10 rounded-md bg-purple-100 text-purple-700">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
              </div>
            </div>
            <div class="ml-4">
              <h4 class="text-lg font-medium text-gray-900">TB Test</h4>
              <p class="mt-1 text-gray-600">Required for students from certain countries</p>
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
                      <span class="font-bold text-gray-900">1. Receive CAS</span> from your UK institution
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
                      <span class="font-bold text-gray-900">3. Apply online</span> through UKVI website
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
                      <span class="font-bold text-gray-900">5. Receive decision</span> typically within 3 weeks
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
        <span class="text-purple-600">Post-Study</span> Work Visa
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Work in UK after your studies and immigration pathways
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Graduate Visa -->
      <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition duration-300">
        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6 mx-auto">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-4 text-center">Graduate Visa</h3>
        <ul class="space-y-3 text-gray-600">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>2 years for Bachelor's/Master's graduates</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>3 years for PhD graduates</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Work without sponsorship</span>
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
            <span>Up to 20 hours/week during term</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Full-time during vacations</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Work placements allowed for some courses</span>
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
        <h3 class="text-xl font-bold mb-4 text-center">Immigration Pathways</h3>
        <ul class="space-y-3 text-gray-600">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Skilled Worker Visa (employer sponsorship)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Global Talent Visa (exceptional talent)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span>Innovator/Startup Visa (entrepreneurs)</span>
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
      <span class="text-purple-600">Living Costs</span> in UK
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      Estimated monthly expenses (varies by city)
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- London -->
      <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
        <h3 class="text-xl font-bold mb-4 text-purple-700">London</h3>
        <ul class="space-y-3 text-gray-700">
          <li class="flex justify-between">
            <span>Accommodation</span>
            <span class="font-medium">£800-£1,500</span>
          </li>
          <li class="flex justify-between">
            <span>Food</span>
            <span class="font-medium">£200-£400</span>
          </li>
          <li class="flex justify-between">
            <span>Transport</span>
            <span class="font-medium">£100-£150</span>
          </li>
          <li class="flex justify-between">
            <span>Other Expenses</span>
            <span class="font-medium">£200-£400</span>
          </li>
          <li class="flex justify-between pt-3 border-t border-gray-200">
            <span class="font-bold">Total</span>
            <span class="font-bold text-purple-600">£1,300-£2,450</span>
          </li>
        </ul>
      </div>
      
      <!-- Manchester/Birmingham -->
      <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
        <h3 class="text-xl font-bold mb-4 text-purple-700">Manchester/Birmingham</h3>
        <ul class="space-y-3 text-gray-700">
          <li class="flex justify-between">
            <span>Accommodation</span>
            <span class="font-medium">£600-£1,000</span>
          </li>
          <li class="flex justify-between">
            <span>Food</span>
            <span class="font-medium">£150-£300</span>
          </li>
          <li class="flex justify-between">
            <span>Transport</span>
            <span class="font-medium">£60-£100</span>
          </li>
          <li class="flex justify-between">
            <span>Other Expenses</span>
            <span class="font-medium">£150-£300</span>
          </li>
          <li class="flex justify-between pt-3 border-t border-gray-200">
            <span class="font-bold">Total</span>
            <span class="font-bold text-purple-600">£960-£1,700</span>
          </li>
        </ul>
      </div>
      
      <!-- Other Cities -->
      <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
        <h3 class="text-xl font-bold mb-4 text-purple-700">Other Cities</h3>
        <ul class="space-y-3 text-gray-700">
          <li class="flex justify-between">
            <span>Accommodation</span>
            <span class="font-medium">£500-£800</span>
          </li>
          <li class="flex justify-between">
            <span>Food</span>
            <span class="font-medium">£120-£250</span>
          </li>
          <li class="flex justify-between">
            <span>Transport</span>
            <span class="font-medium">£40-£80</span>
          </li>
          <li class="flex justify-between">
            <span>Other Expenses</span>
            <span class="font-medium">£120-£250</span>
          </li>
          <li class="flex justify-between pt-3 border-t border-gray-200">
            <span class="font-bold">Total</span>
            <span class="font-bold text-purple-600">£780-£1,380</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Consultation CTA -->
<section id="gsap consultation" class="py-20 bg-gradient-to-br from-purple-900 to-indigo-800 text-white">
  <div class="max-w-full px-6 lg:px-20 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">
      Start Your UK <span class="text-yellow-300">Education Journey</span> Today
    </h2>
    <p class="text-xl mb-8 max-w-2xl mx-auto">
      Get personalized guidance from our UK education experts
    </p>
    
    <div class="flex flex-col sm:flex-row justify-center gap-4">
      <a href="{{ 'appointment' }}" class="inline-flex items-center justify-center bg-yellow-400 hover:bg-yellow-300 text-purple-900 font-bold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        Book Free Consultation
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

  <section class="gsap relative text-white py-20 h-96 overflow-hidden">
    <!-- Background Video -->
    <video autoplay muted loop playsinline class="absolute top-0 left-0 w-full h-full object-cover z-0">
    <source src="../assests/images/video.mp4" type="video/mp4" />
    Your browser does not support the video tag.
    </video>
  </section>

@endsection