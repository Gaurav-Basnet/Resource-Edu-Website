@extends('admin.dashboard')
@section('title', 'IELTS Mock Tests')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center mb-6 gap-4">
        <h2 class="text-2xl font-bold">IELTS Mock Test Questions</h2>
        <div class="flex gap-2">
            <button class="md:hidden bg-gray-200 text-gray-800 px-4 py-2 rounded hover:bg-gray-300 whitespace-nowrap" onclick="document.getElementById('uploadModal').classList.remove('hidden')">
                Upload Excel
            </button>
        </div>
    </div>

    <!-- Upload Modal (Mobile Only) -->
    <div id="uploadModal" class="hidden fixed inset-0 bg-gray-600 bg-opacity-50 overflow-y-auto h-full w-full md:hidden">
        <div class="relative top-20 mx-auto p-5 border w-96 shadow-lg rounded-md bg-white">
            <div class="mt-3 text-center">
                <h3 class="text-lg leading-6 font-medium text-gray-900">Upload IELTS Mock Test Excel File</h3>
                <div class="mt-2 px-7 py-3">
                    <form action="{{ route('mock.uploadExcel') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label class="block mb-1 font-medium">Choose Excel File (.xlsx)</label>
                            <input type="file" name="excel_file" class="border p-2 w-full" required>
                            @error('excel_file')
                                <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="flex justify-between mt-4">
                            <button type="button" class="bg-gray-300 text-gray-800 px-4 py-2 rounded hover:bg-gray-400" 
                                onclick="document.getElementById('uploadModal').classList.add('hidden')">
                                Cancel
                            </button>
                            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Upload Form (Desktop Only) -->
    <div class="hidden md:block bg-white shadow rounded-lg p-6 mb-6">
        <h3 class="text-lg font-medium text-gray-900 mb-4">Upload IELTS Mock Test Excel File</h3>
        <form action="{{ route('mock.uploadExcel') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
            @csrf
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Choose Excel File (.xlsx)</label>
                <input type="file" name="excel_file" class="border p-2 w-full max-w-md" required>
                @error('excel_file')
                    <div class="text-red-600 text-sm mt-1">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Upload File</button>
        </form>
    </div>

    <!-- Search and Filter Section -->
    <div class="bg-white shadow rounded-lg p-4 mb-6">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            <div class="md:col-span-2">
                <label class="block text-sm font-medium text-gray-700 mb-1">Search</label>
                <input type="text" id="searchInput" placeholder="Search questions..." 
                    class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>
     
            <div>
                <label class="block text-sm font-medium text-gray-700 mb-1">Sort By</label>
                <select id="sortFilter" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="date_newest">Newest First</option>
                    <option value="date_oldest">Oldest First</option>
                    <option value="section_asc">Section (A-Z)</option>
                    <option value="section_desc">Section (Z-A)</option>
                </select>
            </div>
        </div>
    </div>

    <!-- Questions Table - Desktop View -->
    <div class="bg-white shadow rounded-lg overflow-hidden hidden md:block">
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Section
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Question
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Options
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Correct Answer
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Date Added
                        </th>
                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody id="questionTableBody" class="bg-white divide-y divide-gray-200">
                    @foreach($questions as $question)
                    <tr class="hover:bg-gray-50 transition-colors duration-150" data-created-at="{{ $question->created_at->timestamp }}" data-section="{{ $question->section }}" data-section-first-letter="{{ strtoupper(substr($question->section, 0, 1)) }}">
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-3 py-1 inline-flex text-xs leading-5 font-semibold rounded-full 
                                {{ $question->section === 'Ielts Academic' ? 'bg-blue-100 text-blue-800' : '' }}
                                {{ $question->section === 'Ielts General' ? 'bg-green-100 text-green-800' : '' }}
                                {{ $question->section === 'UKVI' ? 'bg-yellow-100 text-yellow-800' : '' }}
                                {{ $question->section === 'A1_B1' ? 'bg-purple-100 text-purple-800' : '' }}
                                {{ $question->section === 'GK' ? 'bg-red-100 text-red-800' : '' }}
                                {{ $question->section === 'English' ? 'bg-indigo-100 text-indigo-800' : '' }}">
                                {{ str_replace('_', ' ', $question->section) }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-gray-900 max-w-xs truncate">{{ $question->question_text }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <div class="text-sm text-gray-700 space-y-1">
                                <div><span class="font-medium">A:</span> {{ Str::limit($question->option_a, 30) }}</div>
                                <div><span class="font-medium">B:</span> {{ Str::limit($question->option_b, 30) }}</div>
                                <div><span class="font-medium">C:</span> {{ Str::limit($question->option_c, 30) }}</div>
                                <div><span class="font-medium">D:</span> {{ Str::limit($question->option_d, 30) }}</div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span class="px-2 py-1 inline-flex text-xs leading-5 font-bold rounded bg-green-100 text-green-800">
                                {{ $question->correct_option }}: 
                                @if($question->correct_option === 'A') {{ Str::limit($question->option_a, 20) }}
                                @elseif($question->correct_option === 'B') {{ Str::limit($question->option_b, 20) }}
                                @elseif($question->correct_option === 'C') {{ Str::limit($question->option_c, 20) }}
                                @elseif($question->correct_option === 'D') {{ Str::limit($question->option_d, 20) }}
                                @endif
                            </span>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                            {{ $question->created_at->format('d M Y') }}
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                            <div class="flex space-x-2">
                                <span class="text-gray-300">|</span>
                                <form action="{{route('mock.destroy', $question->id)}}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:text-red-900 hover:underline" 
                                        onclick="return confirm('Are you sure you want to delete this question?')">
                                        Delete
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

    <!-- Questions Cards - Mobile View -->
    <div class="grid grid-cols-1 gap-4 md:hidden" id="mobileQuestionsContainer">
        @foreach($questions as $question)
        <div class="bg-white shadow rounded-lg p-4" data-created-at="{{ $question->created_at->timestamp }}" data-section="{{ $question->section }}" data-section-first-letter="{{ strtoupper(substr($question->section, 0, 1)) }}">
            <div class="flex justify-between items-start mb-2">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full 
                    {{ $question->section === 'Ielts Academic' ? 'bg-blue-100 text-blue-800' : '' }}
                    {{ $question->section === 'Ielts General' ? 'bg-green-100 text-green-800' : '' }}
                    {{ $question->section === 'UKVI' ? 'bg-yellow-100 text-yellow-800' : '' }}
                    {{ $question->section === 'A1_B1' ? 'bg-purple-100 text-purple-800' : '' }}
                    {{ $question->section === 'GK' ? 'bg-red-100 text-red-800' : '' }}
                    {{ $question->section === 'English' ? 'bg-indigo-100 text-indigo-800' : '' }}">
                    {{ str_replace('_', ' ', $question->section) }}
                </span>
                <span class="text-xs text-gray-500">{{ $question->created_at->format('M d, Y') }}</span>
            </div>
            
            <div class="text-sm font-medium text-gray-900 mb-3">{{ $question->question_text }}</div>
            
            <div class="text-sm text-gray-500 space-y-1 mb-2">
                <div>A: {{ $question->option_a }}</div>
                <div>B: {{ $question->option_b }}</div>
                <div>C: {{ $question->option_c }}</div>
                <div>D: {{ $question->option_d }}</div>
            </div>
            
            <div class="text-sm font-bold text-green-600 mb-3">
                Correct: {{ $question->correct_option }} - 
                @if($question->correct_option === 'A') {{ $question->option_a }}
                @elseif($question->correct_option === 'B') {{ $question->option_b }}
                @elseif($question->correct_option === 'C') {{ $question->option_c }}
                @elseif($question->correct_option === 'D') {{ $question->option_d }}
                @endif
            </div>
            
            <div class="flex justify-end space-x-2 text-sm">
                <a href="#" class="text-blue-600 hover:text-blue-900">Edit</a>
                <span class="text-gray-400">|</span>
                <form action="#" method="POST" class="inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure?')">Delete</button>
                </form>
            </div>
        </div>
        @endforeach
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('searchInput');
    const sortFilter = document.getElementById('sortFilter');
    
    // Search functionality with debounce
    let searchTimeout;
    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimeout);
        searchTimeout = setTimeout(filterAndSortQuestions, 300);
    });
    
    sortFilter.addEventListener('change', filterAndSortQuestions);
    
    function filterAndSortQuestions() {
        const searchTerm = searchInput.value.toLowerCase();
        const sortValue = sortFilter.value;
        
        // Filter and sort desktop table
        const rows = Array.from(document.querySelectorAll('#questionTableBody tr'));
        filterAndSortElements(rows, searchTerm, sortValue, '#questionTableBody');
        
        // Filter and sort mobile cards
        const cards = Array.from(document.querySelectorAll('#mobileQuestionsContainer > div.bg-white'));
        filterAndSortElements(cards, searchTerm, sortValue, '#mobileQuestionsContainer');
    }
    
    function filterAndSortElements(elements, searchTerm, sortValue, containerSelector) {
        // Filter elements
        const filteredElements = elements.filter(element => {
            const questionElement = element.querySelector('.text-sm.font-medium');
            const questionText = questionElement ? questionElement.textContent.toLowerCase() : '';
            
            return questionText.includes(searchTerm);
        });
        
        // Sort elements
        filteredElements.sort((a, b) => {
            const aTimestamp = parseInt(a.dataset.createdAt);
            const bTimestamp = parseInt(b.dataset.createdAt);
            const aFirstLetter = a.dataset.sectionFirstLetter;
            const bFirstLetter = b.dataset.sectionFirstLetter;
            
            switch(sortValue) {
                case 'date_newest':
                    return bTimestamp - aTimestamp;
                case 'date_oldest':
                    return aTimestamp - bTimestamp;
                case 'section_asc':
                    return aFirstLetter.localeCompare(bFirstLetter) || aTimestamp - bTimestamp;
                case 'section_desc':
                    return bFirstLetter.localeCompare(aFirstLetter) || aTimestamp - bTimestamp;
                default:
                    return 0;
            }
        });
        
        // Hide all elements first
        elements.forEach(el => el.style.display = 'none');
        
        // Show filtered and sorted elements
        const container = document.querySelector(containerSelector);
        filteredElements.forEach(el => {
            container.appendChild(el);
            el.style.display = '';
        });
    }
    
    // Initialize with default sorting
    filterAndSortQuestions();
});
</script>

<style>
@media (max-width: 767px) {
    .hidden-mobile {
        display: none;
    }
}

/* Improved hover effects for interactive elements */
a:hover, button:hover {
    transition: color 0.2s ease-in-out;
}

/* Better table row hover effect */
tr.hover\:bg-gray-50:hover {
    background-color: #f9fafb;
}

/* Card styling for mobile */
.bg-white.shadow.rounded-lg {
    transition: transform 0.2s, box-shadow 0.2s;
}
.bg-white.shadow.rounded-lg:hover {
    transform: translateY(-2px);
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
}
</style>
@endsection