@extends('master')
@section('title', 'Apply Now')
@section('content')

<div class="gsap max-w-full px-6 lg:px-20 py-10">
  <div class="max-w-4xl mx-auto">
    <!-- Page Header -->
    <div class="text-center mb-1">
      <h1 class="text-4xl font-bold text-gray-800 mb-4">Apply Now</h1>
      <p class="text-lg text-gray-600">Fill out the form below to start your international education journey</p>
    </div>

    

    <!-- Application Form -->
    <div class="bg-white p-8 md:p-10 rounded-xl shadow-lg">
      <form class="space-y-8" action="{{ route('application.store') }}" method="POST" id="applicationForm" >
  @csrf
        <!-- Personal Information Section -->
        <div class="space-y-6">
          <h3 class="text-xl font-semibold text-purple-600 border-b pb-2">Personal Information</h3>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Full Name -->
            <div>
              <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name*</label>
              <input type="text" id="name" name="name" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                placeholder="John Doe">
              <p id="name-error" class="mt-1 text-sm text-red-600 hidden"></p>
            </div>

            <!-- Email -->
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email*</label>
              <input type="email" id="email" name="email" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                placeholder="your@email.com">
              <p id="email-error" class="mt-1 text-sm text-red-600 hidden"></p>
            </div>

            <!-- Phone -->
            <div>
              <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Phone Number*</label>
              <input type="tel" id="phone" name="phone" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                placeholder="+977 98xxxxxxx">
              <p id="phone-error" class="mt-1 text-sm text-red-600 hidden"></p>
            </div>

            <!-- Date of Birth -->
            <div>
              <label for="dob" class="block text-sm font-medium text-gray-700 mb-1">Date of Birth*</label>
              <input type="date" id="dob" name="dob" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all">
              <p id="dob-error" class="mt-1 text-sm text-red-600 hidden"></p>
            </div>
          </div>
        </div>

        <!-- Study Preferences Section -->
        <div class="space-y-6">
          <h3 class="text-xl font-semibold text-purple-600 border-b pb-2">Study Preferences</h3>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Interested Country -->
            <div>
              <label for="country" class="block text-sm font-medium text-gray-700 mb-1">Interested Country*</label>
              <select id="country" name="country" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all appearance-none bg-select-arrow">
                <option value="">Select a country</option>
                <option value="UK">United Kingdom</option>
                <option value="USA">United States</option>
                <option value="Canada">Canada</option>
                <option value="Australia">Australia</option>
                <option value="Germany">Germany</option>
                <option value="Other">Other</option>
              </select>
              <p id="country-error" class="mt-1 text-sm text-red-600 hidden"></p>
            </div>

            <!-- Interested Course -->
            <div>
              <label for="course" class="block text-sm font-medium text-gray-700 mb-1">Interested Course*</label>
              <select id="course" name="course" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all appearance-none bg-select-arrow">
                <option value="">Select course</option>
                <option value="Business">Business & Management</option>
                <option value="Engineering">Engineering</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Medicine">Medicine</option>
                <option value="Arts">Arts & Humanities</option>
                <option value="Other">Other</option>
              </select>
              <p id="course-error" class="mt-1 text-sm text-red-600 hidden"></p>
            </div>

            <!-- Study Level -->
            <div>
              <label for="level" class="block text-sm font-medium text-gray-700 mb-1">Study Level*</label>
              <select id="level" name="level" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all appearance-none bg-select-arrow">
                <option value="">Select level</option>
                <option value="Bachelor">Bachelor's Degree</option>
                <option value="Master">Master's Degree</option>
                <option value="PhD">PhD/Doctorate</option>
                <option value="Diploma">Diploma/Certificate</option>
                <option value="Foundation">Foundation Program</option>
              </select>
              <p id="level-error" class="mt-1 text-sm text-red-600 hidden"></p>
            </div>

            <!-- Intake Period -->
            <div class="grid grid-cols-2 gap-4">
              <div>
                <label for="intake_year" class="block text-sm font-medium text-gray-700 mb-1">Intake Year*</label>
                <select id="intake_year" name="intake_year" required
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all appearance-none bg-select-arrow">
                  <option value="">Select year</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
                  <option value="2025">2025</option>
                  <option value="2026">2026</option>
                </select>
              </div>
              <div>
                <label for="intake_season" class="block text-sm font-medium text-gray-700 mb-1">Intake Season*</label>
                <select id="intake_season" name="intake_season" required
                  class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all appearance-none bg-select-arrow">
                  <option value="">Select season</option>
                  <option value="Spring">Spring</option>
                  <option value="Summer">Summer</option>
                  <option value="Fall">Fall</option>
                  <option value="Winter">Winter</option>
                </select>
              </div>
              <p id="intake-error" class="mt-1 text-sm text-red-600 hidden col-span-2"></p>
            </div>
          </div>
        </div>

        <!-- Academic Background Section -->
        <div class="space-y-6">
          <h3 class="text-xl font-semibold text-purple-600 border-b pb-2">Academic Background</h3>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Current Education -->
            <div>
              <label for="current_education" class="block text-sm font-medium text-gray-700 mb-1">Current Education Level*</label>
              <select id="current_education" name="current_education" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all appearance-none bg-select-arrow">
                <option value="">Select level</option>
                <option value="High School">High School</option>
                <option value="Diploma">Diploma</option>
                <option value="Bachelor">Bachelor's Degree</option>
                <option value="Master">Master's Degree</option>
                <option value="Other">Other</option>
              </select>
              <p id="current-edu-error" class="mt-1 text-sm text-red-600 hidden"></p>
            </div>

            <!-- Institution Name -->
            <div>
              <label for="institution" class="block text-sm font-medium text-gray-700 mb-1">Current Institution*</label>
              <input type="text" id="institution" name="institution" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                placeholder="Your school/college name">
              <p id="institution-error" class="mt-1 text-sm text-red-600 hidden"></p>
            </div>

            <!-- GPA/Percentage -->
            <div>
              <label for="gpa" class="block text-sm font-medium text-gray-700 mb-1">GPA/Percentage*</label>
              <input type="text" id="gpa" name="gpa" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                placeholder="3.5 or 85%">
              <p id="gpa-error" class="mt-1 text-sm text-red-600 hidden"></p>
            </div>

            <!-- Graduation Year -->
            <div>
              <label for="grad_year" class="block text-sm font-medium text-gray-700 mb-1">Graduation Year*</label>
              <select id="grad_year" name="grad_year" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all appearance-none bg-select-arrow">
                <option value="">Select year</option>
                <option value="2023">2023</option>
                <option value="2022">2022</option>
                <option value="2021">2021</option>
                <option value="2020">2020</option>
                <option value="Earlier">Earlier</option>
                <option value="Not Graduated">Not Graduated Yet</option>
              </select>
              <p id="grad-year-error" class="mt-1 text-sm text-red-600 hidden"></p>
            </div>
          </div>
        </div>

        <!-- Additional Information Section -->
        <div class="space-y-6">
          <h3 class="text-xl font-semibold text-purple-600 border-b pb-2">Additional Information</h3>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Budget Range -->
            <div>
              <label for="budget" class="block text-sm font-medium text-gray-700 mb-1">Estimated Budget (per year)*</label>
              <select id="budget" name="budget" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all appearance-none bg-select-arrow">
                <option value="">Select budget range</option>
                <option value="5-10k">$5,000 - $10,000</option>
                <option value="10-20k">$10,000 - $20,000</option>
                <option value="20-30k">$20,000 - $30,000</option>
                <option value="30k+">$30,000+</option>
              </select>
              <p id="budget-error" class="mt-1 text-sm text-red-600 hidden"></p>
            </div>

            <!-- English Proficiency -->
            <div>
              <label for="english_level" class="block text-sm font-medium text-gray-700 mb-1">English Proficiency*</label>
              <select id="english_level" name="english_level" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all appearance-none bg-select-arrow">
                <option value="">Select level</option>
                <option value="beginner">Beginner</option>
                <option value="intermediate">Intermediate</option>
                <option value="advanced">Advanced</option>
                <option value="fluent">Fluent</option>
                <option value="native">Native Speaker</option>
              </select>
              <p id="english-error" class="mt-1 text-sm text-red-600 hidden"></p>
            </div>

            <!-- Test Scores -->
            <div>
              <label for="test_scores" class="block text-sm font-medium text-gray-700 mb-1">English Test Scores (if any)</label>
              <input type="text" id="test_scores" name="test_scores"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
                placeholder="IELTS 6.5 or TOEFL 90">
            </div>

            <!-- Passport Status -->
            <div>
              <label for="passport" class="block text-sm font-medium text-gray-700 mb-1">Passport Status*</label>
              <select id="passport" name="passport" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all appearance-none bg-select-arrow">
                <option value="">Select status</option>
                <option value="Yes">I have a valid passport</option>
                <option value="Applied">Applied but not received</option>
                <option value="No">Don't have passport</option>
              </select>
              <p id="passport-error" class="mt-1 text-sm text-red-600 hidden"></p>
            </div>
          </div>

          <!-- Additional Message -->
          <div>
            <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Additional Message</label>
            <textarea id="message" name="message" rows="4"
              class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition-all"
              placeholder="Tell us about your academic goals, preferred universities, or any special requirements..."></textarea>
          </div>

          <!-- Newsletter Subscription -->
          <div class="flex items-start">
            <div class="flex items-center h-5">
              <input id="newsletter" name="newsletter" type="checkbox" 
                class="focus:ring-purple-500 h-4 w-4 text-purple-600 border-gray-300 rounded">
            </div>
            <div class="ml-3 text-sm">
              <label for="newsletter" class="font-medium text-gray-700">Subscribe to our newsletter</label>
              <p class="text-gray-500">Get updates on scholarships, deadlines, and education news</p>
            </div>
          </div>
        </div>

        <!-- Submit Button -->
        <div class="pt-4">
          <button type="submit" name="submit"
            class="w-full bg-gradient-to-r from-purple-600 to-indigo-600 text-white font-semibold py-3 px-6 rounded-lg shadow-md hover:from-purple-700 hover:to-indigo-700 transition-all transform hover:scale-[1.01]">
            Submit Application
            <svg class="w-4 h-4 inline ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
            </svg>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Success Modal (hidden by default) -->
<div id="successModal" class="gsap fixed inset-0 bg-black bg-opacity-50  items-center justify-center hidden z-50">
  <div class="bg-white p-8 rounded-xl max-w-md w-full mx-4">
    <div class="text-center">
      <svg class="mx-auto h-12 w-12 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
      </svg>
      <h3 class="mt-3 text-lg font-medium text-gray-900">Application Submitted!</h3>
      <div class="mt-2 text-sm text-gray-500">
        <p>Thank you for your application. Our counselor will contact you within 24 hours.</p>
      </div>
      <div class="mt-5">
        <button type="button" onclick="closeSuccessModal()"
          class="inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-purple-600 text-base font-medium text-white hover:bg-purple-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-purple-500 sm:text-sm">
          Close
        </button>
      </div>
    </div>
  </div>
</div>

<style>
  .bg-select-arrow {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");
    background-position: right 0.5rem center;
    background-repeat: no-repeat;
    background-size: 1.5em 1.5em;
    padding-right: 2.5rem;
    -webkit-print-color-adjust: exact;
    print-color-adjust: exact;
  }
</style>

<script src="assests/js/applyForm.js"></script>
@endsection