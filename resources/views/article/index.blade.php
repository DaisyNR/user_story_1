<x-layout>
    <header class="height:200px;">
        <div class="container h-100 pt-5">
            <div class="row h-100 justify-content-center align-items-center">
                <div class="col-12 col-md-8">
                    <h1 class="text-center display-4 t-green">Browse all items</h1>
                </div>
            </div>
        </div>
    </header>
    


    <div class="container">
        <div class="row">
            @foreach($articles as $article)
            <div class="col-12 col-md-3 d-flex justify-content-center my-3">
                <x-card :article="$article"/>
            </div>
            @endforeach
        </div>
    </div>
    
    
</x-layout>