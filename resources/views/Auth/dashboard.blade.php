@extends('Auth.layout')
@section('title', 'Dashboard')

@section('content')

<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 px-4 sm:px-6 lg:px-8 py-8 w-full">
    <!-- Welcome Section -->
    <div class="max-w-7xl mx-auto">
        <div class="bg-white rounded-2xl shadow-lg p-6 text-center mb-10 border border-gray-200 transform transition-all hover:scale-[1.01] hover:shadow-xl">
            <div class="flex items-center justify-center space-x-4 mb-4">
                <div class="bg-indigo-100 p-3 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                </div>
                <h2 class="text-3xl font-bold text-gray-800">Welcome back, {{ Auth::user()->name }}</h2>
            </div>
            <p class="text-gray-600 text-lg max-w-2xl mx-auto">Discover our comprehensive language courses and tests to boost your academic journey abroad</p>
        </div>

        <!-- Courses Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
   <!-- Additional Cards to be added to the grid -->

   <!-- IELTS Academic Training Card -->
<div class="group relative bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border border-gray-200 flex flex-col transform hover:-translate-y-1">
    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    <div class="relative z-10 p-6 flex-grow">
        <div class="flex items-center justify-between mb-4">
            <div class="bg-blue-100 p-3 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
            </div>
            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">Academic</span>
        </div>
        <h3 class="text-xl font-bold text-gray-800 group-hover:text-white mb-2">IELTS Academic Training</h3>
        <p class="text-gray-600 group-hover:text-blue-100 text-sm mb-4">Comprehensive preparation for university admission, focusing on academic language skills and test strategies.</p>
        <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-blue-50 text-blue-700 group-hover:bg-blue-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Academic Writing</span>
            <span class="bg-blue-50 text-blue-700 group-hover:bg-blue-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Research Skills</span>
            <span class="bg-blue-50 text-blue-700 group-hover:bg-blue-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Lecture Comprehension</span>
            <span class="bg-blue-50 text-blue-700 group-hover:bg-blue-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Band 9 Strategies</span>
        </div>
    </div>
    <div class="relative z-10 px-6 pb-6">
        <a href="{{ 'ieltsacademic' }}" class="w-full inline-flex items-center justify-center px-4 py-3 border border-transparent text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition duration-150 ease-in-out shadow-sm group-hover:bg-white group-hover:text-blue-600">
            Start Preparation
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4 group-hover:animate-bounce-right" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-400 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
</div>
<!-- IELTS General Training Card -->
<!-- IELTS General Training Card -->
<div class="group relative bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border border-gray-200 flex flex-col transform hover:-translate-y-1">
    <div class="absolute inset-0 bg-gradient-to-r from-teal-500 to-teal-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    <div class="relative z-10 p-6 flex-grow">
        <div class="flex items-center justify-between mb-4">
            <div class="bg-teal-100 p-3 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-teal-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
            </div>
            <span class="bg-teal-100 text-teal-800 text-xs font-semibold px-2.5 py-0.5 rounded">Migration</span>
        </div>
        <h3 class="text-xl font-bold text-gray-800 group-hover:text-white mb-2">IELTS General Training</h3>
        <p class="text-gray-600 group-hover:text-teal-100 text-sm mb-4">Practical English preparation for work experience, training programs, and migration to English-speaking countries.</p>
        <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-teal-50 text-teal-700 group-hover:bg-teal-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Everyday English</span>
            <span class="bg-teal-50 text-teal-700 group-hover:bg-teal-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Workplace Skills</span>
            <span class="bg-teal-50 text-teal-700 group-hover:bg-teal-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Social Contexts</span>
            <span class="bg-teal-50 text-teal-700 group-hover:bg-teal-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Visa Requirements</span>
        </div>
    </div>
    <div class="relative z-10 px-6 pb-6">
        <a href="{{ 'ieltsgeneral' }}" class="w-full inline-flex items-center justify-center px-4 py-3 border border-transparent text-sm font-medium rounded-lg text-white bg-teal-600 hover:bg-teal-700 transition duration-150 ease-in-out shadow-sm group-hover:bg-white group-hover:text-teal-600">
            Start Training
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4 group-hover:animate-bounce-right" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-teal-400 to-teal-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
</div>
<!-- IELTS UKVI Card -->
<div class="group relative bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border border-gray-200 flex flex-col transform hover:-translate-y-1">
    <div class="absolute inset-0 bg-gradient-to-r from-amber-500 to-amber-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    <div class="relative z-10 p-6 flex-grow">
        <div class="flex items-center justify-between mb-4">
            <div class="bg-amber-100 p-3 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-amber-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                </svg>
            </div>
            <span class="bg-amber-100 text-amber-800 text-xs font-semibold px-2.5 py-0.5 rounded">UK Visa</span>
        </div>
        <h3 class="text-xl font-bold text-gray-800 group-hover:text-white mb-2">UKVI IELTS</h3>
        <p class="text-gray-600 group-hover:text-amber-100 text-sm mb-4">Special version of IELTS approved for UK Visa and Immigration applications, meeting specific requirements.</p>
        <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-amber-50 text-amber-700 group-hover:bg-amber-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Academic</span>
            <span class="bg-amber-50 text-amber-700 group-hover:bg-amber-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">General</span>
            <span class="bg-amber-50 text-amber-700 group-hover:bg-amber-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">SELT</span>
        </div>
    </div>
    <div class="relative z-10 px-6 pb-6">
        <a href="{{ 'ieltsukvi' }}" class="w-full inline-flex items-center justify-center px-4 py-3 border border-transparent text-sm font-medium rounded-lg text-white bg-amber-600 hover:bg-amber-700 transition duration-150 ease-in-out shadow-sm group-hover:bg-white group-hover:text-amber-600">
            Explore Course
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4 group-hover:animate-bounce-right" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-amber-400 to-amber-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
</div>

