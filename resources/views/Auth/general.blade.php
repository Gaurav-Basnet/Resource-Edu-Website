@extends('Auth.layout')
@section('title', 'General Knowledge Mastery')

@section('content')

    <div class="bg-gradient-to-b from-purple-50 to-white px-6 lg:px-8">
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
                                d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                        </svg>
                        Knowledge Hub
                    </div>
                    <h1 class="text-4xl font-bold text-gray-900 mb-4">Master General Knowledge</h1>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                        Your comprehensive guide to becoming a well-informed global citizen
                    </p>
                </div>

                <!-- Knowledge Overview Card -->
                <div
                    class="bg-white rounded-2xl shadow-lg overflow-hidden mb-16 border border-gray-100 transform transition-all hover:shadow-xl">
                    <div class="bg-gradient-to-r from-purple-600 to-purple-700 p-8 text-white">
                        <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                            <div class="mb-6 md:mb-0">
                                <h2 class="text-3xl font-bold mb-3">Why General Knowledge Matters</h2>
                                <p class="text-purple-100 text-lg">The foundation of intellectual growth and social engagement
                                </p>
                            </div>
                            <div class="flex space-x-3">
                                <span
                                    class="inline-flex items-center bg-purple-500/20 backdrop-blur-sm rounded-full px-4 py-2 text-sm font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                    10+ Categories
                                </span>
                                <span
                                    class="inline-flex items-center bg-purple-500/20 backdrop-blur-sm rounded-full px-4 py-2 text-sm font-semibold">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                    </svg>
                                    Daily Updates
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="p-8">
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                            <div>
                                <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                                    General knowledge encompasses facts, ideas, and information about the world that every
                                    educated person should know. It forms the basis for critical thinking, informed
                                    decision-making, and meaningful conversations.
                                </p>
                                <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                                    Our knowledge hub provides <span class="font-semibold text-purple-600">curated
                                        information</span>, <span class="font-semibold text-purple-600">interesting
                                        facts</span>, and <span class="font-semibold text-purple-600">essential
                                        knowledge</span> across various domains to satisfy your curiosity and broaden your
                                    understanding.
                                </p>
                                <div class="flex flex-wrap gap-4">
                                    <div class="flex items-center text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Verified information from reliable sources
                                    </div>
                                    <div class="flex items-center text-gray-700">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M12 1.586l-4 4v12.828l4-4V1.586zM3.707 3.293A1 1 0 002 4v10a1 1 0 00.293.707L6 18.414V5.586L3.707 3.293zM17.707 5.293L14 1.586v12.828l2.293 2.293A1 1 0 0018 16V6a1 1 0 00-.293-.707z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        Multiple learning formats
                                    </div>
                                </div>
                            </div>
                            <div class="bg-purple-50 rounded-xl p-6 border border-purple-100">
                                <h3 class="font-semibold text-xl text-purple-800 mb-4">Benefits of General Knowledge</h3>
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
                                        <span class="text-gray-700">Enhances critical thinking and problem-solving
                                            skills</span>
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
                                        <span class="text-gray-700">Improves communication and social interactions</span>
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
                                        <span class="text-gray-700">Boosts confidence in academic and professional
                                            settings</span>
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
                                        <span class="text-gray-700">Essential for competitive exams and interviews</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Knowledge Categories Section -->
                <div class="mb-16">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Knowledge Domains</h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Explore diverse topics to become a well-rounded
                            individual</p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <!-- Science & Technology -->
                        <div
                            class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                            <div class="bg-gradient-to-r from-purple-600 to-purple-700 p-5 text-white">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-xl font-bold">Science & Tech</h3>
                                    <div class="bg-purple-500/30 backdrop-blur-sm rounded-full p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
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
                                    <span>Updated weekly</span>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    Discover breakthroughs in physics, chemistry, biology, and emerging technologies shaping
                                    our future.
                                </p>
                                <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                    <span class="font-medium text-purple-600">Key Topics:</span> Quantum computing, AI, Space
                                    exploration, Genetics
                                </div>
                            </div>
                        </div>

                        <!-- History & Culture -->
                        <div
                            class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                            <div class="bg-gradient-to-r from-amber-600 to-amber-700 p-5 text-white">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-xl font-bold">History & Culture</h3>
                                    <div class="bg-amber-500/30 backdrop-blur-sm rounded-full p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5">
                                <div class="flex items-center text-sm text-gray-600 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-amber-500" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Updated weekly</span>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    Explore ancient civilizations, pivotal historical events, and rich cultural traditions
                                    worldwide.
                                </p>
                                <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                    <span class="font-medium text-amber-600">Key Topics:</span> World wars, Ancient empires,
                                    Cultural heritage
                                </div>
                            </div>
                        </div>

                        <!-- Geography & Environment -->
                        <div
                            class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                            <div class="bg-gradient-to-r from-emerald-600 to-emerald-700 p-5 text-white">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-xl font-bold">Geography & Environment</h3>
                                    <div class="bg-emerald-500/30 backdrop-blur-sm rounded-full p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5">
                                <div class="flex items-center text-sm text-gray-600 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-emerald-500"
                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Updated weekly</span>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    Learn about countries, physical features, climate patterns, and pressing environmental
                                    issues.
                                </p>
                                <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                    <span class="font-medium text-emerald-600">Key Topics:</span> Climate change, Natural
                                    wonders, Political geography
                                </div>
                            </div>
                        </div>

                        <!-- Arts & Literature -->
                        <div
                            class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                            <div class="bg-gradient-to-r from-violet-600 to-violet-700 p-5 text-white">
                                <div class="flex items-center justify-between">
                                    <h3 class="text-xl font-bold">Arts & Literature</h3>
                                    <div class="bg-violet-500/30 backdrop-blur-sm rounded-full p-2">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                            viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                            <div class="p-5">
                                <div class="flex items-center text-sm text-gray-600 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-violet-500" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>Updated weekly</span>
                                </div>
                                <p class="text-gray-700 mb-4">
                                    Explore masterpieces of painting, sculpture, architecture, music, and significant
                                    literary works.
                                </p>
                                <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                    <span class="font-medium text-violet-600">Key Topics:</span> Renaissance art, Classical
                                    music, Nobel literature
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Learning Pathways Section -->
                <div class="mb-16">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Structured Learning Pathways</h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Systematic approaches to build your knowledge
                            base</p>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <!-- Beginner Pathway -->
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 group hover:shadow-xl transition-all">
                            <div class="bg-gradient-to-r from-purple-500 to-purple-600 p-6 text-white">
                                <h3 class="text-2xl font-bold">Foundation Builder</h3>
                                <p class="text-purple-100">Beginner Level</p>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-sm text-gray-600 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>3-6 month journey</span>
                                </div>
                                <ul class="space-y-3 mb-6">
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Basic world geography and countries</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Major historical events timeline</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Fundamental scientific concepts</span>
                                    </li>
                                </ul>
                                <button
                                    class="w-full bg-purple-50 text-purple-600 hover:bg-purple-100 font-medium py-2 px-4 rounded-lg transition-colors">
                                    Start Foundation Path
                                </button>
                            </div>
                        </div>

                        <!-- Intermediate Pathway -->
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 group hover:shadow-xl transition-all">
                            <div class="bg-gradient-to-r from-purple-500 to-purple-600 p-6 text-white">
                                <h3 class="text-2xl font-bold">Knowledge Expander</h3>
                                <p class="text-purple-100">Intermediate Level</p>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-sm text-gray-600 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>6-12 month journey</span>
                                </div>
                                <ul class="space-y-3 mb-6">
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Deeper dive into world history</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Advanced scientific principles</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Cultural and artistic movements</span>
                                    </li>
                                </ul>
                                <button
                                    class="w-full bg-purple-50 text-purple-600 hover:bg-purple-100 font-medium py-2 px-4 rounded-lg transition-colors">
                                    Start Expansion Path
                                </button>
                            </div>
                        </div>

                        <!-- Advanced Pathway -->
                        <div
                            class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200 group hover:shadow-xl transition-all">
                            <div class="bg-gradient-to-r from-purple-500 to-purple-600 p-6 text-white">
                                <h3 class="text-2xl font-bold">Mastery Achiever</h3>
                                <p class="text-purple-100">Advanced Level</p>
                            </div>
                            <div class="p-6">
                                <div class="flex items-center text-sm text-gray-600 mb-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                    <span>1-2 year journey</span>
                                </div>
                                <ul class="space-y-3 mb-6">
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Specialized historical analysis</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>Cutting-edge scientific research</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="h-5 w-5 text-purple-500 mr-2 mt-0.5 flex-shrink-0" viewBox="0 0 20 20"
                                            fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                        <span>In-depth cultural studies</span>
                                    </li>
                                </ul>
                                <button
                                    class="w-full bg-purple-50 text-purple-600 hover:bg-purple-100 font-medium py-2 px-4 rounded-lg transition-colors">
                                    Start Mastery Path
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Learning Techniques Section -->
                <div class="mb-16">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Effective Learning Techniques</h2>
                        <p class="text-xl text-gray-600 max-w-3xl mx-auto">Strategies to enhance your knowledge acquisition
                            and retention</p>
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
                                <h3 class="text-2xl font-bold text-gray-900">Knowledge Acquisition</h3>
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
                                    <span class="text-gray-700"><strong>Active Reading:</strong> Annotate, summarize, and
                                        question what you read</span>
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
                                    <span class="text-gray-700"><strong>Multimedia Learning:</strong> Combine books, videos,
                                        podcasts, and infographics</span>
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
                                    <span class="text-gray-700"><strong>Contextual Learning:</strong> Connect new
                                        information to what you already know</span>
                                </li>
                            </ul>
                        </div>
                        <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
                            <div class="flex items-center mb-6">
                                <div class="bg-purple-100 p-3 rounded-lg mr-4">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                                <h3 class="text-2xl font-bold text-gray-900">Retention Strategies</h3>
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
                                    <span class="text-gray-700"><strong>Spaced Repetition:</strong> Review material at
                                        increasing intervals</span>
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
                                    <span class="text-gray-700"><strong>Active Recall:</strong> Test yourself regularly
                                        without looking at notes</span>
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
                                    <span class="text-gray-700"><strong>Teaching Others:</strong> Explain concepts to
                                        friends or write about them</span>
                                </li>
                            </ul>
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
     <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                                <h3 class="text-xl font-bold text-gray-900">General Lifeskills</h3>
                            </div>
                            <ul class="space-y-3" id="listening-resources">
                                @if(count($general) > 0)
                                    @foreach($general->take(5) as $index => $resource)
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
                                    @if(count($general) > 5)
                                        <div id="listening-more" class="hidden">
                                            @foreach($general->slice(5) as $index => $resource)
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
                                                View all {{ count($general) }} resources
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