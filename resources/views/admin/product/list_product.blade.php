@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <div class="content-wrapper">
    <div class="container-full">
      <!-- Main content -->
      <section class="content">
          <div class="row">
            <div class="col-12">
                @include('admin.alert')
                <div class="box">
                   <div class="box-header  with-border ">
                     <h3 class="box-title d-block overflow-hidden"><span>Product list </span>  <a href="{{ route('product.add') }}"  class="btn  btn-primary float-right" >Add New</a></h3>
                   </div>
                   <!-- /.box-header -->
                   <div class="box-body">
                       <div class="table-responsive">
                         <table id="example5" class="table table-bordered table-striped" style="width:100%">
                           <thead>
                               <tr>
                                   <th>ID</th>
                                   <th>Product Name</th>
                                   <th>Product product_code</th>
                                   <th>Product Selling Price</th>
                                   <th>Product Image</th>
                                   <th>Action</th>

                               </tr>
                           </thead>
                           <tbody>
                               @foreach ( $product as $key=>$data )
                                <tr>
                                    <td>{{ $key+1 }}</td>
                                    <td>{{ $data->product_name }}</td>
                                    <td>{{ $data->product_code }}</td>
                                    <td>{{ $data->selling_price }}</td>
                                    <td>
                                        
                                        <img src="{{ !empty($data->image_one)? url($data->image_one):url('upload/no_image.jpg') }}" style="height:50px; width:80px;" alt="">
                                    </td>
                                    
                                    <td>
                                        @if ( Auth::guard('admin')->user()->usertype == 'admin')
                                             <a href="{{ route('product.edit',$data->id) }}" class="btn btn-sm btn-info m-1"><i class="fa fa-edit"></i></a>
                                             <a href="{{ route('product.detail',$data->id) }}" class="btn btn-sm btn-success m-1"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('product.delete',$data->id) }}" class="btn btn-sm btn-danger m-1" id="delete"><i class="fa  fa-trash"></i></a>
                                            @if ($data->status == 0)
                                                <a href="#"  route="{{ route('product.toggle',$data->id) }}" class="btn btn-sm  btn-warning m-1 toggle-class" title="Inactive" ><i class="fa fa-arrow-down"></i></a>  
                                            @else
                                                <a href="#"  route="{{ route('product.toggle',$data->id) }}" class="btn btn-sm btn-warning m-1 toggle-class" title="active" ><i class="fa fa-arrow-up"></i></a>  
                                            @endif
                                        @endif
                                    </td>

                                </tr>

                               @endforeach



                           </tbody>
                           <tfoot>
                               <tr>
                                   <th>ID</th>
                                   <th>Product Name</th>
                                   <th>Product product_code</th>
                                   <th>Product Selling Price</th>
                                   <th>Product Image</th>
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

 
  <script type="text/javascript">

    $(document).ready(function () {
      
      $('.toggle-class').click(function (e) {
        //alert('i am here');
         var urlID = $(this).attr('route');
         var element = this;
         //alert(urlID);
        //alert(element);
        $.ajax({
              
                type: "GET",
                url: urlID,
                success: function (data) {
                  //console.log(data);                    
                  if(data == '1'){                
                      $(element).children('i').removeClass('fa-arrow-down');
                      $(element).children('i').addClass('fa-arrow-up'); 
                      //$(element).addClass('btn-warning'); 
                      //$(element).removeClass('btn-danger');  
                      $(element).attr('title', 'active');             
                 }else{                        
                       $(element).children('i').removeClass('fa-arrow-up');
                       $(element).children('i').addClass('fa-arrow-down');   
                       //$(element).removeClass('btn-warning');   
                       //$(element).addClass('btn-danger');   
                       $(element).attr('title', 'Inactive');             
                 } 
                  
                },
                error: function (data) {
                 
                    
                }
            });
    
       
      });
    }); 
    
    </script>



  @endsection
