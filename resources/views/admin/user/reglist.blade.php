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
            <div class="col-md-12 text-right mb-3"><a href="{{route('admin.user.registration.add')}}" class="btn btn-primary">Add New</a></div>
            
        </div>

        <div class="material-datatables table-responsive">

            <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">

                <thead>

                    <tr>

						<th class="text-center">Sl No</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Mobile</th>  
                        <th class="text-center">Country</th>                      
                        <th class="text-center">State</th>  
                        <th class="text-center">City</th>  
                        <th class="text-center">Address</th> 
                        <th>Package</th> 
                        <th>Status</th>
                        <!-- <th class="text-center">Business Category</th>  
                        <th class="text-center">Business Name</th>  
                        <th class="text-center">GSTN/Tax Code</th>  
                        <th class="text-center">Own Domain</th>  
                        <th class="text-center">Sub Domain</th>  
                        <th class="text-center">Domain</th>  
                        <th class="text-center">App Name</th>  
                        <th class="text-center">App Color</th> -->
                        <th class="text-center">Action</th>

                    </tr>

                </thead>

                <tfoot>

                    <tr>

                        <th class="text-center">Sl No</th>
                        <th class="text-center">Name</th>
                        <th class="text-center">Email</th>
                        <th class="text-center">Mobile</th>  
                        <th class="text-center">Country</th>                      
                        <th class="text-center">State</th>  
                        <th class="text-center">City</th>  
                        <th class="text-center">Address</th>
                        <th>Package</th>   
                       <!--  <th class="text-center">Business Category</th>  
                        <th class="text-center">Business Name</th>  
                        <th class="text-center">GSTN/Tax Code</th>  
                        <th class="text-center">Own Domain</th>  
                        <th class="text-center">Sub Domain</th>  
                        <th class="text-center">Domain</th>
                        <th class="text-center">App Name</th>  
                        <th class="text-center">App Color</th> -->
                        <th class="text-center">Action</th>


                    </tr>

                </tfoot>

                <tbody>

				<?php $i = 1; ?>

                    <?php foreach($userreg as $order){ 
                    $cn=App\Model\Country::where(['id'=>$order->country])->first();
                    $sta=App\Model\State::where(['id'=>$order->state])->first();
                    $cty=App\Model\City::where(['id'=>$order->city])->first();
                    $upackage=App\Model\Userpackage::where(['user_id'=>$order->user_id])->first();
                    $package=App\Model\Package::where(['id'=>$upackage->package_id])->first();
                    $user=App\User::where(['id'=>$order->user_id])->first();
                    ?>

                    <tr>

						<td class="text-center"><?=$i++;?></td>

                        <td class="text-center"><span style="text-transform: capitalize;">{{$order->name}}</span></td>

						<td class="text-center">{{$order->email}}</td>

						<td class="text-center">{{$order->mobile}}</td>
                        <td class="text-center">{{($cn) ? $cn->country_name : ''}}</td>
                        <td class="text-center">{{($sta) ? $sta->state_name : ''}}</td>
                        <td class="text-center">{{($cty) ? $cty->city_name : ''}}</td>
                        <td class="text-center">{{$order->address}}</td>
                        <td class="text-center">{{($package) ? $package->package_name : ''}}</td>
                        <!-- <td class="text-center">{{$order->business_category}}</td>
                        <td class="text-center">{{$order->business_name}}</td>
                        <td class="text-center">{{$order->gstn}}</td>
                        <td class="text-center">{{($order->have_domain=='1') ? 'YES' : 'NO'}}</td>
                        <td class="text-center">{{($order->use_subdomain=='1') ? 'YES' : 'NO'}}</td>
                        <td class="text-center">{{$order->domain_name}}</td>
                        <td class="text-center">{{$order->app_info}}</td> -->
                       <!--  <td class="text-center"><div style="background:{{$order->app_color}};height: 32px;"></div></td> -->
                        <td>
                          
                        <div class="onoffswitch">
                        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox statuschange" data-id="{{$user->id}}" id="myonoffswitch{{$user->id}}" {{($user->status==1) ? 'checked' : '' }}>
                        <label class="onoffswitch-label" for="myonoffswitch{{$user->id}}">
                        <span class="onoffswitch-inner"></span>
                        <span class="onoffswitch-switch"></span>
                        </label>
                        </div>
                        </td>
						<td class="text-center">

                            <a href="{{route('admin.userregister.delete',['id'=>$order->id])}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this item?');">Delete</a>
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
<style type="text/css">
    @charset "UTF-8";
/* RADIOS & CHECKBOXES STYLES */
/* SOURCE: https://gist.github.com/dciccale/1367918 */
/* No more blue blur border */
input {
  outline: none;
}

/* base styles */
input[type=radio],
input[type=checkbox] {
  height: 20px;
  width: 20px;
  vertical-align: middle;
  margin: 0 0.4em 0.4em 0;
  background: white;
  border: 1px solid #AAAAAA;
  -webkit-appearance: none;
}

/* border radius for radio*/
input[type=radio] {
  border-radius: 100%;
}

/* border radius for checkbox */
input[type=checkbox] {
  border-radius: 2px;
}

/* hover state */
input[type=radio]:not(:disabled):hover,
input[type=checkbox]:not(:disabled):hover {
  border: 1px solid #3ac5c9;
}

/* active state */
input[type=radio]:active:not(:disabled),
input[type=checkbox]:active:not(:disabled) {
  border: 1px solid #3ac5c9;
}

/* input checked border color */
input[type=radio]:checked,
input[type=checkbox]:checked {
  border: 1px solid #3ac5c9;
}

input[type=checkbox]:checked:not(:disabled) {
  background: #3ac5c9;
}

/* radio checked */
input[type=radio]:checked:before {
  display: block;
  height: 14px;
  width: 14px;
  position: relative;
  left: 2px;
  top: 2px;
  background: #3ac5c9;
  border-radius: 100%;
  content: "";
}

/* checkbox checked */
input[type=checkbox]:checked:before {
  font-weight: bold;
  color: white;
  content: "✓";
  margin-left: 2px;
  font-size: 14px;
}

/* disabled input */
input:disabled {
  background: rgba(0, 0, 0, 0.3);
}
input:disabled:checked {
  border: 1px solid rgba(0, 0, 0, 0.3);
}

input[type=radio]:disabled:checked:before {
  display: block;
  height: 14px;
  width: 14px;
  position: relative;
  left: 2px;
  top: 2px;
  background: white;
  border-radius: 100%;
  content: "";
}

/* SWITCH STYLES */
/* SOURCE: https://proto.io/freebies/onoff/ */
.onoffswitch {
  position: relative;
  width: 56px;
  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
}

.onoffswitch-checkbox {
  display: none;
}

.onoffswitch-label {
  display: block;
  overflow: hidden;
  cursor: pointer;
  border: 2px solid #FFFFFF;
  border-radius: 20px;
}

.onoffswitch-inner {
  display: block;
  width: 200%;
  margin-left: -100%;
  transition: margin 0.3s ease-in 0s;
}

.onoffswitch-inner:before, .onoffswitch-inner:after {
  display: block;
  float: left;
  width: 50%;
  height: 22px;
  padding: 0;
  line-height: 22px;
  font-size: 12px;
  color: black;
  font-family: Trebuchet, Arial, sans-serif;
  font-weight: bold;
  box-sizing: border-box;
}

.onoffswitch-inner:before {
  content: "ON";
  padding-left: 6px;
  background-color: #3AC5C9;
  color: #FFFFFF;
}

.onoffswitch-inner:after {
  content: "OFF";
  padding-right: 6px;
  background-color: #E85764;
  color: #FFFFFF;
  text-align: right;
}

.onoffswitch-switch {
  display: block;
  width: 12px;
  margin: 5px;
  background: #FFFFFF;
  position: absolute;
  top: 0;
  bottom: 0;
  right: 30px;
  border: 2px solid #FFFFFF;
  border-radius: 20px;
  transition: all 0.3s ease-in 0s;
}

.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-inner {
  margin-left: 0;
}

.onoffswitch-checkbox:checked + .onoffswitch-label .onoffswitch-switch {
  right: 0px;
}
</style>