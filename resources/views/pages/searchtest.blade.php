<!DOCTYPE html>
<html>
<head>
    <title>Laravel JQuery UI Autocomplete Search Example - ItSolutionStuff.com</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <style>
        .ui-state-active h4,
        .ui-state-active h4:visited {
            color: #26004d ;
        }
        
        .ui-menu-item{
            height: 80px;
            border: 1px solid #ececf9;
        }
        .ui-widget-content .ui-state-active {
            background-color: white !important;
            border: none !important;
        }
        .list_item_container {
            width:740px;
            height: 80px;
            float: left;
            margin-left: 20px;
        }
        .ui-widget-content .ui-state-active .list_item_container {
            background-color: #f5f5f5;
        }
        
        .image {
            width: 15%;
            float: left;
            padding: 10px;
        }
        .image img{
            width: 80px;
            height : 60px;
        }
        .label{
            width: 85%;
            float:right;
            white-space: nowrap;
            overflow: hidden;
            color: rgb(124,77,255);
            text-align: left;
        }
        input:focus{
            background-color: #f5f5f5;
        }
        
        </style>
</head>
<body>
     
{{-- <div class="container">
    <h1>Laravel JQuery UI Autocomplete Search Example - ItSolutionStuff.com</h1>   
    <input class="typeahead form-control" id="search" type="text">
</div> --}}
<h3 class="text-center title-color"><u>jQuery UI Autocomplete with Images Demo</u></h3>
    <p>&nbsp;</p>
    <div class="well">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1">
                <div class="input-group">
                    <span class="input-group-addon" style="color: white; background-color: #5b518b">BLOG SEARCH</span>
                    <input type="text" autocomplete="off" id="search" class="form-control input-lg" placeholder="Enter Blog Title Here">
                </div>
            </div>
        </div>
    </div>
<!-- search box container ends  -->
<div style="padding-top:280px;" ></div>
     
{{-- <script type="text/javascript">
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
            }
          });
        },
        select: function (event, ui) {
           $('#search').val(ui.item.label);
           console.log(ui.item); 
           return false;
        }
      });
  
</script> --}}
<script type="text/javascript">
    $(document).ready(function(){
        var path = "{{ route('compare.search.product') }}";
        $("#search").autocomplete({
            //source: "{{ url('demos/autocompleteajax') }}",
              source: "{{  route('compare.search.product') }}",
                focus: function( event, ui ) {
                //$( "#search" ).val( ui.item.title ); // uncomment this line if you want to select value to search box  
                return false;
            },
            select: function( event, ui ) {
                window.location.href = ui.item.url;
            }
        }).data( "ui-autocomplete" )._renderItem = function( ul, item ) {
            //alert(item.image);
            var inner_html = '<a href="' + item.id + '" ><div class="list_item_container"><div class="image"><img src="' + item.image + '" width="100" ></div><div class="label"><h4><b>' + item.label + '</b></h4></div></div></a>';
            //var inner_html = '<a href="' + item.id + '" ><div class="list_item_container"><div class="image"></div><div class="label"><h4><b>' + item.label + '</b></h4></div></div></a>';
            return $( "<li></li>" )
                    .data( "item.autocomplete", item )
                    .append(inner_html)
                    .appendTo( ul );
        };
    });
    </script>  
     
</body>
</html>