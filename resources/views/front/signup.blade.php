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
													<h4 class="from_title">Create your free account</h4>
													
													<form class="signup_from" method="POST" action="{{route('create.store')}}">
													@csrf
													<h4 class="from_title">Sign up</h4>
													<div class="form-group">
													<label>Name</label>
													<input type="text" class="form-control" name="name" value="{{ old('name') }}" required />
													@error('name')
													<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
													</span>
													@enderror
													</div>
													<div class="form-group">
													<label>Email Id</label>
													<input type="text" class="form-control" value="{{(request()->get('email')) ? request()->get('email') : old('email')}}" name="email" required />
													@error('email')
													<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
													</span>
													@enderror
													</div>

													<div class="form-group">
													<label>Mobile Number</label>
													<input type="number" class="form-control" name="mobile" value="{{ old('mobile') }}" required />
													@error('mobile')
													<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
													</span>
													@enderror
													</div>

													<div class="form-group">
													<label>Password</label>
													<input type="password" class="form-control" name="password" required/>
													@error('password')
													<span class="invalid-feedback" role="alert">
													<strong>{{ $message }}</strong>
													</span>
													@enderror
													</div>
													<div class="form-group">
													<label>Confirm Password</label>
													<input type="password" class="form-control" name="password_confirmation" required/>
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