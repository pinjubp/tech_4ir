@extends('layouts.app')
@section('content')
@include('admin.alert') 
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body">
                    <h5 class="card-title">Signup </h5>
                    
                      <form action="{{ route('register') }}"  method="post"  >
                          @csrf
                          <div class="mb-3 row">
                              <label for="name" class="col-sm-12 col-form-label">Name</label>
                              <div class="col-sm-12">
                                <input type="text"  class="form-control"  name="name" id="name"  placeholder="Please enter your name" required>
                              </div>
                            </div>
                          <div class="mb-3 row">
                              <label for="email" class="col-sm-12 col-form-label">Email</label>
                              <div class="col-sm-12">
                                <input type="email"  class="form-control" name="email" id="email" placeholder="please enter your email address"  required>
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="email" class="col-sm-12 col-form-label">Email</label>
                              <div class="col-sm-12">
                                <input type="email"  class="form-control" name="email" id="email" placeholder="please enter your email address"  required>
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="email" class="col-sm-12 col-form-label">Email</label>
                              <div class="col-sm-12">
                                <input type="email"  class="form-control" name="email" id="email" placeholder="please enter your email address"  required>
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="password" class="col-sm-12 col-form-label">Password</label>
                              <div class="col-sm-12">
                                  <input type="password" class="form-control" name="password" id="password" required>
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label for="password_confirmation" class="col-sm-12 col-form-label">Confirm Password</label>
                              <div class="col-sm-12">
                                <input type="password" class="form-control" name="password_confirmation"  id="password_confirmation" required>
                              </div>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Login">
                      
                      </form>
                  </div>
              </div>
            </div>
        </div>
    </div>
@endsection