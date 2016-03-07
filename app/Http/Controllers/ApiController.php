<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
Use App\Event;
Use App\Notice;
use Illuminate\Http\Request;

class ApiController extends Controller {

	public function __construct()
	{
		//$this->middleware('guest');
	}

	public function ev_scope($scp)
	{
		$data=Event::where('scope',$scp)->get();
		//var_dump($data);
		$data="{\"event\":".$data."}";
		return $data;
	}

	public function not_scope($scp){
		$data=Notice::where('scope',$scp)->get();
		$data="{\"notice\":".$data."}";
		return $data;
	}

}
