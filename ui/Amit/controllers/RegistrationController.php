<?php
namespace App\Http\Controllers;
Use DB;
Use View;
Use Illuminate\Http\Request;	
class RegistrationController extends Controller
{
	
	public function personal()
	{
		
		return view('personal');
	}
	public function academic()
	{
		return view('academic');
	}
	public function other()
	{
		return view('other');
	}
	public function career()
	{
		return view('career');
	}
}
?>