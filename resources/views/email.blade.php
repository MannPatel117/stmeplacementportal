@extends('layouts.app')

@section('content')
<section class="text-gray-400 bg-gray-900 body-font">
  <div class="container mx-auto flex px-5 py-24 items-center justify-center flex-col">
  <div class="text-center lg:w-2/3 w-full">
      <h1 class="title-font sm:text-4xl text-3xl mb-4 font-medium text-white">Your Email has been sent successfully!</h1>
      <p class="leading-relaxed mb-8">The Placement Committee will arrange a meeting with the selected student as per your convenience</p>
      <div class="flex justify-center">
      <a href="/students" class="mb-5 px-10 grid-cols-2 justify-center text-lg bg-gradient-to-r from-red-700 to-red-700  hover:bg-gradient-to-l 
                hover:from-red-700 hover:to-red-500 text-gray-100 p-3  rounded-sm tracking-wide font-semibold  
                shadow-lg cursor-pointer transition ease-in duration-500">Back to Students</a>
      </div>
    </div>
    <img class="lg:w-2/6 md:w-3/6 w-5/6 mb-10 object-cover object-center rounded" alt="hero" src="css/Photo1.png">
    
  </div>
</section>
@endsection