<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- To set the characters encoding to prevent text display issues -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Viewport Setting -->
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title>Student - Dashboard</title>

<!--Including Css -->
<!--Including Css -->
{!! HTML::style('ui/includes/bootstrap/css/bootstrap.min.css')!!}
<!--Custom Css -->
{!! HTML::style('ui/includes/styles.css')!!}
{!! HTML::style('ui/includes/bootstrap/css/bootstrap-datetimepicker.css')!!}
{!! HTML::style('ui/includes/bootstrap/css/bootstrap-tagsinput.css')!!}


<!--Scripts-->
{!! HTML::script('ui/includes/jquery/jquery.min.js')!!}
{!! HTML::script('ui/includes/bootstrap/js/bootstrap.min.js')!!}

{!! Html::script('ui/includes/bootstrap/js/moment.js')!!}

{!! Html::script('ui/includes/js/angular.min.js')!!}
{!! Html::script('ui/includes/js/bootstrap-datetimepicker.js')!!}

{!! Html::script('ui/includes/js/bootstrap-tagsinput.min.js')!!}
{!! Html::script('ui/includes/js/bootstrap-tagsinput-angular.min.js')!!}

{!! Html::script('ui/includes/js/validator.min.js')!!}


</head>

<body style="overflow-x:hidden">

<!--Upper Menu-->
@include('student.common.uppernav')
<!--Upper Menu-->


<div class="container">

	<!--Side Bar-->
	@include('student.common.sidebar')
	<!--Side Bar-->
	<div class="row">
		<div class="col-md-12 col-md-offset-1">
		
		<!--Main Content-->
			@yield('content')
		<!--container-->
		</div>
	</div>
</div>


<!--footer-->
@include('student.common.footer')
<!--footer-->




@yield('script')

</body>
</html>
