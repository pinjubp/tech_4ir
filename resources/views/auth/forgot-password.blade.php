@extends('layouts.app')
@section('content')
{{-- <div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card   mt-5 mb-5" style="width: 400px;">
                
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                
                <div class="card-body">
                  <h5 class="card-title">Login </h5>
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                          <div class="mb-3 row">
                            <label for="email" class="col-sm-12 col-form-label">Email</label>
                            <div class="col-sm-12">
                              <input type="text"  class="form-control" name="email" id="email" :value="old('email')" placeholder="email@example.com" required>
                              @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="password" class="col-sm-12 col-form-label">Password</label>
                            <div class="col-sm-12">
                              <input type="password" class="form-control" id="password" name="password" required autocomplete="current-password">
                              @error('password')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                           @enderror
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <div class="col-sm-12">
                                <label for="remember_me" class="flex items-center">
                                    <x-jet-checkbox id="remember_me" name="remember" />
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-sm-12">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                          <input type="submit" class="btn btn-primary" value="Login">
                  </form>
                  
                </div>
            </div>
        </div>
    </div>    
</div> --}}

<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card  mx-auto d-block  mt-5 mb-5" style="width: 400px;">
                
                <div class="alert alert-success" role="alert">
                    Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.
                </div>
                
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        <div class="mb-4 font-medium text-sm text-green-600">                        
                            {{ session('status') }}
                        </div>
                    </div>
                @endif

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
        
                    {{-- <div class="block">
                        <x-jet-label for="email" value="{{ __('Email') }}" />
                        <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
                    </div> --}}
                    <div class="mb-3 row p-3">
                        <label for="email" class="col-sm-12 mb-2 col-form-label">Email</label>
                        <div class="col-sm-12">
                          <input type="email"  class="form-control" name="email" id="email" :value="old('email')"  required autofocus>
                          
                        </div>
                    </div>
        
                    {{-- <div class="flex items-center justify-end mt-4">
                        <x-jet-button>
                            {{ __('Email Password Reset Link') }}
                        </x-jet-button>
                    </div> --}}
                    <div class="mb-3 row p-5">
                        <input type="submit" class="btn btn-primary" value="Email Password Reset Link">
                        {{-- <button class="btn btn-primary" type="button">Email Password Reset Link</button> --}}
                    </div>
                </form>



            </div>
        </div>
    </div>            
</div>
@endsection