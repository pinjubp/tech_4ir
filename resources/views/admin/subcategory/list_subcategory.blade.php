@extends('admin.admin_master')
@section('admin')
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
          <div class="row">
            <div class="col-12">
                @include('admin.alert')
                <div class="box">
                   <div class="box-header  with-border ">
                     <h3 class="box-title d-block overflow-hidden"><span>Category list </span>  <a href="{{ route('subcategory.add') }}"  class="btn  btn-primary float-right" >Add New</a></h3>
                   </div>
                   <!-- /.box-header -->
                   <div class="box-body">
                       <div class="table-responsive">
                         <table id="example5" class="table table-bordered table-striped" style="width:100%">
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Category Name</th>
                                   <th>Sub Category Name</th>
                                   <th>Action</th>

                               </tr>
                           </thead>
                           <tbody>
                               @foreach ( $subcategory as $key=>$data )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    @php
                                      $category = DB::table('categories')->where('id',$data->category_id)->first();  
                                    
                                    @endphp

                                    <td>{{ $category->category_name  }}</td>

                                    <td>{{ $data->subcategory_name }}</td>
                                    <td>
                                        <a href="{{ route('subcategory.edit',$data->id) }}" class="btn btn-sm btn-info">Edit</a>
                                        <a href="{{ route('subcategory.delete',$data->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                    </td>

                                </tr>

                               @endforeach



                           </tbody>
                           <tfoot>
                               <tr>
                                <th>ID</th>
                                <th>Category Name</th>
                                <th>Sub Category Name</th>
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
          </div>
      </section>
    </div>
  </div>
  <!--end main-->





  @endsection
