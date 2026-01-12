<x-layout>
    
    <div class="container-fluid text-center bg-custom">
        <div class="row vh-100 justify-content-center align-items-center">
            <div class="col-12">
                @guest
                <h1 class="moved-text">
                    <span class="h1 display-3 text-black">Cash</span>
                    <span class="h1 display-4 text-black">from</span>
                    <span class="h1 display-5 text-black">clutter</span>
                </h1>  
                @endguest

                @auth
                <div class="col-12">
                    <h1 class="titolo display-3 text-black text-uppercase text-center">{{ __('ui.welcome') }} {{Auth::user()->name}}</h1>
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
        <div class="row justify-content-center align-items-start p-4">
            <h3>{{ __('ui.latestArticles') }}</h3>
            @forelse ($articles as $article)
                <div class="col-12 col-md-2">
                    <x-card :article="$article"/>
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        {{ __('ui.noItemsOnSale') }}
                    </h3>
                </div>
            @endforelse
        </div>
    </div>
</x-layout>