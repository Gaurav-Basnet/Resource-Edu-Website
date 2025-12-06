@extends('admin.dashboard')
@section('title', 'Team Members')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col lg:flex-row gap-8">
        <div class="w-full lg:w-1/3 bg-white p-4 sm:p-6 rounded-lg shadow-md">
            <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 sm:mb-6">Add New Team Member</h2>
            <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <!-- Name -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name*</label>
                    <input type="text" name="name" id="name" required
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>

                <!-- Position -->
                <div>
                    <label for="position" class="block text-sm font-medium text-gray-700">Position*</label>
                    <input type="text" name="position" id="position" required
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm">
                </div>

                <!-- Image -->
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Profile Image</label>
                    <div class="flex items-center justify-center w-full">
                        <label for="image" class="flex flex-col w-full h-28 border-2 border-dashed border-gray-300 hover:border-blue-400 hover:bg-blue-50 rounded-md cursor-pointer transition duration-200">
                            <div class="flex flex-col items-center justify-center pt-5">
                                <i class="fas fa-cloud-upload-alt text-xl text-blue-500 mb-1"></i>
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
                        <img id="preview" class="h-28 w-28 rounded-full object-cover border-2 border-blue-200 mx-auto">
                        <button type="button" onclick="removeImage()" class="absolute top-0 right-0 bg-white rounded-full p-1 shadow-md hover:bg-gray-100">
                            <i class="fas fa-times text-red-500 text-xs"></i>
                        </button>
                    </div>
                    <small id="fileImageError" style="color: red; display: none;"></small>
                </div>

                <!-- Bio -->
                <div>
                    <label for="bio" class="block text-sm font-medium text-gray-700">Bio</label>
                    <textarea name="bio" id="bio" rows="3"
                              class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"></textarea>
                </div>

                <!-- Social Links -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div>
                        <label for="facebook" class="block text-sm font-medium text-gray-700">Facebook</label>
                        <input type="url" name="facebook" id="facebook"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                               placeholder="https://facebook.com/username">
                    </div>
                    <div>
                        <label for="instagram" class="block text-sm font-medium text-gray-700">Instagram</label>
                        <input type="url" name="instagram" id="instagram"
                               class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                               placeholder="https://instagram.com/username">
                    </div>
                </div>

                <!-- Email -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email"
                           class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm px-3 py-2 focus:outline-none focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
                           placeholder="member@example.com">
                </div>

                <!-- Submit Button -->
                <div class="flex justify-end pt-4">
                    <button name="submit" type="submit" id="submitBtn"
                            class="px-4 py-2 sm:px-6 sm:py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow transition text-sm sm:text-base">
                        Add Team Member
                    </button>
                </div>
            </form>
        </div>

        <!-- Table Section -->
        <div class="w-full lg:w-2/3">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="px-4 sm:px-6 py-4 border-b border-gray-200 bg-gray-50">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                        <h3 class="text-lg font-medium text-gray-900">Team Members</h3>
                        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-2 w-full sm:w-auto">
                            <div class="relative w-full">
                                <input type="text" id="searchInput" placeholder="Search team members..." 
                                    class="w-full pl-8 pr-4 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                <svg class="absolute left-2.5 top-2.5 h-4 w-4 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <div class="relative w-full sm:w-auto">
                                <select id="sortSelect" class="w-full appearance-none pl-3 pr-8 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-transparent">
                                    <option value="">Sort by</option>
                                    <option value="name-asc">Name (A-Z)</option>
                                    <option value="name-desc">Name (Z-A)</option>
                                    <option value="position-asc">Position (A-Z)</option>
                                    <option value="position-desc">Position (Z-A)</option>
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
                                    Member
                                </th>
                                <th scope="col" class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden sm:table-cell">
                                    Position
                                </th>
                                <th scope="col" class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell">
                                    Contact
                                </th>
                                <th scope="col" class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden lg:table-cell">
                                    Thumbnail
                                </th>
                                <th scope="col" class="px-4 sm:px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200" id="teamTableBody">
                            @foreach($team as $member)
                            <tr class="hover:bg-gray-50 team-row" 
                                data-name="{{ strtolower($member->name) }}" 
                                data-position="{{ strtolower($member->position) }}"
                                data-email="{{ strtolower($member->email ?? '') }}"
                                data-bio="{{ strtolower($member->bio ?? '') }}">
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10 sm:h-12 sm:w-12">
                                            @if($member->image)
                                            <img class="h-10 w-10 sm:h-12 sm:w-12 rounded-full object-cover" src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}">
                                            @else
                                            <div class="h-10 w-10 sm:h-12 sm:w-12 rounded-full bg-gray-200 flex items-center justify-center">
                                                <span class="text-gray-500 text-xs">No Image</span>
                                            </div>
                                            @endif
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ $member->name }}</div>
                                            <div class="text-sm text-gray-500 sm:hidden">{{ $member->position }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap hidden sm:table-cell">
                                    <div class="text-sm text-gray-900">{{ $member->position }}</div>
                                </td>
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap hidden md:table-cell">
                                    <div class="text-sm text-gray-900">{{ $member->email ?? 'N/A' }}</div>
                                </td>
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap hidden lg:table-cell">
                                    @if($member->image)
                                    <img class="h-10 w-10 rounded-full object-cover" src="{{ asset('storage/' . $member->image) }}" alt="{{ $member->name }}">
                                    @else
                                    <span class="text-gray-500 text-sm">No Image</span>
                                    @endif
                                </td>
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex justify-end space-x-2">
                                     
                                        <form action="{{ route('team.destroy', $member->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this team member?')">
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
                @if($team->isEmpty())
                <div class="px-4 py-4 text-center text-gray-500">
                    No team members found.
                </div>
                @endif
            </div>
        </div>
    </div>
</div>

<style>
    .progress-bar {
        height: 4px;
        background-color: #3b82f6;
        width: 0%;
        transition: width 0.3s ease;
    }
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Search functionality
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', function() {
        const searchTerm = this.value.toLowerCase().trim();
        const rows = document.querySelectorAll('.team-row');
        
        if (searchTerm === '') {
            rows.forEach(row => row.style.display = '');
            return;
        }
        
        rows.forEach(row => {
            const name = row.dataset.name;
            const position = row.dataset.position;
            const email = row.dataset.email || '';
            const bio = row.dataset.bio || '';
            
            if (name.includes(searchTerm) || 
                position.includes(searchTerm) ||
                email.includes(searchTerm) ||
                bio.includes(searchTerm)) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        });
    });

    // Sorting functionality
    const sortSelect = document.getElementById('sortSelect');
    sortSelect.addEventListener('change', function() {
        const [field, direction] = this.value.split('-');
        if (!field) return;
        
        const tbody = document.getElementById('teamTableBody');
        const rows = Array.from(tbody.querySelectorAll('.team-row'));
        
        rows.sort((a, b) => {
            const aValue = a.dataset[field] || '';
            const bValue = b.dataset[field] || '';
            
            if (aValue < bValue) return direction === 'asc' ? -1 : 1;
            if (aValue > bValue) return direction === 'asc' ? 1 : -1;
            return 0;
        });
        
        // Rebuild the table
        rows.forEach(row => tbody.appendChild(row));
    });

    // Image handling with compression (existing code)
    document.getElementById('image').addEventListener('change', async function(e) {
        const file = e.target.files[0];
        const errorElement = document.getElementById('fileImageError');
        const previewContainer = document.getElementById('image-preview');
        const progressContainer = document.querySelector('.progress-bar-container');
        const progressBar = document.querySelector('.progress-bar');
        const submitBtn = document.getElementById('submitBtn');
        
        errorElement.style.display = 'none';
        previewContainer.classList.add('hidden');
        
        if (!file) return;
        
        const validTypes = ['image/jpeg', 'image/png'];
        if (!validTypes.includes(file.type)) {
            errorElement.textContent = 'Only JPG and PNG images are allowed.';
            errorElement.style.display = 'inline';
            e.target.value = '';
            return;
        }
        
        const maxSizeBeforeCompression = 10 * 1024 * 1024;
        if (file.size > maxSizeBeforeCompression) {
            errorElement.textContent = 'File size must be less than 10MB before compression.';
            errorElement.style.display = 'inline';
            e.target.value = '';
            return;
        }
        
        progressContainer.classList.remove('hidden');
        submitBtn.disabled = true;
        
        try {
            const compressedFile = await compressImage(file, {
                quality: 0.7,
                maxWidth: 500,
                maxHeight: 500,
                progress: (percent) => {
                    progressBar.style.width = `${percent}%`;
                }
            });
            
            const maxSizeAfterCompression = 200 * 1024;
            if (compressedFile.size > maxSizeAfterCompression) {
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
                
                updateFileInput(e.target, moreCompressedFile);
                showPreview(moreCompressedFile);
            } else {
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
});

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
                
                ctx.drawImage(img, 0, 0, width, height);
                
                if (options.progress) {
                    options.progress(50);
                }
                
                canvas.toBlob(function(blob) {
                    if (options.progress) {
                        options.progress(100);
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

function updateFileInput(inputElement, file) {
    const dataTransfer = new DataTransfer();
    dataTransfer.items.add(file);
    inputElement.files = dataTransfer.files;
}

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

function removeImage() {
    document.getElementById('image-preview').classList.add('hidden');
    document.getElementById('image').value = '';
    document.getElementById('fileImageError').style.display = 'none';
}
</script>
@endsection