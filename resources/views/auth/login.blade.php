<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" style="overflow: hidden">
                <x-application-logo class="fill-current text-gray-100" />
            </a>
        </x-slot>


        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <!-- Session Status -->
                <x-auth-session-status class="mb-4 alert" :status="session('status')" />

                <!-- Validation Errors -->
                {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}

                {{-- <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <div class="card">
                        <div class="card-body">
                            <!-- Email Address -->
                            <div>
                                <label class="form-label" for="email">Email :</label>
                                <input id="email" class="block mt-1 w-full form-controll" type="email" name="email" :value="old('email')" required autofocus />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <label class="form-label" for="password" :value="__('Password')">Password :</label>
                                <input id="password" class="block mt-1 w-full form-controll" type="password" name="password"  required autocomplete="current-password" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class=" form-label inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                                    
                                <x-button class="ml-3 btn btn-primary">
                                    {{ __('Log in') }}
                                </x-button>
                            </div>
                        </div>
                    </div>
                </form> --}}

                {{-- custom login  --}}
                <div class="container">
                    <div class="card" >
                        <div class="card-head form-control bg-primary text-white text-center rounded-none">
                            <p style="padding: 29px; font-weight: 800; font-size: 34px;">Log In</p>
                        </div>
                        <div class="card-body p-20">
                            @if(session('alert'))
                                <strong class="alert alert-danger">{{ session('alert') }}</strong>
                            @elseif(session('auth_error'))
                                <strong class="alert alert-danger">{{ session('auth_error') }}</strong>
                            @endif
                            <form action=" {{ route('login') }}" method="post">
                                    @csrf
                                    <div>
                                        <label class="form-label" for="u-email">Email:</label>
                                        <input  type="email" class="form-control @error ('email') is-invalid @enderror" name="email" id="u-email" value="{{ old('email')}}" autofocus placeholder="your email : example@abc.xyz">
                                        @error('email') 
                                            <strong class="text text-danger"> {{ $message  }}</strong>
                                        @enderror
                                    </div>
                                    <br>
            
                                    <div>
                                        <label class="form-label" for="u-password">Password: </label>
                                        <input class="form-control @error ('password') is-invalid @enderror" type="password" name="password" id="u-password" value="{{ old('password') }}" placeholder="12345678">
                                        
                                    @error ('password')
                                        <strong class="text text-danger"> {{ $message  }}</strong>
                                    @enderror
                                    </div>

                               
                                    <!-- Remember Me -->
                                    <div class="block mt-2">
                                        <label for="remember_me" class=" form-label inline-flex items-center">
                                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                        </label>
                                    </div>
                                    <div>
                                        <div class="py-2">
                                            <input class="form-control btn btn-primary" type="submit" value="log in">
                                        </div>

                                        <hr>
                                        <div class=" mt-2 d-flex justify-content-between">
                                            <a href="{{route('register')}}">Create one</a>
                                            
                                            @if (Route::has('password.request'))
                                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                                    {{ __('Forgot your password?') }}
                                                </a>
                                            @endif

                                        </div>


                                    </div>
                                </form>
                        </div>
                    </div>
                </div>

            <div class="col-lg-4"></div>
        </div>
        
    </x-auth-card>
</x-guest-layout>
