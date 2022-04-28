 <meta name="viewport" content="width=device-width, initial-scale=1">
<div class="sidebar" data-active-color="rose" data-background-color="black" data-image="{{asset('adminstyle/assets/img/sidebar-1.jpg')}}">



            <div class="logo">



                <a href="#" class="simple-text">



                </a>



            </div>



            <div class="logo logo-mini">



                <a href="#" class="simple-text">



                    KB



                </a>



            </div>



            <div class="sidebar-wrapper">



                <div class="user">



                    <div class="photo">




                        <img src="{{asset('upload/'.Auth::user()->image)}}" />


                    </div>



                    <div class="info">



                        <a data-toggle="collapse" href="#collapseExample" class="collapsed">



                           {{Auth::user()->name}}



                            <b class="caret"></b>



                        </a>



                        <div class="collapse" id="collapseExample">



                            <ul class="nav">


                                <li>



                                    <a href="{{route('admin.profile')}}" >Profile</a>



                                </li>
                                <li>



                                    <a href="{{route('admin.logout')}}" >Log Out</a>



                                </li>



                            </ul>



                        </div>



                    </div>



                </div>



                <ul class="nav">

                    <li class="{{(Route::current()->getName() == 'admin.dashboard')? 'active':''}}">



                        <a href="{{route('admin.dashboard')}}">



                            <i class="material-icons">dashboard</i>



                            <p>Dashboard</p>



                        </a>



                    </li>
                    <li class="{{(Route::current()->getName() == 'admin.user.registration')? 'active':''}}">
                        <a href="{{route('admin.user.registration')}}">

                            <i class="material-icons">timeline</i>

                            <p>User Management</p>

                        </a>

                    </li>
                     <li class="{{(Route::current()->getName() == 'admin.package')? 'active':''}}">
                        <a href="{{route('admin.package')}}">

                            <i class="material-icons">timeline</i>

                            <p>Package System</p>

                        </a>

                    </li>
                    <li class="{{(Route::current()->getName() == 'admin.addons')? 'active':''}}">
                        <a href="{{route('admin.addons')}}">

                            <i class="material-icons">timeline</i>

                            <p>Addons System</p>

                        </a>

                    </li>
                    
					<li class="{{(Route::current()->getName() == 'admin.user.payment.history')? 'active':''}}">
                        <a href="{{route('admin.user.payment.history')}}">

                            <i class="material-icons">timeline</i>

                            <p>User Payment History</p>

                        </a>

                    </li>

                    <li class="{{(Route::current()->getName() == 'admin.app.request')? 'active':''}}">
                        <a href="{{route('admin.app.request')}}">

                            <i class="material-icons">timeline</i>

                            <p>App Request</p>

                        </a>

                    </li>



                </ul>



            </div>



        </div>