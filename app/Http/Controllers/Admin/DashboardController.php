<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Hash;
use Auth;
use App\User;

class DashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function index(Request $request)
    {
        return view('admin.dashboard');
    }
    public function logout(Request $request)
    {
    	 Auth::logout();
         return redirect('/admin/login');
    }
    public function profile(Request $request)
    {
        return view('admin.profile.index');
    }
    public function profileUpdate(Request $request)
    {
        $user=Auth::user();
        if($request->password!='')
        {
            $user->password=Hash::make($request->password);
        }
        $user->name=$request->name;
        $user->email=$request->email;
        if ($request->hasFile('image')) {
        $image = $request->file('image');
        $img = time().'.'.$image->getClientOriginalExtension();
        $destinationPath = public_path('/upload');
        $image->move($destinationPath, $img);
        $user->image=$img;
        }
        $user->save();
        
        return redirect()->back()->with(['success'=>'Profile Update Successfully!!']);
    }
    public function statusChange(Request $request)
    {
        $user=User::where(['id'=>$request->id])->first();
        if($user->status=='1')
        {
            $user->status='0';
            $user->save();
        }else{
            $user->status='1';
            $user->save();
        }
    }
}
