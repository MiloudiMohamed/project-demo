@extends('layouts.master')

@section('content')

    <div class="mx-64 shadow-lg px-12 rounded-lg">

        <div class="px-2 py-6">
            <h1 class="text-2xl mb-6">Lecture</h1>

            <form method="POST" action="{{ route('lectures.store') }}">
                @csrf
                <div class="">
                    <div class="mb-4">
                        <p class="mb-2">Title</p>
                        <input name="title" class="block px-2 py-2 rounded-lg w-full border focus:border-teal-500">
                    </div>

                    <div class="mb-4">
                        <p class="mb-2">Address</p>
                        <input name="address" class="block px-2 py-2 rounded-lg w-full border focus:border-teal-500">
                    </div>

                    <div class="mb-4">
                        <p class="mb-2">Date</p>
                        <input type="date" name="date" class="block px-2 py-2 rounded-lg w-full border focus:border-teal-500">
                    </div>

                    <div class="mb-4">
                        <p class="mb-2">Domain</p>
                        <input name="domain" class="block px-2 py-2 rounded-lg w-full border focus:border-teal-500">
                    </div>

                    <div class="mt-8">
                        <button class="text-white rounded-lg px-4 py-2 w-32 bg-teal-500 hover:bg-teal-600">Save</button>
                    </div>
                </div>
            </form>

        </div>
    </div>

@endsection