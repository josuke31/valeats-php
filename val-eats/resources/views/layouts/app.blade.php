<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Val Eats</title>
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
</head>
<body class="bg-blue-100">
    <!-- Navbar -->
    <header class="flex justify-between items-center px-8 py-4 bg-blue-500 text-white">
        <div class="logo text-xl font-bold">Val Eats</div>
        <nav class="flex space-x-6">
            <a href="#" class="hover:text-gray-300">Home</a>
            <a href="#" class="hover:text-gray-300">Restaurants</a>
        </nav>
        <div>
            <a href="#" class="bg-white text-blue-500 px-4 py-2 rounded hover:bg-gray-100">Sign In</a>
        </div>
    </header>
    <!-- Page Content -->
    <main>
        @yield('content')
    </main>
</body>
</html>
