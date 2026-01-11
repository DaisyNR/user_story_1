<x-layout>
    <div class="container">
        
        <div class="row justify-content-center text-center mt-5">
            <div class="col-12">
                <h1 class="display-4">
                    {{ $article->title }}
                </h1>
            </div>
        </div>
        
        <div class="row align-items-start mt-4">
            
            <div class="col-12 col-md-6">
                <h4 class="fw-bold">Price</h4>
                <p class="fs-4">{{ $article->price }} €</p>
                
                <h4 class="fw-bold">Description</h4>
                <p>{{ $article->description }}</p>
                
                @if ($article->category)
                <a href="{{ route('byCategory', $article->category) }}"
                    class="mb-3"> <span class="badge rounded-pill text-bg-secondary fw-light">#{{ __('ui.' . $article->category->name) }}</span> 
                </a>
                @endif
            </div>
            
            {{-- IMMAGINI --}}
            <div class="col-12 col-md-6">
                
                @if ($article->images->count() > 0)
                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        @foreach ($article->images as $key => $image)
                        <div class="carousel-item @if($loop->first) active @endif">
                            <img
                            src="{{ Storage::url($image->path) }}"
                            class="d-block w-100 rounded shadow"
                            alt="Immagine {{ $key + 1 }} dell'articolo {{ $article->title }}"
                            >
                        </div>
                        @endforeach
                    </div>
                    
                    @if ($article->images->count() > 1)
                    <button class="carousel-control-prev" type="button"
                    data-bs-target="#carouselExample" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                
                <button class="carousel-control-next" type="button"
                data-bs-target="#carouselExample" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
                <span class="visually-hidden">Next</span>
            </button>
            @endif
        </div>
        @else
        <img src="https://picsum.photos/500"
        class="d-block w-50 rounded shadow"
        alt="No photo provided">
        @endif
        
    </div>
    
</div>
</div>
</x-layout>
