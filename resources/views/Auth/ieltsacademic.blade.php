@extends('Auth.layout')
@section('title', 'IELTS Academic Resources')

@section('content')
<div class="bg-gradient-to-b from-purple-50 to-white px-6 lg:px-8 max-w-full">
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
                            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    English Proficiency
                </div>
                <h1 class="text-4xl font-bold text-gray-900 mb-4">IELTS Academic Preparation Center</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Comprehensive resources and strategies to help you achieve your target IELTS score
                </p>
            </div>

            <!-- IELTS Overview Card -->
            <div
                class="bg-white rounded-2xl shadow-lg overflow-hidden mb-16 border border-gray-100 transform transition-all hover:shadow-xl w-full">
                <div class="bg-gradient-to-r from-purple-600 to-purple-700 p-8 text-white">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="mb-6 md:mb-0">
                            <h2 class="text-3xl font-bold mb-3">About IELTS Academic</h2>
                            <p class="text-purple-100 text-lg">International English Language Testing System</p>
                        </div>
                        <div class="flex space-x-3">
                            <span
                                class="inline-flex items-center bg-purple-500/20 backdrop-blur-sm rounded-full px-4 py-2 text-sm font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                4 Test Modules
                            </span>
                            <span
                                class="inline-flex items-center bg-purple-500/20 backdrop-blur-sm rounded-full px-4 py-2 text-sm font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                2 Hours 45 Minutes
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                        <div>
                            <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                                The IELTS Academic test is designed for those planning to study in higher education or
                                seeking professional registration. It assesses whether you're ready to begin studying or
                                training in an English-speaking environment.
                            </p>
                            <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                                Our preparation center provides <span class="font-semibold text-purple-600">authentic
                                    practice materials</span>, <span class="font-semibold text-purple-600">test-taking
                                    strategies</span>, and <span class="font-semibold text-purple-600">skill-building
                                    exercises</span> to help you maximize your score potential.
                            </p>
                            <div class="flex flex-wrap gap-4">
                                <div class="flex items-center text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Band score system (0-9)
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M10 12a2 2 0 100-4 2 2 0 000 4z" />
                                        <path fill-rule="evenodd"
                                            d="M.458 10C1.732 5.943 5.522 3 10 3s8.268 2.943 9.542 7c-1.274 4.057-5.064 7-9.542 7S1.732 14.057.458 10zM14 10a4 4 0 11-8 0 4 4 0 018 0z"
                                            clip-rule="evenodd" />
                                    </svg>
                                    Score calculators
                                </div>
                            </div>
                        </div>
                        <div class="bg-purple-50 rounded-xl p-6 border border-purple-100">
                            <h3 class="font-semibold text-xl text-purple-800 mb-4">Test Modules Overview</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path
                                                d="M9 4.804A7.968 7.968 0 005.5 4c-1.255 0-2.443.29-3.5.804v10A7.969 7.969 0 015.5 14c1.669 0 3.218.51 4.5 1.385A7.962 7.962 0 0114.5 14c1.255 0 2.443.29 3.5.804v-10A7.968 7.968 0 0014.5 4c-1.255 0-2.443.29-3.5.804V12a1 1 0 11-2 0V4.804z" />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700"><strong>Listening:</strong> 30 minutes, 4 sections, 40
                                        questions</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700"><strong>Reading:</strong> 60 minutes, 3 passages, 40
                                        questions</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M18 5v8a2 2 0 01-2 2h-5l-5 4v-4H4a2 2 0 01-2-2V5a2 2 0 012-2h12a2 2 0 012 2zM7 8H5v2h2V8zm2 0h2v2H9V8zm6 0h-2v2h2V8z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700"><strong>Writing:</strong> 60 minutes, 2 tasks (report
                                        and essay)</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700"><strong>Speaking:</strong> 11-14 minutes, 3 parts
                                        (interview, talk, discussion)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Test Modules Section -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">IELTS Academic Test Modules</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Master each module with targeted practice</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Listening Card -->
                    <div
                        class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-purple-600 to-purple-700 p-5 text-white">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-bold">Listening</h3>
                                <div class="bg-purple-500/30 backdrop-blur-sm rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
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
                                <span>30 minutes</span>
                            </div>
                            <p class="text-gray-700 mb-4">
                                Four recorded monologues and conversations with a variety of question types testing
                                comprehension.
                            </p>
                            <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                <span class="font-medium text-purple-600">Skills:</span> Note-taking, Prediction, Detail
                                recognition
                            </div>
                        </div>
                    </div>

                    <!-- Reading Card -->
                    <div
                        class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-green-600 to-green-700 p-5 text-white">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-bold">Reading</h3>
                                <div class="bg-green-500/30 backdrop-blur-sm rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-sm text-gray-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>60 minutes</span>
                            </div>
                            <p class="text-gray-700 mb-4">
                                Three long reading passages with tasks testing reading comprehension and analysis.
                            </p>
                            <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                <span class="font-medium text-green-600">Skills:</span> Skimming, Scanning, Inference
                            </div>
                        </div>
                    </div>

                    <!-- Writing Card -->
                    <div
                        class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-yellow-600 to-yellow-700 p-5 text-white">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-bold">Writing</h3>
                                <div class="bg-yellow-500/30 backdrop-blur-sm rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-sm text-gray-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>60 minutes</span>
                            </div>
                            <p class="text-gray-700 mb-4">
                                Task 1: Describe visual information. Task 2: Write an essay in response to a point of
                                view or argument.
                            </p>
                            <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                <span class="font-medium text-yellow-600">Skills:</span> Data interpretation,
                                Argumentation, Coherence
                            </div>
                        </div>
                    </div>

                    <!-- Speaking Card -->
                    <div
                        class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-red-600 to-red-700 p-5 text-white">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-bold">Speaking</h3>
                                <div class="bg-red-500/30 backdrop-blur-sm rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11a7 7 0 01-7 7m0 0a7 7 0 01-7-7m7 7v4m0 0H8m4 0h4m-4-8a3 3 0 01-3-3V5a3 3 0 116 0v6a3 3 0 01-3 3z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-sm text-gray-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-red-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>11-14 minutes</span>
                            </div>
                            <p class="text-gray-700 mb-4">
                                Face-to-face interview with an examiner testing spoken English through questions and
                                discussion.
                            </p>
                            <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                <span class="font-medium text-red-600">Skills:</span> Fluency, Pronunciation, Coherence
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preparation Strategies Section -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Test Preparation Strategies</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Proven methods to boost your IELTS score</p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
                        <div class="flex items-center mb-6">
                            <div class="bg-purple-100 p-3 rounded-lg mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Skill-Building Techniques</h3>
                        </div>
                        <ul class="space-y-5">
                            <li
                                class="flex items-start bg-purple-50/50 p-4 rounded-lg group hover:bg-purple-100/50 transition-colors">
                                <span
                                    class="flex-shrink-0 bg-white text-purple-600 rounded-lg p-2 mr-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Listen to English podcasts and radio to improve
                                    comprehension</span>
                            </li>
                            <li
                                class="flex items-start bg-purple-50/50 p-4 rounded-lg group hover:bg-purple-100/50 transition-colors">
                                <span
                                    class="flex-shrink-0 bg-white text-purple-600 rounded-lg p-2 mr-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Read academic journals and newspapers to expand
                                    vocabulary</span>
                            </li>
                            <li
                                class="flex items-start bg-purple-50/50 p-4 rounded-lg group hover:bg-purple-100/50 transition-colors">
                                <span
                                    class="flex-shrink-0 bg-white text-purple-600 rounded-lg p-2 mr-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Practice describing graphs and charts for Writing Task
                                    1</span>
                            </li>
                            <li
                                class="flex items-start bg-purple-50/50 p-4 rounded-lg group hover:bg-purple-100/50 transition-colors">
                                <span
                                    class="flex-shrink-0 bg-white text-purple-600 rounded-lg p-2 mr-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Record yourself speaking on various topics to improve
                                    fluency</span>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
                        <div class="flex items-center mb-6">
                            <div class="bg-indigo-100 p-3 rounded-lg mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Test-Taking Strategies</h3>
                        </div>
                        <ul class="space-y-5">
                            <li
                                class="flex items-start bg-indigo-50/50 p-4 rounded-lg group hover:bg-indigo-100/50 transition-colors">
                                <span
                                    class="flex-shrink-0 bg-white text-indigo-600 rounded-lg p-2 mr-4 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Preview listening questions before audio starts</span>
                            </li>
                            <li
                                class="flex items-start bg-indigo-50/50 p-4 rounded-lg group hover:bg-indigo-100/50 transition-colors">
                                <span
                                    class="flex-shrink-0 bg-white text-indigo-600 rounded-lg p-2 mr-4 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Skim reading passages before answering questions</span>
                            </li>
                            <li
                                class="flex items-start bg-indigo-50/50 p-4 rounded-lg group hover:bg-indigo-100/50 transition-colors">
                                <span
                                    class="flex-shrink-0 bg-white text-indigo-600 rounded-lg p-2 mr-4 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Allocate time carefully in writing (20 min for Task 1, 40
                                    min for Task 2)</span>
                            </li>
                            <li
                                class="flex items-start bg-indigo-50/50 p-4 rounded-lg group hover:bg-indigo-100/50 transition-colors">
                                <span
                                    class="flex-shrink-0 bg-white text-indigo-600 rounded-lg p-2 mr-4 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20"
                                        fill="currentColor">
                                        <path fill-rule="evenodd"
                                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Expand answers in speaking with explanations and
                                    examples</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Download Section -->
            <div class="mb-16 bg-white rounded-2xl shadow-lg overflow-hidden border border-gray-200">
                <div class="bg-gradient-to-r from-indigo-500 to-indigo-600 p-8 text-white">
                    <h2 class="text-3xl font-bold mb-2">Downloadable Resources</h2>
                    <p class="text-indigo-100 text-lg">Practice materials, templates, and guides</p>
                </div>
                <div class="p-8">
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-6">
                        <!-- Listening Resources -->
                        <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="bg-indigo-100 p-3 rounded-lg mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-indigo-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 19V6l12-3v13M9 19c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zm12-3c0 1.105-1.343 2-3 2s-3-.895-3-2 1.343-2 3-2 3 .895 3 2zM9 10l12-3" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Listening</h3>
                            </div>
                            <ul class="space-y-3" id="listening-resources">
                                @if(count($ieltsAcademicListening) > 0)
                                    @foreach($ieltsAcademicListening->take(5) as $index => $resource)
                                        <li class="flex items-center resource-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 mr-2"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <a href="{{ $resource->link }}" target="_blank" 
                                                class="text-indigo-600 hover:text-indigo-800 hover:underline overflow-hidden">
                                                {{ $resource->pdf_name }}
                                            </a>
                                        </li>
                                    @endforeach
                                    @if(count($ieltsAcademicListening) > 5)
                                        <div id="listening-more" class="hidden">
                                            @foreach($ieltsAcademicListening->slice(5) as $index => $resource)
                                                <li class="flex items-center resource-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-indigo-500 mr-2"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <a href="{{ $resource->link }}" target="_blank"
                                                        class="text-indigo-600 hover:text-indigo-800 hover:underline">
                                                        {{ $resource->pdf_name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </div>
                                        <div class="mt-4 text-center">
                                            <button onclick="toggleMoreResources('listening')"
                                                class="text-indigo-600 hover:text-indigo-800 text-sm font-medium focus:outline-none">
                                                View all {{ count($ieltsAcademicListening) }} resources
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
                                <h3 class="text-xl font-bold text-gray-900">Reading</h3>
                            </div>
                            <ul class="space-y-3" id="reading-resources">
                                @if(count($ieltsAcademicReading) > 0)
                                    @foreach($ieltsAcademicReading->take(5) as $index => $resource)
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
                                    @if(count($ieltsAcademicReading) > 5)
                                        <div id="reading-more" class="hidden">
                                            @foreach($ieltsAcademicReading->slice(5) as $index => $resource)
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
                                                View all {{ count($ieltsAcademicReading) }} resources
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
                                <h3 class="text-xl font-bold text-gray-900">Writing</h3>
                            </div>
                            <ul class="space-y-3" id="reading-resources">
                                @if(count($ieltsAcademicWriting) > 0)
                                    @foreach($ieltsAcademicWriting->take(5) as $index => $resource)
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
                                    @if(count($ieltsAcademicWriting) > 5)
                                        <div id="reading-more" class="hidden">
                                            @foreach($ieltsAcademicWriting->slice(5) as $index => $resource)
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
                                                View all {{ count($ieltsAcademicWriting) }} resources
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
                                                <!-- Speaking  Resources -->
                        <div class="border border-gray-200 rounded-lg p-6 hover:shadow-md transition-shadow">
                            <div class="flex items-center mb-4">
                                <div class="bg-pink-100 p-3 rounded-lg mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-pink-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">Speaking</h3>
                            </div>
                            <ul class="space-y-3" id="reading-resources">
                                @if(count($ieltsAcademicReading) > 0)
                                    @foreach($ieltsAcademicReading->take(5) as $index => $resource)
                                        <li class="flex items-center resource-item">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500 mr-2"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                            <a href="{{ $resource->link }}" target="_blank"
                                                class="text-pink-600 hover:text-pink-800 hover:underline">
                                                {{ $resource->pdf_name }}
                                            </a>
                                        </li>
                                    @endforeach
                                    @if(count($ieltsAcademicReading) > 5)
                                        <div id="reading-more" class="hidden">
                                            @foreach($ieltsAcademicReading->slice(5) as $index => $resource)
                                                <li class="flex items-center resource-item">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-pink-500 mr-2"
                                                        viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M3 17a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zm3.293-7.707a1 1 0 011.414 0L9 10.586V3a1 1 0 112 0v7.586l1.293-1.293a1 1 0 111.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                    <a href="{{ $resource->link }}" target="_blank"
                                                        class="text-pink-600 hover:text-pink-800 hover:underline">
                                                        {{ $resource->pdf_name }}
                                                    </a>
                                                </li>
                                            @endforeach
                                        </div>
                                        <div class="mt-4 text-center">
                                            <button onclick="toggleMoreResources('reading')"
                                                class="text-pink-600 hover:text-pink-800 text-sm font-medium focus:outline-none">
                                                View all {{ count($ieltsAcademicReading) }} resources
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



<style>
    .rotate-180 {
        transform: rotate(180deg);
    }

    .transition-transform {
        transition: transform 0.2s ease-in-out;
    }
</style>

@endsection