<?php
namespace App\Http\Controllers;
Use DB;
Use View;
class StaffDashController extends Controller
{
	
	public function show()
	{
		$event = DB::table('event')->select('*')->where('Eid',1)->get();
		$table = DB::table('event')->orderBy('created_at', 'asc')->get();
		return view::make('staff')->with('event',$event[0])->with('e_table',$table);
		//print_r($staff);
	}
	public function notice()
	{
		
		return view('notice');
	}
	public function company()
	{
		
		return view('company');
	}
}
