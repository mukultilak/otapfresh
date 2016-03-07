<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\permission;

class AdminController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		
		
	}



	public function allow($gr_no)
	{
	
			
			$user=User::where('gr_no',$gr_no)->first();
			$per=permission::where('gr_no',$gr_no)->get();
			$per->toArray();

			if($per[0]->authority==Auth::user()->scope)
			{
				if($user)
				{
					$user->status=1;
					$user->save();
					$per[0]->delete();				
				}
			}
							
		
		return redirect()->back();
	}

	public function deny($gr_no)
	{


			$user=User::where('gr_no',$gr_no);
			$per=permission::where('gr_no',$gr_no)->get();
			$per->toArray();
			if($per[0]->authority==Auth::user()->scope)
			{
				if($user)
				{
					$user->delete();
					$per->toArray();
					$per[0]->delete();			
				}
			}			
		
			return redirect()->back();
	}



}