<!-- English A1/A2 Card -->
<div class="group relative bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border border-gray-200 flex flex-col transform hover:-translate-y-1">
    <div class="absolute inset-0 bg-gradient-to-r from-pink-500 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    <div class="relative z-10 p-6 flex-grow">
        <div class="flex items-center justify-between mb-4">
            <div class="bg-pink-100 p-3 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-pink-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
            </div>
            <span class="bg-pink-100 text-pink-800 text-xs font-semibold px-2.5 py-0.5 rounded">Beginner</span>
        </div>
        <h3 class="text-xl font-bold text-gray-800 group-hover:text-white mb-2">LifeSkill A1/B1</h3>
        <p class="text-gray-600 group-hover:text-pink-100 text-sm mb-4">Basic English courses for beginners, covering essential vocabulary, grammar, and communication skills.</p>
        <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-pink-50 text-pink-700 group-hover:bg-pink-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">A1</span>
            <span class="bg-pink-50 text-pink-700 group-hover:bg-pink-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">B1</span>
            <span class="bg-pink-50 text-pink-700 group-hover:bg-pink-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Basic</span>
        </div>
    </div>
    <div class="relative z-10 px-6 pb-6">
        <a href="{{ 'ieltsA1A2' }}" class="w-full inline-flex items-center justify-center px-4 py-3 border border-transparent text-sm font-medium rounded-lg text-white bg-pink-600 hover:bg-pink-700 transition duration-150 ease-in-out shadow-sm group-hover:bg-white group-hover:text-pink-600">
            Explore Course
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4 group-hover:animate-bounce-right" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-pink-400 to-pink-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
</div>

<!-- General Knowledge Card -->
<div class="group relative bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border border-gray-200 flex flex-col transform hover:-translate-y-1">
    <div class="absolute inset-0 bg-gradient-to-r from-purple-500 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    <div class="relative z-10 p-6 flex-grow">
        <div class="flex items-center justify-between mb-4">
            <div class="bg-purple-100 p-3 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
            </div>
            <span class="bg-purple-100 text-purple-800 text-xs font-semibold px-2.5 py-0.5 rounded">Essential</span>
        </div>
        <h3 class="text-xl font-bold text-gray-800 group-hover:text-white mb-2">General Knowledge Mastery</h3>
        <p class="text-gray-600 group-hover:text-purple-100 text-sm mb-4">Expand your expertise in history, science, geography, and culture - vital for academic success and competitive exams.</p>
        <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-purple-50 text-purple-700 group-hover:bg-purple-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">History</span>
            <span class="bg-purple-50 text-purple-700 group-hover:bg-purple-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Science</span>
            <span class="bg-purple-50 text-purple-700 group-hover:bg-purple-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Geography</span>
            <span class="bg-purple-50 text-purple-700 group-hover:bg-purple-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Current Affairs</span>
        </div>
    </div>
    <div class="relative z-10 px-6 pb-6">
        <a href="{{ 'general' }}" class="w-full inline-flex items-center justify-center px-4 py-3 border border-transparent text-sm font-medium rounded-lg text-white bg-purple-600 hover:bg-purple-700 transition duration-150 ease-in-out shadow-sm group-hover:bg-white group-hover:text-purple-600">
            Explore Course
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4 group-hover:animate-bounce-right" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-purple-400 to-purple-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
</div>

<!-- English Levels Card -->
<div class="group relative bg-white rounded-2xl shadow-md overflow-hidden hover:shadow-xl transition-all duration-300 border border-gray-200 flex flex-col transform hover:-translate-y-1">
    <div class="absolute inset-0 bg-gradient-to-r from-blue-500 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
    <div class="relative z-10 p-6 flex-grow">
        <div class="flex items-center justify-between mb-4">
            <div class="bg-blue-100 p-3 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                </svg>
            </div>
            <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded">All Levels</span>
        </div>
        <h3 class="text-xl font-bold text-gray-800 group-hover:text-white mb-2">English Language</h3>
        <p class="text-gray-600 group-hover:text-blue-100 text-sm mb-4">Master English from basic communication to advanced fluency - essential for academic, professional, and daily life success.</p>
        <div class="flex flex-wrap gap-2 mb-4">
            <span class="bg-blue-50 text-blue-700 group-hover:bg-blue-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Basic English</span>
            <span class="bg-blue-50 text-blue-700 group-hover:bg-blue-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Intermediate</span>
            <span class="bg-blue-50 text-blue-700 group-hover:bg-blue-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Advanced</span>
            <span class="bg-blue-50 text-blue-700 group-hover:bg-blue-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Grammar</span>
            <span class="bg-blue-50 text-blue-700 group-hover:bg-blue-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Vocabulary</span>
            <span class="bg-blue-50 text-blue-700 group-hover:bg-blue-700 group-hover:text-white px-3 py-1 rounded-full text-xs font-medium transition-colors">Pronunciation</span>
        </div>
    </div>
    <div class="relative z-10 px-6 pb-6">
        <a href="{{ 'english' }}" class="w-full inline-flex items-center justify-center px-4 py-3 border border-transparent text-sm font-medium rounded-lg text-white bg-blue-600 hover:bg-blue-700 transition duration-150 ease-in-out shadow-sm group-hover:bg-white group-hover:text-blue-600">
            Explore English Courses
            <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4 group-hover:animate-bounce-right" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
            </svg>
        </a>
    </div>
    <div class="absolute bottom-0 left-0 right-0 h-1 bg-gradient-to-r from-blue-400 to-blue-600 opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
</div>
</div>
@endsection