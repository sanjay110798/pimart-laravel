@extends('layouts.user.dashboard.app')

@section('content')
<div class="content">

<div class="container-fluid">

<div class="row">


<div class="col-md-12">

<div class="card2">

   <div class="card-body">


      
       <div class="row">

           @foreach($packagelist as $order)
           <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <div class="pricing_table-plan">
                        <div class="plan_top_sec">
                            <h4 class="plan_title" style="height: 128px;">
                               {{$order->package_name}}
                            </h4>
                           
                        </div>

                        <div class="cart_sec mt-2">
                            <a href="{{route('upgrade.your.package',['pack_id'=>$order->id])}}" class="add_btn">
                                Add </a>
                            <p>₹{{$order->monthly_payment}}/mo when you renew</p>

                            <p>₹{{$order->yearly_payment}}/yr when you renew</p>
                        </div>
                        <ul class="feature_sec">
                            <li><span>{{$order->order_limit}}</span> Order</li>
                            <li><span>{{$order->variant_limit}}</span> Variant Limit</li>
                            <li><span>~{{$order->store_limit}}</span> Store Limit</li>
                            <li><span>{{$order->product_limit}}</span> Product</li>
                            <li><span>{{$order->customer_limit}}</span> Customer</li>
                            <li><span>Setting Option</span> ~{{($order->setting_option=='1') ? 'Yes' : 'No'}}</li>
                            <li><span>Payment Option</span> ~{{($order->payment_option=='1') ? 'Yes' : 'No'}}</li>
                            <li><span>Referral Option</span> ~{{($order->referral_option=='1') ? 'Yes' : 'No'}}</li>
                            <li><span>Reward Option</span> ~{{($order->reward_option=='1') ? 'Yes' : 'No'}}</li>
                            <li><span>Subscription Option</span> ~{{($order->subscription_option=='1') ? 'Yes' : 'No'}}</li>
                            <li><span>Sales Report</span> ~{{($order->sales_report=='1') ? 'Yes' : 'No'}}</li>
                            <li><span>GST Report</span> ~{{($order->gst_report=='1') ? 'Yes' : 'No'}}</li>
                            <li><span>Profit Option</span> ~{{($order->profit_report=='1') ? 'Yes' : 'No'}}</li>
                            <li><span>Purchase Option</span> ~{{($order->purchase_option=='1') ? 'Yes' : 'No'}}</li>
                            <li><span>Coupon Option</span> ~{{($order->coupon_option=='1') ? 'Yes' : 'No'}}</li>
                            
                            
                        </ul>
                    </div>

                </div>

        @endforeach
        
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
            background: #73b504;
    padding: 11px 11px 11px 11px;
    color: #fff;
    }
    .head-cc{
    width: 230px;
    background: #246c12;
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
    .pricing_table-plan {
    -webkit-box-shadow: 0 0 16px rgb(0 0 0 / 10%);
    -moz-box-shadow: 0 0 16px rgb(0 0 0 / 10%);
    box-shadow: 0 0 16px rgb(0 0 0 / 10%);
    border-radius: 6px;
    text-align: center;
    padding: 30px;
    background: #fff;
}
.pricing_table-plan .plan_top_sec .plan_title {
    color: #2f1c6a;
    font-size: 20px;
}
.pricing_table-plan .price_sec .price {
    margin: 20px auto;
    color: #2f1c6a;
    font-weight: 600;
    font-size: 34px;
}
.pricing_table-plan .cart_sec .add_btn {
    background: #673de6;
    display: block;
    color: #fff;
    padding: 8px;
    border-radius: 34px;
    font-size: 20px;
}
.pricing_table-plan .cart_sec p {
    font-size: 14px;
    color: #999;
    margin-bottom: 0;
}
.pricing_table-plan .feature_sec {
    margin-bottom: 0;
    text-align: center;
    padding: 0;
}
.pricing_table-plan .feature_sec li {
    font-size: 14px;
    margin: 10px auto;
    color: #673de6;
}
li {
    list-style: none;
}
</style>