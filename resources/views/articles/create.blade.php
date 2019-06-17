@extends('layouts.master')

@section('content')

    <div class="mx-64 shadow-lg px-12 rounded-lg">

        <div class="px-2 py-6">
            <h1 class="text-2xl mb-6">
                Create a New Article
            </h1>
            <form method="POST" action="{{ route('articles.store') }}">
                @csrf
                <div class="">
                    <div class="mb-4">
                        <p class="mb-2">Title</p>
                        <input name="title" class="block px-2 py-2 rounded-lg w-full border focus:border-teal-500">
                    </div>

                    <div class="mb-4">
                        <p class="mb-2">Body</p>
                        <textarea name="body"rea class="block px-2 py-2 rounded-lg w-full border focus:border-teal-500" rows="7"></textarea>
                    </div>

                    <div class="mb-4">
                        <p class="mb-2">Volume</p>
                        <input name="volume" class="block px-2 py-2 rounded-lg w-full border focus:border-teal-500">
                    </div>

                    <div class="mb-4">
                        <p class="mb-2">Published on</p>
                        <input name="Published_on" class="block px-2 py-2 rounded-lg w-full border focus:border-teal-500">
                    </div>

                    <div class="mb-4">
                        <p class="mb-2">Language</p>
                        <input name="language" class="block px-2 py-2 rounded-lg w-full border focus:border-teal-500">
                    </div>

                    <div class="mt-8">
                        <button class="text-white rounded-lg px-4 py-2 w-32 bg-teal-500 hover:bg-teal-600">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection