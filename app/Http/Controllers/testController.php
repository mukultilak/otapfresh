<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
Use DB;
Use View;


use Illuminate\Http\Request;

class testController extends Controller {

	function index(){
		$u=DB::table('users')->select('*')->get();

		return View::make('table')->with('ui',$u);
	}

	//

}
