<div class="row"> 
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="card" style="margin-top: 20px">
            <div class="w-100 bg-primary text-white p-5" style="font-size: 20; font-weight:800;text-align:;">
                Email confirmation
            </div>
            <div class="card-body">
                <x-guest-layout>
                    <x-auth-card>
                        <x-slot name="logo">
                            <a href="/">
                                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                            </a>
                        </x-slot>

                        <div class="mb-4 text-sm text-gray-600 alert alert-info" style="text-align: justify">
                            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                        </div>

                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 font-medium text-sm text-green-600">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif

                        <div class="mt-4 flex items-center justify-between">
                            <form method="POST" action="{{ route('verification.send') }}">
                                @csrf

                                <div>
                                    <button class="btn btn-primary">
                                        {{ __('Resend Verification Email') }}
                                    </button>
                                </div>
                            </form>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <button type="submit" class="btn btn-primary underline text-sm text-gray-600 hover:text-gray-900">
                                    {{ __('Log Out') }}
                                </button>
                            </form>
                        </div>
                    </x-auth-card>
                </x-guest-layout>

            </div>
        </div>
    </div>
    <div class="col-md-4"></div>
</div>