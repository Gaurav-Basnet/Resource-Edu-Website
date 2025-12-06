@extends('master')
@section('title', 'Login')
@section('content')

<div class="w-full lg:px-20 px-4 min-h-auto bg-gradient-to-br from-purple-50 to-indigo-50 flex items-center justify-center p-4">
  <div class="w-full max-w-xl">
    <!-- Logo/Brand -->
    <div class="text-center mb-2">
      <h2 class="text-2xl lg:text-3xl font-bold text-purple-900">Resource Education Hub</h2>
      <p class="text-gray-500 mt-2 text-sm lg:text-base">Your gateway to global education</p>
    </div>

    @if ($errors->any())
      <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-4 rounded">
        <div class="text-red-700">
          <ul class="list-disc list-inside">
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
          </ul>
        </div>
      </div>
    @endif

    <!-- Card Container -->
    <div class="bg-white m-0 lg:m-2 rounded-lg lg:rounded-2xl overflow-hidden">
      <!-- Tab Navigation -->
      <div class="flex border-b">
        <button id="login-tab" class="flex-1 py-4 lg:py-5 px-4 text-center font-semibold text-purple-600 border-b-2 border-purple-600 transition-colors duration-300 text-sm lg:text-base">
          Sign In
        </button>
        <button id="register-tab" class="flex-1 py-4 lg:py-5 px-4 text-center font-semibold text-gray-500 hover:text-purple-500 transition-colors duration-300 text-sm lg:text-base">
          Register
        </button>
      </div>

      <!-- Login Form -->
      <div id="login-form" class="p-4 lg:p-8">
        <form class="space-y-4 lg:space-y-6" method="POST" action="/login">
          @csrf
          <div class="space-y-1">
            <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
            <div class="relative rounded-md shadow-sm lg:transition-all lg:duration-300 lg:focus-within:ring-2 lg:focus-within:ring-purple-500 lg:focus-within:border-transparent">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                </svg>
              </div>
              <input type="email" id="email" name="email" class="block w-full pl-10 pr-3 py-2 lg:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-purple-500 focus:border-purple-500 lg:transition duration-300" placeholder="you@example.com" required value="{{ old('email') }}">
            </div>
            <div id="email-error" class="text-red-500 text-xs lg:text-sm mt-1 hidden"></div>
          </div>

          <div class="space-y-1">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <div class="relative rounded-md shadow-sm lg:transition-all lg:duration-300 lg:focus-within:ring-2 lg:focus-within:ring-purple-500 lg:focus-within:border-transparent">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <input type="password" id="password" name="password" class="block w-full pl-10 pr-10 py-2 lg:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-purple-500 focus:border-purple-500 lg:transition duration-300" placeholder="••••••••" required>
              <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center" id="toggle-password">
                <svg id="eye-icon" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
                <svg id="eye-off-icon" class="h-5 w-5 text-gray-400 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                </svg>
              </button>
            </div>
            <div id="password-error" class="text-red-500 text-xs lg:text-sm mt-1 hidden"></div>
          </div>

          

          <button type="submit" name="submit" class="w-full flex justify-center py-2 lg:py-3 px-4 border border-transparent rounded-lg text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 lg:transition-all lg:duration-300 lg:hover:-translate-y-0.5">
            Sign in
          </button>
        </form>
      </div>

      <!-- Register Form -->
      <div id="register-form" class="hidden p-4 lg:p-8">
        <form method="POST" action="{{ route('register') }}" class="space-y-4 lg:space-y-6">
          @csrf
          <div class="space-y-1">
            <label for="full-name" class="block text-sm font-medium text-gray-700">Full name</label>
            <div class="relative rounded-md shadow-sm lg:transition-all lg:duration-300 lg:focus-within:ring-2 lg:focus-within:ring-purple-500 lg:focus-within:border-transparent">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <input type="text" name="name" id="full-name" class="block w-full pl-10 pr-3 py-2 lg:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-purple-500 focus:border-purple-500 lg:transition duration-300" placeholder="John Doe" required value="{{ old('name') }}">
            </div>
            <div id="name-error" class="text-red-500 text-xs lg:text-sm mt-1 hidden"></div>
          </div>

          <div class="space-y-1">
            <label for="reg-email" class="block text-sm font-medium text-gray-700">Email address</label>
            <div class="relative rounded-md shadow-sm lg:transition-all lg:duration-300 lg:focus-within:ring-2 lg:focus-within:ring-purple-500 lg:focus-within:border-transparent">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                  <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                </svg>
              </div>
              <input type="email" name="email" id="reg-email" class="block w-full pl-10 pr-3 py-2 lg:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-purple-500 focus:border-purple-500 lg:transition duration-300" placeholder="you@example.com" required value="{{ old('email') }}">
            </div>
            <div id="reg-email-error" class="text-red-500 text-xs lg:text-sm mt-1 hidden"></div>
          </div>

          <div class="space-y-1">
            <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
            <div class="relative rounded-md shadow-sm lg:transition-all lg:duration-300 lg:focus-within:ring-2 lg:focus-within:ring-purple-500 lg:focus-within:border-transparent">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                  <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z"></path>
                </svg>
              </div>
              <input type="tel" name="phone" id="phone" class="block w-full pl-10 pr-3 py-2 lg:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-purple-500 focus:border-purple-500 lg:transition duration-300" placeholder="+977xxxxxx" required value="{{ old('phone') }}">
            </div>
            <div id="phone-error" class="text-red-500 text-xs lg:text-sm mt-1 hidden"></div>
          </div>

          <div class="space-y-1">
            <label for="reg-password" class="block text-sm font-medium text-gray-700">Password</label>
            <div class="relative rounded-md shadow-sm lg:transition-all lg:duration-300 lg:focus-within:ring-2 lg:focus-within:ring-purple-500 lg:focus-within:border-transparent">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <input type="password" name="password" id="reg-password" class="block w-full pl-10 pr-10 py-2 lg:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-purple-500 focus:border-purple-500 lg:transition duration-300" placeholder="••••••••" required>
              <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center" id="toggle-reg-password">
                <svg id="reg-eye-icon" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
                <svg id="reg-eye-off-icon" class="h-5 w-5 text-gray-400 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                </svg>
              </button>
            </div>
            <div id="reg-password-error" class="text-red-500 text-xs lg:text-sm mt-1 hidden"></div>
            <div id="password-strength" class="mt-2 hidden">
              <div class="flex items-center space-x-2">
                <div id="strength-meter" class="h-1.5 flex-1 bg-gray-200 rounded-full overflow-hidden">
                  <div id="strength-meter-fill" class="h-full bg-gray-400 rounded-full"></div>
                </div>
                <span id="strength-text" class="text-xs font-medium text-gray-500">Weak</span>
              </div>
              <div class="text-xs text-gray-500 mt-1">
                <p>Password must contain at least:</p>
                <ul class="list-disc list-inside">
                  <li id="length-requirement" class="text-gray-400">8 characters</li>
                  <li id="uppercase-requirement" class="text-gray-400">1 uppercase letter</li>
                  <li id="lowercase-requirement" class="text-gray-400">1 lowercase letter</li>
                  <li id="number-requirement" class="text-gray-400">1 number</li>
                </ul>
              </div>
            </div>
          </div>

          <div class="space-y-1">
            <label for="confirm-password" class="block text-sm font-medium text-gray-700">Confirm password</label>
            <div class="relative rounded-md shadow-sm lg:transition-all lg:duration-300 lg:focus-within:ring-2 lg:focus-within:ring-purple-500 lg:focus-within:border-transparent">
              <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                  <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd"></path>
                </svg>
              </div>
              <input type="password" name="password_confirmation" id="confirm-password" class="block w-full pl-10 pr-10 py-2 lg:py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-purple-500 focus:border-purple-500 lg:transition duration-300" placeholder="••••••••" required>
              <button type="button" class="absolute inset-y-0 right-0 pr-3 flex items-center" id="toggle-confirm-password">
                <svg id="confirm-eye-icon" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
                <svg id="confirm-eye-off-icon" class="h-5 w-5 text-gray-400 hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21" />
                </svg>
              </button>
            </div>
            <div id="confirm-password-error" class="text-red-500 text-xs lg:text-sm mt-1 hidden"></div>
          </div>

          <div class="flex items-start">
            <div class="flex items-center h-5">
              <input id="terms" name="terms" type="checkbox" class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded lg:transition duration-300" required>
            </div>
            <div class="ml-3 text-sm">
              <label for="terms" class="font-medium text-gray-700 text-xs lg:text-sm">I agree to the <a href="/termofservices" class="text-purple-600 hover:text-purple-500 transition-colors duration-300">Terms</a> and <a href="/privacypolicy" class="text-purple-600 hover:text-purple-500 transition-colors duration-300">Privacy Policy</a></label>
            </div>
          </div>
          <div id="terms-error" class="text-red-500 text-xs lg:text-sm mt-1 hidden">You must agree to the terms and conditions</div>

          <button type="submit" name="submit" class="w-full flex justify-center py-2 lg:py-3 px-4 border border-transparent rounded-lg text-sm font-medium text-white bg-purple-600 hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 lg:transition-all lg:duration-300 lg:hover:-translate-y-0.5">
            Create account
          </button>
        </form>

        <div class="mt-4 lg:mt-6 text-center text-xs lg:text-sm">
          <p class="text-gray-600">Already have an account? <button id="show-login" class="font-medium text-purple-600 hover:text-purple-500 transition-colors duration-300">Sign in</button></p>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
