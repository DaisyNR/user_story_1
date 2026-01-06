<form class="border-pink b-light-pink shadow rounded p-4 my-5" wire:submit="store">
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" @error('title') is-invalid @enderror id="title" wire:model.blur="title">
        @error('title') 
            <p class="fst-italic text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Description</label>
        <textarea class="form-control" @error('description') is-invalid @enderror cols="30" rows="3" id="description" wire:model.blur="description"></textarea>
        @error('description') 
            <p class="fst-italic text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input type="text" class="form-control" @error('price') is-invalid @enderror id="price" wire:model.blur="price">
        @error('price') 
            <p class="fst-italic text-danger">{{$message}}</p>
        @enderror
    </div>
    {{-- CATEGORIES --}}
    <div class="mb-3">
        <select id="category" wire:model.blur="category" class="form-control"  @error('category') is-invalid @enderror>
            <option label>Select a category...</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{__("ui.{$category->name}")}}</option>
            @endforeach
        </select>
        @error('category') 
            <p class="fst-italic text-danger">{{$message}}</p>
        @enderror
    </div>
    {{-- IMAGES --}}
    <div class="mb-3">
        <input type="file" wire:model.live="temporary_images" multiple class="form-control @error('temporary_images.*') is_invalid @enderror" placeholder="Img/">
        @error('temporary_images.*')
            <p class="fst-italic text-danger">{{$message}}</p>
        @enderror
        @error('temporary_images')
            <p class="fst-italic text-danger">{{$message}}</p>
        @enderror
    </div>
    @if (!empty($images))
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="row border border-4 border-white rounded shadow my-2">
                    @foreach ($images as $key => $image)
                        <div class="col d-flex flex-column align-items-center my-3">
                            <div class="img-preview mx-auto shadow rounded" style="background-image: url({{$image->temporaryUrl()}})"></div>
                            <button class="btn mt-3 btn-danger" type="button" wire:click="removeImage({$key})">X</button>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    @endif

    <div class="d-flex justify-content-start">
        <button type="submit" class="btn btn-pink">Submit</button>
    </div>
    @if (session()->has('success'))
    <div class="alert alert-success text-center mt-3">
        {{session('success')}}
    </div>
    @endif
</form>

