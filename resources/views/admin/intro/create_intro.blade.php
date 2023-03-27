@extends('admin.admin_master')
@section('admin')

    <!-- Content Wrapper. Contains page content -->
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
                                
                                <li class="breadcrumb-item active" aria-current="page">Intro</li>
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
                                    <form method="post" action="{{ route('store.intro') }}" class="form-horizontal form-element col-12" enctype="multipart/form-data">
                                      @csrf
                                      <div class="form-group row">
                                        <label for="profileImage" class="col-sm-2 control-label">Banner Image</label>
                                        <div class="col-sm-10">

                                          <img id="previewImg" src="{{ url('upload/no_image.jpg')   }}" 
                                          alt="Profile" class="rounded-rectangle border-primary pb-3" width="120" height="120" >                                                                                              
                                          <div class="custom-file">
                                            <input type="file" name="banner" id="banner" class="custom-file-input" onchange="previewFile(this);" >
                                            <label class="custom-file-label" for="image">Choose file</label>
                                            @error('banner')   
                                                <span class="text-danger">{{ $message }}</span>    
                                           @enderror
                                          </div>
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="name" class="col-sm-2 control-label">Introduction</label>
            
                                        <div class="col-sm-10">
                                          <input name="introduction" type="text" class="form-control" id="introduction" >
                                          @error('introduction')   
                                                <span class="text-danger">{{ $message }}</span>    
                                           @enderror
                                        </div>
                                      </div>
                                                                          
                                      <div class="form-group row">
                                        <label for="Email" class="col-sm-2 control-label">Link</label>            
                                        <div class="col-sm-10">
                                            <select name="link" id="link" required="" class="form-control">
                                                <option  selected="selected" disabled="disabled">Select Link</option>
                                                {{-- @foreach ($allroute as $value )
                                                  @if ($value->methods()[0] == 'GET')
                                                   <option value="{{ $value->getName() }}"  >{{ $value->getName() }}</option>
                                                  @endif                                                                           
                                                @endforeach    --}}
                                                @foreach ($product as $item)
                                                <option value="{{ $item->id }}"  >{{ $item->product_name  }}</option>
                                                @endforeach   
                                                                                                                                                  
                                            </select>
                                          @error('link')   
                                                <span class="text-danger">{{ $message }}</span>    
                                          @enderror
                                        </div>
                                      </div>
                                      <div class="form-group row">
                                        <label for="editor1" class="col-sm-2 control-label">Introduction Details</label>            
                                        <div class="col-sm-10">
                                            <textarea  name="intro_details" id="editor1" rows="10" cols="80"  placeholder="Place some text here" required></textarea>
                                          @error('intro_details')   
                                                <span class="text-danger">{{ $message }}</span>    
                                          @enderror
                                        </div>
                                      </div>
                                      
                                      
                                     
                                      <div class="form-group row">
                                        <div class="ml-auto col-sm-10">
                                          <input type="submit" class="btn btn-rounded btn-success" value="Save Changes">
                                        </div>
                                      </div>
                                    </form>
                                </div>
                            
                    </div><!--end box-profile-->                            
                </div><!--end col-xl-8-->    
            </div><!--end row-->
        </section><!--end content-->            
        
    </div><!--end container-full--> 
  </div><!--end content-wrapper-->   
  <script type="text/javascript">
    function previewFile(input){
        var file = $("input[type=file]").get(0).files[0];
 
        if(file){
            var reader = new FileReader();
 
            reader.onload = function(){
                $("#previewImg").attr("src", reader.result);
            }
 
            reader.readAsDataURL(file);
        }
    }
</script>     

@endsection