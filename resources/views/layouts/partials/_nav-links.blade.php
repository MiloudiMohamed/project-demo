<nav class="flex justify-between">
    <ul class="sf-menu">
       <li><a href="{{ route('home') }}">Home</a></li>
       <li><a href="{{ route('teams.index') }}">Teams</a></li>
       <li><a href="{{ route('teachers.index') }}">Professors</a></li>
       <li><a href="{{ route('articles.index') }}">Articles</a></li>
       <li><a href="{{ route('about') }}">About</a></li>
       <li><a href="{{ route('contact') }}">Contacts</a></li>
    </ul>

    @auth
        <ul class="flex">
            @if(auth()->user()->is_admin)
              <li>
                  <a class="px-4 py-2" href="/admins" >Adminstrator</a>
              </li>
            @endif

            <li>
                <a href="#" class="px-4 py-2" href="/register" onclick="event.preventDefault(); document.getElementById('dropdown').classList.toggle('hidden')">{{ auth()->user()->name }} + </a>
                <ul id="dropdown" class="absolute hidden bg-white block mt-2 py-2 rounded shadow-md text-gray-700 text-sm w-40">
                    <li><a class="block py-2 px-4 hover:bg-gray-100" href="{{ route('articles.create') }}">Add Article</a></li>
                    <li><a class="block py-2 px-4 hover:bg-gray-100" href="{{ route('workshops.index') }}">Add Workshop</a></li>
                    <li><a class="block py-2 px-4 hover:bg-gray-100" href="{{ route('lectures.index')}}">Add Lecture</a></li>
                    <li>
                      <a class="block py-2 px-4 hover:bg-gray-100" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                        Logout
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </a>
                    </li>
                </ul>

            </li>
        </ul>
    @endauth

    @guest
        <ul class="flex">
          <li><a class="px-4 py-2 border mr-2 rounded hover:text-white hover:bg-teal-500" href="/register">Register</a></li>
          <li><a class="hover:underline" href="/login">Login</a></li>
        </ul>

    @endguest



</nav>