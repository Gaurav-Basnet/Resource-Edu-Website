@extends('master')
@section('title', 'Media Gallery')
@section('content')

<div class="container max-w-full px-6 lg:px-20 py-8">
    <!-- Gallery Header -->
    <div class="text-center mb-8 md:mb-12">
        <h1 class="text-2xl md:text-3xl font-bold text-purple-700 mb-2">Media Gallery</h1>
        <p class="text-gray-600 max-w-2xl mx-auto text-sm md:text-base">Explore our collection of educational photos and videos</p>
        
        <!-- Filter Buttons -->
        <div class="flex flex-wrap justify-center gap-2 mt-4 md:mt-6">
            <button class="filter-btn px-3 py-1 md:px-4 md:py-2 text-sm md:text-base bg-purple-600 text-white rounded-lg hover:bg-purple-700 transition" data-filter="all">All Media</button>
            <button class="filter-btn px-3 py-1 md:px-4 md:py-2 text-sm md:text-base bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition" data-filter="photos">Photos</button>
            <button class="filter-btn px-3 py-1 md:px-4 md:py-2 text-sm md:text-base bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300 transition" data-filter="videos">Videos</button>
        </div>
    </div>

<!-- Media Grid -->
<div class="grid grid-cols-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-4 md:gap-6" id="media-grid">

    <!-- Photos -->
    @foreach($photos as $photo)
    <div class="media-item photos group relative rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
        <img class="w-full h-48 sm:h-56 md:h-64 object-cover transition duration-300 group-hover:scale-105" 
             src="{{$photo->media_url}}" 
             alt="">
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition duration-300 flex items-end p-3 md:p-4">
            <div class="text-white opacity-0 group-hover:opacity-100 transition duration-300 transform translate-y-2 group-hover:translate-y-0">
                <h3 class="font-semibold text-base md:text-lg"> {{$photo->tittle}} </h3>
                <p class="text-xs md:text-sm">{{$photo->description}}</p>
            </div>
        </div>
        <div class="absolute top-3 right-3 bg-white bg-opacity-80 rounded-full p-1 md:p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
        </div>
        <button onclick="openLightbox('{{ $photo->media_url}}')"
                class="absolute inset-0 w-full h-full"></button>
    </div>
    @endforeach

    <!-- Videos -->
    @foreach($videos as $video)
    <div class="media-item videos group relative rounded-xl overflow-hidden shadow-md hover:shadow-xl transition duration-300">
        <!-- Use video thumbnail if available, otherwise placeholder -->
        <img class="w-full h-48 sm:h-56 md:h-64 object-cover transition duration-300 group-hover:scale-105" 
             src="{{ $video->thumbnail ? asset('storage/' . $video->thumbnail) : 'https://via.placeholder.com/150' }}" 
             alt="{{ $video->title }}">
        <div class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition duration-300 flex items-center justify-center">
            <div class="bg-white bg-opacity-80 rounded-full p-2 md:p-3 group-hover:scale-110 transition duration-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-8 md:w-8 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </div>
        </div>
        <div class="absolute inset-0 flex items-end p-3 md:p-4">
            <div class="text-white">
                <h3 class="font-semibold text-base md:text-lg">{{ $video->title }}</h3>
                <p class="text-xs md:text-sm">{{ $video->description }}</p>
            </div>
        </div>
        <div class="absolute top-3 right-3 bg-white bg-opacity-80 rounded-full p-1 md:p-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 md:h-5 md:w-5 text-purple-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
            </svg>
        </div>
        <button onclick="openVideoModal('{{ $video->media_url }}')" 
                class="absolute inset-0 w-full h-full"></button>
    </div>
    @endforeach
