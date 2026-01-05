<nav class="navbar navbar-expand-lg border-bottom-black bg-white fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="bi bi-bag-heart-fill b-yellow p-2 rounded-5 border border-dark"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mb-2 mb-lg-0">
        
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="{{route('homepage')}}">Home</a>
        </li>
        
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">Login</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">Register</a>
        </li>  
        @endguest
        
        @auth 
        <li class="nav-item">
          <a href="#" class="nav-link">Welcome {{Auth::user()->name}}</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}">Browse all items</a>
        </li>
        <li class="nav-item">
          <a href="{{route('create.article')}}" class="nav-link">Sell an item</a>
        </li>
        <li class="nav-item">
          <form action="{{route('logout')}}" method="POST">
            @csrf 
            <button class="nav-link" type="submit">Logout</button>
          </form>
        </li>
        
        
        @endauth
        {{-- @if (Auth::user()->is_revisor) --}}
        <li class="nav-item">
          <a href="{{route('revisor.index')}}" class="nav-link btn btn-sm position-relative w-sm-25">Revisor Area
            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
              {{\App\Models\Article::toBeRevisedCount()}}
            </span>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('become.revisor')}}" class="nav-link">Become a Revisor</a>
        </li>
        {{-- @endif   --}}
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">
            
            @foreach ($categories as $category)
            <li><a class="dropdown-item text-capitalize dropdown-custom" href="{{route('byCategory',['category'=>$category])}}">{{$category->name}}</a></li>
            @if (!$loop->last)
            <hr class="dropdown-divider">
            @endif
            @endforeach
            
          </ul>
        </li>

        <form action="{{route('article.search')}}" method="GET" class="d-flex ms-auto" role="search">
          <div class="input-group">
            <input type="search" name="query" class="form-control" placeholder="Search" aria-label="search">
            <button type="submit" class="input-group-text btn btn-outline-success" id="basic-addon2">Search</button>
          </div>
        </form>
        
      </ul>
    </div>
  </div>
</nav>