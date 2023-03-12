@extends('admin.admin_master')
@section('admin')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Product</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                
                                <li class="breadcrumb-item active" aria-current="page">Add Product</li>
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
                                    <form method="post" action="{{ route('product.store') }}" class="form-horizontal form-element col-12" enctype="multipart/form-data">
                                      @csrf

                                      <div class="row">
                                        <div class="col-lg-3">
                                          <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Vendor User: <span class="tx-danger">*</span></label>
                                            <select class="form-control select2" data-placeholder="Choose Vendor User" name="user_id" tabindex="-1" aria-hidden="true">
                                              <option label="Choose Category"></option>
                                              @foreach ($user as $row )
                                              <option value="{{ $row->id }}">{{ $row->name }}</option>
                                              @endforeach
                                            </select>
                                          </div>
                                        </div><!-- col-3 -->
                                        <div class="col-lg-3">
                                          <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Category: <span class="tx-danger">*</span></label>
                                            <select class="form-control select2" data-placeholder="Choose Category" name="category_id"  tabindex="-1" aria-hidden="true">
                                              <option label="Choose Category"></option>
                                              @foreach ($category as $row )
                                              <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                                              @endforeach
                                            </select>
                                          </div>
                                        </div><!-- col-3 -->
                                        <div class="col-lg-3">
                                          <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Sub Category: <span class="tx-danger">*</span></label>
                                            <select class="form-control select2" data-placeholder="Choose Sub Category" name="subcategory_id" tabindex="-1" aria-hidden="true">
                                              
                                            </select>
                                          </div>
                                        </div><!-- col-3 -->
                                        <div class="col-lg-3">
                                          <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Brand: <span class="tx-danger">*</span></label>
                                            <select class="form-control select2" data-placeholder="Choose Brand" name="brand_id" tabindex="-1" aria-hidden="true">
                                              <option label="Choose Brand"></option>
                                              @foreach ($brand as $row )
                                              <option value="{{ $row->id }}">{{ $row->brand_name }}</option>
                                              @endforeach
                                            </select>
                                          </div>
                                        </div><!-- col-3 -->
                                      </div>
                                     
                                      <div class="form-group row">
                                        <label for="product_name" class="col-sm-2 control-label">Product Name</label>
            
                                        <div class="col-sm-10">
                                          <input name="product_name" type="text" class="form-control" id="product_name" required>
                                          @error('product_name')   
                                                <span class="text-danger">{{ $message }}</span>    
                                           @enderror
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="product_code" class="col-sm-2 control-label">Product Code</label>
            
                                        <div class="col-sm-10">
                                          <input name="product_code" type="text" class="form-control" id="product_code" required>
                                          @error('product_code')   
                                                <span class="text-danger">{{ $message }}</span>    
                                           @enderror
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="selling_price" class="col-sm-2 control-label">Selling Price</label>            
                                        <div class="col-sm-10">
                                          <input name="selling_price" type="text" class="form-control" id="selling_price" required>
                                          @error('selling_price')   
                                                <span class="text-danger">{{ $message }}</span>    
                                           @enderror
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="product_details" class="col-sm-2 control-label">Product Details</label>            
                                        <div class="col-sm-10">
                                          <textarea id="editor1"   name="product_details"  placeholder="Place some text here" required></textarea>
                                          @error('product_details')   
                                                <span class="text-danger">{{ $message }}</span>    
                                           @enderror
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="video_link" class="col-sm-2 control-label">Video Link</label>            
                                        <div class="col-sm-10">
                                          <input name="video_link" type="text" class="form-control" id="video_link" >
                                          @error('video_link')   
                                                <span class="text-danger">{{ $message }}</span>    
                                           @enderror
                                        </div>
                                      </div>
                                      <div>
                                        <div class="row">
                                          <div class="col-lg-4">

                                            <div class="form-group">
                                                <h5>Image One (Main Thumbnail):<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file"  id="file2"  onchange="readURL1(this);"  name="image_one" class="form-control" >
                                                </div>
                                                    <img  id="one" class="pt-2" style="width: 80px; height:80px;"  src="{{ url('upload/no_image.jpg')   }}" >
                                            </div>
                                          </div><!-- col-4 -->
                                          <div class="col-lg-4">
            
                                            <div class="form-group">
                                                <h5>Image Two (Main Thumbnail):<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file"  id="file2"  onchange="readURL2(this);"  name="image_two" class="form-control" >
                                                </div>
                                                    <img  id="two" class="pt-2" style="width: 80px; height:80px;"  src="{{ url('upload/no_image.jpg')   }}" >
                                            </div>
                                          </div><!-- col-4 -->
                                          <div class="col-lg-4">
            
                                            <div class="form-group">
                                                <h5>Image Three (Main Thumbnail):<span class="text-danger">*</span></h5>
                                                <div class="controls">
                                                    <input type="file"  id="file3"  onchange="readURL3(this);"  name="image_three" class="form-control" >
                                                </div>
                                                    <img  id="three" class="pt-2" style="width: 80px; height:80px;"  src="{{ url('upload/no_image.jpg')   }}" >
                                            </div>
                                          </div><!-- col-4 -->

                                    </div>
                                  </div>
        
        
        
                                      <hr>
                                      <br><br>

                                      <div class="row mg-b-25 pt-5">
                                        <div class="col-lg-12">
                                            <div class="controls">
                                                <fieldset>
                                                  <input type="checkbox" name="main_slider"  id="checkbox_2" >
                                                  <label for="checkbox_2">Main Slider</label>
                                                </fieldset>
                                                
                                                <fieldset>
                                                  <input type="checkbox" name="mid_slider" id="checkbox_5" >
                                                  <label for="checkbox_5">Mid Slider</label>
                                                </fieldset>
                                            </div>
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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
   $('select[name="category_id"]').on('change',function(){

        var category_id = $(this).val();
        
        //alert(category_id);
        if (category_id) {

          $.ajax({
            url: "{{ url('product/get/subcategory/') }}/"+category_id,            
            type:"GET",
            dataType:"json",
            success:function(data) {
            ;  
            var d =$('select[name="subcategory_id"]').empty();
            $.each(data, function(key, value){

            $('select[name="subcategory_id"]').append('<option value="'+ value.id + '">' + value.subcategory_name + '</option>');

            });
            },
          });

        }else{
          alert('danger');
        }

          });
    });

  </script>
  <script type="text/javascript">
    function readURL1(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#one')
          .attr('src', e.target.result)
          .width(80)
          .height(80);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>
  <script type="text/javascript">
    function readURL2(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#two')
          .attr('src', e.target.result)
          .width(80)
          .height(80);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>
  <script type="text/javascript">
    function readURL3(input){
      if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
          $('#three')
          .attr('src', e.target.result)
          .width(80)
          .height(80);
        };
        reader.readAsDataURL(input.files[0]);
      }
    }
  </script>

@endsection