@extends('Auth.layout')
@section('title', 'Resource')
@section('content')
<div class="container max-w-full px-6  lg:px-8 py-8">
    <!-- Page Header -->
    <div class="mb-8">
        <h1 class="text-4xl font-bold text-gray-800 mb-2">Resource Center</h1>
        <p class="text-lg text-gray-600">Access essential materials and downloads</p>
        
        <!-- Search and Filter Row -->
        <div class="mt-4 mb-6 flex flex-col md:flex-row gap-4">
            <!-- Search Box -->
            <div class="w-full md:w-1/3">
                <input type="text" id="resourceSearch" placeholder="Search PDFs by name..." 
                       class="px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 w-full">
            </div>
            
            <!-- Category Filter -->
            <div class="w-full md:w-1/4">
                <select id="categoryFilter" class="px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-blue-500 focus:border-blue-500 w-full">
                    <option value="all">All Categories</option>
                    @foreach($categories as $category)
                        <option value="{{ $category }}">{{ $category }}</option>
                    @endforeach
                </select>
            </div>
        </div>
    </div>

    <!-- All Resources -->
    <div class="mb-12">
        <div class="bg-white shadow-sm rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Name</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Category</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Type</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Date Added</th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
                        </tr>
                    </thead>
                    <tbody id="resourceTableBody" class="bg-white divide-y divide-gray-200">
                        @foreach($resources->take(100) as $resource)
                        <tr class="hover:bg-gray-50" data-category="{{ $resource->category }}">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                    </svg>
                                    <span class="text-sm font-medium text-gray-900">{{$resource->pdf_name}}</span>
                                </div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$resource->category}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">PDF</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{$resource->created_at}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                               <a href="{{$resource->link}}" 
                                class="text-blue-600 hover:text-blue-900 relative"
                                onclick="showLoader(this)">
                                View
                                <span class="absolute -right-5 top-1/2 -translate-y-1/2">
                                    <svg class="loader animate-spin hidden h-4 w-4 text-blue-600" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                                    </svg>
                                </span>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('resourceSearch');
    const categoryFilter = document.getElementById('categoryFilter');
    const tableBody = document.getElementById('resourceTableBody');
    const rows = tableBody.getElementsByTagName('tr');
    
    function filterResources() {
        const searchTerm = searchInput.value.toLowerCase();
        const selectedCategory = categoryFilter.value;
        
        for (let row of rows) {
            const nameCell = row.cells[0]; // Name is in the first column
            const categoryCell = row.cells[1]; // Category is in the second column
            const nameText = nameCell.textContent.toLowerCase();
            const categoryText = row.dataset.category; // Using data attribute
            
            const nameMatch = nameText.includes(searchTerm);
            const categoryMatch = selectedCategory === 'all' || categoryText === selectedCategory;
            
            if (nameMatch && categoryMatch) {
                row.style.display = '';
            } else {
                row.style.display = 'none';
            }
        }
    }
    
    searchInput.addEventListener('input', filterResources);
    categoryFilter.addEventListener('change', filterResources);
});

function showLoader(element) {
    // Find the loader within the clicked link
    const loader = element.querySelector('.loader');
    
    // Show the loader
    loader.classList.remove('hidden');

    // Prevent default link behavior
    event.preventDefault();

    // Redirect after 500ms
    setTimeout(() => {
        window.location = element.href;
    }, 500);

    // Hide loader after 2 seconds (optional: adjust as needed)
    setTimeout(() => {
        loader.classList.add('hidden');
    }, 2000);
}
</script>
@endsection