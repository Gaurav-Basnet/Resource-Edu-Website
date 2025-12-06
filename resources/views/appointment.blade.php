@extends('master')
@section('title', 'Book Appointment')
@section('content')

  <div class=" gsap max-w-full px:6 lg:px-20 py-10 bg-white rounded-xl shadow-lg overflow-hidden">
    <div class="grid md:grid-cols-2 gap-0">


    <!-- Appointment Form -->
    <div class="p-8 md:p-10 bg-white">
      <h2 class="text-2xl font-bold text-gray-800 mb-6">Book Your Consultation</h2>

      <form class="space-y-5" method="POST" action="{{ route('appointment.store') }}">
      @csrf
      <!-- Name -->
      <div>
        <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name*</label>
        <input type="text" id="name" name="name" required
        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200"
        placeholder="Your Name">
      </div>

      <!-- Email -->
      <div>
        <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email*</label>
        <input type="email" id="email" name="email" required
        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200"
        placeholder="your@email.com">
      </div>

      <!-- Phone -->
      <div>
        <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone*</label>
        <input type="tel" id="phone" name="phone" required
        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200"
        placeholder="+977 98xxxxxxx">
      </div>

      <!-- Service Dropdown -->
      <div>
        <label for="service" class="block text-sm font-medium text-gray-700 mb-1">Service Needed*</label>
        <select id="service" name="service" required
        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200 appearance-none bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiAjd2hpdGUgIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+PHBvbHlsaW5lIHBvaW50cz0iNiA5IDEyIDE1IDE4IDkiPjwvcG9seWxpbmU+PC9zdmc+')] bg-no-repeat bg-right-3 bg-[length:20px]">
        <option value="">Select a service</option>
        <option value="study-abroad">Study Abroad Consultation</option>
        <option value="test-prep">Test Preparation</option>
        <option value="visa">Visa Assistance</option>
        <option value="scholarship">Scholarship Guidance</option>
        <option value="other">Other</option>
        </select>
      </div>

      <!-- Mode Selection -->
      <div>
        <label class="block text-sm font-medium text-gray-700 mb-2">Preferred Mode*</label>
        <div class="grid grid-cols-2 gap-3">
        <label
          class="flex items-center p-3 border border-gray-300 rounded-lg hover:border-purple-400 transition-all duration-200 cursor-pointer">
          <input type="radio" name="mode" value="in-person" class="h-4 w-4 text-purple-600 focus:ring-purple-500"
          checked>
          <span class="ml-2 text-gray-700">In-Person</span>
        </label>
        <label
          class="flex items-center p-3 border border-gray-300 rounded-lg hover:border-purple-400 transition-all duration-200 cursor-pointer">
          <input type="radio" name="mode" value="online" class="h-4 w-4 text-purple-600 focus:ring-purple-500">
          <span class="ml-2 text-gray-700">Online</span>
        </label>
        <label
          class="flex items-center p-3 border border-gray-300 rounded-lg hover:border-purple-400 transition-all duration-200 cursor-pointer">
          <input type="radio" name="mode" value="phone" class="h-4 w-4 text-purple-600 focus:ring-purple-500">
          <span class="ml-2 text-gray-700">Phone Call</span>
        </label>
        <label
          class="flex items-center p-3 border border-gray-300 rounded-lg hover:border-purple-400 transition-all duration-200 cursor-pointer">
          <input type="radio" name="mode" value="whatsapp" class="h-4 w-4 text-purple-600 focus:ring-purple-500">
          <span class="ml-2 text-gray-700">WhatsApp</span>
        </label>
        </div>
      </div>

      <!-- Date and Time -->
      <div class="grid grid-cols-2 gap-4">
        <div>
        <label for="date" class="block text-sm font-medium text-gray-700 mb-1">Preferred Date*</label>
        <input type="date" id="date" name="date" required min="{{ date('Y-m-d') }}"
          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200">
        </div>
        <div>
        <label for="time" class="block text-sm font-medium text-gray-700 mb-1">Preferred Time*</label>
        <select id="time" name="time" required
          class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200 appearance-none bg-[url('data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIyNCIgaGVpZ2h0PSIyNCIgdmlld0JveD0iMCAwIDI0IDI0IiBmaWxsPSJub25lIiBzdHJva2U9IiAjd2hpdGUgIiBzdHJva2Utd2lkdGg9IjIiIHN0cm9rZS1saW5lY2FwPSJyb3VuZCIgc3Ryb2tlLWxpbmVqb2luPSJyb3VuZCI+PHBvbHlsaW5lIHBvaW50cz0iNiA5IDEyIDE1IDE4IDkiPjwvcG9seWxpbmU+PC9zdmc+')] bg-no-repeat bg-right-3 bg-[length:20px]">
          <option value="">Select time</option>
          <option value="morning">Morning (9AM-12PM)</option>
          <option value="afternoon">Afternoon (12PM-3PM)</option>
          <option value="late-afternoon">Late Afternoon (3PM-6PM)</option>
          <option value="evening">Evening (6PM-8PM)</option>
        </select>
        </div>
      </div>

      <!-- Additional Message -->
      <div>
        <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Additional Message</label>
        <textarea id="message" name="message" rows="3"
        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all duration-200"
        placeholder="Any specific questions or requirements?"></textarea>
      </div>

      <!-- Submit Button -->
      <button type="submit" name="submit" id="submitBtn"
        class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-semibold py-3 px-6 rounded-lg shadow-md transition-all duration-300 transform hover:-translate-y-0.5 hover:shadow-lg">
        Book Appointment
        <svg class="w-4 h-4 inline ml-2 -mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
        </svg>
      </button>
      </form>
    </div>

    <!-- Benefits Section -->
    <div class="bg-gradient-to-b from-purple-50 to-indigo-50 p-8 md:p-10 flex flex-col justify-center">
      <div class="mb-8">
      <h3 class="text-xl font-bold text-gray-900 mb-6">Why Choose Us?</h3>
      <div class="space-y-5">
        <div class="flex items-start">
        <div class="bg-white p-2 rounded-lg mr-4 shadow-sm">
          <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
          </svg>
        </div>
        <div>
          <p class="font-medium text-gray-900">15+ Years Experience</p>
          <p class="text-sm text-gray-600 mt-1">Our expert counselors have guided thousands of students</p>
        </div>
        </div>

        <div class="flex items-start">
        <div class="bg-white p-2 rounded-lg mr-4 shadow-sm">
          <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
          </svg>
        </div>
        <div>
          <p class="font-medium text-gray-900">Flexible Scheduling</p>
          <p class="text-sm text-gray-600 mt-1">We accommodate your preferred time and consultation mode</p>
        </div>
        </div>

        <div class="flex items-start">
        <div class="bg-white p-2 rounded-lg mr-4 shadow-sm">
          <svg class="w-5 h-5 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z">
          </path>
          </svg>
        </div>
        <div>
          <p class="font-medium text-gray-900">98% Success Rate</p>
          <p class="text-sm text-gray-600 mt-1">Exceptional acceptance rates for our students</p>
        </div>
        </div>
      </div>
      </div>

      <div class="bg-white p-5 rounded-lg shadow-sm border border-gray-100">
      <h4 class="font-semibold text-gray-900 mb-3">Need Immediate Assistance?</h4>
      <div class="flex items-center mb-2">
        <svg class="w-5 h-5 text-purple-600 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
        </path>
        </svg>
        <span class="text-gray-600">025-590684</span>
      </div>
      <div class="flex items-center">
        <svg class="w-5 h-5 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
        </path>
        </svg>
        <span class="text-gray-600">+977-9852082384</span>
      </div>
      </div>
    </div>
    </div>
  </div>


<script src="assests\js\forms.js"></script>
@endsection