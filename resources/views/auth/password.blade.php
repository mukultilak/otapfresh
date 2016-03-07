<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />

  <title>Forgot Password</title>

  {!!HTML::style('ui/includes/bootstrap/css/bootstrap.min.css')!!}
  {!!HTML::style('ui/includes/styles.css')!!}
   
</head>

<body>
<hr>
<div class="container">
    <div class="row">
        <div class="row">
            <div class="col-md-6 col-md-offset-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                    @if (session('status'))
                      <div class="alert alert-success">
                         {{ session('status') }}
                       </div>
                      @endif

                   @if (count($errors) > 0)
                     <div class="alert alert-danger">
                       <strong>Whoops!</strong> There were some problems with your input.<br><br>
                             <ul>
                          @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                          @endforeach
                           </ul>
                         </div>
                       @endif


                        <div class="text-center">
                          <h3><i class="fa fa-lock fa-4x"></i></h3>
                          <h2 class="text-center">Forgot Password?</h2>
                          <p>You can reset your password here.</p>
                            <div class="panel-body">
                              
                             <form class="form-horizontal" role="form" method="POST" action="{{ url('/password/email') }}">
                             <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                <fieldset>
                                  <div class="form-group">
                                    <div class="input-group">
                                      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope color-blue"></i></span>
                                      
                                      <input id="emailInput" name="email" placeholder="email address" class="form-control" type="email" oninvalid="setCustomValidity('Please enter a valid email address!')" onchange="try{setCustomValidity('')}catch(e){}" required="" value="{{ old('email') }}">
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <input class="btn btn-lg btn-primary btn-block" value="Send My Password" type="submit">
                                  </div>
                                </fieldset>
                              </form>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
 {!!HTML::script('ui/includes/jquery/jquery.min.js')!!}

{!!HTML::script('ui/includes/bootstrap/js/bootstrap.min.js')!!}

    
</body>
</html>