@extends('../layouts.app')
@section('content')
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

                            <input id="name" class="form-control @error('name') is-invalid @enderror block mt-1 w-full" type="text" name="name" value="{{old('name')}}" autofocus placeholder="Your name : Lorem Doe"/>
                            <div>
                                @error ('name') <strong class="text text-danger">{{ $message }}</strong> @enderror
                            </div>
                        </div>

                        {{-- user name --}}
                        <div>
                            <label for="user_name" :value="__('user_name')">User_Name :</label>

                            <input id="user_name" class="form-control @error('user_name') is-invalid @enderror block mt-1 w-full" type="text" name="user_name" value="{{old('user_name')}}" autofocus placeholder="Your User Name : Lorem Doe"/>
                            <div>
                                @error ('user_name') <strong class="text text-danger">{{ $message }}</strong> @enderror
                            </div>
                        </div>

                        <!-- Email Address -->
                        <div class="mt-2">
                            <label for="email" :value="__('Email')">Email :</label>

                            <input id="email" class="form-control  @error('email') is-invalid @enderror block mt-1 w-full" type="email" name="email" value="{{old('email')}}" required placeholder="lorem@example.xyz"/>
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
                                            required autocomplete="new-password" placeholder="Xyz45TnP%7c"/>
                            
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-2">
                            <label for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>

                            <input id="password_confirmation" class="form-control  @error ('password') is-invalid @enderror block mt-1 w-full"
                                            type="password"
                                            name="password_confirmation" required  placeholder="Xyz45TnP%7c"/>
                            <div>
                                @error('password')
                                    <strong class="text text-danger"> {{ $message }} </strong>
                                @enderror
                            </div>
                        </div>

                        <div class="pt-2">
                            <label class="form-control @error('is_agree') is_invalid @enderror " for="is_agree"><input class="form-checkbox  p-2" type="checkbox" name="is_agree" id="is_agree"> By clicking reginster, You are agree with our <a href="#">Terms</a> & <a href="#">Conditions.</a></label>
                            @error('is_invalid')
                                <strong class="alert alert-danger"> {{$message}}</strong>
                            @enderror
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
@endsection
