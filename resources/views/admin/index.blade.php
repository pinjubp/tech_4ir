@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">
        @include('admin.alert')     
      <!-- Main content -->
      {{-- <h4>Login User Name:{{ Auth::guard('admin')->user()->name }}</h4> 
      <h4>Login User email:{{ Auth::guard('admin')->user()->email }}</h4>  --}}
      <section class="content">
          <div class="row">
            
              <div class="col-xl-2 col-6">
                   
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-primary-light rounded w-60 h-60">
                              <i class="text-primary mr-0 font-size-24 mdi mdi-account-multiple"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Total user</p>
                              <h3 class="text-white mb-0 font-weight-500">{{ $totalUser }} </h3>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-xl-2 col-6">
                  <div class="box overflow-hidden pull-up">
                      <div class="box-body">							
                          <div class="icon bg-warning-light rounded w-60 h-60">
                              <i class="text-warning mr-0 font-size-24 mdi mdi-package"></i>
                          </div>
                          <div>
                              <p class="text-mute mt-20 mb-0 font-size-16">Total Product</p>
                              <h3 class="text-white mb-0 font-weight-500">{{ $totalProduct }}</h3>
                          </div>
                      </div>
                  </div>
              </div>
              
              
              <div class="col-12">
                  <div class="box">
                      <div class="box-header">
                          <h4 class="box-title align-items-start flex-column">
                              New Arrivals
                              <small class="subtitle">More than 400+ new members</small>
                          </h4>
                      </div>
                      <div class="box-body">
                          <div class="table-responsive">
                              <table class="table no-border">
                                  <thead>
                                      <tr class="text-uppercase bg-lightest">
                                          <th style="min-width: 250px"><span class="text-white">products</span></th>
                                          <th style="min-width: 100px"><span class="text-fade">price</span></th>
                                         
                                          <th style="min-width: 130px"><span class="text-fade">status</span></th>
                                          <th style="min-width: 120px"></th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ( $newProduct as $key=>$data )
                                      <tr>										
                                          <td class="pl-0 py-8">
                                              <div class="d-flex align-items-center">
                                                  <div class="flex-shrink-0 mr-20">
                                                      {{-- <div class="bg-img h-50 w-50" style="background-image: url({{ asset('adminbackend../images/gallery/creative/img-1.jpg') }})"></div> --}}
                                                      <img src="{{ !empty($data->image_one)? url($data->image_one):url('upload/no_image.jpg') }}" style="height:50px; width:80px;" alt="">
                                                  </div>

                                                  <div>
                                                      <a href="#" class="text-white font-weight-600 hover-primary mb-1 font-size-16">{{$data->product_name  }}</a>
                                                   </div>
                                              </div>
                                          </td>
                                          <td>
                                              
                                              <span class="text-white font-weight-600 d-block font-size-16">
                                                  TK.{{ $data->selling_price  }}
                                              </span>
                                          </td>
                                         
                                          <td>
                                            @if ($data->status == 0)
                                            <span class="badge badge-secondary-light badge-lg">Not Approved</span> 
                                            @else
                                            <span class="badge badge-primary-light badge-lg">Approved</span>  
                                            @endif
                                              
                                          </td>
                                          <td class="text-right">
                                              
                                              <a href="{{ route('product.detail',$data->id) }}" class="waves-effect waves-light btn btn-info btn-circle mx-5"><span class="mdi mdi-arrow-right"></span></a>
                                          </td>
                                      </tr>
                                     @endforeach
                                  </tbody>
                              </table>
                          </div>
                      </div>
                  </div>  
              </div>
          </div>
      </section>
      <!-- /.content -->
    </div>
</div>
@endsection