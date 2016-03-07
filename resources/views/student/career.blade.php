@extends('student.layout.edit_profile_layout')
@section('tabs')
 <div style="padding: 2em">
 <div class="container" style="width: auto;">


 {!!Form::open(array('url'=>'career_register','class'=>'form','role'=>'form'))!!}
<div class="row">
@if(Session::has('success'))                    
        <div style="" id="login-alert" class="alert alert-success col-sm-12">
            {{Session::get('success')}}
        </div>
    @endif


    @if(Session::has('error'))
        <div style="" id="login-alert" class="alert alert-warning col-sm-12">
            {{Session::get('error')}}
        </div>
    @endif
 </div>  



 	<div class="row">

	<div class="panel panel-default">
  		<div class="panel-heading">Future Career Options</div>
  		<div class="panel-body">
  			<div class="container" style="width: auto;">
  				<div class="row">
  					<div class="form-group">
  					<div class="radio">
  						<label>
              {!!Form::radio('career', 'Job',($car)?(($car->description=='Job')?true:null):true)!!}
              Job</label>
					</div>
		
					<div class="radio">
  						<label>
              {!!Form::radio('career', 'Higher Studies',($car)?(($car->description=='Higher Studies')?true:null):null)!!}
              Higher Studies</label>
					</div>
		
					<div class="radio">
  						<label>
                {!!Form::radio('career', 'Entrepreneurship',($car)?(($car->description=='Entrepreneurship')?true:null):null)!!}
              Entrepreneurship</label>
					</div>
					</div>
  					
  				</div>


		
				<div class="row">
    				<div class="col-md-offset-9 col-md-12 row" style="padding-left: 4.8em">
      					
      					<button type="submit" class="btn btn-primary btn-lg">Save&nbsp;<span class="glyphicon glyphicon-floppy-disk"></span></button>
    				</div>                            
				</div>

				<div class="row">&nbsp;</div>
				{!!Form::close()!!}
		</div>
	</div>

	</div>
</div>
</div>
</div>
</div>
@endsection


@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#career').addClass('active');
        });


    </script>
@endsection