@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        
        <div class="col-md-6">
            <div class="card  mt-5 mb-5" style="width: 400px;">
              @include('pages.alert') 
                <div id="showhide" class="card-body">
                  <h5 class="card-title">Signup </h5>
                  <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-12 col-form-label text-md-right">{{ __('Name') }}</label>

                        <div class="col-md-12">
                            <div class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" ><i class="fas fa-user"></i></span>
                              </div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>  
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-12 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                        <div class="col-md-12">
                          <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <span class="input-group-text" ><i class="fas fa-envelope"></i></span>
                            </div>  
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                          </div>      
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-12 col-form-label text-md-right">{{ __('Password') }}</label>

                        <div class="col-md-12">
                            <div  class="input-group mb-3">
                              <div class="input-group-prepend">
                                <span class="input-group-text" ><i class="fas fa-lock"></i></span>
                              </div>
                              <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                              <div class="input-group-append">
                                <span class="input-group-text" onclick="password_show_hide();">
                                  <i class="fas fa-eye" id="show_eye"></i>
                                  <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                </span>
                              </div>
                              @error('password')
                                  <span class="invalid-feedback" role="alert">
                                      <strong>{{ $message }}</strong>
                                  </span>
                              @enderror
                            </div>  
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password_confirmation" class="col-md-12 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                        <div class="col-md-12">
                          
                        <div  class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" ><i class="fas fa-lock"></i></span>
                          </div>
                          
                          <input id="password_confirmation" type="password" class="input form-control" name="password_confirmation" required autocomplete="new-password">
                          <div class="input-group-append">
                            <span class="input-group-text" onclick="confirmpassword_show_hide();">
                              <i class="fas fa-eye" id="show_eye1"></i>
                              <i class="fas fa-eye-slash d-none" id="hide_eye1"></i>
                            </span>
                          </div>
                          @error('password_confirmation')
                          <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                        </div>
                    </div>
                    <!--startcaptcha-->
                    <div class="form-group mt-4 mb-4">
                      <div class="captcha">
                          <span>{!! captcha_img() !!}</span>
                          <button type="button" class="btn btn-danger" class="reload" id="reload">
                          ↻
                          </button>
                        </div>
                      </div> 
                    <div class="form-group mb-4">
                      <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                    </div>
                    <!--endcaptcha-->

                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </div>
                </form>
                    
                    {{-- <form action="{{ route('store.user') }}"  method="post"  >
                        @csrf
                        <div class="mb-3 row">
                            <label for="name" class="col-sm-12 col-form-label">Name</label>
                            <div class="col-sm-12">
                              
                              
                              <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                  <span class="input-group-text" ><i class="fas fa-user"></i></span>
                                </div>
                                <input name="name" type="text" value="" class="input form-control" id="name" :value="old('name')" placeholder="name" aria-label="name"  />
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
                                <input name="email" type="email" value="" class="input form-control" id="email" :value="old('email')" placeholder="email" aria-label="email"  />
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
                                  <input name="password" type="password" value="" class="input form-control" id="password" placeholder="password"  aria-label="password"  />
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
                                <input name="password_confirmation" type="password" value="" class="input form-control" id="password_confirmation" placeholder="password_confirmation"  aria-label="password_confirmation"  />
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
                          <!--startcaptcha-->
                           <div class="form-group mt-4 mb-4">
                            <div class="captcha">
                                <span>{!! captcha_img() !!}</span>
                                <button type="button" class="btn btn-danger" class="reload" id="reload">
                                ↻
                                </button>
                              </div>
                            </div> 
                          <div class="form-group mb-4">
                            <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha" name="captcha">
                          </div>
                          <!--endcaptcha-->

                          <x-jet-button class="btn btn-primary">
                            {{ __('Register') }}
                        </x-jet-button>
                    
                    </form> --}}
                    {{-- <form method="POST" action="{{ route('store.user') }}">
                      @csrf
          
                      <div>
                          <x-jet-label for="name" value="{{ __('Name') }}" />
                          <x-jet-input id="name"  type="text" class="input form-control" name="name" :value="old('name')" required autofocus autocomplete="name" />
                      </div>
          
                      <div class="mt-4">
                          <x-jet-label for="email" value="{{ __('Email') }}" />
                          <x-jet-input id="email" class="input form-control" type="email" name="email" :value="old('email')" required />
                      </div>
          
                      <div class="mt-4">
                          <x-jet-label for="password" value="{{ __('Password') }}" />
                          <x-jet-input id="password" class="input form-control" type="password" name="password" required autocomplete="new-password" />
                      </div>
          
                      <div class="mt-4">
                          <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                          <x-jet-input id="password_confirmation" class="input form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                      </div>
          
                      @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                          <div class="mt-4">
                              <x-jet-label for="terms">
                                  <div class="flex items-center">
                                      <x-jet-checkbox name="terms" id="terms"/>
          
                                      <div class="ml-2">
                                          {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                                  'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                                  'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                          ]) !!}
                                      </div>
                                  </div>
                              </x-jet-label>
                          </div>
                      @endif
          
                      <div class="flex items-center justify-end mt-4">
                          <a class="btn btn-secondary" href="{{ route('login') }}">
                              {{ __('Already registered?') }}
                          </a>
          
                          <x-jet-button class="btn btn-primary">
                              {{ __('Register') }}
                          </x-jet-button>
                      </div>
                  </form> --}}
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
    <script type="text/javascript">
      $('#reload').click(function () {
        $.ajax({
          type: 'GET',
          url: 'reload-captcha',
          success: function (data) {
          $(".captcha span").html(data.captcha);
          }
        });
      });
      </script>
@endsection