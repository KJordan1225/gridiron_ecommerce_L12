<nav class="navbar navbar-expand-lg sticky-top bg-white shadow">
  <div class="container">

  <style>
    ul
    {
        list-style-type: none;
    }
  </style>

    <a class="navbar-brand" href="#">Gridiron Warrior Helmet Hats</a>
    
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0" style="list-style: none;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
            @auth
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                {{Auth::user()->name}}
            </a>          
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{ route('home') }}">Home</a></li>
            @if (Auth::user()->role == 'admin')
              <li><a class="dropdown-item" href="{{ route('admin.dashboard') }}">Admin Dashboard</a></li>
            @endif
            <li>
              <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </a>                
              </form>
            </li>
            <!-- <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li> -->
            @endauth
          </ul>
        </li>
        <!-- <li class="nav-item">
          <a class="nav-link disabled" aria-disabled="true">Disabled</a>
        </li> -->
        
            @auth
            <li class="nav-item">
                <a 
                    href="{{ url('/dashboard') }}"
                    class="nav-link"
                >
                    Dashboard
                </a>
            </li>
            @else
            <li class="nav-item" style="list-style: none;">
                <a
                    href="{{ route('login') }}"
                    class="nav-link"
                >
                    Log in
                </a>
            </li>
            &nbsp;&nbsp;
                @if (Route::has('register'))
                <li class="nav-item" style="list-style: none;">
                    <a
                        href="{{ route('register') }}"
                        class="nav-link">
                        Register
                    </a>
                </li>
                @endif
            @endauth          
        </li>
      </ul>
      
    </div>
  </div>
</nav>