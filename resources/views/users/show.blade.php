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

    <aside class="container max-h-full w-[300px] bg-gray-100 rounded-lg p-8 mt-8 border-r-2 border-gray-400">
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
    <div class="container mx-auto p-8 mt-8 flex flex-col items-start bg-gray-100">
        <p class="text-gray-600 mb-4">Email: {{ $user->email }}</p>
        <p class="text-gray-600 mb-4">Member since: {{ $user->created_at->format('d/m/Y') }}</p>
        <!-- Add more user details as needed -->
    </div>
</section>
</body>
</html>
