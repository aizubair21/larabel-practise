@extends('layouts.app')
<div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="card shadow-lg" style="margin-top: 20px">
            <div class="w-100 bg-primary text-white p-4" style="font-size: 18px;text-align:center; font-weight:700">
                Confirm yourself
            </div>
            <div class="card-body">
                <x-slot name="logo">
                    <a href="/">
                        <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
                    </a>
                    </x-slot>

                    <div class="mb-4 text-sm text-gray-600">
                        {{ __('This is a secure area of the application. Please confirm your password before continuing.') }}
                    </div>

                    <!-- Validation Errors -->
                    <x-auth-validation-errors class="mb-4" :errors="$errors" />

                    <form method="POST" action="{{ route('password.confirm') }}">
                    @csrf

                    <!-- Password -->
                    <div>
                        <label class="forn-label" for="password" :value="__('Password')" >Password :</label>

                        <input id="password" class="block mt-1 w-full form-control forn-input"
                                        type="password"
                                        name="password"
                                        required autocomplete="current-password" placeholder="Your password"/>
                    </div>

                    <div class="flex justify-end mt-4 btn btn-primary">
                        <button class="btn btn-primary">
                            {{ __('Confirm') }}
                        </button>
                    </div>
                </form>
            </div >
        </div>
    </div>
    <div class="col-md-4"></div>
</div>