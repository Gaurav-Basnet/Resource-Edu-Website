@extends('Auth.layout')
@section('title', 'Language Proficiency Mock Test')
@section('content')
    <div class="container mx-auto px-4 lg:px-8 py-8 max-w-full">
        <!-- Test Category Selection -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Choose Your Test Category</h2>
            <div class="space-y-4"> <!-- Vertical spacing between cards -->
                <!-- IELTS Academic -->
                <div class="bg-white rounded-lg shadow-md border border-blue-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="bg-blue-600 px-4 py-3">
                        <h3 class="text-white font-semibold text-lg">IELTS Academic</h3>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600 mb-4">For students applying to study in English-speaking countries.</p>
                        <a href="\mock1"><button class="w-full bg-blue-100 hover:bg-blue-200 text-blue-800 font-medium py-2 px-4 rounded transition-colors duration-300">
                            Select Test
                        </button></a>
                    </div>
                </div>

                <!-- IELTS General -->
                <div class="bg-white rounded-lg shadow-md border border-green-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="bg-green-600 px-4 py-3">
                        <h3 class="text-white font-semibold text-lg">IELTS General</h3>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600 mb-4">For work or migration to English-speaking countries.</p>
                        <button class="w-full bg-green-100 hover:bg-green-200 text-green-800 font-medium py-2 px-4 rounded transition-colors duration-300">
                            Select Test
                        </button>
                    </div>
                </div>

                <!-- UKVI IELTS -->
                <div class="bg-white rounded-lg shadow-md border border-purple-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="bg-purple-600 px-4 py-3">
                        <h3 class="text-white font-semibold text-lg">UKVI IELTS</h3>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600 mb-4">For UK visa and immigration applications.</p>
                        <button class="w-full bg-purple-100 hover:bg-purple-200 text-purple-800 font-medium py-2 px-4 rounded transition-colors duration-300">
                            Select Test
                        </button>
                    </div>
                </div>

                <!-- A1/B1 Life Skills -->
                <div class="bg-white rounded-lg shadow-md border border-yellow-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="bg-yellow-600 px-4 py-3">
                        <h3 class="text-white font-semibold text-lg">A1/B1 Life Skills</h3>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600 mb-4">For UK visa applications testing speaking and listening.</p>
                        <button class="w-full bg-yellow-100 hover:bg-yellow-200 text-yellow-800 font-medium py-2 px-4 rounded transition-colors duration-300">
                            Select Test
                        </button>
                    </div>
                </div>

                <!-- General Knowledge -->
                <div class="bg-white rounded-lg shadow-md border border-red-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="bg-red-600 px-4 py-3">
                        <h3 class="text-white font-semibold text-lg">General Knowledge</h3>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600 mb-4">Test your general knowledge across various topics.</p>
                        <button class="w-full bg-red-100 hover:bg-red-200 text-red-800 font-medium py-2 px-4 rounded transition-colors duration-300">
                            Select Test
                        </button>
                    </div>
                </div>

                <!-- English Language -->
                <div class="bg-white rounded-lg shadow-md border border-indigo-200 overflow-hidden hover:shadow-lg transition-shadow duration-300">
                    <div class="bg-indigo-600 px-4 py-3">
                        <h3 class="text-white font-semibold text-lg">English Language</h3>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-600 mb-4">General English language proficiency test.</p>
                        <button class="w-full bg-indigo-100 hover:bg-indigo-200 text-indigo-800 font-medium py-2 px-4 rounded transition-colors duration-300">
                            Select Test
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection