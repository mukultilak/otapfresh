<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- To set the characters encoding to prevent text display issues -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Viewport Setting -->
<!-- This is to tell mobile devies to initialize web page accordingly -->
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title>TPO - Dashboard</title>

<!--Including Css -->
{!! HTML::style('ui/includes/bootstrap/css/bootstrap.min.css')!!}

<!--Custom Css -->
{!! HTML::style('ui/includes/styles.css')!!}



</head>

<body onload="drawChart()">
<!--Upper Menu-->

<nav class="nav navbar-default navbar-fixed-top" id='un'>
	<div class="container col-md-12">
    	<div class="navbar-header">
        	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button> 
          
          {!! HTML::image('ui/img/MET.jpg','',array('class'=>'logo'))!!}
          
        </div>
        <div id="navbar" class="navbar-collapse collapse">
        	<ul class="nav navbar-nav">
            	<li class="active"><a href="#">Home &nbsp; <span class="glyphicon glyphicon-home"></span></a></li> 
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notification <span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;<span class="caret"></span></a>
                	<ul class="dropdown-menu">
                    	<li><a href="#">Notification #1</a></li> 
                        <li><a href="#">Notification #2</a></li> 
                        <li><a href="#">Notification #3</a></li> 

                    </ul>
                 </li>
                
                <li><a href="#about">New Event &nbsp;<span class="glyphicon glyphicon-plus-sign"></span></a></li> 

                <li> <form class="navbar-form navbar-left" role="search" id="search">
			  <div class="input-group">
			      <input type="text" class="form-control" placeholder="Search for...">
			      <span class="input-group-btn">
			        <button class="btn btn-default" type="button">
                       	<span style="line-height:1.4" class="glyphicon glyphicon-search"></span>
                    </button>
			      </span>
		      </div><!-- /input-group -->
			</form></li>
			</ul>
            
        
            
            <ul class="nav navbar-nav navbar-right">
            	
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span id="un"></span>  <?php
echo Auth::user()->gr_no;
?>    </span> &nbsp; <span class="glyphicon glyphicon-user"></span>&nbsp;<span class="caret"></span></a>
                	<ul class="dropdown-menu">
                    	<li><a href="#">Account</a></li> 
                        <li><a href="#">Change password</a></li> 

                        <li role="separator" class="divider"></li>
                        <li><a href="auth/logout">Logout </a></li> 
                    </ul>
                 </li>
                
			</ul>
       </div>
   </div>
</nav>

<!--Upper Menu-->


<div class="container">
<!--Side Bar-->
<div id="side-um" class="side-um"></div>
<div class="sidebar col-lg-2 col-md-1" id="sidebar">
<h4 class="col-md-10">Quick Links</h4>
<ul>
	<a href="#"><li><span class="glyphicon glyphicon-folder-open"></span>&nbsp; Student Database </li></a>
   	<a href="#"><li><span class="glyphicon glyphicon-briefcase"></span>&nbsp; Company Profile</li></a>
   	<a href="#"><li><span class="glyphicon glyphicon-bullhorn"></span>&nbsp; Create Notice</li></a>    
   	<a href="#"><li><span class="glyphicon glyphicon-indent-left"></span>&nbsp; Reports</li></a>    
   	<a href="#"><li><span class="glyphicon glyphicon-time"></span>&nbsp; Reminder</li></a>            
   	<a href="#"><li><span class="glyphicon glyphicon-book"></span>&nbsp; History</li></a>        
</ul>
</div>
<!--Side Bar-->


<!--Main Content-->
<div class="col-md-12" style="margin-left:90px;">


    <!--event desc-->
	<div class="col-md-8" style="float:left">
		<div class="panel panel-default">
        	<div class="panel-heading">
            	<span class="glyphicon glyphicon-align-center"></span> &nbsp;01 Jan 2016 , MET's IOE(Campus)
            </div>
            
            <div class="panel-body">
            <h3>Event Title</h3>
            <div class="panel panel-info">
	            <div class="panel-heading">Eligibility Criteria</div>
                <div class="panel-body">
                
                <div class="col-md-6" style="float:left">
                	<h4>Description</h4>
                	<p>
Lorem ipsum dolor sit amet, malis movet te pri. Pri eu invidunt forensibus, ei nemore iuvaret his. Mea dolorum interesset in. Ne nihil eligendi eam.
                    </p>
                  	<h4>Eligibility</h4>
                    <p>Percentage:60%</p>
                    <p>No live A.T.K.T</p>					
                </div>	
                
                <div class="col-md-4" style="float:left;">
					<table class="table table-bordered table-hover" style="text-align:center">
                    	<thead>
                        	<tr>
                            	<th>Task</th>
                                <th>Status</th>
                            </tr>
                        
                        </thead>
                        
                        <tbody>
                        	<tr>
                            <td>Task #1</td><td><span class="glyphicon glyphicon-check"></span></td>
                            </tr>
                            
		                   	<tr>
                            <td>Task #2</td><td><span class="glyphicon glyphicon-check"></span></td>
                            </tr>
                            
                        	<tr>
                            <td>Task #3</td><td><span class="glyphicon glyphicon-unchecked"></span></td>
                            </tr>
                            
                        	<tr>
                            <td>Task #4</td><td><span class="glyphicon glyphicon-unchecked"></span></td>
                            </tr>                                                        
                        	<tr>
                            <td>Task #1</td><td><span class="glyphicon glyphicon-check"></span></td>
                            </tr>                            
                            
                        </tbody>
                        
                    </table>
                </div>

                </div>
               
            </div>
            <!--Graph-->

	                <div id="donutchart" style="float:left;clear:left"></div>
                    <div id="barchart_values" style="width:70px; height: 300px;float:left"></div>


                </div>
        
        </div>

    <!--event desc-->
    

    

</div>

    <!--event stack-->
	<div class="col-md-4" style="float:left">
    	<div class="panel panel-default">
        	<div class="panel-heading">
            	<strong><span class="glyphicon glyphicon-arrow-up"></span></strong>
            </div>
            
            <div class="panel-body">
            	<table class="table table-hover table-bordered">
					<thead style="text-align:center">
                    	<tr>
                        	<th>Upcoming Events</th>
                        </tr>
                    </thead>
                    <tbody style="text-align:center">
                    	<tr><td>Event #1</td></tr>
						<tr><td>Event #2</td></tr>
                        <tr><td>Event #3</td></tr>
                        <tr><td>Event #4</td></tr>                                                                                    
                        <tr><td>Event #5</td></tr>
						<tr><td>Event #6</td></tr>
                        <tr><td>Event #7</td></tr>
                        <tr><td>Event #8</td></tr>
                        <tr><td>Event #9</td></tr>
                    </tbody>
                </table>
            	
            </div>
        
        </div>
	</div>
    <!--event stack-->    
<!--Main Content-->
</div><!--container-->


<div>

</div>

<!--footer-->


</div>


<div class="col-lg-12" style="background-color:#666;">
	<div class="container">
    	<p style="color:#fff;font-size:12px;padding:10px">&copy; 2015 , Training and Placement Automation</p>
    </div>
</div>





<!-- including JQuery Plugins -->
<!--Reason to include JS files over here is to reduce Load time -->
{!! HTML::script('ui/includes/jquery/jquery.min.js')!!}
{!! HTML::script('ui/includes/bootstrap/js/bootstrap.min.js')!!}



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

</body>
</html>
