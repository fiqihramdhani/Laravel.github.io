<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/" style="font-family: Pacifico" >MY - WEBSITE</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto  mb-lg-0 ">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('/')? 'active': '' }}" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('Blog')? 'active': '' }}" href="/Blog">Blog</a>
        </li>
         <li class="nav-item">
          <a class="nav-link {{ Request::is('About')? 'active': '' }}" href="/About">About</a>
        </li>
         <li class="nav-item">
          <a class="nav-link {{ Request::is('Contact')? 'active': '' }}" href="/Contact">Contact</a>
        </li>

      </ul>
      <ul class="navbar-nav">
        <form class="d-flex mt-2 px-3" action="/Blog" method="GET" >
    @if(request('Category'))
       <input type="hidden" placeholder="Search.." name="Category" style="width: 40%"  value="{{ request('Category') }}">
    @endif

    @if(request('User'))
       <input type="hidden" placeholder="Search.." name="User" style="width: 100%"  value="{{ request('User') }}">
    @endif
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="search" style="width: 100%">
        <button class="btn btn-success" type="submit">Search</button>
      </form>

       @auth
        <li class="nav-item dropdown mt-2" >
          <a class="nav-link dropdown-toggle text-center"  id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
          Welcome , {{ auth()->User()->name }}
          </a>



          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
           @can('admin')
            <li><a class="dropdown-item" href="/Dashboard"><i class="bi bi-menu-button-wide" style="padding-right: 25px"></i>Dashboard</a></li>
             <li><hr class="dropdown-divider"></li>
            <li>

            @endcan


                <form action="/SignOut" method="POST">
                @csrf
                <button class="dropdown-item" type="submit"><i class="bi bi-box-arrow-right " style="padding-right: 25px"></i>SignOut</button>

                </form>



          @else

            <li><a class="btn btn-primary mt-2" href="/Sign">Sign in</a></li>

          @endauth

        </li>
        </ul>
        </li>
      </ul>
      </div>
    </div>
  </nav>
</header>
