@extends('master')
@section('title', 'Study in Germany')

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
      Study in <span class="text-yellow-300">Europe</span>
    </h1>
    <p class="text-xl md:text-2xl mb-8 opacity-90 animate-fadeIn delay-100">
      World-class education, diverse cultures, and excellent career prospects across Europe
    </p>
    <div class="animate-fadeIn delay-200">
      <a href="{{ 'appointment' }}" class="inline-block bg-yellow-400 hover:bg-yellow-300 text-purple-900 font-bold px-8 py-4 rounded-full shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
        Free Europe Consultation →
      </a>
    </div>
  </div>
</section>

<!-- Why Europe Section -->
<section class="gsap py-16 bg-white">
  <div class="max-w-full px-6 lg:px-20">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        Why Choose <span class="text-purple-600">Europe</span>?
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Benefits of studying across European countries
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Benefit 1 -->
      <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300 border border-gray-100 hover:border-purple-200">
        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3">Affordable Education</h3>
        <p class="text-gray-600">Many countries offer low tuition (Germany, Norway) or scholarships (France, Netherlands) for international students.</p>
      </div>
      
      <!-- Benefit 2 -->
      <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300 border border-gray-100 hover:border-purple-200">
        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3">Cultural Diversity</h3>
        <p class="text-gray-600">Experience different languages, traditions, and lifestyles while traveling easily between countries.</p>
      </div>
      
      <!-- Benefit 3 -->
      <div class="bg-gray-50 p-8 rounded-xl hover:shadow-lg transition duration-300 border border-gray-100 hover:border-purple-200">
        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-3">Career Opportunities</h3>
        <p class="text-gray-600">Strong economies with post-study work options in Germany, Sweden, Ireland, and more.</p>
      </div>
    </div>
  </div>
</section>

