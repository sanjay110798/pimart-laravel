@extends('layouts.user.dashboard.app')

@section('content')
@php 
$userreg=App\Model\UserReg::where(['user_id'=>Auth::id()])->first();
@endphp
<div class="container-fluid">
                <section class="details_wrapper">
                    
                        <div class="row">
                            


                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="details_contain">
                                    <div class="top_sec">
                                        <h4 class="title">Grocery Plan</h4>
                                        <a class="dashboard_btn" href="#">My Dashboard</a>
                                    </div>
                                    <div class="login_details">
                                        <h4 class="login_title">Admin Login</h4>
                                        <ul class="details_list">
                                            <li><a target="_blank" href="https://pimart.primacyinfotech.com/pmi/admin/autologin?email={{$userreg->email}}&&password={{$userreg->user_password}}">https://pimart.primacyinfotech.com/pmi/admin</a></li>
                                            <li><span>Login:</span> {{$userreg->email}}</li>
                                            <li><span>Password: :</span> {{$userreg->user_password}}</li>
                                        </ul>
                                    </div>
                                    <div class="login_details mb-0">
                                        <h4 class="login_title">Store Login</h4>
                                        <ul class="details_list">
                                            <li><a target="_blank" href="https://pimart.primacyinfotech.com/pmi/store/admin/autologin?email={{$userreg->email}}&&password={{$userreg->user_password}}">https://pimart.primacyinfotech.com/pmi/store/admin</a></li>
                                            <li><span>Login:</span> {{$userreg->email}}</li>
                                            <li><span>Password: :</span> {{$userreg->user_password}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
            
                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-xs-12">
                                <div class="details_contain">
                                    <div class="top_sec">
                                        <h4 class="title">Recommended Addons</h4>
                                    </div>
                                    <div class="recommend_sec">
                                        <table class="recommend_table">
                                            <thead>
                                              <tr>
                                                <th>Product</th>
                                                <th colspan="2">Price</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                              <?php 

                                              $list=App\Model\Addons::get();
                                              foreach($list as $l){
                                              ?>
                                                <tr>
                                                    <td style="text-transform: capitalize;">{{str_replace("_", " ",$l->field_name)}}</td>
                                                    <td>Rs {{$l->price}}</td>
                                                    <td>
                                                      <?php if($l->field_name=='setting_option' ||$l->field_name=='payment_option' ||$l->field_name=='referral_option' ||$l->field_name=='reward_option' ||$l->field_name=='subscription_option' ||$l->field_name=='sales_report' ||$l->field_name=='gst_report' ||$l->field_name=='profit_report' ||$l->field_name=='purchase_option' ||$l->field_name=='coupon_option'){?>
                                                        <a href="{{route('buy.addons',['id'=>$l->id,'us_pack'=>$userpackage->id,'user_id'=>Auth::id()])}}" class="btn btn-sm add_btn">Start Now</a>
                                                        <?php }else{?>
                                                        <a href="{{route('buy.addons',['id'=>$l->id,'us_pack'=>$userpackage->id,'user_id'=>Auth::id()])}}" class="btn btn-sm add_btn">Add Now</a>
                                                        <?php } ?>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    
                                </div>
                            </div>
                        </div>
                </section>
            

            </div>

@endsection