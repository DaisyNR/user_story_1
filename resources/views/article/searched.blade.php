<x-layout>
    <div class="container-fluid">
        <div class="row py-5 justify-content-center align-items-center text-center">
            <div class="col-12">
                <h1 class="display-5">{{ __('ui.results') }}<br> <span class="fst-italic text-capitalize">{{$query}}</span></h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card :article="$article"/>
                </div>
            @empty
                <div class="col-12">
                    <h3 class="text-center">
                        {{ __('ui.noMatch') }}
                    </h3>
                </div>
            @endforelse
        </div>
        <div class="d-flex justify-content-center">
            <div>
                {{$articles->links()}}
            </div>
        </div>
    </div>
</x-layout>