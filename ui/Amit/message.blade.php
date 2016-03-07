<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1" />

	<title>Message</title>

	{!!Html::style('ui/includes/bootstrap/css/bootstrap.min.css')!!}
	{!!Html::style('ui/includes/styles.css')!!}
   
</head>

<body>

	<div class="container">
    
    <div class="form-group">
        	<div class="col-lg-12">
				<h2 class="page-header">MESSAGE</h2> 
			</div>
	</div>
        
    <div class="panel panel-info">
    	<div class="panel-heading">
    		<h3 class="panel-title"><span class="glyphicon glyphicon-envelope"></span>&nbsp; OTAP Messages:</h3>
		</div>
		<div class="panel-body">
		<form class="form-horizontal col" role="form">
		 <div class="form-group">
    <label class="control-label col-sm-2" for="tit">Message:&nbsp;<span class="glyphicon glyphicon-edit"></span></label>
    <div class="col-sm-10">
      <textarea class="form-control" placeholder="Type your message here..." name="des" id="des" cols="30"></textarea>
    </div>
  </div>
   <div class="form-group">
                        <label for="ins" class="control-label col-sm-2">TO:</label>
                        <!-- Single button -->
                        <div class="col-sm-10">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select your Receiver<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">TPO</a></li>
                                <li><a href="#">staff Cordinator</a></li>
                                <li><a href="#">Students</a></li>
                               </ul>
                        </div>
                        </div><br /><br />
                         <form class="form-horizontal" role="form">
                         <div class="form-group">
    <div div class="col-sm-offset-8 col-sm-10">
      <button type="submit" class="btn btn-default">Reset</button>&nbsp;
      <button type="reset" class="btn btn-default">Send</button>
    </div>
  </div>
                    </div>

{!!Html::script('ui/includes/jquery/jquery.min.js')!!}

{!!Html::script('ui/includes/bootstrap/js/bootstrap.min.js')!!}

    
</body>
</html>