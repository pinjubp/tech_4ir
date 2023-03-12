@extends('layouts.app')
@section('content')

<div id="dashboard" class="container pt-4 pb-4">
    
    @if(Auth::user()->status == 0 )                
   
    <div class="alert  alert-success" role="alert">
        To upload your product information please complete the profile
    </div>
    @include('admin.alert')
    @endif
    <div class="row">
        <div class="col-md-4">
            <h2></h2>
            <div class="card" id="Profile">
                <img src="{{ (!empty(Auth::user()->image ))?
                    url('upload/user_images/'.Auth::user()->image):url('upload/no_image.jpg')   }}" class=" mx-auto d-block rounded-circle" alt="...">
                <div class="card-body">
                  <h5 class="card-title">User Profile</h5>
                  <ul>
                        <li><label class="col-sm-4 text-left" for="name">Name:</label><span class="col-sm-8 text-right">{{ Auth::user()->name  }}</span></li>
                        <li><label class="col-sm-4 text-left" for="name">Email:</label><span class="col-sm-8 text-right">{{ Auth::user()->email  }}</span></li>
                        <li><label class="col-sm-4 text-left" for="name">Address</label><span class="col-sm-8 text-right">{{ Auth::user()->address  }}</span></li>                                        
                  </ul>
                  <h5 class="card-title">Social link</h3>
                        <p>
                            <a href="{{Auth::user()->youtube_profile }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube">
                                    <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path>
                                    <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg></a>
                                <a href="{{Auth::user()->facebook_profile }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                                     stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                                </a>
                                <a href="{{Auth::user()->twitter_profile }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                     class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                    </svg>
                                </a>

                                <a href="{{Auth::user()->linkedin_profile }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                    <rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                                </a>
                        </p>
                </div>
              </div>

        </div>
        <div class="col-md-8">
            <nav>
                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                    
                        <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Profile</button>                                    
                        <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">@if(Auth::user()->status == 0 ) Complete Profile @else edit Profile  @endif</button>                                        
                        <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Change Password</button>                    
                    
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
                    <div class="container boxround p-4">
                        <div class="row form-group pt-1 pb-1">                                                        
                            <div  class="col-md-12">
                                <img   src="{{ (!empty(Auth::user()->image ))?
                                url('upload/user_images/'.Auth::user()->image):url('upload/no_image.jpg')   }}" 
                                alt="Profile" class="rounded-circle border-primary pb-3 mx-auto d-block " width="150" height="150" >
                            </div>                               
                        </div>
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="">Name</label></div>
                            <div class="col-md-8">
                                <span>{{Auth::user()->name }}</span>
                            </div>
                        </div>
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Email</label></div>
                            <div class="col-md-8">
                                <span>{{Auth::user()->email }}</span>
                            </div>
                        </div>
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="date_of_birth">Date of Birth</label></div>
                            <div class="col-md-8">
                               <span>{{Auth::user()->date_of_birth }}</span>
                            </div>
                        </div>
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="about">about</label></div>
                            <div class="col-md-8">
                                <span>{{Auth::user()->about }}</span>
                            </div>
                        </div>
                        <div class="row  form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="company">company</label></div>
                            <div class="col-md-8">
                                <span>{{Auth::user()->company }}</span>
                            </div>
                        </div>
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="address">address</label></div>
                            <div class="col-md-8">
                               <span>{{Auth::user()->address }}</span>
                            </div>
                        </div>
                        <div class="row  form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="phone">Phone</label></div>
                            <div class="col-md-8">
                                <span>{{Auth::user()->phone }}</span>
                            </div>
                        </div>
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="twitter_profile">Twitter Profile</label></div>
                            <div class="col-md-8">
                                <span>{{Auth::user()->twitter_profile }}</span>
                            </div>
                        </div>
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="facebook_profile">Facebook Profile</label></div>
                            <div class="col-md-8">
                                <span>{{Auth::user()->facebook_profile }}</span>
                            </div>
                        </div>
                        <div class="row  form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="youtube_profile">Youtube Profile</label></div>
                            <div class="col-md-8">
                                <span>{{Auth::user()->youtube_profile }}</span>
                            </div>
                        </div>
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="linkedin_profile">Linkedin Profile</label></div>
                            <div class="col-md-8">
                                <span>{{Auth::user()->linkedin_profile }}</span>
                            </div>
                        </div>                                                
                    </div><!--container-->
                </div>
                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
                    <form method="post" action="{{ route('profile.store') }}"  class="form-horizontal form-element col-12" enctype="multipart/form-data">
                        @csrf
                        <div class="container boxround p-4">
                            <div class="row form-group pt-1 pb-1">                                                                
                                <div  class="col-md-12">                                    
                                        <img id="previewImg" src="{{ (!empty(Auth::user()->image ))?
                                        url('upload/user_images/'.Auth::user()->image):url('upload/no_image.jpg')   }}" 
                                        alt="Profile" class="rounded-circle border-primary pb-3 mx-auto d-block " width="150" height="150"  >
                                </div>
                                <div class="col-md-12">
                                    <div class="row form-group pt-1 pb-1">
                                        <div class="col-md-4">
                                            <label class="custom-file-label" for="image">Choose file</label>
                                        </div>
                                        <div class="col-md-8">
                                            <input type="file" name="image" id="image" class="form-control custom-file-input"  onchange="previewFile(this);" >
                                        </div>
                                    </div>
                                    
                                </div>    
                            </div>
    
                            <div class="row form-group pt-1 pb-1">
                                <div class="col-md-4"><label for="">Name</label></div>
                                <div class="col-md-8">
                                    <input name="name" type="text" class="form-control" id="name" value="{{Auth::user()->name }}">
                                    @error('name')   
                                        <span class="text-danger">{{ $message }}</span>    
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group pt-1 pb-1">
                                <div class="col-md-4"><label for="email">Email</label></div>
                                <div class="col-md-8">
                                    <input name="email" type="text" class="form-control" id="email" value="{{Auth::user()->email }}">
                                    @error('email')   
                                        <span class="text-danger">{{ $message }}</span>    
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group pt-1 pb-1">
                                <div class="col-md-4"><label for="date_of_birth">Date of Birth</label></div>
                                <div class="col-md-8">
                                    <input name="date_of_birth" type="date" class="form-control" id="date_of_birth" value="{{Auth::user()->date_of_birth }}">
                                    @error('date_of_birth')   
                                        <span class="text-danger">{{ $message }}</span>    
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group pt-1 pb-1">
                                <div class="col-md-4"><label for="about">about</label></div>
                                <div class="col-md-8">
                                    <textarea name="about"  class="form-control" id="about" >{{Auth::user()->about }}</textarea>
                                    @error('about')   
                                        <span class="text-danger">{{ $message }}</span>    
                                    @enderror
                                </div>
                            </div>
                            <div class="row  form-group pt-1 pb-1">
                                <div class="col-md-4"><label for="company">company</label></div>
                                <div class="col-md-8">
                                    <input name="company" type="text" class="form-control" id="name" value="{{Auth::user()->company }}">
                                    @error('company')   
                                        <span class="text-danger">{{ $message }}</span>    
                                    @enderror
                                </div>
                            </div>
                            <div class="row  form-group pt-1 pb-1">
                                <div class="col-md-4"><label for="website">Website</label></div>
                                <div class="col-md-8">
                                    <input name="website" type="text" class="form-control" id="website" value="{{Auth::user()->website }}">
                                    @error('website')   
                                        <span class="text-danger">{{ $message }}</span>    
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group pt-1 pb-1">
                                <div class="col-md-4"><label for="address">address</label></div>
                                <div class="col-md-8">
                                    <input name="address" type="text" class="form-control" id="address" value="{{Auth::user()->address }}">
                                    @error('address')   
                                        <span class="text-danger">{{ $message }}</span>    
                                    @enderror
                                </div>
                            </div>
                            <div class="row  form-group pt-1 pb-1">
                                <div class="col-md-4"><label for="phone">Phone</label></div>
                                <div class="col-md-8">
                                    <input name="phone" type="text" class="form-control" id="phone" value="{{Auth::user()->phone }}">
                                    @error('phone')   
                                        <span class="text-danger">{{ $message }}</span>    
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group pt-1 pb-1">
                                <div class="col-md-4"><label for="twitter_profile">Twitter Profile</label></div>
                                <div class="col-md-8"><input name="twitter_profile" type="text" class="form-control" id="twitter_profile" value="{{Auth::user()->twitter_profile }}"></div>
                            </div>
                            <div class="row form-group pt-1 pb-1">
                                <div class="col-md-4"><label for="facebook_profile">Facebook Profile</label></div>
                                <div class="col-md-8"><input name="facebook_profile" type="text" class="form-control" id="facebook_profile" value="{{Auth::user()->facebook_profile }}"></div>
                            </div>
                            <div class="row  form-group pt-1 pb-1">
                                <div class="col-md-4"><label for="youtube_profile">Youtube Profile</label></div>
                                <div class="col-md-8"><input name="youtube_profile" type="text" class="form-control" id="youtube_profile" value="{{Auth::user()->youtube_profile }}"></div>
                            </div>
                            <div class="row form-group pt-1 pb-1">
                                <div class="col-md-4"><label for="linkedin_profile">Linkedin Profile</label></div>
                                <div class="col-md-8">
                                    <input name="linkedin_profile" type="text" class="form-control" id="linkedin_profile" value="{{Auth::user()->linkedin_profile }}" required>
                                    
                                </div>
                            </div>
    
                            <div class="row form-group pt-1 pb-1">
                                <div class="col-md-4"><button type="submit" class="btn btn-rounded btn-success">Submit</button></div>                                
                            </div>                                
                        </div><!--container--> 
                    </form>   
                </div>
                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
                    <div id="showhide" class="container boxround p-4">
                        <form method="POST" action="{{ route('user.reset.password') }}" class="form-horizontal form-element col-12">
                            @csrf
                            
                            <div class="row form-group pt-1 pb-1">
                                <div class="col-md-4"><label for="current_password" class="control-label">Current Password</label></div>
                                <div class="col-md-8">
                                    {{-- <input type="password" class="form-control show" name="current_password" id="current_password" placeholder=""> --}}
                                    <div  class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input name="current_password" type="password" value="" class="input form-control" id="current_password" placeholder="Current Password" required="true" aria-label="password" required />
                                        <div class="input-group-append">
                                            <span class="input-group-text" onclick="password_show_hide();">
                                                <i class="fas fa-eye" id="show_eye"></i>
                                                <i class="fas fa-eye-slash d-none" id="hide_eye"></i>
                                            </span>
                                        </div>
                                    </div>
                                    @error('current_password')   
                                        <span class="text-danger">{{ $message }}</span>    
                                    @enderror
                                </div>
                            </div>
                           
                            <div class="row form-group pt-1 pb-1">
                                <div class="col-md-4"><label for="password" class="control-label">New Password</label></div>
                                <div class="col-md-8">
                                    {{-- <input type="password" class="form-control show" name="password" id="password" placeholder=""> --}}
                                    <div  class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input name="password" type="password" value="" class="input form-control" id="password" placeholder="Password" required="true" aria-label="password" required />
                                        <div class="input-group-append">
                                            <span class="input-group-text" onclick="password_show_hide_one();">
                                                <i class="fas fa-eye" id="show_eye1"></i>
                                                <i class="fas fa-eye-slash d-none" id="hide_eye1"></i>
                                            </span>
                                        </div>
                                    </div>
                                    @error('password')   
                                        <span class="text-danger">{{ $message }}</span>    
                                    @enderror
                                </div>
                            </div>
                           
                            <div class="row form-group pt-1 pb-1">
                                <div class="col-md-4"><label for="confirm_password" class="control-label">Confirm Password</label></div>
                                <div class="col-md-8">
                                    {{-- <input type="password" class="form-control show" name="confirm_password" id="confirm_password" placeholder=""> --}}
                                    <div  class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                        </div>
                                        <input name="confirm_password" type="password" value="" class="input form-control" id="confirm_password" placeholder="Confirm Password" required="true" aria-label="password" required />
                                        <div class="input-group-append">
                                            <span class="input-group-text" onclick="password_show_hide_two();">
                                                <i class="fas fa-eye" id="show_eye2"></i>
                                                <i class="fas fa-eye-slash d-none" id="hide_eye2"></i>
                                            </span>
                                        </div>
                                    </div>
                                    @error('confirm_password')   
                                        <span class="text-danger">{{ $message }}</span>    
                                    @enderror
                                    
                                        
                                      
                                </div>
                            </div>
                            
                            

                            <div class="row form-group pt-1 pb-1">
                                <div class="col-md-4"><button type="submit" class="btn btn-rounded btn-success">Submit</button></div>                                
                            </div>
                          </form>                        
                    </div>    
                </div>

            </div>   
        </div>
       
    </div>
</div>
<script type="text/javascript">
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
</script> 

<script>
    function password_show_hide() {
      var x = document.getElementById("current_password");
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
    function password_show_hide_one() {
      var x = document.getElementById("password");
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
<script>
    function password_show_hide_two() {
      var x = document.getElementById("confirm_password");
      var show_eye = document.getElementById("show_eye2");
      var hide_eye = document.getElementById("hide_eye2");
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