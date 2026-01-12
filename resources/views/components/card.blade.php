<div class="card d-flex flex-column" style="width: 10rem; height: 100%">
    <div class="card-body p-2 d-flex flex-column">
        <img src="{{$article->images->isNotEmpty() ? $article->images->first()->getUrl(300,300) : 'https://picsum.photos/200'}}" class="card-img-top pb-2" alt="Immagine dell'articolo {{$article->title}}">
        <h5 class="card-title">{{$article->title}}</h5>
        <h6 class="card-subtitle mb-3">{{$article->price}}€</h6>
        <p class="card-text">{{$article->description}}</p>
        @if ($article->category)
        <a href="{{ route('byCategory', $article->category) }}"
            class="mb-3"> <span class="badge rounded-pill text-bg-secondary fw-light">#{{ __('ui.' . $article->category->name) }}</span> 
        </a>
        @endif
        <a href="{{route('article.show', $article)}}" class="btn btn-green btn-sm mt-auto ">{{ __('ui.readMore...') }}</a>
        
    </div>
</div>