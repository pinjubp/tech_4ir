@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
<div class="content-wrapper">
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Intro</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                
                                <li class="breadcrumb-item " aria-current="page">Intro</li>
                                <li class="breadcrumb-item active" aria-current="page">List Intro</li>
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
                                      
                                        <th>#</th>
                                        <th>Introduction</th>                                
                                        <th>Introduction Details</th> 
                                        <th>link</th>                              
                                        <th>banner</th>
                                        <th>Action</th>
                                   </tr>
                               </thead>
                               <tbody>
                                    
                                    @foreach ($allData as $key=>$data)
                                            <tr>
                                                <th>{{ $data->id }}</th>
                                                <td>{{ $data->introduction }}</td>
                                                <td>{!! $data->intro_details !!}</td>  
                                                <td>
                                                    @php
                                                        $productname = DB::table('products')->select('product_name')->where('id',$data->link)->first();
                                                        //dd($productname->product_name);
                                                    @endphp
                                                    {{-- {{ $data->link }} --}}
                                                    @if(isset($productname->product_name))
                                                    {!! $productname->product_name !!}
                                                    @endif
                                                    
                                                </td>                                                                     
                                                <td>
                                                    <img id="previewImg" src="{{ (!empty($data->banner ))?
                                                        url('upload/intro_img/'.$data->banner):url('upload/no_image.jpg')   }}" width="142" height="114" alt="Profile" class="img-fluid rounded-rectangle  border-primary" >
                                                </td>
                                                <td>
                                                
                                                        <a href="{{ route('intro.edit',$data->id) }}" class="btn btn-sm btn-info m-1"><i class="fa fa-edit"></i></a>
                                                        <a href="{{ route('intro.delete',$data->id) }}" class="btn btn-sm btn-danger m-1" id="delete"><i class="fa  fa-trash"></i></a>
                                                
                                                    @if ($data->status == 0)
                                                    <a href="#"  route="{{ route('toggle.intro',$data->id) }}" class="btn btn-sm btn-danger m-1 toggle-class" title="Inactive" ><i class="fa fa-arrow-down"></i></a>  
                                                    @else
                                                    <a href="#"  route="{{ route('toggle.intro',$data->id) }}" class="btn btn-sm btn-danger m-1 toggle-class" title="active" ><i class="fa fa-arrow-up"></i></a>  
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
                                        <th>Role</th>
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
<script type="text/javascript">

    $(document).ready(function () {
      
      $('.toggle-class').click(function (e) {
        
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
                      $(element).attr('title', 'active');             
                 }else{                        
                       $(element).children('i').removeClass('fa-arrow-up');
                       $(element).children('i').addClass('fa-arrow-down');    
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