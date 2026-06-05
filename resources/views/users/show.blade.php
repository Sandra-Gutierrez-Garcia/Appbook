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
    @if (session('success'))
        <div class="container mx-auto px-4 mt-4">
            <div class="max-w-md mx-auto bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        </div>
    @endif
    <section class="flex justify-justify-around p-4">

    <aside class="container max-h-full w-[400px] rounded-lg p-8 mt-8 border-r-2 border-purple-300">
        <h1 class="text-2xl font-lining-nums mb-6 text-purple-600">User Profile</h1>
        <hr class="border-t border-purple-300 my-4">
        <a href="#" class="text-gray-600 hover:underline mb-4 block hover:text-purple-600">Like Book</a>
        <hr class="border-t border-purple-300 my-4">
        <a href="#" class="text-gray-600 hover:underline mb-4 block hover:text-purple-600">Like Author</a>
        <hr class="border-t border-purple-300 my-4">
        <a href="#" class="text-gray-600 hover:underline mb-4 block hover:text-purple-600">Settings</a>
        <hr class="border-t border-purple-300 my-4">
        <a href="#" class="text-gray-600 hover:underline mb-4 block hover:text-purple-600">Logout</a>
    </aside>

    <div class="flex-1 container mx-auto p-8 mt-8 ml-14 mr-14 border-2 border-purple-300 rounded-lg shadow bg-white">
        <h2 class="text-2xl font-bold mb-4 text-gray-800">User Information</h2>
        <hr class="border-t border-purple-100 mb-4">
        <div class="flex flex-col md:flex-row md:space-x-6 space-y-6 md:space-y-0">
            <div class="space-y-3 border p-4 rounded-lg bg-gray-50">
                <h3 class="text-xl font-semibold text-gray-800">General Information</h3>
                <p class="text-gray-700"><span class="font-semibold">Name:</span> {{ $user->name }}</p>
                <p class="text-gray-700"><span class="font-semibold">Email:</span> {{ $user->email }}</p>
                <p class="text-gray-700"><span class="font-semibold">Role:</span> {{ $user->roles->pluck('name')->implode(', ')}}</p>
            </div>
            <div class="space-y-3 border p-4 rounded-lg bg-gray-50">
                <h3 class="text-xl font-semibold text-gray-800">Additional Details</h3>
                <p class="text-gray-700"><span class="font-semibold">Birthday Date:</span> {{ $user->birthday_date->format('Y-m-d') ?? 'N/A' }}</p>
                <p class="text-gray-700"><span class="font-semibold">Member Since:</span> {{ $user->created_at->format('Y-m-d') ?? 'N/A' }}</p>
            </div>
        </div>


        <div class="flex flex-wrap gap-4 mt-8 pt-6 border-t border-purple-200">
            <a href="/users/{{ $user->id }}/edit" 
            class="group inline-flex items-center gap-2 px-5 py-2.5 bg-purple-50 text-purple-800 text-sm font-serif tracking-wide rounded-sm shadow-sm hover:shadow-md transition-all duration-200 border-l-4 border-purple-500 hover:border-purple-700">
            <span class="relative z-10">Edit Profile</span>
            </a>
        
        <a href="#" 
            class="group inline-flex items-center gap-2 px-5 py-2.5 bg-purple-500 text-white text-sm font-serif tracking-wide rounded-sm shadow-md hover:shadow-lg transition-all duration-200 hover:bg-purple-700">
            Create Author
        </a>
        
    <form action="/users/{{ $user->id }}/delete" method="post" class="inline">
        @csrf
        @method('DELETE')
        <button type="submit" 
            class="group inline-flex items-center gap-2 px-5 py-2.5 bg-transparent border border-purple-300 text-purple-600 text-sm font-serif tracking-wide rounded-sm hover:bg-purple-50 hover:border-purple-400 transition-all duration-200">
            Delete Account
        </button>
    </form>
</div>
</section>
</body>
</html>
