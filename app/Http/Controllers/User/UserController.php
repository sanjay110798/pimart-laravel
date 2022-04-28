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
use App\Model\Userpaymenthistory;
use App\Model\UserReg;
use App\Model\Country;
use App\Model\State;
use App\Model\City;
class UserController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	
    public function paymentList(Request $request)
    {
        $userreg=Userpaymenthistory::where(['user_id'=>Auth::id()])->orderBy('id','desc')->get();
        return view('user.paymenthistory',compact('userreg'));
    }
     
    public function paymentListDelete($id)
    {
        $userpack2=Userpaymenthistory::where(['id'=>$id])->first();
        $userpack2->delete();
        return redirect()->back()->with(['success'=>'Data Deleted Successfully!!']);
    }
    public function app(Request $request)
    {
        $userReg=UserReg::where(['user_id'=>Auth::id()])->first();
        return view('user.app.index',compact('userReg'));
    }
    public function saveApp(Request $request)
    {
        $userReg=UserReg::where(['user_id'=>Auth::id()])->first();
        $userReg->app_info=$request->app_info;
        $userReg->app_name=$request->app_name;
        $userReg->app_color=$request->app_color;
        $userReg->app_status='1';
        $userReg->save();

        return redirect()->back()->with(['success'=>'Data Saved Successfully!!']);
    }
    public function activePos(Request $request)
    {
        $userReg=UserReg::where(['user_id'=>Auth::id()])->first();
        return view('user.pos.paymentpage',compact('userReg'));
    }
    public function posStatusChange($order_id){
        $userReg=UserReg::where(['user_id'=>Auth::id()])->first();
        $userReg->pos_status='1';
        $userReg->save();

      $adata=array(
     'user_id'=>Auth::id(),
     'order_id'=>$order_id,
     'type'=>'pos',
     'message'=>'Payment For Active Pos',
     'price'=>'00.00',
     'created_at'=>date('Y-m-d H:i:s'),
     'updated_at'=>date('Y-m-d H:i:s'),
    );
    Userpaymenthistory::create($adata);

        return redirect()->route('user.dashboard')->with(['success'=>'Data Saved Successfully!!']);
    }
    

    
}
