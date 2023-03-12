@extends('admin.admin_master')
@section('admin')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Brand</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                
                                <li class="breadcrumb-item active" aria-current="page">Add Brand</li>
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
                                    <form method="post" action="{{ route('brand.store') }}" class="form-horizontal form-element col-12" enctype="multipart/form-data">
                                      @csrf

                                      <div class="form-group row">
                                        <label for="profileImage" class="col-sm-2 control-label">Profile Image</label>
                                        <div class="col-sm-10">

                                          <img id="previewImg" src="{{ asset('upload/no_image.jpg')   }}" 
                                          alt="brandimg" class="rounded-rectangle border-primary pb-3" width="120" height="120" >
            
                                        
                                          

                                          <div class="custom-file">
                                            <input type="file" name="brand_image" id="brand_image" class="custom-file-input" onchange="previewFile(this);" >
                                            <label class="custom-file-label" for="image">Choose file</label>
                                          </div>
                                        </div>
                                      </div>
                                     
                                      <div class="form-group row">
                                        <label for="category_name" class="col-sm-2 control-label">Name</label>
            
                                        <div class="col-sm-10">
                                          <input name="brand_name" type="text" class="form-control" id="brand_name" required>
                                          @error('brand_name')   
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