
@extends($layout)

@section('content')

<div class="container" style="width:auto">
	<div class="panel panel-primary">
		<div class="panel-heading">Publish Notice</div>

		<div class="panel-body"  style="padding: 2em">
			
				<div class="panel panel-default">
					<div class="panel-heading">Previous</div>
					<div class="panel-body" style="max-height:15em;overflow-y:scroll">
						<table class="table table-bordred table-striped" style="width: 100%;">
							<thead>                  
                				<th>Title</th>
                				<th>Description</th>
                				<th>For</th>
                				<th>Author</th>
                				<th>Date</th>
                				<th>Action</th>                    
								<th>Delete</th>
							</thead>

							<tbody>
								<tr>
									
									<td>Abc.</td>
									<td>Some text missing some text missing...</td>
									<td>IOE(Computer)</td>
									<td>Mr. Abc</td>
									<td>17-Feb-2016</td>
									<td><a href="#">Set Active</a></td>
									<td><a href="#">Delete</a></td>
								</tr>

								<tr>
									
									<td>Abc.</td>
									<td>Some text missing some text missing...</td>
									<td>IOE(Computer)</td>
									<td>Mr. Abc</td>
									<td>17-Feb-2016</td>
									<td><a href="#">Set Active</a></td>
									<td><a href="#">Delete</a></td>
								</tr>

								<tr>
									
									<td>Abc.</td>
									<td>Some text missing some text missing...</td>
									<td>IOE(Computer)</td>
									<td>Mr. Abc</td>
									<td>17-Feb-2016</td>
									<td><a href="#">Set Active</a></td>
									<td><a href="#">Delete</a></td>
								</tr>

								<tr>
									
									<td>Abc.</td>
									<td>Some text missing some text missing...</td>
									<td>IOE(Computer)</td>
									<td>Mr. Abc</td>
									<td>17-Feb-2016</td>
									<td><a href="#">Set Active</a></td>
									<td><a href="#">Delete</a></td>
								</tr>

								<tr>
									
									<td>Abc.</td>
									<td>Some text missing some text missing...</td>
									<td>IOE(Computer)</td>
									<td>Mr. Abc</td>
									<td>17-Feb-2016</td>
									<td><a href="#">Set Active</a></td>
									<td><a href="#">Delete</a></td>
								</tr>

								<tr>
									
									<td>Abc.</td>
									<td>Some text missing some text missing...</td>
									<td>IOE(Computer)</td>
									<td>Mr. Abc</td>
									<td>17-Feb-2016</td>
									<td><a href="#">Set Active</a></td>
									<td><a href="#">Delete</a></td>
								</tr>

								
							</tbody>		
						</table>
					</div>
					</div>

				<h3 class="page-header">Create New</h3>
				<div class="panel panel-default">
					<div class="panel-body">
						{!!Form::open(array('url'=>'notice_register','class'=>'form-horizontal','role'=>'form','data-toggle'=>'validator'))!!}


						<div class="form-group">
							<label class="control-label col-sm-2" for="tit">Title:&nbsp;<span class="glyphicon glyphicon-edit"></span></label>
          					<div class="col-sm-10">
            
            					{!!Form::text('ntitle','',array('id'=>'ntitle','placeholder'=>'Title','class'=>'form-control','required'=>'required','data-error'=>'Enter Notice title'))!!}
            					<div class="help-block with-errors"></div>
          					</div>
          					
    					</div>

    					<div class="form-group">
      						<label class="control-label col-sm-2" for="tit">Description:&nbsp;<span class="glyphicon glyphicon-edit"></span></label>
      						<div class="col-sm-10">
        						{!!Form::textarea('ndesc','',array('rows'=>'3','id'=>'ndesc','class'=>'form-control','required'=>'required','data-error'=>'Enter notice content.'))!!}
        						<div class="help-block with-errors"></div>
      						</div>
      						
    					</div>

    					<div class="form-group">
      						<label for="ins" class="control-label col-sm-2">To:</label>
                        	<!-- Single button -->
        					<div class="col-sm-10">
          						<select class="form-control">
          							<option>Comp</option>
          							<option>IT</option>
          							<option>Mech</option>
          						</select>
        					</div>  
    					</div>

    					<div class="form-group">
      						<label class="control-label col-sm-2" for="tit">Notice send with:&nbsp;<span class="glyphicon glyphicon-envelope"></span></label>

      						<div class="col-sm-10">
        						<label class="checkbox-inline"><input type="checkbox" value="">In-System</label>
        						<label class="checkbox-inline"><input type="checkbox" value="">SMS</label>
        						<label class="checkbox-inline"><input type="checkbox" value="">email</label>
      						</div>
    					</div>

    					<div class="form-group">
    						<div div class="col-sm-offset-10 col-sm-10">
      							<button type="reset" class="btn btn-default">Reset</button>&nbsp;
      							<button type="submit" class="btn btn-primary btn-lg">Send</button>
    						</div>
  						</div>

						{!!Form::close()!!}
					</div>
				</div>
			
		</div>
	</div>
</div>
@endsection