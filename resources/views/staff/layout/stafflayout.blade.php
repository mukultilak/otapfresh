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



</head>

<body style="overflow-x:hidden" onload="drawChart()">
<!--Upper Menu-->
@include('staff.common.uppernav')
<!--Upper Menu-->


<div class="container">

	<!--Side Bar-->
	@include('staff.common.sidebar')
	<!--Side Bar-->

	<div class="col-md-12" style="margin-left:90px;">
		<!--Main Content-->
			@yield('content')
		<!--container-->
	</div>
</div>


<!--footer-->
@include('staff.common.footer')
<!--footer-->



{!! HTML::script('ui/includes/jquery/jquery.min.js')!!}
{!! HTML::script('ui/includes/bootstrap/js/bootstrap.min.js')!!}

@yield('script')

</body>
</html>
