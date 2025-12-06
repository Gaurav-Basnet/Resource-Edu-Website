@extends('Auth.layout')
@section('title', 'IELTS General Training Preparation')

@section('content')

<div class="bg-gradient-to-b from-purple-50 to-white w-full px-6 lg:px-8">
    <!-- Navigation -->
    <div class="py-3">
        <a href="{{ url()->previous() }}" class="inline-flex items-center text-purple-600 hover:text-purple-800 transition duration-300 group">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 group-hover:-translate-x-1 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Back to Dashboard
        </a>
    </div>

    <div class="min-h-screen">
        <div class="w-full">
            <!-- Hero Section -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-purple-100 text-purple-800 px-4 py-2 rounded-full text-sm font-medium mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    IELTS General Training Center
                </div>
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Master the IELTS General Training Exam</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Your comprehensive guide to achieving your best score for migration and work purposes
                </p>
            </div>

            <!-- IELTS Overview Card -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-16 border border-gray-100 transform transition-all hover:shadow-xl">
                <div class="bg-gradient-to-r from-purple-600 to-indigo-700 p-8 text-white">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="mb-6 md:mb-0">
                            <h2 class="text-3xl font-bold mb-3">About IELTS General Training</h2>
                            <p class="text-purple-100 text-lg">For work, training or migration purposes</p>
                        </div>
                        <div class="flex space-x-3">
                            <span class="inline-flex items-center bg-purple-500/20 backdrop-blur-sm rounded-full px-4 py-2 text-sm font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                Accepted Worldwide
                            </span>
                            <span class="inline-flex items-center bg-purple-500/20 backdrop-blur-sm rounded-full px-4 py-2 text-sm font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                2h 45m
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                        <div>
                            <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                                IELTS General Training measures English language proficiency in a practical, everyday context. The test reflects both workplace and social situations.
                            </p>
                            <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                                This version is suitable for those who are going to English-speaking countries for secondary education, work experience, or training programs. It's also required for migration to Australia, Canada, New Zealand and the UK.
                            </p>
                            <div class="flex flex-wrap gap-4">
                                <div class="flex items-center text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Test duration: 2 hours 45 minutes
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                    </svg>
                                    Valid for 2 years
                                </div>
                            </div>
                        </div>
                        <div class="bg-purple-50 rounded-xl p-6 border border-purple-100">
                            <h3 class="font-semibold text-xl text-purple-800 mb-4">Why Take IELTS General Training?</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700">Required for work visas in English-speaking countries</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700">Essential for permanent residency applications</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700">Recognized by employers and professional bodies</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700">Available at 1,600+ locations worldwide</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Test Components Section -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">IELTS General Training Test Components</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Understand each section of the IELTS General Training exam</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                    <!-- Listening Card -->
                    <div class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-purple-500 to-purple-600 p-5 text-white">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-bold">Listening</h3>
                                <div class="bg-purple-400/30 backdrop-blur-sm rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15.536a5 5 0 001.414 1.414m2.828-9.9a9 9 0 012.728-2.728" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-sm text-gray-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>30 minutes</span>
                            </div>
                            <p class="text-gray-700 mb-4">
                                Four recorded monologues and conversations. Tests your ability to understand main ideas and factual information in everyday social and workplace contexts.
                            </p>
                            <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                <span class="font-medium text-purple-600">Format:</span> 4 sections, 40 questions
                            </div>
                        </div>
                    </div>

                    <!-- Reading Card -->
                    <div class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-green-500 to-green-600 p-5 text-white">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-bold">Reading</h3>
                                <div class="bg-green-400/30 backdrop-blur-sm rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-sm text-gray-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>60 minutes</span>
                            </div>
                            <p class="text-gray-700 mb-4">
                                Three sections with texts from notices, advertisements, company handbooks, official documents, books and newspapers.
                            </p>
                            <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                <span class="font-medium text-green-600">Format:</span> 3 sections, 40 questions
                            </div>
                        </div>
                    </div>

                    <!-- Writing Card -->
                    <div class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-yellow-500 to-yellow-600 p-5 text-white">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-bold">Writing</h3>
                                <div class="bg-yellow-400/30 backdrop-blur-sm rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-sm text-gray-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>60 minutes</span>
                            </div>
                            <p class="text-gray-700 mb-4">
                                Task 1: Write a letter (personal, semi-formal or formal style). Task 2: Write an essay responding to a point of view or problem.
                            </p>
                            <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                <span class="font-medium text-yellow-600">Tasks:</span> 2 tasks (150 & 250 words)
                            </div>
                        </div>
                    </div>

                    <!-- Speaking Card -->
                    <div class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-red-500 to-red-600 p-5 text-white">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-bold">Speaking</h3>
                                <div class="bg-red-400/30 backdrop-blur-sm rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-sm text-gray-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>11-14 minutes</span>
                            </div>
                            <p class="text-gray-700 mb-4">
                                Face-to-face interview with an examiner. Tests your ability to communicate in English in everyday situations.
                            </p>
                            <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                <span class="font-medium text-red-600">Parts:</span> 3 parts (Introduction, Cue Card, Discussion)
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- General Training Specifics Section -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">General Training Specifics</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Key differences and focus areas for the General Training test</p>
                </div>
                
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
                    <!-- Reading Differences -->
                    <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
                        <div class="flex items-center mb-6">
                            <div class="bg-green-100 p-3 rounded-lg mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Reading Section Differences</h3>
                        </div>
                        <ul class="space-y-4">
                            <li class="flex items-start">
                                <span class="flex-shrink-0 bg-green-100 text-green-600 rounded-lg p-2 mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700"><strong>Section 1:</strong> Social survival (notices, advertisements, timetables)</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 bg-green-100 text-green-600 rounded-lg p-2 mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700"><strong>Section 2:</strong> Workplace survival (job descriptions, contracts, staff development)</span>
                            </li>
                            <li class="flex items-start">
                                <span class="flex-shrink-0 bg-green-100 text-green-600 rounded-lg p-2 mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700"><strong>Section 3:</strong> General reading (newspapers, magazines, fictional and non-fictional book extracts)</span>
                            </li>
                        </ul>
                    </div>
                    
                    <!-- Writing Differences -->
                    <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
                        <div class="flex items-center mb-6">
                            <div class="bg-yellow-100 p-3 rounded-lg mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Writing Task 1: Letter Writing</h3>
                        </div>
                        <div class="space-y-4">
                            <div class="bg-yellow-50 rounded-lg p-4 border border-yellow-100">
                                <h4 class="font-semibold text-yellow-800 mb-2">Letter Types:</h4>
                                <ul class="list-disc list-inside text-sm text-gray-700 space-y-1">
                                    <li><strong>Formal:</strong> To someone you don't know (job application, complaint to company)</li>
                                    <li><strong>Semi-formal:</strong> To someone you know professionally (colleague, manager)</li>
                                    <li><strong>Informal:</strong> To a friend or family member</li>
                                </ul>
                            </div>
                            <p class="text-gray-700">
                                You'll be given a situation and need to write a letter requesting information or explaining the situation. You must cover all bullet points in the prompt.
                            </p>
                        </div>
                    </div>
                </div>
                
                <!-- Country Requirements -->
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 mb-12">
                    <div class="bg-gradient-to-r from-purple-600 to-indigo-700 p-6 text-white">
                        <h3 class="text-2xl font-bold">Country-Specific Requirements</h3>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                            <!-- Australia -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                <div class="flex items-center mb-3">
                                    <img src="https://flagcdn.com/w40/au.png" alt="Australia Flag" class="w-8 h-5 mr-2">
                                    <h4 class="font-bold text-gray-900">Australia</h4>
                                </div>
                                <ul class="text-sm text-gray-700 space-y-2">
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-500 mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Skilled Migration: Minimum 6.0 each</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-500 mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Professional Registration: 7.0+</span>
                                    </li>
                                </ul>
                            </div>
                            
                            <!-- Canada -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                <div class="flex items-center mb-3">
                                    <img src="https://flagcdn.com/w40/ca.png" alt="Canada Flag" class="w-8 h-5 mr-2">
                                    <h4 class="font-bold text-gray-900">Canada</h4>
                                </div>
                                <ul class="text-sm text-gray-700 space-y-2">
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-500 mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Express Entry: CLB 7 (6.0 each)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-500 mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Provincial Nominee: Varies by province</span>
                                    </li>
                                </ul>
                            </div>
                            
                            <!-- UK -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                <div class="flex items-center mb-3">
                                    <img src="https://flagcdn.com/w40/gb.png" alt="UK Flag" class="w-8 h-5 mr-2">
                                    <h4 class="font-bold text-gray-900">United Kingdom</h4>
                                </div>
                                <ul class="text-sm text-gray-700 space-y-2">
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-500 mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Work Visa: 4.0-6.5 depending on role</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-500 mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Settlement: 4.0-6.5 depending on route</span>
                                    </li>
                                </ul>
                            </div>
                            
                            <!-- New Zealand -->
                            <div class="border border-gray-200 rounded-lg p-4 hover:shadow-md transition-shadow">
                                <div class="flex items-center mb-3">
                                    <img src="https://flagcdn.com/w40/nz.png" alt="New Zealand Flag" class="w-8 h-5 mr-2">
                                    <h4 class="font-bold text-gray-900">New Zealand</h4>
                                </div>
                                <ul class="text-sm text-gray-700 space-y-2">
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-500 mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Skilled Migrant: 6.5 overall</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-purple-500 mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Work to Residence: 6.5 overall</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Preparation Tips Section -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">IELTS General Training Preparation Tips</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Practical strategies tailored for General Training test takers</p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
                        <div class="flex items-center mb-6">
                            <div class="bg-purple-100 p-3 rounded-lg mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">General Training Specific Strategies</h3>
                        </div>
                        <ul class="space-y-5">
                            <li class="flex items-start bg-purple-50/50 p-4 rounded-lg group hover:bg-purple-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-purple-600 rounded-lg p-2 mr-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Practice reading workplace documents like manuals, policies, and notices to prepare for Reading Section 2</span>
                            </li>
                            <li class="flex items-start bg-purple-50/50 p-4 rounded-lg group hover:bg-purple-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-purple-600 rounded-lg p-2 mr-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Study different letter formats (formal, semi-formal, informal) for Writing Task 1</span>
                            </li>
                            <li class="flex items-start bg-purple-50/50 p-4 rounded-lg group hover:bg-purple-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-purple-600 rounded-lg p-2 mr-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Practice listening to everyday conversations and workplace discussions for the Listening section</span>
                            </li>
                            <li class="flex items-start bg-purple-50/50 p-4 rounded-lg group hover:bg-purple-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-purple-600 rounded-lg p-2 mr-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Prepare for Speaking Part 1 by practicing common topics like work, hobbies, and daily life</span>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
                        <div class="flex items-center mb-6">
                            <div class="bg-green-100 p-3 rounded-lg mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Test Day Advice</h3>
                        </div>
                        <ul class="space-y-5">
                            <li class="flex items-start bg-green-50/50 p-4 rounded-lg group hover:bg-green-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-green-600 rounded-lg p-2 mr-4 group-hover:bg-green-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">For Writing Task 1, quickly identify the letter type and appropriate tone before writing</span>
                            </li>
                            <li class="flex items-start bg-green-50/50 p-4 rounded-lg group hover:bg-green-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-green-600 rounded-lg p-2 mr-4 group-hover:bg-green-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">In Reading, practice skimming workplace documents for key information quickly</span>
                            </li>
                            <li class="flex items-start bg-green-50/50 p-4 rounded-lg group hover:bg-green-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-green-600 rounded-lg p-2 mr-4 group-hover:bg-green-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">For Speaking Part 2, practice talking about everyday topics for 2 minutes without hesitation</span>
                            </li>
                            <li class="flex items-start bg-green-50/50 p-4 rounded-lg group hover:bg-green-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-green-600 rounded-lg p-2 mr-4 group-hover:bg-green-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Manage your time carefully in Writing - spend 20 minutes on Task 1 and 40 minutes on Task 2</span>
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
                                @if(count($ieltsGeneralListening) > 0)
                                    @foreach($ieltsGeneralListening->take(5) as $index => $resource)
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
                                    @if(count($ieltsGeneralListening) > 5)
                                        <div id="listening-more" class="hidden">
                                            @foreach($ieltsGeneralListening->slice(5) as $index => $resource)
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
                                                View all {{ count($ieltsGeneralListening) }} resources
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
                                @if(count($ieltsGeneralReading) > 0)
                                    @foreach($ieltsGeneralReading->take(5) as $index => $resource)
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
                                    @if(count($ieltsGeneralReading) > 5)
                                        <div id="reading-more" class="hidden">
                                            @foreach($ieltsGeneralReading->slice(5) as $index => $resource)
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
                                                View all {{ count($ieltsGeneralReading) }} resources
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
                                @if(count($ieltsGeneralWriting) > 0)
                                    @foreach($ieltsGeneralWriting->take(5) as $index => $resource)
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
                                    @if(count($ieltsGeneralWriting) > 5)
                                        <div id="reading-more" class="hidden">
                                            @foreach($ieltsGeneralWriting->slice(5) as $index => $resource)
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
                                @if(count($ieltsGeneralReading) > 0)
                                    @foreach($ieltsGeneralReading->take(5) as $index => $resource)
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
                                    @if(count($ieltsGeneralReading) > 5)
                                        <div id="reading-more" class="hidden">
                                            @foreach($ieltsGeneralReading->slice(5) as $index => $resource)
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
                                                View all {{ count($ieltsGeneralReading) }} resources
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
    <a href="{{ url()->previous() }}" class="inline-flex items-center text-purple-600 hover:text-purple-800 transition duration-300 group">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 group-hover:-translate-x-1 transition-transform" viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
        </svg>
        Back to Dashboard
    </a>
</div>

@endsection