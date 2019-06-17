@extends('layouts.master')

@section('content')

    <div class="mx-64 flex flex-wrap">

        @foreach([1, 2, 3, 4] as $i)
        @foreach($articles as $article)
        <div class="px-2 py-6 w-1/3">
            <div class="border px-2 pb-4 rounded hover:shadow trans-25">
                <h1 class="text-base mb-2 py-4 border-b hover:underline">
                    <a title="{{ $article->title }}" href="{{ route('articles.show', $article->id) }}">
                        {{ str_limit($article->title, 25) }}
                        <sup><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-3 inline icon-link"><path class="secondary" d="M19.48 13.03l-.02-.03a1 1 0 1 1 1.75-.98A6 6 0 0 1 16 21h-4a6 6 0 1 1 0-12h1a1 1 0 0 1 0 2h-1a4 4 0 1 0 0 8h4a4 4 0 0 0 3.48-5.97z"></path><path class="primary" d="M4.52 10.97l.02.03a1 1 0 1 1-1.75.98A6 6 0 0 1 8 3h4a6 6 0 1 1 0 12h-1a1 1 0 0 1 0-2h1a4 4 0 1 0 0-8H8a4 4 0 0 0-3.48 5.97z"></path></svg></sup>
                    </a>
                </h1>
                <div class="inline text-sm flex items-center mb-2">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 mr-2 inline icon-user-circle"><circle cx="12" cy="12" r="10" class="primary"></circle><path class="secondary" d="M3.66 17.52A5 5 0 0 1 8 15h8a5 5 0 0 1 4.34 2.52 10 10 0 0 1-16.68 0zM12 13a4 4 0 1 1 0-8 4 4 0 0 1 0 8z"></path></svg>
                    {{ $article->user->name }}
                </div>

                <div class="inline mr-2 text-sm flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-4 mr-2 inline icon-calendar-remove"><path class="primary" d="M5 4h14a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V6c0-1.1.9-2 2-2zm0 5v10h14V9H5z"></path><path class="secondary" d="M7 2a1 1 0 0 1 1 1v3a1 1 0 1 1-2 0V3a1 1 0 0 1 1-1zm10 0a1 1 0 0 1 1 1v3a1 1 0 0 1-2 0V3a1 1 0 0 1 1-1zm-2 13H9a1 1 0 0 1 0-2h6a1 1 0 0 1 0 2z"></path></svg>
                    {{ $article->created_at->toFormattedDateString() }}
                </div>
            </div>
        </div>
        @endforeach
        @endforeach
    </div>

@endsection