<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="row text-center">
                <h1 class="display-4 pt-5">Login</h1>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6">
            <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="mb-3">
                    <label for="loginEmail" class="form-label">Email address:</label>
                    <input type="email" class="form-control" id="loginEmail" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
</x-layout>