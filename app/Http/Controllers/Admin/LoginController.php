<?php

namespace App\Http\Controllers\Admin;

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
			return redirect()->route('admin.dashboard');    
		} else {
			return view('admin.login');
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
    	
    	$credentials = $request->only('email', 'password');
 
        if (Auth::attempt($credentials)) {
        
            return redirect()->route('admin.dashboard');
        }
    	else {
             return redirect()->back()->with(['error'=>'Ivalid email and password']);
    	}
    }
}
