@extends('admin.admin_master')
@section('admin')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Profile</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>

                                <li class="breadcrumb-item active" aria-current="page">Profile</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!--end content-header-->

        <section class="content">
            <div class="row">
                <div class="col-12 col-lg-5 col-xl-4">
                    <div class="box box-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-black" style="background: url('../images/gallery/full/10.jpg') center center;">
                          <h3 class="widget-user-username">{{ Auth::guard('admin')->user()->name }}</h3>
                         
                        </div>
                        <div class="widget-user-image">
                          <img class="rounded-circle" src="{{ (!empty($admin->image ))?
                            url('upload/user_images/'.$admin->image):url('upload/no_image.jpg')   }}"  alt="User Avatar">
                        </div>

                      <div class="box-body box-profile">
                            <div class="row">
                                <div class="col-12">
                                    <div>
                                        <p>Email :<span class="text-gray pl-10">{{ Auth::guard('admin')->user()->email   }}</span> </p>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div><!--end box-profile-->
                    </div><!--end box-widget -->
                </div><!--end col-xl-4-->
                <div class="col-12 col-lg-7 col-xl-8">
                  @include('admin.alert')
                    <div class="nav-tabs-custom box-profile">
                        <ul class="nav nav-tabs">
                          <li><a class="active" href="#changepassword" data-toggle="tab">Change Password</a></li>  
                          <li><a  href="#editprofile" data-toggle="tab">Edit Profile</a></li>
                          
                        </ul><!--end tab-content-->

                        <div class="tab-content">
                            <div class="tab-pane active" id="changepassword">
                                <div class="box p-15">
                                  <form method="POST" action="{{ route('admin.reset.password') }}" class="form-horizontal form-element col-12">
                                    @csrf
                                    <div class="form-group row">
                                      <label for="current_password" class="col-sm-2 control-label">Current Password</label>

                                      <div class="col-sm-10">
                                        <input type="password" class="form-control" name="current_password" id="current_password" placeholder="">
                                        @error('current_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="password" class="col-sm-2 control-label">New Password</label>

                                      <div class="col-sm-10">
                                        <input type="password" class="form-control" name="password" id="password" placeholder="">
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                      </div>
                                    </div>
                                    <div class="form-group row">
                                      <label for="confirm_password" class="col-sm-2 control-label">Confirm Password</label>

                                      <div class="col-sm-10">
                                        <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="">
                                        @error('confirm_password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror

                                      </div>
                                    </div>

                                    <div class="form-group row">
                                      <div class="ml-auto col-sm-10">

                                        <input type="submit" name="submit" class="btn btn-rounded btn-success" value="Submit">
                                      </div>
                                    </div>
                                  </form>
                                </div>
                            </div><!--endchangepassword-->
                            <div class="tab-pane " id="editprofile">
                                <div class="box p-15">
                                    <form method="post" action="{{ route('admin.profile.store') }}"  class="form-horizontal form-element col-12" enctype="multipart/form-data">
                                      @csrf
                                      <div class="form-group row">
                                        <label for="profileImage" class="col-sm-2 control-label">Profile Image</label>
                                        <div class="col-sm-10">
                                        <img id="previewImg" src="{{ (!empty(Auth::guard('admin')->user()->image ))?
                                          url('upload/user_images/'.Auth::guard('admin')->user()->image):url('upload/no_image.jpg')   }}"
                                          alt="Profile" class="rounded-circle border-primary mb-3"  width="150" height="150">
                                        
                                          <div class="custom-file">
                                            <input type="file" name="image" id="image" class="custom-file-input" onchange="previewFile(this);" >
                                            <label class="custom-file-label" for="image">Choose file</label>
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="name" class="col-sm-2 control-label">Name</label>

                                        <div class="col-sm-10">
                                          <input name="name" type="text" class="form-control" id="name" value="{{ Auth::guard('admin')->user()->name }}">
                                        </div>
                                      </div>
                                      
                                      
                                      
                                      
                                      
                                      
                                      <div class="form-group row">
                                        <label for="Email" class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-10">
                                          <input name="email" type="email" class="form-control" id="Email" value="{{ Auth::guard('admin')->user()->email }}">
                                        </div>
                                      </div>
                                      

                                      <div class="form-group row">
                                        <div class="ml-auto col-sm-10">
                                          <input type="submit" class="btn btn-rounded btn-success" value="Save Changes">
                                        </div>
                                      </div>
                                    </form>
                                </div>
                            </div><!--end editprofile-->
                            
                        </div><!--end tab-content-->
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
