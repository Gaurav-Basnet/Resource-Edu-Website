<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $blog->title }}</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .object-fit {
            object-fit: cover;
        }
    </style>
</head>
<body>
    <main>
        <div class="max-w-full px-6 lg:px-20 py-10">
            <!-- Top Back Button -->
            <div class="mb-6">
                <a href="{{ url()->previous() }}" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                        d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                        clip-rule="evenodd" />
                    </svg>
                    Back to Articles
                </a>
            </div>

            <!-- Blog Title -->
            <h1 class="text-4xl font-bold text-gray-800 mb-6 leading-tight tracking-tight">{{ $blog->title }}</h1>

            <!-- Featured Image -->
            <div class="mb-8 h-96 rounded-lg overflow-hidden shadow-md border border-gray-100">
                <img src="{{ asset('storage/' . $blog->featured_image) }}" alt="Blog Image" class="w-full h-full object-fit">
            </div>

            <!-- Blog Content -->
            <div class="text-gray-700 text-lg leading-relaxed space-y-6">
                @foreach(explode("\n", $blog->content) as $paragraph)
                <p class="mb-6 text-justify">{{ $paragraph }}</p>
                @endforeach
            </div>

            <!-- Bottom Back Button -->
            <div class="mt-12">
                <a href="{{ url()->previous() }}" class="inline-flex items-center text-blue-600 hover:text-blue-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                        d="M9.707 16.707a1 1 0 01-1.414 0l-6-6a1 1 0 010-1.414l6-6a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l4.293 4.293a1 1 0 010 1.414z"
                        clip-rule="evenodd" />
                    </svg>
                    Back to Articles
                </a>
            </div>
        </div>
    </main>
</body>
</html>