@extends('admin.admin_master')
@section('admin')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Service</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                
                                <li class="breadcrumb-item" aria-current="page">Service</li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Service</li>
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
                                    <form method="post" action="{{ route('update.service',$editData->id) }}" class="form-horizontal form-element col-12" enctype="multipart/form-data">
                                      @csrf
                                      <div class="form-group row">
                                        <label for="service_image" class="col-sm-2 control-label">Service Image</label>
                                        <div class="col-sm-10">

                                          <img id="previewImg" src="{{ (!empty($editData->service_image ))?
                                            url('upload/service_images/'.$editData->service_image):url('upload/no_image.jpg')   }}" 
                                          alt="Profile" class="rounded-rectangle border-primary pb-3" width="120" height="120" >                                                                                              
                                          <div class="custom-file">
                                            <input type="file" name="service_image" id="service_image" class="custom-file-input" onchange="previewFile(this);" >
                                            <label class="custom-file-label" for="image">Choose file</label>
                                            @error('service_image')   
                                                <span class="text-danger">{{ $message }}</span>    
                                           @enderror
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="service_name" class="col-sm-2 control-label">Service Name</label>
            
                                        <div class="col-sm-10">
                                          <input name="service_name" type="text" class="form-control" id="service_name" value="{{ $editData->service_name   }}" >
                                          @error('partner_name')   
                                                <span class="text-danger">{{ $message }}</span>    
                                           @enderror
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="service_icon" class="col-sm-2 control-label">Service Icon</label>
            
                                        <div class="col-sm-10">
                                          <input name="service_icon" type="text" class="form-control" id="service_icon" placeholder="Select icon" value="{{ $editData->service_icon   }}" data-fa-browser >
                                          @error('service_icon')   
                                                <span class="text-danger">{{ $message }}</span>    
                                           @enderror
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="service_details" class="col-sm-2 control-label">Service Details</label>            
                                        <div class="col-sm-10">
                                            <textarea  name="service_details" id="editor1" rows="10" cols="80"  placeholder="Place some text here" required>{{ $editData->service_details   }}</textarea>
                                          @error('service_details')   
                                                <span class="text-danger">{{ $message }}</span>    
                                          @enderror
                                        </div>
                                      </div>
                                     
                                      
                                      
                                      
                                     
                                      <div class="form-group row">
                                        <div class="ml-auto col-sm-10">
                                          <input type="submit" class="btn btn-rounded btn-success" value="Submit">
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