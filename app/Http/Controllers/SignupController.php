<?php 
namespace App\Http\Controllers;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use DB;
use Hash;
use App\permission;
use App\tpo_permission;
use App\scope;
use Input;
use Auth;
use App\User;
/**
* Student registeration 
*/

class SignupController extends BaseController
{
	
	public function index()
	{
		return view('register/stud_signup');
	}
	
	public function fetch_dept()
	{
		$icode=Input::get('icode');
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
		
		return view('ajax/dept')->with('res',$res);	
	}

	/**
		* Display Staff Regiseration page
	*/
	public function staff_signup()
	{
		$s=new scope;
		$s=scope::all()->toArray();
				
		for($i=0;$i<count($s);$i++)
		{
			 if(strlen($s[$i]['scope'])==1){
			 	$list[$s[$i]['scope']]=$s[$i]['desc'];
			 }
		}


		return view('register/staff_signup')->with('institues',$list);
	}


	public function defScope($scp='0.0') //for parameter 2 :: if 1=>get scope ; if 2=>get type
	{
	
		
		$temp1=str_split($scp);
	
		
			if (ctype_alpha($temp1[1])) 
			{
				return redirect('register/stud_signup')->withInput()->with('error','Invalid GR Number');
			}
		
		
		else
		{
			$temp2="";
			$temp2.=$temp1[1];
			$temp2.=$temp1[2];

			$i=(int)$temp2;	

			$temp2=$temp1[3];
			$temp2.=$temp1[4];

			$j=(int)$temp2;

			$k=(string)$i.".".(string)$j;
			return $k;
		}
	}
	

	public function register(Request $request)
	{
		
		$validator=Validator::make(
			array(
				'fname'=>$request->fname,
				'lname'=>$request->lname,
				'gr_no'=>$request->grno,
				'email'=>$request->email,
				'password'=>$request->password,
				'password1'=>$request->password1
				),
			array(
				'fname'=>'required',
				'lname'=>'required',
				'gr_no'=>'required',
				'email'=>'e-mail',
				'password'=>'required',
				'password1'=>'required'
				)
		);

		if($validator->fails())
		{
			return redirect('signup')->withErrors($validator)->withInput();
		}
		else
		{	
			if($request->password!=$request->password1)
			{
				return redirect('signup')->with('error','Password fields should match!')->withInput();
			}
			else
			{
				$cpwd=Hash::make($request->password);
			
				$date=date('Y:m:d H:i:s');

				$scp=$this->defScope($request->grno);


				$data=array(
					'fname'=>$request->fname,
					'mname'=>$request->mname,
					'lname'=>$request->lname,
					'gr_no'=>$request->grno,
					'type'=>'1',
					'email'=>$request->email,
					'scope'=>$scp,
					'password'=>$cpwd,
					'remember_token'=>$request->_token,
					'created_at'=>$date,
					'updated_at'=>$date
					);

				$gr_exists=DB::table('users')->select('gr_no')->where('gr_no',$request->grno)->get();
				$email_exists=DB::table('users')->select('email')->where('email',$request->email)->get();
			
	

				if(count($gr_exists)>0)
				{
					return redirect('signup')->with('error','GR Number is already registered !')->withInput();
				}
				elseif (count($email_exists)>0) 
				{
					return redirect('signup')->with('error','Email is already associated with another entry !')->withInput();
				}
				else
				{
						
					
					if(DB::table('users')->insert($data))
					{
						$per=new permission;
						//////////////////////////////


						$per->gr_no=$data['gr_no'];
						$per->scope=$scp;

						$ath=explode('.',$scp);
						
						$cnt=count($ath);
						$lvl="";
						
						

						$uu=User::where('scope',$scp)->where('type',2);
						
						$rtype=(int)$request->type;

						
						$u1= count($uu);
						

						if($u1>0 && $rtype<2)
						{						
							$alvl=$scp;
						}
						else{
							$uu=User::where('scope',$ath[0]);
							$cnt=count($uu);
							if($cnt>0){
								$alvl=$ath[0];	
							}else{
							$alvl='0';	
							}
							
							
							
						}
						
						
						$per->authority=$alvl;

						$per->type="1";

///////////////////////////////////////
						
						if($per->save()){
							return redirect('signup')->with('success','Registration Successfull !');	
						}
					}
					
					
				}
			}
		}
	}

	
//Staff registeration	
public function sr(Request $request)
	{
		$i= $request->institute;
		$d=$request->dept;
		

		$validator=Validator::make(
			array(
				'gr_no'=>$request->grno,
				'email'=>$request->email,
				'institute'=>$i,
				'type'=>$request->type,

				'password'=>$request->password,
				'password1'=>$request->password1
				),
			array(
				'gr_no'=>'required',
				'email'=>'e-mail',
				'institute'=>'required',
				'password'=>'required',
				'password1'=>'required'
				)
		);

		if($d!=0 || $d!='')
		{
			$scp=$d;
		}
		else
		{
			$scp=$i;
		}

		if($validator->fails())
		{
			return redirect('staff-signup')->withErrors($validator)->withInput();
		}
		else
		{	
			if($request->password!=$request->password1)
			{
				return redirect('staff-signup')->with('error','Password fields should match!')->withInput();
			}
			else
		{	
			if($request->password!=$request->password1)
			{
				return redirect('staff-signup')->with('error','Password fields should match!')->withInput();
			}
			else
			{
				$cpwd=Hash::make($request->password);
				$date=date('Y:m:d H:i:s');




				$data=array(
					'gr_no'=>$request->grno,
					'email'=>$request->email,
					'scope'=>$scp,
					'password'=>$cpwd,
					'remember_token'=>$request->_token,
					'type'=>$request->type,
					'created_at'=>$date,
					'updated_at'=>$date
					);

				$gr_exists=DB::table('users')->select('gr_no')->where('gr_no',$request->grno)->get();
				$email_exists=DB::table('users')->select('email')->where('email',$request->email)->get();
			
	

				if(count($gr_exists)>0)
				{
					return redirect('staff-signup')->with('error','GR Number is already registered !')->withInput();
				}
				elseif (count($email_exists)>0) 
				{
					return redirect('staff-signup')->with('error','Email is already associated with another entry !')->withInput();
				}
				else
				{			
					if(DB::table('users')->insert($data))
					{
						
						
						$per=new permission;
						$per->gr_no=$data['gr_no'];
						$per->scope=$scp;

						$ath=explode('.',$scp);
						
						$cnt=count($ath);
						$lvl="";
						for($i=0;$i<$cnt-1;$i++){
							$lvl=$lvl.$ath[$i];
						}

						

						$uu=User::where('scope',$lvl);
						
						$rtype=(int)$request->type;

						
						$u1= count($uu);
						

						if($u1>1 && $rtype<3)
						{
						
							$alvl=$lvl;
						}
						else{
							$alvl='0';
						}
						
						
						$per->authority=$alvl;
						$per->type=$request->type;
						
						if($per->save())					
						{
							return redirect('staff-signup')->with('success','Registration Successfull !');	
						}
						
					}
						
				}
			}
		

		}
		
}
	}

public function api_auth($u,$p)
{
	$data=false;

	if (Auth::attempt(['gr_no' => $u, 'password' => $p]))
        {
        	
        	
            $data=Auth::user()->where('gr_no',$u)->first();
        }
        
        	return $data;
        
}








}