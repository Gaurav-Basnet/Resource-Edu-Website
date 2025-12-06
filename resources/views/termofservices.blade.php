@extends('master')
@section('title', 'Terms of Service')
@section('content')

<div class="min-h-screen bg-gray-50 py-8 px-4 sm:px-6 lg:px-8">
  <div class="max-w-3xl mx-auto bg-white p-6 sm:p-8 rounded-lg shadow-md">
    <h1 class="text-2xl sm:text-3xl font-bold text-gray-800 mb-4 text-center">Terms of Service</h1>
    <p class="text-gray-600 mb-6 text-center">Last Updated: [2082-03-10]</p>

    <div class="space-y-6">
      <!-- 1. Acceptance of Terms -->
      <div>
        <h2 class="text-xl font-semibold text-blue-700 mb-2">1. Acceptance of Terms</h2>
        <p class="text-gray-700">By using Resource Edu Hub ("the Platform"), you agree to these Terms of Service. If you do not agree, please do not use our services.</p>
      </div>

      <!-- 2. User Responsibilities -->
      <div>
        <h2 class="text-xl font-semibold text-blue-700 mb-2">2. User Responsibilities</h2>
        <ul class="list-disc pl-5 space-y-1 text-gray-700">
          <li>You must provide accurate information when registering.</li>
          <li>You are responsible for keeping your login details secure.</li>
          <li>Do not share, sell, or misuse course materials.</li>
          <li>Follow all rules and guidelines provided in courses.</li>
        </ul>
      </div>

      <!-- 3. Payments & Refunds -->
      <div>
        <h2 class="text-xl font-semibold text-blue-700 mb-2">3. Payments & Refunds</h2>
        <ul class="list-disc pl-5 space-y-1 text-gray-700">
          <li>Course fees must be paid in full before access is granted.</li>
          <li>Refunds are available within [X] days if requested in writing.</li>
          <li>No refunds after accessing course materials.</li>
        </ul>
      </div>

      <!-- 4. Intellectual Property -->
      <div>
        <h2 class="text-xl font-semibold text-blue-700 mb-2">4. Intellectual Property</h2>
        <p class="text-gray-700">All course content, videos, and materials are owned by Resource Edu Hub. You may not reproduce, share, or resell them.</p>
      </div>

      <!-- 5. Account Termination -->
      <div>
        <h2 class="text-xl font-semibold text-blue-700 mb-2">5. Account Termination</h2>
        <p class="text-gray-700">We may suspend or terminate accounts for violations of these terms, fraud, or misuse of services.</p>
      </div>

      <!-- 6. Limitation of Liability -->
      <div>
        <h2 class="text-xl font-semibold text-blue-700 mb-2">6. Limitation of Liability</h2>
        <p class="text-gray-700">Resource Edu Hub is not responsible for:</p>
        <ul class="list-disc pl-5 space-y-1 text-gray-700">
          <li>Internet or technical issues beyond our control.</li>
          <li>Any indirect damages from using our services.</li>
          <li>Content posted by third parties (e.g., in forums).</li>
        </ul>
      </div>

      <!-- 7. Changes to Terms -->
      <div>
        <h2 class="text-xl font-semibold text-blue-700 mb-2">7. Changes to Terms</h2>
        <p class="text-gray-700">We may update these terms. Continued use of the Platform means you accept the changes.</p>
      </div>

      <!-- 8. Contact Us -->
      <div>
        <h2 class="text-xl font-semibold text-blue-700 mb-2">8. Contact Us</h2>
        <p class="text-gray-700">For questions about these terms, email us at <strong>info@resourceeduhub.com</strong>.</p>
      </div>
    </div>
  </div>
</div>

@endsection
