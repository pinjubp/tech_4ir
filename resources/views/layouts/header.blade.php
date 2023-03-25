@php
    $category = DB::table('categories')
                    ->Join('products','categories.id','=','products.category_id')                                                                                
                    ->whereNotNull('products.category_id')
                    ->select('categories.*')                                         
                    ->groupBy('products.category_id')                                      
                    ->get();
@endphp

<header>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <div class="container-fluid">
        <div class="container">
            <div class="row ">
                <div class="col-md-6 col-sm-12"><span><i class="fas fa-mobile"></i> 01738422751</span> <span><a href="mailto:pinjubp@gmail.com"><i class="fas fa-envelope"></i>pinjubp@gmail.com</a></span></div>
                <div class="col-md-6 col-sm-12 text-right">
                    @auth
                    <a href="{{ route('signout') }}"><i class="fas fa-sign-out"></i>Logout</a>
                    <a href="{{ route('dashboard') }}">
                        <img  src="{{ (!empty(Auth::user()->image ))?
                        url('upload/user_images/'.Auth::user()->image):url('upload/no_image.jpg')   }}" 
                        alt="Profile" class="rounded-circle border-success  mx-auto d-block " width="20" height="20" >
                    </a>
                    @else
                    <a href="{{ route('register') }}"><i class="fas fa-user-plus"></i>Register</a>
                    <a href="{{ route('login') }}"><i class="fas fa-user"></i>Login</a>
                    @endauth
                    
                </div>
            </div>
        </div>
    </div>
    <div class="container" >
        <div class="row">
            <div class="col-sm-6"><a class="logo" href="{{ route('home') }}">Fourth Industrial Revolution technologies</a></div>
            <div class="col-sm-6">
                

                <div class="input-group mt-5 mb-3">
                    <input type="text"  autocomplete="off" id="mainsearch"  class="form-control" aria-label="Text input with dropdown button">
                    <button class="btn btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Category</button>
                    <ul class="dropdown-menu dropdown-menu-end">
                        @foreach ($category as $item)
                            <li><a class="dropdown-item" href="{{ route('search.category.product',$item->id) }}">{{ $item->category_name  }}</a></li>
                        @endforeach                                              
                    </ul>
                  </div>
                  
            </div>
        </div>
    </div>
    <script type="text/javascript">
        var url = "{{ route('search.specific.product') }}";
      
        $( "#mainsearch" ).autocomplete({
            source: function( request, response ) {
              $.ajax({
                url: url,
                type: 'GET',
                dataType: "json",
                data: {
                   search: request.term
                },
                success: function( data ) {
                  response( data );            
                },
                focus: function( event, ui ) {
                     $( "#mainsearch" ).val( ui.item.url ); // uncomment this line if you want to select value to search box  
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
                var inner_html = '<a  href="' + item.url + '" ><div class="list_item_container"><div class="image"><img src="' + item.image + '" width="100" ></div><div class="label"><span>' + item.label + '</span></div></div></a>';
                
                return $( "<li></li>" )
                        .data( "item.autocomplete", item )
                        .append(inner_html)
                        .appendTo( ul );
            };
    
            
    </script>
</header>