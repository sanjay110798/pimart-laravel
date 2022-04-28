<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Hash;
use Auth;
use App\User;

class LoginController extends Controller
{
	public function login(Request $request)
    {
        if(Auth::check()){
			return redirect()->route('user.dashboard');    
		} else {
			return view('user.login');
		}
    }
    public function autologin(Request $request)
    {
    	$admin_email=$request->email;
    	$admin_pass=$request->password;

    	$this->validate(
			$request,
			[
				'email'=>'required',
				'password'=>'required',
			],
			[
				'email.required'=>'Enter E-Mail',
				'password.required'=>'Enter the password',
			]

		);
    	$check=User::where(['email'=>$request->email])->first();
    	if(!$check){
    		return redirect()->back()->with(['error'=>'Sorry !!Your Account Not Found!!']);
    	}
    	if($check->status=='0'){
    		return redirect()->back()->with(['error'=>'Sorry !!Your Account Is No Approved!!']);
    	}
    	$credentials = $request->only('email', 'password');
 
        if (Auth::attempt($credentials)) {
        
            return redirect()->route('user.my.package');
        }
    	else {
             return redirect()->back()->with(['error'=>'Ivalid email and password']);
    	}
    }
    public function checkLogin(Request $request)
    {
    	$admin_email=$request->email;
    	$admin_pass=$request->password;

    	$this->validate(
			$request,
			[
				'email'=>'required',
				'password'=>'required',
			],
			[
				'email.required'=>'Enter E-Mail',
				'password.required'=>'Enter the password',
			]

		);
    	$check=User::where(['email'=>$request->email])->first();
    	if(!$check){
    		return redirect()->back()->with(['error'=>'Sorry !!Your Account Not Found!!']);
    	}
    	if($check->status=='0'){
    		return redirect()->back()->with(['error'=>'Sorry !!Your Account Is No Approved!!']);
    	}
    	$credentials = $request->only('email', 'password');
 
        if (Auth::attempt($credentials)) {
        
            return redirect()->route('user.dashboard');
        }
    	else {
             return redirect()->back()->with(['error'=>'Ivalid email and password']);
    	}
    }
}
