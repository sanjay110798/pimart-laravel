        <!-- Mobile Menu -->
    <div class="mobile_menu">
        <div class="container">
            <ul>
                <li>
                    <a class="toggle_menu" href="#">
                        <img src="{{asset('assets/images/menu_icon.png')}}" alt="whatsapp"/>
                    </a>


                    <ul class="mobile_navbar">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">FAQ</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sign_btn" href="{{url('user/login')}}">Sign In</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link sign_btn sign_up" href="{{route('signup')}}">Sign Up Free</a>
                        </li>
                    </ul>
                </li>
                
                <li>
                    <a href="https://api.whatsapp.com/send?phone=919088015865&text=Hi%20Team%20PrimacyInfotech.com!%20I%20was%20just%20viewing%20your%20website%20and%20am%20interested%20in%20knowing%20more%20about%20your%20Services"><img src="{{asset('assets/images/whatsapp_icon.png')}}" alt="whatsapp"/></a>
                </li>
                <li>
                    <a href="tel:+919088015866"><img src="{{asset('assets/images/phone_icon.png')}}" alt="phone"/></a>
                </li>
                <li>
                    <a href="mailto:info@primacyinfotech.com"><img src="{{asset('assets/images/envelop.png')}}" alt="phone"/></a>
                </li>
                
            </ul>
        </div>
    </div>
    <!-- Mobile Menu -->
    <a class="chart_icon" href="#">
        <img src="{{asset('assets/images/chart_icon.png')}}" alt="chart"/>
    </a>