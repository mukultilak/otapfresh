<?php
namespace App\Http\Controllers;
Use DB;
Use View;
class StudentDashController extends Controller
{
	
	public function studDb()
	{
		//return view('student');
	}

	public function show()
	{
		

	//use model instead of DB		
		
  	$notice=DB::table('notice')->select('*')->where('Nid',1)->get();
  	$event = DB::table('event')->select('*')->where('Eid',1)->get();
  	$results = DB::table('results')->select('*')->where('Rid',1)->get();
  	$table = DB::table('event')->orderBy('created_at', 'asc')->get();
 	return view::make('student')->with('notice',$notice[0])->with('event',$event[0])->with('results',$results[0])->with('e_table',$table);
     //print_r($table);
	}

	public function message()
	{
		
		return view('message');
	}

	

}
?>