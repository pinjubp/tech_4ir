@extends('layouts.app')
@section('content')
{{-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script> --}}
<!-- jQuery library -->
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> --}}

<!-- jQuery UI library -->

{{-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script> --}}
<style>
   
    
    </style>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>


<section class="section" id="compare">
    <div class="container" >
        <div class="row">
              <div class="col-md-4 m-2">
                <h4 id="product1" class="mb-5" style="min-height:100px;">{{ $product->product_name }}</h4>
                <div class="xzoom-container">
                    <img class="xzoom" id="xzoom-default" width="360" src="{{ !empty($product->image_one)? url($product->image_one):url('upload/no_image.jpg') }}" xoriginal="{{ url($product->image_one) }}" />
                     <div class="xzoom-thumbs mt-5">
                        @if (!empty($product->image_one))
                        <a href="{{ url($product->image_one) }}">
                            <img class="xzoom-gallery" width="80" src="{{ !empty($product->image_one)? url($product->image_one):url('upload/no_image.jpg') }}"  xpreview="{{ url($product->image_one) }}" title="The description goes here">
                        </a>
                        @endif
                        @if (!empty($product->image_two))
                       <a href="{{ url($product->image_two) }}">
                            <img class="xzoom-gallery" width="80" src="{{ !empty($product->image_two)? url($product->image_two):url('upload/no_image.jpg') }}" title="The description goes here">
                        </a>
                        @endif
                        @if (!empty($product->image_three))
                            <a href="{{ url($product->image_three) }}">
                                <img class="xzoom-gallery" width="80" src="{{ !empty($product->image_three)? url($product->image_three):url('upload/no_image.jpg') }}" title="The description goes here">
                            </a> 
                        @endif                                                
                    </div>
                </div>
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>                                            
                            <th>Spacification Name</th>	
                            <th>Spacification value</th>
                                                                                                                                                                                                         
                        </tr>
                    </thead>
                    <tbody> 
                        @foreach ( $description as $key=>$data )                                       
                        <tr> 
                            <td>{{ $data->specification_name  }}</td>
                            <td>{{ $data->specification_value  }}</td>
                        </tr>   
                        @endforeach                                       
                    </tbody>
                    <tfoot>
                        <tr>                                            
                            <th>Spacification Name</th>					
                            <th>Spacification value</th>
                                                                                                   
                        </tr>
                    </tfoot>
                </table> 
                <!--endtable-->
              </div>
              <!--end-col-md-4-->
              <div   class="col-md-4">
                <h4 id="product2" class="mb-5" style="min-height:100px;"></h4>
                <div class="xzoom-container">
                    <img id="mainimg" class="xzoom2" id="xzoom-default" width="360" src="{{ url('upload/no_image.jpg') }}" xoriginal="" />
                     <div class="xzoom-thumbs mt-5">
                        @if (!empty($product->image_one))
                        <a href="{{ url($product->image_one) }}">
                            <img id="image_one1" class="xzoom-gallery2" width="80" src="{{ url('upload/no_image.jpg') }}"  xpreview="" title="The description goes here">
                        </a>
                        @endif
                        @if (!empty($product->image_two))
                       <a href="{{ url($product->image_two) }}">
                            <img id="image_two1" class="xzoom-gallery2" width="80" src="{{ url('upload/no_image.jpg') }}" title="The description goes here">
                        </a>
                        @endif
                        @if (!empty($product->image_three))
                            <a href="{{ url($product->image_three) }}">
                                <img id="image_three1" class="xzoom-gallery2" width="80" src="{{ url('upload/no_image.jpg') }}" title="The description goes here">
                            </a> 
                        @endif                                                
                    </div>
                </div>  
                <!--xzoom-container-->
                {{-- <input class="typeahead form-control" id="search" type="text"> --}}
                {{-- <input type="text" class="form-control" id="search"> --}}
                <div class="well">
                    <div class="row">
                        <div class="col-lg-10 col-lg-offset-1">
                            <div class="input-group">
                                <button class="input-group-addon btn btn-secondary"  >SEARCH</button>
                                <input type="text" autocomplete="off" id="search" class="form-control input-lg" placeholder="Enter product name Here">
                            </div>
                        </div>
                    </div>
                </div>
                <table id="space" class="table table-bordered table-striped d-none">
                    <thead>
                        <tr>                                            
                            <th>Spacification Name</th>	
                            <th>Spacification value</th>
                                                                                                                                                                                                         
                        </tr>
                    </thead>
                    <tbody id="space-generate-tr"> 
                                                             
                    </tbody>
                    <tfoot>
                        <tr>                                            
                            <th>Spacification Name</th>					
                            <th>Spacification value</th>
                                                                                                   
                        </tr>
                    </tfoot>
                </table> 
              </div>              
               <!--end-col-md-4-->
              <div class="col-md-4"></div> 
               <!--end-col-md-4-->
        </div>
         <!--end-row-->
    </div>
    <!--end-container-->
