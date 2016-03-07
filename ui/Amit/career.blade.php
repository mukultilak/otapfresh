<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />

	<title>Student Career Details</title>

	{!!Html::style('ui/includes/bootstrap/css/bootstrap.min.css')!!}
  {!!Html::style('ui/includes/styles.css')!!}
</head>

<body>

	<div class="container">
    
    <div class="form-group">
        	<div class="col-lg-12">
				<h2 class="page-header">REGISTRATION</h2> 
			</div>
	</div>
        
    <div class="panel panel-info">
    	<div class="panel-heading">
    		<h3 class="panel-title"><span class="glyphicon glyphicon-th-list"></span>&nbsp; Student Details:</h3>
		</div>
    <ul class="nav nav-tabs">
        <li role="presentation" ><a href="personal">Personal Details</a></li>
  		<li role="presentation" ><a href="#"> Academic Details</a></li>
        <li role="presentation" ><a href="other">Other Details</a></li>
          <li role="presentation" class="active"><a href="#">Career Options</a></li>
	</ul>
	
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Add Career Details</h3>
			</div>
<div class="panel panel-default">
  <div class="panel-heading">Future Career Options</div>
  <div class="panel-body">

	<div class="radio">
  <label><input type="radio" name="optradio">Placements</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">MBA Preprations</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">GATE Preprations</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">MS Preprations</label>
</div>
<div class="radio">
  <label><input type="radio" name="optradio">Start-Up</label>
</div>
<div class="form-group">
    <div class="col-sm-offset-8 col-sm-10">
      <button type="submit" class="btn btn-default">Reset</button>&nbsp;
      <button type="reset" class="btn btn-default">Submit</button>
    </div>
  </div>
</div>
</div>
</div>

{!!Html::script('ui/includes/jquery/jquery.min.js')!!}
       

{!!Html::script('ui/includes/bootstrap/js/bootstrap.min.js')!!}


</body>
</html>