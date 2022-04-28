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
use App\Model\Addons;
class AddonsController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function index(Request $request)
    {
        $addons=Addons::orderBy('id','desc')->get();
        return view('admin.addons.index',compact('addons'));
    }
    public function add(Request $request)
    {
            $data=array(
            'field_name'=>$request->field_name,
            'field_value'=>$request->field_value,
            'price'=>$request->price,
            'created_at'=>date('Y-m-d H:i:s'),
            'updated_at'=>date('Y-m-d H:i:s'),
            );

        Addons::create($data);

        return redirect()->back()->with(['success'=>'Addons Added Successfully!!']);
    }
     public function edit(Request $request,$id)
    {
        $add=Addons::where(['id'=>$id])->first();
        $data=array(
        'field_name'=>$request->field_name,
        'field_value'=>$request->field_value,
        'price'=>$request->price,
        'updated_at'=>date('Y-m-d H:i:s'),
        );
        $add->update($data);
        $add->save();
        return redirect()->back()->with(['success'=>'Addons Updated Successfully!!']);
    }
    public function delete($id)
    {
        $pack=Addons::where(['id'=>$id])->first();
        $pack->delete();
     
        return redirect()->back()->with(['success'=>'Addons Updated Successfully!!']);
    }
    

    
}
