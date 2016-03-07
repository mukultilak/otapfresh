<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- To set the characters encoding to prevent text display issues -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Viewport Setting -->
<!-- This is to tell mobile devies to initialize web page accordingly -->
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title>Staff Signup-OTAP</title>

<!--Including Css -->

{!! HTML::style('ui/includes/styles.css')!!}
{!! HTML::style('ui/includes/bootstrap/css/sticky-footer-navbar.css')!!}
{!! HTML::style('ui/includes/bootstrap/css/bootstrap.min.css')!!}
<!--Custom Css -->

<!--Fonts-->
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>


{!! HTML::script('ui/includes/jquery/jquery.min.js')!!}
{!! HTML::script('ui/includes/bootstrap/js/bootstrap.min.js')!!}
{!! Html::script('ui/includes/js/validator.min.js')!!}
</head>

<body>

        <div class="container">    
        

        <div id="loginbox" class="mainbox col-md-6 col-md-offset-3 col-sm-1
         col-sm-offset-2">                    
        
        <div style="color:#f5f5f5;border-radius:4px">
            <h2>OTAP<i class="glyphicon glyphicon-user"></i></h2>
        </div>

            <div class="panel panel-default" >
                    <div class="panel-heading">
                        <div class="panel-title">Staff Sign Up</div>
                        <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#">Forgot password?</a></div>
                    </div>     

                    <div style="padding-top:30px" class="panel-body" >

                        
                        @if(Session::has('success'))
                        <div style="" id="login-alert" class="alert alert-success col-sm-12">
                          {{Session::get('success')}}
                        </div>
                        @endif


                        @if(Session::has('error'))
                        <div style="" id="login-alert" class="alert alert-warning col-sm-12">
                          {{Session::get('error')}}
                        </div>
                        @endif
                        
                        
                            
                        
                        {!!Form::open(array('url'=>'sr','id'=>'login-form','class'=>'form-horizontal','role'=>'form','data-toggle'=>'validator'))!!}


                            <div class="form-group" style="padding:0 15px;margin-bottom:0">
                            <div style="margin-bottom: 25px" class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                {!!Form::text('grno','',array('id'=>'login-username','placeholder'=>'G.R Number','class'=>'form-control','required','data-error'=>'Enter your GR Number'))!!}
                                
                            </div>
                            <div class="help-block with-errors"></div>
                            </div>

                                                  



                            
                            <div class="form-group" style="padding:0 15px;margin-bottom:0">            
                            <div style="margin-bottom: 25px" class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                              {!!Form::email('email','',array('id'=>'login-email','placeholder'=>'Email','class'=>'form-control','required','data-error'=>'Enter a valid email'))!!}
                            </div>
                            <div class="help-block with-errors"></div>
                            </div>


                            <div class="form-group" style="padding:0 15px;margin-bottom:0">
                            <div style="margin-bottom: 25px" class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-tower"></i></span>
                                 {!! Form::select('institute', 
                                    (['' => 'Select a Institute'] + $institues), 
                                    null, 
                                    ['class' => 'form-control','id'=>'inst','required','data-error'=>'Select your Institute']) !!}
                            </div>
                            <div class="help-block with-errors"></div>
                            </div>  


                            



                            <div class="form-group" style="padding:0 15px;margin-bottom:0">
                            <div style="margin-bottom: 25px" class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-resize-vertical"></i></span>
                                 <div id='depp'>
                                     <div class="form-control"></div>
                                 </div>
                            </div>
                            <div class="help-block with-errors"></div>
                            </div>  

                            <div class="form-group" style="padding:0 15px;margin-bottom:0">
                            <div style="margin-bottom: 25px" class="input-group">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-certificate"></i></span>
                                 

                                     {!! Form::select('type', 
                                    (['' => 'Select account type','2'=>'Staff','3'=>'TPO(Dept)','4'=>'Admin']), 
                                    null, 
                                    ['class' => 'form-control','id'=>'type','required','data-error'=>'Select your account type']) !!}
                                    
                            </div>
                            <div class="help-block with-errors"></div>
                            </div>  
                            

                            
                            <div class="form-group" style="padding:0 15px;margin-bottom:0">  
                            <div style="margin-bottom: 25px" class="input-group">
                               <span class="input-group-addon has-error"><i class="glyphicon glyphicon-lock"></i></span>
                              {!! Form::password('password', array('class' => 'form-control','placeholder'=>'Password','required')) !!}
                            </div>
                            <div class="help-block with-errors"></div>
                            </div>
                            
                            <div class="form-group" style="padding:0 15px;margin-bottom:0">
                            <div style="margin-bottom: 25px" class="input-group">
                               <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                 {!! Form::password('password1', array('class' => 'form-control','placeholder'=>'Re-enter password','required')) !!}
                            </div>
                            <div class="help-block with-errors"></div>
                            </div>
                            


                                

                            <div style="margin-top:10px" class="form-group">

                                    <!-- Button -->

                                    <div class="col-sm-12 controls" align="left">
                                      
                                    </div>

                                    <div class="col-sm-12 controls" align="right">

                                    <a id="btn-login" href="#" class="btn btn-default" onclick="$('#login-form')[0].reset()" style="padding:10px 104px;">Clear </a>
                                      
                                    


                                     {!!Form::submit('Submit',array('class'=>'btn btn-success','style'=>'padding:10px 105px;'))!!}
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-md-12 control">
                                        <div style="border-top: 1px solid#888; padding-top:15px; font-size:85%" >
                                            Already have an account? 
                                        <a href="auth/login">Login here</a>
                                        </div>
                                    </div>
                                </div>    
                            
                            {!!Form::close()!!}


                        </div>                     
                    </div>  
        </div>
       
    </div>
    
<div style="height:35px"></div> 
<footer class="footer">
      <div class="container">
        <p class="text-muted" style="text-align:center">OTAP  &copy; 2016  </p>
      </div>
</footer>


<script>                     
    $('#inst').change(function(){
        var icode=$('#inst').val();
        if(icode.length>0){

            $.get('http://localhost/fresh/fetch-dept',{icode:icode},function(res){
                if(res){
                $('#depp').html(res);    
               
                }
                
            });
        }
    });
                            
</script>


</body>
</html>
