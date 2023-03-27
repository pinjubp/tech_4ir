@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Contact Address</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                
                                <li class="breadcrumb-item " aria-current="page">Contact Address</li>
                                <li class="breadcrumb-item active" aria-current="page">Contact Address List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div><!--end content-header--> 
        <section class="content">
            <div class="row">
                <div class="col-12">
                    @include('admin.alert')
                    <div class="box">
                       <div class="box-header with-border">
                         <h3 class="box-title">Contact Address table with Contact Address List</h3>
                       </div>
                       <!-- /.box-header -->
                       <div class="box-body">
                           <div class="table-responsive">
                             <table id="example1" class="table table-bordered table-striped">
                               <thead>
                                   
                                    <tr>
                                        <th>#</th>
                                        <th>Contact Address  Type</th>                                    
                                        <th style="width:30%">Contact Address Details</th>                                                                       
                                        <th>Action</th>
                                    </tr>
                               </thead>
                               <tbody>
                                    @foreach ($allData as $key=>$data)
                                        <tr>
                                            <td>{{ $data->id }}</td>
                                            <td>{{ $data->addresstype }}</td>
                                            
                                            <td>{!! $data->addressdetails !!}</td>                                                                       
                                        
                                            <td>
                                            
                                                    <a href="{{ route('contact.address.edit',$data->id) }}" class="btn btn-sm btn-info m-2"><i class="fa fa-edit"></i></a>
                                                    <a href="{{ route('contact.address.delete',$data->id) }}" class="btn btn-sm btn-danger m-2" id="delete"><i class="fa  fa-trash"></i></a>
                                            
                                                
                                            </td>
                                        </tr>
                                    @endforeach
                                                                                                     
                               </tbody>
                               <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Contact Address  Type</th>                                    
                                        <th style="width:30%">Contact Address Details</th>                                                                       
                                        <th>Action</th>
                                    </tr>
                               </tfoot>
                             </table>
                           </div>
                       </div>
                       <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
       
                             
                </div>
                <!-- /.col -->   
        
            </div><!--end row-->
        </section><!--end content-->            

</div><!--end container-full--> 
</div><!--end content-wrapper-->          

@endsection