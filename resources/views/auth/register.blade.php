@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-md-6">
            <div class="card  mt-5 mb-5" style="width: 400px;">
              @include('pages.alert') 
                <div id="showhide" class="card-body">
                  <h5 class="card-title">Signup </h5>
                    
                    <form action="{{ route('register') }}"  method="post"  >
                        @csrf
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-12 col-form-label">Name</label>
                            <div class="col-sm-12">
                              
                              
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" ><i class="fas fa-user"></i></span>
                                </div>
                                <input name="name" type="text" value="" class="input form-control" id="name" :value="old('name')" placeholder="name" aria-label="name" required />
                              </div>
                              @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                             @enderror
                            </div>
                          </div>
                        <div class="mb-3 row">
                            <label for="email" class="col-sm-12 col-form-label">Email</label>
                            <div class="col-sm-12">
                              
                              
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" ><i class="fas fa-envelope"></i></span>
                                </div>
                                <input name="email" type="email" value="" class="input form-control" id="email" :value="old('email')" placeholder="email" aria-label="email" required />
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
                                    <span class="input-group-text" ><i class="fas fa-lock"></i></span>
                                  </div>
                                  <input name="password" type="password" value="" class="input form-control" id="password" placeholder="password" required="true" aria-label="password" required />
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
                            <label for="password_confirmation" class="col-sm-12 col-form-label">Confirm Password</label>
                            <div class="col-sm-12">
                              
                              
                              <div  class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" ><i class="fas fa-lock"></i></span>
                                </div>
                                <input name="password_confirmation" type="password" value="" class="input form-control" id="password_confirmation" placeholder="password_confirmation" required="true" aria-label="password_confirmation" required />
                                <div class="input-group-append">
                                  <span class="input-group-text" onclick="confirmpassword_show_hide();">
                                    <i class="fas fa-eye" id="show_eye1"></i>
                                    <i class="fas fa-eye-slash d-none" id="hide_eye1"></i>
                                  </span>
                                </div>
                              </div>
                               @error('password_confirmation')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                                @enderror
                            </div>
                          </div>
                          

                          <x-jet-button class="btn btn-primary">
                            {{ __('Register') }}
                        </x-jet-button>
                    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
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
  <script>
    function confirmpassword_show_hide() {
      var x = document.getElementById("password_confirmation");
      var show_eye = document.getElementById("show_eye1");
      var hide_eye = document.getElementById("hide_eye1");
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