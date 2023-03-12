<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/favicon.ico">

    <title>Sunny Admin - Log in </title>
  
	<!-- Vendors Style-->
	<link rel="stylesheet" href="{{ asset('adminbackend/css/vendors_css.css') }}">
	  
	<!-- Style-->  
	<link rel="stylesheet" href="{{ asset('adminbackend/css/style.css') }}">
	<link rel="stylesheet" href="{{ asset('adminbackend/css/skin_color.css') }}">	

</head>
<body class="hold-transition theme-primary bg-gradient-primary">
	
	<div class="container h-p100">
		<div class="row align-items-center justify-content-md-center h-p100">	
			
			<div class="col-12">
				<div class="row justify-content-center no-gutters">
					<div class="col-lg-4 col-md-5 col-12">
						<div class="content-top-agile p-10">
							<h2 class="text-white">Get started with Us</h2>
							<p class="text-white-50">Sign in to start your session</p>							
						</div>
						@include('admin.alert') 
						
						<div class="p-30 rounded30 box-shadowed b-2 b-dashed">
							  
							<form action="{{ route('store.login') }}" method="post">
								@csrf
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text bg-transparent text-white"><i class="ti-user"></i></span>
										</div>
										<input type="email" name="email"  class="form-control pl-15 bg-transparent text-white plc-white" placeholder="Useremail">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group mb-3">
										<div class="input-group-prepend">
											<span class="input-group-text  bg-transparent text-white"><i class="ti-lock"></i></span>
										</div>
										<input type="password" name="password" class="form-control pl-15 bg-transparent text-white plc-white show" placeholder="Password">
									</div>
								</div>
								  <div class="row">
									<div class="col-6">
									  <div class="checkbox text-white">
										<input type="checkbox" id="basic_checkbox_1" >
										<label for="basic_checkbox_1">Remember Me</label>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-6">
									 <div class="fog-pwd text-right">
										<a href="javascript:void(0)" class="text-white hover-info"><i class="ion ion-locked"></i> Forgot pwd?</a><br>
									  </div>
									</div>
									<!-- /.col -->
									<div class="col-12 text-center">
									  <button type="submit" class="btn btn-info btn-rounded mt-10">SIGN IN</button>
									</div>
									<!-- /.col -->
								  </div>
							</form>														

							
							
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!-- Vendor JS -->
	<script src="{{ asset('adminbackend/js/vendors.min.js') }}"></script>
    <script src="{{ asset('adminbackend/../assets/icons/feather-icons/feather.min.js') }}"></script>	
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

</body>
</html>
