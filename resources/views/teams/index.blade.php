@extends('layouts.master')

@section('content')

  <div class="bg-white py-16 mx-auto container px-8">
    <h1 class="text-4xl text-center font-bold mb-6 underline">Our Teams</h1>
    <div class="flex flex-wrap">
      @foreach($teams as $team)
        <div class="w-1/3 px-2 mb-6">
          <div class="flex px-6 py-4 border shadow-lg hover:shadow-none trans-25">
            <div class="flex justify-center items-center">
              <img class="w-32 rounded-full" src="{{ asset('img/default.jpg') }}" alt="">
            </div>
            <div class="flex flex-col px-4 py-2">
              <h1 class="text-lg font-bold mb-4">{{ $team->name }}</h1>
              <p class="mb-4">{{ $team->articles_count }} Articles</p>
              <p class="mb-4">{{ $team->members->count() }} Members</p>
              <a href="{{ route('teams.show', $team->id) }}" class="text-white rounded py-2 px-4 shadow bg-teal-500 hover:bg-teal-700">See more</a>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>

@endsection
