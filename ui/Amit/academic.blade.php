
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />

	<title>Student Personal Details</title>

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
  		<li role="presentation" class="active"><a href="#"> Academic Details</a></li>
        <li role="presentation" ><a href="other">Other Details</a></li>
          <li role="presentation" ><a href="career">Career Options</a></li>
	</ul>
	
	<div class="panel panel-info">
		<div class="panel-heading">
			<h3 class="panel-title"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Add academic Details</h3>
		</div>
		<div class="panel panel-default">
  <div class="panel-heading">GR No.82726252524424</div>
  <div class="panel-body">
  <div class="col-xs-4">
  <input class="form-control" id="tn" type="text" placeholder="10th Percentage(Example 75)" >
</div>
<div class="col-xs-4">
  <input class="form-control" id="tw" type="text"  placeholder="12th percentage(Example 75)">
</div>
<br><br />
    <div class="panel panel-default">
  <div class="panel-heading">Semister Marks</div>
  <div class="panel-body">
  <div class="col-xs-4">
  <input class="form-control" id="sem1" type="text" placeholder="Semister 1" >
</div>
<div class="col-xs-4">
  <input class="form-control" id="sem2" type="text"  placeholder="Semister 2">
</div>
<br><br />
 
  <div class="col-xs-4">
  <input class="form-control" id="sem3" type="text" placeholder="Semister 3" >
</div>
<div class="col-xs-4">
  <input class="form-control" id="sem4" type="text"  placeholder="Semister 4">
</div>
<br><br />
  <div class="col-xs-4">
  <input class="form-control" id="sem5" type="text" placeholder="Semister 5" >
</div>
<div class="col-xs-4">
  <input class="form-control" id="sem6" type="text"  placeholder="Semister 6">
</div>
<br><br />
  <div class="col-xs-4">
  <input class="form-control" id="sem7" type="text" placeholder="Semister 7" >
</div>
<div class="col-xs-4">
  <input class="form-control" id="sem8" type="text"  placeholder="Semister 8">
</div>
<br><br />
</div>
</div>


<div class="panel panel-default">
  <div class="panel-heading">A.T.K.T</div>
  <div class="panel-body">
 <div class="col-xs-4">
  <input class="form-control" id="sem1" type="text" placeholder="Details of Dead A.T.K.T" >
</div>
<div class="col-xs-4">
  <input class="form-control" id="sem2" type="text"  placeholder="Details of live A.T.K.T">
</div>
<br><br />
  <div class="form-group">
    <div class="col-sm-offset-8 col-sm-10">
      <button type="submit" class="btn btn-default">Reset</button>&nbsp;
      <button type="reset" class="btn btn-default">Save & Next>></button>
    </div>
  </div>
  </div>
  </div>
  </div>
</form>
</div>
</div>
		
			</div>
    
		</div>
    	</div>
        
        
        
	</div>
    </div>
    </div>
    
{!!Html::script('ui/includes/jquery/jquery.min.js')!!}    
{!!Html::script('ui/includes/bootstrap/js/bootstrap.min.js')!!}

</body>
</html>


