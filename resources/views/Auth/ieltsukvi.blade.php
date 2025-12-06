@extends('Auth.layout')
@section('title', 'IELTS UKVI Preparation')

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
        <div class="container">
            <!-- Hero Section -->
            <div class="text-center mb-16">
                <div class="inline-flex items-center bg-purple-100 text-purple-800 px-4 py-2 rounded-full text-sm font-medium mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                    </svg>
                    IELTS UKVI Training Center
                </div>
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Master the IELTS UKVI Exam</h1>
                <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                    Your complete guide to achieving your UK visa and immigration requirements
                </p>
            </div>

            <!-- IELTS UKVI Overview Card -->
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden mb-16 border border-gray-100 transform transition-all hover:shadow-xl">
                <div class="bg-gradient-to-r from-purple-600 to-indigo-700 p-8 text-white">
                    <div class="flex flex-col md:flex-row md:items-center md:justify-between">
                        <div class="mb-6 md:mb-0">
                            <h2 class="text-3xl font-bold mb-3">About IELTS UKVI</h2>
                            <p class="text-purple-100 text-lg">UK Visas and Immigration approved test</p>
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
                                2h 45m
                            </span>
                        </div>
                    </div>
                </div>
                <div class="p-8">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                        <div>
                            <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                                IELTS for UKVI is a Secure English Language Test (SELT) approved by the UK Home Office for visa applications to the UK. The test has the same format, content, scoring and level of difficulty as standard IELTS.
                            </p>
                            <p class="text-gray-700 mb-6 text-lg leading-relaxed">
                                There are three types of IELTS UKVI tests: <span class="font-semibold text-purple-600">UKVI</span>, <span class="font-semibold text-purple-600">General Training</span>, and <span class="font-semibold text-purple-600">Life Skills</span>. The test you need depends on your visa requirements.
                            </p>
                            <div class="flex flex-wrap gap-4">
                                <div class="flex items-center text-gray-700">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                                    </svg>
                                    Test duration: Same as IELTS (2h 45m)
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
                            <h3 class="font-semibold text-xl text-purple-800 mb-4">Who Needs IELTS UKVI?</h3>
                            <ul class="space-y-4">
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700">Tier 4 Student Visa applicants (UKVI)</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700">Work Visa applicants (General Training)</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700">Family Visa applicants (Life Skills)</span>
                                </li>
                                <li class="flex items-start">
                                    <span class="flex-shrink-0 bg-purple-100 text-purple-600 rounded-lg p-2 mr-3">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                    <span class="text-gray-700">Those applying for UK settlement or citizenship</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Test Types Section -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">IELTS UKVI Test Types</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Choose the right test for your UK visa application</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- UKVI UKVI -->
                    <div class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-purple-600 to-purple-700 p-5 text-white">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-bold">UKVI UKVI</h3>
                                <div class="bg-purple-500/30 backdrop-blur-sm rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-sm text-gray-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>For higher education</span>
                            </div>
                            <p class="text-gray-700 mb-4">
                                For those applying to study at undergraduate or postgraduate levels at a UK university or college.
                            </p>
                            <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                <span class="font-medium text-purple-600">Required for:</span> Student Visa
                            </div>
                        </div>
                    </div>

                    <!-- General Training UKVI -->
                    <div class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-green-600 to-green-700 p-5 text-white">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-bold">General Training UKVI</h3>
                                <div class="bg-green-500/30 backdrop-blur-sm rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-sm text-gray-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-green-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>For work & migration</span>
                            </div>
                            <p class="text-gray-700 mb-4">
                                For those migrating to the UK or applying for work experience or training programs.
                            </p>
                            <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                <span class="font-medium text-green-600">Required for:</span> Work visas, Skilled Worker visas
                            </div>
                        </div>
                    </div>

                    <!-- Life Skills UKVI -->
                    <div class="group bg-white rounded-xl shadow-md overflow-hidden border border-gray-200 hover:shadow-lg transition-all duration-300 transform hover:-translate-y-2">
                        <div class="bg-gradient-to-r from-purple-600 to-purple-700 p-5 text-white">
                            <div class="flex items-center justify-between">
                                <h3 class="text-xl font-bold">Life Skills UKVI</h3>
                                <div class="bg-purple-500/30 backdrop-blur-sm rounded-full p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="p-5">
                            <div class="flex items-center text-sm text-gray-600 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2 text-purple-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                                <span>For family visas</span>
                            </div>
                            <p class="text-gray-700 mb-4">
                                For those applying for family visas, indefinite leave to remain or citizenship in the UK.
                            </p>
                            <div class="text-xs text-gray-500 bg-gray-50 p-2 rounded-lg">
                                <span class="font-medium text-purple-600">Required for:</span> Family visas, settlement, citizenship
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- UKVI Specific Requirements -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">UK Visa Requirements</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Understand the score requirements for different UK visa types</p>
                </div>
                
                <div class="bg-white rounded-xl shadow-lg overflow-hidden border border-gray-200">
                    <div class="overflow-x-auto">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead class="bg-gray-50">
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">Visa Type</th>
                                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">IELTS UKVI Type</th>
                                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">Minimum Score</th>
                                    <th scope="col" class="px-6 py-3 text-left text-sm font-medium text-gray-700 uppercase tracking-wider">CEFR Level</th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Student Visa (Higher Education)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">UKVI</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">5.5 - 7.0 (depends on institution)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">B2 - C1</td>
                                </tr>
                                <tr class="bg-purple-50 hover:bg-purple-100/50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Skilled Worker Visa</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">General Training</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">4.0 - 6.5 (depends on job)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">B1 - C1</td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Family Visa (Spouse/Partner)</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Life Skills A1 or B1</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Pass at A1 or B1 level</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">A1 - B1</td>
                                </tr>
                                <tr class="bg-purple-50 hover:bg-purple-100/50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Indefinite Leave to Remain</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Life Skills B1</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Pass at B1 level</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">B1</td>
                                </tr>
                                <tr class="hover:bg-gray-50 transition-colors">
                                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Citizenship</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Life Skills B1</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">Pass at B1 level</td>
                                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-700">B1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- Preparation Tips Section -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">IELTS UKVI Preparation Tips</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Expert strategies to help you achieve your required score</p>
                </div>
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                    <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
                        <div class="flex items-center mb-6">
                            <div class="bg-purple-100 p-3 rounded-lg mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Test Preparation Strategies</h3>
                        </div>
                        <ul class="space-y-5">
                            <li class="flex items-start bg-purple-50/50 p-4 rounded-lg group hover:bg-purple-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-purple-600 rounded-lg p-2 mr-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Take official UKVI practice tests under timed conditions</span>
                            </li>
                            <li class="flex items-start bg-purple-50/50 p-4 rounded-lg group hover:bg-purple-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-purple-600 rounded-lg p-2 mr-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Focus on UK-specific vocabulary and cultural references</span>
                            </li>
                            <li class="flex items-start bg-purple-50/50 p-4 rounded-lg group hover:bg-purple-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-purple-600 rounded-lg p-2 mr-4 group-hover:bg-purple-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Practice with authentic UKVI test materials</span>
                            </li>
                        </ul>
                    </div>
                    <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
                        <div class="flex items-center mb-6">
                            <div class="bg-indigo-100 p-3 rounded-lg mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-2xl font-bold text-gray-900">Test Day Requirements</h3>
                        </div>
                        <ul class="space-y-5">
                            <li class="flex items-start bg-indigo-50/50 p-4 rounded-lg group hover:bg-indigo-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-indigo-600 rounded-lg p-2 mr-4 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Bring the same ID document used for test registration</span>
                            </li>
                            <li class="flex items-start bg-indigo-50/50 p-4 rounded-lg group hover:bg-indigo-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-indigo-600 rounded-lg p-2 mr-4 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Arrive at least 30 minutes before your scheduled test time</span>
                            </li>
                            <li class="flex items-start bg-indigo-50/50 p-4 rounded-lg group hover:bg-indigo-100/50 transition-colors">
                                <span class="flex-shrink-0 bg-white text-indigo-600 rounded-lg p-2 mr-4 group-hover:bg-indigo-600 group-hover:text-white transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </span>
                                <span class="text-gray-700">Follow all UKVI security procedures at the test center</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Test Centers Section -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h2 class="text-3xl font-bold text-gray-900 mb-4">UKVI Test Centers</h2>
                    <p class="text-xl text-gray-600 max-w-3xl mx-auto">Find approved test centers for IELTS UKVI</p>
                </div>
                <div class="bg-white rounded-xl shadow-lg p-8 border border-gray-200">
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Where to take IELTS UKVI</h3>
                            <p class="text-gray-700 mb-6">
                                IELTS UKVI tests must be taken at an approved UKVI test center. These centers have additional security measures to meet UK Home Office requirements.
                            </p>
                            <div class="bg-purple-50 rounded-lg p-4 border border-purple-100">
                                <h4 class="font-semibold text-purple-800 mb-2">Key Features of UKVI Test Centers:</h4>
                                <ul class="space-y-2 text-gray-700">
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Enhanced identity verification procedures</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Secure test materials handling</span>
                                    </li>
                                    <li class="flex items-start">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-purple-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                        </svg>
                                        <span>Results verification with UK Home Office</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-4">Booking Your Test</h3>
                            <p class="text-gray-700 mb-6">
                                When booking your IELTS UKVI test, ensure you select the correct test type for your visa application.
                            </p>
                            <div class="space-y-4">
                                <div class="flex items-start bg-gray-50 rounded-lg p-4">
                                    <div class="bg-purple-100 p-2 rounded-lg mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Test Availability</h4>
                                        <p class="text-gray-700 text-sm">UKVI tests are available on specific dates at approved centers</p>
                                    </div>
                                </div>
                                <div class="flex items-start bg-gray-50 rounded-lg p-4">
                                    <div class="bg-purple-100 p-2 rounded-lg mr-4">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                        </svg>
                                    </div>
                                    <div>
                                        <h4 class="font-semibold text-gray-900">Documentation</h4>
                                        <p class="text-gray-700 text-sm">You'll need your passport for registration and test day</p>
                                    </div>
                                </div>
                            </div>
                        </div>
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
                                @if(count($ieltsUKVIListening) > 0)
                                    @foreach($ieltsUKVIListening->take(5) as $index => $resource)
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
                                    @if(count($ieltsUKVIListening) > 5)
                                        <div id="listening-more" class="hidden">
                                            @foreach($ieltsUKVIListening->slice(5) as $index => $resource)
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
                                                View all {{ count($ieltsUKVIListening) }} resources
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
                                @if(count($ieltsUKVIReading) > 0)
                                    @foreach($ieltsUKVIReading->take(5) as $index => $resource)
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
                                    @if(count($ieltsUKVIReading) > 5)
                                        <div id="reading-more" class="hidden">
                                            @foreach($ieltsUKVIReading->slice(5) as $index => $resource)
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
                                                View all {{ count($ieltsUKVIReading) }} resources
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
                                @if(count($ieltsUKVIWriting) > 0)
                                    @foreach($ieltsUKVIWriting->take(5) as $index => $resource)
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
                                    @if(count($ieltsUKVIWriting) > 5)
                                        <div id="reading-more" class="hidden">
                                            @foreach($ieltsUKVIWriting->slice(5) as $index => $resource)
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
                                                View all {{ count($ieltsUKVIWriting) }} resources
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
                                @if(count($ieltsUKVIReading) > 0)
                                    @foreach($ieltsUKVIReading->take(5) as $index => $resource)
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
                                    @if(count($ieltsUKVIReading) > 5)
                                        <div id="reading-more" class="hidden">
                                            @foreach($ieltsUKVIReading->slice(5) as $index => $resource)
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
                                                View all {{ count($ieltsUKVIReading) }} resources
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

@endsection