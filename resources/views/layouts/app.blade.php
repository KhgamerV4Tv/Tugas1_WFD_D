<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Website Promosi')</title>

    <!-- Styles -->
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')

    <!-- Tambahan CSS -->
    <style>
        [x-cloak] {
            display: none !important;
        }

        .gradient-bg {
            background: linear-gradient(90deg, #4f46e5, #3b82f6);
        }

        .nav-link:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body class="flex flex-col min-h-screen bg-gray-50">
    <header class="text-white shadow-lg gradient-bg">
        <div class="container px-6 py-4 mx-auto">
            <div class="flex items-center justify-between">
                <a href="{{ route('home') }}" class="text-3xl font-extrabold">KevinPromo</a>
                <nav>
                    <ul class="flex space-x-8">
                        <li><a href="{{ route('home') }}" class="text-lg nav-link">Home</a></li>
                        <li><a href="{{ route('promotions.create') }}" class="text-lg nav-link">Add Promotion</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>

    <main class="container flex-grow px-6 py-10 mx-auto">
        @if (session('success'))
            <div class="relative px-4 py-3 mb-6 text-green-700 bg-green-100 border border-green-400 rounded shadow-md"
                role="alert">
                <span class="block sm:inline">{{ session('success') }}</span>
            </div>
        @endif

        @yield('content')
    </main>

    <footer class="py-6 text-center text-gray-200 gradient-bg">
        <div class="container mx-auto">
            <p>&copy; {{ date('Y') }} <span class="font-semibold text-white">KevinPromo</span>. All Rights Reserved.</p>
            <p class="mt-2 text-sm">Built by KevinPromo</p>
        </div>
    </footer>
</body>

</html>
