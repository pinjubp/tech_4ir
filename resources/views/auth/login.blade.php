@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div  class="card   mt-5 mb-5" style="width: 400px;">
                
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                
                
                <div id="showhide" class="card-body">
                    @include('admin.alert') 
                  <h5 class="card-title">Login </h5>
                  <form method="POST" action="{{ route('login') }}">
                    @csrf
                          <div class="mb-3 row">
                            <label for="email" class="col-sm-12 col-form-label">Email</label>
                            <div class="col-sm-12">
                              {{-- <input type="text"  class="form-control" name="email" id="email" :value="old('email')" placeholder="email@example.com" required> --}}
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-envelope"></i></span>
                                </div>
                                {{-- <input name="email" type="email" value="" class="input form-control" id="email" placeholder="email" aria-label="email" aria-describedby="basic-addon1" /> --}}
                                <input type="text"  class="input form-control" name="email" id="email" :value="old('email')" placeholder="email@example.com" required>
                              </div>
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
                              
                              <div  class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                </div>
                                {{-- <input name="password" type="password" value="" class="input form-control" id="password" placeholder="password" required="true" aria-label="password" aria-describedby="basic-addon1" /> --}}
                                <input type="password"  class="input form-control" name="password" id="password"  placeholder="password" required>
                                <div class="input-group-append">
                                  <span class="input-group-text" onclick="password_show_hide();">
                                    <i class="fas fa-eye" id="show_eye"></i>
                                    <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                  </span>
                                </div>
                              </div>
                              
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
</div>
{{-- <script src="{{ asset('js/hideShowPassword.min.js') }}"></script>
<script type="text/javascript">
    $(document).ready(function() {
      

      $('.show').hideShowPassword({
           show: false, 
           innerToggle: 'focus',
                         
       });
    });
  
  </script>  --}}
  <script>
    function password_show_hide() {
      var x = document.getElementById("password");
      var show_eye = document.getElementById("show_eye");
      var hide_eye = document.getElementById("hide_eye");
      hide_eye.classList.remove("d-none");
      if (x.type === "password") {
        x.type = "text";
        show_eye.style.display = "none";
        hide_eye.style.display = "block";
      } else {
        x.type = "password";
        show_eye.style.display = "block";
        hide_eye.style.display = "none";
      }
    }
    </script>
@endsection