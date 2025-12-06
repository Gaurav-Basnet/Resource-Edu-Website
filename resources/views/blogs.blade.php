@extends('master')
@section('title', 'Blogs')
@section('content')

  <section
    class="gsap relative overflow-hidden bg-gradient-to-br from-purple-900 to-indigo-800 text-white px-6 py-24 lg:px-20 text-center">
    <!-- Animated background elements -->
    <div class="absolute top-0 left-0 w-full h-full opacity-10">
    <div class="absolute top-20 left-10 w-40 h-40 rounded-full bg-purple-400 mix-blend-screen animate-float1"></div>
    <div class="absolute top-1/2 right-20 w-32 h-32 rounded-full bg-indigo-400 mix-blend-screen animate-float2"></div>
    </div>

    <div class="relative max-w-4xl mx-auto">
    <h1 class="text-4xl md:text-6xl font-bold mb-6 leading-tight animate-fadeIn">
      Study Abroad <span class="text-yellow-300">Blog</span>
    </h1>
    <p class="text-xl md:text-2xl mb-8 opacity-90 animate-fadeIn delay-100">
      Expert advice, student stories, and the latest updates on studying overseas
    </p>

    </div>
    </div>
  </section>

  <!-- Blog Content Section -->
  <section class="gsap py-16 bg-white">
    <div class="max-w-full px-6 lg:px-20">
    <div class="flex flex-col lg:flex-row gap-12">
      <!-- Main Content -->
      <main class="lg:w-2/3">
      <!-- Featured Post -->
      @if($featuredBlogs->isNotEmpty())
      @foreach($featuredBlogs->sortByDesc('created_at')->take(1) as $blogg)
      <article class="mb-16">
      <div class="relative rounded-xl overflow-hidden mb-6 h-80">
      <a href="{{ route('blogs.show', $blogg->id) }}">
        <img src="{{ asset('storage/' . $blogg->featured_image) }}" alt="{{ $blogg->title }}"
        class="w-full h-full object-cover">
      </a>
      <div class="absolute bottom-0 left-0 right-0 bg-gradient-to-t from-black to-transparent p-6">
        <span
        class="inline-block px-3 py-1 bg-purple-600 text-white text-sm font-medium rounded-full mb-2">Featured</span>
        <h2 class="text-2xl md:text-3xl font-bold text-white">
        <a href="{{ route('blogs.show', $blogg->id) }}" class="hover:underline">{{ $blogg->title }}</a>
        </h2>
      </div>
      </div>
      <p class="text-gray-600 mb-4">{{ Str::limit($blogg->content, 150) }}</p>
      <div class="flex items-center text-sm text-gray-500">
      <img src="assests/images/at.jpg" alt="Author" class="w-8 h-8 rounded-full mr-2">
      <span>Resource Education Hub</span>
      <span class="mx-2">•</span>
      <span>{{ $blogg->created_at->format('M j, Y') }}</span>
      </div>
      </article>
      @endforeach
    @endif

      <!-- Blog Posts Grid -->
      <div class="grid grid-cols-1 md:grid-cols-2 gap-8 mb-12" id="blogContainer">
        <!-- First 2 blogs visible by default -->
        @foreach($blogs->take(2) as $blog)
      <article class="blog-article">
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
        <a href="{{ route('blogs.show', $blog->id) }}">
        <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}"
        class="w-full h-48 object-fit">
        </a>
        <div class="p-6">
        <div class="flex items-center mb-3">
        <span
        class="inline-block px-2 py-1 bg-purple-100 text-purple-800 text-xs font-medium rounded">{{ $blog->category }}</span>
        <span class="mx-2 text-gray-400">•</span>
        <span class="text-sm text-gray-500">{{ $blog->created_at->format('M j, Y') }}</span>
        </div>
        <h3 class="text-xl font-bold mb-3">
        <a href="{{ route('blogs.show', $blog->id) }}"
        class="hover:text-purple-600 transition">{{ $blog->title }}</a>
        </h3>
        <p class="text-gray-600 mb-4">{{ Str::limit($blog->content, 100) }}</p>
        <div class="flex items-center text-sm text-gray-500">
        <img src="assests/images/at.jpg" alt="Author" class="w-6 h-6 rounded-full mr-2">
        <span>Resource Education Hub</span>
        </div>
        </div>
      </div>
      </article>
      @endforeach

        <!-- Remaining blogs hidden initially -->
        @foreach($blogs->slice(2) as $blog)
      <article class="blog-article hidden">
      <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition duration-300">
        <a href="{{ route('blogs.show', $blog->id) }}">
        <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="{{ $blog->title }}"
        class="w-full h-48 object-fit">
        </a>
        <div class="p-6">
        <div class="flex items-center mb-3">
        <span
        class="inline-block px-2 py-1 bg-purple-100 text-purple-800 text-xs font-medium rounded">{{ $blog->category }}</span>
        <span class="mx-2 text-gray-400">•</span>
        <span class="text-sm text-gray-500">{{ $blog->created_at->format('M j, Y') }}</span>
        </div>
        <h3 class="text-xl font-bold mb-3">
        <a href="{{ route('blogs.show', $blog->id) }}"
        class="hover:text-purple-600 transition">{{ $blog->title }}</a>
        </h3>
        <p class="text-gray-600 mb-4">{{ Str::limit($blog->content, 100) }}</p>
        <div class="flex items-center text-sm text-gray-500">
        <img src="assests/images/at.jpg" alt="Author" class="w-6 h-6 rounded-full mr-2">
        <span>Resource Education Hub</span>
        </div>
        </div>
      </div>
      </article>
      @endforeach
      </div>

      <!-- Show More Button -->
      @if($blogs->count() > 2)
      <div class="text-center mt-8">
      <button id="showMoreBtn"
      class="px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white font-medium rounded-lg transition">
      Show More Articles
      </button>
      <button id="showLessBtn"
      class="px-6 py-3 bg-purple-600 hover:bg-purple-700 text-white font-medium rounded-lg transition hidden">
      Show Less
      </button>
      </div>
    @endif
      </main>

      <!-- Sidebar -->
      <aside class="lg:w-1/3">
      <!-- Popular Posts -->
      <div class="bg-gray-50 rounded-xl p-6 shadow-sm mb-8">
        <h3 class="text-lg font-bold mb-4 text-gray-900">Popular Posts</h3>
        <div class="space-y-4">
        @foreach($blogs->take(10) as $post)
      <div class="flex items-start">
        <a href="{{ route('blogs.show', $post->id) }}">
        <img src="{{ asset('storage/' . $post->featured_image) }}" alt="Post thumbnail"
        class="w-16 h-16 object-fit rounded-lg mr-4">
        </a>
        <div>
        <a href="{{ route('blogs.show', $post->id) }}"
        class="font-medium text-gray-900 hover:text-purple-600">{{ $post->title }}</a>
        <p class="text-sm text-gray-500">{{ $post->created_at->format('M j, Y') }}</p>
        </div>
      </div>
      @endforeach
        @foreach($popularBlogs->take(10) as $post)
      <div class="flex items-start">
        <a href="{{ route('blogs.show', $post->id) }}">
        <img src="{{ asset('storage/' . $post->featured_image) }}" alt="Post thumbnail"
        class="w-16 h-16 object-fit rounded-lg mr-4">
        </a>
        <div>
        <a href="{{ route('blogs.show', $post->id) }}"
        class="font-medium text-gray-900 hover:text-purple-600">{{ $post->title }}</a>
        <p class="text-sm text-gray-500">{{ $post->created_at->format('M j, Y') }}</p>
        </div>
      </div>
      @endforeach
        @foreach($featuredBlogs->take(10) as $post)
      <div class="flex items-start">
        <a href="{{ route('blogs.show', $post->id) }}">
        <img src="{{ asset('storage/' . $post->featured_image) }}" alt="Post thumbnail"
        class="w-auto h-20 object-fit rounded-lg">
        </a>
        <div>
        <a href="{{ route('blogs.show', $post->id) }}"
        class="font-medium text-gray-900 hover:text-purple-600">{{ $post->title }}</a>
        <p class="text-sm text-gray-500">{{ $post->created_at->format('M j, Y') }}</p>
        </div>
      </div>
      @endforeach
        </div>
      </div>

      <!-- Newsletter Subscription -->
      <div id="cta" class="bg-gradient-to-r from-purple-600 to-indigo-600 rounded-xl p-6 text-white">
        <h3 class="text-xl font-bold mb-3">Get Study Abroad Tips</h3>
        <p class="text-sm opacity-90 mb-4">Subscribe to our newsletter for the latest updates and guidance.</p>
        <form id="newsletterForm" action="{{ route('newsletter.subscribe') }}" class="space-y-3">
        @csrf
        <div>
          <input name="email" type="email" placeholder="Your email address"
          class="w-full px-4 py-3 rounded-lg bg-white/20 backdrop-blur-sm border border-white/30 focus:outline-none focus:ring-2 focus:ring-white/50 placeholder-white/70"
          required>
          <div id="emailError" class="text-red-300 text-xs mt-1 hidden">Please enter a valid email address</div>
        </div>
        <button type="submit" id="submitBtn"
          class="w-full bg-white text-purple-700 font-medium py-3 px-4 rounded-lg hover:bg-gray-100 transition-colors duration-300 disabled:opacity-50 disabled:cursor-not-allowed">
          Subscribe
        </button>
        </form>
        <div id="formSuccess" class="hidden mt-3 p-3 bg-green-500/20 text-green-300 text-sm rounded-lg">
        Thank you for subscribing!
        </div>
      </div>

      </aside>
    </div>
    </div>
  </section>

  <!-- CTA Section -->
  <section class="gsap py-16 bg-gradient-to-r from-purple-800 to-indigo-700 text-white">
    <div class="max-w-4xl mx-auto px-6 lg:px-20 text-center">
    <h2 class="text-3xl md:text-4xl font-bold mb-6">Ready to Start Your Study Abroad Journey?</h2>
    <p class="text-xl mb-8">Our expert counselors are here to guide you through every step of the process.</p>
    <div class="flex flex-col sm:flex-row gap-4 justify-center">
      <a href="/contact"
      class="bg-white hover:bg-gray-100 text-purple-800 font-bold px-8 py-4 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
      Book Free Consultation
      </a>
      <a href="tel:+9779852082384"
      class="border-2 border-white hover:bg-white hover:text-purple-800 font-bold px-8 py-4 rounded-lg shadow-lg hover:shadow-xl transition-all duration-300">
      Call Now: 9852082384
      </a>
    </div>
    </div>
  </section>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
    const newsletterForm = document.getElementById('newsletterForm');
    const emailInput = newsletterForm.querySelector('input[type="email"]');
    const emailError = document.getElementById('emailError');
    const formSuccess = document.getElementById('formSuccess');
    const submitBtn = document.getElementById('submitBtn');

    if (newsletterForm) {
      // Live validation on input change
      emailInput.addEventListener('input', function () {
      validateEmailInput();
      });

      // Form submission handler
      newsletterForm.addEventListener('submit', function (e) {
      e.preventDefault();

      // Validate before submission
      if (!validateEmailInput()) {
        return false;
      }

      // Submit the form normally (will work with your existing backend)
      newsletterForm.submit();

      // Optional: Show loading state
      submitBtn.disabled = true;
      submitBtn.innerHTML = 'Sending...';

      return true;
      });
    }

    // Email validation function
    function validateEmailInput() {
      const email = emailInput.value.trim();
      const isValid = validateEmail(email);

      if (!isValid && email) { // Only show error if field isn't empty
      emailError.classList.remove('hidden');
      return false;
      } else {
      emailError.classList.add('hidden');
      return true;
      }
    }

    // Email validation helper
    function validateEmail(email) {
      const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return re.test(email);
    }

    // Check for success message in URL (from backend redirect)
    if (window.location.search.includes('subscription=success')) {
      formSuccess.classList.remove('hidden');
      // Hide after 5 seconds
      setTimeout(() => {
      formSuccess.classList.add('hidden');
      }, 5000);
    }
    });
  </script>
@endsection