<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\User;
use  App\Model\UserReg;
use  App\Model\Country;
use  App\Model\State;
use  App\Model\City;
use  App\Model\Userpackage;
use App\Model\Package;
use Auth;
use Hash;
use Validator;
use DB;
class FrontController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('front.index');
    }
    public function signin()
    {
        return view('front.signin');
    }
    public function signup()
    {
        return view('front.signup');
    }
    public function createStore(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'name' => 'required',
            'email' => 'required|email|unique:users',
            'mobile' => 'required',
            'password' => 'required|confirmed|min:6',
            'password_confirmation' => 'required',

        ]);


        if ($validator->fails()) {

            return redirect()->back()

            ->withErrors($validator)

            ->withInput();

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

       
        session(['user_id' => $user->id,'reg_id'=>$userReg->id]);
        // return redirect()->route('user.details')->with(['success'=>'User Created Successfully!!']);
        return redirect()->route('user.domain.details')->with(['success'=>'User Created Successfully!!']);
    }
    public function userDetails(Request $request)
    {
        $country=Country::get();
        $state=State::get();
        return view('front.user_details',compact('country','state'));
    }
    public function storeUserDet(Request $request)
    {
        $user_id=session('user_id');
        $reg_id=session('reg_id');

        $userReg=UserReg::where(['id'=>$reg_id])->first();
        $userReg->country=$request->country_name;
        $userReg->state=$request->state;
        $userReg->city=$request->city;
        $userReg->app_color=$request->app_color;
        $userReg->business_category=$request->b_category;
        $userReg->business_name=$request->b_name;
        $userReg->gstn=$request->gstn;
        $userReg->address=$request->address;
        $userReg->app_info=$request->app_info;
        $userReg->save();

        return redirect()->route('user.domain.details')->with(['success'=>'User Created Successfully!!']);

    }
    public function userDomainDetails(Request $request)
    {
        $country=Country::get();
        $state=State::get();
        return view('front.user_domain_details',compact('country','state'));
    }
    public function selectPackage(){
        $package=Package::get();
        return view('front.select_package',compact('package'));
    }
    public function autologin(){
        $user_id=session('user_id');
        $reg_id=session('reg_id');

        $userReg=UserReg::where(['id'=>$reg_id])->first();
        $credentials['email'] = $userReg->email;
        $credentials['password'] =$userReg->user_password;
        if (Auth::attempt($credentials)) {
        
            return redirect()->route('user.dashboard');
        }
        else {
             return redirect()->back()->with(['error'=>'Ivalid email and password']);
        }
    }
    public function storeDomainDetails(Request $request)
    {   
        $user_id=session('user_id');
        $reg_id=session('reg_id');

        $userReg=UserReg::where(['id'=>$reg_id])->first();
        // if($request->have_domian=='1'){
        // $d=explode(".", $request->domain_name);
        // if($d[0]=='www'){
        //     $databse=$d[1];
        // }else{
        //     $databse=$d[0];
        // }
        // }else{
        // $d=strtolower(str_replace(" ","",$request->sub_domain_name));
        // $databse=$d;
        // }
        
        
        $host='localhost';
        $user=strtolower(str_replace(" ","_",$request->store_name));
        $pass='@xkEfEeq@6yF3qMF';
        $dbname=strtolower(str_replace(" ","_",$request->store_name));
        $databse=strtolower(str_replace(" ","_",$request->store_name));
        // $checkData=UserReg::where(['databse_name'=>$databse])->first();
        // if($checkData)
        // {
        //     return redirect()->back()->with(['error'=>'Sorry Databse Already Exsist!!']);
        // }
        
        $ddm=strtolower(str_replace(" ","",$request->store_name)).'.pimart.com';
        $userReg->store_name=$request->store_name;
        $userReg->have_domain=($request->have_domian=='1') ? '1' : '0';
        $userReg->use_subdomain=($request->have_domian=='2') ? '1' : '0';
        // $userReg->domain_name=($request->have_domian=='1') ? $request->domain_name : $ddm;
        $userReg->domain_name=$ddm;
        $userReg->hostname=$host;
        $userReg->databse_name=$databse;
        $userReg->user_name=$user;
        $userReg->password=$pass;
        $userReg->country=$request->country_name;
        $userReg->state=$request->state;
        $userReg->city=($request->city) ? $request->city : '';
        $userReg->address=$request->address;
        $userReg->save();

       
        return redirect()->route('select.package')->with(['success'=>'Details Store Successfully!!']);
        
    }
    public function userFullDetails(Request $request,$id)
    {
        $reg_id=session('reg_id');
        $user_id=session('user_id');
        $userReg=UserReg::where(['id'=>$reg_id])->first();
        $user=User::where(['id'=>$user_id])->first();
        
        $package=Package::where(['id'=>$id])->first();
        $date = date('Y-m-d');
        $newDate = date('Y-m-d', strtotime($date. ' + 7 days'));
        $data=array(
        'user_id'=>$user_id,
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
        return view('front.user_full_details',compact('userReg','user'));
    }
    public function getState(Request $request)
    {
        $html='';
        $html.='<option value="">Select</option>';
        $state=State::where(['country_id'=>$request->country])->get();
        foreach($state as $st)
        {
            $html.='<option value="'.$st->id.'">'.$st->state_name.'</option>';
        }
        echo $html;
    }
    public function getCity(Request $request)
    {
        $html='';
        $html.='<option value="">Select</option>';
        $state=City::where(['state_id'=>$request->state])->get();
        foreach($state as $st)
        {
            $html.='<option value="'.$st->id.'" data-name="'.$st->city_name.'">'.$st->city_name.'</option>';
        }
        echo $html;
    }
}
