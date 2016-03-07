@extends('student.layout.studentlayout')




@section('style')
	.msg li{
		padding: 2px;
		background-color: red;
	}

	.msg-stack{
		 height: auto;
    	max-height: 300px;
    	overflow-x: hidden;
		}
	</style>
@endsection

@section('content')
<div class="container">

<div class="panel panel-primary">
	<div class="panel-heading">Messages</div>

	<div class="panel-body">
	<div class="container" style="width: auto;">
		<div class="col-md-4">
			<div  class="msg-stack">
				<ul class="list-group">
  					<a href="#"><li class="list-group-item">Cras justo odio</li></a>
  					<a href="#"><li class="list-group-item">Dapibus ac facilisis in</li></a>
  					<a href="#"><li class="list-group-item">Morbi leo risus</li></a>
  					<a href="#"><li class="list-group-item">Porta ac consectetur ac</li></a>
  					<a href="#"><li class="list-group-item">Vestibulum at eros</li></a>
				</ul>
			</div>
		</div>
		<div class="col-md-8">
			<div class="panel panel-default">
				<div class="panel-heading">Ajaz</div>
				<div class="panel-body">
					Messages
				</div>
				<div class="panel-footer" style="overflow: hidden;">

					<form class="form form-inline">

					<div class=" form-group col-md-8">
						<input type="text" class="form-control" style="width: auto" />
					</div>

					<div class="col-md-4 pull-right">
						<input type="submit" class="btn btn-primary" name="submit" value="SEND"/>
					</div>

					</form>
				</div>
			</div>
		</div>
	</div>		
	
	</div>

</div>


@endsection