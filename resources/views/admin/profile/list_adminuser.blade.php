@extends('admin.admin_master')
@section('admin')
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">List Admin User</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                
                                <li class="breadcrumb-item " aria-current="page">Profile</li>
                                <li class="breadcrumb-item active" aria-current="page">List Admin User</li>
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
                         <h3 class="box-title">Data Table With Full Features</h3>
                       </div>
                       <!-- /.box-header -->
                       <div class="box-body">
                           <div class="table-responsive">
                             <table id="example1" class="table table-bordered table-striped">
                               <thead>
                                   <tr>
                                       <th>Id</th> 
                                       <th>Name</th>
                                       <th>email</th>
                                       <th>User Type</th>
                                       <th>Image</th>
                                       <th>Action</th>                                       
                                   </tr>
                               </thead>
                               <tbody>
                                    @foreach ($allData as $key=>$data)
                                    <tr>
                                        <td>{{ $data->id }}</td>
                                        <td>{{ $data->name }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->usertype }}</td>
                                        
                                        <td>
                                            <img id="previewImg" src="{{ (!empty($data->image ))?
                                            url('upload/admin_images/'.$data->image):url('upload/no_image.jpg')   }}"
                                             width="120" height="120" alt="Profile" class="rounded-rectangle  border-primary" >
                                        </td>
                                        <td>
                                            @if ( Auth::guard('admin')->user()->usertype == 'admin')
                                            <a href="{{ route('edit.adminuser',$data->id) }}" class="btn btn-sm btn-info m-1"><i class="fa fa-edit"></i></a>
                                            <a href="{{ route('delete.adminuser',$data->id) }}" class="btn btn-sm btn-danger m-1" id="delete"><i class="fa  fa-trash"></i></a>
                                            @endif
                                        </td>                                        
                                    </tr>   
                                    @endforeach                                                                      
                               </tbody>
                               <tfoot>
                                    <tr>
                                        <th>Id</th> 
                                        <th>Name</th>
                                        <th>email</th> 
                                        <th>User Type</th>                                       
                                        <th>Image</th>
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