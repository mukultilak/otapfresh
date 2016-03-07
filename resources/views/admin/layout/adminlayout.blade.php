<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- To set the characters encoding to prevent text display issues -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Viewport Setting -->
<!-- This is to tell mobile devies to initialize web page accordingly -->
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title>Admin - Dashboard</title>

<!--Including Css -->
{!! HTML::style('ui/includes/bootstrap/css/bootstrap.min.css')!!}

<!--Custom Css -->
{!! HTML::style('ui/includes/styles.css')!!}

<style>
 @yield('style')  
 </style>

</head>

<body>



<!--Upper Menu-->
@include('admin.common.uppernav')
<!--Upper Menu-->


<div class="container">

<!--Side Bar-->
@include('admin.common.sidebar')
<!--Side Bar-->


<!--Main Content-->
  <div class="container col-md-12 col-md-offset-1">

        @yield('content')  
    </div>
  </div>
<!--Main Content-->




</div><!--container-->


<!--footer-->
@include('admin.common.footer')
<!--footer-->





<!-- including JQuery Plugins -->
<!--Reason to include JS files over here is to reduce Load time -->
{!! HTML::script('ui/includes/jquery/jquery.min.js')!!}
{!! HTML::script('ui/includes/bootstrap/js/bootstrap.min.js')!!}



</body>
</html>
