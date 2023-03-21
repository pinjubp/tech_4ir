  <!-- ***** product section ***** -->
  <section class="section"  id="product">
    @foreach ($category as $data)

        @php
            $product = DB::table('products')->where('category_id',$data->id)->get();
            //dd($product->toArray());
        @endphp 
   
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                   
                         <h2>{{ $data->category_name   }}</h2>
                                                       
                </div>
            </div>
        </div>
    </div>
    <div id="recent" class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme">
                    
                   
                        @foreach ($product as $item)
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
    
@endforeach

</section>
  <!-- ***** product section ***** -->