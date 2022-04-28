        <div class="header_sec">
        
            <div class="container">
                <nav class="navbar navbar-expand-md">
                    <a class="navbar-brand logo" href="#">
                        <img src="{{asset('assets/images/logo-p.png')}}" alt="log"/>
                    </a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span>&nbsp;</span>
                        <span>&nbsp;</span>
                        <span>&nbsp;</span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
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
                    
                    </div>
                </nav>
        
            </div>
        </div>