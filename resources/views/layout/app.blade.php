<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <title>Blog Post | @yield('title')</title>
</head>

<body>
    <header class="mb-15">
        <nav class="lg:px-24 px-5 py-5 transition-all duration-1000">
            <ul class="flex gap-10 items-center">
                <li class="font-semibold text-lg">Blog Post</li>
                <a href="{{ route('posts.index') }}"><li class="text-sm font-semibold text-gray-500">All Posts</li></a>
            </ul>
        </nav>
    </header>
    @yield('content')
</body>
</html>