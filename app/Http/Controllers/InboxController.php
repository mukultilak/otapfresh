<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class InboxController extends Controller {

	function index()
	{
		if(Auth::user()->type==4)
		{
			return View('admin.inbox');
		}

		elseif(Auth::user()->type==3){
			return View('tpo.inbox');	
		}
		elseif(Auth::user()->type==2){
			return View('staff.inbox');	
		}

		elseif(Auth::user()->type==1){
			return View('student.inbox');	
		}

	}

	//

}
