<!-- resources/views/errors/419.blade.php -->
@extends('master')

@section('title', 'Session Expired | Resource Edu Hub')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-md mx-auto">
        <div class="floating mb-8">
            <svg class="mx-auto h-40 w-40 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 8v4m0 4h.01" class="animate-pulse"></path>
            </svg>
        </div>
        <h1 class="text-5xl font-extrabold mb-4 gradient-text">419</h1>
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Session Expired</h2>
        <p class="text-gray-600 mb-6">Your page session has expired due to inactivity. Please refresh and try again.</p>
        <div class="flex justify-center space-x-4">
            <a href="/" class="px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 transition-colors duration-300 shadow-md hover:shadow-lg">
                Go Home
            </a>
            <button onclick="window.location.reload()" class="px-6 py-3 border border-transparent text-base font-medium rounded-md text-purple-700 bg-purple-100 hover:bg-purple-200 transition-colors duration-300">
                Refresh Page
            </button>
        </div>
    </div>
</div>

<style>
    .gradient-text {
        background: linear-gradient(90deg, #667eea 0%, #764ba2 100%);
        -webkit-background-clip: text;
        background-clip: text;
        color: transparent;
    }
    .floating {
        animation: floating 3s ease-in-out infinite;
    }
    @keyframes floating {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-15px); }
        100% { transform: translateY(0px); }
    }
</style>
@endsection