<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-nav-blade
        :appName="'AppBook'"
    />
    <!-- banner -->
    <div class="bg-gradient-to-b from-violet-50 to-violet-100 min-h-[8rem] flex items-center justify-center px-8 mt-8">
        <div class="container mx-auto flex items-center text-center justify-center">
            <h1 class="text-2xl font-bold text-black-800 mb-3">
                Welcome back! Please log in to your account
            </h1>
        </div>
    </div>
    @if (session('success'))
        <div class="container mx-auto px-4 mt-4">
            <div class="max-w-md mx-auto bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        </div>
    @endif
    <div>
        <form action="/login" method="POST">
            @csrf
            <div class="container mx-auto px-4 py-12">
                <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500 @error('email') border-red-500 @enderror" value="{{ old('email') }}" required>
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                        <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500 @error('password') border-red-500 @enderror" required>
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4 items-center text-center">
                    <button type="submit" class="w-full bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-violet-500 transition-colors duration-300 font-medium">Login</button>
                    </div>
                    <div class="mb-4 items-center text-center">
                        <p class="text-gray-600">Don't have an account? <a href="/register" class="text-violet-500 hover:underline">Register here</a>.</p>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>
</html>