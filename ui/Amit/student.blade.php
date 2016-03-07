<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- To set the characters encoding to prevent text display issues -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Viewport Setting -->
<!-- This is to tell mobile devies to initialize web page accordingly -->
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title>Student - Dashboard</title>

<!--Including Css -->
{!!Html::style('ui/includes/bootstrap/css/bootstrap.min.css')!!}

<!--Custom Css -->
{!!Html::style('ui/includes/styles.css')!!}
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
          <!--<img src="img/MET.jpg" class="logo" />-->
          {!!Html::image('ui/img/MET.jpg','',array('class'=>'img-responsive logo'))!!}
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
                <li><a href="#about">About &nbsp;<span class="glyphicon glyphicon-book"></span></a></li> 

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
            	
				<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">UserName &nbsp; <span class="glyphicon glyphicon-user"></span>&nbsp;<span class="caret"></span></a>
                	<ul class="dropdown-menu">
                    	<li><a href="#">Account</a></li> 
                        <li><a href="#">Change password</a></li> 

                        <li role="separator" class="divider"></li>
                        <li><a href="#">Logout </a></li> 
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
	<a href="#"><li><span class="glyphicon glyphicon-folder-open"></span>&nbsp; Profile </li></a>
   	<a href="message"><li><span class="glyphicon glyphicon-briefcase"></span>&nbsp; Message</li></a>
   	<a href="#"><li><span class="glyphicon glyphicon-bullhorn"></span>&nbsp; History</li></a>    
</ul>
</div>
<!--Side Bar-->


<!--Main Content-->
<div class="col-md-12" style="margin-left:90px;">
	
	<div class="col-md-4" style="float:left">
		<div class="panel panel-default">
        	<div class="panel-heading">
            	<span class="glyphicon glyphicon-align-center"></span> &nbsp;MET IOE(Campus)<div class="quote">{!!$results->created_at!!}</div>
            </div>
            
            <div class="panel-body">

            <div class="panel panel-info">
	            <div class="panel-heading">Notice</div>
                <div class="panel-body">
                
                <div class="col-md-12" style="float:left">
                	<h4><div class="title">{!!$results->title!!}</div></h4>
                 <p> <div class="quote">{!!$results->desc!!}</div></p>
                  	
                </div>	
                

                </div>
               
          		  </div>
                  
                  
			<div class="panel panel-info">
	            <div class="panel-heading">Results & Annoucements</div>
                <div class="panel-body">
                
                <div class="col-md-12" style="float:left">
                	<h3><div class="title">{!!$results->title!!}</div></h3>
                  <p> <div class="quote">{!!$results->desc!!}</div></p>
                </div>	
                

                </div>
               
          		  </div>                  
            <!--Graph-->

	               


            </div>
        
      		</div>

    
   	</div>
<!--NOTICe-->
    <!--event desc-->
	<div class="col-md-4" style="float:left">
		<div class="panel panel-default">
        	<div class="panel-heading">
            	<span class="glyphicon glyphicon-align-center"></span> &nbsp;MET IOE(Campus)<div class="quote">{!!$event->created_at!!}</div>
            </div>
            
            <div class="panel-body">
            <h3><div class="title"> </div></h3>
            <div class="panel panel-info">
	            <div class="panel-heading">Eligibility Criteria</div>
                <div class="panel-body">
                <h4><div class="title">{!!$event->title!!}</div></h4>
                <div class="col-md-12" style="float:left">
                	<h4>Description</h4>
                	
                 <p> <div class="quote">{!!$event->desc!!}</div></p>
                  	<h4>Eligibility</h4>
                    <p><div class="quote">Percentage:{!!$event->per!!}%</div></p>
                    <p>No live A.T.K.T</p>	

                    <button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-star" aria-hidden="true"></span> Register
</button>				
                </div>	
                

                </div>
               
          		  </div>
            <!--Graph-->

	               


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
                    	@for($i=0;$i<count($e_table);$i++)
				                <tr><td>{!!$e_table[$i]->title!!}<br/><small>{!!$e_table[$i]->created_at!!}</small></td></tr>
                      @endfor
                        
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
{!!Html::script('ui/includes/jquery/jquery.min.js')!!}
{!!Html::script('ui/includes/bootstrap/js/bootstrap.min.js')!!}


 

</body>
</html>
