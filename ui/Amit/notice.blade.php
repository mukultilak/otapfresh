<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<meta name="viewport" content="width=device-width,initial-scale=1"/>
<title>Create Notice</title>


{!!Html::style('ui/includes/bootstrap/css/bootstrap.min.css')!!}

</head>
<body>
<div class="container">
	<div class="form-group">
		<div class="col-lg-12">
			<h1 class="page-header">Create New Notice</h1>
		</div>
	</div>
	
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp;Student Broadcast</h3>
		</div>
		
		<div class="panel-body">
		<form class="form-horizontal col" role="form">
  <div class="form-group">
    <label class="control-label col-sm-2" for="tit">Notice Title:&nbsp;<span class="glyphicon glyphicon-edit"></span></label>
    <div class="col-sm-10">
      <input type="tit" class="form-control" id="tit" placeholder="Enter Notice Title">
    </div>
  </div>
  
    <div class="form-group">
    <label class="control-label col-sm-2" for="tit">Description:&nbsp;<span class="glyphicon glyphicon-edit"></span></label>
    <div class="col-sm-10">
      <textarea class="form-control" name="des" id="des"placeholder="Type here..." cols="30"></textarea>
    </div>
  </div>
   <div class="form-group">
                        <label for="ins" class="control-label col-sm-2">Sender:</label>
                        <!-- Single button -->
                        <div class="col-sm-10">
                        <div class="btn-group">
                            
                            <select class="form-control">
                            <option>Select your Designation</option>
                      <option>TPO</option>
                      <option>TPO Cordinator</option>
                      <option>other</option>
                    </select>
                        </div>
                        </div>	
                    </div>
                      <div class="form-group">
                        <label for="ins" class="control-label col-sm-2">To:</label>
                        <!-- Single button -->
                        <div class="col-sm-10">
                        <div class="btn-group">
                        <select class="form-control">
                            <option>Select your Reciver</option>
                      <option>Other Institute TPO</option>
                      <option>Department Cordinator</option>
                      <option>Students</option>
                    </select>
                                
                        </div>
                        </div>  
                    </div>
                    

  <form class="form-horizontal" role="form">
  <div class="form-group">
    <label class="control-label col-sm-2" for="tit">Notice send with:&nbsp;<span class="glyphicon glyphicon-envelope"></span></label>
    
    <div class="col-sm-10">
     
                 <label class="checkbox-inline"><input type="checkbox" value="">In-System</label>
                 <label class="checkbox-inline"><input type="checkbox" value="">SMS</label>
                  <label class="checkbox-inline"><input type="checkbox" value="">email</label>
                
               
  </div><br /><br />
  &nbsp;
  <form class="form-horizontal" role="form">
  
 
    <form class="form-horizontal" role="form">
    <div class="form-group">
    <div div class="col-sm-offset-8 col-sm-10">
      <button type="submit" class="btn btn-default">Reset</button>&nbsp;
      <button type="reset" class="btn btn-default">Send</button>
    </div>
  </div>
  <div class="alert alert-success" role="alert">
  <a href="#" class="alert-link">Well done! Your Notice is successfully sent. </a>
</div>
<div class="alert alert-danger" role="alert">
  <a href="#" class="alert-link">Oh snap! Change a few things up and try submitting again.</a>
</div>
  <div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Previous Notices </h3>
		</div>
		 </div>
  <div class="panel-body">
 <div class="col-lg-12">
 <table class="table table-bordered table-striped table-hover">
 <thead>
 <tr>
 <th>Id</th>
 <th>Notice Title</th>
 <th>Description</th>
 <th>Date</th>
 <th>Sender</th>
 <th>Action</th>
</tr>
</thead>
<tbody>
<tr><td>1</td><td>abc</td><td>....</td><td>02-05-2015</td><td>TPO</td><td><span class="glyphicon glyphicon-trash"></span>&nbsp;<span class="glyphicon glyphicon-edit"></span></td></tr>
<tr><td>2</td><td>def</td><td>....</td><td>04-05-2015</td><td>TPO Cordinator</td><td><span class="glyphicon glyphicon-trash"></span>&nbsp;<span class="glyphicon glyphicon-edit"></span></td></tr>
<tr><td>3</td><td>ghi</td><td>....</td><td>08-05-2015</td><td>TPO</td><td><span class="glyphicon glyphicon-trash"></span>&nbsp;<span class="glyphicon glyphicon-edit"></span></td></tr>

</tbody>			
</table>

					
					</form>
					
				</div>
			</div>
		</div>
	</div>
</div>

{!!Html::script('ui/includes/jquery/jquery.min.js')!!}
{!!Html::script('ui/includes/bootstrap/js/bootstrap.min.js')!!}


</body>
</html>