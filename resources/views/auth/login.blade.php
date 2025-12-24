<x-layout>
    <div class="container">

        <div class="row vh-100 d-flex align-items-center justify-content-center">

            <div class="col-12 col-md-6">
                <h1 class="display-4 text-center t-blue">Login</h1>        
            </div>

            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('login')}}" class="border-blue shadow rounded p-5 my-3">
                @csrf
                <div class="mb-3">
                    <label for="loginEmail" class="form-label">Your email address</label>
                    <input type="email" class="form-control" id="loginEmail" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Your password</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-blue">Login</button>
            </div>

        </div>
        
    </div>
    
</x-layout>