// (Keep the same JavaScript as in your original code)
document.addEventListener('DOMContentLoaded', function() {
  // Tab switching functionality
  const loginTab = document.getElementById('login-tab');
  const registerTab = document.getElementById('register-tab');
  const loginForm = document.getElementById('login-form');
  const registerForm = document.getElementById('register-form');
  const showLogin = document.getElementById('show-login');

  function showLoginForm() {
    loginTab.classList.add('text-purple-600', 'border-purple-600');
    loginTab.classList.remove('text-gray-500', 'hover:text-gray-700');
    registerTab.classList.add('text-gray-500', 'hover:text-purple-500');
    registerTab.classList.remove('text-purple-600', 'border-purple-600');
    loginForm.classList.remove('hidden');
    registerForm.classList.add('hidden');
  }

  function showRegisterForm() {
    registerTab.classList.add('text-purple-600', 'border-purple-600');
    registerTab.classList.remove('text-gray-500', 'hover:text-purple-500');
    loginTab.classList.add('text-gray-500', 'hover:text-purple-500');
    loginTab.classList.remove('text-purple-600', 'border-purple-600');
    registerForm.classList.remove('hidden');
    loginForm.classList.add('hidden');
  }

  loginTab.addEventListener('click', showLoginForm);
  registerTab.addEventListener('click', showRegisterForm);
  showLogin.addEventListener('click', showLoginForm);

  // Password toggle functionality
  function setupPasswordToggle(buttonId, passwordId, eyeIconId, eyeOffIconId) {
    const toggleButton = document.getElementById(buttonId);
    const passwordInput = document.getElementById(passwordId);
    const eyeIcon = document.getElementById(eyeIconId);
    const eyeOffIcon = document.getElementById(eyeOffIconId);

    toggleButton.addEventListener('click', function() {
      const isPassword = passwordInput.type === 'password';
      passwordInput.type = isPassword ? 'text' : 'password';
      eyeIcon.classList.toggle('hidden', !isPassword);
      eyeOffIcon.classList.toggle('hidden', isPassword);
    });
  }

  setupPasswordToggle('toggle-password', 'password', 'eye-icon', 'eye-off-icon');
  setupPasswordToggle('toggle-reg-password', 'reg-password', 'reg-eye-icon', 'reg-eye-off-icon');
  setupPasswordToggle('toggle-confirm-password', 'confirm-password', 'confirm-eye-icon', 'confirm-eye-off-icon');

  // Validation functions
  function showError(inputId, message) {
    const input = document.getElementById(inputId);
    const errorElement = document.getElementById(`${inputId}-error`);
    
    if (errorElement) {
      errorElement.textContent = message;
      errorElement.classList.remove('hidden');
    }
    
    input.classList.add('border-red-500');
    input.classList.remove('border-gray-300', 'focus:border-purple-500');
  }

  function clearError(inputId) {
    const input = document.getElementById(inputId);
    const errorElement = document.getElementById(`${inputId}-error`);
    
    if (errorElement) {
      errorElement.classList.add('hidden');
    }
    
    input.classList.remove('border-red-500');
    input.classList.add('border-gray-300', 'focus:border-purple-500');
  }

  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(String(email).toLowerCase());
  }

function validatePassword(password) {
    // At least 8 characters, 1 uppercase, 1 lowercase, 1 number
    const hasMinLength = password.length >= 8;
    const hasUpperCase = /[A-Z]/.test(password);
    const hasLowerCase = /[a-z]/.test(password);
    const hasNumber = /\d/.test(password);
    
    return hasMinLength && hasUpperCase && hasLowerCase && hasNumber;
}

  function validatePhone(phone) {
    // Simple phone validation - at least 6 digits
    const re = /^[0-9]{6,}$/;
    return re.test(phone);
  }

  // Real-time validation for login form
  document.getElementById('email').addEventListener('input', function() {
    if (!this.value) {
      showError('email', 'Email is required');
    } else if (!validateEmail(this.value)) {
      showError('email', 'Please enter a valid email');
    } else {
      clearError('email');
    }
  });

  document.getElementById('password').addEventListener('input', function() {
    if (!this.value) {
      showError('password', 'Password is required');
    } else if (this.value.length < 6) {
      showError('password', 'Password must be at least 6 characters');
    } else {
      clearError('password');
    }
  });

  // Real-time validation for register form
  document.getElementById('full-name').addEventListener('input', function() {
    if (!this.value) {
      showError('full-name', 'Full name is required');
    } else if (this.value.length < 3) {
      showError('full-name', 'Name must be at least 3 characters');
    } else {
      clearError('full-name');
    }
  });

  document.getElementById('reg-email').addEventListener('input', function() {
    if (!this.value) {
      showError('reg-email', 'Email is required');
    } else if (!validateEmail(this.value)) {
      showError('reg-email', 'Please enter a valid email');
    } else {
      clearError('reg-email');
    }
  });

  document.getElementById('phone').addEventListener('input', function() {
    if (!this.value) {
      showError('phone', 'Phone number is required');
    } else if (!validatePhone(this.value)) {
      showError('phone', 'Please enter a valid phone number (at least 6 digits)');
    } else {
      clearError('phone');
    }
  });

// Update the real-time password validation
document.getElementById('reg-password').addEventListener('input', function() {
    const password = this.value;
    const strengthMeter = document.getElementById('password-strength');
    const strengthMeterFill = document.getElementById('strength-meter-fill');
    const strengthText = document.getElementById('strength-text');
    const errorElement = document.getElementById('reg-password-error');
    
    if (!password) {
        strengthMeter.classList.add('hidden');
        showError('reg-password', 'Password is required');
        return;
    }
    
    strengthMeter.classList.remove('hidden');
    
    // Check password requirements
    const hasMinLength = password.length >= 8;
    const hasUpperCase = /[A-Z]/.test(password);
    const hasLowerCase = /[a-z]/.test(password);
    const hasNumber = /\d/.test(password);
    
    // Update requirement indicators
    document.getElementById('length-requirement').classList.toggle('text-green-500', hasMinLength);
    document.getElementById('uppercase-requirement').classList.toggle('text-green-500', hasUpperCase);
    document.getElementById('lowercase-requirement').classList.toggle('text-green-500', hasLowerCase);
    document.getElementById('number-requirement').classList.toggle('text-green-500', hasNumber);
    
    // Calculate strength
    let strength = 0;
    if (hasMinLength) strength += 1;
    if (hasUpperCase) strength += 1;
    if (hasLowerCase) strength += 1;
    if (hasNumber) strength += 1;
    
    // Update meter
    const width = strength * 25;
    strengthMeterFill.style.width = `${width}%`;
    
    // Update text and color
    if (strength < 2) {
        strengthMeterFill.classList.add('bg-red-500');
        strengthMeterFill.classList.remove('bg-yellow-500', 'bg-green-500');
        strengthText.textContent = 'Weak';
        strengthText.className = 'text-xs font-medium text-red-500';
    } else if (strength < 4) {
        strengthMeterFill.classList.add('bg-yellow-500');
        strengthMeterFill.classList.remove('bg-red-500', 'bg-green-500');
        strengthText.textContent = 'Medium';
        strengthText.className = 'text-xs font-medium text-yellow-500';
    } else {
        strengthMeterFill.classList.add('bg-green-500');
        strengthMeterFill.classList.remove('bg-red-500', 'bg-yellow-500');
        strengthText.textContent = 'Strong';
        strengthText.className = 'text-xs font-medium text-green-500';
    }
    
    // Only show error if requirements aren't met
    if (!hasMinLength || !hasUpperCase || !hasLowerCase || !hasNumber) {
        showError('reg-password', 'Password must be at least 8 characters with 1 uppercase, 1 lowercase, and 1 number');
    } else {
        clearError('reg-password');
    }
});
  document.getElementById('confirm-password').addEventListener('input', function() {
    const password = document.getElementById('reg-password').value;
    if (!this.value) {
      showError('confirm-password', 'Please confirm your password');
    } else if (this.value !== password) {
      showError('confirm-password', 'Passwords do not match');
    } else {
      clearError('confirm-password');
    }
  });

  document.getElementById('terms').addEventListener('change', function() {
    const errorElement = document.getElementById('terms-error');
    if (!this.checked) {
      errorElement.classList.remove('hidden');
    } else {
      errorElement.classList.add('hidden');
    }
  });

  // Form submission validation
  document.querySelector('#login-form form').addEventListener('submit', function(e) {
    let isValid = true;
    
    // Validate email
    const email = document.getElementById('email');
    if (!email.value) {
      showError('email', 'Email is required');
      isValid = false;
    } else if (!validateEmail(email.value)) {
      showError('email', 'Please enter a valid email');
      isValid = false;
    }
    
    // Validate password
    const password = document.getElementById('password');
    if (!password.value) {
      showError('password', 'Password is required');
      isValid = false;
    } else if (password.value.length < 6) {
      showError('password', 'Password must be at least 6 characters');
      isValid = false;
    }
    
    if (!isValid) {
      e.preventDefault();
    }
  });

  document.querySelector('#register-form form').addEventListener('submit', function(e) {
    let isValid = true;
    
    // Validate full name
    const fullName = document.getElementById('full-name');
    if (!fullName.value) {
      showError('full-name', 'Full name is required');
      isValid = false;
    } else if (fullName.value.length < 3) {
      showError('full-name', 'Name must be at least 3 characters');
      isValid = false;
    }
    
    // Validate email
    const regEmail = document.getElementById('reg-email');
    if (!regEmail.value) {
      showError('reg-email', 'Email is required');
      isValid = false;
    } else if (!validateEmail(regEmail.value)) {
      showError('reg-email', 'Please enter a valid email');
      isValid = false;
    }
    
    // Validate phone
    const phone = document.getElementById('phone');
    if (!phone.value) {
      showError('phone', 'Phone number is required');
      isValid = false;
    } else if (!validatePhone(phone.value)) {
      showError('phone', 'Please enter a valid phone number (at least 6 digits)');
      isValid = false;
    }
    
    // Validate password
      const regPassword = document.getElementById('reg-password');
    if (!regPassword.value) {
        showError('reg-password', 'Password is required');
        isValid = false;
    } else if (!validatePassword(regPassword.value)) {
        showError('reg-password', 'Password must be at least 8 characters with 1 uppercase, 1 lowercase, and 1 number');
        isValid = false;
    }
    
    // Validate confirm password
    const confirmPassword = document.getElementById('confirm-password');
    if (!confirmPassword.value) {
      showError('confirm-password', 'Please confirm your password');
      isValid = false;
    } else if (confirmPassword.value !== regPassword.value) {
      showError('confirm-password', 'Passwords do not match');
      isValid = false;
    }
    
    // Validate terms checkbox
    const terms = document.getElementById('terms');
    if (!terms.checked) {
      document.getElementById('terms-error').classList.remove('hidden');
      isValid = false;
    }
    
    if (!isValid) {
      e.preventDefault();
    }
  });
});
</script>

@endsection