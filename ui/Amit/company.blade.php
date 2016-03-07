<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />

	<title>Company</title>

	{!!Html::style('ui/includes/bootstrap/css/bootstrap.min.css')!!}
	{!!Html::style('ui/includes/styles.css')!!}
   
</head>

<body>

	<div class="container">
    
    <div class="form-group">
        	<div class="col-lg-12">
				<h2 class="page-header">Company Profile</h2> 
			</div>
	</div>
        
    <div class="panel panel-info">
    	<div class="panel-heading">
    		<h3 class="panel-title"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp; Add Conpany Details</h3>
		</div>
		<div class="panel-body">
		<form class="form-horizontal col" role="form">
		<br /><br />
<div class="form-group">
                <label for="grno" class="control-label col-sm-2">Company Name:</label>
                <div class="col-sm-10">
                    <input type = 'text' placeholder="Company name" name = 'cn' id="cname"class="form-control"/>
                </div>
              </div>
               <div class="form-group">
                <label for="mn" class="control-label col-sm-2">Website:</label>
            <div class="col-sm-10">
                    <input type = 'text' name = 'mn' id="mn" placeholder="Enter company website" class= "form-control"/>
              </div>
              </div>

               <div class="form-group">
                <label for="fn" class="control-label col-sm-2">Location:</label>
            <div class="col-sm-10">
                    <input type = 'text' name = 'jl' id="jl" placeholder="Enter Job locations" class= "form-control"/>
              </div>
              </div>

             

               <div class="form-group">
                 <label for="ln" class="control-label col-sm-2">Required Education :</label>
                  <div class="col-sm-10">
                   <label class="checkbox-inline"><input type="checkbox" value="">Diploma</label>
                 <label class="checkbox-inline"><input type="checkbox" value="">BE</label>
                  <label class="checkbox-inline"><input type="checkbox" value="">ME</label>
                <label class="checkbox-inline"><input type="checkbox" value="">MCA</label>
               
                <label class="checkbox-inline"><input type="checkbox" value="">MBA</label>
                </div>
            </div>
               <div class="form-group">
                <label for="mn" class="control-label col-sm-2">Job Description:</label>
            <div class="col-sm-10">
      <textarea class="form-control" placeholder="Type here..." name="des" id="des" cols="30"></textarea>
    </div>
              </div>
              <div class="form-group">
                <label for="fn" class="control-label col-sm-2">Desired Skills:</label>
            <div class="col-sm-10">
      <textarea class="form-control" placeholder="Type here..." name="des" id="des" cols="30"></textarea>
    </div>
              </div>
              <div class="panel panel-default col-sm-10" style="float:right;clear:right">
            <div class="panel-body">
            <div class="col-sm-6">
            <input class="form-control" id="sem1" type="text" placeholder="Eligibility percentage" >
            </div>
            <div class="col-sm-6">
            <input class="form-control" id="sem2" type="text"  placeholder="Salary">
              </div>
                  <br><br />
                  </div>
                  </div>
              
         <div class="panel panel-default " style="overflow:hidden;clear:both">
         <div class="panel-heading"><span class="glyphicon glyphicon-phone-alt"></span>&nbsp; HR Contacts</h3></div>
         <div class="panel-body">
         <div class="col-xs-3">
  <input class="form-control" id="hrname" type="text" placeholder="Enter HR Name" >
</div>
<div class="col-xs-3">
  <input class="form-control" id="contact" type="text"  placeholder="Enter Contact Number">
</div>
<div class="col-xs-3">
  <input class="form-control" id="email" type="text"  placeholder="Enter email ID">
</div>
 <a class="pull-right" href="" ><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Add another HR</a>
         </div>
         </div>
       




    <form class="form-horizontal" role="form">
    <div class="form-group">
    <div div class="col-sm-offset-8 col-sm-10">
      <button type="submit" class="btn btn-default">Reset</button>&nbsp;
      <button type="reset" class="btn btn-default">Save</button>
    </div>
  </div>
  </div>

{!!Html::script('ui/includes/jquery/jquery.min.js')!!}

{!!Html::script('ui/includes/bootstrap/js/bootstrap.min.js')!!}

    
</body>
</html>