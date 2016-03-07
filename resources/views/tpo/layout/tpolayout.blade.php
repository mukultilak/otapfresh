<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- To set the characters encoding to prevent text display issues -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Viewport Setting -->
<!-- This is to tell mobile devies to initialize web page accordingly -->
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title>TPO - Dashboard</title>

{!! HTML::style('ui/includes/bootstrap/css/bootstrap.min.css')!!}
<!--Custom Css -->

{!! HTML::style('ui/includes/styles.css')!!}
{!! HTML::style('ui/includes/bootstrap/css/bootstrap-datetimepicker.css')!!}

{!! Html::script('ui/includes/jquery/jquery.min.js')!!}
{!! Html::script('ui/includes/js/bootstrap.wizard.js')!!}
{!! Html::script('ui/includes/bootstrap/js/bootstrap.min.js')!!}
{!! Html::script('ui/includes/bootstrap/js/moment.js')!!}
{!! Html::script('ui/includes/js/bootstrap-datetimepicker.js')!!}

{!! Html::script('ui/includes/js/validator.min.js')!!}




<!--Fonts-->
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>


<style type="text/css">
  @yield('style')
  @include('tpo.css.side')
</style>



</head>

<body onload="drawChart()">

<!--Upper Menu-->
@include('tpo.common.uppernav')
<!--Upper Menu-->

<div class="container">

<!--Side Bar-->
@include('tpo.common.sidebar')
<!--Side Bar-->


<!--Main Content-->
  <div class="row">
    <div class="container col-md-12 col-md-offset-1">

        @yield('content')  
    </div>
  </div>
</div>


@include('tpo.common.footer')




@yield('script')

<script type="text/javascript" src="https://www.google.com/jsapi"></script>
<script type="text/javascript">
      google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Placement Drive', 'No of Students'],
          ['Registered',     11],
          ['Not Registered',      2],
          ['Eligible',  2],
          ['Not Eligible', 2],
          ['Not Interested',    7]
        ]);

        var options = {
          title: 'Statistics',
          pieHole: 0.4,
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
        chart.draw(data, options);
      }
</script>


<script type="text/javascript">
    google.load("visualization", "1", {packages:["corechart"]});
    google.setOnLoadCallback(drawChart);
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ["Year", "Recruitments", { role: "style" } ],
        ["2011-12", 8.94, "#b87333"],
        ["2012-13", 10.49, "silver"],
        ["2013-14", 19.30, "gold"],
        ["2014-15", 21.45, "color: #e5e4e2"]
      ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "Some Other Stats",
        width: 250,
        height: 200,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.BarChart(document.getElementById("barchart_values"));
      chart.draw(view, options);
  }
</script>

<script type="text/javascript">
  @yield('script')
</script>

</body>
</html>
