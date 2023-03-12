@extends('admin.admin_master')
@section('admin')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Edit User Profile</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                
                                <li class="breadcrumb-item active" aria-current="page">Edit User Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!--end content-header--> 

        <section class="content">
            <div class="row">
                
                <div class="col-12 col-lg-7 col-xl-8">
                  @include('admin.alert')
                    <div class="box-profile">
                       
        
                                <div class="box p-15">		
                                    <form method="post" action="{{ route('update.user',$user->id) }}" class="form-horizontal form-element col-12" enctype="multipart/form-data">
                                      @csrf
                                      <div class="form-group row">
                                        <label for="profileImage" class="col-sm-2 control-label">Profile Image</label>
                                        <div class="col-sm-10">

                                          <img id="previewImg" src="{{ (!empty($user->image ))?
                                            url('upload/user_images/'.$user->image):url('upload/no_image.jpg')   }}" 
                                          alt="Profile" class="rounded-rectangle border-primary pb-3" width="120" height="120" >
            
                                        
                                          

                                          <div class="custom-file">
                                            <input type="file" name="image" id="image" class="custom-file-input" onchange="previewFile(this);" >
                                            <label class="custom-file-label" for="image">Choose file</label>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="name" class="col-sm-2 control-label">Name</label>
            
                                        <div class="col-sm-10">
                                          <input name="name" type="text" class="form-control" id="name" value="{{ $user->name }}" >
                                          @error('name')   
                                                <span class="text-danger">{{ $message }}</span>    
                                           @enderror
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="Email" class="col-sm-2 control-label">Email</label>            
                                        <div class="col-sm-10">
                                          <input name="email" type="email" class="form-control" id="email" value="{{ $user->email }}" >
                                          @error('email')   
                                                <span class="text-danger">{{ $message }}</span>    
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="date_of_birth" class="col-sm-2 control-label">Date Of BBirth</label>            
                                        <div class="col-sm-10">
                                          <input name="date_of_birth" type="date" class="form-control" id="date_of_birth" value="{{ $user->date_of_birth }}" >
                                          @error('date_of_birth')   
                                                <span class="text-danger">{{ $message }}</span>    
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="company" class="col-sm-2 control-label">Company</label>            
                                        <div class="col-sm-10">
                                          <input name="company" type="text" class="form-control" id="company" value="{{ $user->company }}" >
                                          @error('company')   
                                                <span class="text-danger">{{ $message }}</span>    
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="address" class="col-sm-2 control-label">Address</label>            
                                        <div class="col-sm-10">
                                          <input name="address" type="text" class="form-control" id="address" value="{{ $user->address }}" >
                                          @error('address')   
                                                <span class="text-danger">{{ $message }}</span>    
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="website" class="col-sm-2 control-label">Website</label>            
                                        <div class="col-sm-10">
                                          <input name="website" type="text" class="form-control" id="website" value="{{ $user->website }}" >
                                          @error('website')   
                                                <span class="text-danger">{{ $message }}</span>    
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="phone" class="col-sm-2 control-label">Phone</label>            
                                        <div class="col-sm-10">
                                          <input name="phone" type="text" class="form-control" id="phone" value="{{ $user->phone }}" >
                                          @error('phone')   
                                                <span class="text-danger">{{ $message }}</span>    
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="twitter_profile" class="col-sm-2 control-label">Twitter Profile</label>            
                                        <div class="col-sm-10">
                                          <input name="twitter_profile" type="text" class="form-control" id="twitter_profile" value="{{ $user->twitter_profile }}" >
                                          @error('twitter_profile')   
                                                <span class="text-danger">{{ $message }}</span>    
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="facebook_profile" class="col-sm-2 control-label">Facebook Profile</label>            
                                        <div class="col-sm-10">
                                          <input name="facebook_profile" type="text" class="form-control" id="facebook_profile" value="{{ $user->facebook_profile }}" >
                                          @error('facebook_profile')   
                                                <span class="text-danger">{{ $message }}</span>    
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="youtube_profile" class="col-sm-2 control-label">Youtube Profile</label>            
                                        <div class="col-sm-10">
                                          <input name="youtube_profile" type="text" class="form-control" id="youtube_profile" value="{{ $user->youtube_profile }}" >
                                          @error('youtube_profile')   
                                                <span class="text-danger">{{ $message }}</span>    
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="linkedin_profile" class="col-sm-2 control-label">Linkedin Profile</label>            
                                        <div class="col-sm-10">
                                          <input name="linkedin_profile" type="text" class="form-control" id="linkedin_profile" value="{{ $user->linkedin_profile }}" >
                                          @error('linkedin_profile')   
                                                <span class="text-danger">{{ $message }}</span>    
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="about" class="col-sm-2 control-label">About</label>
            
                                        <div class="col-sm-10">
                                          <textarea name="about" class="form-control" id="about" style="height: 100px">{{ $user->about }}</textarea>
                                          @error('about')   
                                                <span class="text-danger">{{ $message }}</span>    
                                          @enderror
                                        </div>
                                      </div>
                                      
                                     
                                      
                                     
                                      <div class="form-group row">
                                        <div class="ml-auto col-sm-10">
                                          <input type="submit" class="btn btn-rounded btn-success" value="Update">
                                        </div>
                                      </div>
                                    </form>
                                </div>
                            
                    </div><!--end box-profile-->                            
                </div><!--end col-xl-8-->    
            </div><!--end row-->
        </section><!--end content-->            
        
    </div><!--end container-full--> 
  </div><!--end content-wrapper-->   
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

@endsection