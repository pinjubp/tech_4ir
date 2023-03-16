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
                        <a class="nav-link "  href="{{ route('user.product.upload')  }}">Upload Product</a>
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
        </div>    
        <div class="col-md-8">
            <div class="card p-3">
                <div class="card-body">
                    <h5 class="card-title mb-5"></h5>
                    

                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="category_name">Category : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <span>{{ $category->category_name   }}</span>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="subcategory_name">Sub Category : </label></div>
                            <div class="col-md-8">
                                @if (!($subcategory==null))
                                    <span>{{ $subcategory->subcategory_name   }}</span>
                                @endif 
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="brand_name">Brand : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <span>{{ $brand->brand_name   }}</span>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="product_name">Product Name : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <span>{{ $product->product_name }}</span>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="product_code">Product Code : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <span>{{ $product->product_code }}</span>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="selling_price">Selling Price : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <span>{{ $product->selling_price }}</span>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="product_details">Product Details : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <p>{!! $product->product_details !!}</p>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="video_link">Video Link : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <span>{{ $product->video_link }}</span>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="image_one">Image One (Main Thumbnail): <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <img  id="one" class="pt-2" style="width: 80px; height:80px;"  src="{{ !empty($product->image_one)? url($product->image_one):url('upload/no_image.jpg') }}" >
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="image_two">Image Two (Main Thumbnail): <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <img  id="two" class="pt-2" style="width: 80px; height:80px;"  src="{{ !empty($product->image_two)? url($product->image_two):url('upload/no_image.jpg') }}" >
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="image_three">Image Two (Main Thumbnail): <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <img  id="three" class="pt-2" style="width: 80px; height:80px;"  src="{{ !empty($product->image_three)? url($product->image_three):url('upload/no_image.jpg') }}" >
                            </div>
                        </div>
                        <!--endformgroup-->
                        <hr>
                        

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
                        <!--endformgroup-->

                        <div class="row form-group pt-5 pb-1">
                            <div class="col-md-12"> 
                                <a href="{{ route('user.product.upload') }}" class="btn btn-rounded btn-primary"  >Add Another Product</a>
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

@endsection