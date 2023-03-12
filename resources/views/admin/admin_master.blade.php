<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <link rel="icon" href="../images/favicon.ico">


    <title>Sunny Admin - Dashboard</title>
    
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('adminbackend/css/vendors_css.css') }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('adminbackend/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('adminbackend/css/skin_color.css') }}">
  {{--  --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <link rel="stylesheet" href="{{ asset('adminbackend/dist/css/fontawesome-browser.css') }}">
  </head>

<body class="hold-transition dark-skin sidebar-mini theme-primary fixed">
	
<div class="wrapper">

  @include('admin.body.header')
  
  <!-- Left side column. contains the logo and sidebar -->
  @include('admin.body.sidebar')

  <!-- Content Wrapper. Contains page content -->
  @yield('admin')
  <!-- /.content-wrapper -->
 @include('admin.body.footer')

  <!-- Control Sidebar -->
  @include('admin.body.control_sidebar')
  <!-- /.control-sidebar -->
  
  <!-- Add the sidebar's background. This div must be placed immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
  
</div>
<!-- ./wrapper -->
  	
	 
	<!-- Vendor JS -->
	<script src="{{ asset('adminbackend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('adminbackend/../assets/icons/feather-icons/feather.min.js') }}"></script>	
	<script src="{{ asset('adminbackend/../assets/vendor_components/easypiechart/dist/jquery.easypiechart.js') }}"></script>
	<script src="{{ asset('adminbackend/../assets/vendor_components/apexcharts-bundle/irregular-data-series.js') }}"></script>
	<script src="{{ asset('adminbackend/../assets/vendor_components/apexcharts-bundle/dist/apexcharts.js') }}"></script>
  <script src="{{ asset('adminbackend/../assets/vendor_components/ckeditor/ckeditor.js') }}"></script>
  <script src="{{ asset('adminbackend/../assets/vendor_plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.js') }}"></script>
  <script src="{{ asset('adminbackend/js/pages/editor.js') }}"></script>
	<script src="{{ asset('adminbackend/../assets/vendor_components/datatable/datatables.js') }}"></script>
<script src="{{ asset('adminbackend/js/pages/data-table.js') }}"></script>
	<!-- Sunny Admin App -->
	<script src="{{ asset('adminbackend/js/template.js') }}"></script>
	<script src="{{ asset('adminbackend/js/pages/dashboard.js') }}"></script>
   <!-- Template Main JS File -->
 <script src="{{ asset('adminbackend/dist/js/fontawesome-browser.js') }}"></script>
 <script src="{{ asset('js/hideShowPassword.min.js') }}"></script>
	
	<script type="text/javascript">
    $(document).ready(function() {
      // show the alert
      setTimeout(function() {
          $(".alert").alert('close');
      }, 2000);   

      $('.show').hideShowPassword({
               show: false, 
               innerToggle: 'focus',
                             
           });


    });
  
  </script>  
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
      <script src="{{ asset('https://unpkg.com/sweetalert/dist/sweetalert.min.js')}}"></script>
  
  <script type="text/javascript">
  $(function(){
    $(document).on('click','#delete',function(e){
        e.preventDefault();
        var link = $(this).attr("href");
  
  
                  Swal.fire({
                    title: 'Are you sure?',
                    text: "Delete This Data?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = link
                      Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                      )
                    }
                  })
  
  
    });
  
  });
  
  
  </script>
  <script>
    $(function($) {
        $.fabrowser();
    });
    </script>
</body>
</html>