<!-- Top Countries Section -->
<section class="gsap py-16 bg-gray-50">
  <div class="max-w-full px-6 lg:px-20">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">
      Popular <span class="text-purple-600">European Study Destinations</span>
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      Excellent universities across diverse European nations
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
      <!-- Germany -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
        <div class="h-48 bg-gray-800 flex items-center justify-center">
          <img src="https://images.unsplash.com/photo-1528728329032-2972f65dfb3d?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Germany" class="h-full w-full object-cover">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">Germany</h3>
          <p class="text-gray-600 mb-4">No tuition at public universities, strong engineering programs</p>
          <div class="flex items-center text-sm text-gray-500">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Top Universities: TUM, Heidelberg, Humboldt
          </div>
        </div>
      </div>
      
      <!-- France -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
        <div class="h-48 bg-blue-900 flex items-center justify-center">
          <img src="https://images.unsplash.com/photo-1502602898657-3e91760cbb34?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="France" class="h-full w-full object-cover">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">France</h3>
          <p class="text-gray-600 mb-4">Affordable tuition, world-class business schools</p>
          <div class="flex items-center text-sm text-gray-500">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Top Universities: Sorbonne, HEC Paris, École Polytechnique
          </div>
        </div>
      </div>
      
      <!-- Netherlands -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
        <div class="h-48 bg-red-900 flex items-center justify-center">
          <img src="https://images.unsplash.com/photo-1512470876302-972faa2aa9a4?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Netherlands" class="h-full w-full object-cover">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">Netherlands</h3>
          <p class="text-gray-600 mb-4">Many English programs, innovative teaching methods</p>
          <div class="flex items-center text-sm text-gray-500">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Top Universities: Delft, Amsterdam, Leiden
          </div>
        </div>
      </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
      <!-- Sweden -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
        <div class="h-48 bg-blue-800 flex items-center justify-center">
          <img src="https://images.unsplash.com/photo-1519849961555-eb9f2a8db3f5?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Sweden" class="h-full w-full object-cover">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">Sweden</h3>
          <p class="text-gray-600 mb-4">Innovation-focused, high quality of life</p>
          <div class="flex items-center text-sm text-gray-500">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Top Universities: Lund, Uppsala, KTH
          </div>
        </div>
      </div>
      
      <!-- Italy -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
        <div class="h-48 bg-green-800 flex items-center justify-center">
          <img src="https://images.unsplash.com/photo-1495567720989-cebdbdd97913?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Italy" class="h-full w-full object-cover">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">Italy</h3>
          <p class="text-gray-600 mb-4">Rich history, affordable living costs</p>
          <div class="flex items-center text-sm text-gray-500">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Top Universities: Bologna, Politecnico di Milano, Sapienza
          </div>
        </div>
      </div>
      
      <!-- Spain -->
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
        <div class="h-48 bg-yellow-700 flex items-center justify-center">
          <img src="https://images.unsplash.com/photo-1517825738774-7de9363ef735?ixlib=rb-1.2.1&auto=format&fit=crop&w=1350&q=80" alt="Spain" class="h-full w-full object-cover">
        </div>
        <div class="p-6">
          <h3 class="text-xl font-bold mb-2">Spain</h3>
          <p class="text-gray-600 mb-4">Vibrant culture, lower tuition fees</p>
          <div class="flex items-center text-sm text-gray-500">
            <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
            </svg>
            Top Universities: Barcelona, Complutense Madrid, IE University
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
        European <span class="text-purple-600">Education Systems</span>
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Comparing academic structures across countries
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Tuition Fees -->
      <div class="bg-purple-50 p-8 rounded-xl border border-purple-100">
        <h3 class="text-xl font-bold mb-4 text-purple-800">Tuition Fees</h3>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>Germany/Norway:</strong> No tuition at public universities</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>France/Spain:</strong> €1,000-€4,000 per year</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>Netherlands/UK:</strong> €8,000-€15,000 per year</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>Switzerland:</strong> €1,000-€2,000 per year (but high living costs)</span>
          </li>
        </ul>
      </div>
      
      <!-- Degree Structure -->
      <div class="bg-purple-50 p-8 rounded-xl border border-purple-100">
        <h3 class="text-xl font-bold mb-4 text-purple-800">Degree Structure</h3>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>Bachelor's:</strong> Typically 3 years (4 in Scotland)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>Master's:</strong> 1-2 years depending on country</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>PhD:</strong> 3-5 years with funding opportunities</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>ECTS:</strong> European Credit Transfer System standardizes credits</span>
          </li>
        </ul>
      </div>
      
      <!-- Language Requirements -->
      <div class="bg-purple-50 p-8 rounded-xl border border-purple-100">
        <h3 class="text-xl font-bold mb-4 text-purple-800">Language Options</h3>
        <ul class="space-y-3 text-gray-700">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>English programs:</strong> Widely available in Netherlands, Sweden, Germany</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>Local language:</strong> Often required for bachelor's in France, Spain, Italy</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>Language courses:</strong> Many universities offer preparatory programs</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>IELTS/TOEFL:</strong> Typically 6.0-6.5 for English programs</span>
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
      Top fields of study across European countries
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
      <!-- Course 1 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-purple-600">
        <h3 class="text-xl font-bold mb-3">Engineering & Technology</h3>
        <p class="text-gray-600 mb-4">Strong in Germany, Netherlands, Sweden (TUM, Delft, KTH)</p>
        <div class="text-sm text-purple-600 font-medium">Avg. Tuition: €0-€15,000</div>
      </div>
      
      <!-- Course 2 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-blue-600">
        <h3 class="text-xl font-bold mb-3">Business & Economics</h3>
        <p class="text-gray-600 mb-4">Top schools in France, UK, Spain (HEC Paris, LBS, IE)</p>
        <div class="text-sm text-blue-600 font-medium">Avg. Tuition: €5,000-€20,000</div>
      </div>
      
      <!-- Course 3 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-green-600">
        <h3 class="text-xl font-bold mb-3">Computer Science</h3>
        <p class="text-gray-600 mb-4">Excellent in Germany, Finland, Switzerland (ETH Zurich, Aalto)</p>
        <div class="text-sm text-green-600 font-medium">Avg. Tuition: €0-€12,000</div>
      </div>
      
      <!-- Course 4 -->
      <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition duration-300 border-l-4 border-yellow-600">
        <h3 class="text-xl font-bold mb-3">Arts & Humanities</h3>
        <p class="text-gray-600 mb-4">Renowned in Italy, UK, France (Bologna, Sorbonne, Oxford)</p>
        <div class="text-sm text-yellow-600 font-medium">Avg. Tuition: €1,000-€15,000</div>
      </div>
    </div>
  </div>
</section>