</div>  


    <!-- Lightbox Modal -->
    <div id="lightbox-modal" class="fixed inset-0 bg-black bg-opacity-90 z-50 flex items-center justify-center hidden">
        <div class="relative w-11/12 md:max-w-4xl p-2 md:p-4 flex justify-end">
            <button onclick="closeModal()" class="absolute top-2 md:top-4 right-2lg:right-20 text-white text-2xl md:text-3xl hover:text-gray-300">&times;</button>
            <img id="lightbox-image" class="w-full max-h-[80vh]  bg-white-400 rounded-2xl  object-contain" src="" alt="">
            <div class="text-white text-center mt-2 md:mt-4">
                <h3 id="lightbox-title" class="text-lg md:text-xl font-semibold"></h3>
                <p id="lightbox-desc" class="text-gray-300 text-sm md:text-base"></p>
            </div>
        </div>
    </div>
    

    <!-- Video Modal -->
    <div id="video-modal" class="fixed inset-0 bg-black bg-opacity-90 z-50 flex items-center justify-center hidden">
        <div class="relative w-11/12 md:max-w-4xl p-2 md:p-4">
            <button onclick="closeModal()" class="absolute top-2 md:top-4 right-2 md:right-4 text-white text-2xl md:text-3xl hover:text-gray-300">&times;</button>
            <div class="aspect-w-16 aspect-h-9">
                <iframe id="video-iframe" class="w-full h-64 sm:h-80 md:h-96" src="" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="text-white text-center mt-2 md:mt-4">
                <h3 id="video-title" class="text-lg md:text-xl font-semibold"></h3>
            </div>
        </div>
    </div>

</div>

<script>
    // Filter functionality
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            // Update active button
            document.querySelectorAll('.filter-btn').forEach(b => {
                b.classList.remove('bg-purple-600', 'text-white');
                b.classList.add('bg-gray-200', 'text-gray-700');
            });
            this.classList.add('bg-purple-600', 'text-white');
            this.classList.remove('bg-gray-200', 'text-gray-700');
            
            const filter = this.dataset.filter;
            filterMedia(filter);
        });
    });

    function filterMedia(filter) {
        const items = document.querySelectorAll('.media-item');
        items.forEach(item => {
            if (filter === 'all' || item.classList.contains(filter)) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    }

    // Lightbox functions
    function openLightbox(src, title, desc = '') {
        document.getElementById('lightbox-image').src = src;
        document.getElementById('lightbox-title').textContent = title;
        document.getElementById('lightbox-desc').textContent = desc;
        document.getElementById('lightbox-modal').classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

  function openVideoModal(videoUrl, title = 'Educational Video') {
    const videoId = extractYouTubeVideoId(videoUrl);
    if (!videoId) {
        alert('Invalid YouTube URL');
        return;
    }

    const embedUrl = `https://www.youtube.com/embed/${videoId}?autoplay=1`;
    document.getElementById('video-iframe').src = embedUrl;
    document.getElementById('video-title').textContent = title;
    document.getElementById('video-modal').classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function extractYouTubeVideoId(url) {
    const regex = /(?:youtube\.com\/(?:[^\/]+\/.+\/|(?:v|e(?:mbed)?)\/|.*[?&]v=)|youtu\.be\/)([^"&?\/\s]{11})/i;
    const match = url.match(regex);
    return match ? match[1] : null;
}

    function closeModal() {
        document.getElementById('lightbox-modal').classList.add('hidden');
        document.getElementById('video-modal').classList.add('hidden');
        document.getElementById('video-iframe').src = '';
        document.body.style.overflow = '';
    }

    // Close modals when clicking outside content
    window.addEventListener('click', function(event) {
        if (event.target === document.getElementById('lightbox-modal')) {
            closeModal();
        }
        if (event.target === document.getElementById('video-modal')) {
            closeModal();
        }
    });

    // Close with ESC key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape') {
            closeModal();
        }
    });

// for thumbnails 
    document.addEventListener("DOMContentLoaded", function () {
        const typeSelect = document.getElementById('type');
        const thumbnailInput = document.getElementById('thumbnail-input');

        function toggleThumbnailField() {
            thumbnailInput.style.display = typeSelect.value === 'video' ? 'block' : 'none';
        }

        typeSelect.addEventListener('change', toggleThumbnailField);
        toggleThumbnailField(); // Initialize on load
    });
</script>

@endsection