<div>
    <nav class="bg-gray-100 p-4 shadow-lg">
        <div class="container mx-auto flex items-center justify-between">
            <!-- Navigation links -->
            <div class="flex items-center space-x-8">
                <a href="/home" class="text-black hover:text-violet-600">Home</a>
                <a href="/books" class="text-black hover:text-violet-600">Books</a>
                <a href="/writer" class="text-black hover:text-violet-600">Writer</a>
            </div>

            <!-- Name for app or logo -->
            <div class="flex items-center space-x-4">
                <span class="text-2xl font-light tracking-wide text-gray-700">{{ $appName }}</span>
            </div>

            <!-- register and login -->
            <div class="flex items-center space-x-4">
                <a href="/login" class="text-black hover:text-violet-600">Login</a>
                <a href="/register" class="text-black hover:text-violet-600">Register</a>
            </div>
        </div>
    </nav>
</div>