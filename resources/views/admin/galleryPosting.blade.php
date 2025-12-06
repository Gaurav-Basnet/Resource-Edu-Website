@extends('admin.dashboard')
@section('title', 'Media Library')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col lg:flex-row gap-8">
        <!-- Form Section -->
        <div class="w-full lg:w-1/3 bg-white p-4 sm:p-6 rounded-lg shadow-md">
            <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 sm:mb-6">Add New Media</h2>
            <form action="{{ route('media.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <!-- Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title" required
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <!-- Description -->
                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700">Description</label>
                    <textarea name="description" id="description" rows="3"
                              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                </div>

                <!-- Media Type -->
                <div>
                    <label for="type" class="block text-sm font-medium text-gray-700">Media Type</label>
                    <select name="type" id="type" required
                            class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="photo">Photo</option>
                        <option value="video">Video</option>
                    </select>
                </div>
                
                <!-- URL Input -->
                <div>
                    <label for="media_url" class="block text-sm font-medium text-gray-700">Media URL</label>
                    <input type="url" name="media_url" id="media_url" required
                          class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                          placeholder="https://example.com/ or https://youtube.com/watch?v=...">
                </div>

                <!-- Thumbnail Upload -->
                <div id="thumbnail-upload" class="hidden">
                    <label for="thumbnail" class="block text-sm font-medium text-gray-700">Thumbnail Image</label>
                    <div class="flex items-center justify-center w-full">
                        <label for="thumbnail" class="flex flex-col w-full h-28 border-2 border-dashed border-gray-300 hover:border-indigo-400 hover:bg-indigo-50 rounded-md cursor-pointer transition duration-200">
                            <div class="flex flex-col items-center justify-center pt-5">
                                <i class="fas fa-cloud-upload-alt text-xl text-indigo-500 mb-1"></i>
                                <p class="text-xs text-gray-500">Click to upload thumbnail</p>
                                <p class="text-2xs text-gray-400 mt-1">JPG, PNG up to 200KB</p>
                            </div>
                            <input type="file" id="thumbnail" name="thumbnail" accept="image/jpeg,image/png" class="opacity-0 absolute">
                        </label>
                    </div>
                    <div class="progress-bar-container hidden mt-1">
                        <div class="progress-bar"></div>
                        <p class="text-xs text-gray-500 mt-1">Compressing thumbnail...</p>
                    </div>
                    <div id="thumbnail-preview" class="hidden mt-2 relative">
                        <img id="thumbnail-preview-img" class="h-28 w-full rounded-md object-cover border border-gray-200">
                        <button type="button" onclick="removeThumbnail()" class="absolute top-1 right-1 bg-white rounded-full p-1 shadow-md hover:bg-gray-100">
                            <i class="fas fa-times text-red-500 text-xs"></i>
                        </button>
                    </div>
                    <small id="thumbnailError" style="color: red; display: none;"></small>
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end pt-4">
                    <button type="submit" id="submitBtn"
                            class="px-4 py-2 sm:px-6 sm:py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow transition text-sm sm:text-base">
                        Upload Media
                    </button>
                </div>
            </form>
        </div>

        <!-- Table Section -->
        <div class="w-full lg:w-2/3">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="px-4 sm:px-6 py-4 border-b border-gray-200 bg-gray-50">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                        <h3 class="text-lg font-medium text-gray-900">Media Library</h3>
                        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-2 w-full sm:w-auto">
                            <div class="relative w-full">
                                <input type="text" id="searchInput" placeholder="Search media..." 
                                    class="w-full pl-8 pr-4 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <svg class="absolute left-2.5 top-2.5 h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="relative w-full sm:w-auto">
                                <select id="sortSelect" class="w-full appearance-none pl-3 pr-8 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">Sort by</option>
                                    <option value="title-asc">Title (A-Z)</option>
                                    <option value="title-desc">Title (Z-A)</option>
                                    <option value="type-asc">Photos</option>
                                    <option value="type-desc">Videos</option>
                                    <option value="date-asc">Date (Oldest)</option>
                                    <option value="date-desc">Date (Newest)</option>
                                </select>
                                <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th scope="col" class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Media
                                </th>
                                <th scope="col" class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden sm:table-cell">
                                    Title
                                </th>
                                <th scope="col" class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell">
                                    Description
                                </th>
                                <th scope="col" class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden xs:table-cell">
                                    Type
                                </th>
                                <th scope="col" class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell">
                                    Date Added
                                </th>
                                <th scope="col" class="px-4 sm:px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200" id="mediaTableBody">
                            @foreach($mediaItems as $media)
                            <tr class="hover:bg-gray-50 media-row" 
                                data-title="{{ strtolower($media->title) }}" 
                                data-type="{{ strtolower($media->type) }}" 
                                data-date="{{ $media->created_at->timestamp }}">
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        @if($media->type === 'photo')
                                        <div class="flex-shrink-0 h-10 w-10 bg-blue-50 rounded-full flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        @else
                                        <div class="flex-shrink-0 h-10 w-10 bg-red-50 rounded-full flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        @endif
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900 sm:hidden">{{ $media->title }}</div>
                                            <div class="text-xs sm:text-sm text-gray-500 sm:hidden">{{ $media->type }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden sm:table-cell">
                                    {{ Str::limit($media->title, 20) }}
                                </td>
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden md:table-cell">
                                    {{ Str::limit($media->description, 20) }}
                                </td>
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden xs:table-cell">
                                    {{ $media->type }}
                                </td>
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden md:table-cell">
                                    {{ $media->created_at->format('M d, Y') }}
                                </td>
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex justify-end space-x-2">
                                        <a href="{{ $media->media_url }}" target="_blank" class="text-blue-600 hover:text-blue-900" title="View">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                    
                                        <form action="{{ route('gallery.destroy', $media->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this media item?')" class="text-red-600 hover:text-red-900" title="Delete">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .progress-bar {
        height: 4px;
        background-color: #6366f1;
        width: 0%;
        transition: width 0.3s ease;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Auto-detect media type based on URL
    const mediaUrlInput = document.getElementById('media_url');
    const mediaTypeSelect = document.getElementById('type');
    const thumbnailUploadDiv = document.getElementById('thumbnail-upload');

    mediaUrlInput.addEventListener('input', function () {
        const url = this.value.toLowerCase();

        // Check for common video extensions/domains
        if (url.match(/\.(mp4|mov|avi|webm)$/) ||
            url.includes('youtube.com') ||
            url.includes('youtu.be') ||
            url.includes('vimeo.com')) {
            mediaTypeSelect.value = 'video';
            thumbnailUploadDiv.style.display = 'block';
        }
        // Default to photo for other URLs
        else if (url.match(/\.(jpg|jpeg|png|gif|webp|bmp)$/)) {
            mediaTypeSelect.value = 'photo';
            thumbnailUploadDiv.style.display = 'none';
        }
    });

    // Show/hide thumbnail upload based on media type
    mediaTypeSelect.addEventListener('change', function() {
        if (this.value === 'video') {
            thumbnailUploadDiv.style.display = 'block';
        } else {
            thumbnailUploadDiv.style.display = 'none';
        }
    });

    // Initialize thumbnail upload visibility
    if (mediaTypeSelect.value === 'video') {
        thumbnailUploadDiv.style.display = 'block';
    } else {
        thumbnailUploadDiv.style.display = 'none';
    }

    // Thumbnail image handling with compression
    document.getElementById('thumbnail').addEventListener('change', async function(e) {
        const file = e.target.files[0];
        const errorElement = document.getElementById('thumbnailError');
        const previewContainer = document.getElementById('thumbnail-preview');
        const progressContainer = document.querySelector('.progress-bar-container');
        const progressBar = document.querySelector('.progress-bar');
        const submitBtn = document.getElementById('submitBtn');
        
        // Reset states
        errorElement.style.display = 'none';
        previewContainer.classList.add('hidden');
        
        if (!file) return;
        
        // Validate file type
        const validTypes = ['image/jpeg', 'image/png'];
        if (!validTypes.includes(file.type)) {
            errorElement.textContent = 'Only JPG and PNG images are allowed.';
            errorElement.style.display = 'inline';
            e.target.value = '';
            return;
        }
        
        // Validate file size (2MB limit before compression)
        const maxSizeBeforeCompression = 10 * 1024 * 1024; // 2MB
        if (file.size > maxSizeBeforeCompression) {
            errorElement.textContent = 'File size must be less than 10MB before compression.';
            errorElement.style.display = 'inline';
            e.target.value = '';
            return;
        }
        
        // Show progress indicator
        progressContainer.classList.remove('hidden');
        submitBtn.disabled = true;
        
        try {
            // Compress image (thumbnails should be smaller)
            const compressedFile = await compressImage(file, {
                quality: 0.7,
                maxWidth: 800,  // Larger width for thumbnails
                maxHeight: 450, // 16:9 aspect ratio
                progress: (percent) => {
                    progressBar.style.width = `${percent}%`;
                }
            });
            
            // Validate compressed size (200KB limit)
            const maxSizeAfterCompression = 200 * 1024; // 200KB
            if (compressedFile.size > maxSizeAfterCompression) {
                // Try again with lower quality
                const moreCompressedFile = await compressImage(file, {
                    quality: 0.5,
                    maxWidth: 640,
                    maxHeight: 360
                });
                
                if (moreCompressedFile.size > maxSizeAfterCompression) {
                    errorElement.textContent = 'Image could not be compressed enough. Please try a smaller image.';
                    errorElement.style.display = 'inline';
                    e.target.value = '';
                    return;
                }
                
                // Use the more compressed version
                updateFileInput(e.target, moreCompressedFile);
                showThumbnailPreview(moreCompressedFile);
            } else {
                // Use the first compressed version
                updateFileInput(e.target, compressedFile);
                showThumbnailPreview(compressedFile);
            }
            
        } catch (error) {
            console.error('Thumbnail compression error:', error);
            errorElement.textContent = 'Error processing thumbnail. Please try another one.';
            errorElement.style.display = 'inline';
            e.target.value = '';
        } finally {
            progressContainer.classList.add('hidden');
            submitBtn.disabled = false;
        }
    });

    // Search functionality
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        const rows = document.querySelectorAll('.media-row');
        
        rows.forEach(row => {
            const title = row.dataset.title;
            const type = row.dataset.type;
            
            if (title.includes(searchTerm) || type.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });

    // Sorting functionality
    const sortSelect = document.getElementById('sortSelect');
    
    sortSelect.addEventListener('change', function() {
        if (this.value) {
            const [column, direction] = this.value.split('-');
            sortTable(column, direction);
        }
    });

    function sortTable(column, direction) {
        const tbody = document.getElementById('mediaTableBody');
        const rows = Array.from(tbody.querySelectorAll('.media-row'));
        
        rows.sort((a, b) => {
            let aValue, bValue;
            
            switch(column) {
                case 'title':
                    aValue = a.dataset.title;
                    bValue = b.dataset.title;
                    break;
                case 'type':
                    aValue = a.dataset.type;
                    bValue = b.dataset.type;
                    break;
                case 'date':
                    aValue = parseInt(a.dataset.date);
                    bValue = parseInt(b.dataset.date);
                    break;
                default:
                    return 0;
            }
            
            if (aValue < bValue) {
                return direction === 'asc' ? -1 : 1;
            }
            if (aValue > bValue) {
                return direction === 'asc' ? 1 : -1;
            }
            return 0;
        });
        
        // Rebuild the table
        rows.forEach(row => tbody.appendChild(row));
    }
});

// Helper function to compress images
function compressImage(file, options = {}) {
    return new Promise((resolve, reject) => {
        const reader = new FileReader();
        reader.readAsDataURL(file);
        
        reader.onload = function(event) {
            const img = new Image();
            img.src = event.target.result;
            
            img.onload = function() {
                const canvas = document.createElement('canvas');
                const ctx = canvas.getContext('2d');
                
                // Calculate new dimensions
                let width = img.width;
                let height = img.height;
                
                if (options.maxWidth && width > options.maxWidth) {
                    height *= options.maxWidth / width;
                    width = options.maxWidth;
                }
                
                if (options.maxHeight && height > options.maxHeight) {
                    width *= options.maxHeight / height;
                    height = options.maxHeight;
                }
                
                canvas.width = width;
                canvas.height = height;
                
                // Draw image on canvas
                ctx.drawImage(img, 0, 0, width, height);
                
                // Progress callback
                if (options.progress) {
                    options.progress(50); // Halfway through
                }
                
                // Convert to JPEG with specified quality
                canvas.toBlob(function(blob) {
                    if (options.progress) {
                        options.progress(100); // Complete
                    }
                    const compressedFile = new File([blob], file.name, {
                        type: 'image/jpeg',
                        lastModified: Date.now()
                    });
                    resolve(compressedFile);
                }, 'image/jpeg', options.quality || 0.7);
            };
            
            img.onerror = function() {
                reject(new Error('Failed to load image'));
            };
        };
        
        reader.onerror = function() {
            reject(new Error('Failed to read file'));
        };
    });
}

// Helper function to update file input
function updateFileInput(inputElement, file) {
    const dataTransfer = new DataTransfer();
    dataTransfer.items.add(file);
    inputElement.files = dataTransfer.files;
}

// Helper function to show thumbnail preview
function showThumbnailPreview(file) {
    const reader = new FileReader();
    reader.onload = function(e) {
        const preview = document.getElementById('thumbnail-preview-img');
        const previewContainer = document.getElementById('thumbnail-preview');
        preview.src = e.target.result;
        previewContainer.classList.remove('hidden');
    };
    reader.readAsDataURL(file);
}

// Remove thumbnail function
function removeThumbnail() {
    document.getElementById('thumbnail-preview').classList.add('hidden');
    document.getElementById('thumbnail').value = '';
    document.getElementById('thumbnailError').style.display = 'none';
}
</script>
@endsection