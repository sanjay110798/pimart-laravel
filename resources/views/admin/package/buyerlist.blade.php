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

        <h4 class="card-title">User List</h4>

        <div class="toolbar">

       
        </div>

        <br>
        <div class="row">
            <div class="col-md-12 text-right mb-3"><a href="#" data-toggle="modal" data-target="#addPModal" class="btn btn-primary">Add New</a></div>
            <div class="modal fade" id="addPModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

            <div class="modal-dialog" role="document">

            <div class="modal-content">

            <div class="modal-header">

            <h5 class="modal-title">User Add</h5>

            <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span aria-hidden="true">&times;</span>

            </button>

            </div>

            <div class="modal-body">

            <form role="form" action="{{route('admin.package.buyer.add',['id'=>$id])}}" method="post">
            @csrf
            <div class="box-body">

            
            <div class="row">                                                                           
            <div class="col-md-12">
                <label class="form-group">User List</label>
                <select class="form-control select2" name="user_list" required>
                	<option value="">--Select User--</option>
                	<?php 
                	$userlist=App\User::where('role','!=','Admin')->get();
                	foreach($userlist as $user){?>
                		<option value="<?=$user->id?>"><?=$user->name;?></option>
                	<?php } ?>
                </select>
            </div>
            <div class="col-md-12">
                <label class="form-group">Package limit</label>
                <input type="radio" name="package_limit" value="month" checked>  Monthly
                <input type="radio" name="package_limit" value="year">  Yearly
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

                        <th class="text-center">User Name</th>

                        <th class="text-center">Started Date</th> 

                        <th class="text-center">End Date</th>                 

                        <th class="text-center">Action</th>

                    </tr>

                </thead>

                <tfoot>

                    <tr>

                       <th class="text-center">Sl No</th>

                        <th class="text-center">User Name</th>

                        <th class="text-center">Started Date</th>  

                        <th class="text-center">End Date</th>   

                        <th class="text-center">Action</th>


                    </tr>

                </tfoot>

                <tbody>

				<?php $i = 1; ?>

                    <?php foreach($buyer as $list){ 
                    $user=App\User::where(['id'=>$list->user_id])->first();
                    ?>

                    <tr>

						<td class="text-center">{{$i++}}</td>

                        <td class="text-center">{{$user->name}}</td>

						<td class="text-center">{{date("F j,Y", strtotime($list->started_date))}}</td>
                        <td class="text-center">{{date("F j,Y", strtotime($list->ended_date))}}</td>

						
						<td class="text-center">

							
                            
                            <a href="{{route('admin.package.buyerdelete',['id'=>$list->id,'package_id'=>$id])}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
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