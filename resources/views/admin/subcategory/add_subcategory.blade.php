@extends('admin.admin_master')
@section('admin')

    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Add Sub Category</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                
                                <li class="breadcrumb-item active" aria-current="page">Add Sub Category</li>
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
                                    <form method="post" action="{{ route('subcategory.store') }}" class="form-horizontal form-element col-12" enctype="multipart/form-data">
                                      @csrf
                                      <div class="form-group row">
                                        <div class="col-sm-2">
                                        <label for="category_id">Category Name</label>
                                        </div>
                                        <div class="col-sm-10">
                                          <select class="form-control" name="category_id" id="category_id" required>
                                              @foreach ($category as $row )
                                                  <option value="{{ $row->id }}">{{ $row->category_name }}</option>
                                              @endforeach
                                          </select>      
                                        </div>            
                                    </div>
                                     
                                      <div class="form-group row">
                                        <label for="category_name" class="col-sm-2 control-label">Name</label>
            
                                        <div class="col-sm-10">
                                          <input name="subcategory_name" type="text" class="form-control" id="subcategory_name" required>
                                          @error('subcategory_name')   
                                                <span class="text-danger">{{ $message }}</span>    
                                           @enderror
                                        </div>
                                      </div>
                                      
                                     
                                      
                                     
                                      <div class="form-group row">
                                        <div class="ml-auto col-sm-10">
                                          <input type="submit" class="btn btn-rounded btn-success" value="Submit">
                                        </div>
                                      </div>
                                    </form>
                                </div>
                            
                    </div><!--end box-profile-->                            
                </div><!--end col-xl-8-->    
            </div><!--end row-->
        </section><!--end content-->            
        
    </div><!--end container-full--> 
  </div><!--end content-wrapper-->   
   

@endsection