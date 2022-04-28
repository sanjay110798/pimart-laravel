@extends('layouts.front.app')

@section('content')

@include('layouts.front.partial.mobileheader')

    <!-- Banner Sec -->
    <section class="banner_sec">
        
        @include('layouts.front.partial.header')
        <div class="container banner_content">
            <div class="text_content">
            
                <h4 class="banner_title">Grow your business by 10x using Online Pimart Delivery Software</h4>
                <p class="des">Manage Deliveries, Track Drivers With Our Pre-Built Pimart Delivery Management Software</span> e-commerce setup <span>(Android App, iOS App, Sales & Inventory Dashboard & POS)</span> in <span>hours</span></p>

                <from class="input-group mb-4 email_from">
                   <form  method="get" action="{{route('signup')}}">
                    <input type="text" class="form-control" placeholder="Enter your email address" aria-label="Recipient's username" name="email" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary started_btn" type="submit">Get Started Free</button>
                    </form>
                </from>
                  
                <div class="btn_sec">
                    <a href="#">Demo Android App</a>
                    <a class="ios_app"href="#">Demo iOS App</a>
                </div>
            </div>
            <div class="banner_photo">
                <img src="{{asset('assets/images/banner_photo.png')}}" alt="Banner Photo"/>
            </div>
        </div>
    </section>
    <!-- Banner Sec -->


    <!-- App Features -->
    <section class="app_features">
        <div class="container">
            <h4 class="title">Check it out User Experience of Your White Label Apps</h4>
            <div class="app_view_sec">
                    <div class="app_view">
                        <div class="app_photo">
                            <img src="{{asset('assets/images/app_1.png')}}" alt="Banner Photo"/>
                        </div>
                        <div class="app_store">
                            <a href="#">
                                <img src="{{asset('assets/images/google_app_store.png')}}" alt="AppStore"/>
                            </a>
                            <a href="#">
                                <img src="{{asset('assets/images/ios_app_store.png')}}" alt="AppStore"/>
                            </a>
                        </div>
                    </div>
                    <div class="app_view">
                        <div class="app_photo">
                            <img src="{{asset('assets/images/app_1.png')}}" alt="Banner Photo"/>
                        </div>
                        <div class="app_store">
                            <a href="#">
                                <img src="{{asset('assets/images/google_app_store.png')}}" alt="AppStore"/>
                            </a>
                            <a href="#">
                                <img src="{{asset('assets/images/ios_app_store.png')}}" alt="AppStore"/>
                            </a>
                        </div>
                    </div>
                    <div class="app_view">
                        <div class="app_photo">
                            <img src="{{asset('assets/images/app_1.png')}}" alt="Banner Photo"/>
                        </div>
                        <div class="app_store">
                            <a href="#">
                                <img src="{{asset('assets/images/google_app_store.png')}}" alt="AppStore"/>
                            </a>
                            <a href="#">
                                <img src="{{asset('assets/images/ios_app_store.png')}}" alt="AppStore"/>
                            </a>
                        </div>
                    </div>

                    <div class="app_view">
                        <div class="app_photo">
                            <img src="{{asset('assets/images/app_1.png')}}" alt="Banner Photo"/>
                        </div>
                        <div class="app_store">
                            <a href="#">
                                <img src="{{asset('assets/images/google_app_store.png')}}" alt="AppStore"/>
                            </a>
                            <a href="#">
                                <img src="{{asset('assets/images/ios_app_store.png')}}" alt="AppStore"/>
                            </a>
                        </div>
                    </div>
                    <div class="app_view">
                        <div class="app_photo">
                            <img src="{{asset('assets/images/app_1.png')}}" alt="Banner Photo"/>
                        </div>
                        <div class="app_store">
                            <a href="#">
                                <img src="{{asset('assets/images/google_app_store.png')}}" alt="AppStore"/>
                            </a>
                            <a href="#">
                                <img src="{{asset('assets/images/ios_app_store.png')}}" alt="AppStore"/>
                            </a>
                        </div>
                    </div>


                </div>
                
            </div>  

        </div>
    </section>
    <!-- App Features -->


    <!-- Our Pathner Sec -->
    <section class="container our_pathner_sec">
        <h4 class="title">our live site</h4>
        <div class="our_pathner">
            <div class="pathner_icon">
                <img src="{{asset('assets/images/unnamed.webp')}}" alt="Banner Photo"/>
            </div>
            <div class="pathner_icon">
                <img src="{{asset('assets/images/unnamed1.webp')}}" alt="Banner Photo"/>
            </div>
            <div class="pathner_icon">
                <img src="{{asset('assets/images/unnamed2.webp')}}" alt="Banner Photo"/>
            </div>
            <div class="pathner_icon">
                <img src="{{asset('assets/images/unnamed3.webp')}}" alt="Banner Photo"/>
            </div>
            <div class="pathner_icon">
                <img src="{{asset('assets/images/unnamed.webp')}}" alt="Banner Photo"/>
            </div>
            <div class="pathner_icon">
                <img src="{{asset('assets/images/unnamed1.webp')}}" alt="Banner Photo"/>
            </div>
            <div class="pathner_icon">
                <img src="{{asset('assets/images/unnamed2.webp')}}" alt="Banner Photo"/>
            </div>
            <div class="pathner_icon">
                <img src="{{asset('assets/images/unnamed3.webp')}}" alt="Banner Photo"/>
            </div>
        </div>
    </section>
    <!-- Our Pathner Sec -->


    <!-- Features Sec -->
    <section class="features_sec features_content_sec"> 
        <div class="container">
            <div class="top_sec">
                <div class="title_sec">
                    <h4 class="title">Features</h4>
                    <p class="des">You may try and explore the demo app available on <span>Google Play Store</span> and <span> Apple App Store.</span> Try Pimart demo app.</p>
                </div>
                <div class="app_store">
                    <a href="#">
                        <img src="{{asset('assets/images/google_app_store.png')}}" alt="AppStore"/>
                    </a>
                    <a href="#">
                        <img src="{{asset('assets/images/ios_app_store.png')}}" alt="AppStore"/>
                    </a>
                </div>
            </div>
           
            <div class="app_features_content">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 my-3">
                        <div class="text_content">
                            <div class="icon">
                                <img src="{{asset('assets/images/store_icon.png')}}" alt="Store"/>
                            </div>
                            <h4 class="app_title">Multistore</h4>
                            <p class="des">This time-saving feature would make it easier for the people to look for their previous order. There are two extra features, one feature is that one can add more items and can remove items from the list of orders.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 my-3">
                        <div class="text_content">
                            <div class="icon">
                                <img src="{{asset('assets/images/notifications.png')}}" alt="notifications"/>
                            </div>
                            <h4 class="app_title">Notifications</h4>
                            <p class="des">Customers will receive certain alerts and push notifications, regarding a few things such as suppose their order is going to arrive. These can come through SMS and Emails.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 my-3">
                        <div class="text_content">
                            <div class="icon">
                                <img src="{{asset('assets/images/rating.png')}}" alt="rating"/>
                            </div>
                            <h4 class="app_title">Rating and the feedbacks</h4>
                            <p class="des">Customers can rate the feedback as well as add comments to it. Online grocery is available through this app.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 my-3">
                        <div class="text_content">
                            <div class="icon">
                                <img src="{{asset('assets/images/delivery.png')}}" alt="Delivery"/>
                            </div>
                            <h4 class="app_title">Delivery on the scheduled time</h4>
                            <p class="des">The date of delivery can be fixed. The time of the delivery can also be fixed beforehand. It is fixed according to the convenience.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 my-3">
                        <div class="text_content">
                            <div class="icon">
                                <img src="{{asset('assets/images/offers.png')}}" alt="Store"/>
                            </div>
                            <h4 class="app_title">Special offers</h4>
                            <p class="des">Shoppers can receive all the offers which are available and which lead to ordering better things. Exclusive offers for online grocery are there.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 my-3">
                        <div class="text_content">
                            <div class="icon">
                                <img src="{{asset('assets/images/feedback.png')}}" alt="Store"/>
                            </div>
                            <h4 class="app_title">Tracking order feedback</h4>
                            <p class="des">Tracking of the order is very necessary. People track order profusely, as they wait for it to arrive as soon as possible. Online supermarket apps nowadays have a lot of features like online tracking of the order or checking up of the order status.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 my-3">
                        <div class="text_content">
                            <div class="icon">
                                <img src="{{asset('assets/images/registration.png')}}" alt="Store"/>
                            </div>
                            <h4 class="app_title">Registration</h4>
                            <p class="des">To buy product from the grocery app, one must register his or her name and create an account. The registration must be done with the help of social media platforms such as instagram and facebook.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 my-3">
                        <div class="text_content">
                            <div class="icon">
                                <img src="{{asset('assets/images/language.png')}}" alt="Store"/>
                            </div>
                            <h4 class="app_title">Multi-language</h4>
                            <p class="des">This app would be open to customers, globally. So to make it easier for the customers, different language bar should be available. In order to meet the business requirement, blobal languages should be integrated.</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-xs-12 my-3">
                        <div class="text_content">
                            <div class="icon">
                                <img src="{{asset('assets/images/search_icon.png')}}" alt="Store"/>
                            </div>
                            <h4 class="app_title">Easy search</h4>
                            <p class="des">Easy search results are that platform where the search results would appear on the internet.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Sec -->

    <section class="features_sec">
        <div class="container">
            <div class="fatures_photo">
                <img src="{{asset('assets/images/pimart_mobile.png')}}" alt="Pimart Mobile"/>
            </div>
            <div class="text_content">
                <h4 class="title">Label Pimart App, Built Just For Your brand</h4>
                <p class="des">Build grocery delivery platform customized specially for your brand</p>

                <div class="feature_bottom">
                    <div class="feature_content">
                        <div class="feature_text">
                            <h4 class="feature_title">
                                <div class="icon">
                                    <img src="{{asset('assets/images/setting.png')}}" alt="setting"/>
                                </div>
                                How does the design process work?</h4>
                            <p class="des">We will ask you to complete a short design questionnaire and then if we have any questions we will discuss them with you. Then we will undertake research on your industry to be able to create a design concept.</p>
                        </div>
                    </div>
                    <div class="feature_content">
                        <div class="feature_text">

                            <h4 class="feature_title">
                                <div class="icon">
                                    <img src="{{asset('assets/images/examples_icon.png')}}" alt="examples"/>
                                </div>
                                Can you show me examples of your work?
                            </h4>
                            <p class="des">Yes. Please take a look at our portfolio pages.</p>
                        </div>
                    </div>
                    <div class="feature_content">
                        <div class="feature_text">
                            <h4 class="feature_title">
                                <div class="icon">
                                    <img src="{{asset('assets/images/cost_icon.png')}}" alt="Cost"/>
                                </div>
                                Are there any widden costs?
                            </h4>
                            <p class="des">No there are no hidden costs whatsoever before or after the project.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <!-- Dshboard Sec -->
    <section class="dshboard_sec">
        
        <div class="container">
            <h4 class="title">Create Pimart App</h4>
            <p class="des">Tailored To Increase Conversions And Improve Customer Experience</p>
            <div class="dshboard_wrapper">
                <div class="dshboard_slider">
                    <div class="dshboard_item ">
                        <img src="{{asset('assets/images/pistore_dashboard.png')}}" alt="Dashboard">
                    </div>
                    <div class="dshboard_item ">
                        <img src="{{asset('assets/images/pistore_dashboard2.png')}}" alt="Dashboard">
                    </div>
                    <div class="dshboard_item ">
                        <img src="{{asset('assets/images/pistore_orders.png')}}" alt="Dashboard">
                    </div>
                    <div class="dshboard_item ">
                        <img src="{{asset('assets/images/pistore_dashboard.png')}}" alt="Dashboard">
                    </div>
                </div>

                <div class="text_content">
                        
                    <div class="feature_content">
                        <div class="feature_text">
                            <h4 class="feature_title">Manage at One Place</h4>
                            <p class="des">Easily manage all orders by consolidating orders, delivery fees & partners, changing menus, or enabling/disabling outlet locations</p>
                        </div>
                    </div>
                    <div class="feature_content">
                        <div class="feature_text">
                            <h4 class="feature_title">Monitor Performance</h4>
                            <p class="des">Give your customers a five-star experience with Yelo’s best-in-market features. Our customized reporting feature gives you access to the metrics to monitor performance and drive growth.</p>
                        </div>
                    </div>
                    <!-- <div class="feature_content">
                        <div class="feature_text">`
                            <h4 class="feature_title">Analyse Sales Reports</h4>
                            <p class="des">Pick and choose the KPI’s that matter the most and generate automated reports on your business performance in all aspects that matter to you.</p>
                        </div>
                    </div> -->
                    <a class="started_btn" href="#">Get Started</a>
                </div>
            </div>
        </div>
    </section>
    <!-- Dshboard Sec -->

    <!-- Growcify Sec -->
    <section class="growcify_sec">
        <div class="container">
            <h4 class="title">Why Pimart?</h4>
            <p class="des">Pimart is one of the fastest growing SaaS platforms for businesses</p>   
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="growcify_grid">
                        <h4 class="growcify_title">5M+ requests / monthly</h4>
                        <p class="des">Every month, we process millions of requests, while ensuring a high level of stability and security in our system and servers.</p>
                    </div>
                </div>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="growcify_grid">
                        <h4 class="growcify_title">INR 60M+ sales generated by businesses</h4>
                        <p class="des">Pimart has helped businesses generate millions of sales across India and growing day by day.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="growcify_grid">
                        <h4 class="growcify_title">Sharing economy falling</h4>
                        <p class="des">Airbnb is more expensive than a hotel. Uber is more expensive than a taxi. As the sharing economy falling apart, soon Zomato, Grofers will be more expensive than restaurants.</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="growcify_grid">
                        <h4 class="growcify_title">Loyal customer convenience</h4>
                        <p class="des">Due to the pandemic, your loyal customers prefer ordering online instead of visiting your physical store. To allow them order online, Pimart can help you launch own e-commerce app.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Growcify Sec -->

    <!-- Pricing Sec -->
  <section class="pricing_sec">
        <div class="container">

            <h4 class="title">Select Your  Plan</h4>




            <div class="row">

                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 p-0">
                    <div class="pricing_table-plan">
                        <div class="plan_top_sec">
                            <h4 class="plan_title">
                                Startup
                            </h4>
                        </div>

                        <div class="price_sec">
                            <div class="save_offer">
                                <div class="save">
                                    ₹999.00
                                </div>
                                <p class="des">
                                    Per Project/Month, Billed Annually
                                </p>

                                <a href="#" class="add_btn">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        
                        <div class="feature_sec">
                            <h4 class="list_title">Includes</h4>
                            <ul class="feature_list">
                                <li>E-commerce Website</li>
                                <li>Admin Panel</li>
                                <li>Add upto 2500 Products</li>
                            </ul>
                            <h4 class="list_title">Features</h4>
                            <ul class="feature_list">
                                <li>Category Management</li>
                                <li>Sub-categories Management</li>
                                <li>Products Management</li>
                                <li>Bulk Products Upload using Excel</li>
                                <li>Manage Store</li>
                                <li>Stock Management</li>
                                <li>Brands Management</li>
                                <li>Manage Delivery Slots</li>
                            </ul>
                            <h4 class="list_title">Notifications</h4>
                            <ul class="feature_list">
                                <li>SMS Notifications</li>
                                <li>App Notifications</li>
                            </ul>
                            <h4 class="list_title">Personalization</h4>
                            <ul class="feature_list">
                                <li>Custom Domain</li>
                                <li>Upload Your Brand Logo</li>
                            </ul>
                            <h4 class="list_title">Marketing</h4>
                            <ul class="feature_list">
                                <li>Refer and Earn Program</li>
                                <li>Discount Code Engine</li>
                                <li>Monthly Shopping Gift Offers</li>
                                <li>Upload Banners</li>
                            </ul>
                            <h4 class="list_title">Payment Options</h4>
                            <ul class="feature_list">
                                <li>Cash on Delivery</li>
                                <li>Payu Payment Gateway</li>
                                <li>Website Wallet</li>
                            </ul>

                        </div>
                    </div>

                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 p-0">
                        <div class="pricing_table-plan">
                            <div class="plan_top_sec">
                                <h4 class="plan_title">
                                    Growth

                                </h4>
                            </div>
    
                            <div class="price_sec">
                                <div class="save_offer">
                                    <div class="save">
                                        ₹2999.00
                                    </div>
                                    <p class="des">
                                        Per Project/Month, Billed Annually
                                    </p>
    
                                    <a href="#" class="add_btn">
                                        Buy Now
                                    </a>
                                </div>
                            </div>
                            
                            <div class="feature_sec">
                                
                                <h3 class="startup_title">Includes everything in <span>Startup+</span></h3>
                                <h4 class="list_title">Includes</h4>
                                <ul class="feature_list">
                                    <li>E-commerce Website</li>
                                    <li>Admin Panel</li>
                                    <li>Add upto 2500 Products</li>
                                </ul>
                                <h4 class="list_title">Features</h4>
                                <ul class="feature_list">
                                    <li>Category Management</li>
                                    <li>Sub-categories Management</li>
                                    <li>Products Management</li>
                                    <li>Bulk Products Upload using Excel</li>
                                    <li>Manage Store</li>
                                    <li>Stock Management</li>
                                    <li>Brands Management</li>
                                    <li>Manage Delivery Slots</li>
                                </ul>
                                <h4 class="list_title">Notifications</h4>
                                <ul class="feature_list">
                                    <li>SMS Notifications</li>
                                    <li>App Notifications</li>
                                </ul>
                                <h4 class="list_title">Personalization</h4>
                                <ul class="feature_list">
                                    <li>Custom Domain</li>
                                    <li>Upload Your Brand Logo</li>
                                </ul>
                                
    
                            </div>
                        </div>
    
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 p-0">
                    <div class="pricing_table-plan">
                        <div class="plan_top_sec">
                            <h4 class="plan_title">
                                Enterprise

                            </h4>
                        </div>

                        <div class="price_sec">
                            <div class="save_offer">
                                <div class="save">
                                    ₹9999.00
                                </div>
                                <p class="des">
                                    Per Project/Month, Billed Annually
                                </p>

                                <a href="#" class="add_btn">
                                    Buy Now
                                </a>
                            </div>
                        </div>
                        
                        <div class="feature_sec">
                            <h3 class="startup_title">Includes everything in <span>Growth+</span></h3>

                            <h4 class="list_title">Apps</h4>
                            <ul class="feature_list">
                                <li>iPhone Customer App</li>
                            </ul>
                            <h4 class="list_title">Space Usage</h4>
                            <ul class="feature_list">
                                <li>Add Upto 20 Staff accounts</li>
                                <li>Add Upto 12000 Products</li>
                                <li>500 Free SMS Credits</li>
                            </ul>
                            <h4 class="list_title">Upload</h4>
                            <ul class="feature_list">
                                <li>One time Upload to Play Store</li>
                                <li>One time Upload to the Apple App Store</li>
                            </ul>
                            <h4 class="list_title">Support</h4>
                            <ul class="feature_list">
                                <li>Dedicated Manager for 15 days</li>
                            </ul>
                        </div>
                    </div>
    
                </div>
                <!-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 p-0">
                    <div class="pricing_table-plan premium">
                        <div class="plan_top_sec">
                            <h4 class="plan_title">
                                Premium Web Hosting
                            </h4>
                            <p class="des">
                                Ideal solution for beginners
                            </p>
                        </div>

                        <div class="price_sec">
                            <div class="save_offer">
                                <div class="save">
                                    ₹349.00
                                </div>
                                <div class="offer">
                                    SAVE 80% 
                                </div>
                            </div>

                            <h4 class="price">
                                ₹ 69.00 /mo
                                
                            </h4>
                        </div>
                        <div class="cart_sec">
                            <a href="#" class="add_btn">
                                Add to cart
                            </a>
                            <p>₹159.00/mo when you renew</p>
                        </div>
                        <ul class="feature_sec">
                            <li><span>1</span> Website</li>
                            <li><span>30 GB</span> SSD Storage</li>
                            <li><span>~10000</span> Visits Monthly</li>
                            <li><span>1</span> Email Account</li>
                            <li><span>Free</span> SSL (₹855.00 value)</li>
                            <li><span>Free</span> Domain</li>
                            <li><span>100 GB</span> Bandwidth</li>
                            <li><span>Managed</span> WordPress</li>
                            <li><span>2</span> Databases</li>
                            <li><span>GIT</span> Access</li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12 p-0">
                    <div class="pricing_table-plan business">
                        <div class="plan_top_sec">
                            <h4 class="plan_title">
                                Business Web Hosting
                            </h4>
                            <p class="des">
                                Ideal solution for beginners
                            </p>
                        </div>

                        <div class="price_sec">
                            <div class="save_offer">
                                <div class="save">
                                    ₹349.00
                                </div>
                                <div class="offer">
                                    SAVE 80% 
                                </div>
                            </div>

                            <h4 class="price">
                                ₹ 69.00 /mo
                                
                            </h4>
                        </div>
                        <div class="cart_sec">
                            <a href="#" class="add_btn">
                                Add to cart
                            </a>
                            <p>₹159.00/mo when you renew</p>
                        </div>
                        <ul class="feature_sec">
                            <li><span>1</span> Website</li>
                            <li><span>30 GB</span> SSD Storage</li>
                            <li><span>~10000</span> Visits Monthly</li>
                            <li><span>1</span> Email Account</li>
                            <li><span>Free</span> SSL (₹855.00 value)</li>
                            <li><span>Free</span> Domain</li>
                            <li><span>100 GB</span> Bandwidth</li>
                            <li><span>Managed</span> WordPress</li>
                            <li><span>2</span> Databases</li>
                            <li><span>GIT</span> Access</li>

                        </ul>
                    </div>
                </div> -->
            </div>

        </div>
    </section>
    <!-- Pricing Sec -->


    <section class="growcify_pos">
        <div class="container">
            <div class="top_sec">
                <h4 class="title">Pimart POS <span>(Exclusive of all taxes)</span></h4>
                <p class="des">With Pimart POS, you can manage your offline business (store / restaurant / mobile food truck / walk-in supermarket) and keep it synced with your online business</p>
            </div>
            <ul class="monthly_price">
                <li>₹1,499.00/monthly</li>
                <li>₹14,999.00/yearly</li>
                <li>₹39,999.00/one-time</li>
            </ul>
            <div class="features_sec">
                <div class="features_list">
                    <li>Instant billing system</li>
                    <li>Customer GSTN verification</li>
                    <li>Generate and export reports</li>
                    <li>Scan and generate barcodes</li>
                    <li>Send <span>payment links</span> and collect payment</li>
                    <li>Keep your lifelong orders stored in the cloud</li>
                </div>
                <div class="features_list">
                    <li>Create and process a new order in less than 10 seconds</li>
                    <li>Print and download invoices in different formats (thermal, KOT & A4)</li>
                    <li>Inventory auto-sync with your Android and iOS app (developed by Pimart)</li>
                    <li>Pimart POS is compatible with your retail, restaurant or e-commerce business</li>
                </div>
            </div>

            <a class="started_btn" href="#">Get Started</a>
            <p class="note">Note: Pimart POS is available without additional cost in our <span>Pimart Enterprise</span> plan.</p>
        </div>
    </section>

    <!-- Faq Sec -->
    <section class="faq_sec">
        <div class="container">
            <h4 class="title">FAQ</h4>

            <div class="accordion" id="accordionExample">
                <div class="card">
                    <div class="card-header" id="headingOne">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            How to register or get started?
                        </button>
                    </div>
                
                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="faq_content">
                                <h4 class="faq_title">Follow these simple steps to get started:</h4>
                                <ul class="faq_list">
                                    <li>Scroll to the top and enter your mobile number and click on  <span>Get Started</span>or click <a href="#">here.</a></li>
                                    <li>Enter your name and mobile number and then click  <span>CONTINUE.</span></li>
                                    <li>Enter received OTP and click <span>VERIFY & CONTINUE.</span></li>
                                    <li>Click on the + icon to register your business.</li>
                                    <li>Select your plan and enter your app name and all the required details. And then select your desired app color and click CONTINUE.</li>
                                    <li>You will be redirected to Settings page where you can upload your logo and make all the necessary changes to your app.</li>
                                    <li>After setting up everything, you can activate your app by making the payment at the top.</li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                      <div class="card-header" id="headingTwo">
                          <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            How to upload your brand logo?
                          </button>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                        <div class="card-body">
                            <div class="faq_content">
                                <h4 class="faq_title">Follow these simple steps to get started:</h4>
                                <ul class="faq_list">
                                    <li>Scroll to the top and enter your mobile number and click on  <span>Get Started</span>or click <a href="#">here.</a></li>
                                    <li>Enter your name and mobile number and then click  <span>CONTINUE.</span></li>
                                    <li>Enter received OTP and click <span>VERIFY & CONTINUE.</span></li>
                                    <li>Click on the + icon to register your business.</li>
                                    <li>Select your plan and enter your app name and all the required details. And then select your desired app color and click CONTINUE.</li>
                                    <li>You will be redirected to Settings page where you can upload your logo and make all the necessary changes to your app.</li>
                                    <li>After setting up everything, you can activate your app by making the payment at the top.</li>

                                </ul>
                            </div>
                        </div>
                      </div>
                </div>
                <div class="card">
                    <div class="card-header" id="headingThree">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            How to add or remove a category from dashboard?
                        </button>
                    </h2>
                    </div>
                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="card-body">
                        <div class="faq_content">
                            <h4 class="faq_title">Follow these simple steps to add or remove a category:</h4>
                            <ul class="faq_list">
                                <li>Go to your dashboard</li>
                                <li>Click on <span>Categories</span> from the left side menu</li>
                                <li>Click on <span> ADD NEW CATEGORY.</span></li>
                                <li>Enter the category name, select parent category if applicable, add category photos and click on  <span>SAVE</span></li>
                                <li>It's done! To change the status of a category, just change the toggle.</li>
                                <li>To edit the category, click on the edit icon in actions next to category name.</li>
                                <li>To remove the category, click on the trash icon in actions next to category name.</li>

                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
    <section class="business_partner">
        <div class="container">
            <h4 class="title">Trusted by many businesses</h4>
            <p class="des">Become an affiliate Pimart business partner (reseller) and earn per conversion</p>
            <div class="btn_sec">
                <a class="business_btn"href="#">Download Pimart Brochure</a>
                <a class="business_btn"href="#">Download Pimart POS Brochure</a>
                <a class="business_btn"href="#">Download Pimart BP Program</a>
            </div>

        </div>
    </section>

@endsection
