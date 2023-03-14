@extends('admin.admin_master')
@section('admin')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Product Details</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                
                                <li class="breadcrumb-item active" aria-current="page">Product Details</li>
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
                                    

                                      <div class="row">
                                        <div class="col-lg-3">
                                          <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Vendor User:</label>
                                            <span>{{ $user->name  }}</span>
                                            
                                            
                                              
                                          </div>
                                        </div><!-- col-3 -->
                                        <div class="col-lg-3">
                                          <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Category: </label>
                                            
                                            <span>{{ $category->category_name   }}</span>
                                          </div>
                                        </div><!-- col-3 -->
                                        <div class="col-lg-3">
                                          <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Sub Category: </label>
                                            @if (!($subcategory==null))
                                              <span>{{ $subcategory->subcategory_name   }}</span>
                                            @endif 
                                          </div>
                                        </div><!-- col-3 -->
                                        <div class="col-lg-3">
                                          <div class="form-group mg-b-10-force">
                                            <label class="form-control-label">Brand:</label>
                                            
                                            <span>{{ $brand->brand_name   }}</span>
                                          </div>
                                        </div><!-- col-3 -->
                                      </div>
                                     
                                      <div class="form-group row">
                                        <label for="product_name" class="col-sm-2 control-label">Product Name</label>
            
                                        <div class="col-sm-10">
                                         
                                           <span>{{ $product->product_name }}</span>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="product_code" class="col-sm-2 control-label">Product Code</label>
            
                                        <div class="col-sm-10">
                                          
                                           <span>{{ $product->product_code }}</span>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="selling_price" class="col-sm-2 control-label">Selling Price</label>            
                                        <div class="col-sm-10">
                                          
                                           <span>{{ $product->selling_price }}</span>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="product_details" class="col-sm-2 control-label">Product Details</label>            
                                        <div class="col-sm-10">
                                          
                                           <p>{!! $product->product_details !!}</p>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="video_link" class="col-sm-2 control-label">Video Link</label>            
                                        <div class="col-sm-10">
                                          
                                           <span>{{ $product->video_link }}</span>
                                        </div>
                                      </div>
                                      <div>
                                        <div class="row">
                                          <div class="col-lg-4">

                                            <div class="form-group">
                                                <h5>Image One (Main Thumbnail):</h5>
                                                
                                                    <img  id="one" class="pt-2" style="width: 80px; height:80px;"  src="{{ !empty($product->image_one)? url($product->image_one):url('upload/no_image.jpg') }}" >
                                            </div>
                                          </div><!-- col-4 -->
                                          <div class="col-lg-4">
            
                                            <div class="form-group">
                                                <h5>Image Two (Main Thumbnail):</h5>
                                                
                                                    <img  id="two" class="pt-2" style="width: 80px; height:80px;"  src="{{ !empty($product->image_two)? url($product->image_two):url('upload/no_image.jpg') }}" >
                                            </div>
                                          </div><!-- col-4 -->
                                          <div class="col-lg-4">
            
                                            <div class="form-group">
                                                <h5>Image Three (Main Thumbnail):</h5>
                                                
                                                    <img  id="three" class="pt-2" style="width: 80px; height:80px;"  src="{{ !empty($product->image_three)? url($product->image_three):url('upload/no_image.jpg') }}" >
                                            </div>
                                          </div><!-- col-4 -->

                                    </div>
                                  </div>
        
        
        
                                      <hr>
                                      <br><br>

                                      <div class="row mg-b-25 pt-5">
                                        <div class="col-lg-12">
                                            
                                                @if ( $product->main_slider== 'on' )
                                                   <span>Used as Main Slider</span>  
                                                @else
                                                    <span>Not Used as Main Slider</span>
                                                @endif
                                        </div>  
                                        <div class="col-lg-12">      

                                                @if ( $product->mid_slider== 'on' )
                                                   <span>Used as mid Slider</span>  
                                                @else
                                                    <span>Not Used as mid Slider</span>
                                                @endif
                                                
                                            
                                        </div>                                         
                                      </div>  

                                      <div class=" row mt-3">
                                        <div class="ml-auto col-sm-12">
                                          <a href="{{ route('product.add') }}" class="btn btn-rounded btn-success"  >Add Another Product</a>
                                          <a href="{{ route('product.description',$product->id) }}" class="btn btn-rounded btn-success"  >Add specifications</a>
                                        </div>
                                      </div>
                                     
                                      
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