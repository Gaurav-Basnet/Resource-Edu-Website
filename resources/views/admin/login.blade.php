<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
    <!-- Include Tailwind CSS (via CDN for simplicity) -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 flex items-center justify-center min-h-screen p-5">
    <div class="bg-white rounded-xl shadow-lg w-full max-w-md p-8 sm:p-10">
        <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Admin Login</h2>

        @if ($errors->any())
            <div class="bg-red-50 text-red-600 px-4 py-3 rounded-lg mb-5 text-center text-sm">
                {{ $errors->first() }}
            </div>
        @endif

        <form method="POST" action="{{ url('/admin/login') }}" class="space-y-6">
            @csrf
            <div class="space-y-2">
                <label class="block text-gray-700 font-medium">Email</label>
                <input 
                    type="email" 
                    name="email" 
                    required 
                    placeholder="Enter your email"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"
                >
            </div>

            <div class="space-y-2">
                <label class="block text-gray-700 font-medium">Password</label>
                <input 
                    type="password" 
                    name="password" 
                    required 
                    placeholder="Enter your password"
                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-purple-500 focus:border-transparent transition"
                >
            </div>

            <button 
                type="submit"
                class="w-full bg-purple-600 hover:bg-purple-700 text-white font-semibold py-3 px-4 rounded-lg transition duration-300"
            >
                Login
            </button>
        </form>
    </div>
</body>
</html>