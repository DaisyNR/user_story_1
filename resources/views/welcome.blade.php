<x-layout>
    <div class="container-fluid text-center">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12">
                
                @auth
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-8 text-center">
                        <h1 class="titolo display-3">BENVENUT@ {{Auth::user()->name}}</h1>
                    </div>
                    @endauth
                    
                    <h1 class="moved-text">
                        <span class="h1 display-3">Cash</span>
                        <span class="h1 display-4">from</span>
                        <span class="h1 display-5">clutter</span>
                    </h1>
                    <a href="{{route('create.article')}}">
                        <button type="submit" class="btn btn-lg m-3 btn btn-outline-dark rounded-3 ">Sell an item</button>
                    </a>
                    <a href="#">
                        <button type="submit" class="btn btn-lg m-3 btn-outline-dark rounded-3">Browse items</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>