<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">
      <img src="./media/logo.png" alt="logo" width="120" height="40">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>

        @guest  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto Utente
          </a>
          <ul class="dropdown-menu">
            <li>
              <a class="dropdown-item" href="{{route('login')}}">Login</a>
            </li>
            <li><hr class="dropdown-divider"></li>
            <li>
              <a class="dropdown-item" href="{{route('register')}}">Registrati</a>
            </li>            
          </ul>
        </li>
        @endguest

        @auth
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Benvenuto {{Auth::user()->name}}
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="{{route('article.create')}}">Crea un articolo</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#" onclick="event.preventDefault(); document.querySelector('#logout').submit();">Logout</a></li>
            <form action="{{route('logout')}}" method="POST" id="logout">
              @csrf
            </form>
          </ul>
        </li>
        @endauth  
      </ul>
      
    </div>
  </div>
</nav>