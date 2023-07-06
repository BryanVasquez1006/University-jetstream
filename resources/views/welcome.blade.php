<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Laravel</title>
        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        @vite('resources/css/app.css')


    </head>
    <body class="antialiased ">
        <div class="relative sm:flex sm:justify-center sm:items-center min-h-screen  bg-center bg-gray-200 selection:bg-red-500 selection:text-white flex-col">
                {{-- BYU LOGO SPACE --}}
                <div class="img_w">      
             <img src="https://logos-world.net/wp-content/uploads/2021/08/BYU-Seal-Logo.png" alt="BYU University Logo" class="max-w-[400px]"></img>
              </div> 
        
              <h1 class="mt-4">WELCOME</h1>
           
              @if (Route::has('login'))
              <div class=" sm:top-0 sm:right-0 p-6 text-right z-10">
                  @auth
                      <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                  @else
                      <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                      @if (Route::has('register'))
                          <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                      @endif
                  @endauth
              </div>
              @endif


        </div>
    </body>
</html>