<!-- Student Visa Section -->
<section class="gsap py-16 bg-white">
  <div class="max-w-full px-6 lg:px-20">
    <div class="text-center mb-16">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
        European <span class="text-purple-600">Student Visas</span>
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Comparing visa requirements across countries
      </p>
    </div>
    
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
      <!-- Requirements -->
      <div>
        <h3 class="text-2xl font-bold mb-6 text-purple-700">General Requirements</h3>
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
              <h4 class="text-lg font-medium text-gray-900">Acceptance Letter</h4>
              <p class="mt-1 text-gray-600">From recognized European institution</p>
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
              <p class="mt-1 text-gray-600">Varies by country (€8,000-€12,000/year typically)</p>
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
              <h4 class="text-lg font-medium text-gray-900">Health Insurance</h4>
              <p class="mt-1 text-gray-600">Mandatory in all Schengen countries</p>
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
              <h4 class="text-lg font-medium text-gray-900">Language Proficiency</h4>
              <p class="mt-1 text-gray-600">Depends on program language</p>
            </div>
          </div>
        </div>
      </div>
      
      <!-- Country Specific -->
      <div>
        <h3 class="text-2xl font-bold mb-6 text-purple-700">Country Specifics</h3>
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
              <h4 class="text-lg font-medium text-gray-900">Germany</h4>
              <p class="mt-1 text-gray-600">Blocked account with €11,208 required</p>
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
              <h4 class="text-lg font-medium text-gray-900">France</h4>
              <p class="mt-1 text-gray-600">Campus France procedure required</p>
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
              <h4 class="text-lg font-medium text-gray-900">Netherlands</h4>
              <p class="mt-1 text-gray-600">MVV residence permit required for some nationalities</p>
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
              <h4 class="text-lg font-medium text-gray-900">Nordic Countries</h4>
              <p class="mt-1 text-gray-600">Proof of sufficient funds (€800-€1,000/month)</p>
            </div>
          </div>
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
        <span class="text-purple-600">Work Opportunities</span> After Studies
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
        Post-study work options across European countries
      </p>
    </div>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Work During Studies -->
      <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition duration-300">
        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6 mx-auto">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-4 text-center">During Studies</h3>
        <ul class="space-y-3 text-gray-600">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>Germany:</strong> 120 full days or 240 half days per year</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>France:</strong> 964 hours per year (about 60% of full-time)</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>Nordic Countries:</strong> No restrictions during semester breaks</span>
          </li>
        </ul>
      </div>
      
      <!-- After Graduation -->
      <div class="bg-white p-8 rounded-xl shadow-md hover:shadow-lg transition duration-300">
        <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6 mx-auto">
          <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2"></path>
          </svg>
        </div>
        <h3 class="text-xl font-bold mb-4 text-center">After Graduation</h3>
        <ul class="space-y-3 text-gray-600">
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>Germany:</strong> 18-month job seeker visa</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>Netherlands:</strong> Orientation year visa for graduates</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>Sweden:</strong> 6-12 months to seek employment</span>
          </li>
        </ul>
      </div>
      
      <!-- Permanent Residency -->
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
            <span><strong>Germany:</strong> Eligible after 2 years of employment</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>France:</strong> 5 years continuous residence</span>
          </li>
          <li class="flex items-start">
            <svg class="w-5 h-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
            </svg>
            <span><strong>Nordic Countries:</strong> 4-5 years of residence</span>
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
      <span class="text-purple-600">Living Costs</span> in Europe
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      Estimated monthly expenses (varies by city and country)
    </p>
    
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <!-- Western Europe -->
      <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
        <h3 class="text-xl font-bold mb-4 text-purple-700">Western Europe</h3>
        <p class="text-gray-600 mb-4">Germany, France, Netherlands, Belgium</p>
        <ul class="space-y-3 text-gray-700">
          <li class="flex justify-between">
            <span>Accommodation</span>
            <span class="font-medium">€400-€900</span>
          </li>
          <li class="flex justify-between">
            <span>Food</span>
            <span class="font-medium">€200-€400</span>
          </li>
          <li class="flex justify-between">
            <span>Transport</span>
            <span class="font-medium">€50-€100</span>
          </li>
          <li class="flex justify-between pt-3 border-t border-gray-200">
            <span class="font-bold">Total</span>
            <span class="font-bold text-purple-600">€650-€1,400</span>
          </li>
        </ul>
      </div>
      
      <!-- Nordic Countries -->
      <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
        <h3 class="text-xl font-bold mb-4 text-purple-700">Nordic Countries</h3>
        <p class="text-gray-600 mb-4">Sweden, Denmark, Norway, Finland</p>
        <ul class="space-y-3 text-gray-700">
          <li class="flex justify-between">
            <span>Accommodation</span>
            <span class="font-medium">€500-€1,100</span>
          </li>
          <li class="flex justify-between">
            <span>Food</span>
            <span class="font-medium">€250-€450</span>
          </li>
          <li class="flex justify-between">
            <span>Transport</span>
            <span class="font-medium">€60-€120</span>
          </li>
          <li class="flex justify-between pt-3 border-t border-gray-200">
            <span class="font-bold">Total</span>
            <span class="font-bold text-purple-600">€810-€1,670</span>
          </li>
        </ul>
      </div>
      
      <!-- Southern Europe -->
      <div class="bg-gray-50 p-6 rounded-xl border border-gray-200">
        <h3 class="text-xl font-bold mb-4 text-purple-700">Southern Europe</h3>
        <p class="text-gray-600 mb-4">Spain, Italy, Portugal, Greece</p>
        <ul class="space-y-3 text-gray-700">
          <li class="flex justify-between">
            <span>Accommodation</span>
            <span class="font-medium">€300-€700</span>
          </li>
          <li class="flex justify-between">
            <span>Food</span>
            <span class="font-medium">€150-€300</span>
          </li>
          <li class="flex justify-between">
            <span>Transport</span>
            <span class="font-medium">€30-€70</span>
          </li>
          <li class="flex justify-between pt-3 border-t border-gray-200">
            <span class="font-bold">Total</span>
            <span class="font-bold text-purple-600">€480-€1,070</span>
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
      Start Your European <span class="text-yellow-300">Education Journey</span> Today
    </h2>
    <p class="text-xl mb-8 max-w-2xl mx-auto">
      Get personalized guidance from our European education experts
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