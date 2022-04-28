@extends('layouts.front.app')
@section('content')
@include('layouts.front.partial.mobileheader')
 <section class="banner_sec">
        @include('layouts.front.partial.header')
    
        
        <div class="container banner_content" style="margin: 0 auto;">
            <div class="text_content">
            
                
            </div>
          
        </div>
    </section>
	
		<section class="signup_page_sec">
		
		<div class="container">
			<div class="from_wrapper">
				<div class="row">
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<form class="login_from store_from">
							<h4 class="from_title">Start you free 14-day trial of Pimart</h4>
							<p class="des">Sign up to use all features of Pimart up to 14-day</p>

							<ul class="info_list">
								<li>
									Trusted by hundreds of businesses
								</li>
								<li>
									PiMart is trusted by hundreds of businesses and startups
								</li>
								<li>
									Launch your own app within a week
								</li>

								<li>
									You can launch your app within a week and start accepting orders
								</li>
								<li>
									Go online and increase your sales
								</li>
								<li>
									Businesses have generated sales in millions with their own apps
								</li>
								<li>
									Build your own brand and gain more trust
								</li>
								<li>
									By launching your app, you can gain more trust of your customers
								</li>
							</ul>
							
						</form>
					</div>
					<div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
						<form class="login_from" method="POST" action="{{route('check.login')}}">
							@csrf
							<h4 class="from_title">Sign In</h4>
							
							<div class="form-group">
								<label>Email Id</label>
								<input type="text" class="form-control" value="{{old('email')}}" name="email" required />
								@error('email')
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
							
							<button type="submit" class="btn btn-primary continue_btn">Sign In</button>
						
							<div class="signin">
								<p class="des">Have an account? <a href="{{route('signup')}}">Sign Up</a></p>
							</div>
							<p class="des"> By continuing, you agree to <a href="#">Privacy Policy </a>and <a href="#">Terms & Conditions</a></p>
							
						</form>
					</div>
				</div>
			</div>	
		
	
		</div>
	
	
	</section>
@endsection