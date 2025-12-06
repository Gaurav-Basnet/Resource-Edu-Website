@extends('Auth.layout')
@section('title', 'IELTS Life Skills A1/B1 Preparation')

@section('content')

<div class="bg-gradient-to-b from-purple-50 to-white px-6 lg:px-8">
    <!-- Navigation -->
    <div class="py-3">
        <a href="{{ url()->previous() }}" class="inline-flex items-center text-purple-600 hover:text-purple-800 transition duration-300 group">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-1 group-hover:-translate-x-1 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd" />
            </svg>
            Back to Dashboard
        </a>
    </div>

    <div class="min-h-screen py-8">
        <div class="w-full">
            <!-- Hero Section -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-purple-100 text-purple-800 px-4 py-2 rounded-full text-sm font-medium mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    IELTS Life Skills Preparation Center
                </div>
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Master IELTS Life Skills A1 & B1</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Your complete guide to achieving success in the UK visa speaking and listening tests
                </p>
            </div>

            <!-- IELTS Life Skills Overview Card -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-16 border border-gray-100 transform transition-all hover:shadow-xl">
                <div class="bg-gradient-to-r from-purple-600 to-indigo-700 p-8 text-white">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="mb-6 md:mb-0">
                            <h2 class="text-3xl font-bold mb-3">About IELTS Life Skills</h2>
                            <p class="text-purple-100 text-lg">UK Visas and Immigration approved tests</p>
                        </div>
                        <div class="flex space-x-3">
                            <span class="inline-flex items-center bg-purple-500/20 backdrop-blur-sm rounded-full px-4 py-2 text-sm font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                                UKVI Approved
                            </span>
                            <span class="inline-flex items-center bg-purple-500/20 backdrop-blur-sm rounded-full px-4 py-2 text-sm font-semibold">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                16-22 minutes
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                        <div>
                            <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                                IELTS Life Skills is for those who need to prove their English speaking and listening skills at CEFR Levels A1 or B1 for UK visa requirements. These are <span class="font-semibold text-purple-600">SELT (Secure English Language Tests)</span> approved by UK Visas and Immigration.
                            </p>
                            <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                                The tests focus on <span class="font-semibold text-purple-600">everyday communication</span> and assess how well you can <span class="font-semibold text-purple-600">listen and respond</span>, <span class="font-semibold text-purple-600">make your meaning clear</span>, and <span class="font-semibold text-purple-600">talk with other people</span> in practical situations.
                            </p>
                            <div class="flex flex-wrap gap-4">
                                <div class="flex items-center text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    A1: 16-18 minutes | B1: 22 minutes
                                </div>
                                <div class="flex items-center text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd" />
                                    </svg>
                                    Results in 7 days
                                </div>
                            </div>
                        </div>
                        <div class="bg-purple-50 rounded-xl p-6 border border-purple-100">
                            <h3 class="font-semibold text-xl text-purple-800 mb-4">Who Needs Life Skills A1/B1?</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700"><strong>A1:</strong> Family visa applicants (spouse/partner)</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700"><strong>A1:</strong> Those applying for initial UK family visas</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700"><strong>B1:</strong> Those applying for indefinite leave to remain (settlement)</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700"><strong>B1:</strong> Those applying for British citizenship</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Test Levels Section -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">IELTS Life Skills Levels</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Understand the A1 and B1 levels and their requirements</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- A1 Card -->
                    <div class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-purple-600 to-purple-700 p-5 text-white">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-bold">Life Skills A1</h3>
                                <div class="bg-purple-500/30 backdrop-blur-sm rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-sm text-gray-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>16-18 minutes</span>
                            </div>
                            <p class="text-gray-700 mb-4">
                                For family, spouse or partner visas. You can understand and use familiar everyday expressions and very basic phrases.
                            </p>
                            <div class="mb-4">
                                <h4 class="font-medium text-purple-600 mb-2">Test Content:</h4>
                                <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                                    <li>Giving personal information</li>
                                    <li>Asking and answering simple questions</li>
                                    <li>Understanding simple directions</li>
                                    <li>Discussing familiar topics</li>
                                </ul>
                            </div>
                            <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                <span class="font-medium text-purple-600">CEFR Level:</span> Basic user - Can understand and use familiar everyday expressions
                            </div>
                        </div>
                    </div>

                    <!-- B1 Card -->
                    <div class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-indigo-600 to-indigo-700 p-5 text-white">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-bold">Life Skills B1</h3>
                                <div class="bg-indigo-500/30 backdrop-blur-sm rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-sm text-gray-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>22 minutes</span>
                            </div>
                            <p class="text-gray-700 mb-4">
                                For settlement or citizenship. You can understand the main points of clear standard speech on familiar matters.
                            </p>
                            <div class="mb-4">
                                <h4 class="font-medium text-indigo-600 mb-2">Test Content:</h4>
                                <ul class="list-disc list-inside text-sm text-gray-600 space-y-1">
                                    <li>Expressing opinions and attitudes</li>
                                    <li>Making plans and suggestions</li>
                                    <li>Understanding straightforward instructions</li>
                                    <li>Discussing familiar topics in depth</li>
                                </ul>
                            </div>
                            <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                <span class="font-medium text-indigo-600">CEFR Level:</span> Independent user - Can deal with most situations likely to arise
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Test Format Section -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Test Format</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Understand what happens during the IELTS Life Skills test</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Part 1 -->
                        <div class="bg-purple-50 rounded-lg p-6 border border-purple-100">
                            <div class="flex items-center mb-4">
                                <div class="bg-purple-600 text-white rounded-full h-8 w-8 flex items-center justify-center mr-3">1</div>
                                <h3 class="text-lg font-semibold text-gray-900">Introduction</h3>
                            </div>
                            <p class="text-gray-700">
                                You'll answer questions about yourself and give some basic personal information. The examiner will ask you to spell your name.
                            </p>
                            <div class="mt-3 text-sm text-purple-600 font-medium">
                                <span class="bg-purple-100 px-2 py-1 rounded">Both A1 & B1</span>
                            </div>
                        </div>
                        
                        <!-- Part 2 -->
                        <div class="bg-purple-50 rounded-lg p-6 border border-purple-100">
                            <div class="flex items-center mb-4">
                                <div class="bg-purple-600 text-white rounded-full h-8 w-8 flex items-center justify-center mr-3">2</div>
                                <h3 class="text-lg font-semibold text-gray-900">Listening & Responding</h3>
                            </div>
                            <p class="text-gray-700">
                                You'll listen to a CD recording and answer questions about what you hear. At B1 level, the tasks are more complex.
                            </p>
                            <div class="mt-3 text-sm text-purple-600 font-medium">
                                <span class="bg-purple-100 px-2 py-1 rounded">Both A1 & B1</span>
                            </div>
                        </div>
                        
                        <!-- Part 3 -->
                        <div class="bg-purple-50 rounded-lg p-6 border border-purple-100">
                            <div class="flex items-center mb-4">
                                <div class="bg-purple-600 text-white rounded-full h-8 w-8 flex items-center justify-center mr-3">3</div>
                                <h3 class="text-lg font-semibold text-gray-900">Discussion</h3>
                            </div>
                            <p class="text-gray-700">
                                You'll have a discussion with the examiner. At B1 level, you'll need to express opinions and justify them.
                            </p>
                            <div class="mt-3 text-sm text-purple-600 font-medium">
                                <span class="bg-purple-100 px-2 py-1 rounded">Both A1 & B1</span>
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-8 bg-blue-50 rounded-lg p-6 border border-blue-100">
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Key Differences Between A1 and B1</h3>
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <h4 class="font-medium text-blue-700 mb-2">A1 Level</h4>
                                <ul class="space-y-3 text-gray-700">
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Shorter test duration (16-18 minutes)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Basic personal information and familiar topics</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Simple questions and answers</span>
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <h4 class="font-medium text-blue-700 mb-2">B1 Level</h4>
                                <ul class="space-y-3 text-gray-700">
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Longer test duration (22 minutes)</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>More complex topics and discussions</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Need to express opinions and justify them</span>
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
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">Preparation Tips</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Strategies to help you pass your IELTS Life Skills test</p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
                        <div class="flex items-center mb-6">
                            <div class="bg-purple-100 p-3 rounded-lg mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Speaking Practice</h3>
                        </div>
                        <ul class="space-y-5">
                            <li class="flex items-start bg-purple-50/50 p-4 rounded-lg group hover:bg-purple-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-purple-600 rounded-lg p-2 mr-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700"><strong>A1:</strong> Practice everyday conversations about personal information, family, shopping, work, etc.</span>
                            </li>
                            <li class="flex items-start bg-purple-50/50 p-4 rounded-lg group hover:bg-purple-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-purple-600 rounded-lg p-2 mr-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700"><strong>B1:</strong> Practice expressing opinions and justifying them on familiar topics</span>
                            </li>
                            <li class="flex items-start bg-purple-50/50 p-4 rounded-lg group hover:bg-purple-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-purple-600 rounded-lg p-2 mr-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Practice spelling your name and other personal information aloud</span>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
                        <div class="flex items-center mb-6">
                            <div class="bg-indigo-100 p-3 rounded-lg mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.536 8.464a5 5 0 010 7.072m2.828-9.9a9 9 0 010 12.728M5.586 15.536a5 5 0 001.414 1.414m2.828-9.9a9 9 0 012.728-2.728" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Listening Practice</h3>
                        </div>
                        <ul class="space-y-5">
                            <li class="flex items-start bg-indigo-50/50 p-4 rounded-lg group hover:bg-indigo-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-indigo-600 rounded-lg p-2 mr-4 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700"><strong>A1:</strong> Listen to simple English conversations and try to understand the main points</span>
                            </li>
                            <li class="flex items-start bg-indigo-50/50 p-4 rounded-lg group hover:bg-indigo-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-indigo-600 rounded-lg p-2 mr-4 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700"><strong>B1:</strong> Practice listening for specific information in longer conversations</span>
                            </li>
                            <li class="flex items-start bg-indigo-50/50 p-4 rounded-lg group hover:bg-indigo-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-indigo-600 rounded-lg p-2 mr-4 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Watch simple English videos with subtitles to connect spoken and written words</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Test Day Advice -->
            <div class="mb-16 bg-white rounded-xl shadow-lg p-8 border border-gray-200">
                <div class="flex items-center mb-6">
                    <div class="bg-yellow-100 p-3 rounded-lg mr-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                        </svg>
                    </div>
                    <h2 class="text-2xl font-bold text-gray-900">Test Day Advice</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">Before the Test</h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Get a good night's sleep before the test</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Arrive at least 30 minutes before your test time</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Bring the same ID you used when booking the test</span>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-xl font-semibold text-gray-900 mb-3">During the Test</h3>
                        <ul class="space-y-3 text-gray-700">
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Speak clearly and at a natural pace</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Listen carefully to the examiner's questions</span>
                            </li>
                            <li class="flex items-start">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500 mr-2 mt-0.5" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                </svg>
                                <span>Don't worry about making small mistakes - focus on communication</span>
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
                                @if(count($ieltsa1a2Listening) > 0)
                                    @foreach($ieltsa1a2Listening->take(5) as $index => $resource)
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
                                    @if(count($ieltsa1a2Listening) > 5)
                                        <div id="listening-more" class="hidden">
                                            @foreach($ieltsa1a2Listening->slice(5) as $index => $resource)
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
                                                View all {{ count($ieltsa1a2Listening) }} resources
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
                                @if(count($ieltsa1a2Reading) > 0)
                                    @foreach($ieltsa1a2Reading->take(5) as $index => $resource)
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
                                    @if(count($ieltsa1a2Reading) > 5)
                                        <div id="reading-more" class="hidden">
                                            @foreach($ieltsa1a2Reading->slice(5) as $index => $resource)
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
                                                View all {{ count($ieltsa1a2Reading) }} resources
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