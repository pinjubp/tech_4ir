 @extends('layouts.app')
@section('content')
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>

<section class="section" id="detail">
    <div class="container" >
        <div class="row">
            <div class="col-md-6">                    
                <div class="xzoom-container">
                    <img class="xzoom" id="xzoom-default" src="{{ !empty($detail->image_one)? url($detail->image_one):url('upload/no_image.jpg') }}" xoriginal="{{ url($detail->image_one) }}" />
                     <div class="xzoom-thumbs mt-5">
                        @if (!empty($detail->image_one))
                        <a href="{{ url($detail->image_one) }}">
                            <img class="xzoom-gallery" width="80" src="{{ !empty($detail->image_one)? url($detail->image_one):url('upload/no_image.jpg') }}"  xpreview="{{ url($detail->image_one) }}" title="The description goes here">
                        </a>
                        @endif
                        @if (!empty($detail->image_two))
                       <a href="{{ url($detail->image_two) }}">
                            <img class="xzoom-gallery" width="80" src="{{ !empty($detail->image_two)? url($detail->image_two):url('upload/no_image.jpg') }}" title="The description goes here">
                        </a>
                        @endif
                        @if (!empty($detail->image_three))
                            <a href="{{ url($detail->image_three) }}">
                                <img class="xzoom-gallery" width="80" src="{{ !empty($detail->image_three)? url($detail->image_three):url('upload/no_image.jpg') }}" title="The description goes here">
                            </a> 
                        @endif
                                                
                    </div>
                </div>                   
            </div>
            <!--endcol-md-8-->
            <div class="col-md-6" id="product_detail">
                
                
                
                <ul class="list-style-none">
                    <li><h3>{{ $detail->product_name }}</h3></li>
                    <li><h4><span>Product Price : </span>Tk.{{ $detail->selling_price }}</h4></li>
                    
                    <li><h5><span>Vendor :</span>{{ $user->company   }}</h5></li>
                    <li><h5><span >Vendor Website :</span>{{ $user->website   }}</h5></li>
                    <li><h5><span >Vendor phone :</span>{{ $user->phone   }}</h5></li>
                    <li><h5><span>Address</span> <address>{{ $user->address   }}</address>  </h5></li>
                    <li><p>{{ $user->about   }}</p></li>
                    <li><a href="{{ route('compare.product',$detail->id) }}" class="btn  btn-secondary">Compare with similar product</a></li>
                </ul>

                
            </div>
            <!--endcol-md-4-->
        </div>
    </div>
</section>
<section class="section container" id="specification">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            
                <button class="nav-link active " id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Specification</button>                                    
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Details</button>                                        
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Comments</button>                    
            
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active p-3" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab" tabindex="0">
            <table class="table table-bordered table-striped m-3">
                <thead>
                    <tr>                                            
                        <th>Spacification Name</th>	
                        <th>Spacification value</th>
                                                                                                                                                                                                     
                    </tr>
                </thead>
                <tbody id="space-generate-tr"> 
                    @foreach ( $description as $key=>$data )                                       
                    <tr> 
                        <td>{{ $data->specification_name  }}</td>
                        <td>{{ $data->specification_value  }}</td>
                    </tr>   
                    @endforeach                                       
                </tbody>
                <tfoot>
                    <tr>                                            
                        <th>Spacification Name</th>					
                        <th>Spacification value</th>
                                                                                               
                    </tr>
                </tfoot>
            </table>
        </div>
        <div class="tab-pane fade p-3" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            {!! $detail->product_details  !!}
        </div>
        <div class="tab-pane fade p-3" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab" tabindex="0">
            
        </div>

    </div>
</section>
<!--endspecification-->

<section class="section" id="product">
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                
                        <h2>Related Product</h2>
                                                    
                </div>
            </div>
        </div>
    </div>
    <!--endcontainer-->
    <div id="recent" class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme">
                    
                
                        @foreach ($sameproduct as $item)
                        <div class="item box">
                            <a href="{{ route('item.detail',$item->id)  }}">
                            {{-- <img class="image" src="{{ asset('') }}" alt="" > --}}
                            <img class="image" src="{{ !empty($item->image_one)? url($item->image_one):url('upload/no_image.jpg') }}"  alt="">
                            </a>
                            <a href="{{ route('item.detail',$item->id)  }}" class="btn mt-2 btn-secondary">Details</a>
                        </div> 
                        <!--enditem--> 
                        
                        @endforeach
                    
                                                            
                </div>
                <!--owl-carousel-->
            </div>
            <!--endcol-lg-12-->
        </div>
        <!--row-->
    </div>
    <!--recent-->
    
</section> 

<script src='https://code.jquery.com/jquery-2.1.1.js'></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/xzoom.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/hammer.js/1.0.5/jquery.hammer.min.js') }}"></script>  
<script type="text/javascript" src="{{ asset('frontend/assets/js/setup.js') }}"></script>
@endsection