</section>
<!--end compare-->

<section class="section" id="product">
    <div class="container mt-5 ">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                
                        <h2>Related Product</h2>
                                                    
                </div>
            </div>
        </div>
    </div>
    <!--endcontainer-->
    <div id="recent" class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="owl-carousel owl-theme">
                    
                
                        @foreach ($sameproduct as $item)
                        <div class="item box">
                            <a href="{{ route('item.detail',$item->id)  }}">
                            {{-- <img class="image" src="{{ asset('') }}" alt="" > --}}
                            <img class="image" src="{{ !empty($item->image_one)? url($item->image_one):url('upload/no_image.jpg') }}"  alt="">
                            </a>
                            <a href="{{ route('item.detail',$item->id)  }}" class="btn mt-2 btn-secondary">Details</a>
                        </div> 
                        <!--enditem--> 
                        
                        @endforeach
                    
                                                            
                </div>
                <!--owl-carousel-->
            </div>
            <!--endcol-lg-12-->
        </div>
        <!--row-->
    </div>
    <!--recent-->
    
</section> 




<script type="text/javascript">
    var path = "{{ route('compare.search.product') }}";
  
    $( "#search" ).autocomplete({
        source: function( request, response ) {
          $.ajax({
            url: path,
            type: 'GET',
            dataType: "json",
            data: {
               search: request.term
            },
            success: function( data ) {
              response( data );

            
            },
            focus: function( event, ui ) {
                 $( "#search" ).val( ui.item.url ); // uncomment this line if you want to select value to search box  
                 //alert(selecteditem);
                return false;
            },
          });
        },
        select: function (event, ui) {
           
           window.location.href = ui.item.url;
        }
      }).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
            //alert(item.image);
            var inner_html = '<a class="itemurl" href="#" data-url="' + item.url + '" ><div class="list_item_container"><div class="image"><img src="' + item.image + '" width="100" ></div><div class="label"><span>' + item.label + '</span></div></div></a>';
            
            return $( "<li></li>" )
                    .data( "item.autocomplete", item )
                    .append(inner_html)
                    .appendTo( ul );
        };

        
</script>

<script type="text/javascript">
  
           

    $(document).on('click','.itemurl',function(e){
		e.preventDefault();
        //var url = $(this).val();
        var url =  $(this).attr('data-url');
            
            e.preventDefault();

            $.ajax({
                type: "get",
                 url: url,

                success: function (data) {
                    //alert(data.image_three);
                    $('#product2').text(data.product_name); 
                    $('#mainimg').attr("src", data.image_one);
                    $('#mainimg').attr("xoriginal", data.image_one);
            
                    $('#image_one1').attr("src", data.image_one);
                    $('#image_one1').attr("xpreview", data.image_one);
                                            
                    $('#image_two1').attr("src", data.image_two);                    
                    $('#image_three1').attr("src", data.image_three);
                    
                   
                    $('#space').removeClass('d-none');
                var html = '';
                $.each( data['description'], function(key, item){
                    //alert(item.specification_name,item.specification_value);
                    //$('#mainimg').attr("src", item.image_one);
                    html +=
                    '<tr>'+                 
                    '<td>'+item.specification_name+'</td>'+            
                    '<td>'+item.specification_value +'</td>'+            
                    '</tr>';
                });
                html = $('#space-generate-tr').html(html);
                }
            });
        });
     
</script>

<script src='https://code.jquery.com/jquery-2.1.1.js'></script>
<script type="text/javascript" src="{{ asset('frontend/assets/js/xzoom.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('frontend/assets/hammer.js/1.0.5/jquery.hammer.min.js') }}"></script>  
<script type="text/javascript" src="{{ asset('frontend/assets/js/setup.js') }}"></script>
@endsection