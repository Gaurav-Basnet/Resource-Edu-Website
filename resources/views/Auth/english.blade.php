@extends('Auth.layout')
@section('title', 'English Language Learning')

@section('content')

    <div class="bg-gradient-to-b from-purple-50 to-white px-6 lg:px-8 ">
        <!-- Navigation -->
        <div class="py-3">
            <a href="{{ url()->previous() }}"
                class="inline-flex items-center text-purple-600 hover:text-purple-800 transition duration-300 group">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 group-hover:-translate-x-1 transition-transform"
                    viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                        clip-rule="evenodd" />
                </svg>
                Back to Dashboard
            </a>
        </div>

        <div class="min-h-screen py-8">
            <div class="w-full">
                <!-- Hero Section -->
                <div class="text-center mb-16">
                    <div
                        class="inline-flex items-center bg-purple-100 text-purple-800 px-4 py-2 rounded-full text-sm font-medium mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 5h12M9 3v2m1.048 9.5A18.022 18.022 0 016.412 9m6.088 9h7M11 21l5-10 5 10M12.751 5C11.783 10.77 8.07 15.61 3 18.129" />
                        </svg>
                        English Language Learning Center
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">Master English at Every Level</h1>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Your complete guide to English language proficiency from basic communication to advanced fluency
                    </p>
                </div>

                <!-- English Overview Card -->
                <div
                    class="bg-white rounded-2xl shadow-lg overflow-hidden mb-16 border border-gray-100 transform transition-all hover:shadow-xl">
                    <div class="bg-gradient-to-r from-purple-600 to-purple-700 p-8 text-white">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div class="mb-6 md:mb-0">
                                <h2 class="text-3xl font-bold mb-3">About English Language Learning</h2>
                                <p class="text-purple-100 text-lg">Build skills for academic, professional, and daily life</p>
                            </div>
                            <div class="flex space-x-3">
                                <span
                                    class="inline-flex items-center bg-purple-500/20 backdrop-blur-sm rounded-full px-4 py-2 text-sm font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                    All Levels
                                </span>
                                <span
                                    class="inline-flex items-center bg-purple-500/20 backdrop-blur-sm rounded-full px-4 py-2 text-sm font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                    Flexible Learning
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                            <div>
                                <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                                    Our comprehensive English language program is designed to help learners at all levels -
                                    from complete beginners to advanced speakers. Whether you're learning for travel, work,
                                    study, or personal growth, we have the right resources for you.
                                </p>
                                <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                                    The program focuses on all key language skills: <span
                                        class="font-semibold text-purple-600">listening</span>, <span
                                        class="font-semibold text-purple-600">speaking</span>, <span
                                        class="font-semibold text-purple-600">reading</span>, and <span
                                        class="font-semibold text-purple-600">writing</span>, with special attention to
                                    grammar, vocabulary, and pronunciation.
                                </p>
                                <div class="flex flex-wrap gap-4">
                                    <div class="flex items-center text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Self-paced or instructor-led
                                    </div>
                                    <div class="flex items-center text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Progress tracking
                                    </div>
                                </div>
                            </div>
                            <div class="bg-purple-50 rounded-xl p-6 border border-purple-100">
                                <h3 class="font-semibold text-xl text-purple-800 mb-4">Who Is This For?</h3>
                                <ul class="space-y-4">
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <span class="text-gray-700"><strong>Beginners:</strong> Starting your English
                                            learning journey</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <span class="text-gray-700"><strong>Intermediate:</strong> Improving your existing
                                            English skills</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <span class="text-gray-700"><strong>Advanced:</strong> Perfecting fluency and
                                            accuracy</span>
                                    </li>
                                    <li class="flex items-start">
                                        <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                        <span class="text-gray-700"><strong>Professionals:</strong> Business English and
                                            specialized vocabulary</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Levels Section -->
                <div class="mb-16">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">English Proficiency Levels</h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Find the right level for your current skills and
                            goals</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Basic Card -->
                        <div
                            class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                            <div class="bg-gradient-to-r from-purple-400 to-purple-500 p-5 text-white">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-xl font-bold">Basic English</h3>
                                    <div class="bg-purple-300/30 backdrop-blur-sm rounded-full p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11.933 12.8a1 1 0 000-1.6L6.6 7.2A1 1 0 005 8v8a1 1 0 001.6.8l5.333-4zM19.933 12.8a1 1 0 000-1.6l-5.333-4A1 1 0 0013 8v8a1 1 0 001.6.8l5.333-4z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5">
                                <div class="flex items-center text-sm text-gray-600 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Beginner level (A1-A2)</span>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    Build foundational skills for everyday communication. Learn essential vocabulary, basic
                                    grammar, and simple conversations.
                                </p>
                                <div class="mb-4">
                                    <h4 class="font-medium text-purple-600 mb-2">You'll Learn:</h4>
                                    <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                                        <li>Introductions and personal information</li>
                                        <li>Basic vocabulary (300-600 words)</li>
                                        <li>Simple present, past, and future tenses</li>
                                        <li>Everyday expressions and phrases</li>
                                    </ul>
                                </div>
                                <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                    <span class="font-medium text-purple-600">CEFR Level:</span> A1-A2 (Beginner)
                                </div>
                            </div>
                        </div>

                        <!-- Intermediate Card -->
                        <div
                            class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                            <div class="bg-gradient-to-r from-purple-500 to-purple-600 p-5 text-white">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-xl font-bold">Intermediate English</h3>
                                    <div class="bg-purple-400/30 backdrop-blur-sm rounded-full p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M13 10V3L4 14h7v7l9-11h-7z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5">
                                <div class="flex items-center text-sm text-gray-600 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Intermediate level (B1-B2)</span>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    Develop more complex language skills for work, travel, and social situations. Expand
                                    your vocabulary and grammatical range.
                                </p>
                                <div class="mb-4">
                                    <h4 class="font-medium text-purple-600 mb-2">You'll Learn:</h4>
                                    <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                                        <li>Narrating experiences and events</li>
                                        <li>Expressing opinions and arguments</li>
                                        <li>Intermediate grammar structures</li>
                                        <li>Vocabulary for various contexts (1,500-2,500 words)</li>
                                    </ul>
                                </div>
                                <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                    <span class="font-medium text-purple-600">CEFR Level:</span> B1-B2 (Independent User)
                                </div>
                            </div>
                        </div>

                        <!-- Advanced Card -->
                        <div
                            class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                            <div class="bg-gradient-to-r from-purple-600 to-purple-700 p-5 text-white">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-xl font-bold">Advanced English</h3>
                                    <div class="bg-purple-500/30 backdrop-blur-sm rounded-full p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5">
                                <div class="flex items-center text-sm text-gray-600 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Advanced level (C1-C2)</span>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    Achieve fluency and accuracy for academic and professional contexts. Master nuanced
                                    language use and sophisticated communication.
                                </p>
                                <div class="mb-4">
                                    <h4 class="font-medium text-purple-600 mb-2">You'll Learn:</h4>
                                    <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                                        <li>Complex grammatical structures</li>
                                        <li>Academic and professional vocabulary (3,000+ words)</li>
                                        <li>Nuanced expressions and idioms</li>
                                        <li>Advanced writing and presentation skills</li>
                                    </ul>
                                </div>
                                <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                    <span class="font-medium text-purple-600">CEFR Level:</span> C1-C2 (Proficient User)
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Skills Section -->
                <div class="mb-16">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Core Language Skills</h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Develop all aspects of English language
                            proficiency</p>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <!-- Speaking -->
                            <div class="bg-purple-50 rounded-lg p-6 border border-purple-100">
                                <div class="flex items-center mb-4">
                                    <div
                                        class="bg-purple-600 text-white rounded-full h-8 w-8 flex items-center justify-center mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-900">Speaking</h3>
                                </div>
                                <p class="text-gray-700">
                                    Develop fluency, pronunciation, and confidence in conversations, presentations, and
                                    discussions.
                                </p>
                                <div class="mt-3 text-sm text-purple-600 font-medium">
                                    <span class="bg-purple-100 px-2 py-1 rounded">All Levels</span>
                                </div>
                            </div>

                            <!-- Listening -->
                            <div class="bg-purple-50 rounded-lg p-6 border border-purple-100">
                                <div class="flex items-center mb-4">
                                    <div
                                        class="bg-purple-600 text-white rounded-full h-8 w-8 flex items-center justify-center mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15.536a5 5 0 001.414 1.414m2.828-9.9a9 9 0 012.728-2.728" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-900">Listening</h3>
                                </div>
                                <p class="text-gray-700">
                                    Improve comprehension of different accents, speeds, and contexts in spoken English.
                                </p>
                                <div class="mt-3 text-sm text-purple-600 font-medium">
                                    <span class="bg-purple-100 px-2 py-1 rounded">All Levels</span>
                                </div>
                            </div>

                            <!-- Reading -->
                            <div class="bg-purple-50 rounded-lg p-6 border border-purple-100">
                                <div class="flex items-center mb-4">
                                    <div
                                        class="bg-purple-600 text-white rounded-full h-8 w-8 flex items-center justify-center mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-900">Reading</h3>
                                </div>
                                <p class="text-gray-700">
                                    Enhance your ability to understand various texts from simple to complex academic
                                    materials.
                                </p>
                                <div class="mt-3 text-sm text-purple-600 font-medium">
                                    <span class="bg-purple-100 px-2 py-1 rounded">All Levels</span>
                                </div>
                            </div>

                            <!-- Writing -->
                            <div class="bg-purple-50 rounded-lg p-6 border border-purple-100">
                                <div class="flex items-center mb-4">
                                    <div
                                        class="bg-purple-600 text-white rounded-full h-8 w-8 flex items-center justify-center mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                        </svg>
                                    </div>
                                    <h3 class="text-lg font-semibold text-gray-900">Writing</h3>
                                </div>
                                <p class="text-gray-700">
                                    Master different writing styles from simple messages to complex essays and reports.
                                </p>
                                <div class="mt-3 text-sm text-purple-600 font-medium">
                                    <span class="bg-purple-100 px-2 py-1 rounded">All Levels</span>
                                </div>
                            </div>
                        </div>

                        <div class="mt-8 bg-purple-50 rounded-lg p-6 border border-purple-100">
                            <h3 class="text-xl font-semibold text-gray-900 mb-3">Additional Language Components</h3>
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                                <div>
                                    <h4 class="font-medium text-purple-700 mb-2">Grammar</h4>
                                    <ul class="space-y-2 text-gray-700">
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 text-purple-500 mr-2 mt-0.5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>From basic to advanced structures</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 text-purple-500 mr-2 mt-0.5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>Practical usage in context</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-medium text-purple-700 mb-2">Vocabulary</h4>
                                    <ul class="space-y-2 text-gray-700">
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 text-purple-500 mr-2 mt-0.5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>Thematic word groups</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 text-purple-500 mr-2 mt-0.5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>Collocations and phrasal verbs</span>
                                        </li>
                                    </ul>
                                </div>
                                <div>
                                    <h4 class="font-medium text-purple-700 mb-2">Pronunciation</h4>
                                    <ul class="space-y-2 text-gray-700">
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 text-purple-500 mr-2 mt-0.5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>Sounds and intonation</span>
                                        </li>
                                        <li class="flex items-start">
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="h-5 w-5 text-purple-500 mr-2 mt-0.5" viewBox="0 0 20 20"
                                                fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <span>Accent reduction techniques</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            <!-- Download Section -->
            <div class="mb-16 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200">
                <div class="bg-gradient-to-r from-purple-500 to-purple-600 p-8 text-white">
                    <h2 class="text-3xl font-bold mb-2">Downloadable Resources</h2>
                    <p class="text-purple-100 text-lg">Practice materials, templates, and guides</p>
                </div>
                <div class="p-8">
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                        <!-- Listening Resources -->
                        <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="bg-purple-100 p-3 rounded-lg mr-4">
                                                                 <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Basic English</h3>
                            </div>
                            <ul class="space-y-3" id="listening-resources">
                                @if(count($englishbasic) > 0)
                                    @foreach($englishbasic->take(5) as $index => $resource)
                                        <li class="flex items-center resource-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-500 mr-2"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <a href="{{ $resource->link }}" target="_blank" 
                                                class="text-purple-600 hover:text-purple-800 hover:underline overflow-hidden">
                                                {{ $resource->pdf_name }}
                                            </a>
                                        </li>
                                    @endforeach
                                    @if(count($englishbasic) > 5)
                                        <div id="listening-more" class="hidden">
                                            @foreach($englishbasic->slice(5) as $index => $resource)
                                                <li class="flex items-center resource-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-500 mr-2"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <a href="{{ $resource->link }}" target="_blank"
                                                        class="text-purple-600 hover:text-purple-800 hover:underline">
                                                        {{ $resource->pdf_name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </div>
                                        <div class="mt-4 text-center">
                                            <button onclick="toggleMoreResources('listening')"
                                                class="text-purple-600 hover:text-purple-800 text-sm font-medium focus:outline-none">
                                                View all {{ count($englishbasic) }} resources
                                                <svg id="listening-chevron" xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4 w-4 inline ml-1 transition-transform" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>
                                    @endif
                                @else
                                    <li class="text-gray-500">No listening resources available</li>
                                @endif
                            </ul>
                        </div>

                        <!-- Reading Resources -->
                        <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="bg-green-100 p-3 rounded-lg mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-green-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Intermediate English</h3>
                            </div>
                            <ul class="space-y-3" id="reading-resources">
                                @if(count($englishinter) > 0)
                                    @foreach($englishinterg->take(5) as $index => $resource)
                                        <li class="flex items-center resource-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <a href="{{ $resource->link }}" target="_blank"
                                                class="text-green-600 hover:text-green-800 hover:underline">
                                                {{ $resource->pdf_name }}
                                            </a>
                                        </li>
                                    @endforeach
                                    @if(count($englishinter) > 5)
                                        <div id="reading-more" class="hidden">
                                            @foreach($englishinter->slice(5) as $index => $resource)
                                                <li class="flex items-center resource-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <a href="{{ $resource->link }}" target="_blank"
                                                        class="text-green-600 hover:text-green-800 hover:underline">
                                                        {{ $resource->pdf_name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </div>
                                        <div class="mt-4 text-center">
                                            <button onclick="toggleMoreResources('reading')"
                                                class="text-green-600 hover:text-green-800 text-sm font-medium focus:outline-none">
                                                View all {{ count($englishinter) }} resources
                                                <svg id="reading-chevron" xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4 w-4 inline ml-1 transition-transform" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>
                                    @endif
                                @else
                                    <li class="text-gray-500">No reading resources available</li>
                                @endif
                            </ul>
                        </div>

                        <!-- Writing &  Resources -->
                        <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="bg-yellow-100 p-3 rounded-lg mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-yellow-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Advanced English</h3>
                            </div>
                            <ul class="space-y-3" id="reading-resources">
                                @if(count($englishadvanced) > 0)
                                    @foreach($englishadvanced->take(5) as $index => $resource)
                                        <li class="flex items-center resource-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <a href="{{ $resource->link }}" target="_blank"
                                                class="text-yellow-600 hover:text-yellow-800 hover:underline">
                                                {{ $resource->pdf_name }}
                                            </a>
                                        </li>
                                    @endforeach
                                    @if(count($englishadvanced) > 5)
                                        <div id="reading-more" class="hidden">
                                            @foreach($englishadvanced->slice(5) as $index => $resource)
                                                <li class="flex items-center resource-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <a href="{{ $resource->link }}" target="_blank"
                                                        class="text-yellow-600 hover:text-yellow-800 hover:underline">
                                                        {{ $resource->pdf_name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </div>
                                        <div class="mt-4 text-center">
                                            <button onclick="toggleMoreResources('reading')"
                                                class="text-yellow-600 hover:text-yellow-800 text-sm font-medium focus:outline-none">
                                                View all {{ count($ieltsGeneralWriting) }} resources
                                                <svg id="reading-chevron" xmlns="http://www.w3.org/2000/svg"
                                                    class="h-4 w-4 inline ml-1 transition-transform" viewBox="0 0 20 20"
                                                    fill="currentColor">
                                                    <path fill-rule="evenodd"
                                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                        clip-rule="evenodd" />
                                                </svg>
                                            </button>
                                        </div>
                                    @endif
                                @else
                                    <li class="text-gray-500">No reading resources available</li>
                                @endif
                            </ul>

                        </div>
                                              

                    </div>

                </div>
            </div>


            </div>
        </div>
    </div>

    <!-- Bottom Navigation -->
    <div class="py-4 px-6 lg:px-20 bg-white border-t border-gray-200">
        <a href="{{ url()->previous() }}"
            class="inline-flex items-center text-purple-600 hover:text-purple-800 transition duration-300 group">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 group-hover:-translate-x-1 transition-transform"
                viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd"
                    d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                    clip-rule="evenodd" />
            </svg>
            Back to Dashboard
        </a>
    </div>

@endsection