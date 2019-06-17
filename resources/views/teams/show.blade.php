@extends('layouts.master')

@section('content')

  <div class="bg-white mx-auto container">
    <h1 class="text-4xl text-center font-bold mb-6 underline ">{{ $team->name }}</h1>
    <p class="text-center mb-6 border-b pb-6">{{ $team->description }}</p>
    <div class="flex py-6">
      <div class="w-3/5 rounded-lg shadow-lg mr-2">

        <div class="flex flex-col justify-center items-center px-6 py-4 mb-2 border-b bg-gray-100 px-6">
          <div class="flex justify-center items-center">
            <img class="w-24 rounded-full" src="{{ asset('img/default.jpg') }}" alt="">
          </div>
          <div class="flex flex-col px-4 py-2 text-center">
            <h1 class="text-lg font-bold mb-1">{{ $team->leader()->name }}</h1>
            <p class="">{{ $team->leader()->domain }}</p>
            <p class="">{{ $team->leader()->level }}</p>
            <p class="">Joined {{ $team->leader()->created_at->format('M, Y') }}</p>
            <a href="#" class="text-teal-500 hover:text-teal-700 hover:underline">See profile</a>
          </div>
        </div>

        <div class="flex justify-between flex-wrap px-6">
          @foreach($team->crew() as $member)
            <div class="flex px-6 py-4 mb-2">
              <div class="flex justify-center items-center">
                <img class="w-16 rounded-full" src="{{ asset('img/default.jpg') }}" alt="">
              </div>
              <div class="flex flex-col px-4 py-2">
                <h1 class="text-base font-bold mb-1">{{ $member->name }}</h1>
                <p class="mb-1 text-xs">{{ $member->domain }}</p>
                <p class="mb-1 text-xs">{{ $member->level }}</p>
                <p class="mb-1 text-xs">{{ $member->created_at->format('M, Y') }}</p>
                <a href="#" class="text-teal-500 hover:text-teal-700 hover:underline">See profile</a>
              </div>
            </div>
          @endforeach
        </div>

      </div>
      <div class="w-2/5 px-4 rounded-lg">
        <h1 class="text-3xl font-bold mb-2 text-gray-700 mb-6">Articles ({{ $team->articles->count() }})</h1>

        @foreach($team->articles as $article)
          <div class="py-4 px-2 rounded {{ $loop->iteration % 2 === 1 ? 'bg-gray-100' : '' }}">
            <h1 class="font-semibold text-lg text-gray-600">{{ $article->title }}</h1>
            <small class="inline-block mb-1">By {{ $article->user->name }}</small>
            <div class="mb-1">
              <span>{{ str_limit($article->body, 100) }}</span>
              <a class="text-teal-500 hover:underline" href="{{ route('articles.show', $article->id) }}">Read more</a>
            </div>
            <p title="{{ $article->created_at->toFormattedDateString() }}" class="text-xs text-right">Added: {{ $article->created_at->diffForHumans() }}</p>
          </div>
        @endforeach
      </div>
    </div>
  </div>

@endsection
