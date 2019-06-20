@extends('layouts.master')

@section('content')
	
	

	<div class="flex flex-wrap px-6">
		@foreach($teachers as $teacher)
			<div class="w-1/4 px-8 mb-12">
				<div class="flex flex-col border rounded-lg hover:shadow">
					<img class="h-48 rounded-lg" src="{{ $teacher->avatar }}">
					<div class="px-6 py-4 leading-relaxed">
						<p>{{ $teacher->name }}</p>
						<p>{{ $teacher->email }}</p>
						<p>{{ $teacher->domain }}</p>
						<p>{{ $teacher->department }}</p>
						<p>{{ $teacher->level }}</p>

						<a href="{{ $teacher->link }}" class="text-center block w-full px-4 py-2 text-white mt-4 rounded bg-teal-500 hover:text-white hover:bg-teal-400 ">Visit Profile</a>
					</div>
				</div>
			</div>

		@endforeach
	</div>

@endsection