@extends('layouts.app')
@section('content')
<div id="dashboard" class="container pt-4 pb-4">
    @include('pages.alert')
    <div class="row">
        <div class="col-md-8">
            <div class="card p-3">
                <div class="card-body">
                    <h5 class="card-title mb-5">Please Enter Your Product Information</h5>

                    <form method="post" action="{{ route('user.product.store') }}" class="form-horizontal form-element col-12" enctype="multipart/form-data">
                     @csrf

                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Category : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <select class="form-control select2" data-placeholder="Choose Category" name="category_id"  >
                                    <option label="Choose Category"></option>
                                    @foreach ($category as $row )
                                    <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Sub Category : </label></div>
                            <div class="col-md-8">
                                <select class="form-control select2" data-placeholder="Choose Sub Category" name="subcategory_id" >
                                                
                                </select>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Brand : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <select class="form-control select2" data-placeholder="Choose Brand" name="brand_id" 
                                    <option label="Choose Brand"></option>
                                    @foreach ($brand as $row )
                                    <option value="{{ $row->id }}">{{ $row->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Product Name : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <input name="product_name" type="text" class="form-control" id="product_name" required>
                                @error('product_name')   
                                    <span class="text-danger">{{ $message }}</span>    
                                @enderror
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Product Code : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <input name="product_code" type="text" class="form-control" id="product_code" required>
                                @error('product_code')   
                                    <span class="text-danger">{{ $message }}</span>    
                                @enderror
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Selling Price : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <input name="selling_price" type="text" class="form-control" id="selling_price" required>
                                @error('selling_price')   
                                    <span class="text-danger">{{ $message }}</span>    
                                @enderror
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Selling Price : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <textarea id="editor1" class="form-control"   name="product_details"  placeholder="Place some text here" required></textarea>
                                @error('product_details')   
                                    <span class="text-danger">{{ $message }}</span>    
                                @enderror
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Video Link : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <input name="video_link" type="text" class="form-control" id="video_link" required>
                                @error('selling_price')   
                                    <span class="text-danger">{{ $message }}</span>    
                                @enderror
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Image One (Main Thumbnail): <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <input type="file"  id="file1"  onchange="readURL1(this);"  name="image_one" class="form-control" >
                                @error('selling_price')   
                                    <span class="text-danger">{{ $message }}</span>    
                                @enderror
                                <img  id="one" class="pt-2" style="width: 80px; height:80px;"  src="{{ url('upload/no_image.jpg')   }}" >
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Image Two (Main Thumbnail): <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <input type="file"  id="file2"  onchange="readURL2(this);"  name="image_two" class="form-control" >
                                @error('selling_price')   
                                    <span class="text-danger">{{ $message }}</span>    
                                @enderror
                                <img  id="two" class="pt-2" style="width: 80px; height:80px;"  src="{{ url('upload/no_image.jpg')   }}" >
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Image Two (Main Thumbnail): <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <input type="file"  id="file3"  onchange="readURL3(this);"  name="image_three" class="form-control" >
                                @error('selling_price')   
                                    <span class="text-danger">{{ $message }}</span>    
                                @enderror
                                <img  id="three" class="pt-2" style="width: 80px; height:80px;"  src="{{ url('upload/no_image.jpg')   }}" >
                            </div>
                        </div>
                        <!--endformgroup-->
                        <hr>
                        

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
                        <!--endformgroup-->

                        <div class="row form-group pt-5 pb-1">
                            <div class="col-md-4"> <input type="submit" class="btn btn-rounded btn-success" value="Submit"></div>                        
                        </div>
                        <!--endformgroup-->

                    </form>
                </div>    
            </div>
        </div>
    </div>
</div>   
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>

  <script src="https://cdn.jsdelivr.net/bootstrap.tagsinput/0.8.0/bootstrap-tagsinput.min.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
   $('select[name="category_id"]').on('change',function(){

        var category_id = $(this).val();
        var url = "{{ route('user.get.subcategory', ":id") }}";
        url = url.replace(':id', category_id);
        
        //alert(url);
        if (category_id) {

          $.ajax({
            //url: "{{ url('/user/get/subcategory/') }}/"+category_id, 
            url: url,
            type:"GET",
            dataType:"json",
            success:function(data) {
           
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