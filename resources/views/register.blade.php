<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                Create an account and like your favorite books
            </h1>
        </div>
    </div>
    <div>
        <form action="/register" method="POST">
            @csrf
            <div class="container mx-auto px-4 py-12">
                <div class="max-w-md mx-auto bg-white p-8 rounded-lg shadow-lg">
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700 font-semibold mb-2">Name</label>
                        <input type="text" id="name" name="name" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500 @error('name') border-red-500 @enderror" value="{{ old('name') }}" required>
                        @error('name')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700 font-semibold mb-2">Email</label>
                        <input type="email" id="email" name="email" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focuçs:ring-violet-500 @error('email') border-red-500 @enderror" value="{{ old('email') }}" required>
                        @error('email')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="m-b-4">
                        <label for="birthday_date" class="block text-gray-700 font-semibold mb-2">Birthday Date</label>
                        <input type="date" id="birthday_date" name="birthday_date" class="  w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500 @error('birthday_date') border-red-500 @enderror" value="{{ old('birthday_date') }}">
                        @error('birthday_date')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700 font-semibold mb-2">Password</label>
                        <input type="password" id="password" name="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500 @error('password') border-red-500 @enderror" required>
                        @error('password')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-6">
                        <label for="password_confirmation" class="block text-gray-700 font-semibold mb-2">Confirm Password</label>
                        <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-violet-500 @error('password_confirmation') border-red-500 @enderror" required>
                        @error('password_confirmation')
                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-4 items-center text-center">
                    <button type="submit" class="w-full bg-gray-200 text-gray-700 px-4 py-2 rounded-lg hover:bg-violet-500 transition-colors duration-300 font-medium">Register</button>
                    </div>
                    <div class="mb-4 items-center text-center">
                        <p class="text-gray-600">Already have an account? <a href="/login" class="text-violet-500 hover:underline">Login here</a>.</p>
                    </div>
                </div>
            </div>
        </form>
    </div>
