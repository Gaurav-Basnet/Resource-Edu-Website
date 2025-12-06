<!-- resources/views/errors/500.blade.php -->
@extends('master')

@section('title', 'Server Error | Resource Edu Hub')

@section('content')
<div class="min-h-screen bg-gradient-to-br from-gray-50 to-gray-100 flex items-center justify-center py-12 px-4 sm:px-6 lg:px-8">
    <div class="text-center max-w-md mx-auto">
        <div class="floating mb-8">
            <svg class="mx-auto h-40 w-40 text-red-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
            </svg>
        </div>
        <h1 class="text-5xl font-extrabold mb-4 gradient-text">500</h1>
        <h2 class="text-2xl font-bold text-gray-800 mb-2">Server Error</h2>
        <p class="text-gray-600 mb-6">Something went wrong on our end. We're working to fix it.</p>
        <div class="flex justify-center space-x-4">
            <a href="/" class="px-6 py-3 border border-transparent text-base font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 transition-colors duration-300 shadow-md hover:shadow-lg">
                Go Home
            </a>
            <a href="{{ 'contact'}}#contact" class="px-6 py-3 border border-transparent text-base font-medium rounded-md text-purple-700 bg-purple-100 hover:bg-purple-200 transition-colors duration-300">
                Contact Support
            </a>
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