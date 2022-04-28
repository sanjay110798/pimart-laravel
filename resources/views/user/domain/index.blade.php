@extends('layouts.user.dashboard.app')

@section('content')
@php 
$userreg=App\Model\UserReg::where(['user_id'=>Auth::id()])->first();
@endphp
<div class="container-fluid">
                <section class="details_wrapper">
                    
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="details_contain">
                                    <div class="top_sec">
                                        <h4 class="title">Domains</h4>
                                        <a class="dashboard_btn" href="#">Buy new Domain</a>
                                    </div>
                                    <div class="cutsome_domain">
                                        <h4 class="domain_title">Set up your existing domains to connect to Yelo</h4>   
                                        <div class="domain_contain">
                                            <p class="des">Setting up your domain is not something you have to do often, but it’s important that you do it properly the first time. The following instructions work for the most common third-party domain providers :</p>
                                            <ul class="domain_list">
                                                <li>Log in to the account you have with your domain provider.</li>
                                                <li>Find your DNS settings. Look for your account admin panel, or your domain management area, or advance DNS Zone, or similar.</li>
                                                <li>Edit your CNAME record to point to Yelo's CNAME, which is 'admin.yelo.red' for Dashboard and 'lb.yelo.red' for WebApp.</li>
                                            </ul>
            
                                            <div class="admin_feature">
                                                <p class="des">The third-party admin panel might feature drop-downs or editable fields, or you might have to check boxes or edit a table. In the admin, you need to:</p>
                                                <ul class="domain_list">
                                                    <li>Enter or choose the @ symbol, or CNAME record</li>
                                                    <li>enter Yelo's CNAME [admin.yelo.red/lb.yelo.red] as the destination for the CNAME record</li>
                                                </ul>
                                            </div>
                                            <ul class="domain_list">
                                                <li>Save the CNAME Record (click Save, Save Zone File, Add Record, or similar).</li>
                                                <li>Add/Update your final domain name on below mentioned textboxes and save the change.</li>
                                            </ul>
                                            <div class="domain_btn">
                                                <a class="domain_link" href="#"> <img src="{{asset('userasset/images/godaddy logo.svg')}}"> <span>GoDaddy</span> Domain Guide </a>
                                                <a class="domain_link" href="#"> <img src="{{asset('userasset/images/namecheap logo.svg')}}"> <span>Namecheap</span> Domain Guide </a>
                                                <a class="domain_link" href="#"> <img src="{{asset('userasset/images/cloudflare logo.svg')}}"> <span>Cloudflare</span> Domain Guide </a>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="cutsome_domain">
                                        <h4 class="domain_title">Dashboard Domain</h4>  
                                        <div class="domain_contain">
                                            <p class="des">Make sure you create a CNAME DNS record for your domain to <span>admin.yelo.red</span>. And, it can take up to 24 - 48 hrs for the custom domain to be activated.</p>
                                            <div class="domain_from_sec">
                                                <form class="domain_from">
                                                    <div class="from_group">
                                                        <span>https://</span>
                                                        <input type="text" class="form-control" placeholder="Enter dashboard domain">
                                                    </div>
                                                    
                                                    <div class="btn_sec">
                                                        <button type="submit" class="btn btn-primary save_btn">Save</button>
                                                        <button type="submit" class="btn btn-primary cancel_btn">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
            
                                    <div class="cutsome_domain">
                                        <h4 class="domain_title">WebApp Domain</h4> 
                                        <div class="domain_contain">
                                            <p class="des">Make sure you create a CNAME DNS record for your domain to <span>admin.yelo.red</span>. And, it can take up to 24 - 48 hrs for the custom domain to be activated.</p>
                                            <div class="domain_from_sec">
                                                <form class="domain_from">
                                                    <div class="from_group">
                                                        <span>https://</span>
                                                        <input type="text" class="form-control" placeholder="Enter webapp domain">
                                                    </div>
                                                    
                                                    <div class="btn_sec">
                                                        <button type="submit" class="btn btn-primary save_btn">Save</button>
                                                        <button type="submit" class="btn btn-primary cancel_btn">Cancel</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                </section>
            

            </div>

@endsection