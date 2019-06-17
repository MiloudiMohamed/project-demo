@extends('layouts.master')

@section('content')

    <div class="mx-64 shadow-lg px-12 py-16 rounded-lg">
        <h1 class="text-3xl mb-2">{{ $article->title }}</h1>
        <div class="mb-4 flex items-center">
            <span class="inline mr-2">By {{ $article->user->name }}</span>
            <sub class=" inline border text-sm px-2 py-2 bg-teal-400 text-white rounded-full">{{ $article->language }}</sub>
        </div>
        <div class="mb-6">
            <span class="inline mr-12 leading-relaxed">{{ $article->body }}</span>
        </div>
        <div class="flex flex-col items-end text-sm">
            <p class="inline underline mb-2">{{ $article->published_on }} - Volume {{ $article->volume }} </p>
            <p title="{{ $article->created_at->toFormattedDateString() }}" class="">Added: {{ $article->created_at->diffForHumans() }}</p>
        </div>
    </div>

@endsection