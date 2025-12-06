@extends('admin.dashboard')
@section('title', 'Testimonials')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col lg:flex-row gap-6">
        <!-- Form Section -->
        <div class="w-full lg:w-1/3 bg-white p-4 sm:p-6 rounded-lg shadow-md">
            <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 sm:mb-6">Add New Testimonial</h2>
            <form action="{{ route('testimonials.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Full Name*</label>
                    <input type="text" name="name" id="name" required
                        class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                </div>

                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                    <input type="text" name="title" id="title"
                        class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                </div>

                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700">Message*</label>
                    <textarea name="message" id="message" rows="4" required
                        class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent"></textarea>
                </div>

                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Photo</label>
                    <div class="flex items-center justify-center w-full">
                        <label for="image" class="flex flex-col w-full h-28 border-2 border-dashed border-gray-300 hover:border-purple-400 hover:bg-purple-50 rounded-md cursor-pointer transition duration-200">
                            <div class="flex flex-col items-center justify-center pt-5">
                                <i class="fas fa-cloud-upload-alt text-xl text-purple-500 mb-1"></i>
                                <p class="text-xs text-gray-500">Click to upload or drag and drop</p>
                                <p class="text-2xs text-gray-400 mt-1">JPG, PNG up to 200KB</p>
                            </div>
                            <input type="file" id="image" name="image" accept="image/jpeg,image/png" class="opacity-0 absolute">
                        </label>
                    </div>
                    <div class="progress-bar-container hidden mt-1">
                        <div class="progress-bar"></div>
                        <p class="text-xs text-gray-500 mt-1">Compressing image...</p>
                    </div>
                    <div id="image-preview" class="hidden mt-2 relative">
                        <img id="preview" class="h-28 w-28 rounded-full object-cover border-2 border-purple-200 mx-auto">
                        <button type="button" onclick="removeImage()" class="absolute top-0 right-0 bg-white rounded-full p-1 shadow-md hover:bg-gray-100">
                            <i class="fas fa-times text-red-500 text-xs"></i>
                        </button>
                    </div>
                    <small id="fileImageError" style="color: red; display: none;"></small>
                </div>

                <div class="flex justify-end pt-4">
                    <button type="submit" id="submitBtn"
                        class="px-4 py-2 sm:px-6 sm:py-2 bg-purple-600 hover:bg-purple-700 text-white font-medium rounded-lg shadow transition text-sm sm:text-base">
                        Submit Testimonial
                    </button>
                </div>
            </form>
        </div>

        <!-- Table Section -->
        <div class="w-full lg:w-2/3">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="px-4 sm:px-6 py-4 border-b border-gray-200 bg-gray-50">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                        <h3 class="text-lg font-medium text-gray-900">Testimonials</h3>
                        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-2 w-full sm:w-auto">
                            <div class="relative w-full">
                                <input type="text" id="searchTestimonial" placeholder="Search testimonials..." 
                                    class="w-full pl-8 pr-4 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                <svg class="absolute left-2.5 top-2.5 h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="relative w-full sm:w-auto">
                                <select id="sortTestimonial" class="w-full appearance-none pl-3 pr-8 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-purple-500 focus:border-transparent">
                                    <option value="">Sort by</option>
                                    <option value="name-asc">Name (A-Z)</option>
                                    <option value="name-desc">Name (Z-A)</option>
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
                                    Person
                                </th>
                                <th scope="col" class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden sm:table-cell">
                                    Title
                                </th>
                                <th scope="col" class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell">
                                    Message
                                </th>
                                <th scope="col" class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell">
                                    Date Added
                                </th>
                                <th scope="col" class="px-4 sm:px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200" id="testimonialsTableBody">
                            @foreach($testimonials as $testimonial)
                            <tr class="hover:bg-gray-50 testimonial-row" 
                                data-name="{{ strtolower($testimonial->name) }}" 
                                data-title="{{ strtolower($testimonial->title) }}" 
                                data-message="{{ strtolower($testimonial->message) }}" 
                                data-date="{{ $testimonial->created_at->timestamp }}">
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10">
                                            @if($testimonial->image)
                                            <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('storage/' . $testimonial->image) }}" alt="{{ $testimonial->name }}">
                                            @else
                                            <div class="h-10 w-10 rounded-full bg-purple-100 flex items-center justify-center">
                                                <span class="text-purple-600 font-medium">{{ substr($testimonial->name, 0, 1) }}</span>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $testimonial->name }}</div>
                                            <div class="text-xs sm:hidden text-gray-500">
                                                {{ Str::limit($testimonial->title, 20) }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden sm:table-cell">
                                    {{ $testimonial->title }}
                                </td>
                                <td class="px-4 sm:px-6 py-4 text-sm text-gray-500 hidden md:table-cell">
                                    {{ Str::limit($testimonial->message, 30) }}
                                </td>
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden lg:table-cell">
                                    {{ $testimonial->created_at->format('M d, Y') }}
                                </td>
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex justify-end space-x-2">
                                      
                                        <form action="{{route('testimonial.destroy', $testimonial->id)}}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this testimonial?')" class="text-red-600 hover:text-red-900" title="Delete">
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
                @if($testimonials->isEmpty())
                <div class="px-4 sm:px-6 py-4 text-center text-gray-500">
                    No testimonials found.
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<style>
    .progress-bar {
        height: 4px;
        background-color: #8b5cf6;
        width: 0%;
        transition: width 0.3s ease;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Image handling with compression
    document.getElementById('image').addEventListener('change', async function(e) {
        const file = e.target.files[0];
        const errorElement = document.getElementById('fileImageError');
        const previewContainer = document.getElementById('image-preview');
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
            // Compress image (profile images should be smaller)
            const compressedFile = await compressImage(file, {
                quality: 0.7,
                maxWidth: 500,  // Smaller for testimonial photos
                maxHeight: 500,
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
                    maxWidth: 400,
                    maxHeight: 400
                });
                
                if (moreCompressedFile.size > maxSizeAfterCompression) {
                    errorElement.textContent = 'Image could not be compressed enough. Please try a smaller image.';
                    errorElement.style.display = 'inline';
                    e.target.value = '';
                    return;
                }
                
                // Use the more compressed version
                updateFileInput(e.target, moreCompressedFile);
                showPreview(moreCompressedFile);
            } else {
                // Use the first compressed version
                updateFileInput(e.target, compressedFile);
                showPreview(compressedFile);
            }
            
        } catch (error) {
            console.error('Image compression error:', error);
            errorElement.textContent = 'Error processing image. Please try another one.';
            errorElement.style.display = 'inline';
            e.target.value = '';
        } finally {
            progressContainer.classList.add('hidden');
            submitBtn.disabled = false;
        }
    });

    // Search functionality (same as before)
    const searchInput = document.getElementById('searchTestimonial');
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase();
        const rows = document.querySelectorAll('.testimonial-row');
        
        rows.forEach(row => {
            const name = row.dataset.name;
            const title = row.dataset.title;
            const message = row.dataset.message;
            
            if (name.includes(searchTerm) || 
                title.includes(searchTerm) || 
                message.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });

    // Sorting functionality (same as before)
    const sortSelect = document.getElementById('sortTestimonial');
    
    sortSelect.addEventListener('change', function() {
        if (this.value) {
            const [column, direction] = this.value.split('-');
            sortTestimonialTable(column, direction);
        }
    });

    function sortTestimonialTable(column, direction) {
        const tbody = document.getElementById('testimonialsTableBody');
        const rows = Array.from(tbody.querySelectorAll('.testimonial-row'));
        
        rows.sort((a, b) => {
            let aValue, bValue;
            
            switch(column) {
                case 'name':
                    aValue = a.dataset.name;
                    bValue = b.dataset.name;
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

// Helper function to show preview
function showPreview(file) {
    const reader = new FileReader();
    reader.onload = function(e) {
        const preview = document.getElementById('preview');
        const previewContainer = document.getElementById('image-preview');
        preview.src = e.target.result;
        previewContainer.classList.remove('hidden');
    };
    reader.readAsDataURL(file);
}

// Remove image function
function removeImage() {
    document.getElementById('image-preview').classList.add('hidden');
    document.getElementById('image').value = '';
    document.getElementById('fileImageError').style.display = 'none';
}
</script>
@endsection