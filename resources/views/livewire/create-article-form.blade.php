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
    <div class="mb-3">
        <select id="category" wire:model.blur="category" class="form-control"  @error('category') is-invalid @enderror>
            <option label>Select a category...</option>
            @foreach ($categories as $category)
                <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach
        </select>
        @error('category') 
            <p class="fst-italic text-danger">{{$message}}</p>
        @enderror
    </div>
    <div class="d-flex justify-content-start">
        <button type="submit" class="btn btn-pink">Submit</button>
    </div>
    @if (session()->has('success'))
    <div class="alert alert-success text-center mt-3">
        {{session('success')}}
    </div>
    @endif
</form>

