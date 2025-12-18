<x-layout>
    <div class="container">

        <div class="row vh-100 d-flex align-items-center justify-content-center">

            <div class="col-12 col-md-6">
                <h1 class="display-4 text-center">Registrati</h1>        
            </div>

            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('register')}}">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Inserisci il tuo nome:</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="loginEmail" class="form-label">Inserisci la tua email:</label>
                        <input type="email" class="form-control" id="loginEmail" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Inserisci una password:</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">Conferma password:</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-dark">Registrati</button>
                </form>
            </div>

        </div>
        
    </div>
    
</x-layout>