<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    @vite('resources/css/app.css','resources/js/app.js')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Gothic+A1&display=swap" rel="stylesheet">

    <title>ValEats</title>
</head>
<body class="bg-sky-600 " style="font-family:'Gothic A1', sans-serif;">
    <nav class="bg-transparent mt-18 ">
        <div class="container mx-auto px-6 items-center ">
            <div class="flex justify-between items-center py-4  ">
                <div class="text-xl font-bold text-gray-800">
                    <a href="/">
                        <img src="{{ asset('/images/Val.png') }}" alt="Logo" class="size w-29 h-29">
                    </a>
                </div>

                <!-- Navigatio Links -->
                <div class="hidden md:flex space-x-6 gap-x-9 mr-28">
                    <a href="/" class="text-red-600 hover:text-red-600 transition text-3xl hover:underline">Home</a>
                    <a href="/restaurants" class="text-white hover:text-red-600 transition text-3xl hover:underline">Restaurants</a>
                    <button class="text-white hover:text-red-600 transition focus:outline-none " >
                        <div>
                    <svg class="hover:fill-red-600" width="32px" height="32px" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                    stroke="#ffffff"><g id="SVGRepo_bgCarrier" stroke-width="0"></g><g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round">
                        </g><g id="SVGRepo_iconCarrier"> <path d="M14.9536 14.9458L21 21M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                    stroke="#fcfcfc" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path> </g></svg>
                    </div>
                    </button>
                    <div>
                        <a href="/register" class="flex items-center px-4 py-2 bg-white text-red-600 rounded-lg hover:bg-slate-500 transition text-3xl">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 mr-2" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-3.31 0-6 2.69-6 6v2h12v-2c0-3.31-2.69-6-6-6z"/>
                          </svg>
                          Sign In
                        </a>
                   </div>
                </div>


                <!-- Mobile Menu Toggle -->
                <button class="block md:hidden text-red-600 hover:text-gray-900 transition focus:outline-none" id="mobile-menu-toggle">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Menu -->
            <div class="hidden" id="mobile-menu">
                <a href="/" class="block py-2 text-gray-700 hover:text-gray-900 transition">Home</a>
                <a href="/restaurants" class="block py-2 text-gray-700 hover:text-gray-900 transition">Restaurants</a>
                <a href="/login" class="block py-2 px-4 bg-blue-600 text-white rounded-lg hover:bg-blue-700 transition">Sign In</a>
            </div>
        </div>
    </nav>


    <contents class="bg-transparent">
        <div class="text-white py-20 px-5 text-left mt-30 ">
            <h1 class="text-4xl font-bold leading-tight mb-4">Your all-in-one destination to satisfy every craving.</h1>
            <p class="text-lg mb-6">Discover endless options tailored just for you. Dive in, explore, and let your cravings lead the way!</p>
            <a href="#" class="bg-white text-blue-500 font-semibold py-2 px-6 rounded-full hover:bg-gray-100 transition">Browse Restaurants</a>
        </div>
    </contents>

</body>
</html>
