<?php namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Auth;
Use View;
use DB;
use App\scope;
use App\Notice;


class NoticeController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		if(Auth::user()->type==3)
		{
			return View::make('notice.inde')->with('layout','tpo.layout.notice');
		}
	}
	

	public function register_notice(Request $req)
	{
		echo "OK";
	}



	public function regi1ster_notice(Request $req)
	{
		if(Auth::user()->type==3)
		{
			if(Auth::user()->status==1)
			{
			$validator=Validator::make(
				array(					
					'ntitle'=>$req->ntitle,
					'ndesc'=>$req->ndesc,
					'dept'=>$req->dept,
				),
				array(		
					'ntitle'=>'required',
					'ndesc'=>'required',
					'dept'=>'required'
					)
				);

			if($validator->fails()){
				return redirect('notice')->with('error','Please fill all the fields before submitting.');
			}
			else{
				$date=date('Y:m:d H:i:s');
				$data=array(
					'scope'=>$req->dept,
					'title'=>$req->ntitle,
					'desc'=>$req->ndesc,
					'author'=>Auth::user()->gr_no,
					'created_at'=>$date,
					'updated_at'=>$date
					);
				

					
					if(DB::table('notices')->insert($data))
					{
						return redirect('notice')->with('success','Notice has been succesfully created !');
					}
					else
					{
						return redirect('notice')->with('error','Something went wrong , please try again later!');
					}
					
				}

			}
		}
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
				$res['']='Select Department';
			}
		}
		
		return view('ajax/multi_dept')->with('res',$res);	
	}

}
