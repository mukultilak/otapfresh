
@extends('student.layout.edit_profile_layout')
@section('tabs')

<div class="col-md-6 col-lg-12">         
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

    {!!Form::open(array('url'=>'personal_register','class'=>'form-horizontal','role'=>'form'))!!}


                    <!-- GR No -->        
                    <div class="form-group">
                        <label for="grno" class="control-label col-sm-2">G.R. Number:</label>
                        <div class="col-sm-10">
                            <p class="form-control-static"><strong><?php echo Auth::user()->gr_no ?></strong></p>                            
                        </div>
                    </div>

                    <!-- First Name -->
                    <div class="form-group">
                        <label for="fname" class="control-label col-sm-2">First Name:</label>
                        <div class="col-sm-10">
                            
                            {!!Form::text('fname','',array('id'=>'fname','placeholder'=>($u->fname)?$u->fname:"First Name",'class'=>'form-control','data-error'=>'Enter your first name'))!!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <!-- Middle Name -->
                    <div class="form-group">
                        <label for="mname" class="control-label col-sm-2">Middle Name:</label>
                        <div class="col-sm-10">
                            
                            {!!Form::text('mname','',array('id'=>'mname','placeholder'=>($u->mname)?$u->mname:"Middle Name",'class'=>'form-control'))!!}
                            
                        </div>
                    </div>

                    <!-- Last Name -->
                    <div class="form-group">
                        <label for="lname" class="control-label col-sm-2">Last Name:</label>
                        <div class="col-sm-10">
                            
                            {!!Form::text('lname','',array('id'=>'lname','placeholder'=>($u->lname)?$u->lname:"Last ame",'class'=>'form-control','data-error'=>'Enter your last name'))!!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <!-- Mother's maiden Name -->
                    <div class="form-group">
                        <label for="mot" class="control-label col-sm-2">Mother's Maiden Name:</label>
                        <div class="col-sm-10">
                            {!!Form::text('mot','',array('id'=>'mot','placeholder'=>($per->mothers_maiden_name?$per->mothers_maiden_name:"Mother's Maiden Name"),'class'=>'form-control','data-error'=>'Enter your Mother\'s maiden name'))!!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    
                     <!-- Date of Birth -->
                    <div class="form-group">
                        <label for="dob" class="control-label col-sm-2">Date Of Birth:</label>                     
                        <div class="col-sm-4">
                            <div class='input-group date' id='datetimepicker1'>
                            
                                {!!Form::text('dob','',array('id'=>'dob','class'=>'form-control col-md-6','data-error'=>'Please select your date of birth','placeholder'=>($per->dob)?date('d-m-y',strtotime($per->dob)):"dd/mm/yyyy"), null )!!}
                    
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>                
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <script type="text/javascript">
                                //Datetime picker
                            $('#datetimepicker1').datetimepicker({
                                format: 'DD/MM/YYYY'
                            });
                        </script>
                    </div>


                    <!-- Gender -->
                    <div class="form-group">
                        <label for="gender" class="control-label col-sm-2">Gender:</label>
                        <div class="col-sm-10">
                        <?php  
                        //Male
                            if($per->gender=='female'){
                            ?>
                             <label class="radio-inline">                            
                                    {!!Form::radio('gender', 'male')!!}Male
                                </label>

                                <label class="radio-inline">                                
                                    {!!Form::radio('gender', 'female',array('checked'=>'true'))!!}Female
                                </label>
                                          
                            <?php 
                            }else{
                                //Female
                            ?>
                                  <label class="radio-inline">                            
                                    {!!Form::radio('gender', 'male',array('checked'=>'true'))!!}Male
                                </label>

                                <label class="radio-inline">                                
                                    {!!Form::radio('gender', 'female')!!}Female
                                </label>              
                            <?php 
                            }
                            ?>                                           
                        </div>
                    </div>


                    <!--  Nationality -->
                    <div class="form-group">
                        <label for="nat" class="control-label col-sm-2">Nationality:</label>
                        <div class="col-sm-4"> 
                        <?php 
                        
                        if($per->nationality=='Other'){
                        ?>
                         {!! Form::select('nationality', 
                                    (['Other'=>'Other','Indian' => 'Indian']), 
                                    null, 
                                    ['class' => 'form-control','id'=>'nat']) !!}                       
                        <?php
                        } 
                        else{
                        ?>
                             {!! Form::select('nationality', 
                                    (['Indian' => 'Indian','Other'=>'Other']), 
                                    null, 
                                    ['class' => 'form-control','id'=>'nat']) !!}                       
                            
                        <?php 
                            }
                        ?>
                                        
                        </div>
                    </div>

                    <!-- Phone -->
                    <div class="form-group">
                        <label for="phone" class="control-label col-sm-2">Phone No.: </label>
                        <div class="col-sm-10">
                            {!!Form::text('phone','',array('id'=>'phone','placeholder'=>($per->phone)?$per->phone:"Phone number",'class'=>'form-control','data-error'=>'Enter your phone number'))!!}
                            
                            <div class="help-block with-errors"></div>
                        </div>
                    </div> 

                    <!-- Other Phone -->
                    <div class="form-group">
                        <label for="ophone" class="control-label col-sm-2">Other Phone No(opt):</label>    
                        <div class="col-sm-10">
                            
                            {!!Form::text('other_phone','',array('id'=>'ophone','placeholder'=>($per->other_phone)?$per->other_phone:"Other phone number",'class'=>'form-control'))!!}
                            
                        </div>
                    </div>

                    <!-- Email -->
                    <div class="form-group">
                        <label for="email" class="control-label col-sm-2">Email Id:</label>
                        <div class="col-sm-10">                    
                            
                            {!!Form::email('email','',array('id'=>'email','placeholder'=>($u->email)?$u->email:"xyz@example.com",'class'=>'form-control','data-error'=>'Enter a valid email address'))!!}
                            
                            <div class="help-block with-errors"></div>                        
                        </div>
                    </div>
                    <hr/>

                    <!--  Permanent Address -->
                    <div class="form-group">
                        <label for="padd" class="control-label col-sm-2">Permanent Address:</label>
                        <div class="col-sm-10">
                            
                            {!!Form::textarea('paddress','',array('rows'=>'5','id'=>'padd','placeholder'=>($per->paddress)?$per->paddress:"Permanent Address",'class'=>'form-control','data-error'=>'Please fill up your permanent address'))!!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                   <hr/>
                   
                    <!--  Correspondence Address -->
                    <div class="form-group">
                        <label for="cadd" class="control-label col-sm-2">Correspondence Address:</label>
                        <div class="col-sm-10">
                            
                            {!!Form::textarea('caddress','',array('rows'=>'5','id'=>'cadd','class'=>'form-control','placeholder'=>($per->caddress)?$per->caddress:"Correspondence Address",'data-error'=>'Please fill up your correspondence address'))!!}
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>

                    <!-- PIN Code -->
                    <div class="form-group">
                        <label for="pin" class="control-label col-sm-2">Pincode:</label>
                        <div class="col-sm-4">
                            <div class="input-group">
                                <span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-th"></span></span>

                                {!!Form::text('cpin','',array('id'=>'pin','placeholder'=>($per->cpin)?$per->cpin:"PIN",'class'=>'form-control','data-error'=>'Enter a valid PIN code','pattern'=>'^[0-9]{6}'))!!}
                            
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>



                   

                    <!--State-->
                    <div class="form-group">
                        <label for="state" class="control-label col-sm-2">State:</label>
                        <!-- Single button -->
                        <div class="col-sm-4">

                        @include('general.indian_states')

                        <div class="help-block with-errors"></div>
                        </div>
                    </div>
                     
                   
                    
                   
        



                    <!-- SUBMIT AND RESET -->
                    <div class="form-group">
                        <div class="col-md-offset-8 col-md-12 row" style="padding-left: 4.8em">
                            
                            {!! Form::reset('RESET', array('class' => 'btn btn-default')) !!}
                            &nbsp;
                            <button type="submit" class="btn btn-primary btn-lg">Save and Proceed <span class="glyphicon glyphicon-chevron-right"></span></button>                            
                            
                        </div>                            
                    </div>
    

    {!!Form::close()!!}


</div>

@endsection


@section('script')
    <script type="text/javascript">
        $(document).ready(function(){
            $('#personal').addClass('active');
            $('#dob').datepicker({
                format: "dd/mm/yyyy"
            });  

        });
    </script>
@endsection