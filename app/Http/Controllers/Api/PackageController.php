<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Session;
use Hash;
use Auth;
use App\User;
use App\Model\Userpackage;
use App\Model\UserReg;
use App\Model\Package;
class PackageController extends Controller
{
	public function registerDetails(Request $request)
	{
		$validator = \Validator::make($request->all(), [
			'email' => 'required',
		]);

		if ($validator->fails()){
			$this->apiResponse['error'] = true;
			$this->apiResponse['message'] = getErrors($validator);
			$this->apiResponse['data']=[];
			return response()->json($this->apiResponse);
		}
		DB::beginTransaction();

		try{
			$data=[];
			$email = $request->email;
			$user=UserReg::where(['email'=>$email])->first();
			if($user)
			{
					
					$data['details']=$user;
					$this->apiResponse['error'] = false;
					$this->apiResponse['message'] = '';
				
			}else{
				$this->apiResponse['error'] = true;
				$this->apiResponse['message'] = 'User Not Found!!';
			}


			$this->apiResponse['data']=$data;
			return response()->json($this->apiResponse);
		}catch(\Exception $e){
			DB::rollback();
			$this->apiResponse['error'] = true;
			$this->apiResponse['message'] = $e->getMessage();
			$this->apiResponse['data']=[];
			return response()->json($this->apiResponse);
		}
	}
	public function UpdateregisterDetails(Request $request)
	{
		$validator = \Validator::make($request->all(), [
			'email' => 'required',
		]);

		if ($validator->fails()){
			$this->apiResponse['error'] = true;
			$this->apiResponse['message'] = getErrors($validator);
			$this->apiResponse['data']=[];
			return response()->json($this->apiResponse);
		}
		DB::beginTransaction();

		try{
			$data=[];
			$email = $request->email;
			$user=UserReg::where(['email'=>$email])->first();
			if($user)
			{
					$user->database_created='1';
					$user->save();
					
					$this->apiResponse['error'] = false;
					$this->apiResponse['message'] = 'Update';
				
			}else{
				$this->apiResponse['error'] = true;
				$this->apiResponse['message'] = 'Not Update!!';
			}


			$this->apiResponse['data']=$data;
			return response()->json($this->apiResponse);
		}catch(\Exception $e){
			DB::rollback();
			$this->apiResponse['error'] = true;
			$this->apiResponse['message'] = $e->getMessage();
			$this->apiResponse['data']=[];
			return response()->json($this->apiResponse);
		}
	}
	public function index(Request $request)
	{
		$validator = \Validator::make($request->all(), [
			'email' => 'required',
		]);

		if ($validator->fails()){
			$this->apiResponse['error'] = true;
			$this->apiResponse['message'] = getErrors($validator);
			$this->apiResponse['data']=[];
			return response()->json($this->apiResponse);
		}
		DB::beginTransaction();

		try{
			$data=[];
			$email = $request->email;
			$user=User::where(['email'=>$email])->first();
			if($user)
			{
				$userPack=Userpackage::where(['user_id'=>$user->id])->first();
				if($userPack)
				{
					$data=$userPack;
					$pack=Package::where(['id'=>$userPack->package_id])->first();
					$data['package_details']=$pack;
					$this->apiResponse['error'] = false;
					$this->apiResponse['message'] = '';
				}else{
					$this->apiResponse['error'] = true;
					$this->apiResponse['message'] = 'Package Not Found!!';
				}
			}else{
				$this->apiResponse['error'] = true;
				$this->apiResponse['message'] = 'User Not Found!!';
			}


			$this->apiResponse['data']=$data;
			return response()->json($this->apiResponse);
		}catch(\Exception $e){
			DB::rollback();
			$this->apiResponse['error'] = true;
			$this->apiResponse['message'] = $e->getMessage();
			$this->apiResponse['data']=[];
			return response()->json($this->apiResponse);
		}

	}

}
