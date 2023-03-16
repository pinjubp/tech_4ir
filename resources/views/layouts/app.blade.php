<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>4ir</title>
    
    
    
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owlcarousel/assets/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owlcarousel/assets/owl.theme.default.min.css') }}">

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}">
      

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous" />

    
    
</head>
<body>
    @include('layouts.header')
    @include('layouts.navbar')
    @yield('content') 
  
   
   

   
  @include('layouts.footer')
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
    <script src="{{ asset('frontend/assets/js/jquery-2.1.0.min.js') }}"></script>
     
    <script src="{{ asset('frontend/assets/css/owlcarousel/owl.carousel.min.js') }}"></script>
    
    
 {{-- <script src="{{ asset('js/hideShowPassword.min.js') }}"></script> --}}
 
    

    <script>
      window.onscroll = function() {myFunction()};
      
      var navbar = document.getElementById("navbar");
      var sticky = navbar.offsetTop;
      
      function myFunction() {
        if (window.pageYOffset >= sticky) {
          navbar.classList.add("fixed-top")
        } else {
          navbar.classList.remove("fixed-top");
        }
      }
      </script>
      
    
    <script>
      $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
          loop: true,
          margin: 10,
          responsiveClass: true,
          responsive: {
            0: {
              items: 1,
              nav: true
            },
            600: {
              items: 3,
              nav: false
            },
            1000: {
              items: 5,
              nav: true,
             
              loop: false,
              margin: 20
            }
          }
        })
      })
    </script>
    {{-- <script type="text/javascript">
      $(document).ready(function() {

          $('.show').hideShowPassword({
            show: false, 
            innerToggle: 'focus',
          });
    });
    </script>  --}}
    
    <script type="text/javascript">
      $(document).ready(function() {
       
        // show the alert
        setTimeout(function() {
            $(".hidealert").alert('close');
        }, 2000); 
    
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
                



</body>
</html>