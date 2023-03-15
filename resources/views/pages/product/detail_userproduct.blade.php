@extends('layouts.app')
@section('content')
<div id="dashboard" class="container pt-4 pb-4">
    @include('pages.alert')
    <div class="row">
        <div class="col-md-8">
            <div class="card p-3">
                <div class="card-body">
                    <h5 class="card-title mb-5"></h5>
                    

                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Category : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <span>{{ $category->category_name   }}</span>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Sub Category : </label></div>
                            <div class="col-md-8">
                                @if (!($subcategory==null))
                                    <span>{{ $subcategory->subcategory_name   }}</span>
                                @endif 
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Brand : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <span>{{ $brand->brand_name   }}</span>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Product Name : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <span>{{ $product->product_name }}</span>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Product Code : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <span>{{ $product->product_code }}</span>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Selling Price : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <span>{{ $product->selling_price }}</span>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Selling Price : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <p>{!! $product->product_details !!}</p>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Video Link : <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <span>{{ $product->video_link }}</span>
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Image One (Main Thumbnail): <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <img  id="one" class="pt-2" style="width: 80px; height:80px;"  src="{{ !empty($product->image_one)? url($product->image_one):url('upload/no_image.jpg') }}" >
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Image Two (Main Thumbnail): <span class="tx-danger">*</span></label></div>
                            <div class="col-md-8">
                                <img  id="two" class="pt-2" style="width: 80px; height:80px;"  src="{{ !empty($product->image_two)? url($product->image_two):url('upload/no_image.jpg') }}" >
                            </div>
                        </div>
                        <!--endformgroup-->
                        <div class="row form-group pt-1 pb-1">
                            <div class="col-md-4"><label for="email">Image Two (Main Thumbnail): <span class="tx-danger">*</span></label></div>
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
                                <a href="{{ route('user.product.upload') }}" class="btn btn-rounded btn-success"  >Add Another Product</a>
                                <a href="{{ route('product.description',$product->id) }}" class="btn btn-rounded btn-success"  >Add specifications</a>
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