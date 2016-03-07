<?php namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
use App\Event;
use DB;
use App\scope;


class NewEventController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}


	public function index(){
		
	}



	public function cevent()
	{

		if(Auth::user()->type==3)
		{
			return view('new_event.cevent');	
		}
		else
		{
			return redirect('home');
		}
	}

	public function newDrive()
	{
		if(Auth::user()->type==3)
		{
			$user_scope=Auth::user()->scope;

			$markup=$this->fetch_dept($user_scope);
			return view('new_event.drive')->with('dept',$markup);	
		}
		else
		{
			return redirect('home');
		}
	}

	

	function register_drive(Request $req)
	{
		
		$validator=Validator::make(
			array(
								
				'company'=>$req->comp_name,
				'type'=>$req->drive_type,
				
				),
			array(		
				'company'=>'required',
				'type'=>'required'
				)
		);

		if($validator->fails()){
			echo "<script>alert('Please fill all the details')</script>";
		}
		else
		{
			$date=date('Y:m:d H:i:s');

			$dd= $req->timestamp;
			$d1=explode('/',$dd);
			$d2=$d1[0].'-'.$d1[1].'-'.$d1[2];

			$link = md5(microtime().rand());
			$title=$req->comp_name."(".$dd.")";

			$data=array(
				'title'=>$title,
				'scope'=>$req->dept,
				'link'=>$link,		//todo		
				'date'=>$d2,
				'desc'=>$req->desc,
				'type'=>"1",		//placement=1  normal=2
				'venue'=>$req->venue,
				'status'=>'1',				

				'created_at'=>$date,
				'updated_at'=>$date
				);
			
			$data1 = array(
				'comp_name' => $req->comp_name, 
				'percent'=>$req->percent,
				'atkt'=>$req->atkt .".". $req->live,
				'location'=>$req->location,
				'package'=>$req->pkg,
				'link'=>$link,
				'created_at'=>$date,
				'updated_at'=>$date
				);
			$data2 = array(
				'link'=>$link,
				'value'=>$req->todo,
				'created_at'=>$date,
				'updated_at'=>$date
				);
			
			
			
			if(DB::table('events')->insert($data))
			{
				if(DB::table('jobdescs')->insert($data1)){
					if(DB::table('todos')->insert($data2)){
						return redirect('create-event')->with('success','Drive has been succesfully created !');
					}
				}
			}
			else
			{
				return redirect('create-event')->with('error','Something went wrong !');
			}

			
			
			



		}
		//print_r($req[]);

	}

public function fetch_dept($icode)
	{
		$dept=scope::all();
		foreach ($dept as $d) 
		{	
			if(strlen($d['scope'])==3)
			{
				$t=$d['scope'];
				$t1=str_split($t);

				if($t1[0]==$icode)
				{
					$res[$t]=$d['desc'];
				}
				
			}
			else
			{
				//$res['']='Select Department';
			}
		}
		
		return view('ajax/multi_dept')->with('res',$res);
		
	}

	public function newEvent()
	{
		if(Auth::user()->type==3)
		{
			$user_scope=Auth::user()->scope;
			$markup=$this->fetch_dept($user_scope);
			return view('new_event.oevent')->with('dept',$markup);	
		}
		else
		{
			return redirect('home');
		}
	}

	public function RegisterNewEvent(Request $req)
	{
		$title=$req->etitle;
		$date=$req->timestamp;
		$desc=$req->edesc;
		$type="2";
		$scope=$req->dept;
		$venue=$req->venue;
		$date=date('Y:m:d H:i:s');
			
				
		$link = md5(microtime().rand());
		$data = array(
			'title' => $title, 
			'date'=>$date,
			'desc'=>$desc,
			'type'=>$type,
			'scope'=>$scope,
			'venue'=>$venue,
			'link'=>$link,
			'created_at'=>$date,
			'updated_at'=>$date
			);
		$data1 = array(
			'link'=>$link,
			'value'=>$req->dept,
			'created_at'=>$date,
			'updated_at'=>$date
			);

		if(DB::table('events')->insert($data))
		{
			if(DB::table('todos')->insert($data1))
			{
					return redirect('create-event')->with('success','Event has been created succesfully!');
			}

		}

	}
}
