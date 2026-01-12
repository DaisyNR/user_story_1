<x-layout>
    <div class="container">

        <div class="row vh-100 d-flex align-items-center justify-content-center">

            <div class="col-12 col-md-6">
                <h1 class="display-4 text-center t-orange">{{ __('ui.register') }}</h1>        
            </div>

            <div class="col-12 col-md-6">
                <form method="POST" action="{{route('register')}}" class="border-orange b-light-orange shadow rounded p-5 my-3">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">{{ __('ui.name') }}</label>
                        <input type="text" class="form-control" id="name" name="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('ui.emailAddress') }}</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('ui.choosePassword') }}</label>
                        <input type="password" class="form-control" id="password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="password_confirmation" class="form-label">{{ __('ui.confirmPassword') }}</label>
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
                    </div>
                    <button type="submit" class="btn btn-orange">{{ __('ui.register') }}</button>
                </form>
            </div>

        </div>
        
    </div>
    
</x-layout>