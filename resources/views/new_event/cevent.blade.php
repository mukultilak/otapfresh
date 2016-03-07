@extends('tpo.layout.tpolayout')

@section('content')

<div class="container" style="width: auto;">
	<div class='panel panel-default'>
		<div class="panel-body">	

		@if(Session::has('success'))
		<div class="alert alert-success" role="alert">{{Session::get('success')}}</div>
		@endif

		@if(Session::has('error'))
		<div class="alert alert-danger" role="alert">{{Session::get('error')}}</div>
		@endif
			<div class="container"style="width: auto;">
				<div class="row">
					<div class="col-md-6" style="background-color: ">
						
					<div class="panel panel-primary">
					 
						<div id='biglinks' class="panel-heading" style="padding: 3em;text-align: center;font-size: 2em;">
							<a href="new-drive">
							Placement Drive.
							</a>					
						</div>
					
					</div>

					</div>

					<div class="col-md-6" style="">
						
						<div class="panel panel-success" >
					
						<div id="biglinks" class="panel-heading" style="padding: 3em;text-align: center;font-size: 2em;background-color:#3DCC10 ;border:thin solid #3DCC10">
							<a href="new-event">
							Other Event.
							</a>					
						</div>
					
					</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

@section('style')
#biglinks a:link,#biglinks a:visited{
	text-decoration:none;
	color:#fff;

	transition: color 0.5s;

}

#biglinks a:hover,#biglinks a:active{
	color:#32304A;
}


@endsection