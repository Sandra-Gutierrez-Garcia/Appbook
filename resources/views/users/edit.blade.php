<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Show</title>
</head>
<body>
    <x-nav-blade
        :appName="'AppBook'"
    />
    <section class="flex justify-justify-around p-4">

        <aside class="container max-h-full w-[400px] rounded-lg p-8 mt-8 border-r-2 border-gray-400">
            <h1 class="text-2xl font-lining-nums mb-6 text-gray-800">User Profile</h1>
            <hr class="border-t border-gray-300 my-4">
            <a href="#" class="text-gray-600 hover:underline mb-4 block">Like Book</a>
            <hr class="border-t border-gray-300 my-4">
            <a href="#" class="text-gray-600 hover:underline mb-4 block">Like Author</a>
            <hr class="border-t border-gray-300 my-4">
            <a href="#" class="text-gray-600 hover:underline mb-4 block">Settings</a>
            <hr class="border-t border-gray-300 my-4">
            <a href="#" class="text-gray-600 hover:underline mb-4 block">Logout</a>
        </aside>

        <div class="flex-1 container mx-auto p-8 mt-8 ml-14 mr-14 border-2 border-gray-200 rounded-lg shadow bg-white">
            <h2 class="text-2xl font-bold mb-4 text-gray-800">User Information</h2>
            <hr class="border-t border-gray-300 mb-4">
            <form method="POST" action="/users/{{ $user->id }}/update">
                @csrf
            <div class="flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0">
            <div class ="space-y-3 border p-4 rounded-lg bg-gray-50">
                <h3 class="text-xl font-semibold text-gray-800">General Information</h3>
                <label for="name" class="block text-gray-700 font-semibold mt-4">Name:</label>
                <input type="text" name="name" id="name" value="{{ $user->name }}" class="w-full border border-gray-300 rounded-md p-2 mt-1">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                <label for="email" class="block text-gray-700 font-semibold mt-4">Email:</label>
                <input type="email" name="email" id="email" value="{{ $user->email }}" class="w-full border border-gray-300 rounded-md p-2 mt-1">
                @error('email')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                <p class="text-gray-700 p-2 mt-1"><span class="font-semibold">Role:</span> {{ $user->roles->pluck('name')->implode(', ')}}</p>
            </div>
            <div class="space-y-3 border p-4 rounded-lg bg-gray-50">
                <h3 class="text-xl font-semibold text-gray-800">Additional Details</h3>
                <label for="birthday_date" class="block text-gray-700 font-semibold mt-4">Birthday Date:</label>
                <input type="date" name="birthday_date" id="birthday_date" value="{{ $user->birthday_date->format('Y-m-d') ?? '' }}" class="w-full border border-gray-300 rounded-md p-2 mt-1">
                @error('birthday_date')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
                <p class="text-gray-700 p-2 mt-1"><span class="font-semibold">Member Since:</span> {{ $user->created_at->format('Y-m-d') ?? 'N/A' }}</p>
            </div>
        </div>
        <hr class="border-t border-gray-300 my-6">
        <div class="justify-between">
                <button type="submit" class="hover:bg-violet-200 p-2 rounded-md mt-4">Save Changes</button>
                <a href="/users/{{ $user->id }}" class="hover:bg-violet-200 p-2 rounded-md mt-4">Cancel</a>
            </div>
            </form>

        </div>
    </section>
</body>
</html>
