@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card   mt-5 mb-5" style="width: 400px;">
                
                <div class="card-body">
                  <h5 class="card-title">Login </h5>
                    {{-- <div class="form">
                        <div class="mb-3 row">
                            <label for="staticEmail" class="col-sm-12 col-form-label">Email</label>
                            <div class="col-sm-12">
                              <input type="text"  class="form-control" id="staticEmail" value="email@example.com">
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-12 col-form-label">Password</label>
                            <div class="col-sm-12">
                              <input type="password" class="form-control" id="inputPassword">
                            </div>
                          </div>
                          <input type="submit" class="btn btn-primary" value="Login">
                    </div> --}}
                    <form method="POST" action="{{ route('login') }}">
                      @csrf
          
                      <div>
                          <x-jet-label for="email" value="{{ __('Email') }}" />
                          <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                      </div>
          
                      <div class="mt-4">
                          <x-jet-label for="password" value="{{ __('Password') }}" />
                          <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
                      </div>
          
                      <div class="block mt-4">
                          <label for="remember_me" class="flex items-center">
                              <x-jet-checkbox id="remember_me" name="remember" />
                              <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                          </label>
                      </div>
          
                      <div class="flex items-center justify-end mt-4">
                          @if (Route::has('password.request'))
                              <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                  {{ __('Forgot your password?') }}
                              </a>
                          @endif
          
                          <x-jet-button class="ml-4">
                              {{ __('Log in') }}
                          </x-jet-button>
                      </div>
                  </form>
                </div>
            </div>
        </div>
    </div>    
</div>

@endsection