@extends('layouts.admin')
	
@section('content')

    <div class="py-16">
    	<table class="table w-full">
    		<thead>
    			<tr class="font-bolds">
    				<th class="px-4 py-2 border bg-gray-100">Name</th>
    				<th class="px-4 py-2 border bg-gray-100">Email</th>
    				<th class="px-4 py-2 border bg-gray-100">Domain</th>
    				<th class="px-4 py-2 border bg-gray-100">Level</th>
    				<th class="px-4 py-2 border bg-gray-100">department</th>
    				<th class="px-4 py-2 border bg-gray-100">Action</th>
    			</tr>
    		</thead>
    		<tbody>
    			@forelse($lectures as $lecture)
    				<tr class="">
    					<td class="px-4 py-2 border text-center">{{ $lecture->name }}</td>
    					<td class="px-4 py-2 border text-center">{{ $lecture->email }}</td>
    					<td class="px-4 py-2 border text-center">{{ $lecture->domain }}</td>
    					<td class="px-4 py-2 border text-center">{{ $lecture->level }}</td>
    					<td class="px-4 py-2 border text-center">{{ $lecture->department }}</td>
    					<td class="px-4 py-2 border text-center flex justify-center">
    						<div class="mr-6">
	    						<form action="{{ route('admins.lectures.update', $lecture->id) }}" method="POST">
	    							@csrf
	    							@method('PATCH')
	    							<button type="submit" class="text-xs px-4 py-1 bg-green-500 text-white rounded-lg hover:bg-green-700">Accept</button>	
	    						</form>
    						</div>
    						<div>
	    						<form action="{{ route('admins.teachers.destroy', $lecture->id) }}" method="POST">
	    							@csrf
	    							@method('DELETE')
	    							<button type="submit" class="text-xs px-4 py-1 bg-red-500 text-white rounded-lg hover:bg-red-700">Delete</button>	
	    						</form>
    						</div>
    					</td>
    				</tr>
    			@empty
    				<tr>
    					<td>
    						<p class="py-2 px-4">No record found.</p>
    					</td>
    				</tr>
    			@endforelse
    		</tbody>
    	</table>
    </div>

@endsection