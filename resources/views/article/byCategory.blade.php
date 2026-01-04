<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center text-center mt-5">
            <div class="col-12 pt-5">
                <h1 class="display-6">Items belonging to the category: <span class="fst-italic fw-bold text-uppercase">{{$category->name}}</span></h1>
            </div>
        </div>
        <div class="row justify-content-center align-items-center py-5">
            @forelse ($articles as $article)
                <div class="col-12 col-md-3">
                    <x-card :article="$article"/>
                </div>
            @empty
                <div class="col-12 text-center">
                    <h3>
                        No items for this category
                    </h3>
                </div>
                @auth
                    <a href="{{route('create.article')}}" class="btn btn-dark my-5">Upload an item</a>
                @endauth
            @endforelse
        </div>
    </div>
</x-layout>