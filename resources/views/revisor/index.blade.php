<x-layout>
    <div class="container-fluid pt-5">
        <div class="row justify-content-center">
            <div class="col-12 pb-2"> 
                <h1 class="display-5 text-center ">Revisor dashboard</h1>
            </div>
        </div>
    </div>

    
    
    @if ($article_to_check)
    
    <div class="row justify-content-center">
        @if ($article_to_check->images->count())
            @foreach ($article_to_check->images as $key=>$image)
                <div class="col-6 col-md-4 mb-4 text-center">
                            <img src="{{Storage::url($image->path)}}" class="img-fluid rounded shadow" alt="immagine {{$key +1}} dell'articolo {{$article_to_check->title}}">
                        </div>
                
            @endforeach   
        @else
            @for ($i = 0; $i < 6; $i++)
                        <div class="col-6 col-md-4 mb-4 text-center">
                            <img src="https://picsum.photos/300" class="img-fluid rounded shadow" alt="placeholder">
                        </div>
            @endfor
        @endif
        
        <div class="col-md-4 ps-4 d-flex flex-column justify-content-between">
            <div>
                <h2 class="text-uppercase fw-bold">{{$article_to_check->title}}</h2>
                {{-- <h3>Author:{{$article_to_check->user->name}}</h3> --}}
                <h4>{{$article_to_check->price}}€</h4>
                {{-- <h4 class="fst-italic text-muted">#{{$article_to_check->category->name}}</h4> --}}
                <p class="h6">{{$article_to_check->description}}</p>
            </div>
            {{-- ALERT MESSAGE --}}
            @if (session()->has('message'))
            <div class="row justify-content-center">
                <div class="col-5 alert alert-success text-center shadow b-yellow rounded">
                    {{session('message')}}
                </div>
            </div>   
            @endif

            <div class="d-flex pb-4 justify-content-around">
                <form action="{{route('reject',['article' => $article_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-danger py-2 px-5 fw-bold">Reject</button>
                </form>
                <form action="{{route('accept',['article'=>$article_to_check])}}" method="POST">
                    @csrf
                    @method('PATCH')
                    <button class="btn btn-success py-2 px-5 fw-bold">Accept</button>
                </form>

            </div>
        </div>
    </div>
    
    @else
    
    <div class="row justify-content-center align-items-center text-center">
        <div class="col-12">
            <h2 class="fst-italic display-4">No items to review</h1>
            <a href="{{route('homepage')}}" class="mt-3 btn btn-outline-dark">Back to homepage</a>
        </div>
    </div>
        
    @endif
</x-layout>