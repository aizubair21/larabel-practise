<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            {{-- <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a> --}}
        </x-slot>

        <!-- Validation Errors -->
        {{-- <x-auth-validation-errors class="mb-4" :errors="$errors" /> --}}
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-head bg-primary text-white text-center">
                        <p style="padding: 29px; font-weight: 800; font-size: 34px;">Register</p>
                    </div>
                    <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div>
                                <label for="name" :value="__('Name')">Name :</label>

                                <input id="name" class="form-control @error('name') is-invalid @enderror block mt-1 w-full" type="text" name="name" value="{{old('name')}}" required autofocus />
                                <div>
                                    @error ('name') <strong class="text text-danger">{{ $message }}</strong> @enderror
                                </div>
                            </div>

                            <!-- Email Address -->
                            <div class="mt-2">
                                <label for="email" :value="__('Email')">Email :</label>

                                <input id="email" class="form-control  @error('email') is-invalid @enderror block mt-1 w-full" type="email" name="email" value="{{old('email')}}" required />
                                <div>
                                    @error ('email') <strong class="text text-danger">{{ $message}}</strong> @enderror
                                </div>
                            </div>

                            <!-- Password -->
                            <div class="mt-2">
                                <label for="password" :value="__('Password')">Password</label>

                                <input id="password" class="form-control  @error ('password') is-invalid @enderror block mt-1 w-full"
                                                type="password"
                                                name="password"
                                                required autocomplete="new-password" />
                                
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-2">
                                <label for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>

                                <input id="password_confirmation" class="form-control  @error ('password') is-invalid @enderror block mt-1 w-full"
                                                type="password"
                                                name="password_confirmation" required />
                                <div>
                                    @error('password')
                                        <strong class="text text-danger"> {{ $message }} </strong>
                                    @enderror
                                </div>
                            </div>

                            <div class="d-flex justify-content-between align-items-center mt-4">
                               <div>
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                        {{ __('Already registered?') }}
                                    </a>
                               </div>

                               <div>
                                    <button class="ml-4 btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
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
