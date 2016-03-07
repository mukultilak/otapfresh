 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<!-- To set the characters encoding to prevent text display issues -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--Viewport Setting -->
<!-- This is to tell mobile devies to initialize web page accordingly -->
<meta name="viewport" content="width=device-width,initial-scale=1" />

<title>Login</title>

<!--Including Css -->
<link href='https://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'/>
{!! HTML::style('ui/includes/styles.css')!!}

{!! HTML::style('ui/includes/bootstrap/css/bootstrap.min.css')!!}
{!! HTML::style('ui/includes/bootstrap/css/sticky-footer-navbar.css')!!}
<!--Custom Css -->

<!--Fonts-->



</head>

<body >

    <div class="container" style="margin-top:40px">
      <div class="row">
      <div class="col-sm-6 col-md-6 col-md-offset-3">
        <div class="panel panel-default" style="background-color: #F7F7F7;border-radius:2px;box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);">
          <div class="panel-heading">
            
            
            <strong> Sign in</strong> <small><a href="../password/email" class="pull-right">Forgot password?</a></small>
          </div>
          <div class="panel-body">
            
            {!!Form::open(array('url'=>'auth'))!!}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <fieldset>
                <div class="row">
                  <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                    <div class="col-md-3" style="padding-left:0">                  
                      {!! HTML::image('ui/img/met_small.jpg', '', array( 'width' => '95px' )) !!}
                    </div>
            
                    <div class="col-md-9" style="padding-left:0px;line-height:3.5px;font-family: 'Oswald', sans-serif;">
                      <h1 class="modal-title" style="line-height:45px">O.T.A.P</h1><br />
                      <p >Online Training And Placement Automation System</p>        
                    </div>
                  </div>
                </div>
                <div class="row">
                  &nbsp;<br/>
                  &nbsp;

                </div>
                
                
                        @if(Session::has('error'))
                        <div style="" id="login-alert" class="alert alert-warning col-sm-12">
                          {{Session::get('error')}}
                        </div>
                        @endif


                <div class="row">
                  <div class="col-sm-12 col-md-10  col-md-offset-1 ">
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-user"></i>
                        </span> 
                        
                        {!!Form::text('grno','',array('class'=>'form-control','placeholder'=>'GR Number','autofocus'))!!}
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon">
                          <i class="glyphicon glyphicon-lock"></i>
                        </span>
                        
                        {!!Form::password('password',array('class'=>'form-control','placeholder'=>'Password'))!!}
                      </div>
                    </div>

                    <div class="checkbox form-group">
                        <label><input type="checkbox" value="" name="remember">Remember Me</label>
                      </div>

                    <div class="form-group">
                      
                    {!!Form::submit('Sign in',array('class'=>'btn btn-lg btn-primary btn-block'))!!}
                    </div>
                  </div>
                </div>
              </fieldset>
              {!!Form::close()!!}
            </form>
          </div>
          <div class="panel-footer ">
            Don't have an account! <a href="../signup" onClick=""> Sign Up Here </a>
          </div>
                </div>
      </div>
    </div>
  </div>

<footer class="footer">
      <div class="container">
        <p class="text-muted" style="text-align:center">OTAP  &copy; 2016  </p>
      </div>
</footer>




{!! HTML::script('ui/includes/bootstrap/js/bootstrap.min.js')!!}
{!! HTML::script('ui/includes/jquery/jquery.min.js')!!}



</body>
</html>
