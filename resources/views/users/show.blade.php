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
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
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
        <hr class="border-t border-gray-300 my-6">

        <div class="justify-between">
            <a href="/users/{{ $user->id }}/edit" class="hover:bg-violet-200 p-2 rounded-md mt-4 ">Edit Profile</a>
            <a href="#" class="hover:bg-violet-200 p-2 rounded-md mt-4">Create Author</a>
            <a href="#" class="hover:bg-red-200 p-2 rounded-md mt-4">Delete Account</a>
        </div>
    </div>
</section>
</body>
</html>
