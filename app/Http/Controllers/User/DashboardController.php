<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Hash;
use Auth;
use App\User;
use App\Model\UserReg;
use App\Model\Userpackage;
class DashboardController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function index(Request $request)
    {
        $userReg=UserReg::where(['user_id'=>Auth::id()])->first();
        $userpackage=Userpackage::where(['user_id'=>Auth::id()])->first();
        return view('user.dashboard',compact('userReg','userpackage'));
    }
    public function logout(Request $request)
    {
    	 Auth::logout();
         return redirect('/user/login');
    }
    public function profile(Request $request)
    {
        return view('user.profile.index');
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
    
}
