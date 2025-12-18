<x-layout>
    <div class="container">

        <div class="row vh-100 d-flex align-items-center justify-content-center">

            <div class="col-12 col-md-6">
                <h1 class="display-4 text-center">Accedi</h1>        
            </div>

            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('login')}}">
                @csrf
                <div class="mb-3">
                    <label for="loginEmail" class="form-label">Inserisci la tua email</label>
                    <input type="email" class="form-control" id="loginEmail" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Inserisci la tua password:</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-dark">Accedi</button>
            </div>

        </div>
        
    </div>
    
</x-layout>