@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
{{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/4.7.7/handlebars.min.js"></script> --}}
    <!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Product Specification</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                
                                <li class="breadcrumb-item active" aria-current="page">Add Product Specification</li>
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
                            <div class="box-body">  
                                {{-- <h3 class="p-3 pl-0">{{ $product->product_name  }}</h3>  --}}
                                {{-- <form method="POST" action="{{ route('product.specification.store') }}">
                                    @csrf  --}}
                                    <div class="row">                                        
                                        <div class="col-md-6">
                                                                       
                                            <div class="form-group">                                                                                      
                                                <div class="mb-3 row">
                                                    <label for="specification_name" class="col-sm-4 col-form-label">Specification Name</label>
                                                    <div class="col-sm-8">
                                                    <input type="text" name="specification_name" class="form-control" id="specification_name" >
                                                   
                                                    <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">

                                                    <input type="hidden" name="id" id="id" >
                                                   
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">                                                                                      
                                                <div class="mb-3 row">
                                                    <label for="specification_value" class="col-sm-4 col-form-label">Specification Value</label>
                                                    <div class="col-sm-8">
                                                    <input type="text" name="specification_value" class="form-control" id="specification_value">
                                                   
                                                   
                                                    </div>
                                                </div>
                                            </div>          
                                        </div>
                                        <div class="col-md-6">
                                             <input type="submit" id="submit"  class="btn btn-success" value="Add">
                                             <input type="submit" class="btn btn-info ml-4" id="showspecifications"  value="Show All">

                                            {{-- <a id="submit"   class="btn btn-primary">Submit</a>  --}}
                                        </div>
                                    </div>
                                {{-- </form> --}}
                                
                                
                                
                            </div>                                      
                         </div>
                            
                    </div><!--end box-profile--> 
                    <div class="box-profile d-none" id="space">                            
                        <div class="box p-15">		
                            <div class="box-body">  
                                                               
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    
                                                    <th>Spacification Name</th>	
                                                    <th>Spacification value</th>
                                                    <th>Action</th>
                                                    				
                                                                                                                              
                                                </tr>
                                            </thead>
                                            <tbody id="space-generate-tr">                                        
                                                <tr>
                                                    
                                                </tr>                                          
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    
                                                    <th>Spacification Name</th>					
                                                    <th>Spacification value</th>
                                                    <th>Action</th>                                                                       
                                                </tr>
                                            </tfoot>
        
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> <!--end box-profile--> 

                </div><!--end col-xl-8-->    
            </div><!--end row-->
        </section><!--end content-->            
        
    </div><!--end container-full--> 
  </div><!--end content-wrapper-->   
  <script type="text/javascript">
  //===================add==========================================
    $(document).on('click','#submit',function(e){
		e.preventDefault();
      var product_id = $('#product_id').val();
      var specification_name = $('#specification_name').val();
      var specification_value = $('#specification_value').val();
      var id = $('#id').val();      

       $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		type: "POST",
        url: "{{ route('product.description.store')}}",
        data: {
            'specification_name':specification_name,
            'specification_value':specification_value,
            'product_id':product_id,
            'id':id, 
           
        },
       
        success: function (data) {
            //alert(data);
            $('#space').removeClass('d-none');
          var html = '';
          $.each( data['value'], function(key, item){
            //alert(item.specification_name,item.specification_value);
            html +=
            '<tr>'+
                 
            '<td>'+item.specification_name+'</td>'+            
            '<td>'+item.specification_value +'</td>'+
            '<td><a   id="'+item.id +'"   class="btn btn-sm btn-info m-1 edit"><i class="fa fa-edit"></i></a>'+
            '<a   id="'+item.id +'"   class="btn btn-sm btn-info m-1 delete" id="delete"><i class="fa fa-trash"></i></a></td>'+
            '</tr>';
           });
          html = $('#space-generate-tr').html(html);
          //===========toast============================= 
          const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      showConfirmButton: false,
                      timer: 3000,
                      timerProgressBar: true,
                      didOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                      }
                      })
  
                      if($.isEmptyObject(data.error)){
                          Toast.fire({
                          icon: 'success',
                          title: data.success
                          }) 
                      }else{
                          Toast.fire({
                          icon: 'error',
                          title: data.error
                          }) 
                      }

             //===========toast=============================          

         }
      });
    });//end specification submit
