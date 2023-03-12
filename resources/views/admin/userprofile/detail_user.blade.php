@extends('admin.admin_master')
@section('admin')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">View User Profile</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                
                                <li class="breadcrumb-item active" aria-current="page">View User Profile</li>
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
                                    
                                      <div class="form-group row">
                                        <label for="profileImage" class="col-sm-2 control-label">Profile Image</label>
                                        <div class="col-sm-10">

                                          <img id="previewImg" src="{{ (!empty($user->image ))?
                                            url('upload/user_images/'.$user->image):url('upload/no_image.jpg')   }}" 
                                          alt="Profile" class="rounded-rectangle border-primary pb-3" width="120" height="120" >

                                          <a class="btn btn-primary float-right" href="{{ route('view.userlist') }}">Back</a>
                                          
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="name" class="col-sm-2 control-label">Name</label>
            
                                        <div class="col-sm-10">
                                          
                                           <span>{{ $user->name }}</span>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="Email" class="col-sm-2 control-label">Email</label>            
                                        <div class="col-sm-10">
                                          
                                          <span>{{ $user->email }}</span>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="date_of_birth" class="col-sm-2 control-label">Date Of Birth</label>            
                                        <div class="col-sm-10">
                                          
                                          <span>{{ $user->date_of_birth }}</span>
                                        </div>
                                        
                                      </div>
                                      <div class="form-group row">
                                        <label for="company" class="col-sm-2 control-label">Company</label>            
                                        <div class="col-sm-10">
                                          
                                          <span>{{ $user->company }}</span>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="address" class="col-sm-2 control-label">Address</label>            
                                        <div class="col-sm-10">
                                          
                                          <span>{{ $user->address }}</span>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="website" class="col-sm-2 control-label">Website</label>            
                                        <div class="col-sm-10">                                          
                                          <span>{{ $user->website }}</span>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="phone" class="col-sm-2 control-label">Phone</label>            
                                        <div class="col-sm-10">                                          
                                          <span>{{ $user->phone }}</span>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="twitter_profile" class="col-sm-2 control-label">Twitter Profile</label>            
                                        <div class="col-sm-10">                                          
                                          <span>{{ $user->twitter_profile }}</span>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="facebook_profile" class="col-sm-2 control-label">Facebook Profile</label>            
                                        <div class="col-sm-10">                                         
                                          <span>{{ $user->facebook_profile }}</span> 
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="youtube_profile" class="col-sm-2 control-label">Youtube Profile</label>            
                                        <div class="col-sm-10">
                                         
                                          <span>{{ $user->youtube_profile }}</span> 
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="linkedin_profile" class="col-sm-2 control-label">Linkedin Profile</label>            
                                        <div class="col-sm-10">
                                          <span  >{{ $user->linkedin_profile }}</span>                                          
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="about" class="col-sm-2 control-label">About</label>
            
                                        <div class="col-sm-10">
                                          <p   id="about" style="height: 100px">{{ $user->about }}</p>
                                          
                                        </div>
                                      </div>
                                      
                                     
                                      
                                     
                                      
                                    
                                </div>
                            
                    </div><!--end box-profile-->                            
                </div><!--end col-xl-8-->    
            </div><!--end row-->
        </section><!--end content-->            
        
    </div><!--end container-full--> 
  </div><!--end content-wrapper-->   
     

@endsection