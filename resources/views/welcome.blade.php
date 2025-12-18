<x-layout>
    <div class="container-fluid text-center bg-body-tertiary">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12">

                @auth
               <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-8 text-center">
                    <h1 class="titolo display-3">BENVENUT@ {{Auth::user()->name}}</h1>
                </div>
                @endauth
                
                <h1 class="display-4">
                    Vendi il tuo usato!
                </h1>
                <a href="{{route('create.article')}}">
                    <button type="submit" class="btn btn-lg m-3 btn btn-outline-dark b-custom">Carica un articolo</button>
                </a>
                <a href="#">
                    <button type="submit" class="btn btn-lg m-3 btn-outline-dark b-custom">Vedi i tuoi annunci</button>
                </a>
            </div>
        </div>
    </div>
    </div>
</x-layout>