//===============show all==================================================
    $(document).on('click','#showspecifications',function(e){
		e.preventDefault();

      var specification_value = $('#specification_value').val();
      var specification_id = $('#specification_id').val();
      var product_id = $('#product_id').val();
      

      

      //alert(specification_value);

      $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		type: "POST",
        url: "{{ route('product.description.list')}}",
        data: {
            'specification_value':specification_value, 
            'specification_id':specification_id, 
            'product_id':product_id, 
                      
        },
        success: function (data) {
            //alert(data);
            $('#space').removeClass('d-none');
          var html = '';
          $.each( data, function(key, item){
            //alert(item.specification_name,item.specification_value);
            html +=
            '<tr>'+
            '<td>'+item.specification_name+'</td>'+            
            '<td>'+item.specification_value +'</td>'+
            '<td><a   id="'+item.id +'"   class="btn btn-sm btn-info m-1 edit"><i class="fa fa-edit"></i></a>'+
            '<a   id="'+item.id +'"   class="btn btn-sm btn-info m-1 delete" id="delete"><i class="fa fa-trash"></i></a></td>'+
            
            '</tr>';
           });
          html = $('#space-generate-tr').html(html);


         }    
      });
    });//end specification list 

  //=================edit====================================  
    $(document).on('click','.edit',function(e){
		e.preventDefault();

        //alert($(this).attr('id'));
        var id =  $(this).attr('id');
        var url = "{{ route('product.description.edit', ":id") }}";

        url = url.replace(':id', id);
        

        $.ajax({
        
            type: "get",
            url: url,
            data: {
                'id':id,                          
            },
            success: function (data) {
                
                $("#specification_name").val(data.specification_name);
                $("#specification_value").val(data.specification_value);
                $("#id").val(data.id);

                
                  
            }    
         });

    });//end specification list  
    
    //================delete======================

    $(document).on('click','.delete',function(e){
		//e.preventDefault();

        var id =  $(this).attr('id');
        var url = "{{ route('product.description.delete', ":id") }}";

        url = url.replace(':id', id);

        $.ajax({
        
        type: "get",
        url: url,
        data: {
            'id':id,                          
        },
        success: function (data) {

         $('#space').removeClass('d-none');
          var html = '';
          $.each( data['value'], function(key, item){
            //alert(item.specification_name,item.specification_value);
            html +=
            '<tr>'+
                 
            '<td>'+item.specification_name+'</td>'+            
            '<td>'+item.specification_value +'</td>'+
            '<td><a   id="'+item.id +'"   class="btn btn-sm btn-info m-1 edit"><i class="fa fa-edit"></i></a>'+
            '<a   id="'+item.id +'"   class="btn btn-sm btn-info m-1 delete" id="delete"><i class="fa fa-trash"></i></a></td>'+
            '</tr>';
           });
          html = $('#space-generate-tr').html(html);
            
            //===========toast============================= 
          const Toast = Swal.mixin({
                      toast: true,
                      position: 'top-end',
                      showConfirmButton: false,
                      timer: 3000,
                      timerProgressBar: true,
                      didOpen: (toast) => {
                          toast.addEventListener('mouseenter', Swal.stopTimer)
                          toast.addEventListener('mouseleave', Swal.resumeTimer)
                      }
                      })
  
                      if($.isEmptyObject(data.error)){
                          Toast.fire({
                          icon: 'success',
                          title: data.success
                          }) 
                      }else{
                          Toast.fire({
                          icon: 'error',
                          title: data.error
                          }) 
                      }

             //===========toast=============================   
             
              
        },
           
     });
    
    });//end delete function 
  </script>

@endsection