@extends('Admin.dashboard')
@section('title', 'Dashboard')

@section('content')
<div class="container mx-auto px-4 py-6">
    <div class="flex flex-col space-y-6">
        <!-- Welcome Header -->
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6">
            <h1 class="text-2xl font-bold text-gray-800">Welcome back, {{ $admin->name }}</h1>
            <p class="text-gray-600 mt-2">Let's Checkout What's Happening</p>
        </div>

  
    </div>
</div>
@endsection