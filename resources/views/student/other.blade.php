@extends('student.layout.edit_profile_layout')
@section('tabs')
<div style="padding: 2em">

{!!Form::open(array('url'=>'other_register','class'=>'form','role'=>'form'))!!}
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



<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">Extra Skills</div>
      <div class="panel-body">

        <div class="container" style="width: auto">
          <div class="row">        
            <div class="form-group">
              <label for="comment" class="control-label col-sm-2">Technical Skills:</label>            
              <div class="col-md-12">                
                {!!Form::text('tech_skills',($oth->tech_skills)?$oth->tech_skills:null,array('id'=>'tech','placeholder'=>'Use comma to separate skills','class'=>'form-control','data-role'=>'tagsinput','style'=>'width:auto;'))!!}
                

              </div>

            </div>        
          </div>

          <br/>

          <div class="row">        
            <div class="form-group" >
              <label for="other_skill" class="control-label col-sm-2">Other Skills:</label>
              <div class="col-md-12">
                
                {!!Form::textarea('other_skills','',array('rows'=>'2','id'=>'other-skill','placeholder'=>($oth->other_skills)?$oth->other_skills:'Other Skills','class'=>'form-control','data-error'=>'Please write about your other skills'))!!}
                <div class="help-block with-errors"></div>


              </div>
            </div>        
          </div>
        </div>

    </div>
  </div>
</div>

<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">Job / Internship Experience (If any)</div>

    <div class="panel-body">
      <div class="container" style="width:auto">

        <div class="row" >

          <div class="form-group" >
              <label for="comment" class="control-label col-sm-2" >Job type:</label>
              <?php  echo $job->type; ?>
              <div class="col-sm-12">
                

                {!! Form::select('job_type',
                  ([  ''=>'Select',
                    'Full Time'=>'Full Time',
                    'Part Time'=>'Part Time',
                    'Internship'=>'Internship'
                    ]),($job->job_type)?$job->job_type:'Select', 
                ['class' => 'form-control','id'=>'job_type']) !!} 
              </div>
          </div>
        </div>
<br/>
      <div class="row">
        <div class="form-group "  style="width: auto">              
          
          <div class="col-md-6" style="display: block;">
          <label class="control-label col-sm-4" for="from">From:</label>          
          <div class='input-group date col-sm-12' id='datetimepicker1'>
            {!!Form::text('from','',array('id'=>'from','class'=>'form-control','data-error'=>'Please select your date of birth','placeholder'=>($job->j_from)?$job->j_from:'mm/yyyy'), null )!!}
                    
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>                
          </div>
          <div class="help-block with-errors"></div>
          </div>

          <div class="col-md-6">
          <label class="control-label col-sm-4" for="to">To:</label>          
          <div class='input-group date col-sm-12' id='datetimepicker2'>
            {!!Form::text('to','',array('id'=>'to','class'=>'form-control','data-error'=>'Please select your date of birth','placeholder'=>($job->j_to)?$job->j_to:'mm/yyyy'), null )!!}
                    
            <span class="input-group-addon">
              <span class="glyphicon glyphicon-calendar"></span>
            </span>                
          </div>
          <div class="help-block with-errors"></div>
          </div>
        </div>
          <script type="text/javascript">
            //Datetime picker
          $('#datetimepicker1').datetimepicker({
             format: 'MM/YYYY'
           });
          $("#datetimepicker1").data('datetimepicker').setLocalDate(new Date(year, month));

           $('#datetimepicker2').datetimepicker({
             format: 'MM/YYYY'
           });
          </script>                  

      </div>
      <br/>

      <div class="row">
        <div class="form-group" >
              <label for="job_desc" class="control-label col-sm-2">Description:</label>
              <div class="col-md-12">
                
                {!!Form::textarea('job_desc','',array('rows'=>'2','id'=>'job_desc','placeholder'=>($job->job_desc)?$job->job_desc:null,'class'=>'form-control'))!!}
                            
              </div>
            </div> 
      </div>
    </div>
  </div>
  </div>
</div>

<div class="row">
  <div class="panel panel-default">
    <div class="panel-heading">Certifications (if any)</div>

    <div class="panel-body">
      <div class="container" style="width: auto;">

        <div class="row">
          <div class="form-group" >
              <label for="cert_title" class="control-label col-sm-2" >Certification Title:</label>
              <div class="col-sm-12">
                
                {!!Form::text('cert_title','',array('id'=>'cert_title','placeholder'=>($cert->title)?$cert->title:'Certification title','class'=>'form-control'))!!}
                            
              </div>
          </div>
        </div>

        <br/>
        <div class="row">
          <div class="form-group" >
              <label for="cert_auth" class="control-label col-sm-2" >Issuing Authority:</label>
              <div class="col-sm-12">
                
                {!!Form::text('cert_auth','',array('id'=>'cert_auth','placeholder'=>($cert->authority)?$cert->authority:'Certification Authority','class'=>'form-control'))!!}
              </div>
          </div>
        </div><br/>

        <div class="row">
          <div class="form-group" >
              <label for="cert_desc" class="control-label col-sm-2">Description:</label>
              <div class="col-md-12">
                
                {!!Form::textarea('cert_desc','',array('rows'=>'2','id'=>'cert_desc','placeholder'=>($cert->description)?:null,'class'=>'form-control'))!!}
              </div>
            </div> 
          </div>
        </div>


      </div>
    </div>
  </div>


<div class="row">
<div class="form-group">
    <div class="col-md-offset-8 col-md-12 row" style="padding-left: 4.8em">
      <button type="reset" class="btn btn-default">RESET</button>&nbsp;
      <button type="submit" class="btn btn-primary btn-lg">Save and Proceed <span class="glyphicon glyphicon-chevron-right"></span></button>
    </div>                            
</div>
</div>

<div class="row">
&nbsp;
</div>

	
{!!Form::close()!!}
</div>

</div>
  
@endsection

@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#other').addClass('active');







        });


    </script>
@endsection