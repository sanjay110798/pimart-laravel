@extends('layouts.front.app')
@section('content')
@include('layouts.front.partial.mobileheader')
<section class="banner_sec">
@include('layouts.front.partial.header')
</section>

<div class="multisteps-form">
<div class="stap_banner">
<div class="container">
<h3 class="banner_title">Create your <span>own grocery app</span></h3>
<!--progress bar-->
<div class="row">
<div class="col-12 col-lg-12 ml-auto mr-auto ">
<div class="multisteps-form__progress multisteps_progress">
<button class="multisteps-form__progress-btn js-active" type="button" title="Personal Information">
<div class="icon">
	<img src="{{asset('assets/images/signup_icon.png')}}" alt="Signup"/>
</div>
<span>SignUp</span>
</button>
<button class="multisteps-form__progress-btn" type="button" title="Academic Information">
<div class="icon">
	<img src="{{asset('assets/images/store_info.png')}}" alt="storeinfo"/>
</div>
<span>Store Info</span>

</button>
<button class="multisteps-form__progress-btn" type="button" title="Applying For Institute">
<div class="icon">
	<img src="{{asset('assets/images/select_package_icon.png')}}" alt="storeinfo"/>
</div>
<span>Select Package</span>
</button>
<button class="multisteps-form__progress-btn" type="button" title="Applying For Institute">
<div class="icon">
	<img src="{{asset('assets/images/pay_out_icon.png')}}" alt="storeinfo"/>
</div>
<span>Pay & go to live</span>
</button>
</div>
</div>
</div>
</div>
</div>
<div class="container">
<!--form panels-->
<div class="row">
<div class="col-12 col-lg-12 m-auto">
<div class="multisteps-form__form quiz_form">

<!-- Question Steps-->
<div  class="multisteps-form__panel rounded js-active" data-animation="scaleIn">
<div class="step_content step_content_image">
<form id="per_form" class="multisteps-form__form">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="received_sec">
				<h4 class="title">Thanks for being part of Pimart App</h4>
				<div class="payment_content">
					<div class="tick_icon">
						<img src="{{asset('assets/images/pay_tick_icon.svg')}}" alt="Tick"/>
					</div>
					<h4 class="payment_title">we have received your payment</h4>
					<p class="des">Its time to configure your store admin console. You can login into admin using email & password</p>
				</div>
				<div class="bottom_sec">
					<h4 class="title">Get Started with Pimart App</h4>
					<div class="row">
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="admin_content">
								<h4 class="title">Admin console</h4>
								<p class="des">Manage store setting, groceries, orders, special offers, delivery areas and staff</p>

								<div class="app_store">
									<a href="{{route('user.autologin')}}"><h4 class="store_title">Manage My Store</h4></a>
									<h4 class="admin_title">Admin App</h4>
									<a class="download" href="{{route('user.autologin')}}">
										<img src="{{asset('assets/images/play_store_icon.png')}}" alt="Play Store"/> Download Admin App
									</a>
									<p class="des">Download the Admin App to manage orders, customers and enquirles</p>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
							<div class="admin_content">
								<h4 class="title">Online Store Website</h4>
								<p class="des">Check your own online grocery store</p>
								<a class="website_link" href="https://pimart.primacyinfotech.com">https://pimart.primacyinfotech.com</a>
								<div class="website_photo">
									<img src="{{asset('assets/images/banner_photo.png')}}" alt="Play Store"/>
								</div>

							</div>
						</div>
					</div>
					<div class="get_touch">
						<p class="des">Get in touch with us for custom app development. <a href="#">Click here</a></p>
					</div>

					<a class="login_btn" href="{{route('user.autologin')}}">Back to Dashboard</a>

				</div>

			</div>




		</div>
	</div>
</form>	
</div>
<div class="button-row mt-4 d-none">
<button class="btn btn-primary js-btn-prev" type="button" title="Save & Prev">Save & Prev</button>
<button class="btn btn-primary ml-auto js-btn-next" type="button" title="Save & Next">Save & Next</button>
</div>
</div>
<!-- Question Steps-->

</div>
</div>
</div>
</div>
</div>
@endsection