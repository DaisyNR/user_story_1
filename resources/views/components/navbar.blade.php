<nav class="navbar navbar-expand-lg border-bottom-black bg-white fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="#"><i class="bi bi-bag-heart-fill b-yellow p-2 rounded-5 border border-dark"></i></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

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

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
          </a>
          <ul class="dropdown-menu">

            @foreach ($categories as $category)
                <li><a class="dropdown-item text-capitalize" href="{{route('byCategory',['category'=>$category])}}">{{$category->name}}</a></li>
                @if (!$loop->last)
                    <hr class="dropdown-divider">
                @endif
            @endforeach

          </ul>
        </li>
            
      </ul>
    </div>
  </div>
</nav>