
@extends('admin.dashboard')
@section('title', 'BlogPost')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Post Form</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .fade-in {
            animation: fadeIn 0.3s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }
        .slide-down {
            animation: slideDown 0.3s ease-out;
        }
        @keyframes slideDown {
            from { max-height: 0; opacity: 0; }
            to { max-height: 1000px; opacity: 1; }
        }
        .truncate-multiline {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        .progress-bar {
            height: 4px;
            background-color: #4f46e5;
            width: 0%;
            transition: width 0.3s ease;
        }
    </style>
</head>
<body class="bg-gray-50 min-h-screen p-4">
    <div class="max-w-6xl mx-auto space-y-8">
        <!-- Header with Toggle Button -->
        <div class="flex justify-between items-center">
            <h1 class="text-2xl font-bold text-gray-800">Blog Management</h1>
            <button id="toggleFormBtn" 
                    class="px-4 py-2 bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white rounded-md shadow-sm flex items-center transition-all duration-200 transform hover:scale-105">
                <i class="fas fa-plus mr-2"></i> New Post
            </button>
        </div>

        <!-- Blog Post Form (Initially Hidden) -->
        <div id="blogFormContainer" class="hidden bg-white rounded-xl shadow-md overflow-hidden fade-in">
            <div class="p-6 border-b border-gray-100 bg-gradient-to-r from-purple-50 to-indigo-50">
                <div class="flex justify-between items-center">
                    <div>
                        <h2 class="text-xl font-bold text-gray-800">Create New Blog Post</h2>
                        <p class="text-sm text-gray-500 mt-1">Fill out the form to publish a new post</p>
                    </div>
                    <button id="closeFormBtn" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times"></i>
                    </button>
                </div>
            </div>

            <!-- Your original form with backend intact -->
            <form id="blogForm" class="space-y-4 p-6" action="{{ route('blog.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <!-- Post Title -->
                <div>
                    <label for="title" class="block text-sm font-medium text-gray-700 mb-1">Post Title <span class="text-red-500">*</span></label>
                    <input type="text" id="title" name="title" required
                        class="w-full px-3 py-2 text-sm rounded-md border border-gray-300 focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200"
                        placeholder="e.g. 10 Essential Tips for International Students">
                </div>

                <!-- Featured Image -->
                <div>
                    <label for="featured_image" class="block text-sm font-medium text-gray-700 mb-1">Featured Image <span class="text-red-500">*</span></label>
                    <div class="flex items-center justify-center w-full">
                        <label for="featured_image" class="flex flex-col w-full h-28 border-2 border-dashed border-gray-300 hover:border-purple-400 hover:bg-purple-50 rounded-md cursor-pointer transition duration-200">
                            <div class="flex flex-col items-center justify-center pt-5">
                                <i class="fas fa-cloud-upload-alt text-xl text-purple-500 mb-1"></i>
                                <p class="text-xs text-gray-500">Click to upload or drag and drop</p>
                                <p class="text-2xs text-gray-400 mt-1">PNG, JPG up to 5MB</p>
                            </div>
                            <input type="file" id="featured_image" name="featured_image" accept="image/jpeg,image/png" required class="opacity-0 absolute">
                        </label>
                    </div>
                    <div class="progress-bar-container hidden mt-1">
                        <div class="progress-bar"></div>
                        <p class="text-xs text-gray-500 mt-1">Compressing image...</p>
                    </div>
                    <div id="image-preview" class="hidden mt-2 relative">
                        <img id="preview" class="h-28 w-full rounded-md object-cover border border-gray-200">
                        <button type="button" onclick="removeImage()" class="absolute top-1 right-1 bg-white rounded-full p-1 shadow-md hover:bg-gray-100">
                            <i class="fas fa-times text-red-500 text-xs"></i>
                        </button>
                    </div>
                    <small id="fileImageError" style="color: red; display: none;"></small>
                </div>

                <!-- Category -->
                <div>
                    <label for="blog_category" class="block text-sm font-medium text-gray-700 mb-1">Category <span class="text-red-500">*</span></label>
                    <select id="blog_category" name="category" required
                        class="w-full px-3 py-2 text-sm rounded-md border border-gray-300 focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200">
                        <option value="">Select a category</option>
                        <option value="IELTS">IELTS</option>
                        <option value="Scholarships">Scholarships</option>
                        <option value="Visa Guide">Visa Guide</option>
                        <option value="Student Life">Student Life</option>
                        <option value="Study Destinations">Study Destinations</option>
                    </select>
                </div>

                <!-- Content -->
                <div>
                    <label for="content" class="block text-sm font-medium text-gray-700 mb-1">Post Content <span class="text-red-500">*</span></label>
                    <textarea id="content" name="content" rows="6" required
                        class="w-full px-3 py-2 text-sm rounded-md border border-gray-300 focus:ring-2 focus:ring-purple-500 focus:border-transparent transition duration-200"
                        placeholder="Write your blog post content here..."></textarea>
                </div>

                <!-- Publish Date -->
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Publish Date</label>
                    <div class="w-full px-3 py-2 text-sm rounded-md bg-gray-50 border border-gray-200 text-gray-600">
                        <i class="far fa-calendar-alt mr-1 text-xs"></i> {{ now()->format('M j, Y') }}
                    </div>
                    <input type="hidden" name="publish_date" value="{{ now()->format('Y-m-d') }}">
                </div>

                <!-- Checkbox Options -->
                <div class="grid grid-cols-1 gap-3">
                    <div class="flex items-center p-2 rounded-md hover:bg-gray-50 transition duration-200">
                        <input type="checkbox" id="is_popular" name="is_popular"
                            class="h-4 w-4 text-purple-500 focus:ring-purple-400 border-gray-300 rounded transition duration-200">
                        <label for="is_popular" class="ml-2 block text-sm text-gray-700">
                            <span>Mark as Popular Post</span>
                            <span class="text-xs text-gray-400 block">This post will be highlighted in popular sections</span>
                        </label>
                    </div>
                    <div class="flex items-center p-2 rounded-md hover:bg-gray-50 transition duration-200">
                        <input type="checkbox" id="is_featured" name="is_featured"
                            class="h-4 w-4 text-purple-500 focus:ring-purple-400 border-gray-300 rounded transition duration-200">
                        <label for="is_featured" class="ml-2 block text-sm text-gray-700">
                            <span>Mark as Featured Post</span>
                            <span class="text-xs text-gray-400 block">This post will appear in featured sections</span>
                        </label>
                    </div>
                </div>

                <!-- Form Actions -->
                <div class="flex flex-col sm:flex-row justify-end gap-3 pt-6 border-t border-gray-100">
                    <button type="button" onclick="resetForm()"
                        class="px-4 py-2 text-sm border border-gray-300 rounded-md text-gray-700 hover:bg-gray-50 flex items-center justify-center transition duration-200 transform hover:scale-105">
                        <i class="fas fa-redo mr-1 text-xs"></i> Reset
                    </button>
                    <button type="submit" id="submitBtn"
                        class="px-4 py-2 text-sm bg-gradient-to-r from-purple-600 to-indigo-600 hover:from-purple-700 hover:to-indigo-700 text-white font-medium rounded-md shadow-sm flex items-center justify-center transition duration-200 transform hover:scale-105">
                        <i class="fas fa-paper-plane mr-1 text-xs"></i> Publish
                    </button>
                </div>
            </form>
        </div>

<div id="blogTableContainer" class="bg-white rounded-lg shadow overflow-hidden">

    <div class="p-3 sm:p-4 border-b border-gray-200 bg-gradient-to-r from-purple-50 to-indigo-50">
        <h2 class="text-base sm:text-lg font-semibold text-gray-800">Published Blog Posts</h2>
    </div>
    
    <!-- Mobile Cards View (shown on small screens) -->
    <div class="block sm:hidden divide-y divide-gray-200 overflow-y-auto" style="max-height: 500px;">
        @foreach($blogs as $blog)
        <div class="p-3 hover:bg-gray-50 transition duration-150">
            <div class="flex justify-between items-start">
                <div class="flex items-center space-x-3">
                    <img class="h-10 w-10 rounded-full object-cover border border-purple-100" 
                         src="{{ asset('storage/'. $blog->featured_image) }}" 
                         alt="{{ $blog->title }}">
                    <div>
                        <h3 class="text-sm font-medium text-gray-900 line-clamp-1">{{ $blog->title }}</h3>
                        <span class="px-2 py-0.5 bg-purple-100 text-purple-800 rounded-full text-xs">
                            {{ $blog->category }}
                        </span>
                    </div>
                </div>
                <div class="flex space-x-2">
           
                            <form action="{{route('posts.destroy', $blog->id)}}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        onclick="return confirm('Are you sure you want to delete this post?')"
                                        class="text-red-600 hover:text-red-900 transition duration-200" title="Delete">
                                    <i class="fas fa-trash text-sm"></i>
                                </button>
                            </form>
                </div>
            </div>
            
            <div class="mt-2 text-xs text-gray-500 line-clamp-2">
                {{ $blog->content }}
            </div>
            
            <div class="mt-2 flex flex-wrap items-center justify-between gap-2">
                <div class="text-xs text-gray-500">
                    <i class="far fa-calendar-alt mr-1"></i>
                    {{ \Carbon\Carbon::parse($blog->publish_date)->format('M d, Y') }}
                </div>
                <div class="flex space-x-2">
                    @if($blog->is_popular)
                        <span class="px-1.5 py-0.5 text-xs rounded-full bg-green-100 text-green-800">Popular</span>
                    @endif
                    @if($blog->is_featured)
                        <span class="px-1.5 py-0.5 text-xs rounded-full bg-blue-100 text-blue-800">Featured</span>
                    @endif
                </div>
            </div>
        </div>
        @endforeach
    </div>
    
    <!-- Table View (shown on larger screens) -->
    <div class="hidden sm:block overflow-x-auto">
        <div class="overflow-y-auto" style="max-height: 450px;">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50 sticky top-0 z-10">
                    <tr>
                        <th class="px-3 py-2 sm:px-4 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">ID</th>
                        <th class="px-3 py-2 sm:px-4 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Title</th>
                        <th class="px-3 py-2 sm:px-4 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Image</th>
                        <th class="px-3 py-2 sm:px-4 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                        <th class="px-3 py-2 sm:px-4 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Content</th>
                        <th class="px-3 py-2 sm:px-4 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Published</th>
                        <th class="px-3 py-2 sm:px-4 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Popular</th>
                        <th class="px-3 py-2 sm:px-4 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Featured</th>
                        <th class="px-3 py-2 sm:px-4 sm:py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($blogs as $blog)
                    <tr class="hover:bg-gray-50 transition duration-150">
                        <td class="px-3 py-2 sm:px-4 sm:py-3 whitespace-nowrap text-xs sm:text-sm text-gray-500">{{ $blog->id }}</td>
                        <td class="px-3 py-2 sm:px-4 sm:py-3 whitespace-nowrap text-xs sm:text-sm font-medium text-gray-900">{{ $blog->title }}</td>
                        <td class="px-3 py-2 sm:px-4 sm:py-3 whitespace-nowrap">
                            <img class="h-8 w-8 sm:h-10 sm:w-10 rounded-full object-cover border border-purple-100" 
                                 src="{{ asset('storage/'. $blog->featured_image) }}" 
                                 alt="{{ $blog->title }}">
                        </td>
                        <td class="px-3 py-2 sm:px-4 sm:py-3 whitespace-nowrap text-xs sm:text-sm text-gray-500">
                            <span class="px-2 py-0.5 sm:py-1 bg-purple-100 text-purple-800 rounded-full text-xs">{{ $blog->category }}</span>
                        </td>
                        <td class="px-3 py-2 sm:px-4 sm:py-3 text-xs sm:text-sm text-gray-500 max-w-xs line-clamp-2">{{ $blog->content }}</td>
                        <td class="px-3 py-2 sm:px-4 sm:py-3 whitespace-nowrap text-xs sm:text-sm text-gray-500">{{ \Carbon\Carbon::parse($blog->publish_date)->format('M d, Y') }}</td>
                        <td class="px-3 py-2 sm:px-4 sm:py-3 whitespace-nowrap text-xs sm:text-sm text-gray-500">
                            @if($blog->is_popular)
                                <span class="px-1.5 sm:px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Yes</span>
                            @else
                                <span class="px-1.5 sm:px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">No</span>
                            @endif
                        </td>
                        <td class="px-3 py-2 sm:px-4 sm:py-3 whitespace-nowrap text-xs sm:text-sm text-gray-500">
                            @if($blog->is_featured)
                                <span class="px-1.5 sm:px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">Yes</span>
                            @else
                                <span class="px-1.5 sm:px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-gray-100 text-gray-800">No</span>
                            @endif
                        </td>
                        <td class="px-3 py-2 sm:px-4 sm:py-3 whitespace-nowrap text-xs sm:text-sm font-medium space-x-1 sm:space-x-2">
                        
                            <form action="{{route('posts.destroy', $blog->id)}}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" 
                                        onclick="return confirm('Are you sure you want to delete this post?')"
                                        class="text-red-600 hover:text-red-900 transition duration-200" title="Delete">
                                    <i class="fas fa-trash text-sm"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>


    </div>
    
    <div class="px-3 sm:px-4 py-2 sm:py-3 bg-gray-50 border-t border-gray-200 text-right">
        <p class="text-xs text-gray-500">Showing {{ $blogs->count() }} posts</p>
    </div>
</div>
    </div>

    <script>
        // Toggle form visibility and table
        document.getElementById('toggleFormBtn').addEventListener('click', function() {
            const formContainer = document.getElementById('blogFormContainer');
            const tableContainer = document.getElementById('blogTableContainer');
            
            formContainer.classList.toggle('hidden');
            tableContainer.classList.toggle('hidden');
            
            this.innerHTML = formContainer.classList.contains('hidden') ? 
                '<i class="fas fa-plus mr-2"></i> New Post' : 
                '<i class="fas fa-table mr-2"></i> Show Table';
            
            // Add animation classes
            if (!formContainer.classList.contains('hidden')) {
                formContainer.classList.add('fade-in');
                setTimeout(() => formContainer.classList.remove('fade-in'), 300);
            } else {
                tableContainer.classList.add('slide-down');
                setTimeout(() => tableContainer.classList.remove('slide-down'), 300);
            }
        });

        // Close form button
        document.getElementById('closeFormBtn').addEventListener('click', function() {
            document.getElementById('blogFormContainer').classList.add('hidden');
            document.getElementById('blogTableContainer').classList.remove('hidden');
            document.getElementById('toggleFormBtn').innerHTML = '<i class="fas fa-plus mr-2"></i> New Post';
        });

        // Image handling with compression
        document.getElementById('featured_image').addEventListener('change', async function(e) {
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
            
            // Validate file size (5MB limit before compression)
            const maxSizeBeforeCompression = 10 * 1024 * 1024; // 5MB
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
                // Compress image
                const compressedFile = await compressImage(file, {
                    quality: 0.7,
                    maxWidth: 1200,
                    maxHeight: 800,
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
                        maxWidth: 800,
                        maxHeight: 600
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
            document.getElementById('featured_image').value = '';
            document.getElementById('fileImageError').style.display = 'none';
        }

        // Form reset function
        function resetForm() {
            document.getElementById('blogForm').reset();
            document.getElementById('image-preview').classList.add('hidden');
            document.getElementById('fileImageError').style.display = 'none';
            showToast('Form has been reset', 'success');
        }

        // Toast notification function
        function showToast(message, type = 'info') {
            const toast = document.createElement('div');
            toast.className = `fixed top-4 right-4 px-4 py-2 rounded-md shadow-md text-white ${
                type === 'success' ? 'bg-green-500' : 
                type === 'error' ? 'bg-red-500' : 'bg-blue-500'
            }`;
            toast.innerHTML = `
                <div class="flex items-center">
                    <i class="fas ${type === 'success' ? 'fa-check-circle' : type === 'error' ? 'fa-times-circle' : 'fa-info-circle'} mr-2"></i>
                    <span>${message}</span>
                </div>
            `;
            document.body.appendChild(toast);
            
            setTimeout(() => {
                toast.classList.add('opacity-0', 'transition-opacity', 'duration-300');
                setTimeout(() => toast.remove(), 300);
            }, 3000);
        }

        // Show success toast after form submission if there's a success message
        @if(session('success'))
            showToast('{{ session('success') }}', 'success');
        @endif
    </script>
</body>
</html>
@endsection