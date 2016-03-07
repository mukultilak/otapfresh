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



</head>

<body>
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
            	<li class="active"><a href="#">Home&nbsp;<span class="glyphicon glyphicon-home"></span></a></li> 
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Notification <span class="glyphicon glyphicon-exclamation-sign"></span>&nbsp;<span class="caret"></span></a>
                	<ul class="dropdown-menu">
                    	<li><a href="#">Notification #1</a></li> 
                        <li><a href="#">Notification #2</a></li> 
                        <li><a href="#">Notification #3</a></li> 

                    </ul>
                 </li>
                
                <li><a href="#about">New Event&nbsp;<span class="glyphicon glyphicon-plus-sign"></span></a></li> 

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
?>    </span>&nbsp;<span class="glyphicon glyphicon-user"></span>&nbsp;<span class="caret"></span></a>
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
	<div class="col-md-12" style="float:left">
		<div class="panel panel-default">
        	<div class="panel-heading">
            	<span class="glyphicon glyphicon-align-center"></span> &nbsp;01 Jan 2016 , MET Bhujbal Knowledge City
            </div>
            
            <div class="panel-body">
        
            <div class="panel panel-info">
	            <div class="panel-heading">Set Priviledges</div>
                <div class="panel-body">
                
                
                <div class="col-md-12">
					<table class="table table-bordered table-hover text-center">
                    	<thead>
                        	<tr>
                            	<th class="text-center">Gr No.</th>
                              <th class="text-center">Email</th>
                              <th class="text-center">Permission Requested</th>
                              <th class="text-center">Institute</th>
                              <th class="text-center">Permission</th> 
                            </tr>
                        
                        </thead>
                        
                        <tbody>

                        	

                          
<?php
                          if(count($result)>0){
                            for($i=0;$i<count($result);$i++)
                            {
                              echo "
                                <tr>
                                  <td> ".$result[$i]['gr_no'] ."</td>   
                                  <td>".$result[$i]['email']."</td>";

                                  if($result[$i]['type']==0)
                                  {
                                    echo "<td>Student</td>";
                                  }
                                  else if($result[$i]['type']==1)
                                  {
                                    echo "<td>Staff</td>"; 
                                  }

                                  else if($result[$i]['type']==2)
                                  {
                                    echo "<td>T.P.O</td>"; 
                                  }
                                  else if($result[$i]['type']==3)
                                  {
                                    echo "<td>Administrator</td>"; 
                                  }
                                  else
                                  {
                                    echo "<td>Unknown type</td>"; 
                                  }
                            
                                echo"
                                  <td>".$result[$i]['scope']."</td> ";  
                            
                                echo "
                                  <td><a href='admin/allow/".$result[$i]['gr_no'] ."'><span class='glyphicon glyphicon-ok'></span></a> &nbsp;
                                  <a href='admin/deny/".$result[$i]['gr_no'] ."'><span class='glyphicon glyphicon-remove'></span></a>
                                  </td>
                              </tr>   ";                           
                            }
                          }
                          ?>
                        
                                                        
                            
                        </tbody>
                        
                    </table>
                </div>

                </div>
               
            </div>
  


                </div>
        
        </div>

    <!--event desc-->
    

    

</div>

   
<!--Main Content-->
</div><!--container-->


<div>

</div>

<!--footer-->


</div>




<div class="col-lg-12" style="background-color:#666;position:fixed;bottom:0">
	<div class="container">
    	<p style="color:#fff;font-size:12px;padding:10px">OTAP &copy; 2015 , Online Training & Placement</p>
    </div>
</div>





<!-- including JQuery Plugins -->
<!--Reason to include JS files over here is to reduce Load time -->
{!! HTML::script('ui/includes/jquery/jquery.min.js')!!}
{!! HTML::script('ui/includes/bootstrap/js/bootstrap.min.js')!!}



</body>
</html>
