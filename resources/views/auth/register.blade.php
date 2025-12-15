<x-layout>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="row text-center">
                <h1 class="display-4 pt-5">Register</h1>
            </div>
        </div>
    </div>
    
    <div class="row justify-content-center align-items-center">
        <div class="col-12 col-md-6">
            <form method="POST" action="{{route('register')}}">
                @csrf
                <div class="mb-3">
                    <label for="name" class="form-label">Your name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="mb-3">
                    <label for="loginEmail" class="form-label">Your email address:</label>
                    <input type="email" class="form-control" id="loginEmail" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Insert a password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">Confirm password:</label>
                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
    </div>
</x-layout>