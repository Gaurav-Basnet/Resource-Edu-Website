@extends('master')
@section('title', 'Contact Us')


@section('content')


<script src="assests\js\forms.js"></script>

  <!-- Hero Section with Gradient & Animated Background -->
  <section class=" relative overflow-hidden bg-gradient-to-br from-purple-900 to-indigo-800 text-white px-6 py-20 lg:px-20 text-center">
    <!-- Animated background elements -->
    <div class="absolute top-0 left-0 w-full h-full opacity-10">
    <div class="absolute top-20 left-10 w-40 h-40 rounded-full bg-purple-400 mix-blend-screen animate-float1"></div>
    <div class="absolute top-1/2 right-20 w-32 h-32 rounded-full bg-indigo-400 mix-blend-screen animate-float2"></div>
    <div class="absolute bottom-10 left-1/3 w-24 h-24 rounded-full bg-white mix-blend-screen animate-float3"></div>
    </div>

    <div class="relative max-w-4xl mx-auto">
    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight animate-fadeIn">
      Get in <span class="text-yellow-300">Touch</span>
    </h1>
    <p class="text-xl md:text-2xl mb-8 opacity-90 animate-fadeIn delay-100">
      Our team is ready to answer all your questions about studying abroad
    </p>
    </div>
  </section>

  <!-- Contact Cards Section -->
  <section class="gsap py-16 bg-gray-50">
    <div class="max-w-full px-6 lg:px-20 ">
    <h2 class="text-3xl md:text-4xl font-bold text-center mb-4">
      Contact <span class="text-purple-600">Information</span>
    </h2>
    <p class="text-lg text-gray-600 text-center mb-12 max-w-2xl mx-auto">
      Reach out to us through any of these channels
    </p>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center justify-center">
      <!-- Phone Card -->
      <div
      class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-purple-200 group text-center">
      <div
        class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mb-6 mx-auto group-hover:bg-purple-600 transition duration-300">
        <svg class="w-10 h-10 text-purple-600 group-hover:text-white" fill="none" stroke="currentColor"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z">
        </path>
        </svg>
      </div>
      <h3 class="text-xl font-bold mb-3">Call Us</h3>
      <p class="text-gray-600 mb-2">Available 6AM - 6PM, Sunday to Friday</p>
      <a href="tel:+9779852082384" class="text-purple-600 font-bold text-lg hover:text-purple-800 transition">
        9852082384 | 025-590684 </a>
      </div>

      <!-- Email Card -->
      <div
      class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-purple-200 group text-center">
      <div
        class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mb-6 mx-auto group-hover:bg-purple-600 transition duration-300">
        <svg class="w-10 h-10 text-purple-600 group-hover:text-white" fill="none" stroke="currentColor"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z">
        </path>
        </svg>
      </div>
      <h3 class="text-xl font-bold mb-3">Email Us</h3>
      <p class="text-gray-600 mb-2">We'll respond within 24 hours</p>
      <a href="mailto:info@resourceeduhub.com"
        class="text-purple-600 font-bold text-lg hover:text-purple-800 transition">info@resourceeduhub.com</a>
      </div>

      <!-- Visit Card -->
      <div
      class="bg-white p-8 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 border border-gray-100 hover:border-purple-200 group text-center">
      <div
        class="w-20 h-20 bg-purple-100 rounded-full flex items-center justify-center mb-6 mx-auto group-hover:bg-purple-600 transition duration-300">
        <svg class="w-10 h-10 text-purple-600 group-hover:text-white" fill="none" stroke="currentColor"
        viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z">
        </path>
        </svg>
      </div>
      <h3 class="text-xl font-bold mb-3">Visit Us</h3>
      <p class="text-gray-600 mb-2">Come meet us in person</p>
      <p class="text-purple-600 font-bold">Itahari,Sunsari, Nepal</p>
      </div>
    </div>
    </div>
