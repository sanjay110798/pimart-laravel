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
	<link href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />


	<!-- Jquery Min Js -->
	<script src="{{asset('assets/js/jquery.min.js')}}"></script>


	<!-- Style Css -->
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" type="text/css" />


	<link href="{{asset('assets/css/slick.css')}}" rel="stylesheet" type="text/css" />


	<!-- Jquery Min Js -->
	<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>



	<script src="{{asset('assets/js/slick.js')}}"></script>

	<title>Pimart- Home</title>
	<link rel="stylesheet" href="{{asset('adminasset/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css')}}">
  <!-- Toastr -->
  <link rel="stylesheet" href="{{asset('adminasset/plugins/toastr/toastr.min.css')}}">

  </head>
  <body>
  @yield('content')
  

<footer class="footer_sec">
		<div class="footer_top">
			<div class="container">
				<div class="row">
					<div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
						<div class="text_content">
							<h4 class="f_title">About</h4>
							<p class="des">Pimart is, a SaaS platform, helping businesses from 10+ countries to go online with their own e-commerce apps in 24 hours.</p>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-xs-12">
						<div class="text_content">
							<h4 class="f_title">Contact</h4>
							<ul class="f_list">
								<li>
									<a href="#">+91 80057-71838</a>
								</li>
								<li>
									<a href="#">+91 88612-18101</a>
								</li>
								<li>
									<a href="#">team@pimart.com</a>
								</li>
								<li>
									<a href="#">C-Scheme, Jaipur, India</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-3 col-sm-12 col-xs-12">
						<div class="text_content">
							<h4 class="f_title">&nbsp;</h4>
							<ul class="f_list">
								<li>
									<a href="#">Careers</a>
								</li>
								<li>
									<a href="#">Privacy Policy</a>
								</li>
								<li>
									<a href="#">Terms & Conditions</a>
								</li>
							</ul>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<div class="f_payment">
							<a class="payment_photo" href="#">
								<img src="{{asset('assets/images/f_pimart.png')}}" alt="Testimonial">
							</a>
							<a class="payment_photo" href="#">
								<img src="{{asset('assets/images/logo-p.png')}}" alt="Testimonial">
							</a>
							<a class="payment_photo" href="#">
								<img src="{{asset('assets/images/f_razorpay.png')}}" alt="Testimonial">
							</a>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer Sec -->
<script src="{{asset('assets/js/custom.js')}}"></script>
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
	$('.dom_cls').click(function(){

   var i=$("input[name='have_domian']:checked").val();
   if(i==1)
   {
    $('#sub_dom').hide();
    $('#sub_dom').attr('required',false);
    $('#dom').show();
    $('#dom').attr('required',true);
   }else{
    $('#dom').hide();
    $('#dom').attr('required',false);
    $('#sub_dom').show();
    $('#sub_dom').attr('required',true);
   }
	});
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

<script>
  	$('.v-color-picker__color').on('click',function(e){
		 
		  var bgcolor= $(this).find('div').css('background-color');
		 
		  $('.mobile_header').css('background-color', bgcolor);
      $('#app_color').val(bgcolor);
	});

</script>	
  </body>
</html>
<style type="text/css">
	.invalid-feedback {
    display: block;
  }
</style>