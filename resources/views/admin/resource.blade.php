@extends('admin.dashboard')
@section('title', 'BlogPost')

@section('content')
<div class="container mx-auto px-4 py-8">
    <div class="flex flex-col lg:flex-row gap-6">
        <!-- Form Section -->
        <div class="w-full lg:w-1/3 bg-white p-4 sm:p-6 rounded-lg shadow-md">
            <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4 sm:mb-6">Add New Resource</h2>
            <form id="resourceForm" action="{{ route('resources.store') }}" method="POST" enctype="multipart/form-data" class="space-y-4">
                @csrf
                <div>
                    <label for="pdf_name" class="block text-sm font-medium text-gray-700">PDF Name*</label>
                    <input type="text" name="pdf_name" id="pdf_name" required
                        class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                </div>

                <div>
                    <label for="link" class="block text-sm font-medium text-gray-700">PDF Link*</label>
                    <input type="text" name="link" id="link" required
                        class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                </div>

                <div>
                    <label for="resource_category" class="block text-sm font-medium text-gray-700">Category*</label>
                    <select name="category" id="resource_category" required
                        class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                        <option value="">-- Select Category --</option>
                        <option value="IELTS Academic">IELTS Academic</option>
                        <option value="IELTS General">IELTS General</option>
                        <option value="IELTS UKVI">IELTS UKVI</option>
                        <option value="IELTS A1/B1">LifeSkill A1/B1</option>
                        <option value="General">General</option>
                        <option value="English">English</option>
                    </select>
                </div>

                <div>
                    <label for="section" class="block text-sm font-medium text-gray-700">Section*</label>
                    <select name="section" id="section" required
                        class="w-full px-3 py-2 text-sm rounded-lg border border-gray-300 focus:ring-2 focus:ring-blue-600 focus:border-transparent">
                        <option value="">-- Select Section --</option>
                        <option value="Listening">Listening</option>
                        <option value="Reading">Reading</option>
                        <option value="Writing">Writing</option>
                        <option value="Speaking">Speaking</option>
                    </select>
                </div>

                <div class="flex justify-end pt-4">
                    <button type="submit"
                        class="px-4 py-2 sm:px-6 sm:py-2 bg-blue-600 hover:bg-blue-700 text-white font-medium rounded-lg shadow transition text-sm sm:text-base">
                        Save Resource
                    </button>
                </div>
            </form>
        </div>

        <!-- Table Section -->
        <div class="w-full lg:w-2/3">
            <div class="bg-white shadow-md rounded-lg overflow-hidden">
                <div class="px-4 sm:px-6 py-4 border-b border-gray-200 bg-gray-50">
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3">
                        <h3 class="text-lg font-medium text-gray-900">Resources</h3>
                        <div class="flex flex-col sm:flex-row items-start sm:items-center gap-2 w-full sm:w-auto">
                            <div class="relative w-full">
                                <input type="text" id="searchInput" placeholder="Search resources..." 
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
                                    <option value="category-asc">Category (A-Z)</option>
                                    <option value="category-desc">Category (Z-A)</option>
                                    <option value="section-asc">Section (A-Z)</option>
                                    <option value="section-desc">Section (Z-A)</option>
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
                                    Name
                                </th>
                                <th scope="col" class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden sm:table-cell">
                                    Category
                                </th>
                                <th scope="col" class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden xs:table-cell">
                                    Section
                                </th>
                                <th scope="col" class="px-4 sm:px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider hidden md:table-cell">
                                    Date Added
                                </th>
                                <th scope="col" class="px-4 sm:px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200" id="resourcesTableBody">
                            @foreach($resources as $resource)
                            <tr class="hover:bg-gray-50 resource-row" 
                                data-name="{{ strtolower($resource->pdf_name) }}" 
                                data-category="{{ strtolower($resource->category) }}" 
                                data-section="{{ strtolower($resource->section) }}" 
                                data-date="{{ $resource->created_at->timestamp }}">
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap">
                                    <div class="flex items-center">
                                        <div class="flex-shrink-0 h-10 w-10 bg-red-50 rounded-full flex items-center justify-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-500" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                            </svg>
                                        </div>
                                        <div class="ml-4">
                                            <div class="text-sm font-medium text-gray-900">{{ Str::limit($resource->pdf_name, 20) }}</div>
                                            <div class="text-xs sm:hidden text-gray-500">
                                                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-medium bg-blue-100 text-blue-800">
                                                    {{ $resource->category }}
                                                </span>
                                            </div>
                                            <div class="text-xs sm:hidden text-gray-500 mt-1">
                                                {{ $resource->section }}
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden sm:table-cell">
                                    <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                        {{ $resource->category }}
                                    </span>
                                </td>
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden xs:table-cell">
                                    {{ $resource->section }}
                                </td>
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-sm text-gray-500 hidden md:table-cell">
                                    {{ $resource->created_at->format('M d, Y') }}
                                </td>
                                <td class="px-4 sm:px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                                    <div class="flex justify-end space-x-2">
                                        <a href="{{ $resource->link }}" target="_blank" class="text-blue-600 hover:text-blue-900" title="View">
                                            <i class="fas fa-eye"></i>
                                        </a>
                                        <form action="{{route('resources.destroy', $resource->id)}}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" onclick="return confirm('Are you sure you want to delete this resource?')" class="text-red-600 hover:text-red-900" title="Delete">
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Category and section dropdown logic
        const resourceCategory = document.getElementById('resource_category');
        const sectionSelect = document.getElementById('section');

        function updateSectionOptions(category) {
            sectionSelect.innerHTML = '<option value="">-- Select Section --</option>';

            if (category === 'General') {
                sectionSelect.disabled = true;
                sectionSelect.required = false;
            } else {
                sectionSelect.disabled = false;
                sectionSelect.required = true;

                let options = [];
                if (category === 'English') {
                    options = ['Basic', 'Intermediate', 'Advanced'];
                } else if (category) {
                    options = ['Listening', 'Reading', 'Writing', 'Speaking'];
                }

                options.forEach(function (opt) {
                    const option = document.createElement('option');
                    option.value = opt;
                    option.textContent = opt;
                    sectionSelect.appendChild(option);
                });
            }
        }

        updateSectionOptions(resourceCategory.value);
        resourceCategory.addEventListener('change', function () {
            updateSectionOptions(this.value);
        });

        // Enhanced search functionality
        const searchInput = document.getElementById('searchInput');
        searchInput.addEventListener('input', function() {
            const searchTerm = this.value.toLowerCase();
            const rows = document.querySelectorAll('.resource-row');
            
            rows.forEach(row => {
                const name = row.dataset.name;
                const category = row.dataset.category;
                const section = row.dataset.section;
                
                if (name.includes(searchTerm) || 
                    category.includes(searchTerm) || 
                    section.includes(searchTerm)) {
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
            const tbody = document.getElementById('resourcesTableBody');
            const rows = Array.from(tbody.querySelectorAll('.resource-row'));
            
            rows.sort((a, b) => {
                let aValue, bValue;
                
                switch(column) {
                    case 'name':
                        aValue = a.dataset.name;
                        bValue = b.dataset.name;
                        break;
                    case 'category':
                        aValue = a.dataset.category;
                        bValue = b.dataset.category;
                        break;
                    case 'section':
                        aValue = a.dataset.section;
                        bValue = b.dataset.section;
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
</script>
@endsection