@extends('tpo.layout.tpolayout')

@section('content')
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
                	<p>Lorem ipsum dolor sit amet, malis movet te pri. Pri eu invidunt forensibus, ei nemore iuvaret his. Mea dolorum interesset in. Ne nihil eligendi eam.
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

@endsection