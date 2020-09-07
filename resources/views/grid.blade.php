@extends('layouts.app')

@section('content')

{{-- <div class="container"> --}}

      <div class="flex mb-4">
        <div class="w-full bg-gray-500 h-12"></div>
      </div>

      <!-- Two columns -->
      <div class="flex mb-4 space-y-0 ">
        <div class="w-1/2 bg-gray-400 h-12 ml-2 sm:ml-5 "></div>
        <div class="w-1/2 bg-gray-400 h-12"></div>
        <div class="w-screen bg-gray-500 h-12 px-5 py-3">


            <h1>fooo</h1>


        </div>
      </div>

  <!-- Three columns -->
  <div class="flex mb-4">
    <div class="flex-1  bg-gray-400 h-12"></div>
    <div class="flex-2  bg-gray-500 h-12"></div>
    <div class="flex-1  bg-gray-400 h-12"></div>
  </div>

  <div class="flex space-x-8">
    <div>1</div>
    <div>2</div>
    <div>3</div>
  </div>

{{-- </div> --}}

@endsection
