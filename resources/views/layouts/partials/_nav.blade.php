  
 <nav class="navbar navbar-expand-md navbar-light static-top bg-light">
    <a class="navbar-brand" href="{{route('root_path')}}">Laracarte</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="container">
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item {{set_active_route('root_path')}}">
          <a class="nav-link" href="{{route('root_path')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{set_active_route('about_path')}}" href="{{route('about_path')}}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Artisans</a>
        </li>
         <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Planet</a>
        <div class="dropdown-menu" aria-labelledby="dropdown01">
          <a class="dropdown-item" href="#">Laravel.com</a>
          <a class="dropdown-item" href="#">Laravel.io</a>
          <a class="dropdown-item" href="#">Laracasts</a>
          <a class="dropdown-item" href="#">Larajobs</a>
          <a class="dropdown-item" href="#">Laravel News</a>
          <a class="dropdown-item" href="#">Larachats</a>
        </div>
      </li>
        <li class="nav-item">
          <a class="nav-link {{set_active_route('contact_path')}}" href="{{route('contact_path')}}" tabindex="-1" aria-disabled="true">Contact</a>
        </li>
      </ul>
      </div>
      <ul class="navbar-nav navbar-right">
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}" tabindex="-1" aria-disabled="true">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}" tabindex="-1" aria-disabled="true">Register</a>
        </li>
        @else
        <li class="nav-item dropdown">
          <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
            {{ Auth::user()->full_name }} <span class="caret"></span>
          </a>

          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
          </a>

          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
        </div>
      </li>
        @endguest
      </ul>
    </div>
  </nav>
