<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;
use App\User;
use App\personal;
use App\Academics;
use App\Other;
use App\Job;
use App\Cert;
use App\Career;
use DB;
use Validator;
use View;



class ProfileController extends Controller {

	public function __construct()
	{
		$this->middleware('auth');
	}

	public function personal()
	{
		if(Auth::user()->type==1)
		{
			$per=personal::where('gr_no',Auth::user()->gr_no)->first();
			$u=User::where('gr_no',Auth::user()->gr_no)->first();

			return view::make('student.personal')->with('per',$per)->with('u',$u);
		}
	}

	public function personal_register(Request $req)
	{		
		
		$u=User::where('gr_no',Auth::user()->gr_no)->first();
	
		($req->fname)?$u->fname=$req->fname:0;
		($req->mname)?$u->mname=$req->mname:0;
		($req->lname)?$u->lname=$req->lname:0;

		$u->touch(); //Logging 		

		if(!$per=personal::where('gr_no',Auth::user()->gr_no)->first()){
			$per=new personal;
			$per->gr_no=Auth::user()->gr_no;
		}


		($req->mot)?$per->mothers_maiden_name=$req->mot:0;
		($req->cstate)?$per->cstate=$req->cstate:0;

		if($req->dob)
		{
			$udd=explode('/',$req->dob);					
			$per->dob=$udd[2]."-".$udd[1]."-".$udd[0];
		}
		
		($req->gender)?$per->gender=$req->gender:0;
		($req->nationality)?$per->nationality=$req->nationality:0;
		($req->phone)?$per->phone=$req->phone:0;

		
		($req->other_phone)?$per->other_phone=$req->other_phone:0;
		

					
		($req->paddress)?$per->paddress=$req->paddress:0;
		($req->caddress)?$per->caddress=$req->caddress:0;
		($req->cpin)?$per->cpin=$req->cpin:0;
		($req->cstate)?$per->cstate=$req->cstate:0;		


		$per->touch();	//Logging 
		
		
		

					
		if($per->save() && $u->save())
		{
			return redirect('personal')->with('success','Profile Updated Successfully !');
		}
		else
		{
			return redirect('personal')->with('error','Something went wrong!')->withInput();	
		}
	}

	public function academic()
	{
		if(Auth::user()->type==1)
		{
			$aca=Academics::where('gr_no',Auth::user()->gr_no)->first();			
			return view::make('student.academic')->with('aca',$aca);	
		}
	}

	public function academic_register(Request $req)
	{
		if(!$aca=Academics::where('gr_no',Auth::user()->gr_no)->first()){
			$aca=new Academics;
			$aca->gr_no=Auth::user()->gr_no;
		}
		($req->tenth)?$aca->tenth=$this->valid_int($req->tenth):0;
		($req->twelfth)?$aca->twelfth=$this->valid_int($req->twelfth):0;

		($req->dip_subject)?$aca->dip_subject=$req->dip_subject:0;
		($req->dip_college)?$aca->dip_college=$req->dip_college:0;
		($req->dip_agg)?$aca->dip_agg=$this->valid_int($req->dip_agg):0;

		($req->sem1)?$aca->sem1=$this->valid_int($req->sem1):0;
		($req->sem2)?$aca->sem2=$this->valid_int($req->sem2):0;
		($req->sem3)?$aca->sem3=$this->valid_int($req->sem3):0;
		($req->sem4)?$aca->sem4=$this->valid_int($req->sem4):0;
		($req->sem5)?$aca->sem5=$this->valid_int($req->sem5):0;
		($req->sem6)?$aca->sem6=$this->valid_int($req->sem6):0;
		($req->sem7)?$aca->sem7=$this->valid_int($req->sem7):0;
		($req->sem8)?$aca->sem8=$this->valid_int($req->sem8):0;

		($req->dead_back)?$aca->dead_back=$req->dead_back:0;
		($req->live_back)?$aca->live_back=$req->live_back:0;

		$aca->touch();	//Logging
		if($aca->save())
		{
			return redirect('academic')->with('success','Profile Updated Successfully !');
		}
		else
		{
			return redirect('academic')->with('error','Something went wrong!')->withInput();	
		}		
	}

	public function valid_int($i)
	{
		return preg_replace("/[^0-9]+/","",$i);
	}

	public function other()
	{
		if(Auth::user()->type==1)
		{
			$oth=Other::where('gr_no',Auth::user()->gr_no)->first();
			$job=Job::where('gr_no',Auth::user()->gr_no)->first();
			$cert=Cert::where('gr_no',Auth::user()->gr_no)->first();

			return view::make('student.other')->with('oth',$oth)->with('job',$job)->with('cert',$cert);
		}
	}

	public function other_register(Request $req)
	{
		//Other details
		if(!$oth=Other::where('gr_no',Auth::user()->gr_no)->first()){
			$oth=new Other;
			$oth->gr_no=Auth::user()->gr_no;
		}
		($req->tech_skills)?$oth->tech_skills=$req->tech_skills:0;
		($req->other_skills)?$oth->other_skills=$req->other_skills:0;

		//Job details
		if(!$job=Job::where('gr_no',Auth::user()->gr_no)->first()){
			$job=new Job;
			$job->gr_no=Auth::user()->gr_no;
		}
		($req->job_type)?$job->job_type=$req->job_type:0;
		($req->from)?$job->j_from=$req->from:0;
		($req->to)?$job->j_to=$req->to:0;
		($req->job_desc)?$job->job_desc=$req->job_desc:0;

		//Certifications details
		if(!$cert=Cert::where('gr_no',Auth::user()->gr_no)->first()){
			$cert=new Cert;
			$cert->gr_no=Auth::user()->gr_no;
		}

		($req->cert_title)?$cert->title=$req->cert_title:0;
		($req->cert_auth)?$cert->authority=$req->cert_auth:0;
		($req->cert_desc)?$cert->description=$req->cert_desc:0;

		$cert->touch();		//Logging
		$job->touch();		//Logging
		$oth->touch();		//Logging

		if($job->save()&&$oth->save()&&$cert->save()){
			return redirect('other')->with('success','Profile Updated Successfully !');
		}
		else
		{
			return redirect('other')->with('error','Something went wrong!')->withInput();				
		}
	}

	public function career()
	{
		if(Auth::user()->type==1)
		{
			$car=Career::where('gr_no',Auth::user()->gr_no)->first();
			return view::make('student.career')->with('car',$car);
		}
	}

	public function career_register(Request $req){
		//Career details
		if(!$car=Career::where('gr_no',Auth::user()->gr_no)->first()){
			$car=new Career;
			$car->gr_no=Auth::user()->gr_no;
		}

		($req->career)?$car->description=$req->career:null;

		$car->touch();
		

		if($car->save()){
			return redirect('career')->with('success','Profile Updated Successfully !');
		}
		else
		{
			return redirect('career')->with('error','Something went wrong!')->withInput();				
		}

	}

	

}
