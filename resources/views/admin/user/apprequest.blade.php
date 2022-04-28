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

        <h4 class="card-title">App Request List</h4>

      

        <div class="toolbar">

          
        </div>

        <br>

        <div class="material-datatables table-responsive">

            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

                <thead>

                    <tr>

						<th class="text-center">Sl No</th>
                        <th class="text-center">User</th>
                        <th class="text-center">App Name</th>
                        <th class="text-center">App Description</th>  
                        <th class="text-center">App Color</th>                     
                        <th class="text-center">Date</th>
                        <th class="text-center">Action</th>

                    </tr>

                </thead>

                <tfoot>

                    <tr>

                        <th class="text-center">Sl No</th>
                        <th class="text-center">User</th>
                        <th class="text-center">App Name</th>
                        <th class="text-center">App Description</th>  
                        <th class="text-center">App Color</th>                     
                        <th class="text-center">Date</th>
                        <th class="text-center">Action</th>


                    </tr>

                </tfoot>

                <tbody>

				<?php $i = 1; ?>

                    <?php foreach($userreg as $order){ 
                        $user=App\User::where(['id'=>$order->user_id])->first();
                    ?>

                    <tr>

						<td class="text-center"><?=$i++;?></td>

                        <td class="text-center"><span style="text-transform: capitalize;">{{$user->name}}</span></td>
						<td class="text-center">{{$order->app_name}}</td>
                        <td class="text-center">{{$order->app_info}}</td>
                        <td class="text-center"><div style="background:{{$order->app_color}};height: 20px;"></div></td>
                         <td class="text-center">{{date("F j,Y", strtotime($order->updated_at))}}</td>
                      
						<td class="text-center">

                            <a href="#"  data-toggle="modal" data-target="#exampleModal{{$order->id}}" class="btn btn-danger"><i class="fa fa-upload"></i></a>
                            <!-- ////////// -->

						</td>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Upload url</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div>
                        <div class="modal-body">
                        <form method="post" action="{{route('app.upload',['id'=>$order->id])}}" enctype="multipart/form-data" >
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <input type="text" name="url" class="form-control" required style="height: 49px;opacity: 1;position: relative;" placeholder="Enter Url">
                                </div>
                                <div class="col-md-12 text-right">
                                    <button type="submit" class="btn btn-primary">Upload</button>
                                </div>
                            </div>
                        </form>
                        </div>
                       
                        </div>
                        </div>
                        </div>
						
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