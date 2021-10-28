<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,500;0,700;0,800;1,500;1,600;1,700&display=swap" rel="stylesheet">
    <title>NMIMS Placement Portal</title>
    <link rel="icon" href="css/icon.png">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<header class="text-gray-600 bg-gray-900 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a href="/"class="flex title-font font-medium items-center  text-white mb-4 md:mb-0">
     
        
      <span class="ml-3 text-xl">Placement<span class="text-xl text-red-600"> Portal</span></span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
     
      <a class="mr-5 hover: text-white">Hello<span class="text-xl text-red-600">  {{ Auth::user()->name }} </span></a>
      <a href="{{ route('logout') }}" class="  bg-gradient-to-r from-red-700 to-red-700  hover:bg-gradient-to-l 
                hover:from-red-700 hover:to-red-500 text-gray-100 p-2  rounded-sm tracking-wide font-semibold  
                shadow-lg cursor-pointer transition ease-in duration-500" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }} </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
    </nav>
   
  </div>
</header>

    <main class="py-4">
            @yield('content')
        </main>
    
</body>
</html>