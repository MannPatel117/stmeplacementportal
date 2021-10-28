@extends('layouts.app')

@section('content')


<section class="text-gray-400 bg-gradient-to-r from-gray-800 to-black body-font">
  <div class="container mx-auto flex px-5 py-24 md:flex-row flex-col items-center">
    <div class="lg:max-w-lg lg:w-full md:w-1/2 w-5/6 md:mb-0 mb-10">
      <img class="object-cover object-center rounded" alt="hero" src="css/Photo.png">
    </div>
    <div class="lg:flex-grow md:w-1/2 lg:pl-24 md:pl-16 flex flex-col md:items-start md:text-left items-center text-center">
      <h1 class="title-font sm:text-6xl text-3xl mb-4 font-medium text-white">"The future belongs to  
        <br class="hidden lg:inline-block">those who believe in 
        <br class="hidden lg:inline-block">beauty
                                    of dreams"
      </h1>
     
      <div class="flex justify-center">
      <a href="/students" class="px-10 grid-cols-2 justify-center text-lg bg-gradient-to-r from-red-700 to-red-700  hover:bg-gradient-to-l 
                hover:from-red-700 hover:to-red-500 text-gray-100 p-3  rounded-sm tracking-wide font-semibold  
                shadow-lg cursor-pointer transition ease-in duration-500">View Students</a>
      <a href="https://drive.google.com/file/d/1eGqTyXoT20fVQc1nQ6ITonWOJVSIUOFT/view?usp=sharing" class="ml-5 px-10 grid-cols-2 justify-center text-lg bg-gradient-to-r from-red-700 to-red-700  hover:bg-gradient-to-l 
                hover:from-red-700 hover:to-red-500 text-gray-100 p-3  rounded-sm tracking-wide font-semibold  
                shadow-lg cursor-pointer transition ease-in duration-500">View Brochure</a>
        
      </div>
    </div>
  </div>
</section>

@endsection
