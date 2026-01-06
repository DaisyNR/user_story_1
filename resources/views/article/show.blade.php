<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center text-center mt-5">
            <h1 class="display-4">
                {{$article->title}}
            </h1>
        </div>
        
        <div class="row justify-content-center p-4">
            <div class="col-12 col-md-6 mb-3">
                @if($article->images->count() > 0)

                <div id="carouselExample" class="carousel slide">
                    <div class="carousel-inner">
                        @foreach ($article->images as $key=>$image)
                        <div class="carousel-item @if ($loop->first) active @endif">
                            <img src="{{Storage::url($image->path)}}" alt="Immagine {{$key +1 }} dell'articolo {{$article->title}}" class="d-block w-100 rounded shadow">
                        </div>
                        @endforeach  
                    </div>

                    @if ($article->images->count() > 1)
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                        
                    @endif
                </div>

                @else

                    <img src="https://picsum.photos/300" class="d-block w-100 rounded shadow" alt="No photo provided">
                @endif
                </div>
            </div>

            <div class="col-12 col-md-6 text-center">
                <h2 class="display-5"><span class="fw-bold">Title: </span>{{$article->title}}</h2>
                <div class="d-flex flex-column justify-content-center h-75">
                    <h4 class="fw-bold">Price: {{$article->price}}€</h4>
                    <h5>Description:</h5>
                    <p>{{$article->description}}</p>
                </div>
            </div>
        </div>
    </div>
</x-layout>