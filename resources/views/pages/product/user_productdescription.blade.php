@extends('layouts.app')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<div id="dashboard" class="container pt-4 pb-4">
    @include('pages.alert')
    <div class="row">
        <div class="col-md-4">
            <div class="card" id="sidenav">
                <ul   class="nav flex-column nav-pills mt-5 mb-5">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{ route('user.product.list') }}">Product List</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link "  href="{{ route('user.product.upload')  }}">Upload Product</a>
                    </li>                            
                </ul>
            </div>
            <!--endsidenav-->
            <div class="card" id="Profile">
                <img src="{{ (!empty(Auth::user()->image ))?
                    url('upload/user_images/'.Auth::user()->image):url('upload/no_image.jpg')   }}" class=" mx-auto d-block rounded-circle" alt="...">
                <div class="card-body">
                  <h5 class="card-title">User Profile</h5>
                  <ul>
                        <li><label class="col-sm-4 text-left" for="name">Name:</label><span class="col-sm-8 text-right">{{ Auth::user()->name  }}</span></li>
                        <li><label class="col-sm-4 text-left" for="name">Email:</label><span class="col-sm-8 text-right">{{ Auth::user()->email  }}</span></li>
                        <li><label class="col-sm-4 text-left" for="name">Address</label><span class="col-sm-8 text-right">{{ Auth::user()->address  }}</span></li>                                        
                  </ul>
                  <h5 class="card-title">Social link</h3>
                        <p>
                            <a href="{{Auth::user()->youtube_profile }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-youtube">
                                    <path d="M22.54 6.42a2.78 2.78 0 0 0-1.94-2C18.88 4 12 4 12 4s-6.88 0-8.6.46a2.78 2.78 0 0 0-1.94 2A29 29 0 0 0 1 11.75a29 29 0 0 0 .46 5.33A2.78 2.78 0 0 0 3.4 19c1.72.46 8.6.46 8.6.46s6.88 0 8.6-.46a2.78 2.78 0 0 0 1.94-2 29 29 0 0 0 .46-5.25 29 29 0 0 0-.46-5.33z"></path>
                                    <polygon points="9.75 15.02 15.5 11.75 9.75 8.48 9.75 15.02"></polygon></svg></a>
                                <a href="{{Auth::user()->facebook_profile }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                     fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" 
                                     stroke-linejoin="round" class="feather feather-facebook">
                                    <path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"></path></svg>
                                </a>
                                <a href="{{Auth::user()->twitter_profile }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                                     stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" 
                                     class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path>
                                    </svg>
                                </a>

                                <a href="{{Auth::user()->linkedin_profile }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path>
                                    <rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                                </a>
                        </p>
                </div>
              </div>
        </div>    
        <div class="col-md-8">
            <div class="card p-3 mb-5">
                <div class="card-body">
                    <h5 class="card-title mb-5">{{ $product->product_name  }}</h5>

                    {{-- <form method="POST" action="{{ route('product.specification.store') }}">
                        @csrf  --}}
                        <div class="row">                                        
                            <div class="col-md-12">
                                                            
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
                            <div class="col-md-12">
                                    <input type="submit" id="submit"  class="btn btn-primary" value="Add">
                                    <input type="submit" class="btn btn-info ml-4" id="showspecifications"  value="Show All">

                                {{-- <a id="submit"   class="btn btn-primary">Submit</a>  --}}
                            </div>
                        </div>
                    {{-- </form> --}}                                        
                </div>    
            </div>
            <!--endcard-->
            <div class="box-profile d-none card" id="space">                            
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
             <!--endcard-->
        </div>
    </div>
</div> 
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
        url: "{{ route('user.product.description.store')}}",
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
             
             $('#specification_name').val('');
             $('#specification_value').val('');

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
          url: "{{ route('user.product.description.list')}}",
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
        var url = "{{ route('user.product.description.edit', ":id") }}";

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
        var url = "{{ route('user.product.description.delete', ":id") }}";

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