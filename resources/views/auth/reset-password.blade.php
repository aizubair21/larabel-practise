<div class="row">
    <div class="col-md-4">
        <div class="card">
            <card-body></card-body>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <x-guest-layout>
                    <x-auth-card>
                        <x-slot name="logo">
                            <a href="/">
                                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                            </a>
                        </x-slot>

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />

                        <form method="POST" action="{{ route('password.update') }}">
                            @csrf

                            <!-- Password Reset Token -->
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">

                            <!-- Email Address -->
                            <div>
                                <x-label for="email" :value="__('Email')" >Email :</x-label>

                                <input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <label for="password" :value="__('Password')" >Password :</label>

                                <input id="password" class="block mt-1 w-full" type="password" name="password" required />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <label for="password_confirmation" :value="__('Confirm Password')" >Confirm Password :</label>

                                <input id="password_confirmation" class="block mt-1 w-full form-control"
                                                    type="password"
                                                    name="password_confirmation" required />
                            </div>

                            <div class="flex items-center justify-end mt-4 btn btn-primary">
                                <button class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </form>
                    </x-auth-card>
                </x-guest-layout>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card">
            <card-body></card-body>
        </div>
    </div>
</div>