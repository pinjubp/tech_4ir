@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <div class="card mx-auto d-block  mt-5 mb-5" style="width: 400px;">
                
              @include('pages.alert') 
                <div class="card-body">
                  <h5 class="card-title">Reset Password </h5>
                  <form method="POST" action="{{ route('password.update') }}">
                    @csrf
        
                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                          <div class="mb-3 row">
                            <label for="email" class="col-sm-12 col-form-label">Email</label>
                            <div class="col-sm-12">
                              <x-jet-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                             
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="password" class="col-sm-12 col-form-label">Password</label>
                            <div class="col-sm-12">
                                <x-jet-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required autocomplete="new-password" />
                            </div>
                          </div>
                          <div class="mb-3 row">
                            <label for="password_confirmation" class="col-sm-12 col-form-label">Confirm Password</label>
                            <div class="col-sm-12">
                                <x-jet-input id="password_confirmation" class="block mt-1 w-full form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                            </div>
                          </div>
                          
                          <input type="submit" class="btn btn-primary" value="Reset Password">
                  </form>
                  
                </div>
            </div>
        </div>
    </div>    
</div>

@endsection