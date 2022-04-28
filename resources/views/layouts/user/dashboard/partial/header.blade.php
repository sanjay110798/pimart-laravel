        <div class="content_sec">
            <header class="dashboard_header">   
                <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand logo" href="#">
                        <img src="{{asset('userasset/images/logo-p.png')}}" alt="imge"/>
                    </a>
                    
                
                
                        
                    <div class="nav-item dropdown ml-auto right_sec">
                        <a class="nav-link dropdown-toggle user_dropdown" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
                            <div class="user_photo">
                            <img src="{{asset('userasset/images/debasis.jpg')}}" alt="User"/>   
                            </div>
                            <span>{{Auth::user()->name}}</span>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{route('user.profile')}}">
                                <img src="{{asset('userasset/images/logout_icon.svg')}}" alt="logout"/>Profile
                            </a>
                        
                            <a class="dropdown-item" href="{{route('user.logout')}}">
                                <img src="{{asset('userasset/images/logout_icon.svg')}}" alt="logout"/>Log Out
                            </a>
                        </div>
                    </div>
                </nav>
                <!-- /////// -->
        
            </header>
            <div class="container-fluid">
                <section class="details_wrapper" style="padding-top: 86px!important;">
                    <div class="navbar-header">
                      
                        @php
                        $userpackage=App\Model\Userpackage::where(['user_id'=>Auth::id()])->first();
                        $package = App\Model\Package::where(['id'=>$userpackage->package_id])->first();
                        $userReg=App\Model\UserReg::where(['user_id'=>Auth::id()])->first();
                        @endphp
                        <a class="navbar-brand {{(Route::current()->getName() == 'user.dashboard')? 'active':''}}" href="{{route('user.dashboard')}}"> Dashboard </a>
                        <a class="navbar-brand" style="    color: #eeeeee;background: #f75252;; padding: 4px 7px 4px 7px;border-radius: 10px;" href="#">{{$package->package_name}}/
                        @if($userpackage->ended_date <= date('Y-m-d'))
                        Expired
                        @else
                        {{date("F j,Y", strtotime($userpackage->ended_date))}}
                        @endif
                        </a>
                        <a class="navbar-brand {{(Route::current()->getName() == 'upgrade.package')? 'active':''}}" href="{{route('upgrade.package')}}"> Upgrade Now </a>
                        <a class="navbar-brand {{(Route::current()->getName() == 'app.make')? 'active':''}}" href="{{route('app.make')}}"> 
                        @if($userReg->app_status=='0')
                        Get app 
                        @elseif($userReg->app_status=='1')
                        App Will Be Uploaded Soon
                        @elseif($userReg->app_status=='2')
                        Download app
                        @endif
                        </a>
                        @if($userReg->pos_status=='0')
                        <a class="navbar-brand {{(Route::current()->getName() == 'active.pos')? 'active':''}}" href="{{route('active.pos')}}"> Active Pos </a>
                        @else
                        <a class="navbar-brand " target="_blank" href="https://pimart.primacyinfotech.com/pmi/store/admin/autologinpos?email=testemail@gmail.com&&password=123456"> Pos Actived</a>
                        @endif
                    </div>

                  
                </section>
             </div>
             <style type="text/css">
            .content_wrapp .details_wrapper {
            padding-top: 8px!important;
            }
            .navbar-brand.active
            {
                   color: #eeeeee;background: #f79652; padding: 4px 7px 4px 7px;border-radius: 10px;
            }
            .btn-primary {
            color: #fff!important;
            background-color: #f75252!important;
            border-color: #f75252!important;
            }
            .card-title{
                padding: 0 3px 0 15px;
            }
            .pricing_table-plan .feature_sec {

            text-align: center;

            }
             </style>  
            
