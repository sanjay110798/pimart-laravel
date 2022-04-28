<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Hash;
use Auth;
use App\User;
use App\Model\Package;
use App\Model\Userpackage;
class PackageController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function index(Request $request)
    {
        $package=Package::orderBy('id','desc')->get();
        return view('admin.package.index',compact('package'));
    }
    public function add(Request $request)
    {
        $data=array(
        'package_name'=>$request->package_name,
        'order_limit'=>$request->order_limit,
        'variant_limit'=>$request->variant_limit,
        'product_limit'=>$request->product_limit,
        'customer_limit'=>$request->customer_limit,
        'store_limit'=>$request->store_limit,
        'setting_option'=>$request->setting_option,
        'payment_option'=>$request->payment_option,
        'referral_option'=>$request->referral_option,
        'reward_option'=>$request->reward_option,
        'subscription_option'=>$request->subscription_option,
        'sales_report'=>$request->sales_report,
        'gst_report'=>$request->gst_report,
        'profit_report'=>$request->profit_report,
        'purchase_option'=>$request->purchase_option,
        'coupon_option'=>$request->coupon_option,
        'monthly_payment'=>$request->monthly_payment,
        'yearly_payment'=>$request->yearly_payment,
        'created_at'=>date('Y-m-d H:i:s'),
        'updated_at'=>date('Y-m-d H:i:s'),
        );

        Package::create($data);

        return redirect()->back()->with(['success'=>'Package Added Successfully!!']);
    }
     public function edit(Request $request,$id)
    {
        $pack=Package::where(['id'=>$id])->first();
        $data=array(
        'package_name'=>$request->package_name,
        'order_limit'=>$request->order_limit,
        'variant_limit'=>$request->variant_limit,
        'product_limit'=>$request->product_limit,
        'customer_limit'=>$request->customer_limit,
        'store_limit'=>$request->store_limit,
        'setting_option'=>$request->setting_option,
        'payment_option'=>$request->payment_option,
        'referral_option'=>$request->referral_option,
        'reward_option'=>$request->reward_option,
        'subscription_option'=>$request->subscription_option,
        'sales_report'=>$request->sales_report,
        'gst_report'=>$request->gst_report,
        'profit_report'=>$request->profit_report,
        'purchase_option'=>$request->purchase_option,
        'coupon_option'=>$request->coupon_option,
        'monthly_payment'=>$request->monthly_payment,
        'yearly_payment'=>$request->yearly_payment,
        'updated_at'=>date('Y-m-d H:i:s'),
        );

        $pack->update($data);
        $pack->save();
        return redirect()->back()->with(['success'=>'Package Updated Successfully!!']);
    }
    public function delete($id)
    {
        $pack=Package::where(['id'=>$id])->first();
        $check=Userpackage::where(['package_id'=>$id])->get();
        if(count($check) > 0)
        {
         return redirect()->back()->with(['error'=>'User Already Buy This Package!!']);
        }
        $pack->delete();
     
        return redirect()->back()->with(['success'=>'Package Updated Successfully!!']);
    }
    public function buyer($id)
    {
        $buyer=Userpackage::where(['package_id'=>$id])->get();
        return view('admin.package.buyerlist',compact('buyer','id'));
    }
    public function buyerDelete($id,$pack_id)
    {
        $check=Userpackage::where(['id'=>$id])->first();
        $check->delete();

        return redirect()->route('admin.package.buyer',['id'=>$pack_id])->with(['success'=>'Data Deleted Successfully!!']);
    }
    public function buyerAdd(Request $request,$id)
    {
    $check=Userpackage::where(['user_id'=>$request->user_list])->first();
    $package=Package::where(['id'=>$id])->first();
    $date = date('Y-m-d');
    if($request->package_limit=='month'){
    $newDate = date('Y-m-d', strtotime($date. ' + 1 months'));
    }else{
    $newDate = date('Y-m-d', strtotime($date. ' + 12 months'));
    }
    $data=array(
    'user_id'=>$request->user_list,
    'package_id'=>$id,
    'order_limit'=>$package->order_limit,
    'variant_limit'=>$package->variant_limit,
    'product_limit'=>$package->product_limit,
    'customer_limit'=>$package->customer_limit,
    'store_limit'=>$package->store_limit,
    'setting_option'=>$package->setting_option,
    'payment_option'=>$package->payment_option,
    'referral_option'=>$package->referral_option,
    'reward_option'=>$package->reward_option,
    'subscription_option'=>$package->subscription_option,
    'sales_report'=>$package->sales_report,
    'gst_report'=>$package->gst_report,
    'profit_report'=>$package->profit_report,
    'purchase_option'=>$package->purchase_option,
    'coupon_option'=>$package->coupon_option,
    'created_at'=>date('Y-m-d H:i:s'),
    'updated_at'=>date('Y-m-d H:i:s'),
    'started_date'=>date('Y-m-d'),
    'ended_date'=>$newDate
    );
    if($check)
    {
    
        
        $check->update($data);
        $check->save();
    }else{

        Userpackage::create($data);
    }

    return redirect()->route('admin.package.buyer',['id'=>$id])->with(['success'=>'Data Added Successfully!!']);
    }
    

    
}
