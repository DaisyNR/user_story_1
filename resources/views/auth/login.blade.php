<x-layout>
    <div class="container">

        <div class="row vh-100 d-flex align-items-center justify-content-center">

            <div class="col-12 col-md-6">
                <h1 class="display-4 text-center t-blue">{{ __('ui.login') }}</h1>        
            </div>

            <div class="col-12 col-md-6 ">
                <form method="POST" action="{{route('login')}}" class="border-blue b-light-blue shadow rounded p-5 my-3">
                @csrf
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('ui.emailAddress') }}</label>
                    <input type="email" class="form-control" id="email" name="email">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('ui.password') }}</label>
                    <input type="password" class="form-control" id="password" name="password">
                </div>
                <button type="submit" class="btn btn-blue">{{ __('ui.login') }}</button>
            </div>

        </div>
        
    </div>
    
</x-layout>