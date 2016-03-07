<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- To set the characters encoding to prevent text display issues -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Viewport Setting -->
<!-- This is to tell mobile devies to initialize web page accordingly -->
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title>Trainig & Placement Automation System</title>

<!--Including Css -->

{!! HTML::style('ui/includes/bootstrap/css/bootstrap.min.css')!!}
<!--Custom Css -->

{!! HTML::style('ui/includes/styles.css')!!}

<!--Fonts-->
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>



</head>

<body >

<div class="container">
	<div class="page-header">
	   	<h1>O.T.A.P</h1>    <small>Online Training and Placemnet System</small>
        
    </div>

    <br />
    <ul>
    	<li><a href="auth/login">Login </a></li>
    	<li><a href="signup">Register </a></li>
    	<li><a href="staff-signup">Staff Register </a></li>
    </ul>


            
   
</div>
<!-- including JQuery Plugins -->
<!--Reason to include JS files over here is to reduce Load time -->

{!! Html::script('ui/includes/jquery/jquery.min.js')!!}

{!! Html::script('ui/includes/bootstrap/js/bootstrap.min.js')!!}



</body>
</html>
