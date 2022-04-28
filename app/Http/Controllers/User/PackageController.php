<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Hash;
use Auth;
use App\User;
use App\Model\Package;
use App\Model\Userpackage;
use App\Model\Addons;
use App\Model\Userpaymenthistory;
class PackageController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function myPackage(Request $request)
    {
        $userpackage=Userpackage::where(['user_id'=>Auth::id()])->first();
        return view('user.package.index',compact('userpackage'));
    }
    
    public function buyAddons($id,$us_pack,$user_id)
    {
        $userpack=Userpackage::where(['user_id'=>Auth::id()])->first();
        return view('user.package.order',compact('user_id','id','us_pack','userpack'));
    }
    public function addAddons(Request $request,$ad_id,$us_pck,$u_id,$order_id)
    {
    $list=Addons::where(['id'=>$ad_id])->first();

    $userpack = Userpackage::where(['id'=>$us_pck])->first();

    if($list->field_name=='order_limit')
    {
     $val=$userpack->order_limit + $list->field_value;
    }else if($list->field_name=='variant_limit'){
     $val=$userpack->variant_limit + $list->field_value;
    }else if($list->field_name=='product_limit'){
     $val=$userpack->product_limit + $list->field_value;
    }else if($list->field_name=='customer_limit'){
     $val=$userpack->customer_limit + $list->field_value;
    }else if($list->field_name=='store_limit'){
     $val=$userpack->store_limit + $list->field_value;
    }else if($list->field_name=='setting_option' ||$list->field_name=='payment_option' ||$list->field_name=='referral_option' ||$list->field_name=='reward_option' ||$list->field_name=='subscription_option' ||$list->field_name=='sales_report' ||$list->field_name=='gst_report' ||$list->field_name=='profit_report' ||$list->field_name=='purchase_option' ||$list->field_name=='coupon_option'){
     $val=$list->field_value;
    }

    $userpack->update([
    $list->field_name=>$val
    ]);
    $userpack->save();
  
    $adata=array(
     'user_id'=>$u_id,
     'order_id'=>$order_id,
     'type'=>'addons',
     'message'=>'Addon Package Added For '.str_replace("_", " ",$list->field_name),
     'price'=>$list->price,
     'created_at'=>date('Y-m-d H:i:s'),
     'updated_at'=>date('Y-m-d H:i:s'),
    );
    Userpaymenthistory::create($adata);

    return redirect()->route('user.my.package')->with(['success'=>'Data Added Successfully!!']);
    }

    public function renewPackageOrder(Request $request,$pack_id)
    {
        $paymenttype=$request->payment_type;
        $userpack=Userpackage::where(['user_id'=>Auth::id()])->first();
        return view('user.package.reneworder',compact('paymenttype','userpack','pack_id'));
    }
    public function addRenewal($pk_id,$type,$order_id)
    {
    $userpackage=Userpackage::where(['user_id'=>Auth::id()])->first();
    $date1 = $userpackage->ended_date;
    $newDate1 = date('Y-m-d', strtotime($date1. ' + 1 days'));
    $date = $newDate1;
    $package = Package::where(['id'=>$pk_id])->first();
    if($type=='month'){
    $newDate = date('Y-m-d', strtotime($date. ' + 1 months'));
    $price=$package->monthly_payment;
    }else{
    $newDate = date('Y-m-d', strtotime($date. ' + 12 months'));
    $price=$package->yearly_payment;
    }

    $check=Userpackage::where(['user_id'=>Auth::id(),'package_id'=>$pk_id])->first();
    $data=array(
            'started_date'=>$date,
            'ended_date'=>$newDate
        );
   
    $check->update($data);
    $check->save();
    

     $adata=array(
     'user_id'=>Auth::id(),
     'order_id'=>$order_id,
     'type'=>'renew',
     'message'=>'Renew Your Package',
     'price'=>$price,
     'created_at'=>date('Y-m-d H:i:s'),
     'updated_at'=>date('Y-m-d H:i:s'),
    );
    Userpaymenthistory::create($adata);

    return redirect()->route('user.my.package')->with(['success'=>'Package Renewal Successfully!!']);
    }
    

    public function upgradePackage(Request $request)
    {

        $packagelist=Package::get();
        // print_r($package);
        // exit;
        $userpack=Userpackage::where(['user_id'=>Auth::id()])->first();
        return view('user.package.upgradepackage',compact('packagelist','userpack'));
    }
    public function updatePackageOrder(Request $request,$id)
    {

        $package=Package::where(['id'=>$id])->first();
        return view('user.package.paymentpage',compact('package'));
    }
    public function updatePackage(Request $request)
    {
            $date = date('Y-m-d');
            $package = Package::where(['id'=>$request->package_id])->first();
            if($request->price_amount=='month'){
            $newDate = date('Y-m-d', strtotime($date. ' + 1 months'));
            $price=$package->monthly_payment;
            }else{
            $newDate = date('Y-m-d', strtotime($date. ' + 12 months'));
            $price=$package->yearly_payment;
            }

            $check=Userpackage::where(['user_id'=>Auth::id()])->first();
            $data=array(
            'started_date'=>date('Y-m-d'),
            'ended_date'=>$newDate,
            'package_id'=>$request->package_id
            );

            $check->update($data);
            $check->save();

            $check->order_limit= $check->order_limit + $package->order_limit;
            $check->variant_limit= $check->variant_limit + $package->variant_limit;
            $check->product_limit= $check->product_limit + $package->product_limit;
            $check->customer_limit= $check->customer_limit + $package->customer_limit;
            $check->store_limit= $check->store_limit + $package->store_limit;
            $check->setting_option=($check->setting_option=='0') ? $package->setting_option : '1';
            $check->payment_option=($check->payment_option=='0') ? $package->payment_option : '1';
            $check->referral_option=($check->referral_option=='0') ? $package->referral_option : '1';
            $check->reward_option=($check->reward_option=='0') ? $package->reward_option : '1';
            $check->subscription_option=($check->subscription_option=='0') ? $package->subscription_option : '1';
            $check->sales_report=($check->sales_report=='0') ? $package->sales_report : '1';
            $check->gst_report=($check->gst_report=='0') ? $package->gst_report : '1';
            $check->profit_report=($check->profit_report=='0') ? $package->profit_report : '1';
            $check->purchase_option=($check->purchase_option=='0') ? $package->purchase_option : '1';
            $check->coupon_option=($check->coupon_option=='0') ? $package->coupon_option : '1';
            $check->save();
          
            $adata=array(
            'user_id'=>Auth::id(),
            'order_id'=>$request->order_id,
            'type'=>'packageupgrade',
            'message'=>'Upgrade Package',
            'price'=>$price,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            );
            Userpaymenthistory::create($adata);

            return redirect()->route('user.my.package')->with(['success'=>'Package Upgrade Successfully!!']);
    }
}
