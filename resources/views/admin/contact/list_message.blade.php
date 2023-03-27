@extends('admin.admin_master')
@section('admin')
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
                                
                                <li class="breadcrumb-item " aria-current="page">Message</li>
                                <li class="breadcrumb-item active" aria-current="page">Message List</li>
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
                         <h3 class="box-title">Message table with Message List</h3>
                       </div>
                       <!-- /.box-header -->
                       <div class="box-body">
                           <div class="table-responsive">
                             <table id="example1" class="table table-bordered table-striped">
                               <thead>
                                   
                                   <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>Phone</th>
                                        <th>message</th>                                                               
                                        <th>Action</th>
                                    </tr>
                               </thead>
                               <tbody>
                                    @foreach ($allData as $key=>$data)
                                            <tr>
                                                <td>{{ $data->id }}</td>
                                                <td>{{ $data->name }}</td>
                                                <td>{{ $data->email }}</td>
                                                <td>{{ $data->phone }}</td>                                    
                                                <td>{!! $data->message !!}</td>                                                                                                           
                                                <td>                                       
                                                        <a href="{{ route('contact.detail',$data->id) }}" class="btn btn-sm btn-info mb-2 mt-2"><i class="fa fa-eye"></i></a>
                                                        <a href="{{ route('contact.delete',$data->id) }}" class="btn btn-sm btn-danger mt-2 mb-2" id="delete"><i class="fa  fa-trash"></i></a>                                                                               
                                                </td>
                                            </tr>
                                    @endforeach                                                                    
                               </tbody>
                               <tfoot>
                                    <tr>
                                        <th>#</th>
                                        <th>Name</th>
                                        <th>email</th>
                                        <th>Phone</th>
                                        <th>message</th>                                                               
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