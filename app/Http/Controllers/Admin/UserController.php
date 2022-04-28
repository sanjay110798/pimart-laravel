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
use App\Model\Userpaymenthistory;
use App\Model\UserReg;
use App\Model\Country;
use App\Model\State;
use App\Model\City;
use Illuminate\Http\File;
class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function regList(Request $request)
    {
        $userreg=UserReg::orderBy('id','desc')->get();
        return view('admin.user.reglist',compact('userreg'));
    }
    public function paymentList(Request $request)
    {
        $userreg=Userpaymenthistory::orderBy('id','desc')->get();
        return view('admin.user.paymenthistory',compact('userreg'));
    }
     
    public function add(Request $request)
    {
         $country=Country::get();
         $state=State::get();
         return view('admin.user.addreglist',compact('country','state'));
    }
    public function addRegistration(Request $request)
    {
         $validator = Validator::make($request->all(), [

            'name' => 'required',
            'email' => 'required|email|unique:users',
            'mobile' => 'required',
            'password' => 'required|min:6',
          
        ]);


        if ($validator->fails()) {

            return redirect()->back()

            ->withErrors($validator)

            ->withInput();

        }
        if($request->have_domian=='1'){
        $d=explode(".", $request->domain_name);
        }else{
        $d=explode(".", $request->sub_domain_name);
        }
        
        if($d[0]=='www'){
            $databse=$d[1];
        }else{
            $databse=$d[0];
        }
        $host='localhost';
        $user='pima_pmart';
        $pass='@xkEfEeq@6yF3qMF';
        $dbname=$databse;
        $checkData=UserReg::where(['databse_name'=>$databse])->first();
        if($checkData)
        {
            return redirect()->back()->with(['error'=>'Sorry Databse Already Exsist!!']);
        }
        $user=User::create([
            'role'=>'User',
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>hash::make($request->password),
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);
        $userReg=UserReg::create([
            'user_id'=>$user->id,
            'name'=>$request->name,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
            'user_password'=>$request->password,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
        ]);

        $userReg->country=$request->country_name;
        $userReg->state=$request->state;
        $userReg->city=$request->city;
        $userReg->app_color=$request->app_color;
        $userReg->business_category=$request->b_category;
        $userReg->business_name=$request->b_name;
        $userReg->gstn=$request->gstn;
        $userReg->address=$request->address;
        $userReg->app_info=$request->app_info;
        $userReg->have_domain=($request->have_domian=='1') ? '1' : '0';
        $userReg->use_subdomain=($request->have_domian=='2') ? '1' : '0';
        $userReg->domain_name=($request->have_domian=='1') ? $request->domain_name : $request->sub_domain_name;
        $userReg->hostname=$host;
        $userReg->databse_name=$databse;
        $userReg->user_name=$user;
        $userReg->password=$pass;
        $userReg->save();

        $package=Package::where(['id'=>'1'])->first();
        $date = date('Y-m-d');
        $newDate = date('Y-m-d', strtotime($date. ' + 14 days'));
        $data=array(
        'user_id'=>$user->id,
        'package_id'=>'1',
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
        Userpackage::create($data);

        return redirect()->route('admin.user.registration')->with(['success'=>'User Added Successfully!!']);
    }
   
    public function regListDelete($id)
    {
        $pack=UserReg::where(['id'=>$id])->first();   
        $user=User::where(['id'=>$pack->user_id])->first();
        $userpack=Userpackage::where(['user_id'=>$pack->user_id])->first();
        $userpack->delete();
        $userpack2=Userpaymenthistory::where(['user_id'=>$pack->user_id])->first();
        $userpack2->delete();
        $user=User::where(['id'=>$pack->user_id])->first();
        $user->delete();
        $pack->delete();
        return redirect()->back()->with(['success'=>'Data Deleted Successfully!!']);
    }
    public function paymentListDelete($id)
    {
        $userpack2=Userpaymenthistory::where(['id'=>$id])->first();
        $userpack2->delete();
        return redirect()->back()->with(['success'=>'Data Deleted Successfully!!']);
    }
    public function appRequest(Request $request)
    {
        $userreg=UserReg::orderBy('id','desc')->where(['app_status'=>'1'])->get();
        return view('admin.user.apprequest',compact('userreg'));
    }
    public function appUpload(Request $request,$id)
    {
        $user=UserReg::where(['id'=>$id])->first();
        $user->app_dwn_url=$request->url;
        $user->app_status='2';
        $user->save();

        return redirect()->back()->with(['success'=>'Data Uploaded Successfully!!']);
    }

    
}
