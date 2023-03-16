@extends('layouts.app')
@section('content')
<div id="dashboard" class="container pt-4 pb-4">
    @include('pages.alert')
    <div class="row">
        <div class="col-md-4">
            <div class="card" id="sidenav">
                <ul   class="nav flex-column nav-pills mt-5 mb-5">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('user.product.list') }}">Product List</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link"  href="{{ route('user.product.upload')  }}">Upload Product</a>
                    </li>                            
                </ul>
            </div>
            <!--endsidenav-->
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
              <!--endcard-->
              


        </div>
         <!--col-md-4-->   
        <div class="col-md-8">
            <div class="card p-3">
                <div class="card-body">
                    <h5 class="card-title mb-5">Please Edit your Product Information</h5>

                    <form method="post" action="{{ route('user.product.update',$product->id) }}" class="form-horizontal form-element col-12" enctype="multipart/form-data">
                     @csrf

                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Category : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <select class="form-control select2" data-placeholder="Choose Category" name="category_id"  >
                                    <option label="Choose Category"></option>
                                    @foreach ($category as $value )
                                    <option value="{{ $value->id  }}"
                                        {{ $value->id == $product->category_id ? 'selected':'' }}>
                                        {{ $value->category_name  }}
                                    </option> 
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Sub Category : </label></div>
                            <div class="col-md-8">
                                <select class="form-control select2" data-placeholder="Choose Sub Category" name="subcategory_id" >
                                    @foreach ($subcategory as $value )
                                        <option value="{{ $value->id  }}"
                                            {{ $value->id == $product->subcategory_id ? 'selected':'' }}>
                                            {{ $value->subcategory_name   }}
                                        </option>   
                                    @endforeach              
                                </select>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Brand : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <select class="form-control select2" data-placeholder="Choose Brand" name="brand_id" >
                                    <option label="Choose Brand"></option>
                                    @foreach ($brand as $value )
                                        <option value="{{ $value->id  }}"
                                            {{ $value->id == $product->brand_id ? 'selected':'' }}>
                                            {{ $value->brand_name  }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Product Name : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <input name="product_name" type="text" class="form-control" id="product_name" value="{{ $product->product_name }}" required>
                                @error('product_name')   
                                    <span class="text-danger">{{ $message }}</span>    
                                @enderror
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Product Code : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <input name="product_code" type="text" class="form-control" id="product_code" value="{{ $product->product_code }}" required>
                                @error('product_code')   
                                    <span class="text-danger">{{ $message }}</span>    
                                @enderror
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Selling Price : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <input name="selling_price" type="text" class="form-control" id="selling_price" value="{{ $product->selling_price }}" required>
                                @error('selling_price')   
                                    <span class="text-danger">{{ $message }}</span>    
                                @enderror
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">product Details : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <textarea id="editor1" class="form-control"   name="product_details"  placeholder="Place some text here" required>{!! $product->product_details !!}</textarea>
                                @error('product_details')   
                                    <span class="text-danger">{{ $message }}</span>    
                                @enderror
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Video Link : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <input name="video_link" type="text" class="form-control" id="video_link" value="{{ $product->video_link }}" >
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
                                <img  id="one" class="pt-2" style="width: 80px; height:80px;"  src="{{ !empty($product->image_one)? url($product->image_one):url('upload/no_image.jpg') }}" >
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
                                <img  id="two" class="pt-2" style="width: 80px; height:80px;"  src="{{ !empty($product->image_two)? url($product->image_two):url('upload/no_image.jpg') }}" >
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
                                <img  id="three" class="pt-2" style="width: 80px; height:80px;"  src="{{ !empty($product->image_three)? url($product->image_three):url('upload/no_image.jpg') }}" >
                            </div>
                        </div>
                        <!--endformgroup-->
                        <hr>
                        

                        <div class="row mg-b-25 pt-5">
                        <div class="col-lg-12">
                            <div class="controls">
                                <fieldset>
                                    <input type="checkbox" name="main_slider"  id="checkbox_2" {{ $product->main_slider== 'on' ? 'checked' : ''}} >
                                    <label for="checkbox_2">Main Slider</label>
                                </fieldset>
                                
                                <fieldset>
                                    <input type="checkbox" name="mid_slider" id="checkbox_5"  {{ $product->mid_slider== 'on' ? 'checked' : ''}} >
                                    <label for="checkbox_5">Mid Slider</label>
                                </fieldset>
                            </div>
                        </div>                                         
                        </div>
                        <!--endformgroup-->

                        <div class="row form-group pt-5 pb-1">
                            <div class="col-md-6">
                                 <input type="submit" class="btn btn-rounded btn-primary mr-3" value="Update">                       
                                <a href="{{ route('user.product.description',$product->id) }}" class="btn btn-rounded btn-secondary mr-3"  >Add Technical specifications</a>
                            </div> 
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
  {{-- <script src="{{ asset('adminbackend/../assets/vendor_components/ckeditor/ckeditor.js') }}"></script>
  <script src="{{ asset('adminbackend/js/pages/editor.js') }}"></script>  --}}
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