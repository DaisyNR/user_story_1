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
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="bi bi-person-fill text-black"></i>
          </a>
          <ul class="dropdown-menu">  
            @guest  
            <li class="nav-item">
              <a class="nav-link dropdown-custom" href="{{route('login')}}">{{ __('ui.login') }}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link dropdown-custom" href="{{route('register')}}">{{ __('ui.register') }}</a>
            </li>  
            @endguest
            @auth
            <li class="nav-item">
              <form action="{{route('logout')}}" method="POST">
                @csrf 
                <button class="nav-link" type="submit">Logout</button>
              </form>
            </li> 
            @endauth
          </ul>
        </li>
        
        @auth 
        
        <li class="nav-item">
          <a href="#" class="nav-link text-capitalize">{{ __('ui.welcome') }} {{Auth::user()->name}}!</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('article.index')}}">{{ __('ui.browseItems') }}</a>
        </li>
        <li class="nav-item">
          <a href="{{route('create.article')}}" class="nav-link">{{ __('ui.sellAnItem') }}</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ __('ui.revisorArea') }}
          </a>
          <ul class="dropdown-menu">
            
            <li class="nav-item">
              <a href="{{route('become.revisor')}}" class=" text-center nav-link dropdown-custom">{{ __('ui.becomeRevisor') }}</a>
            </li>
            @if (Auth::user()->is_revisor)
            <li class="nav-item">
              <a href="{{route('revisor.index')}}" class="text-center nav-link btn btn-sm position-relative w-sm-25 dropdown-custom">{{ __('ui.review_articles') }}
                <span class="position-absolute top-0 end-0 translate-middle badge rounded-pill bg-danger">
                  {{\App\Models\Article::toBeRevisedCount()}}
                </span>
              </a>
            </li>
            @endif     
          </ul>
        </li>

        @endauth
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ __('ui.categories') }}
          </a>
          <ul class="dropdown-menu">
            
            @foreach ($categories as $category)
            <li><a class="dropdown-item text-capitalize dropdown-custom" href="{{route('byCategory',['category'=>$category])}}"> {{__("ui.{$category->name}")}}</a></li>
            @if (!$loop->last)
            <hr class="dropdown-divider">
            @endif
            @endforeach
            
          </ul>
        </li>
        
      </ul>
      
      <form action="{{route('article.search')}}" method="GET" class="d-flex ms-auto px-2" role="search">
        <div class="input-group">
          <input type="search" name="query" class="form-control" placeholder="{{ __('ui.search') }}" aria-label="search">
          <button type="submit" class="input-group-text btn btn-outline-success" id="basic-addon2">{{ __('ui.search') }}</button>
        </div>
      </form>
      
      <x-_locale lang="it"/>
      <x-_locale lang="en"/>
      <x-_locale lang="es"/>
      
      
    </div>
  </div>
</nav>