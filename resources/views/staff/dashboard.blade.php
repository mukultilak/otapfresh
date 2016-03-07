@extends('staff.layout.stafflayout')

@section('content')
<!--Main Content-->
<div class="col-md-12" >
	
    <!--event desc-->
	<div class="col-md-8" style="float:left">
		<div class="panel panel-default">
        	<div class="panel-heading">
            	<span class="glyphicon glyphicon-align-center"></span> &nbsp;MET IOE(Campus)<div class="quote">event->created_at</div>
            </div>
            
            <div class="panel-body">
            	<div class="title">
            		<h3>event->title</h3>
            	</div>

            <div class="panel panel-info">
	            <div class="panel-heading">Eligibility Criteria</div>
                <div class="panel-body">
                	<div class="col-md-6" style="float:left">
                	<h4>Description</h4>
                	 <p> <div class="quote">event->desc</div></p>
                  	<h4>Eligibility</h4>
                    <div class="quote">
                    	<p>Percentage: event->per%</p>
                    </div>
                    <p>No live A.T.K.T</p>					
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
            	<strong><span class="glyphicon glyphicon-arrow-up">&nbsp;Events Stack</span></strong>
            </div>
            
            <div class="panel-body">
            	<table class="table table-hover table-bordered">
					<thead style="text-align:center">
                    	<tr>
                        	<th>Upcoming Events</th>
                        </tr>
                    </thead>
                    <tbody style="text-align:center">
                    	@for($i=0;$i<10;$i++)
				                <tr><td>e_table[i]->title<br/><small>e_table[i]->created_at</small></td></tr>
                      	@endfor
                        
                    </tbody>
                </table>
            	
            </div>
        
        </div>
	</div>
    <!--event stack-->    
<!--Main Content-->
</div><!--container-->


@endsection

@section('script')

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
@endsection

