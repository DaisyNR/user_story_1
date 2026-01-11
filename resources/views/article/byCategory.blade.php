<x-layout>
    <div class="container">
        <div class="row justify-content-center align-items-center text-center mt-5">
            <div class="col-12">
                <h3 class="display-6">{{ __('ui.itemsBelonging') }} <br/> <span class=" h1">{{__("ui.{$category->name}")}}</span></h3>
            </div>
        </div>
        <div class="row justify-content-center align-items-center py-2">
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
                
                <div class="d-flex justify-content-center">
                    <a href="{{route('create.article')}}" class="btn btn-outline-dark my-5">Upload an item</a>
                </div>
                
            @endforelse
        </div>
    </div>
</x-layout>