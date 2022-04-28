@extends('layouts.user.dashboard.app')

@section('content')
<div class="container-fluid">
                <section class="details_wrapper">

<div class="row">



<div class="col-md-12">

<div class="card">

    <div class="card-content">

        <h4 class="card-title pl-2 pt-2 pb-2">Payment History</h4>

    
        <div class="material-datatables table-responsive">

            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

                <thead>

                    <tr>

						<th class="text-center">Sl No</th>
                        <th class="text-center">Order Id</th>
                        <th class="text-center">User</th>
                        <th class="text-center">Type</th>
                        <th class="text-center">Message</th>  
                        <th class="text-center">Price</th>                     
                        <th class="text-center">Date</th>
                        <th class="text-center">Action</th>

                    </tr>

                </thead>

              

                <tbody>

				<?php $i = 1; ?>

                    <?php foreach($userreg as $order){ 
                        $user=App\User::where(['id'=>$order->user_id])->first();
                    ?>

                    <tr>

						<td class="text-center"><?=$i++;?></td>
                        <td class="text-center">{{$order->order_id}}</td>
                        <td class="text-center"><span style="text-transform: capitalize;">{{$user->name}}</span></td>
						<td class="text-center">{{$order->type}}</td>
                        <td class="text-center">{{$order->message}}</td>
                        <td class="text-center">{{$order->price}}</td>
                         <td class="text-center">{{date("F j,Y", strtotime($order->updated_at))}}</td>
                      
						<td class="text-center">

                            <a href="{{route('admin.user.paymenthistory.delete',['id'=>$order->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
                            <!-- ////////// -->

                            

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