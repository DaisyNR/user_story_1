<div class="card d-flex flex-column" style="width: 10rem; height: 100%">
    <div class="card-body p-2 d-flex flex-column">
        <h5 class="card-title">{{$article->title}}</h5>
        <h6 class="card-subtitle mb-3">{{$article->price}}€</h6>
        <p class="card-text">{{$article->description}}</p>
        <a href="{{route('article.show', compact('article'))}}" class="btn btn-green btn-sm mt-auto ">Read more...</a>
        @if ($article->category)
        <a href="{{ route('byCategory', $article->category) }}"
            class="btn btn-green btn-sm mt-auto">
            {{ $article->category->name }}
        </a>
        @endif
        
    </div>
</div>