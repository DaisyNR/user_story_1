<x-layout>
    
    <div class="container-fluid text-center bg-custom">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12">
                
                <h1 class="moved-text">
                    <span class="h1 display-3 text-black">Cash</span>
                    <span class="h1 display-4 text-black">from</span>
                    <span class="h1 display-5 text-black">clutter</span>
                </h1>

                @auth
                <div class="row justify-content-center align-items-center">
                    <div class="col-12 col-md-8 text-center">
                        <h1 class="titolo display-5 t-pink text-uppercase">{{ __('ui.welcome') }} {{Auth::user()->name}}</h1>
                        @if(session()->has('message'))
                            <div class="alert text-center alert-success m-auto shadow rounded w-50">{{session('message')}}</div>
                        @endif
                    </div>
                @endauth

                    <a href="{{route('create.article')}}">
                        <button type="submit" class="btn btn-lg m-3 btn btn-outline-dark rounded-3 ">{{ __('ui.sellAnItem') }}</button>
                    </a>
                    <a href="{{route('article.index')}}">
                        <button type="submit" class="btn btn-lg m-3 btn-outline-dark rounded-3">{{ __('ui.browseItems') }}</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center p-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-4 d-flex justify-content-center p-3">
                    <x-card :article="$article"/>
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        No items on sale
                    </h3>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>