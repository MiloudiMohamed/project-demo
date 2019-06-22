<div class="flex border rounded-lg -mt-16">
	<nav class="flex justify-center w-full bg-gray-200">
		<ul class="flex">
			<li class="px-6 py-4">
				<a class="font-semibold hover:text-teal-500 hover:underline" href="{{  route('admins.teachers.index')}}">Teachers</a>
			</li>

			<li class="px-6 py-4">
				<a class="font-semibold hover:text-teal-500 hover:underline" href="{{  route('admins.lectures.index')}}">Lectures</a>
			</li>

			<li class="px-6 py-4">
				<a class="font-semibold hover:text-teal-500 hover:underline" href="{{  route('admins.articles.index')}}">Articles</a>
			</li>

			<li class="px-6 py-4">
				<a class="font-semibold hover:text-teal-500 hover:underline" href="{{  route('admins.workshops.index')}}">Workshops</a>
			</li>

			<li class="px-6 py-4 relative">
				<a href="#" class="font-semibold hover:text-teal-500 hover:underline" href="/register" onclick="event.preventDefault(); document.getElementById('team-dropdown').classList.toggle('hidden')">Teams</a>
				<ul id="team-dropdown" class="absolute hidden bg-white block mt-2 py-2 rounded shadow-md text-gray-700 text-sm w-40">
				    <li><a class="block py-2 px-4 hover:bg-gray-100" href="{{ route('admins.teams.index') }}">List</a></li>
				    <li><a class="block py-2 px-4 hover:bg-gray-100" href="{{ route('admins.teams.create') }}">Create</a></li>
				</ul>
			</li>

		</ul>
	</nav>
</div>
