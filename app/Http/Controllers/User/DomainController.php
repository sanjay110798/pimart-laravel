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
use App\Model\Addons;
use App\Model\Userpaymenthistory;
class DomainController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
	public function index(Request $request)
    {
        
        return view('user.domain.index');
    }
    
}