</section>

  
  <!-- Download Section -->
  <section class="gsap py-16 bg-white">
    <div class="max-w-full px-6 lg:px-20">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
      Download <span class="text-purple-600">Resources</span>
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
      Get free guides and checklists to help with your study abroad journey
      </p>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
      <!-- Resource 1 -->
      <div
      class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300 border border-gray-100">
      <div class="p-6">
        <div class="w-14 h-14 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
          </path>
        </svg>
        </div>
        <h3 class="text-xl font-bold mb-2">Study Abroad Checklist</h3>
        <p class="text-gray-600 mb-4">Complete step-by-step guide for your study abroad preparation</p>
        <a href="/downloads/study-abroad-checklist.pdf" download
        class="inline-flex items-center text-purple-600 font-medium hover:text-purple-800 transition">
        Download PDF
        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
        </svg>
        </a>
      </div>
      </div>

      <!-- Resource 2 -->
      <div
      class="bg-gray-50 rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300 border border-gray-100">
      <div class="p-6">
        <div class="w-14 h-14 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z">
          </path>
        </svg>
        </div>
        <h3 class="text-xl font-bold mb-2">Visa Application Guide</h3>
        <p class="text-gray-600 mb-4">Detailed instructions for student visa applications in top countries</p>
        <a href="/downloads/visa-application-guide.pdf" download
        class="inline-flex items-center text-purple-600 font-medium hover:text-purple-800 transition">
        Download PDF
        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
          d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path>
        </svg>
        </a>
      </div>
      </div>


    </div>
    </div>
  </section>

  <!-- Newsletter CTA -->
  <section class="gsap py-16 bg-gradient-to-r from-purple-800 to-indigo-700 text-white">
    <div class="max-w-full px-6 lg:px-20  text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">Stay Updated on Study Abroad Opportunities</h2>
    <p class="text-xl mb-8">Subscribe to our newsletter for the latest university updates, scholarship news, and visa
      changes.</p>

    <form class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
      <input type="email" placeholder="Your email address"
      class="flex-grow px-6 py-3 rounded-lg text-gray-900 focus:outline-none focus:ring-2 focus:ring-purple-300">
      <button type="submit"
      class="bg-yellow-400 hover:bg-yellow-300 text-purple-900 font-bold px-6 py-3 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
      Subscribe
      </button>
    </form>
    </div>
  </section>
  <!-- Contact Form Section -->
  <section class="gsap px-6 lg:px-20 py-16 bg-white">
    <div id="contact" class="max-w-4xl mx-auto">
    <div class="text-center mb-12">
      <h2 class="text-3xl md:text-4xl font-bold mb-4">
      Send Us a <span class="text-purple-600">Message</span>
      </h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">
      Have questions about studying abroad? Fill out the form below and we'll get back to you soon.
      </p>
    </div>





