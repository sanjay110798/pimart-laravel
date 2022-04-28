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

        <h4 class="card-title">Addons List</h4>

      

        <div class="toolbar">

          
        </div>

        <br>
        <div class="row">
            <div class="col-md-12 text-right mb-3"><a href="#" data-toggle="modal" data-target="#addPModal" class="btn btn-primary">Add New</a></div>
            <div class="modal fade" id="addPModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog" role="document">

            <div class="modal-content">

            <div class="modal-header">

            <h5 class="modal-title">Addons Create</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

            </button>

            </div>

            <div class="modal-body">

            <form role="form" action="{{route('admin.addons.add')}}" method="post">
            @csrf
            <div class="box-body">
            
            <div class="row">                                                                           
            <div class="col-md-12">
                <label class="form-group">Field Name</label>
                <select class="form-control" name="field_name" id="field_name" required>
                    <option value="">----Select----</option>
                    <option value="order_limit">Order Limit</option>
                    <option value="variant_limit">Variant Limit</option>
                    <option value="product_limit">Product Limit</option>
                    <option value="customer_limit">Customer Limit</option>
                    <option value="store_limit">Store Limit</option>
                    <option value="setting_option">Setting Option</option>
                    <option value="payment_option">Payment Option</option>
                    <option value="referral_option">Referral Option</option>
                    <option value="reward_option">Reward Option</option>
                    <option value="subscription_option">Subscription Option</option>
                    <option value="sales_report">Sales Report</option>
                    <option value="gst_report">Gst Report</option>
                    <option value="profit_report">Profit Report</option>
                    <option value="purchase_option">Purchase Option</option>
                    <option value="coupon_option">Coupon Option</option>
                </select>
            </div>
            <div class="col-md-12">
                <label class="form-group">Field Value</label>
                <input type="text" class="form-control" name="field_value" id="field_value" required>
            </div>
           
            <div class="col-md-12">
                <label class="form-group">Price</label>
                <input type="number" class="form-control" name="price" required>
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

                        <th class="text-center">Field Name</th>

                        <th class="text-center">Field Value</th>

                        <th class="text-center">Price</th>                      

                        <th class="text-center">Action</th>

                    </tr>

                </thead>

                <tfoot>

                    <tr>

                        <th class="text-center">Sl No</th>

                        <th class="text-center">Field Name</th>

                        <th class="text-center">Field Value</th>

                        <th class="text-center">Price</th>                      

                        <th class="text-center">Action</th>


                    </tr>

                </tfoot>

                <tbody>

				<?php $i = 1; ?>

                    <?php foreach($addons as $order){ ?>

                    <tr>

						<td class="text-center"><?=$i++;?></td>

                        <td class="text-center"><span style="text-transform: capitalize;">{{str_replace("_", " ",$order->field_name)}}</span></td>

						<td class="text-center">{{$order->field_value}}</td>

						<td class="text-center">{{$order->price}}</td>
						<td class="text-center">

							
                            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#editPModal{{$order->id}}">Edit</a>&nbsp;&nbsp;
                            <a href="{{route('admin.addons.delete',['id'=>$order->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            <!-- ////////// -->

                            <div class="modal fade" id="editPModal{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                            <div class="modal-dialog" role="document">

                            <div class="modal-content">

                            <div class="modal-header">

                            <h5 class="modal-title">Addons Update</h5>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                            <span aria-hidden="true">&times;</span>

                            </button>

                            </div>

                            <div class="modal-body">

                            <form role="form" action="{{route('admin.addons.edit',['id'=>$order->id])}}" method="post">
                            @csrf
                            <div class="box-body">


                            <div class="row">                                                                           
                            <div class="col-md-12">
                            <label class="form-group">Field Name</label>
                            <select class="form-control" name="field_name" id="field_name2" required>
                            <option value="">----Select----</option>
                            <option value="order_limit" <?php if($order->field_name=='order_limit'){echo"selected";}?>>Order Limit</option>
                            <option value="variant_limit" <?php if($order->field_name=='variant_limit'){echo"selected";}?>>Variant Limit</option>
                            <option value="product_limit" <?php if($order->field_name=='product_limit'){echo"selected";}?>>Product Limit</option>
                            <option value="customer_limit" <?php if($order->field_name=='customer_limit'){echo"selected";}?>>Customer Limit</option>
                            <option value="store_limit" <?php if($order->field_name=='store_limit'){echo"selected";}?>>Store Limit</option>
                            <option value="setting_option" <?php if($order->field_name=='setting_option'){echo"selected";}?>>Setting Option</option>
                            <option value="payment_option" <?php if($order->field_name=='payment_option'){echo"selected";}?>>Payment Option</option>
                            <option value="referral_option" <?php if($order->field_name=='referral_option'){echo"selected";}?>>Referral Option</option>
                            <option value="reward_option" <?php if($order->field_name=='reward_option'){echo"selected";}?>>Reward Option</option>
                            <option value="subscription_option" <?php if($order->field_name=='subscription_option'){echo"selected";}?>>Subscription Option</option>
                            <option value="sales_report" <?php if($order->field_name=='sales_report'){echo"selected";}?>>Sales Report</option>
                            <option value="gst_report" <?php if($order->field_name=='gst_report'){echo"selected";}?>>Gst Report</option>
                            <option value="profit_report" <?php if($order->field_name=='profit_report'){echo"selected";}?>>Profit Report</option>
                            <option value="purchase_option" <?php if($order->field_name=='purchase_option'){echo"selected";}?>>Purchase Option</option>
                            <option value="coupon_option" <?php if($order->field_name=='coupon_option'){echo"selected";}?>>Coupon Option</option>
                            </select>
                            </div>
                            <div class="col-md-12">
                            <label class="form-group">Field Value</label>
                            <input type="text" class="form-control" name="field_value" id="field_value2" value="{{$order->field_value}}" required>
                            </div>

                            <div class="col-md-12">
                            <label class="form-group">Price</label>
                            <input type="number" class="form-control" name="price" value="{{$order->price}}" required>
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