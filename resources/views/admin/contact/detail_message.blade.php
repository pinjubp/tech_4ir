@extends('admin.admin_master')
@section('admin')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Message</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                
                                <li class="breadcrumb-item" aria-current="page">Message</li>
                                <li class="breadcrumb-item active" aria-current="page">Message Details</li>
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
                                    
                                      
                                      <div class="form-group row">
                                        <label for="service_name" class="col-sm-2 control-label">Name</label>
            
                                        <div class="col-sm-10">
                                          <span>{{ $viewData->name }}</span>                                          
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="service_name" class="col-sm-2 control-label">Email</label>
            
                                        <div class="col-sm-10">
                                          <span>{{ $viewData->email }}</span>                                          
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="service_name" class="col-sm-2 control-label">Phone</label>
            
                                        <div class="col-sm-10">
                                          <span>{{ $viewData->phone }}</span>                                          
                                        </div>
                                      </div>
                                      
                                      <div class="form-group row">
                                        <label for="service_details" class="col-sm-2 control-label">Message</label>            
                                        <div class="col-sm-10">
                                            <p class="d-block">{{ $viewData->message }}</p>
                                        </div>
                                      </div>
                                     
                                </div>
                            
                    </div><!--end box-profile-->                            
                </div><!--end col-xl-8-->    
            </div><!--end row-->
        </section><!--end content-->            
        
    </div><!--end container-full--> 
  </div><!--end content-wrapper-->   

@endsection