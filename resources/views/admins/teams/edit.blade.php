@extends('layouts.admin')

@section('content')

    <div class="mx-64 shadow-lg px-12 rounded-lg mt-8">

        <div class="px-2 py-6">
            <h1 class="text-2xl mb-6">Create a new Team</h1>

            <form method="POST" action="{{ route('admins.teams.update', $team->id) }}">
                @csrf
                @method('PATCH')
                <div class="">
                    <div class="mb-4">
                        <p class="mb-2">name</p>
                        <input name="name" class="block px-2 py-2 rounded-lg w-full border focus:border-teal-500" value="{{ $team->name }}">
                    </div>

                    <div class="mb-4">
                        <p class="mb-2">Theme</p>
                        <input name="theme" class="block px-2 py-2 rounded-lg w-full border focus:border-teal-500" value="{{ $team->theme }}">
                    </div>

                    <div class="mb-4">
                        <p class="mb-2">Description</p>
                        <textarea rows="7" name="description" class="block px-2 py-2 rounded-lg w-full border focus:border-teal-500">{{ $team->description }}</textarea>
                    </div>

                    <div class="mb-4">
                        <p class="mb-2">Leader</p>
                        <select class="w-1/2 px-4 py-2 border rounded-lg" name="leader" id="">
                            @foreach($leaders as $teacher)
                                @if($teacher->canLead())
                                    <option value="{{ $teacher->id }}" {{ $teacher->id === $team->leader()->id ? 'selected' : '' }} >{{ $teacher->name }}</option>
                                @endif()
                            @endforeach
                        </select>
                    </div>

                    <div class="mb-6">
                        <p class="mb-4">Members</p>
                        @foreach($team->crew() as $members)
                        <div class="mb-3 cursor-pointer">
                            <label class="cursor-pointer flex items-center">
                                <input class="mr-2" value="{{ $members->id }}" type="checkbox" name="members[]" checked style="-webkit-appearance: checkbox;">
                                <img class="block w-6 rounded-full mr-2" src="{{ $members->avatar }}">
                                <div class="flex items-center text-sm">
                                        <span>{{  $members->name }}</span>
                                        <span class="text-gray-500 ml-2">({{ $members->domain }} - {{ $members->level }})</span>
                                </div>
                            </label>
                        </div>
                        @endforeach
                    </div>

                    <p class="mb-4">Add New Members</p>
                    <div class="mt-6 flex flex-wrap h-64 border overflow-y-scroll px-4 py-4">
                        <input value="{{ $team->leader()->id }}" type="hidden" name="members[]" style="-webkit-appearance: checkbox;">
                        @foreach($teachers as $teacher)
                        <div class="flex w-1/3 w-32 items-start mb-6">
                            <img class="w-12 rounded-full mr-2" src="{{ $teacher->avatar }}">
                            <label>
                                <div class="flex flex-col text-sm">
                                    <span>{{  $teacher->name }}</span>
                                    <span class="text-gray-500 mb-2">({{ $teacher->domain }} - {{ $teacher->level }})</span>
                                    <input value="{{ $teacher->id }}" type="checkbox" name="members[]" style="-webkit-appearance: checkbox;">
                                </div>
                            </label>
                        </div>
                        @endforeach
                    </div>
                    <div class="mt-8">
                        <button class="text-white rounded-lg px-4 py-2 w-32 bg-teal-500 hover:bg-teal-600">Update</button>
                    </div>

                </div>
            </form>

        </div>
    </div>

@endsection