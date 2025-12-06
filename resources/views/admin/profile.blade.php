@extends('Admin.dashboard')
@section('title', 'Profile')

@section('content')
    <div class="px-4 md:px-6 py-6">
        <!-- Profile Header -->
        <div class="flex flex-col md:flex-row items-start md:items-center justify-between mb-8">
            <div>
                <h1 class="text-2xl md:text-3xl font-bold text-gray-800">Admin Profile</h1>
                <p class="text-gray-600">Manage your account settings and preferences</p>
            </div>
            <div class="mt-4 md:mt-0">

            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
            <!-- Profile Card -->
            <div class="lg:col-span-1">
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="bg-gradient-to-r from-purple-600 to-blue-500 h-24"></div>
                    <div class="px-6 pb-6 relative">
                        <div class="flex justify-center -mt-12 mb-4">
                            <div class="relative">
                                <img class="h-24 w-24 rounded-full border-4 border-white object-cover"
                                    src="{{ $admin->profile_photo ? asset('storage/' . $admin->profile_photo) : 'https://ui-avatars.com/api/?name=' . urlencode($admin->name) }}"
                                    alt="Profile photo">

                                <input type="file" id="profilePhoto" name="profile_photo" class="hidden" accept="image/*">
                            </div>
                        </div>
                        <div class="text-center">
                            <h2 class="text-xl font-bold text-gray-800">{{ $admin->name }}</h2>
                            <p class="text-gray-600">{{ $admin->email }}</p>
                            <p class="text-sm text-gray-500 mt-2">Administrator</p>
                        </div>
                        <div class="mt-6 border-t border-gray-100 pt-4">
                            <h3 class="text-sm font-medium text-gray-500 mb-3">ACCOUNT DETAILS</h3>
                            <div class="space-y-2">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-600">Joined</span>
                                    <span class="font-medium">{{ $admin->created_at->format('M d, Y') }}</span>
                                </div>
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-600">Last Updated</span>
                                    <span class="font-medium">{{ $admin->updated_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile Form -->
            <div class="lg:col-span-2">
                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
                    <div class="p-5 border-b border-gray-100">
                        <h2 class="text-xl font-semibold text-gray-800">Profile Information</h2>
                        <p class="text-gray-600 text-sm mt-1">Update your account's profile information and email address.
                        </p>
                    </div>
                    <div class="p-6">
                        <form id="profileForm" action="{{ route('admin.updateProfile') }}" method="POST"
                            enctype="multipart/form-data">

                            @csrf
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                                    <input type="text" id="name" name="name" value="{{ old('name', $admin->name) }}"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('name') border-red-500 @enderror">
                                    @error('name')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email
                                        Address</label>
                                    <input type="email" id="email" name="email" value="{{ old('email', $admin->email) }}"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('email') border-red-500 @enderror">
                                    @error('email')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone
                                        Number</label>
                                    <input type="tel" id="phone" name="phone" value="{{ old('phone', $admin->phone) }}"
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('phone') border-red-500 @enderror">
                                    @error('phone')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>
                                <div>
                                    <label for="position"
                                        class="block text-sm font-medium text-gray-700 mb-1">Position</label>
                                    <input type="text" id="position" value="Administrator" disabled
                                        class="w-full px-4 py-2 border border-gray-300 rounded-md bg-gray-100 cursor-not-allowed">
                                </div>
                            </div>
                            <button type="submit" form="profileForm"
                                class="px-4 py-2 mt-5 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors">
                                <i class="fas fa-save mr-2"></i>Save Changes
                            </button>
                        </form>
                    </div>
                </div>

                <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden mt-6">
                    <div class="p-5 border-b border-gray-100">
                        <h2 class="text-xl font-semibold text-gray-800">Update Password</h2>
                        <p class="text-gray-600 text-sm mt-1">Ensure your account is using a long, random password to stay
                            secure.</p>
                    </div>
                    <div class="p-6">
                        <form action="{{ route('admin.updatePassword') }}" method="POST" id="passwordUpdateForm">
                            @csrf
                            @method('PUT')

                            <div class="space-y-4">
                                <div>
                                    <label for="current_password"
                                        class="block text-sm font-medium text-gray-700 mb-1">Current Password</label>
                                    <div class="relative">
                                        <input type="password" id="current_password" name="current_password"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('current_password') border-red-500 @enderror">
                                        <button type="button" onclick="togglePasswordVisibility('current_password', this)"
                                            class="absolute right-3 top-2.5 text-gray-500 hover:text-gray-700">
                                            <i class="far fa-eye"></i>
                                        </button>
                                    </div>
                                    @error('current_password')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="new_password" class="block text-sm font-medium text-gray-700 mb-1">New
                                        Password</label>
                                    <div class="relative">
                                        <input type="password" id="new_password" name="new_password"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 @error('new_password') border-red-500 @enderror">
                                        <button type="button" onclick="togglePasswordVisibility('new_password', this)"
                                            class="absolute right-3 top-2.5 text-gray-500 hover:text-gray-700">
                                            <i class="far fa-eye"></i>
                                        </button>
                                    </div>
                                    <div id="password-strength" class="mt-1 text-xs">
                                        <p class="text-gray-500">Password must contain:</p>
                                        <ul class="list-disc list-inside">
                                            <li id="length" class="text-gray-400">At least 8 characters</li>
                                            <li id="uppercase" class="text-gray-400">One uppercase letter</li>
                                            <li id="lowercase" class="text-gray-400">One lowercase letter</li>
                                            <li id="number" class="text-gray-400">One number</li>
                                            <li id="special" class="text-gray-400">One special character</li>
                                        </ul>
                                    </div>
                                    @error('new_password')
                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                    @enderror
                                </div>

                                <div>
                                    <label for="new_password_confirmation"
                                        class="block text-sm font-medium text-gray-700 mb-1">Confirm New Password</label>
                                    <div class="relative">
                                        <input type="password" id="new_password_confirmation"
                                            name="new_password_confirmation"
                                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                                        <button type="button"
                                            onclick="togglePasswordVisibility('new_password_confirmation', this)"
                                            class="absolute right-3 top-2.5 text-gray-500 hover:text-gray-700">
                                            <i class="far fa-eye"></i>
                                        </button>
                                    </div>
                                    <p id="password-match" class="mt-1 text-xs text-gray-500 hidden">Passwords match!</p>
                                    <p id="password-mismatch" class="mt-1 text-xs text-red-500 hidden">Passwords do not
                                        match!</p>
                                </div>
                            </div>

                            <div class="mt-6 flex justify-end">
                                <button type="submit" id="submit-btn"
                                    class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition-colors disabled:opacity-50 disabled:cursor-not-allowed">
                                    Update Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Password Toggle Script -->
    <script>

        // Preview profile photo when selected
        document.getElementById('profilePhoto').addEventListener('change', function (e) {
            if (e.target.files && e.target.files[0]) {
                const reader = new FileReader();
                reader.onload = function (event) {
                    document.querySelector('.rounded-full.object-cover').src = event.target.result;
                }
                reader.readAsDataURL(e.target.files[0]);
            }
        });
        // Toggle password visibility
        function togglePasswordVisibility(inputId, button) {
            const input = document.getElementById(inputId);
            const icon = button.querySelector('i');

            if (input.type === 'password') {
                input.type = 'text';
                icon.classList.remove('fa-eye');
                icon.classList.add('fa-eye-slash');
            } else {
                input.type = 'password';
                icon.classList.remove('fa-eye-slash');
                icon.classList.add('fa-eye');
            }
        }

        // Password validation
        const newPassword = document.getElementById('new_password');
        const confirmPassword = document.getElementById('new_password_confirmation');
        const submitBtn = document.getElementById('submit-btn');

        // Check password strength
        newPassword.addEventListener('input', function () {
            const password = this.value;
            const strength = {
                length: password.length >= 8,
                uppercase: /[A-Z]/.test(password),
                lowercase: /[a-z]/.test(password),
                number: /[0-9]/.test(password),
                special: /[^A-Za-z0-9]/.test(password)
            };

            // Update requirements list
            document.getElementById('length').className = strength.length ? 'text-green-500' : 'text-gray-400';
            document.getElementById('uppercase').className = strength.uppercase ? 'text-green-500' : 'text-gray-400';
            document.getElementById('lowercase').className = strength.lowercase ? 'text-green-500' : 'text-gray-400';
            document.getElementById('number').className = strength.number ? 'text-green-500' : 'text-gray-400';
            document.getElementById('special').className = strength.special ? 'text-green-500' : 'text-gray-400';

            validateForm();
        });

        // Check password match
        confirmPassword.addEventListener('input', function () {
            const password = newPassword.value;
            const confirm = this.value;

            if (confirm === '') {
                document.getElementById('password-match').classList.add('hidden');
                document.getElementById('password-mismatch').classList.add('hidden');
            } else if (password === confirm) {
                document.getElementById('password-match').classList.remove('hidden');
                document.getElementById('password-mismatch').classList.add('hidden');
            } else {
                document.getElementById('password-match').classList.add('hidden');
                document.getElementById('password-mismatch').classList.remove('hidden');
            }

            validateForm();
        });

        // Validate entire form
        function validateForm() {
            const password = newPassword.value;
            const confirm = confirmPassword.value;
            const currentPass = document.getElementById('current_password').value;

            // Check password strength
            const isStrong = password.length >= 8 &&
                /[A-Z]/.test(password) &&
                /[a-z]/.test(password) &&
                /[0-9]/.test(password) &&
                /[^A-Za-z0-9]/.test(password);

            // Check passwords match (only if both fields have values)
            const passwordsMatch = password === confirm && password !== '' && confirm !== '';

            // Enable/disable submit button
            submitBtn.disabled = !(currentPass && isStrong && passwordsMatch);
        }

        // Also validate when current password changes
        document.getElementById('current_password').addEventListener('input', validateForm);
    </script>
@endsection