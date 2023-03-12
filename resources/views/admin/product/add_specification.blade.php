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
                                {{-- <form method="POST" action="{{ route('product.specification.store') }}">
                                    @csrf  --}}
                                    <div class="row">                                        
                                        <div class="col-md-6">
                                                                        
                                            <div class="form-group">                                                                                      
                                                <div class="mb-3 row">
                                                    <label for="specification_name" class="col-sm-4 col-form-label">Specification Name</label>
                                                    <div class="col-sm-8">
                                                    <input type="text" name="specification_name" class="form-control" id="specification_name">
                                                   
                                                    <input type="hidden" name="product_id" id="product_id" value="{{ $product->id }}">
                                                   
                                                    </div>
                                                </div>
                                            </div>          
                                        </div>
                                        <div class="col-md-6">
                                             <input type="submit" id="submit"  class="btn btn-success" value="Submit">
                                             <input type="submit" class="btn btn-info ml-4" id="showspecifications"  value="Show All">

                                            {{-- <a id="submit"   class="btn btn-primary">Submit</a>  --}}
                                        </div>
                                    </div>
                                {{-- </form> --}}
                                
                                {{-- <form method="POST" action="{{ route('product.specification.list') }}">
                                @csrf                              --}}
                                <div class="row d-none" id="specification-generate">
                                    <div class="col-md-12">
                                        <table class="table table-bordered table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Spacification Name</th>	
                                                    <th>Spacification value</th>
                                                   					
                                                                                                                              
                                                </tr>
                                            </thead>
                                            <tbody id="roll-generate-tr">                                        
                                                <tr>
                                                    
                                                </tr>                                          
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>Spacification Name</th>	
                                                    <th>Spacification value</th>				
                                                                                                                            
                                                </tr>
                                            </tfoot>
        
                                        </table>
                                    </div>
                                    <input type="submit" class="btn btn-info" id="specifications"  value="Submit"> 
                                    

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
  
    $(document).on('click','#submit',function(e){
		e.preventDefault();
      var product_id = $('#product_id').val();
      var category_id = $('#category_id').val();
      var subcategory_id = $('#subcategory_id').val();
      var brand_id = $('#brand_id').val();
      var specification_name = $('#specification_name').val();

      //alert(product_id);
       $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		type: "POST",
        url: "{{ route('product.specification.store')}}",
        data: {
            'specification_name':specification_name,
            'product_id':product_id,
           
        },
        success: function (data) {
            //alert(data) ;
          $('#specification-generate').removeClass('d-none');
          var html = '';
          //$.each( data, function(key, v){
            html +=
            '<tr>'+
            '<td>'+data.specification_name+'</td>'+            
            '<td><input type="text" class="form-control form-control-sm" id="specification_value"  name="specification_value" value="'+data.specification_value+'"></td>'+
            '<td><input type="hidden" class="form-control form-control-sm" id="specification_id" value="'+data.id+'"  name="specification_id" value=""></td>'+
            '<td><input type="hidden" class="form-control form-control-sm" id="product_id" value="'+data.product_id+'"  name="product_id" value=""></td>'+
            '</tr>';
           //});
              html = $('#roll-generate-tr').html(html);
        }
      });
    });//end specification submit

    $(document).on('click','#specifications',function(e){
		e.preventDefault();
        
      var specification_value = $('#specification_value').val();
      var specification_id = $('#specification_id').val();
      var product_id = $('#product_id').val();

      //alert(specification_value);

      $.ajax({
        headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
		type: "POST",
        url: "{{ route('product.specification.list')}}",
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
            '</tr>';
           });
          html = $('#space-generate-tr').html(html);


         }    
      });
    });//end specification list    
  </script>

@endsection