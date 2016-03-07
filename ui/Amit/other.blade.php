<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />

	<title>Student Academic Details</title>
    
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
  		<li role="presentation" ><a href="academic"> Academic Details</a></li>
        <li role="presentation" class="active"><a href="#">Other Details</a></li>
          <li role="presentation" ><a href="career">Career Options</a></li>
	</ul>
	
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Add Other Details</h3>
		</div>
		<div class="panel panel-default">
  <div class="panel-heading">GR No.82726252524424</div>
  <div class="panel-body">
		<div class="form-group">
  <label for="comment">Technical Skills:</label>
  <textarea class="form-control" rows="5"placeholder="Type here..." id="comment"></textarea>
</div>
<div class="form-group">
  <label for="comment">other Activities:</label>
  <textarea class="form-control" rows="5" placeholder="Type here..." id="comment"></textarea>
</div>
    <div class="panel panel-default">
  <div class="panel-heading">Experience</div>
  <div class="panel-body">
  <form class="form-horizontal col" role="form">
  
  <div class="col-md-12">
  <div class="form-group">
    <label class="control-label col-lg-2" for="tit">Type:&nbsp;<span class="glyphicon glyphicon-edit"></span></label>
    <div class="col-sm-10">
  <div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Select Job type
  <span class="caret"></span></button>
  <ul class="dropdown-menu">
    <li><a href="#">Full Time</a></li>
    <li><a href="#">Part Time</a></li>
    <li><a href="#">Intrenship</a></li>
  </ul>
</div>
  </div>
</div>
</div>
<br />


<div class="form-group">
    
    <div class="col-lg-12">
 			 <label class="control-label col-lg-2" for="month">From:&nbsp;<span class="glyphicon glyphicon-edit"></span></label>
  			<input type="month" name="month-year">
	  </div>
	  </div>
	  
	  <div class="form-group">
   <div class="col-lg-12">
 	 
    <label class="control-label col-lg-2" for="month">To:&nbsp;<span class="glyphicon glyphicon-edit"></span></label>
  <input type="month" name="month-year">
  </div>
  </div>
  <div class="form-group">
  <div class="col-md-12">
  <label for="comment">Domain of work/projects:</label>
  <textarea class="form-control" rows="5" placeholder="Type here..." id="comment"></textarea>
  </div><br/>
 <a class="pull-right" href=""><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Add another Experience</a>
</div>
</div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">Certification</div>
  <div class="panel-body">
  <input type="text" class="form-control" name="Cno" placeholder="Certification No."><br><br />
  <input type="text" class="form-control" rows="3" name="Cdet" placeholder="Certification Details"><br>
  <a class="pull-right" href=""><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Add another Certification</a>
  </div>
</div>

<div class="form-group">
    <div class="col-sm-offset-8 col-sm-10">
      <button type="submit" class="btn btn-default">Reset</button>&nbsp;
      <button type="reset" class="btn btn-default">Save & Next>></button>
    </div>
  </div>
   
</form>
</div>

			
            
            

	</div>
    
	</div>          

{!!Html::script('ui/includes/jquery/jquery.min.js')!!}

{!!Html::script('ui/includes/bootstrap/js/bootstrap.min.js')!!}

    
</body>
</html>
