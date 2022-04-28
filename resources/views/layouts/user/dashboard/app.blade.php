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
    
    <!-- Style Css -->
    <link href="{{asset('userasset/css/style.css')}}" rel="stylesheet" type="text/css" />


    <link href="{{asset('userasset/css/slick.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{asset('adminasset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
    <!-- Toastr -->
    <link rel="stylesheet" href="{{asset('adminasset/plugins/toastr/toastr.min.css')}}">

    <!-- Jquery Min Js -->

    <title>User-Dashboard</title>
    

  </head>
  <body>
  @include('layouts.user.dashboard.partial.sidebar')

  @include('layouts.user.dashboard.partial.header')

  @yield('content')

  @include('layouts.user.dashboard.partial.footer')
  </div>

  </div>
  <!-- Mobile Menu -->
  
<script src="{{asset('userasset/js/jquery.min.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.1/jquery.cookie.min.js"></script>
<script src="{{asset('userasset/js/bootstrap.min.js')}}"></script>
<script src="{{asset('userasset/js/slick.js')}}"></script>
<script src="{{asset('adminasset/plugins/sweetalert2/sweetalert2.min.js')}}"></script>
<!-- Toastr -->
<script src="{{asset('adminasset/plugins/toastr/toastr.min.js')}}"></script>
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
<script>
        $("#country").on('change', function(){
        // alert("hi");
        var cntry = $("#country").val(); 

            $.ajax({
            url:'{{route("get.state")}}',
            type:'post',
            data:{country:cntry,_token: '{{csrf_token()}}'},
            
            success: function(data){
              $('#state').html(data);
            }
     
          });
        

    });

   ////////////////
  $("#state").on('change', function(){
        // alert("hi");
        var state = $("#state").val(); 

            $.ajax({
            url:'{{route("get.city")}}',
            type:'post',
            data:{state:state,_token: '{{csrf_token()}}'},
            
            success: function(data){
              $('#city').html(data);
            }
     
          });
        

    });
</script>
<script>
    $('.v-color-picker__color').on('click',function(e){
         
          var bgcolor= $(this).find('div').css('background-color');
         
          $('.mobile_header').css('background-color', bgcolor);
      $('#app_color').val(bgcolor);
    });


  let year = document.getElementById("year");
let month = document.getElementById("month");
let Option1 = document.getElementById("option1");
let Option2 = document.getElementById("option2");
let Control = document.querySelector(".form__right__form-control");
let DateForm = document.querySelector(".form__right__expireDate");
let Button = document.querySelector(".form__right__form-control--button");

for (let i = 1; i <= 12; i++) {
  let option = document.createElement("option");
  option.value = i;
  option.textContent = i;
  month.appendChild(option);
}
let CurrentYear = 2020;
for (let i = CurrentYear; i <= CurrentYear + 5; i++) {
  let option = document.createElement("option");
  option.value = i;
  option.textContent = i;
  year.appendChild(option);
}

Option1.addEventListener("click", toggle);
Option2.addEventListener("click", toggle);

function toggle() {
  if (Option1.checked) {
    DateForm.style.display = "flex";
    Control.style.display = "block";
    Button.textContent = "Payment Now";
  } else {
    DateForm.style.display = "none";
    Control.style.display = "none";
    Button.textContent = "Payment Now";
  }
}
</script>
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

$(".toggle_menu").click(function(){
  $(".mobile_navbar").toggleClass("active");
});

$(".mobile_navbar li a").click(function(){
  $(".mobile_navbar").removeClass("active");
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


 <?php 
 $userpackage=App\Model\Userpackage::where(['user_id'=>Auth::id()])->first();
 $date = $userpackage->ended_date;
 $newDate = date('Y-m-d', strtotime($date. ' - 7 days'));
 if($newDate <= date('Y-m-d')){
 ?>
   <div class="modal fade" id="alertModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
  <div class="modal-content">
  <div class="modal-header">
  <h5 class="modal-title" id="exampleModalLabel">Renew Package</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
  </button>
  </div>
  <div class="modal-body">
  <div class="row">
  <div class="col-md-12">
  <p class="text-center">Your Package Will Be Expire {{date('F j,Y',strtotime($userpackage->ended_date))}}<br>Please Renewal Your Package For Better Service</p>
  
  </div>
  <div class="col-md-12 mt-2 text-center">
  <a href="{{route('user.my.package')}}" class="btn btn-primary">Go To Renewal</a>
  </div>
  </div>
  </div>

  </div>
  </div>
  </div>
  <script>
    $(document).ready(function(){
    setTimeout(function(){
    if(!$.cookie('modalShownT')) {
    $("#alertModel").modal('show');
    $.cookie('modalShownT', true);
    } 


    },1000);
 
    });
  </script>
<?php } ?>
</body>
</html>