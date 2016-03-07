<?php namespace App\Http\Controllers;
use Auth;
use App\permission;
use App\User;
use App\scope;
use DB;
Use View;

class HomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Home Controller
	|--------------------------------------------------------------------------
	| This Controller defines the renders the dashboard according to the user.
	| User is associated with his/her scope and authorization level.
	| According to above specified attributes 
	| 
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * Generates the application dashboard to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		//Checking authorization levels and activeness of account


		if(Auth::user()->type==1)
		{										//Student
			if((Auth::user()->status)==1){
				return view('student.dashboard');
			}
			else
			{
				echo "Your account is not Activated yet , please contact to the TPO";
				echo "<br/>";
				echo "<a href='auth/logout'>logout</a>";
			}
			
		}
		else if(Auth::user()->type==2)			//Staff
		{
			if((Auth::user()->status)==1){
				return view("staff.dashboard");
			}
			else
			{
				echo "Your account is not Activated yet , please contact to the TPO";	
				echo "<br/>";
				echo "<a href='auth/logout'>logout</a>";
			}
			
		}

		else if(Auth::user()->type==3)
		{	
			if((Auth::user()->status)==1){
				return view('tpo.dashboard');			//TPO
			}			
			else
			{
				echo "Your account is not Activated yet , please contact to the TPO";	
				echo "<br/>";
				echo "<a href='auth/logout'>logout</a>";
			}
			
		}
		else if(Auth::user()->type==4)
		{			
									//Admin
			if((Auth::user()->status)==1)
			
				//return view('admin.dashboard');
				return view('tpo.dashboard');
			}			
			else
			{
				echo "Your account is not Activated. Please contact your software vendor";	
				echo "<br/>";
				echo "<a href='auth/logout'>logout</a>";
			}
		}
		

	

	

}


