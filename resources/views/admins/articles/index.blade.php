@extends('layouts.admin')

@section('content')

    <div class="py-16">
    	<table class="table w-full">
    		<thead>
    			<tr class="font-bolds">
                    <th class="px-4 py-2 border bg-gray-100">Author</th>
    				<th class="px-4 py-2 border bg-gray-100">Title</th>
    				<th class="px-4 py-2 border bg-gray-100">Body</th>
    				<th class="px-4 py-2 border bg-gray-100">Volume</th>
    				<th class="px-4 py-2 border bg-gray-100">Published on</th>
    				<th class="px-4 py-2 border bg-gray-100">Language</th>
    				<th class="px-4 py-2 border bg-gray-100">Action</th>
    			</tr>
    		</thead>
    		<tbody>
    			@forelse($articles as $article)
    				<tr class="">
                        <td class="px-4 py-2 border text-center">{{ $article->user->name }}</td>
    					<td class="px-4 py-2 border text-center">{{ $article->title }}</td>
    					<td class="px-4 py-2 border text-center">{{ str_limit($article->body, 50) }}</td>
    					<td class="px-4 py-2 border text-center">{{ $article->volume }}</td>
    					<td class="px-4 py-2 border text-center">{{ $article->published_on }}</td>
    					<td class="px-4 py-2 border text-center">{{ $article->language }}</td>
    					<td class="px-4 py-2 border text-center flex justify-center">
    						<div class="mr-6">
	    						<form action="{{ route('admins.articles.update', $article->id) }}" method="POST">
	    							@csrf
	    							@method('PATCH')
	    							<button type="submit" class="text-xs px-4 py-1 bg-green-500 text-white rounded-lg hover:bg-green-700">Accept</button>
	    						</form>
    						</div>
    						<div>
	    						<form action="{{ route('admins.articles.destroy', $article->id) }}" method="POST">
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