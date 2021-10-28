@extends('layouts.app')

@section('content')
<section class="text-gray-400 bg-gray-900 body-font">

@foreach($student as $student)

<section class="text-gray-400 bg-gray-900 body-font overflow-hidden">
  <div class="container px-5 py-24 mx-auto">
    <div class="lg:w-4/5 mx-auto flex flex-wrap">
      <img alt="students" class="lg:w-1/2 w-full lg:h-auto h-64 object-cover object-center rounded" src="css/{{ $student->image}}">
      <div class="lg:w-1/2 w-full lg:pl-10 lg:py-6 mt-6 lg:mt-0">
        <h2 class="text-sm title-font text-gray-500 tracking-widest">BTECH CSBS</h2>
        <h1 class="text-white text-3xl title-font font-medium mb-1">{{ $student->name }}</h1>
        
        <p class="leading-relaxed">About: {{ $student->Aboutme }}</p>
        <p class="leading-relaxed">Skills: {{ $student->skill }}</p>
        <p class="leading-relaxed">First Preference: {{ $student->First }}</p>
        <p class="leading-relaxed">Second Preference: {{ $student->Second }}</p>
        
        <div class="flex">
         
          
          <a href="{{ $student->cvlink }}" class="flex ml-auto text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">View CV</a>
          <a href="/send-email" class="flex ml-4 text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded">Mail</a>
        </div>
      </div>
    </div>
  </div>
</section>
@endforeach 

@endsection




        

        