@extends('layouts.master')

@section('content')

    <div class="flex mx-64 shadow-lg rounded-lg">

    	<div class="w-1/3">
    		<img class="h-full w-full rounded-lg" src="{{ asset('img/workshop.jpg') }}">	
    	</div>

    	<div class="w-2/3 px-6 py-4">	
	        <h1 class="text-2xl mb-2">{{ $workshop->title }}</h1>
	        <div class="mb-4 flex items-center">
	            <span class="inline mr-2">By {{ $workshop->user->name }}</span>
	            <sub class=" inline border text-sm px-2 py-2 bg-teal-400 text-white rounded-full">{{ $workshop->language }}</sub>
	        </div>
	        <div class="mb-2">
	            <span class="inline mr-12 leading-relaxed">{{ $workshop->address }} - {{ $workshop->date }}</span>
	        </div>
	        <div class="mb-2">
	            <span class="inline mr-12 leading-relaxed">40/{{ $workshop->places }} available place</span>
	        </div>
    	</div>
    </div>

@endsection