
<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        {{-- <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4 btn btn-primary">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form> --}}

        {{-- custome form  --}}
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <div class="card shadow-lg">
                    <div class="w-100 bg-primary text-white p-5 text-25 text-center" style="font-weight:800; font-size:20px;">
                        Password Reset
                    </div>
                    <div class="card-body">
                        <div class="alert alert-info font-weight-bold" style="text-align:justify">
                            Forget your password ? No problem. Just let us know your email address and we will send you a password reset link.
                        </div>

                        <form action="{{route('password.email') }}" method="POST">
                            @csrf
                            <div>
                                <label for="email" class="form-email pb-2">Email :</label>
                                <input type="email" class="form-input form-control @error('email') is-invalid @enderror" value="{{old('email')}}" required name="email" id="email" placeholder="example@abc.xyz">
                            </div>
                            <br>
                            <div class="w-100 d-flex justify-content-between align-items-center">
                                <div>
                                    <a class="form btn btn-primary" href="{{route('login')}}"> Log in </a>
                                </div>
                                <button class="btn btn-primary form-controll">Give Password Reset Link</button>
                            </div>
                        </form>
                    </div>
                </div>
               
                

            </div>
            <div class="col-md-4"></div>
        </div>
    </x-auth-card>
</x-guest-layout>
