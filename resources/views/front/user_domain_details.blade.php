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


<div class="step_content">
<div id="per_form" class="multisteps-form__form">
	<div class="row">
		<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="signup_wrapper">
				<div class="signup_photo">
					<img src="{{asset('assets/images/sign_up_bg.png')}}" alt="storeinfo"/>

				</div>
				<div class="signup_sec">
					
					<form class="signup_from" method="POST" action="{{route('store.domain.details')}}">
					@csrf
					<h4 class="from_title">Address Details</h4>
					<div class="form-group" style="display: none;">
					<label for="exampleFormControlSelect1">Country</label>
					<select class="form-control" name="country_name" id="country" required>
					<option value="">--Select--</option>
					@foreach($country as $cn)
					<option value="{{$cn->id}}" selected>{{$cn->country_name}}</option>
					@endforeach
					</select>
					</div>
					<div class="form-group">
					<label for="exampleFormControlSelect1">State</label>
					<select class="form-control" name="state" id="state" required>
					<option value="">Select</option>
					@foreach($state as $st)
					<option value="{{$st->id}}">{{$st->state_name}}</option>
					@endforeach
					</select>
					</div>
					<!-- <div class="form-group">
					<label for="exampleFormControlSelect1">City</label>
					<select class="form-control" name="city" id="city" required>
					<option value="">Select</option>

					</select>
					</div> -->
					<div class="form-group">
					<label>Address</label>
					<textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
					
					<!-- <div class="form-group">
					<label class="form-group">Owned Domian</label>
					<input type="radio" name="have_domian" class="dom_cls" value="1" checked>
					<label class="form-group">Sub Domain</label>
					<input type="radio" name="have_domian" class="dom_cls" value="2">
					</div>
					<div class="form-group">
					<input type="text" name="domain_name" class="form-control" placeholder="Domain Name(Ex: domain.com)" id="dom" required>
					<input type="text" name="sub_domain_name" class="form-control" placeholder="Enter Your Store Name" id="sub_dom" style="display:none;" onkeypress="return /^[a-zA-Z0-9_ ]*$/i.test(event.key)">
					</div> -->
					
                    <div class="form-group">
                    	<label class="form-group">Store Name</label>
                    	<input type="text" name="store_name" class="form-control" required>
                    </div>


					<div class="button-row d-flex mt-4">

					<button class="btn btn-primary ml-auto " type="submit" title="Save & Next">Next Stap<img src="{{asset('assets/images/next_arrow.svg')}}" alt="next"/> </button>
					</div>

				
					</form>

				</div>
				
			</div>

				
		</div>
	</div>
</div>	
</div>


</div>
<!-- Question Steps-->

</div>
</div>
</div>
</div>
</div>

@endsection

