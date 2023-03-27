@extends('layouts.app')
@section('content')
<section id="services" class="services">
    <div class="container">
      <div class="row text-center">
        <h2 class="display-3 fw-bold">Our servicers</h2>
        <div class="heading-line mb-5"></div>           
      </div>
    </div>
    <!-- START THE DESCRIPTION -->
    <div class="container">
      <div class="row ">
        <div class="col-md-12 border-right"  data-aos="fade-right">
           <div class="bg-white">
              <h3 class="fw-bold text-capitalize text-center">
                {{ $serviceintro->heading  }}
              </h3>
           </div>
           
        </div>
        <div class="col-md-12" data-aos="fade-left">
          <div class="bg-white text-start">
            <p class="fw-light">
              {!! $serviceintro->detail !!}
            </p>
         </div>
        </div>
      </div>
    </div>
    <!-- START THE CONTENT FOR THE SERVICES -->
    <div class="container">
      <!-- START THE MARKATIONG CONTENT -->
      @foreach ($service as $key=>$data )
        <div class="row">
          
                    @if ($data->id % 2 != 0)
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4"  data-aos="{{ $data->id % 2 != 0 ? 'zoom-in-up' : 'zoom-in-down'  }}">
                      <div class="services__content">
                          <div class="icon d-block fas {{ $data->service_icon }}"></div>
                          <h3 class="display-3--title mt-1">{{ $data->service_name }}</h3>
                          <p>
                            {!! $data->service_details !!}
                          </p>
                          

                        
                      </div>
                    </div>
                  @else
                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end" data-aos="{{ $data->id % 2 != 0 ? 'zoom-in-down' : 'zoom-in-up'  }}">
                      <div class="services__pic">
                        <img src="{{ (!empty($data->service_image ))?
                          url('upload/service_images/'.$data->service_image):url('upload/no_image.jpg')   }}" alt="marketing illustration" class="img-fluid">
                      </div>
                    </div> 
                  @endif

                  @if ($data->id % 2 != 0)
                 
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end"  data-aos="{{ $data->id % 2 == 0 ? 'zoom-in-down' : 'zoom-in-up'  }}">
                    <div class="services__pic">
                      <img src="{{ (!empty($data->service_image ))?
                        url('upload/service_images/'.$data->service_image):url('upload/no_image.jpg')   }}" alt="web development" class="img-fluid">
                    </div>
                  </div>
                  @else
                  <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4" data-aos="zoom-in-right">
                    <div class="services__content">
                      <div class="icon d-block fas {{ $data->service_icon }}"></div>
                        <h3 class="display-3--title mt-1">{{ $data->service_name }}</h3>
                        <p>
                          {!! $data->service_details !!}
                        </p>
                        <button class="rounded-pill btn-rounded border-primary">Learn more <span><i class="fas fa-arrow-right"></i></span></button>
                    </div>
                  </div>
                @endif
        </div>
      @endforeach
      
    </div>
  </section>
@endsection