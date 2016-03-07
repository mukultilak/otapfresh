<div class="panel panel-info">
    	<div class="panel-heading">
    		<h3 class="panel-title"><span class="glyphicon glyphicon-th-list"></span>&nbsp; Student Details:</h3>
		</div>
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="#">Personal Details</a></li>
  		<li role="presentation" ><a href="academic"> Academic Details</a></li>
        <li role="presentation" ><a href="other">Other Details</a></li>
         <li role="presentation" ><a href="career">Career Options</a></li>
	</ul>
        <div class="panel panel-info">
        <div class="panel-heading">
            <h3 class="panel-title"><span class="glyphicon glyphicon-plus-sign"></span>&nbsp;Add Personal Details</h3>
        </div>
    	<div class="tab-content">
			<div id="per" class="tab-pane active">
  				<div class="panel-body">
        
				<div class="col-md-6 col-lg-12">         
	
    			<form class="form-horizontal" role="form" method="post" action="personal.php">         
		
        			<div class="form-group">
        				<label for="grno" class="control-label col-sm-2">G.R. Number:</label>
         				<div class="col-sm-10">
            				<input type = 'text' placeholder="GR Number" name = 'gr' id="grno"class="form-control"/>
        				</div>
        			</div>
        
        			<div class="form-group">
         				<label for="fn" class="control-label col-sm-2">First Name:</label>
						<div class="col-sm-10">
            				<input type = 'text' name = 'fn' id="fn" placeholder="First Name" class= "form-control"/>
    					</div>
        			</div>
        
        			<div class="form-group">
         				<label for="mn" class="control-label col-sm-2">Middle Name:</label>
						<div class="col-sm-10">
            				<input type = 'text' name = 'mn' id="mn" placeholder="Middle Name" class= "form-control"/>
    					</div>
        			</div>
        
        			<div class="form-group">
         				<label for="ln" class="control-label col-sm-2">Last Name:</label>
						<div class="col-sm-10">
            				<input type = 'text' name = 'ln' id="ln" placeholder="Last Name" class= "form-control"/>
    					</div>
        			</div>
        
       				<div class="form-group">
         				<label for="mot" class="control-label col-sm-2">Mother's Maiden Name:</label>
						<div class="col-sm-10">
            				<input type = 'text' name = 'mot' id="mot" placeholder="Mother's Maiden Name" class= "form-control"/>
    					</div>
        			</div>
        
        			<div class="form-group">
    					<label for="ge" class="control-label col-sm-2">Gender:</label>
            			<div class="col-sm-10">
            				<div class="input-group">
      							
        							<input type="radio" name= 'ge' aria-label="ma" value="male">
                                </span>Male
                               	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                    <input type="radio" name= 'ge' aria-label="fe" value="female">
      							</span>Female
              				</div><!-- /input-group -->
  						</div><!-- /.col-lg-6 -->
					</div><!-- /.row -->
        
					<div class="form-group">
         				<label for="dob" class="control-label col-sm-2">Date Of Birth:</label> 
         				<div class="hero-unit">
                       		<input type="text"  placeholder="Show Datepicker" name="date" id="dob" />
                        </div>
				</div>
        
					<div class="form-group">
         				<label for="phn" class="control-label col-sm-2">Phone No.: </label>
						<div class="col-sm-10">
            				<input type = 'text' name = 'phn' id="phn" placeholder="Phone Number" class= "form-control"/>
        				</div>
        			</div>    
        
       				 <div class="form-group">
         				<label for="ophn" class="control-label col-sm-2">Other Phone No.(if any):</label>    
            			<div class="col-sm-10">
            				<input type = 'text' name = 'ophn' id="ophn" placeholder=" Other Phone Number" class= "form-control"/>
        				</div>
        			</div>
       
                    <div class="form-group">
                        <label for="email" class="control-label col-sm-2">Email Id:</label>
                        <div class="col-sm-10">
                    
                            <input type="text" placeholder="example@xyz.com" class="form-control" aria-label="...">
                        
                        </div>
                        </div>
                   
                    
        
        			<div class="form-group">
                        <label for="pad" class="control-label col-sm-2">Permanent Address:</label>
                        <div class="col-sm-10">
                            <textarea rows = '3' cols ='20' name = 'pad'  class="form-control">
                            </textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="pad" class="control-label col-sm-2">Correspondence Address:</label>
                        <div class="col-sm-10">
                            <textarea rows = '3' cols ='20' name = 'pad'  class="form-control">
                            </textarea>
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label for="pin" class="control-label col-sm-2">Pincode:</label>
                        <div class="col-sm-10">
                            <input type = 'text' name = 'pin' id="pin" placeholder="Pincode" class= "form-control"/>
                        </div>
                    </div>

                     <div class="form-group">
                        <label for="nat" class="control-label col-sm-2">Nationality:</label>
                        <div class="col-sm-10">
                        <select class="form-control" name="nat">
                            <option>Nationality</option>
                      <option>INDIAN</option>
                      <option>other</option>
                    </select>
                        </div>
                    </div>



                   <div class="form-group">
                        <label for="ins" class="control-label col-sm-2">State:</label>
                        <!-- Single button -->
                        <div class="col-sm-10">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select State<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Andhra Pradesh</a></li>
                                <li><a href="#">Arunachal Pradesh</a></li>
                                <li><a href="#">Assam</a></li>
                                <li><a href="#">Bihar</a></li>
                                <li><a href="#">Chhattisgarh</a></li>
                                <li><a href="#">Goa</a></li>
                                <li><a href="#">Gujarat</a></li>
                                <li><a href="#">Haryana</a></li>
                                <li><a href="#">Himachal Pradesh</a></li>
                                <li><a href="#">Jammu and Kashmir</a></li>
                                <li><a href="#">Jharkhand</a></li>
                                <li><a href="#">Karnataka</a></li>
                                <li><a href="#">Kerala</a></li>
                                <li><a href="#">Madhya Pradesh</a></li>
                                <li><a href="#">Maharashtra</a></li>
                                <li><a href="#">Manipur</a></li>
                                <li><a href="#">Meghalaya</a></li>
                                <li><a href="#">Mizoram</a></li>
                                <li><a href="#"> Nagaland</a></li>
                                <li><a href="#">Orissa</a></li>
                                <li><a href="#">Punjab</a></li>
                                <li><a href="#">Rajasthan</a></li>
                                <li><a href="#">Sikkim</a></li>
                                <li><a href="#">Tamil Nadu</a></li>
                                <li><a href="#">Telangana</a></li>
                                <li><a href="#">Tripura</a></li>
                                <li><a href="#">Uttar Pradesh</a></li>
                                <li><a href="#">Uttarakhand</a></li>
                                <li><a href="#">West Bengal</a></li>
                            </ul>
                        </div>
                        </div>  
                    </div>
                     
                    
                  
                     
                    
                    <div class="form-group">
                        <label for="ins" class="control-label col-sm-2">Institute:</label>
                        <!-- Single button -->
                        <div class="col-sm-10">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Institute<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Institute of Polytechnic</a></li>
                                <li><a href="#">Institute of Engineering</a></li>
                                <li><a href="#">Institute of Pharmacy</a></li>
                                <li><a href="#">Institute of Management</a></li>
                            </ul>
                        </div>
                        </div>	
                    </div>
                     
                     <div class="form-group">
                        <label for="ins" class="control-label col-sm-2">Department:</label>
                        <!-- Single button -->
                        <div class="col-sm-10">
                        <div class="btn-group">
                            <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Select Department<span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu">
                                <li><a href="#">Computer</a></li>
                                <li><a href="#">Information Technology</a></li>
                                <li><a href="#">Mechanical</a></li>
                                <li><a href="#">Civil</a></li>
                                 <li><a href="#">Electrical</a></li>
                                  <li><a href="#">Electronic & Telecomunication</a></li>
                            </ul>
                        </div>
                        </div>  
                    </div>
                      <div class="form-group">
                 <label for="ln" class="control-label col-sm-2">Diploma holder:</label>
                  <div class="col-sm-10">
                   <label class="checkbox-inline"><input type="checkbox" value="">Yes</label>
                 
                   <div class="form-group">
    <div class="col-sm-offset-8 col-sm-10">
      <button type="submit" class="btn btn-default">Reset</button>&nbsp;
      <button type="reset" class="btn btn-default">Save & Next>></button>
    </div>
  </div>

				</form>        
			</div>
    
		</div>
    	</div>
        <div id="aca" class="tab-pane">
  			<div class="panel-body">
				<div class="col-md-6 col-lg-12">
                	<h2>Academic</h2>
                </div>
			</div>
		</div>
        
        <div id="oth" class="tab-pane">
  			<div class="panel-body">
				<div class="col-md-6 col-lg-12">
                	<h2>Others</h2>
                </div>
			</div>
		</div>
	</div>
    </div>
    </div>    