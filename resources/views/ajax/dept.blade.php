 {!! Form::select('dept', 
	(['' => 'Select Department'] + $res), 
	null, 
	['class' => 'form-control','id'=>'inst','required'=>'required','data-error'=>'Select your Department']) !!}