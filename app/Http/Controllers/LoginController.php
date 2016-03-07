<?php
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use DB;
use Auth;

class LoginController extends Controller {



	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */

	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('auth/login');
	}

	public function authenticate(Request $request)
	{
		
		$user=array(
			'gr_no'=>$request->grno,
			'password'=>$request->password
			);

	
		if(Auth::attempt($user))
			{
				return redirect()->intended('home');
			}
		else
			{
				return redirect('auth/login')->with('error','Invalid Credentials');
			}


	}

	public function logout()
	{
		Auth::logout();
		return redirect()->intended('auth/login');
	}

	

}
