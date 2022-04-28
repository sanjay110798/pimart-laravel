@extends('layouts.user.dashboard.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="container-fluid">
                <section class="details_wrapper">

<div class="row">


<div class="col-md-12">

<div class="card2">

    <?php 
        
         $package = App\Model\Package::where(['id'=>$userpackage->package_id])->first();
         ?>
         <div class="card-header" id="headingTwo">

          <?php 
          if($userpackage && $package){?>

          <h5 class="mb-0">



           <button class="btn btn-primary" type="button" data-toggle="collapse222" data-target="#collapseTwo222" aria-expanded="true222" aria-controls="collapseTwo222">



              <b class="text-white text-Uppercase">&nbsp;&nbsp;Package Name : &nbsp;&nbsp;{{$package->package_name}}</b>



          </button>



      </h5>
      <?php } ?>






  </div>

   <div class="card-body">



       <div class="row">


      <div class="col-sm-12">



        <div class="">
           

            <?php 
          if($userpackage && $package){
          $date = $userpackage->ended_date;
          $newDate = date('Y-m-d', strtotime($date. ' - 7 days'));

           ?>
            <div class="row">
               <div class="col-md-12 text-right mb-2 mt-2">
                    <?php 
                    if($newDate <= date('Y-m-d')){
                    ?>
                    <a href="#0" data-toggle="modal" data-target="#renewPackage"><button class="btn btn-secondary">Renew Package</button></a>
                    <?php }?>
                    <button class="btn btn-secondary" data-toggle="modal" data-target="#addAddons">Addons</button>
                  
                </div>

                <div class="modal fade" id="renewPackage" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Renew Package</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="row">
                <div class="col-md-12">
                <p>Select Payment Amount</p>
                <form method="post" action="{{route('renew.package',['pack_id'=>$package->id])}}">
                @csrf
                <div class="row">
                  <div class="col-md-12">
                    <input type="radio" name="payment_type" value="month" checked>&nbsp;&nbsp<i class="fa fa-inr"></i>{{$package->monthly_payment}}
                    <input type="radio" name="payment_type" value="year">&nbsp;&nbsp;<i class="fa fa-inr"></i>{{$package->yearly_payment}}
                    
                  </div>
                  <div class="col-md-12 mt-2">
                    <button type="submit" class="btn btn-primary">Payment</button>
                  </div>
                </div>
                </form>
                </div>
                </div>
                </div>

                </div>
                </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="addAddons" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Select Addons</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <div class="row">
                    <div class="col-md-12">
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
                </div>
                
                </div>
                </div>
                </div>
            </div>
            
           <div class="single-contact3  mb-3">
              
              <div class="details_contain">
                                    <div class="top_sec">
                                        <h4 class="title">Package's Limit</h4>
                                    </div>
                                    <div class="recommend_sec">
                                        <table class="recommend_table">
                                            <tbody>
                                                <tr>
                                                    <td>Order Limit</td>
                                                    <td>{{$userpackage->order_limit}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Store Limit</td>
                                                    <td>{{$userpackage->store_limit}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Product Limit</td>
                                                    <td>{{$userpackage->product_limit}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Customer Limit</td>
                                                    <td>{{$userpackage->customer_limit}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Setting Option</td>
                                                    <td> <?php 
                                                    if($userpackage->setting_option == '1'){
                                                    echo "ON";
                                                    }else{
                                                    echo "OFF";
                                                    }
                                                    ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Payment Option</td>
                                                    <td><?php 
                                                    if($userpackage->payment_option == '1'){
                                                    echo "ON";
                                                    }else{
                                                    echo "OFF";
                                                    }
                                                    ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Referral Option</td>
                                                    <td><?php 
                                                    if($userpackage->referral_option == '1'){
                                                    echo "ON";
                                                    }else{
                                                    echo "OFF";
                                                    }
                                                    ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Reward Option</td>
                                                    <td><?php 
                                                    if($userpackage->reward_option == '1'){
                                                    echo "ON";
                                                    }else{
                                                    echo "OFF";
                                                    }
                                                    ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Subscription Option</td>
                                                    <td><?php 
                                                    if($userpackage->subscription_option == '1'){
                                                    echo "ON";
                                                    }else{
                                                    echo "OFF";
                                                    }
                                                    ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Sales Report</td>
                                                    <td> <?php 
                                                    if($userpackage->sales_report == '1'){
                                                    echo "ON";
                                                    }else{
                                                    echo "OFF";
                                                    }
                                                    ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Gst Report</td>
                                                    <td><?php 
                                                    if($userpackage->gst_report == '1'){
                                                    echo "ON";
                                                    }else{
                                                    echo "OFF";
                                                    }
                                                    ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Profit Report</td>
                                                    <td><?php 
                                                    if($userpackage->profit_report == '1'){
                                                    echo "ON";
                                                    }else{
                                                    echo "OFF";
                                                    }
                                                    ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Purchase Option</td>
                                                    <td> <?php 
                                                    if($userpackage->purchase_option == '1'){
                                                    echo "ON";
                                                    }else{
                                                    echo "OFF";
                                                    }
                                                    ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Coupon Option</td>
                                                    <td><?php 
                                                    if($userpackage->coupon_option == '1'){
                                                    echo "ON";
                                                    }else{
                                                    echo "OFF";
                                                    }
                                                    ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Package Date</td>
                                                    <td>{{date("F j,Y", strtotime($userpackage->started_date))}} - {{date("F j,Y", strtotime($userpackage->ended_date))}}</td>
                                                </tr>
                                                
                                            </tbody>
                                        </table>
                                    </div>
                                    
                                    
                                </div>

           
                     

                  </div>

               <?php } else{?>
               No Package Found!!!
               <?php } ?>

              </div>



          </div>



      </div>



  </div>

    <!-- end content-->

</div>

<!--  end card  -->

</div>

<!-- end col-md-12 -->

</div>

<!-- end row -->

</div>

</div>
@endsection
<style type="text/css">
    .single-contact3{
   background: #f7f7f7;
    padding: 11px 11px 11px 11px;
    color: #813a09;
    }
    .head-cc{
        width: 230px;
    background: #f79652;
    font-size: 17px;
    padding: 6px;
    font-weight: 500;
    display: inline-block;
    }
    .head-c2{
        display: inline-block;
    padding: 7px 4px 4px 26px;
    font-size: 18px;
    }
    .clearfix{
        margin: 6px 0 0 0;
    }
    .float-right{
            float: right;
    }
</style>