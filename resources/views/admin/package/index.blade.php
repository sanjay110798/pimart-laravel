@extends('layouts.admin.dashboard.app')

@section('content')
<div class="content">

<div class="container-fluid">

<div class="row">



<div class="col-md-12">

<div class="card">

    <div class="card-header card-header-icon" data-background-color="purple">

        <i class="material-icons">assignment</i>

    </div>

    <div class="card-content">

        <h4 class="card-title">Package List</h4>

        
        <div class="toolbar">

        </div>

        <br>
        <div class="row">
            <div class="col-md-12 text-right mb-3"><a href="#" data-toggle="modal" data-target="#addPModal" class="btn btn-primary">Add New</a></div>
            <div class="modal fade" id="addPModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog" role="document">

            <div class="modal-content">

            <div class="modal-header">

            <h5 class="modal-title">Package Create</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

            </button>

            </div>

            <div class="modal-body">

            <form role="form" action="{{route('admin.package.add')}}" method="post">
             @csrf
            <div class="box-body">
            
            <div class="row">                                                                           
            <div class="col-md-12">
                <label class="form-group">Package Name</label>
                <input type="text" class="form-control" name="package_name" required>
            </div>
            <div class="col-md-12">
                <label class="form-group">Order Limit</label>
                <input type="number" class="form-control" name="order_limit" required>
            </div>

            <div class="col-md-12">
                <label class="form-group">Variant Limit</label>
                <input type="number" class="form-control" name="variant_limit" required>
            </div>
            <div class="col-md-12">
                <label class="form-group">Product Limit</label>
                <input type="number" class="form-control" name="product_limit" required>
            </div>
            <div class="col-md-12">
                <label class="form-group">Store Limit</label>
                <input type="number" class="form-control" name="store_limit" required>
            </div>
            <div class="col-md-12">
                <label class="form-group">Customer Limit</label>
                <input type="number" class="form-control" name="customer_limit" required>
            </div>
            <div class="col-md-6">
                <label class="form-group">Setting Option</label>&nbsp;&nbsp;
                <input type="radio" name="setting_option" value="1" checked>&nbsp;&nbsp;Yes
                <input type="radio" name="setting_option" value="0">&nbsp;&nbsp;No
            </div>
            <div class="col-md-6">
                <label class="form-group">Payment Option</label>&nbsp;&nbsp;
                <input type="radio" name="payment_option" value="1" checked>&nbsp;&nbsp;Yes
                <input type="radio" name="payment_option" value="0">&nbsp;&nbsp;No
            </div>
            <div class="col-md-6">
                <label class="form-group">Referral Option</label>&nbsp;&nbsp;
                <input type="radio" name="referral_option" value="1" checked>&nbsp;&nbsp;Yes
                <input type="radio" name="referral_option" value="0">&nbsp;&nbsp;No
            </div>
            <div class="col-md-6">
                <label class="form-group">Reward Option</label>&nbsp;&nbsp;
                <input type="radio" name="reward_option" value="1" checked>Yes
                <input type="radio" name="reward_option" value="0">&nbsp;&nbsp;No
            </div>
            <div class="col-md-6">
                <label class="form-group">Subscription Option</label>&nbsp;&nbsp;
                <input type="radio" name="subscription_option" value="1" checked>Yes
                <input type="radio" name="subscription_option" value="0">&nbsp;&nbsp;No
            </div>
            <div class="col-md-6">
                <label class="form-group">Sales Report</label>&nbsp;&nbsp;
                <input type="radio" name="sales_report" value="1" checked>Yes
                <input type="radio" name="sales_report" value="0">&nbsp;&nbsp;No
            </div>
            <div class="col-md-6">
                <label class="form-group">GST Report</label>&nbsp;&nbsp;
                <input type="radio" name="gst_report" value="1" checked>Yes
                <input type="radio" name="gst_report" value="0">&nbsp;&nbsp;No
            </div>
            <div class="col-md-6">
                <label class="form-group">Profit Report</label>&nbsp;&nbsp;
                <input type="radio" name="profit_report" value="1" checked>Yes
                <input type="radio" name="profit_report" value="0">&nbsp;&nbsp;No
            </div>
            <div class="col-md-6">
                <label class="form-group">Purchase Option</label>&nbsp;&nbsp;
                <input type="radio" name="purchase_option" value="1" checked>Yes
                <input type="radio" name="purchase_option" value="0">&nbsp;&nbsp;No
            </div>
            <div class="col-md-6">
                <label class="form-group">Coupon Option</label>&nbsp;&nbsp;
                <input type="radio" name="coupon_option" value="1" checked>Yes
                <input type="radio" name="coupon_option" value="0">&nbsp;&nbsp;No
            </div>
             <div class="col-md-12">
                <label class="form-group">Monthly Payment</label>
                <input type="text" class="form-control" name="monthly_payment" required>
            </div>
             <div class="col-md-12">
                <label class="form-group">Yearly Payment</label>
                <input type="text" class="form-control" name="yearly_payment" required>
            </div>
            </div>

            
            </div>


            <div class="box-footer">

            <button type="submit" class="btn btn-primary">Submit</button>

            </div>

            </form>

            </div>

           

            </div>

            </div>

            </div>
        </div>

        <div class="material-datatables">

            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

                <thead>

                    <tr>

						<th class="text-center">Sl No</th>

                        <th class="text-center">Package Name</th>

                        <th class="text-center">Order Limit</th>

                        <th class="text-center">Variant Limit</th>

                        <th class="text-center">Store Limit</th>

                        <th class="text-center">Product Limit</th>

                        <th class="text-center">Customer Limit</th>
                        <th class="text-center">Monthly Payment</th>
                        <th class="text-center">Yearly Payment</th>
                        <th class="text-center">Date</th>

                        <th class="text-center">Buyer List</th>                        

                        <th class="text-center">Action</th>

                    </tr>

                </thead>

                <tfoot>

                    <tr>

                       <th class="text-center">Sl No</th>

                        <th class="text-center">Package Name</th>

                        <th class="text-center">Order Limit</th>

                        <th class="text-center">Variant Limit</th>

                        <th class="text-center">Store Limit</th>

                        <th class="text-center">Product Limit</th>

                        <th class="text-center">Customer Limit</th>
                        <th class="text-center">Monthly Payment</th>
                        <th class="text-center">Yearly Payment</th>

                        <th class="text-center">Date</th>

                        <th class="text-center">Buyer List</th>                          

                        <th class="text-center">Action</th>


                    </tr>

                </tfoot>

                <tbody>

				<?php $i = 1; ?>

                    <?php foreach($package as $order){ ?>

                    <tr>

						<td class="text-center">{{$i++}}</td>

                        <td class="text-center">{{$order->package_name}}</td>

						<td class="text-center">{{$order->order_limit}}</td>

						<td class="text-center">{{$order->variant_limit}}</td>

                         <td class="text-center">{{$order->store_limit}}</td>

						<td class="text-center">{{$order->product_limit}}</td>

                       

                        <td class="text-center">{{$order->customer_limit}}</td>
                        <td class="text-center">{{$order->monthly_payment}}</td>
                        <td class="text-center">{{$order->yearly_payment}}</td>

						<td class="text-center">{{date("H:i A", strtotime($order->created_at))}}</td>

						<td><a href="{{route('admin.package.buyer',['id'=>$order->id])}}" class="btn btn-primary" >Buyer List</a></td>

						<td class="text-center">

							
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editPModal{{$order->id}}">Edit</a>&nbsp;&nbsp;
                           
                            <a href="{{route('admin.package.delete',['id'=>$order->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            
                            <!-- ////////// -->

                            <div class="modal fade" id="editPModal{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                            <div class="modal-dialog" role="document">

                            <div class="modal-content">

                            <div class="modal-header">

                            <h5 class="modal-title">Package Update</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                            </button>

                            </div>

                            <div class="modal-body">

                            <form role="form" action="{{route('admin.package.edit',['id'=>$order->id])}}" method="post">
                            @csrf
                            <div class="box-body">

                            <div class="row">                                                                           
                            <div class="col-md-12">
                            <label class="form-group">Package Name</label>
                            <input type="text" class="form-control" name="package_name" value="{{$order->package_name}}" required>
                            </div>
                            <div class="col-md-12">
                            <label class="form-group">Order Limit</label>
                            <input type="number" class="form-control" name="order_limit" value="{{$order->order_limit}}" required>
                            </div>

                            <div class="col-md-12">
                            <label class="form-group">Variant Limit</label>
                            <input type="number" class="form-control" name="variant_limit" value="{{$order->variant_limit}}" required>
                            </div>
                            <div class="col-md-12">
                            <label class="form-group">Product Limit</label>
                            <input type="number" class="form-control" name="product_limit" value="{{$order->product_limit}}" required>
                            </div>
                            <div class="col-md-12">
                            <label class="form-group">Store Limit</label>
                            <input type="number" class="form-control" name="store_limit" value="{{$order->store_limit}}" required>
                            </div>
                            <div class="col-md-12">
                            <label class="form-group">Customer Limit</label>
                            <input type="number" class="form-control" name="customer_limit" value="{{$order->customer_limit}}" required>
                            </div>
                            <div class="col-md-6">
                            <label class="form-group">Setting Option</label>&nbsp;&nbsp;
                            <input type="radio" name="setting_option" value="1" <?php if($order->setting_option=='1'){echo "checked";}?>>&nbsp;&nbsp;Yes
                            <input type="radio" name="setting_option" value="0" <?php if($order->setting_option=='0'){echo "checked";}?>>&nbsp;&nbsp;No
                            </div>
                            <div class="col-md-6">
                            <label class="form-group">Payment Option</label>&nbsp;&nbsp;
                            <input type="radio" name="payment_option" value="1" <?php if($order->payment_option=='1'){echo "checked";}?>>&nbsp;&nbsp;Yes
                            <input type="radio" name="payment_option" value="0" <?php if($order->payment_option=='0'){echo "checked";}?>>&nbsp;&nbsp;No
                            </div>
                            <div class="col-md-6">
                            <label class="form-group">Referral Option</label>&nbsp;&nbsp;
                            <input type="radio" name="referral_option" value="1" <?php if($order->referral_option=='1'){echo "checked";}?>>&nbsp;&nbsp;Yes
                            <input type="radio" name="referral_option" value="0" <?php if($order->referral_option=='0'){echo "checked";}?>>&nbsp;&nbsp;No
                            </div>
                            <div class="col-md-6">
                            <label class="form-group">Reward Option</label>&nbsp;&nbsp;
                            <input type="radio" name="reward_option" value="1" <?php if($order->reward_option=='1'){echo "checked";}?>>Yes
                            <input type="radio" name="reward_option" value="0" <?php if($order->reward_option=='0'){echo "checked";}?>>&nbsp;&nbsp;No
                            </div>
                            <div class="col-md-6">
                            <label class="form-group">Subscription Option</label>&nbsp;&nbsp;
                            <input type="radio" name="subscription_option" value="1" <?php if($order->subscription_option=='1'){echo "checked";}?>>Yes
                            <input type="radio" name="subscription_option" value="0" <?php if($order->subscription_option=='0'){echo "checked";}?>>&nbsp;&nbsp;No
                            </div>
                            <div class="col-md-6">
                            <label class="form-group">Sales Report</label>&nbsp;&nbsp;
                            <input type="radio" name="sales_report" value="1" <?php if($order->sales_report=='1'){echo "checked";}?>>Yes
                            <input type="radio" name="sales_report" value="0" <?php if($order->sales_report=='0'){echo "checked";}?>>&nbsp;&nbsp;No
                            </div>
                            <div class="col-md-6">
                            <label class="form-group">GST Report</label>&nbsp;&nbsp;
                            <input type="radio" name="gst_report" value="1" <?php if($order->gst_report=='1'){echo "checked";}?>>Yes
                            <input type="radio" name="gst_report" value="0" <?php if($order->gst_report=='0'){echo "checked";}?>>&nbsp;&nbsp;No
                            </div>
                            <div class="col-md-6">
                            <label class="form-group">Profit Report</label>&nbsp;&nbsp;
                            <input type="radio" name="profit_report" value="1" <?php if($order->profit_report=='1'){echo "checked";}?>>Yes
                            <input type="radio" name="profit_report" value="0" <?php if($order->profit_report=='0'){echo "checked";}?>>&nbsp;&nbsp;No
                            </div>
                            <div class="col-md-6">
                            <label class="form-group">Purchase Option</label>&nbsp;&nbsp;
                            <input type="radio" name="purchase_option" value="1" <?php if($order->purchase_option=='1'){echo "checked";}?>>Yes
                            <input type="radio" name="purchase_option" value="0" <?php if($order->purchase_option=='0'){echo "checked";}?>>&nbsp;&nbsp;No
                            </div>
                            <div class="col-md-6">
                            <label class="form-group">Coupon Option</label>&nbsp;&nbsp;
                            <input type="radio" name="coupon_option" value="1" <?php if($order->coupon_option=='1'){echo "checked";}?>>Yes
                            <input type="radio" name="coupon_option" value="0" <?php if($order->coupon_option=='0'){echo "checked";}?>>&nbsp;&nbsp;No
                            </div>
                            <div class="col-md-12">
                            <label class="form-group">Monthly Payment</label>
                            <input type="text" class="form-control" name="monthly_payment" value="{{$order->monthly_payment}}" required>
                            </div>
                            <div class="col-md-12">
                            <label class="form-group">Yearly Payment</label>
                            <input type="text" class="form-control" name="yearly_payment" value="{{$order->yearly_payment}}" required>
                            </div>
                            </div>


                            </div>


                            <div class="box-footer">

                            <button type="submit" class="btn btn-primary">Submit</button>

                            </div>

                            </form>

                            </div>



                            </div>

                            </div>

                            </div>

						</td>

						
						</tr>

					<?php

				  }

				  ?>

                </tbody>

            </table>

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