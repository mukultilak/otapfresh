@extends('student.layout.edit_profile_layout')
@section('tabs')



<div style="padding: 2em">
{!!Form::open(array('url'=>'academic_register','class'=>'form-horizontal','role'=>'form'))!!}

<div class="row">
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
 </div>   


<!---->
<div class="row">


<div class="panel panel-default">
  <div class="panel-heading">


    <div class="panel-title">High school and Senior Secondary Education</div>
  </div>
  <div class="panel-body">
    <div class="container">




        
        <div class="row">
          <div class="form-group col-xs-4">

            <div class="input-group">
              
              {!!Form::text('tenth','',array('id'=>'tenth','placeholder'=>($aca->tenth)?$aca->tenth:'10th Percentage(Example 75)','class'=>'form-control','data-error'=>'Enter your 10th %','aria-describedby'=>'tenth'))!!}
              <span class="input-group-addon" id="tenth"><strong>%</strong></span>

            </div>

            <div class="help-block with-errors"></div>


          </div>

          <div class="col-xs-4">
            <div class="input-group">
              
              {!!Form::text('twelfth','',array('id'=>'twelfth','placeholder'=>($aca->twelfth)?$aca->twelfth:'12th Percentage(Example 75)','class'=>'form-control','aria-describedby'=>'twelfth'))!!}
              <span class="input-group-addon" id="twelfth"><strong>%</strong></span>
            </div>

          </div>          
        </div>

      </div>
    </div>

  </div>
  </div>
<!---->

<!---->
<div class="row">
<div class="panel panel-default">
  <div class="panel-heading">
    <div class="panel-title">Diploma(if any)</div>
  </div>
  <div class="panel-body">
    <div class="container">
        
        <div class="row">
          <div class="col-xs-8">
            
            {!!Form::text('dip_subject','',array('id'=>'dip_subject','placeholder'=>($aca->dip_subject)?$aca->dip_subject:'Subject Major (Computer/Mechanical/..)','class'=>'form-control'))!!}
          </div>
        </div>
        
        <br/>
        
        <div class="row">
          <div class="col-xs-8">
            
            {!!Form::text('dip_college','',array('id'=>'dip_college','placeholder'=>($aca->dip_college)?$aca->dip_college:'College name','class'=>'form-control'))!!}
            
          </div>
        </div>
        
        <br/>

        <div class="row">
        <div class=" col-xs-4">
          <div class="input-group">
            
            {!!Form::text('dip_agg','',array('id'=>'dip_agg','placeholder'=>($aca->dip_agg)?$aca->dip_agg:'Total aggregate in %','class'=>'form-control','aria-describedby'=>'diploma_agg'))!!}
            <span class="input-group-addon" id="diploma-agg"><strong>%</strong></span>
          </div>
        </div>         
        </div>

      </div>
    </div>

  </div>
  </div>
<!---->




<!---->
  <div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">College</div>

    <div class="panel-body">
      <div class="container">
        <div class="row">
          <div class="col-xs-4">
          <div class="input-group">            
            {!!Form::text('sem1','',array('id'=>'sem1','placeholder'=>($aca->sem1)?$aca->sem1:'Semester-1 %','class'=>'form-control','aria-describedby'=>'sem1'))!!}
            <span class="input-group-addon" id="sem1"><strong>%</strong></span>
          </div>
          </div>
          
          <div class="col-xs-4">
          <div class="input-group">              
            {!!Form::text('sem2','',array('id'=>'sem2','placeholder'=>($aca->sem2)?$aca->sem2:'Semester-2 %','class'=>'form-control','aria-describedby'=>'sem2'))!!}
            <span class="input-group-addon" id="sem2"><strong>%</strong></span>
          </div>
          </div>
        </div>
        <br/>

        <div class="row">
          <div class="col-xs-4">
            <div class="input-group">              
            {!!Form::text('sem3','',array('id'=>'sem3','placeholder'=>($aca->sem3)?:'Semester-3 %','class'=>'form-control','aria-describedby'=>'sem3'))!!}
            <span class="input-group-addon" id="sem3"><strong>%</strong></span>
          </div>
          </div>
          
          <div class="col-xs-4">
            <div class="input-group">              
            {!!Form::text('sem4','',array('id'=>'sem4','placeholder'=>($aca->sem4)?$aca->sem4:'Semester-4 %','class'=>'form-control','aria-describedby'=>'sem4'))!!}
            <span class="input-group-addon" id="sem4"><strong>%</strong></span>
          </div>
          </div>
        </div>
        <br/>

        <div class="row">
          <div class="col-xs-4">
            <div class="input-group">              
            {!!Form::text('sem5','',array('id'=>'sem5','placeholder'=>($aca->sem5)?$aca->sem5:'Semester-5 %','class'=>'form-control','aria-describedby'=>'sem5'))!!}
            <span class="input-group-addon" id="sem5"><strong>%</strong></span>
          </div>
          </div>
          
          <div class="col-xs-4">
            <div class="input-group">              
            {!!Form::text('sem6','',array('id'=>'sem6','placeholder'=>($aca->sem6)?$aca->sem6:'Semester-6 %','class'=>'form-control','aria-describedby'=>'sem6'))!!}
            <span class="input-group-addon" id="sem6"><strong>%</strong></span>
          </div>
          </div>
        </div>
        <br/>

        <div class="row">
          <div class="col-xs-4">
            <div class="input-group">              
            {!!Form::text('sem7','',array('id'=>'sem7','placeholder'=>($aca->sem7)?$aca->sem7:'Semester-7 %','class'=>'form-control','aria-describedby'=>'sem7'))!!}
            <span class="input-group-addon" id="sem7"><strong>%</strong></span>
          </div>
          </div>
          
          <div class="col-xs-4">
            <div class="input-group">              
            {!!Form::text('sem8','',array('id'=>'sem8','placeholder'=>($aca->sem8)?$aca->sem8:'Semester-8 %','class'=>'form-control','aria-describedby'=>'sem8'))!!}
            <span class="input-group-addon" id="sem2"><strong>%</strong></span>
          </div>
          </div>
        </div>
        
      </div>

    </div>
  </div>
</div>
<!---->

<!---->

<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">Backlog / A.T.K.T</div>
      <div class="panel-body">
        <div class="container">
          <div class="row">
            <div class="col-xs-4">
              
              {!!Form::text('dead_back','',array('id'=>'dead_back','placeholder'=>($aca->dead_back)?$aca->dead_back:'Details of Dead A.T.K.T','class'=>'form-control'))!!}
            </div>
          
            <div class="col-xs-4">
              
              {!!Form::text('live_back','',array('id'=>'live_back','placeholder'=>($aca->live_back)?$aca->live_back:'Details of Live A.T.K.T','class'=>'form-control'))!!}
            </div>
          </div>
      </div>
    </div>
  </div>
</div>
<!---->

<!---->
<div class="row">
    <div class="col-md-offset-8 col-md-12 row" style="padding-left: 4.8em">
      <button type="reset" class="btn btn-default">RESET</button>&nbsp;
      <button type="submit" class="btn btn-primary btn-lg">Save and Proceed <span class="glyphicon glyphicon-chevron-right"></span></button>
    </div>                            
</div>
<!---->

<!---->
<div class="row">
&nbsp;
</div>
<!---->
{!!Form::close()!!}
</div><!--Padding-->

@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#academic').addClass('active');
            

        });
    </script>
@endsection