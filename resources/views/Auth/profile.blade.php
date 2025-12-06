@extends('Auth.layout')
@section('title', 'Study in Germany')

@section('content')
    
    <div class="min-h-screen bg-gray-50 py-8 px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto">
            <!-- Profile Header -->
            <div class="bg-white shadow rounded-lg overflow-hidden">
                <!-- Cover Photo -->
                <div class="h-32 bg-gradient-to-r from-purple-500 to-indigo-600"></div>

                <!-- Profile Info -->
                <div class="px-6 py-4 relative">
                    <!-- Profile Picture -->
                    <div class="absolute -top-16 left-6 border-4 border-white rounded-full overflow-hidden">
                        <img class="h-32 w-32 object-cover"
                            src="{{ Auth::user()->profile_photo_url ?? 'https://ui-avatars.com/api/?name=' . urlencode(Auth::user()->name) . '&color=7F9CF5&background=EBF4FF' }}"
                            alt="{{ Auth::user()->name }}">
                    </div>

                    <!-- User Details -->
                    <div class="ml-40 pt-2">
                        <h1 class="text-2xl font-bold text-gray-800">{{ Auth::user()->name }}</h1>
                        <p class="text-gray-600">{{ Auth::user()->email }}</p>
                        <p class="text-gray-500 mt-1 flex items-center">
                            <svg class="inline-block h-4 w-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                                    clip-rule="evenodd" />
                            </svg>
                            @if(Auth::user()->country)
                                {{ Auth::user()->country }}
                            @else
                                Not specified
                            @endif
                        </p>
                        <div class="flex items-center mt-2 space-x-4">
                            <span class="text-sm bg-purple-100 text-purple-800 px-2 py-1 rounded-full">
                                Member since {{ Auth::user()->created_at->format('M Y') }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile Details Sections -->
            <div class="mt-6 grid gap-6 md:grid-cols-2">
                <!-- Personal Information -->
                <div class="bg-white shadow rounded-lg p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <svg class="h-5 w-5 text-purple-600 mr-2" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z"
                                clip-rule="evenodd" />
                        </svg>
                        Personal Information
                    </h2>
                    <div class="space-y-3">
                        <div>
                            <p class="text-sm text-gray-500">Full Name</p>
                            <p class="text-gray-800">{{ Auth::user()->name }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Email</p>
                            <p class="text-gray-800">{{ Auth::user()->email }}</p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Phone</p>
                            <p class="text-gray-800">
                                @if(Auth::user()->phone)
                                    {{ Auth::user()->phone }}
                                @else
                                    Not provided
                                @endif
                            </p>
                        </div>
                        <div>
                            <p class="text-sm text-gray-500">Account Created</p>
                            <p class="text-gray-800">{{ Auth::user()->created_at->format('F j, Y') }}</p>
                        </div>
                    </div>
                </div>

                <!-- Account & Security -->
                <div class="bg-white shadow rounded-lg p-6">
                    <h2 class="text-lg font-semibold text-gray-800 mb-4 flex items-center">
                        <svg class="h-5 w-5 text-purple-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                        </svg>
                        Account & Security
                    </h2>
                    <div class="space-y-3">

                    </div>

                    <!-- Password Change Form (Initially Hidden) -->
                    <div id="passwordChangeForm" class=" mt-6">
                        <h3 class="text-md font-medium text-gray-800 mb-3">Change Password</h3>

                        @if(session('success'))
                            <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                                {{ session('success') }}
                            </div>
                        @endif

                        <form method="POST" action="{{ route('password.change') }}" id="passwordChangeForm">
                            @csrf

                            <div class="mb-4">
                                <label for="current_password" class="block text-sm font-medium text-gray-700 mb-1">
                                    Current Password
                                </label>
                                <input id="current_password" name="current_password" type="password" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-purple-500 focus:border-purple-500"
                                    oninput="validateCurrentPassword(this)">
                                <p id="current_password_error" class="mt-1 text-sm text-red-600 hidden"></p>
                                @error('current_password')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="new_password" class="block text-sm font-medium text-gray-700 mb-1">
                                    New Password
                                </label>
                                <input id="new_password" name="new_password" type="password" required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-purple-500 focus:border-purple-500"
                                    oninput="validateNewPassword(this)">
                                <div id="password-strength" class="mt-1 hidden">
                                    <div class="flex items-center">
                                        <div id="strength-meter" class="h-1 w-24 bg-gray-200 rounded-full mr-2">
                                            <div id="strength-meter-fill" class="h-full rounded-full"></div>
                                        </div>
                                        <span id="strength-text" class="text-xs"></span>
                                    </div>
                                </div>
                                <p id="new_password_error" class="mt-1 text-sm text-red-600 hidden"></p>
                                @error('new_password')
                                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="new_password_confirmation" class="block text-sm font-medium text-gray-700 mb-1">
                                    Confirm New Password
                                </label>
                                <input id="new_password_confirmation" name="new_password_confirmation" type="password"
                                    required
                                    class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-purple-500 focus:border-purple-500"
                                    oninput="validatePasswordConfirmation(this)">
                                <p id="new_password_confirmation_error" class="mt-1 text-sm text-red-600 hidden"></p>
                            </div>

                            <div class="flex items-center justify-end space-x-3">
                                <button type="button" id="cancelPasswordChange"
                                    class="px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                    Cancel
                                </button>
                                <button type="submit" id="submitButton"
                                    class="px-4 py-2 border border-transparent text-sm font-medium rounded-md text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 disabled:opacity-50 disabled:cursor-not-allowed"
                                    disabled>
                                    Change Password
                                </button>
                            </div>
                        </form>
                    </div>

                    <!-- Toggle Password Change Form Button -->
                    <!-- <button id="showPasswordChange"
                        class="mt-6 w-full text-center px-4 py-2 border border-purple-600 text-sm font-medium rounded-md text-purple-600 bg-white hover:bg-purple-50 transition-colors duration-300">
                        Change Password
                    </button> -->
                </div>
            </div>
        </div>
    </div>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            // Initialize form validation
            validateForm();
            const showBtn = document.getElementById('showPasswordChange');
            const cancelBtn = document.getElementById('cancelPasswordChange');
            const form = document.getElementById('passwordChangeForm');

            showBtn.addEventListener('click', function () {
                form.classList.remove('hidden');
                this.classList.add('hidden');
            });

            cancelBtn.addEventListener('click', function () {
                form.classList.add('hidden');
                showBtn.classList.remove('hidden');
            });
        });

        function validateForm() {
            const currentPassword = document.getElementById('current_password').value;
            const newPassword = document.getElementById('new_password').value;
            const confirmPassword = document.getElementById('new_password_confirmation').value;
            const submitButton = document.getElementById('submitButton');

            // Basic validation - all fields filled and passwords match
            const isValid = currentPassword.length > 0 &&
                newPassword.length >= 8 &&
                confirmPassword === newPassword;

            submitButton.disabled = !isValid;
            return isValid;
        }

        function validateCurrentPassword(input) {
            const errorElement = document.getElementById('current_password_error');

            if (input.value.length === 0) {
                showError(errorElement, 'Current password is required');
            } else {
                hideError(errorElement);
            }

            validateForm();
        }

        function validateNewPassword(input) {
            const errorElement = document.getElementById('new_password_error');
            const strengthContainer = document.getElementById('password-strength');
            const strengthMeter = document.getElementById('strength-meter-fill');
            const strengthText = document.getElementById('strength-text');

            strengthContainer.classList.remove('hidden');

            if (input.value.length === 0) {
                showError(errorElement, 'New password is required');
                strengthContainer.classList.add('hidden');
            } else if (input.value.length < 8) {
                showError(errorElement, 'Password must be at least 8 characters');
                updateStrengthMeter(20, 'Weak', 'red');
            } else {
                hideError(errorElement);

                // Calculate password strength
                let strength = 0;
                if (input.value.length >= 8) strength += 20;
                if (input.value.match(/[A-Z]/)) strength += 20;
                if (input.value.match(/[0-9]/)) strength += 20;
                if (input.value.match(/[^A-Za-z0-9]/)) strength += 20;
                if (input.value.length >= 12) strength += 20;

                if (strength < 40) {
                    updateStrengthMeter(strength, 'Weak', 'red');
                } else if (strength < 70) {
                    updateStrengthMeter(strength, 'Medium', 'orange');
                } else {
                    updateStrengthMeter(strength, 'Strong', 'green');
                }
            }

            validateForm();
        }

        function validatePasswordConfirmation(input) {
            const errorElement = document.getElementById('new_password_confirmation_error');
            const newPassword = document.getElementById('new_password').value;

            if (input.value !== newPassword) {
                showError(errorElement, 'Passwords do not match');
            } else {
                hideError(errorElement);
            }

            validateForm();
        }

        function updateStrengthMeter(percent, text, color) {
            const strengthMeter = document.getElementById('strength-meter-fill');
            const strengthText = document.getElementById('strength-text');

            strengthMeter.style.width = percent + '%';
            strengthMeter.style.backgroundColor = color;
            strengthText.textContent = text;
            strengthText.className = 'text-xs text-' + color + '-600';
        }

        function showError(element, message) {
            element.textContent = message;
            element.classList.remove('hidden');
        }

        function hideError(element) {
            element.textContent = '';
            element.classList.add('hidden');
        }

        // Optional: Add event listener for form submission
        document.getElementById('passwordChangeForm').addEventListener('submit', function (e) {
            if (!validateForm()) {
                e.preventDefault();
                // Highlight all errors if form is submitted with invalid data
                validateCurrentPassword(document.getElementById('current_password'));
                validateNewPassword(document.getElementById('new_password'));
                validatePasswordConfirmation(document.getElementById('new_password_confirmation'));
            }
        });
    </script>

    <style>
        /* Add these styles to your CSS */
        #strength-meter {
            background-color: #e5e7eb;
            border-radius: 9999px;
            height: 0.25rem;
            width: 6rem;
        }

        #strength-meter-fill {
            border-radius: 9999px;
            height: 100%;
            transition: width 0.3s ease, background-color 0.3s ease;
        }
    </style>
@endsection