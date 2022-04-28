@extends('layouts.front.app')
@section('content')
<link href="{{asset('assets/css/color.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/css/color2.css')}}" rel="stylesheet" type="text/css" />
@include('layouts.front.partial.mobileheader')
 <section class="banner_sec">
        @include('layouts.front.partial.header')
    
        
        <div class="container banner_content" style="margin: 0 auto;">
            <div class="text_content">
            
                
            </div>
          
        </div>
    </section>
	
		<section class="new_business_sec">

			<div class="container ">
				<h4 class="title2">Register New Business</h4>
			</div>
		

		<div class="container business_wrapp">
			<form class="business_from" style="margin: 19px;overflow: hidden;margin-top: 11px;"  method="POST" action="{{route('store.user_details')}}">
				@csrf
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label for="exampleFormControlSelect1">Country</label>
							<select class="form-control" name="country_name" id="country" required>
									<option value="">--Select--</option>
									@foreach($country as $cn)
									<option value="{{$cn->id}}">{{$cn->country_name}}</option>
									@endforeach
								</select>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label for="exampleFormControlSelect1">State</label>
						<select class="form-control" name="state" id="state" required>
							<option value="">Select</option>
							@foreach($state as $st)
							<option value="{{$st->id}}">{{$st->state_name}}</option>
							@endforeach
							</select>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label for="exampleFormControlSelect1">City</label>
							<select class="form-control" name="city" id="city" required>
							<option value="">Select</option>

							</select>
						</div>
					</div>
					
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label>Business Category</label>
							<input type="text" class="form-control" name="b_category">
						</div>
	
					</div>
					
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label>Business Name</label>
							<input type="text" class="form-control" name="b_name"/>
						</div>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label>GSTN/Tax Code</label>
							<input type="number" class="form-control" name="gstn"/>
						</div>
	
					</div>
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label>Address</label>
							<textarea class="form-control" name="address" id="exampleFormControlTextarea1" rows="3"></textarea>
						</div>
					</div>
					
				</div>
			

			<div class="app_info">
				<div class="app_from">
					<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="form-group">
							<label>App Name</label>
							<input type="text" class="form-control" name="app_info"/>
						</div>
					</div>
				</div>

				<div class="app_content">
					<h4 class="app_title">App color</h4>
					<p class="des">Note: On the right side, you can see how your app will look. It's just a <span>demonstration</span> to help you visualize your app before development.</p>
				</div>



				<div class="v-color-picker v-sheet theme--light v-color-picker--flat theme--light" style="max-width: 100%;">
					
				<div class="row">
					<div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-xs-12">
						<div class="v-color-picker__controls" style="display: none;">
							<div class="v-color-picker__preview">
								<div class="v-color-picker__dot"><div style="background: rgb(123, 31, 162);"></div></div><div class="v-color-picker__sliders"><div class="v-input v-color-picker__hue v-input--hide-details v-input--is-label-active v-input--is-dirty theme--light v-input__slider v-color-picker__track"><div class="v-input__control"><div class="v-input__slot"><div class="v-slider v-slider--horizontal theme--light"><input value="282.13740458015263" id="input-189" readonly="readonly" tabindex="-1"><div class="v-slider__track-container"><div class="v-slider__track-background primary lighten-3" style="right: 0px; width: calc(21.6285%);"></div><div class="v-slider__track-fill primary" style="left: 0px; right: auto; width: 78.3715%;"></div></div><div role="slider" tabindex="0" aria-valuemin="0" aria-valuemax="360" aria-valuenow="282.13740458015263" aria-readonly="false" aria-orientation="horizontal" class="v-slider__thumb-container grey--text text--lighten-2" style="left: 78.3715%;"><div class="v-slider__thumb grey lighten-2"></div></div></div></div></div></div><div class="v-input v-color-picker__alpha v-input--hide-details v-input--is-label-active v-input--is-dirty theme--light v-input__slider v-color-picker__track" style="background-image: linear-gradient(to right, transparent, rgb(123, 31, 162));"><div class="v-input__control"><div class="v-input__slot"><div class="v-slider v-slider--horizontal theme--light"><input value="1" id="input-190" readonly="readonly" tabindex="-1"><div class="v-slider__track-container"><div class="v-slider__track-background primary lighten-3" style="right: 0px; width: calc(0%);"></div><div class="v-slider__track-fill primary" style="left: 0px; right: auto; width: 100%;"></div></div><div role="slider" tabindex="0" aria-valuemin="0" aria-valuemax="1" aria-valuenow="1" aria-readonly="false" aria-orientation="horizontal" class="v-slider__thumb-container grey--text text--lighten-2" style="left: 100%;"><div class="v-slider__thumb grey lighten-2"></div></div></div></div></div></div></div>
							</div>
							<div class="v-color-picker__edit">
								<div class="v-color-picker__input"><input type="number" min="0" max="255" step="1"><span>R</span></div><div class="v-color-picker__input"><input type="number" min="0" max="255" step="1"><span>G</span></div><div class="v-color-picker__input"><input type="number" min="0" max="255" step="1"><span>B</span></div><div class="v-color-picker__input"><input type="number" min="0" max="1" step="0.01"><span>A</span></div><button type="button" class="v-btn v-btn--flat v-btn--icon v-btn--round theme--light v-size--small"><span class="v-btn__content"><i aria-hidden="true" class="v-icon notranslate mdi mdi-unfold-more-horizontal theme--light"></i></span></button>
							</div>
						</div>
						<div class="v-color-picker__swatches" style="max-height: 800px;">
							<div>
								<div class="v-color-picker__swatch">
									<div class="v-color-picker__color"><div style="background: rgb(244, 67, 54);"></div></div><div class="v-color-picker__color"><div style="background: rgb(183, 28, 28);"></div></div><div class="v-color-picker__color"><div style="background: rgb(198, 40, 40);"></div></div><div class="v-color-picker__color"><div style="background: rgb(211, 47, 47);"></div></div><div class="v-color-picker__color"><div style="background: rgb(229, 57, 53);"></div></div><div class="v-color-picker__color"><div style="background: rgb(239, 83, 80);"></div></div><div class="v-color-picker__color"><div style="background: rgb(229, 115, 115);"></div></div><div class="v-color-picker__color"><div style="background: rgb(239, 154, 154);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 205, 210);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 235, 238);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(233, 30, 99);"></div></div><div class="v-color-picker__color"><div style="background: rgb(136, 14, 79);"></div></div><div class="v-color-picker__color"><div style="background: rgb(173, 20, 87);"></div></div><div class="v-color-picker__color"><div style="background: rgb(194, 24, 91);"></div></div><div class="v-color-picker__color"><div style="background: rgb(216, 27, 96);"></div></div><div class="v-color-picker__color"><div style="background: rgb(236, 64, 122);"></div></div><div class="v-color-picker__color"><div style="background: rgb(240, 98, 146);"></div></div><div class="v-color-picker__color"><div style="background: rgb(244, 143, 177);"></div></div><div class="v-color-picker__color"><div style="background: rgb(248, 187, 208);"></div></div><div class="v-color-picker__color"><div style="background: rgb(252, 228, 236);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(156, 39, 176);"></div></div><div class="v-color-picker__color"><div style="background: rgb(74, 20, 140);"></div></div><div class="v-color-picker__color"><div style="background: rgb(106, 27, 154);"></div></div><div class="v-color-picker__color"><div style="background: rgb(123, 31, 162);"><i aria-hidden="true" class="v-icon notranslate mdi mdi-check-circle theme--dark" style="font-size: 16px;"></i></div></div><div class="v-color-picker__color"><div style="background: rgb(142, 36, 170);"></div></div><div class="v-color-picker__color"><div style="background: rgb(171, 71, 188);"></div></div><div class="v-color-picker__color"><div style="background: rgb(186, 104, 200);"></div></div><div class="v-color-picker__color"><div style="background: rgb(206, 147, 216);"></div></div><div class="v-color-picker__color"><div style="background: rgb(225, 190, 231);"></div></div><div class="v-color-picker__color"><div style="background: rgb(243, 229, 245);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(103, 58, 183);"></div></div><div class="v-color-picker__color"><div style="background: rgb(49, 27, 146);"></div></div><div class="v-color-picker__color"><div style="background: rgb(69, 39, 160);"></div></div><div class="v-color-picker__color"><div style="background: rgb(81, 45, 168);"></div></div><div class="v-color-picker__color"><div style="background: rgb(94, 53, 177);"></div></div><div class="v-color-picker__color"><div style="background: rgb(126, 87, 194);"></div></div><div class="v-color-picker__color"><div style="background: rgb(149, 117, 205);"></div></div><div class="v-color-picker__color"><div style="background: rgb(179, 157, 219);"></div></div><div class="v-color-picker__color"><div style="background: rgb(209, 196, 233);"></div></div><div class="v-color-picker__color"><div style="background: rgb(237, 231, 246);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(63, 81, 181);"></div></div><div class="v-color-picker__color"><div style="background: rgb(26, 35, 126);"></div></div><div class="v-color-picker__color"><div style="background: rgb(40, 53, 147);"></div></div><div class="v-color-picker__color"><div style="background: rgb(48, 63, 159);"></div></div><div class="v-color-picker__color"><div style="background: rgb(57, 73, 171);"></div></div><div class="v-color-picker__color"><div style="background: rgb(92, 107, 192);"></div></div><div class="v-color-picker__color"><div style="background: rgb(121, 134, 203);"></div></div><div class="v-color-picker__color"><div style="background: rgb(159, 168, 218);"></div></div><div class="v-color-picker__color"><div style="background: rgb(197, 202, 233);"></div></div><div class="v-color-picker__color"><div style="background: rgb(232, 234, 246);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(33, 150, 243);"></div></div><div class="v-color-picker__color"><div style="background: rgb(13, 71, 161);"></div></div><div class="v-color-picker__color"><div style="background: rgb(21, 101, 192);"></div></div><div class="v-color-picker__color"><div style="background: rgb(25, 118, 210);"></div></div><div class="v-color-picker__color"><div style="background: rgb(30, 136, 229);"></div></div><div class="v-color-picker__color"><div style="background: rgb(66, 165, 245);"></div></div><div class="v-color-picker__color"><div style="background: rgb(100, 181, 246);"></div></div><div class="v-color-picker__color"><div style="background: rgb(144, 202, 249);"></div></div><div class="v-color-picker__color"><div style="background: rgb(187, 222, 251);"></div></div><div class="v-color-picker__color"><div style="background: rgb(227, 242, 253);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(3, 169, 244);"></div></div><div class="v-color-picker__color"><div style="background: rgb(1, 87, 155);"></div></div><div class="v-color-picker__color"><div style="background: rgb(2, 119, 189);"></div></div><div class="v-color-picker__color"><div style="background: rgb(2, 136, 209);"></div></div><div class="v-color-picker__color"><div style="background: rgb(3, 155, 229);"></div></div><div class="v-color-picker__color"><div style="background: rgb(41, 182, 246);"></div></div><div class="v-color-picker__color"><div style="background: rgb(79, 195, 247);"></div></div><div class="v-color-picker__color"><div style="background: rgb(129, 212, 250);"></div></div><div class="v-color-picker__color"><div style="background: rgb(179, 229, 252);"></div></div><div class="v-color-picker__color"><div style="background: rgb(225, 245, 254);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(0, 188, 212);"></div></div><div class="v-color-picker__color"><div style="background: rgb(0, 96, 100);"></div></div><div class="v-color-picker__color"><div style="background: rgb(0, 131, 143);"></div></div><div class="v-color-picker__color"><div style="background: rgb(0, 151, 167);"></div></div><div class="v-color-picker__color"><div style="background: rgb(0, 172, 193);"></div></div><div class="v-color-picker__color"><div style="background: rgb(38, 198, 218);"></div></div><div class="v-color-picker__color"><div style="background: rgb(77, 208, 225);"></div></div><div class="v-color-picker__color"><div style="background: rgb(128, 222, 234);"></div></div><div class="v-color-picker__color"><div style="background: rgb(178, 235, 242);"></div></div><div class="v-color-picker__color"><div style="background: rgb(224, 247, 250);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(0, 150, 136);"></div></div><div class="v-color-picker__color"><div style="background: rgb(0, 77, 64);"></div></div><div class="v-color-picker__color"><div style="background: rgb(0, 105, 92);"></div></div><div class="v-color-picker__color"><div style="background: rgb(0, 121, 107);"></div></div><div class="v-color-picker__color"><div style="background: rgb(0, 137, 123);"></div></div><div class="v-color-picker__color"><div style="background: rgb(38, 166, 154);"></div></div><div class="v-color-picker__color"><div style="background: rgb(77, 182, 172);"></div></div><div class="v-color-picker__color"><div style="background: rgb(128, 203, 196);"></div></div><div class="v-color-picker__color"><div style="background: rgb(178, 223, 219);"></div></div><div class="v-color-picker__color"><div style="background: rgb(224, 242, 241);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(76, 175, 80);"></div></div><div class="v-color-picker__color"><div style="background: rgb(27, 94, 32);"></div></div><div class="v-color-picker__color"><div style="background: rgb(46, 125, 50);"></div></div><div class="v-color-picker__color"><div style="background: rgb(56, 142, 60);"></div></div><div class="v-color-picker__color"><div style="background: rgb(67, 160, 71);"></div></div><div class="v-color-picker__color"><div style="background: rgb(102, 187, 106);"></div></div><div class="v-color-picker__color"><div style="background: rgb(129, 199, 132);"></div></div><div class="v-color-picker__color"><div style="background: rgb(165, 214, 167);"></div></div><div class="v-color-picker__color"><div style="background: rgb(200, 230, 201);"></div></div><div class="v-color-picker__color"><div style="background: rgb(232, 245, 233);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(139, 195, 74);"></div></div><div class="v-color-picker__color"><div style="background: rgb(51, 105, 30);"></div></div><div class="v-color-picker__color"><div style="background: rgb(85, 139, 47);"></div></div><div class="v-color-picker__color"><div style="background: rgb(104, 159, 56);"></div></div><div class="v-color-picker__color"><div style="background: rgb(124, 179, 66);"></div></div><div class="v-color-picker__color"><div style="background: rgb(156, 204, 101);"></div></div><div class="v-color-picker__color"><div style="background: rgb(174, 213, 129);"></div></div><div class="v-color-picker__color"><div style="background: rgb(197, 225, 165);"></div></div><div class="v-color-picker__color"><div style="background: rgb(220, 237, 200);"></div></div><div class="v-color-picker__color"><div style="background: rgb(241, 248, 233);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(205, 220, 57);"></div></div><div class="v-color-picker__color"><div style="background: rgb(130, 119, 23);"></div></div><div class="v-color-picker__color"><div style="background: rgb(158, 157, 36);"></div></div><div class="v-color-picker__color"><div style="background: rgb(175, 180, 43);"></div></div><div class="v-color-picker__color"><div style="background: rgb(192, 202, 51);"></div></div><div class="v-color-picker__color"><div style="background: rgb(212, 225, 87);"></div></div><div class="v-color-picker__color"><div style="background: rgb(220, 231, 117);"></div></div><div class="v-color-picker__color"><div style="background: rgb(230, 238, 156);"></div></div><div class="v-color-picker__color"><div style="background: rgb(240, 244, 195);"></div></div><div class="v-color-picker__color"><div style="background: rgb(249, 251, 231);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(255, 235, 59);"></div></div><div class="v-color-picker__color"><div style="background: rgb(245, 127, 23);"></div></div><div class="v-color-picker__color"><div style="background: rgb(249, 168, 37);"></div></div><div class="v-color-picker__color"><div style="background: rgb(251, 192, 45);"></div></div><div class="v-color-picker__color"><div style="background: rgb(253, 216, 53);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 238, 88);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 241, 118);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 245, 157);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 249, 196);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 253, 231);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(255, 193, 7);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 111, 0);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 143, 0);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 160, 0);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 179, 0);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 202, 40);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 213, 79);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 224, 130);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 236, 179);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 248, 225);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(255, 152, 0);"></div></div><div class="v-color-picker__color"><div style="background: rgb(230, 81, 0);"></div></div><div class="v-color-picker__color"><div style="background: rgb(239, 108, 0);"></div></div><div class="v-color-picker__color"><div style="background: rgb(245, 124, 0);"></div></div><div class="v-color-picker__color"><div style="background: rgb(251, 140, 0);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 167, 38);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 183, 77);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 204, 128);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 224, 178);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 243, 224);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(255, 87, 34);"></div></div><div class="v-color-picker__color"><div style="background: rgb(191, 54, 12);"></div></div><div class="v-color-picker__color"><div style="background: rgb(216, 67, 21);"></div></div><div class="v-color-picker__color"><div style="background: rgb(230, 74, 25);"></div></div><div class="v-color-picker__color"><div style="background: rgb(244, 81, 30);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 112, 67);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 138, 101);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 171, 145);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 204, 188);"></div></div><div class="v-color-picker__color"><div style="background: rgb(251, 233, 231);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(121, 85, 72);"></div></div><div class="v-color-picker__color"><div style="background: rgb(62, 39, 35);"></div></div><div class="v-color-picker__color"><div style="background: rgb(78, 52, 46);"></div></div><div class="v-color-picker__color"><div style="background: rgb(93, 64, 55);"></div></div><div class="v-color-picker__color"><div style="background: rgb(109, 76, 65);"></div></div><div class="v-color-picker__color"><div style="background: rgb(141, 110, 99);"></div></div><div class="v-color-picker__color"><div style="background: rgb(161, 136, 127);"></div></div><div class="v-color-picker__color"><div style="background: rgb(188, 170, 164);"></div></div><div class="v-color-picker__color"><div style="background: rgb(215, 204, 200);"></div></div><div class="v-color-picker__color"><div style="background: rgb(239, 235, 233);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(96, 125, 139);"></div></div><div class="v-color-picker__color"><div style="background: rgb(38, 50, 56);"></div></div><div class="v-color-picker__color"><div style="background: rgb(55, 71, 79);"></div></div><div class="v-color-picker__color"><div style="background: rgb(69, 90, 100);"></div></div><div class="v-color-picker__color"><div style="background: rgb(84, 110, 122);"></div></div><div class="v-color-picker__color"><div style="background: rgb(120, 144, 156);"></div></div><div class="v-color-picker__color"><div style="background: rgb(144, 164, 174);"></div></div><div class="v-color-picker__color"><div style="background: rgb(176, 190, 197);"></div></div><div class="v-color-picker__color"><div style="background: rgb(207, 216, 220);"></div></div><div class="v-color-picker__color"><div style="background: rgb(236, 239, 241);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(158, 158, 158);"></div></div><div class="v-color-picker__color"><div style="background: rgb(33, 33, 33);"></div></div><div class="v-color-picker__color"><div style="background: rgb(66, 66, 66);"></div></div><div class="v-color-picker__color"><div style="background: rgb(97, 97, 97);"></div></div><div class="v-color-picker__color"><div style="background: rgb(117, 117, 117);"></div></div><div class="v-color-picker__color"><div style="background: rgb(189, 189, 189);"></div></div><div class="v-color-picker__color"><div style="background: rgb(224, 224, 224);"></div></div><div class="v-color-picker__color"><div style="background: rgb(238, 238, 238);"></div></div><div class="v-color-picker__color"><div style="background: rgb(245, 245, 245);"></div></div><div class="v-color-picker__color"><div style="background: rgb(250, 250, 250);"></div></div></div><div class="v-color-picker__swatch"><div class="v-color-picker__color"><div style="background: rgb(0, 0, 0);"></div></div><div class="v-color-picker__color"><div style="background: rgb(255, 255, 255);"></div></div><div class="v-color-picker__color"><div style="background: transparent;"></div></div></div></div>
						</div>
					</div>

					<div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-xs-12">
						<div class="mx-auto overflow-hidden v-card v-sheet theme--light" style="max-width: 350px;">
							<header class="v-sheet v-sheet--tile theme--dark v-toolbar v-app-bar mobile_header" style="height: 64px; margin-top: 0px; transform: translateY(0px); left: 0px; right: 0px; background-color: rgb(77, 175, 182); border-color: rgb(77, 175, 182);" data-booted="true">
								<div class="v-toolbar__content" style="height: 64px;">
									<!-- <button type="button" class="v-app-bar__nav-icon v-btn v-btn--flat v-btn--icon v-btn--round theme--dark v-size--default">
										<span class="v-btn__content"><i aria-hidden="true" class="v-icon notranslate mdi mdi-menu theme--dark"></i></span>
									</button> -->
									<div class="v-toolbar__title">
										Pimart
									</div>
									<div class="spacer">

									</div>
									<button type="button" class="v-btn v-btn--flat v-btn--icon v-btn--round theme--dark v-size--default">
										<span class="v-btn__content"><i aria-hidden="true" class="v-icon notranslate mdi mdi-cart theme--dark"></i></span>
									</button>
								</div>
							</header>
							<div class="app_sereen">
								<img src="{{asset('assets/images/app_sereen.png')}}" alt="app"/>
							</div>
							
						</div>
					</div>




						
				</div>
			
			</div>
			<input type="hidden" name="app_color" id="app_color">
<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 text-right mt-3">
						<button type="submit" class="btn btn-primary continue_btn">Store Details</button>
					</div>
            </form>
			</div>

		</div>
	
	</section>
@endsection
<style type="text/css">
	.header_sec .navbar-nav li a.sign_btn {
    border: 1px solid #f79652!important;
    padding: 2px 8px!important;
    margin: 10px 10px 0!important;
    border-radius: 25px!important;
    background: #f79652!important;
    color: #fff!important;
    text-align: center!important;
}
.active, .mitem .nav-link:hover {
     background: none!important; 
    border-radius: 25px;
}
	.header_sec .navbar-nav li a {
    color: #f79652!important;
    font-size: 16px!important;
    text-transform: uppercase!important;
    padding: 14px 0!important;
}
	.title2{
	text-align: left;
    font-size: 30px;
    color: #000;
    font-weight: 600;
    text-transform: uppercase;
    margin: 0px 21px 0 21px;
    width: auto;
    line-height: 44px;
    background: #f79652;
    color: #Fff;
    padding: 1px 1px 1px 6px;
	}
</style>
