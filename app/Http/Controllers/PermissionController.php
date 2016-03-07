<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use App\user;
use App\scope;
use App\permission;
Use View;

use Illuminate\Http\Request;

class PermissionController extends Controller {
	
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function index()
	{
		if(Auth::user()->type==4)
		{
			
			if((Auth::user()->status)==1)
			{
			$per=permission::where('authority',Auth::user()->scope);
			if(count($per)>0)
				{
					
					$per_obj=new permission;
					$usr_obj=new User;
					$scp_obj=new scope;

					$rows=permission::select(array('gr_no'))->where('authority',Auth::user()->scope)->get();
					
					for($i=0;$i<count($per);$i++)
					{
						$rr[$i]['gr_no']= $rows[$i]->gr_no;
						$rr[$i]['fname']=$usr_obj->select(array('fname'))->where('gr_no',$rows[$i]->gr_no)->pluck('fname')." ".$usr_obj->select(array('lname'))->where('gr_no',$rows[$i]->gr_no)->pluck('lname');
						$rr[$i]['type']=$usr_obj->select(array('type'))->where('gr_no',$rows[$i]->gr_no)->pluck('type');

						$temp=$usr_obj->select(array('scope'))->where('gr_no',$rows[$i]->gr_no)->pluck('scope');
						$exp=explode('.', $temp);
						$inst=$scp_obj->select(array('desc'))->where('scope',$exp[0])->pluck('desc');
						$dept=$scp_obj->select(array('desc'))->where('scope',$temp)->pluck('desc');
						$rr[$i]['scope']=$inst."(".$dept.")";
					}
				return View::make('admin.permission')->with('result',$rr);			 						
				}
				else{
					return View::make('admin.permission')->with('result',null);			 						
				}			
			}

		}
		elseif (Auth::user()->type==3) //TPO 
		{
			if((Auth::user()->status)==1)
			{
			$per=permission::where('authority',Auth::user()->scope)->get();
			
			
			if(count($per)>0)
				{
					
					$per_obj=new permission;
					$usr_obj=new User;
					$scp_obj=new scope;

					$rows=permission::select(array('gr_no'))->where('authority',Auth::user()->scope)->get();
					
					for($i=0;$i<count($per);$i++)
					{
						$rr[$i]['gr_no']= $rows[$i]->gr_no;
						$rr[$i]['fname']=$usr_obj->select(array('fname'))->where('gr_no',$rows[$i]->gr_no)->pluck('fname')." ".$usr_obj->select(array('lname'))->where('gr_no',$rows[$i]->gr_no)->pluck('lname');
						$rr[$i]['type']=$usr_obj->select(array('type'))->where('gr_no',$rows[$i]->gr_no)->pluck('type');

						$temp=$usr_obj->select(array('scope'))->where('gr_no',$rows[$i]->gr_no)->pluck('scope');
						$exp=explode('.', $temp);
						$inst=$scp_obj->select(array('desc'))->where('scope',$exp[0])->pluck('desc');
						$dept=$scp_obj->select(array('desc'))->where('scope',$temp)->pluck('desc');
						$rr[$i]['scope']=$inst."(".$dept.")";
					}
					
				return View::make('tpo.permission')->with('result',$rr);			 						
				}	
				else
				{
					return View::make('tpo.permission')->with('result',null);			 						
				}
					
			}
		}
		elseif (Auth::user()->type==2) //Staff 
		{
			if((Auth::user()->status)==1)
			{
			$per=permission::where('authority',Auth::user()->scope)->get();
			
			
			if(count($per)>0)
				{
					
					$per_obj=new permission;
					$usr_obj=new User;
					$scp_obj=new scope;

					$rows=permission::select(array('gr_no'))->where('authority',Auth::user()->scope)->get();
					
					for($i=0;$i<count($per);$i++)
					{
						$rr[$i]['gr_no']= $rows[$i]->gr_no;
						$rr[$i]['fname']=$usr_obj->select(array('fname'))->where('gr_no',$rows[$i]->gr_no)->pluck('fname')." ".$usr_obj->select(array('lname'))->where('gr_no',$rows[$i]->gr_no)->pluck('lname');
						$rr[$i]['type']=$usr_obj->select(array('type'))->where('gr_no',$rows[$i]->gr_no)->pluck('type');

						$temp=$usr_obj->select(array('scope'))->where('gr_no',$rows[$i]->gr_no)->pluck('scope');
						$exp=explode('.', $temp);
						$inst=$scp_obj->select(array('desc'))->where('scope',$exp[0])->pluck('desc');
						$dept=$scp_obj->select(array('desc'))->where('scope',$temp)->pluck('desc');
						$rr[$i]['scope']=$inst."(".$dept.")";
					}
					
				return View::make('staff.permission')->with('result',$rr);			 						
				}	
				else
				{
					return View::make('staff.permission')->with('result',null);			 						
				}
					
			}
		}
		else
		{
			return redirect('home');
		}
				
		}

	}