<form action="{{ 'message' }}" method="POST" id="queryform" class="lg:bg-gray-50 md:bg-gray-50 p-0 md:p-8 lg:p-8 rounded-xl lg:shadow-lg md:shadow-lg bg-white-50">      @csrf
      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
      <div>
        <label for="name" class="block text-gray-700 font-medium mb-2">Full Name</label>
        <input type="text" id="name" name="name"
        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
        placeholder="Your name" required>
      </div>
      <div>
        <label for="email" class="block text-gray-700 font-medium mb-2">Email Address</label>
        <input type="email" id="email" name="email"
        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
        placeholder="your@email.com" required>
      </div>
      </div>

      <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
      <div>
        <label for="phone" class="block text-gray-700 font-medium mb-2">Phone Number</label>
        <input type="tel" id="phone" name="phone"
        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
        placeholder="+977 98xxxxxxx">
      </div>
      <div>
        <label for="country" class="block text-gray-700 font-medium mb-2">Interested Country</label>
        <select id="country" name="country"
        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
        <option value="">Select a country</option>
        <option value="UK">United Kingdom</option>
        <option value="USA">United States</option>
        <option value="Australia">Australia</option>
        <option value="Canada">Canada</option>
        <option value="Japan">Japan</option>
        <option value="Other">Other</option>
        </select>
      </div>
      </div>

      <div class="mb-6">
      <label for="message" class="block text-gray-700 font-medium mb-2">Your Message</label>
      <textarea id="message" name="message" rows="4"
        class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent"
        placeholder="Tell us about your study abroad plans..."></textarea>
      </div>

      <div class="flex items-center mb-6">
      <input id="consent" name="consent" type="checkbox" class="w-4 h-4 text-purple-600 rounded focus:ring-purple-500"
        required>
      <label for="consent" class="ml-2 text-gray-700">I agree to receive emails and phone calls regarding my
        inquiry</label>
      </div>

      <button type="submit" name="submit"
      class="w-full bg-purple-600 hover:bg-purple-700 text-white font-bold py-4 px-6 rounded-lg shadow-lg hover:shadow-xl transition duration-300">
      Send Message
      <svg class="w-5 h-5 inline ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"></path>
      </svg>
      </button>
    </form>
    </div>
  </section>
  <!-- Voice of Success - Carousel Version -->
  <section id="testimonials"
    class="gsap px-6 lg:px-20 py-16 bg-gradient-to-r from-purple-900 via-purple-800 to-indigo-900 overflow-hidden">

    <div class="mb-12 text-center">
    <h1 class="text-4xl md:text-5xl font-bold text-white mb-4">Voices of Success</h1>
    <p class="text-white max-w-2xl mx-auto opacity-90">Hear what our students say about their experience</p>
    </div>

    <div class="relative max-w-6xl mx-auto">
    <!-- Carousel Track -->
    <div class="testimonial-carousel flex overflow-x-auto snap-x snap-mandatory scroll-smooth pb-8 -mx-4 px-4"
      style="scrollbar-width: none;">
      <style>
      .testimonial-carousel::-webkit-scrollbar {
        display: none;
      }
      </style>

      @foreach($testimonials as $testimonial)
      <div class="flex-shrink-0 w-full md:w-1/2 lg:w-1/3 px-4">
      <div
      class="bg-white/10 backdrop-blur-lg rounded-xl p-8 border border-white/20 h-full transform transition-all hover:scale-[1.02] duration-300">
      <div class="flex items-center mb-6">
      <div class="w-14 h-14 rounded-full overflow-hidden border-2 border-purple-300">
        <img class="w-full h-full object-cover"
        src="{{ $testimonial->image ? asset('storage/' . $testimonial->image) : 'https://via.placeholder.com/150' }}"
        alt="{{ $testimonial->name }}">
      </div>
      <div class="ml-4">
        <h3 class="font-bold text-white">{{ $testimonial->name }}</h3>
        <p class="text-purple-200 text-sm">{{ $testimonial->title }}</p>
      </div>
      </div>
      <p class="text-white/90 mb-6 italic">{{ $testimonial->message }}</p>
      <div class="flex text-yellow-300">
      ★ ★ ★ ★ ★
      </div>
      </div>
      </div>
    @endforeach

      <!-- Navigation Arrows -->
      <button
      class="carousel-prev absolute left-0 top-1/2 -translate-y-1/2 -translate-x-4 bg-white/20 hover:bg-white/30 rounded-full p-3 transition-all duration-300 hidden md:block">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
      </svg>
      </button>
      <button
      class="carousel-next absolute right-0 top-1/2 -translate-y-1/2 translate-x-4 bg-white/20 hover:bg-white/30 rounded-full p-3 transition-all duration-300 hidden md:block">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24"
        stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
      </svg>
      </button>
    </div>

    <!-- Dots Indicator -->
    <div class="flex justify-center mt-8 space-x-2">
      <button class="w-3 h-3 rounded-full bg-white/30 dot-indicator active:bg-white"></button>
      <button class="w-3 h-3 rounded-full bg-white/30 dot-indicator"></button>
      <button class="w-3 h-3 rounded-full bg-white/30 dot-indicator"></button>
      <button class="w-3 h-3 rounded-full bg-white/30 dot-indicator"></button>
    </div>
  </section>




  <!-- Map Section -->
  <section class="px-6 lg:px-0 py-0 bg-gray-100">
    <div class="max-w-full">
    <div class="h-96 w-full">
      <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3565.5331880202875!2d87.27112757429826!3d26.663424870761343!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39ef6d0029737075%3A0xd2b2a3e04f22e239!2sResource%20Education%20Hub%20Pvt%20Ltd!5e0!3m2!1sen!2snp!4v1749715735571!5m2!1sen!2snp"
      width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
    </div>
  </section>

  <script>
    // FAQ Toggle functionality
    function toggleFAQ(button) {
    const answer = button.nextElementSibling;
    const isExpanded = button.getAttribute('aria-expanded') === 'true';

    button.setAttribute('aria-expanded', !isExpanded);
    answer.classList.toggle('hidden');

    // Rotate the arrow
    const svg = button.querySelector('svg');
    if (!isExpanded) {
      svg.classList.add('rotate-180');
    } else {
      svg.classList.remove('rotate-180');
    }
    }
  </script>



@endsection