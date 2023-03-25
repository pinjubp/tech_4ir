@extends('layouts.app')
@section('content')
<section id="category">
    
    <div  class="container">
        <div class="row">
            <div class="col-md-3 mt-5 mb-5">
                <div class="accordion accordion-flush" id="accordionFlushExample">
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingOne">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                            Search by Category
                        </button>
                      </h2>
                      <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="cat text-align-left"> 
                            @foreach ($categories as $data)
                                
                                <li><a href="{{ route('search.category.product',$data->id) }}">{{ $data->category_name}}</a></li>
                                 
                             @endforeach   
                            </ul>
                        </div>
                      </div>
                    </div>
                    <!--endaccordion-item-->
                    <div class="accordion-item">
                      <h2 class="accordion-header" id="flush-headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                          Search by Brand
                        </button>
                      </h2>
                      <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body">
                            <ul class="cat text-align-left"> 
                            @foreach ($brands as $data)
                                
                                <li><a href="{{ route('search.brand.product',$data->id) }}"><img src="{{ !empty($data->brand_image)? url('upload/brand_images/'.$data->brand_image):url('upload/no_image.jpg') }}" style="height:40px; width:40px;" alt=""><span>{{ $data->brand_name}}</span></a></li>
                                 
                             @endforeach  
                            </ul>
                        </div>
                      </div>
                    </div>
                    <!--endaccordion-item-->
                  </div>
            </div>
            <div class="col-md-9">
                <h2 class="pt-4 pb-4 mb-5">
                    @if (isset($brand->brand_name))
                     
                        {{ $brand->brand_name }}
                    @endif

                    @if (isset($category->category_name))
                          {{ $category->category_name }} 
                    @endif                        
                   
                    
                       
                   
                </h2>
                @foreach ($product as $item)
                <div class="item box">
                    <a href="{{ route('item.detail',$item->id)  }}">
                    {{-- <img class="image" src="{{ asset('') }}" alt="" > --}}
                    <img class="image" src="{{ !empty($item->image_one)? url($item->image_one):url('upload/no_image.jpg') }}"  alt="">
                    </a>
                    <h4><a href="{{ route('item.detail',$item->id)  }}">{{ $item->product_name  }}</a></h4>
                    <a href="{{ route('item.detail',$item->id)  }}" class="btn mt-2 btn-secondary">Details</a>
                </div> 
                <!--enditem--> 
                @endforeach
            </div>
        </div>
    </div>            
</section>
@endsection