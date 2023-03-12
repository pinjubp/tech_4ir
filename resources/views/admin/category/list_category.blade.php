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
                     <h3 class="box-title d-block overflow-hidden"><span>Category list </span>  <a href="{{ route('category.add') }}"  class="btn  btn-primary float-right" >Add New</a></h3>
                   </div>
                   <!-- /.box-header -->
                   <div class="box-body">
                       <div class="table-responsive">
                         <table id="example5" class="table table-bordered table-striped" style="width:100%">
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Category Name</th>
                                   <th>Action</th>

                               </tr>
                           </thead>
                           <tbody>
                               @foreach ( $category as $key=>$data )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $data->category_name }}</td>
                                    <td>
                                        <a href="{{ route('category.edit',$data->id) }}" class="btn btn-sm btn-info">Edit</a>
                                        <a href="{{ route('category.delete',$data->id) }}" class="btn btn-sm btn-danger" id="delete">Delete</a>
                                    </td>

                                </tr>

                               @endforeach



                           </tbody>
                           <tfoot>
                               <tr>
                                <th>ID</th>
                                <th>Category Name</th>
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

  <!-- Modal -->
  {{-- <div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="myModalLabel">Medium model</h4>
                <a type="button" class="close" data-dismiss="modal" aria-hidden="true">×</a>
            </div>
            @if ($errors->any())
            <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('store.category') }}">
                @csrf
            <div class="modal-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Category Name</label>
                    <input type="text" class="form-control" name="category_name" id="category_name"  placeholder="Category">

                  </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-info pd-x-20" value="Submit">
                <a type="button" class="btn btn-info btn-rounded" data-dismiss="modal">Close</a>
            </div>

            </form>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div> --}}
<!-- /.modal -->




  @endsection
