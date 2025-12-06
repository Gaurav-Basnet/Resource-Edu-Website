<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <title>Resource Edu | @yield('title', 'Resource Education')</title>
    <link rel="icon" type="image/jpg" href="../assests/images/icon.jpg">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="../assests/js/index.js"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <title>Dashboard</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }

        @media (max-width: 640px) {
            .mobile-flex-col {
                flex-direction: column;
            }

            .mobile-w-full {
                width: 100% !important;
            }
        }

        .notification-badge {
            position: absolute;
            top: -5px;
            right: -5px;
            background-color: #EF4444;
            color: white;
            border-radius: 50%;
            width: 18px;
            height: 18px;
            font-size: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .error-message {
            z-index: 999;
            position: fixed;
            bottom: 10px;
            right: 0;
            width: 300px;
            padding: 15px;
            background-color: #f3e8ff;
            /* Changed to light purple */
            color: #6b21a8;
            /* Changed to deep purple text */
            border: 1px solid #d8b4fe;
            /* Changed to medium purple */
            border-radius: 5px;
            animation: slideIn 1s ease-out;
            display: none;
            border-left: 8px solid #9333ea;
            /* Changed to vibrant purple */
        }

        @keyframes slideIn {
            from {
                transform: translateX(100%);
            }

            to {
                transform: translateX(0);
            }
        }

        .round-loader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            z-index: 998;
        }

        .round-loader {
            position: relative;
            width: 80px;
            height: 80px;
        }

        /* Outer rings (animated) */
        .loader-ring {
            position: absolute;
            width: 100%;
            height: 100%;
            border: 4px solid transparent;
            border-radius: 50%;
            animation: rotate 2s linear infinite;
        }

        .loader-ring:nth-child(1) {
            border-top-color: #3a0361;
            /* Dark purple */
            animation-delay: 0.1s;
        }

        .loader-ring:nth-child(2) {
            border-top-color: #510585;
            /* Medium-dark purple */
            animation-delay: 0.2s;
        }

        .loader-ring:nth-child(3) {
            border-top-color: #810ece;
            /* Medium purple */
            animation-delay: 0.3s;
        }

        .loader-ring:nth-child(4) {
            border-top-color: #a855f7;
            /* Light purple */
            animation-delay: 0.4s;
        }

        .loader-ring:nth-child(5) {
            border-top-color: #bc79e8;
            /* Very light purple */
            animation-delay: 0.5s;
        }

        /* Inner static circle (with optional pulse) */
        .loader-inner-circle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #bc79e8;
            background: url('/assests/images/logoo.png') no-repeat center center;
            background-size: contain;
            opacity: 0.8;
            animation: pulse 1.5s infinite ease-in-out;
        }

        .loader-text {
            margin-top: 20px;
            font-family: Arial, sans-serif;
            font-size: 16px;
            color: #a855f7;
            letter-spacing: 1px;
        }

        /* Animations */
        @keyframes rotate {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes pulse {

            0%,
            100% {
                transform: translate(-50%, -50%) scale(0.95);
                opacity: 0.8;
            }

            50% {
                transform: translate(-50%, -50%) scale(1.05);
                opacity: 1;
            }
        }
    </style>
</head>

<body class="bg-gray-100">

    <!-- code for loader -->
    <div class="round-loader-container " id="loader">
        <div class="round-loader">
            <!-- Outer animated rings -->
            <div class="loader-ring"></div>
            <div class="loader-ring"></div>
            <div class="loader-ring"></div>
            <!-- Inner static/pulsing circle -->
            <div class="loader-inner-circle"></div>
        </div>
        <div class="loader-text">Loading...</div>
    </div>
    <!-- //header -->
    <header class="w-full bg-white shadow-md px-4 sm:px-6 lg:px-12 py-3 border-b border-gray-300 sticky top-0 z-40">
        <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between gap-4">
            <!-- Logo + Toggle Button -->
            <div class="flex items-center justify-between w-full sm:w-auto">
                <div class="flex items-center gap-3">
                    <button id="togglebutton" onclick="toggleSidebar()" class="md:hidden h-10 focus:outline-none">
                        <i class="fas fa-bars text-gray-600 text-xl" id="hamburgerIcon"></i>
                        <i class="fas fa-times text-gray-600 text-xl hidden" id="closeIcon"></i>
                    </button>
                    <div class="flex items-center gap-3">
                        <img src="../assests/images/image.png" alt="Logo"
                            class="w-10 h-10 sm:w-12 sm:h-12 rounded-full object-cover" />
                        <span class="text-xl sm:text-2xl font-bold text-blue-500">Dashboard</span>
                    </div>
                </div>

                <!-- Mobile Logout (hidden on larger screens) -->
                <div class="sm:hidden flex items-center gap-2">
                    <button id="notificationButtonMobile" class="p-2 hover:bg-blue-100 hover:rounded-full relative">
                        <i class="fas fa-bell text-gray-600"></i>
                        <span
                            class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                    </button>
                    <form id="logoutFormMobile" action="{{ route('admin.logout') }}" method="POST">
                        @csrf
                          <button type="button" onclick="confirmLogout('logoutForm')"
                        class="px-2 py-1 bg-red-500 text-white rounded-md hover:bg-red-600 transition-colors">
                        Logout
                    </button>
                    </form>
                </div>
            </div>

            <!-- Right Side (hidden on mobile) -->
            <div class="hidden sm:flex items-center gap-4">
                <button id="notificationButton" class="p-2 hover:bg-blue-100 hover:rounded-full relative">
                    <i class="fas fa-bell text-gray-600"></i>
                    <span
                        class="absolute -top-1 -right-1 bg-red-500 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center">3</span>
                </button>
                <form id="logoutForm" action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="button" onclick="confirmLogout('logoutForm')"
                        class="px-4 py-2 bg-red-500 text-white rounded-md hover:bg-red-600 transition-colors">
                        Logout
                    </button>
                </form>
            </div>
        </div>
    </header>
    <!-- Notification Panel -->
    <div id="notificationPanel" class="fixed right-4 top-16 w-72 bg-white shadow-lg rounded-md z-50 hidden">
        <div class="p-3 border-b border-gray-200 flex justify-between items-center">
            <h3 class="font-semibold">Notifications</h3>
            <button onclick="toggleNotificationPanel()" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-times"></i>
            </button>
        </div>
        <div class="max-h-80 overflow-y-auto">
            <div class="p-3 border-b border-gray-100 hover:bg-gray-50 cursor-pointer">
                <div class="flex items-start">
                    <div class="bg-blue-100 p-2 rounded-full mr-3">
                        <i class="fas fa-info-circle text-blue-500"></i>
                    </div>
                    <div>
                        <p class="font-medium">System Update</p>
                        <p class="text-sm text-gray-500">New version available tomorrow</p>
                        <p class="text-xs text-gray-400 mt-1">2 hours ago</p>
                    </div>
                </div>
            </div>
            <div class="p-3 border-b border-gray-100 hover:bg-gray-50 cursor-pointer">
                <div class="flex items-start">
                    <div class="bg-green-100 p-2 rounded-full mr-3">
                        <i class="fas fa-check-circle text-green-500"></i>
                    </div>
                    <div>
                        <p class="font-medium">Task Completed</p>
                        <p class="text-sm text-gray-500">Your report has been approved</p>
                        <p class="text-xs text-gray-400 mt-1">1 day ago</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-3 text-center border-t border-gray-200">
            <a href="#" class="text-blue-500 text-sm font-medium">View All Notifications</a>
        </div>
    </div>


    <!-- Wrapper -->
    <div class="flex min-h-screen pt-2 relative">
        <!-- Sidebar -->
        <div id="sidebar"
            class="absolute md:relative md:w-64 py-4 top-0 left-0 w-64 h-screen bg-white shadow-md transform -translate-x-full md:translate-x-0 transition-transform duration-300 ease-in-out z-30">
            <div class="flex flex-col h-full w-full py-0 md:py-2 space-y-2 px-4 overflow-y-auto">
                <a href="/admin/home" class="cursor-pointer">
                    <div
                        class="sidebar-item w-full font-medium py-2 px-3 rounded-lg text-gray-500 hover:bg-blue-400 hover:text-white transition-all duration-300 flex items-center">
                        <i class="fas fa-home mr-2"></i> Home
                    </div>
                </a>

                <!-- Uploading with Dropdown -->
                <div class="w-full">
                    <a onclick="toggleDropdown2()" class="cursor-pointer">
                        <div
                            class="sidebar-item block font-medium py-2 px-3 rounded-lg text-gray-500 hover:bg-blue-400 hover:text-white transition-all duration-300 flex items-center justify-between">
                            <div class="flex items-center">
                                <i class="fas fa-upload mr-2"></i> Uploading
                            </div>
                            <i id="arrowIcon2"
                                class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
                        </div>
                    </a>
                    <div id="dropdownMenu2" class="hidden mt-1 ml-6 space-y-1">
                        <a href="/admin/blogPosting"
                            class="block px-3 py-1 text-sm text-gray-600 hover:bg-blue-100 rounded cursor-pointer flex items-center">
                            <i class="fas fa-file-alt mr-2"></i> Blogs Uploading
                        </a>
                        <a href="/admin/resourcePosting"
                            class="block px-3 py-1 text-sm text-gray-600 hover:bg-blue-100 rounded cursor-pointer flex items-center">
                            <i class="fas fa-database mr-2"></i> Resources Uploading
                        </a>
                        <a href="/admin/galleryPosting"
                            class="block px-3 py-1 text-sm text-gray-600 hover:bg-blue-100 rounded cursor-pointer flex items-center">
                            <i class="fas fa-file-image mr-2"></i> Gallery Uploading
                        </a>
                        <a href="/admin/tem"
                            class="block px-3 py-1 text-sm text-gray-600 hover:bg-blue-100 rounded cursor-pointer flex items-center">
                            <i class='fas fa-user-friends'></i></i> Teams Uploading
                        </a>
                        <a href="/admin/testemonials"
                            class="block px-3 py-1 text-sm text-gray-600 hover:bg-blue-100 rounded cursor-pointer flex items-center">
                            <i class='fas fa-user-friends'></i></i> TesteMonials Uploading
                        </a>
                          <a href="/admin/mock"
                            class="block px-3 py-1 text-sm text-gray-600 hover:bg-blue-100 rounded cursor-pointer flex items-center">
                            <i class='fas fa-user-friends'></i></i> Mock Questions Uploading
                        </a>
                    </div>
                </div>

                <!-- Settings with Dropdown -->
                <div class="w-full">
                    <a onclick="toggleDropdown3()" class="cursor-pointer">
                        <div
                            class="sidebar-item block font-medium py-2 px-3 rounded-lg text-gray-500 hover:bg-blue-400 hover:text-white transition-all duration-300 flex items-center justify-between">
                            <div class="flex items-center">
                                <i class="fas fa-cog mr-2"></i> Settings
                            </div>
                            <i id="arrowIcon3"
                                class="fas fa-chevron-down text-xs transition-transform duration-300"></i>
                        </div>
                    </a>
                    <div id="dropdownMenu3" class="hidden mt-1 ml-6 space-y-1">
                        <a href="  {{ route('admin.profile') }}"
                            class="block px-3 py-1 text-sm text-gray-600 hover:bg-blue-100 rounded cursor-pointer flex items-center">
                            <i class="fas fa-user mr-2"></i> Profile
                        </a>
                        <a href="#"
                            class="block px-3 py-1 text-sm text-gray-600 hover:bg-blue-100 rounded cursor-pointer flex items-center">
                            <i class="fas fa-bell mr-2"></i> Notifications
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex-1 py-3 px-3 transition-all duration-300 ease-in-out" id="mainContent">
            @if(session('success'))
                <div id="errorBox" class="error-message">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div id="errorBox" class="error-message">
                    {{ session('error') }}
                </div>
            @endif

             <!-- Dashboard Image (only shown on dashboard) -->
            @if(Request::is('admin/dashboard'))
            <div class="w-full  mb-6">
                <img src="../assests/images/1university.png" alt="Dashboard" 
                     class="w-full h-full rounded-lg shadow-md max-h-96 object-cover">
            </div>
            @endif

            <main>
                @yield('content')

             
            </main>

        </div>
    </div>

    <script>

        // Sidebar toggle function
        function toggleSidebar() {
            const sidebar = document.getElementById("sidebar");
            const hamburgerIcon = document.getElementById("hamburgerIcon");
            const closeIcon = document.getElementById("closeIcon");
            const maincontent = document.getElementById("mainContent");

            if (sidebar.classList.contains("-translate-x-full")) {
                sidebar.classList.remove("-translate-x-full");
                hamburgerIcon.classList.add("hidden");
                closeIcon.classList.remove("hidden");
                maincontent.classList.add("blur-sm");
            } else {
                sidebar.classList.add("-translate-x-full");
                hamburgerIcon.classList.remove("hidden");
                closeIcon.classList.add("hidden");
                maincontent.classList.remove("blur-sm");
            }
        }

        // Dropdown toggle functions
        function toggleDropdown2() {
            const dropdown = document.getElementById("dropdownMenu2");
            const icon = document.getElementById("arrowIcon2");
            dropdown.classList.toggle("hidden");
            icon.classList.toggle("fa-chevron-up");
            icon.classList.toggle("fa-chevron-down");
        }

        function toggleDropdown3() {
            const dropdown = document.getElementById("dropdownMenu3");
            const icon = document.getElementById("arrowIcon3");
            dropdown.classList.toggle("hidden");
            icon.classList.toggle("fa-chevron-up");
            icon.classList.toggle("fa-chevron-down");
        }

        // Notification panel toggle
        function toggleNotificationPanel() {
            const panel = document.getElementById("notificationPanel");
            panel.classList.toggle("hidden");
        }

        // Initialize notification buttons
        document.addEventListener("DOMContentLoaded", function () {
            const notificationButtons = [
                document.getElementById("notificationButton"),
                document.getElementById("notificationButtonMobile")
            ];

            notificationButtons.forEach(button => {
                if (button) {
                    button.addEventListener("click", function (e) {
                        e.stopPropagation();
                        toggleNotificationPanel();
                    });
                }
            });

            // Close notification panel when clicking outside
            document.addEventListener("click", function (e) {
                const panel = document.getElementById("notificationPanel");
                const notificationButtons = [
                    document.getElementById("notificationButton"),
                    document.getElementById("notificationButtonMobile")
                ];

                if (!panel.contains(e.target) &&
                    !notificationButtons.some(btn => btn && btn.contains(e.target))) {
                    panel.classList.add("hidden");
                }
            });
        });

        // Logout confirmation
        function confirmLogout(formId) {
            if (confirm("Are you sure you want to logout?")) {
                document.getElementById(formId).submit();
            }
        }

        // Auto-hide messages after 3 seconds
        setTimeout(() => {
            const messages = document.querySelectorAll('.bg-green-100, .bg-red-100');
            messages.forEach(message => {
                message.style.display = "none";
            });
        }, 3000);

        var errorBox = document.getElementById("errorBox");
        errorBox.style.display = "block"; // Show the box
        setTimeout(function () {
            errorBox.style.display = "none"; // Hide the box after 3 seconds
        }, 3000);
    </script>
</body>

</html>