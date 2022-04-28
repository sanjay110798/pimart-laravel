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
<div  class="multisteps-form__panel js-active rounded" data-animation="scaleIn">
<div class="step_content step_content_image">
<form id="per_form" class="multisteps-form__form">
<div class="row">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="select_package_sec">
	<div class="package_sec">
		<div class="row">
			@php 
			$i=1;
			@endphp
			@foreach($package as $pk)
			<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="package_content <?php if($i=='1'){echo "digital";}else if($i=='3'){echo "premium";}?>">
					<div class="top_sec" style="height: 86px;">
						<h4 class="package_title">{{$pk->package_name}}</h4>
					</div>
					<p class="title"><span>Start Your online business.</span> Webstore, Castomer App, Delivery App and Marketing</p>

					<p class="text-center" style="    color: #f79652;
    font-size: 12px;"><span style="display:block;">Rs.{{$pk->monthly_payment}} /Month</span><span style="display:block;">Rs.{{$pk->yearly_payment}} /Yr</span></p>
					
					<div class="btn_link">
						<a class="purchase" href="{{route('databse.migration',['id'=>$pk->id])}}">Select</a>
						<a class="trial" href="#">Free 7 Days Trial</a>
					</div>

				</div>
			</div>
			@php 
			$i++;
			@endphp
            @endforeach
			<!-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="package_content digital">
					<div class="top_sec">
						<h4 class="package_title">Go Digital</h4>
					</div>
					<p class="title"><span>Start Your online business.</span> Webstore, Castomer App, Delivery App and Marketing</p>
					<div class="btn_link">
						<a class="purchase" href="#">Purchase</a>
						<a class="trial" href="#">Free 7 Days Trial</a>
					</div>
				</div>
			</div> -->

			<!-- <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
				<div class="package_content premium">
					<div class="top_sec">
						<h4 class="package_title">Premium</h4>
					</div>
					<p class="title"><span>Start Your online business.</span> Webstore, Castomer App, Delivery App and Marketing</p>
					<div class="btn_link">
						<a class="purchase" href="#">Purchase</a>
						<a class="trial" href="#">Free 7 Days Trial</a>
					</div>
				</div>
			</div> -->
		</div>
	</div>

	<div class="package_sec">
		<h4 class="package_title">Compare Features</h4>
		<table class="compare_table"> 
			
			<thead>
				<tr>
					<th>Features</th>
					<th style="background: #10BEF5;color: #fff;text-align: center;">Best Value</th>
					<th style="background: #4D33ED;color: #fff;text-align: center;">Best Value</th>
					<th style="background: #E022FF;color: #fff;text-align: center;">Premium</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Instant Order Website</td>
					<td><img src="{{asset('assets/images/tick_icon1.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon2.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon3.svg')}}" alt="tick_icon"/></td>
				</tr>
				<tr>
					<td>Instant Order Website</td>
					<td><img src="{{asset('assets/images/tick_icon1.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon2.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon3.svg')}}" alt="tick_icon"/></td>
				</tr>
				<tr>
					<td>Instant Order Website</td>
					<td><img src="{{asset('assets/images/tick_icon1.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon2.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon3.svg')}}" alt="tick_icon"/></td>
				</tr>
				<tr>
					<td>Instant Order Website</td>
					<td><img src="{{asset('assets/images/tick_icon1.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon2.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon3.svg')}}" alt="tick_icon"/></td>
				</tr>
				<tr>
					<td>Instant Order Website</td>
					<td><img src="{{asset('assets/images/tick_icon1.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon2.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon3.svg')}}" alt="tick_icon"/></td>
				</tr>
				<tr>
					<td>Instant Order Website</td>
					<td><img src="{{asset('assets/images/tick_icon1.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon2.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon3.svg')}}" alt="tick_icon"/></td>
				</tr>
				<tr>
					<td>Instant Order Website</td>
					<td><img src="{{asset('assets/images/tick_icon1.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon2.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon3.svg')}}" alt="tick_icon"/></td>
				</tr>
				<tr>
					<td>Instant Order Website</td>
					<td><img src="{{asset('assets/images/tick_icon1.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon2.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon3.svg')}}" alt="tick_icon"/></td>
				</tr>
				<tr>
					<td>Instant Order Website</td>
					<td><img src="{{asset('assets/images/tick_icon1.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon2.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon3.svg')}}" alt="tick_icon"/></td>
				</tr>
				<tr>
					<td>Instant Order Website</td>
					<td><img src="{{asset('assets/images/tick_icon1.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon2.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon3.svg')}}" alt="tick_icon"/></td>
				</tr>
				<tr>
					<td>Instant Order Website</td>
					<td><img src="{{asset('assets/images/tick_icon1.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon2.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon3.svg')}}" alt="tick_icon"/></td>
				</tr>
				<tr>
					<td>Order per month</td>
					<td style="text-align: center;color: #6F6F6F;">500</td>
					<td style="text-align: center;color: #6F6F6F;">300</td>
					<td style="text-align: center;color: #6F6F6F;">Unlimited</td>
				</tr>
				<tr>
					<td>Additional order fee</td>
					<td style="text-align: center;color: #6F6F6F;">0.25%</td>
					<td style="text-align: center;color: #6F6F6F;">0.25%</td>
					<td style="text-align: center;color: #6F6F6F;">Custom</td>
				</tr>
				<tr>
					<td>Instant Order Website</td>
					<td><img src="{{asset('assets/images/close_icon.svg')}}" alt="close_icon"/></td>
					<td><img src="{{asset('assets/images/close_icon.svg')}}" alt="close_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon3.svg')}}" alt="tick_icon"/></td>
				</tr>
				<tr>
					<td>Instant Order Website</td>
					<td><img src="{{asset('assets/images/close_icon.svg')}}" alt="close_icon"/></td>
					<td><img src="{{asset('assets/images/close_icon.svg')}}" alt="close_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon3.svg')}}" alt="tick_icon"/></td>
				</tr>
				<tr>
					<td>Instant Order Website</td>
					<td><img src="{{asset('assets/images/close_icon.svg')}}" alt="close_icon"/></td>
					<td><img src="{{asset('assets/images/close_icon.svg')}}" alt="close_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon3.svg')}}" alt="tick_icon"/></td>
				</tr>
				<tr>
					<td>Instant Order Website</td>
					<td><img src="{{asset('assets/images/tick_icon1.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon2.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon3.svg')}}" alt="tick_icon"/></td>
				</tr>
				<tr>
					<td>Instant Order Website</td>
					<td><img src="{{asset('assets/images/tick_icon1.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon2.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon3.svg')}}" alt="tick_icon"/></td>
				</tr>
				<tr>
					<td>Instant Order Website</td>
					<td><img src="{{asset('assets/images/tick_icon1.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon2.svg')}}" alt="tick_icon"/></td>
					<td><img src="{{asset('assets/images/tick_icon3.svg')}}" alt="tick_icon"/></td>
				</tr>


			</tbody>

		</table>



		
	</div>


</div>



</div>
</div>
</form>	
</div>

</div>
<!-- Question Steps-->

</div>
</div>
</div>
</div>
</div>
@endsection