
@extends($layout)

@section('content')

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



<div class="container" style="width: auto">
    <div class="panel panel-default">
		  <div class="panel-heading">
        <h3 class="panel-title"><span class="glyphicon glyphicon-bullhorn"></span>&nbsp;Notice</h3>
		  </div>
		
     

    {!!Form::open(array('url'=>'notice_register','class'=>'form-horizontal','role'=>'form','data-toggle'=>'validator'))!!}
  <div class="panel-body">
		  
    <div class="form-group">

          <label class="control-label col-sm-2" for="tit">Notice Title:&nbsp;<span class="glyphicon glyphicon-edit"></span></label>
          <div class="col-sm-10">
            
            {!!Form::text('ntitle','',array('id'=>'ntitle','placeholder'=>'Title','class'=>'form-control','required'=>'required','data-error'=>'Enter Notice title'))!!}
          </div>
    </div>
  
    <div class="form-group">
      <label class="control-label col-sm-2" for="tit">Description:&nbsp;<span class="glyphicon glyphicon-edit"></span></label>
      <div class="col-sm-10">
        
        {!!Form::textarea('ndesc','',array('rows'=>'5','id'=>'ndesc','class'=>'form-control','required'=>'required','data-error'=>'Enter notice content.'))!!}
      </div>
    </div>


    <div class="form-group">
      <label for="ins" class="control-label col-sm-2">To:</label>
                        <!-- Single button -->
        <div class="col-sm-10">
          <div class="btn-group">
            

          </div>
        </div>  
    </div>
                    

  
    <div class="form-group">
      <label class="control-label col-sm-2" for="tit">Notice send with:&nbsp;<span class="glyphicon glyphicon-envelope"></span></label>
      <div class="col-sm-10">
        <label class="checkbox-inline"><input type="checkbox" value="">In-System</label>
        <label class="checkbox-inline"><input type="checkbox" value="">SMS</label>
        <label class="checkbox-inline"><input type="checkbox" value="">email</label>
      </div><br /><br />
    </div>
  &nbsp;

  </div>

  <div class="form-group">
    <div div class="col-sm-offset-8 col-sm-10">
      <button type="reset" class="btn btn-default">Reset</button>&nbsp;
      <button type="submit" class="btn btn-default">Send</button>
    </div>
  </div>
 {!!Form::close()!!}

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title"><span class="glyphicon glyphicon-list-alt"></span>&nbsp;Previous Notices </h3>
  </div>
     
  <div class="panel-body">
    <div class="col-lg-12">
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>Id</th>
            <th>Notice Title</th>
            <th>Description</th>
            <th>Date</th>
            <th>Author</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
        </tbody>      
      </table>
    </div>
  </div>
</div>

@endsection