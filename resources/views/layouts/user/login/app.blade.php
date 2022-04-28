<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
  <meta charset="utf-8">
  
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Google font -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  
  <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,400;0,700;1,400;1,900&display=swap" rel="stylesheet">


  <!-- bootstrap min Css -->
  <link href="{{asset('userasset/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />


  <!-- Jquery Min Js -->
  


  <!-- Style Css -->
  <link href="{{asset('userasset/css/style.css')}}" rel="stylesheet" type="text/css" />


  <link href="{{asset('userasset/css/slick.css')}}" rel="stylesheet" type="text/css" />


 



  <script src="{{asset('userasset/js/slick.js')}}"></script>

  <link rel="stylesheet" href="{{asset('adminasset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('adminasset/plugins/toastr/toastr.min.css')}}">

  <title>User Login</title>
  

  </head>
  <body>
  
  <!-- Banner Sec -->
@yield('content')

<script src="{{asset('userasset/js/jquery.min.js')}}"></script>
 <!-- Jquery Min Js -->
<script src="{{asset('userasset/js/bootstrap.min.js')}}"></script>

<script src="{{asset('adminasset/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('adminasset/plugins/toastr/toastr.min.js')}}"></script>
<script>

$(window).scroll(function() {    
  var scroll = $(window).scrollTop();
  if (scroll >= 70) {
    $(".banner_sec").addClass("active");
  } else {
    $(".banner_sec").removeClass("active");
  }
});

$("body").click(function(){
  $(".navbar-collapse").removeClass("show");
});



// Our Pathner
$('.app_view_sec').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
      dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
      slidesToShow: 2,
      slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1
      }
    }
  ]
});


// Our Pathner
$('.our_pathner').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
      slidesToShow: 3,
      slidesToScroll: 1,
      infinite: true,
      dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
      slidesToShow: 2,
      slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1
      }
    }
  ]
  });




  // Dshboard Slider
  $('.dshboard_slider').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1
      }
    }
  ]
  });


// Our Pathner
$('.testimonial-slider').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 1,
  slidesToScroll: 1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      infinite: true,
      dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
      slidesToShow: 1,
      slidesToScroll: 1
      }
    }
  ]
  });


  
  

    

</script> 


  </body>
</html>

@if(Session::has('success'))
<script>
toastr.success("{{Session::get('success')}}")
</script>
@endif
@if(Session::has('error'))
<script>
toastr.error("{{Session::get('error')}}")
</script>
@endif
@if(Session::has('warning'))
<script>
toastr.warning("{{Session::get('warning')}}")
</script>
@endif