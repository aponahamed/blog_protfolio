@extends('fontend.layouts.master')

  @section('content')

  <div class="container">
      <div class="row mt-5">
          <div class="col-md-3 my-5">

          </div>
          <div class="col-md-6 my-5">
              <div class="row">
                  <div class="col-md-12 my-5">
                    <h5>Admin Log In</h5>
                  </div>
              </div>
                <!-- Session Status -->
                <x-auth-session-status class="mb-4" :status="session('status')" />

                <!-- Validation Errors -->
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form method="POST" action="{{ route('login') }}">
                    @csrf

                    <!-- Email Address -->
                    <div class="form-group">
                        <x-label for="email" :value="__('Email')" />

                        <x-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required autofocus />
                    </div>

                    <!-- Password -->
                    <div class="mt-4 form-group" >
                        <x-label for="password" :value="__('Password')" />
                        <x-input id="password" class="block mt-1 w-full form-control"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />
                    </div>

                    <!-- Remember Me -->
                    <div class="block mt-4 ">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                            <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4 form-group">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                        <div class="my-3">
                            <x-button class="ml-3 btn-sm btn-success text-light">
                                {{ __('Log in') }}
                            </x-button>
                        </div>
                </div>
            </form>
          </div>
          <div class="col-md-3 my-5">
              
          </div>
      </div>
  </div>
 
 

  @endsection

