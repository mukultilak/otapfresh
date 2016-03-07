@extends('tpo.layout.tpolayout')




	
@section('content')


<div class="container">
    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
                <p>Company Name</p>
            </div>

            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
                <p>Drive Details</p>
            </div>

            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
                <p>Criteria</p>
            </div>

            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-default btn-circle" disabled="disabled">4</a>
                <p>Job Description</p>
            </div>

            <div class="stepwizard-step">
                <a href="#step-5" type="button" class="btn btn-default btn-circle" disabled="disabled">5</a>
                <p>To Do</p>
            </div>
        </div>
    </div>


{!!Form::open(array('url'=>'drive-register','id'=>'login-form','class'=>'form-horizontal','role'=>'form','data-toggle'=>'validator'))!!}

    <div class="row setup-content" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">

             <div class="panel panel-default">
            	<div class="panel-body">
            		
               		<h3 class="page-header">Company Details</h3>
                	<div class="form-group col-md-12">
                        <label class="control-label">Company Name</label>
                    
                        {!!Form::text('comp_name','',array('id'=>'cname0','placeholder'=>'Enter Company Name','class'=>'form-control','required'=>'required','max-length'=>'200'), null )!!}
                	</div>

                	<div style="text-align: center" class="col-md-12">
           				 <a href="" type="button" class="btn btn-default btn-circle" disabled="disabled">OR</a>
            		</div>
                    
                	<div class="form-group col-md-12">
                    <label class="control-label">Select from existing database</label>
                    
                     {!! Form::select('cname', 
                                    (['' => 'Select a Company','1'=>'Aress','2'=>'Persistent'] ), 
                                    null, 
                                    ['class' => 'form-control','id'=>'cname']) !!}
                	</div>

                </div><!--Panel body-->
            </div><!--Panel-->
            <br/><br/>
            <div class="col-md-12">    
            	<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
            </div>

            </div>
        </div>
    </div>

    <div class="row setup-content" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">

                <div class="panel panel-default">
                    <div class="panel-body">

                        <h3 class="page-header"> Drive Details</h3>

                        <div class="form-group col-md-12">
                            <label class="control-label">Venue</label>
                    	
                            {!!Form::text('venue','',array('id'=>'venue','placeholder'=>'Venue','class'=>'form-control','required'=>'required','max-length'=>'200'), null )!!}
                        </div>

                        <div class="form-group col-md-12">
                            <label class="control-label">Drive Type</label>
                    	
                            {!! Form::select('drive_type', 
                                    (['0' => 'Type','1'=>'In-Campus','2'=>'Off-Campus'] ), 
                                    null, 
                                    ['class' => 'form-control','id'=>'drive_type','required'=>'required']) !!}
                        </div>

                         <div class="form-group col-md-12">
                            <label class="control-label">Select Department</label>
                                <?php
                                echo $dept;
                                ?>
                        </div>

                        <div class="form-group col-md-12">
                            <label class="control-label">Date & Time</label>
                
                         <div class='input-group date' id='datetimepicker1'>
                                {!!Form::text('timestamp','',array('id'=>'timestamp','class'=>'form-control col-md-6','required'=>'required','data-error'=>'Please specify event date','placeholder'=>'dd/mm/yyyy'), null )!!}
                    
                                <span class="input-group-addon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </span>                
                            </div>
                            <div class="help-block with-errors"></div>
                        </div>
                        <script type="text/javascript">
                                //Datetime picker
                            $('#datetimepicker1').datetimepicker({
                                format: 'YYYY/DD/MM'
                            });
                        </script>
                        </div>

                        
                    </div>
                    <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>

                </div>



            </div>
            
            
        </div>
        <div style="height:100px"></div>
    </div>
    

    <div class="row setup-content" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
            
            <div class="panel panel-default">
            	<div class="panel-body">            	
                	<h3>Criteria</h3>
                		<div class="form-group col-md-12">
                    		<label class="control-label">Percentage</label>
                    	   {!!Form::input('number','percent','',$options=array('id'=>'percent','placeholder'=>'Percentage','class'=>'form-control','required'=>'required','min'=>'0'))!!}

                		</div>

                		<div class="form-group col-md-12">
                    		<label class="control-label">ATKT</label>
                    	
                    		{!! Form::select('atkt', 
                                    (['0' => 'Select','1'=>'Allowed','2'=>'Not Allowed'] ), 
                                    null, 
                                    ['class' => 'form-control','id'=>'atkt','required'=>'required']) !!}
                		</div>

                		<div class="form-group col-md-3">
                    		<label class="control-label" for='atkt'>Live</label>
                    	
                     		{!! Form::radio('live', 1, null, ['class' => '','id'=>'atkt','required'=>'required']) !!}
                    	</div>

						<div class="form-group col-md-3">
                    		<label class="control-label" for='atkt'>Dead</label>
                      		{!! Form::radio('live',false , null, ['class' => '','id'=>'atkt','required'=>'required']) !!}
                		</div>

				</div><!--Panel Body-->
            </div><!--Panel-->

                     <br/><br/> 
			<div class="col-md-12,">                        
				<button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
			</div>

                
        </div>
    </div>
    </div>



    <div class="row setup-content" id="step-4">
        <div class="col-xs-12">
            <div class="panel panel-default">
            <div class="panel-body">
            <div class="col-md-12">
                <h3 class="page-header">Job Description</h3>
                	 <div class="form-group col-md-12">
                    <label class="control-label">Job Location</label>
                    	
                    {!!Form::text('location','',array('id'=>'location','placeholder'=>'Job Location','class'=>'form-control','required'=>'required','max-length'=>'200'), null )!!}
                </div>
                	 <div class="form-group col-md-12">
                    <label class="control-label">Package</label>
                    	
                    {!!Form::text('pkg','',array('id'=>'pkg','placeholder'=>'Package','class'=>'form-control','required'=>'required','max-length'=>'200'), null )!!}
                </div>

                <div class="form-group col-md-12">
                    <label class="control-label">Upload</label>
                    {!! Form::file('image', null) !!}
                </div>
                	
                 <div class="form-group col-md-12">
                    <label class="control-label">Description</label>
                    	
                    {!!Form::textarea('desc','',array('id'=>'desc','placeholder'=>'','class'=>'form-control','required'=>'required','rows'=>'3'), null )!!}
                 <br/><br/>   
                 </div></div>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
                </div>

                 


               
            </div>
        </div>
    </div>


    <div class="row setup-content" id="step-5">
        <div class="col-xs-12">
            
            <div class="panel panel-default">
                <div class="panel-body">
                    <h3 class="page-header">To Do</h3>

                    <div class="col-xs-6">
            
            
                            <div class="well" style="max-height: 300px;overflow: auto;">
                                    <ul id="check-list-box" class="list-group checked-list-box">
                                        <li class="list-group-item">To Do #0</li>
                                        <li class="list-group-item" data-color="primary">To Do #1</li>
                                        <li class="list-group-item" data-color="primary">To Do #2</li>
                                        <li class="list-group-item" data-color="primary">To Do #3</li>
                                        <li class="list-group-item" data-color="primary">To Do #4</li>
                                    </ul>
                                    <br />
                                <button class="btn btn-primary col-xs-12" id="get-checked-data">Confirm</button>
                            </div>
                            
                        {!! Form::hidden('todo', '', array('id' => 'todo')) !!}

                    </div>
                    <div class="col-xs-6">
                    <pre id="display-json"></pre>
                    </div>

                

                </div>
                <br/>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="submit" >Save</button>
            </div>
        </div>
    </div>                    

{!!Form::close()!!}
</div>

@endsection



@section('script')
<script>
    $(function () {
    $('.list-group.checked-list-box .list-group-item').each(function () {
        
        // Settings
        var $widget = $(this),
            $checkbox = $('<input type="checkbox" class="hidden" />'),
            color = ($widget.data('color') ? $widget.data('color') : "primary"),
            style = ($widget.data('style') == "button" ? "btn-" : "list-group-item-"),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };
            
        $widget.css('cursor', 'pointer')
        $widget.append($checkbox);

        // Event Handlers
        $widget.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });
          

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $widget.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $widget.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$widget.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $widget.addClass(style + color + ' active');
            } else {
                $widget.removeClass(style + color + ' active');
            }
        }

        // Initialization
        function init() {
            
            if ($widget.data('checked') == true) {
                $checkbox.prop('checked', !$checkbox.is(':checked'));
            }
            
            updateDisplay();

            // Inject the icon if applicable
            if ($widget.find('.state-icon').length == 0) {
                $widget.prepend('<span class="state-icon ' + settings[$widget.data('state')].icon + '"></span>');
            }
        }
        init();
    });
    
    $('#get-checked-data').on('click', function(event) {
        event.preventDefault(); 
        var checkedItems = {}, counter = 0;
        $("#check-list-box li.active").each(function(idx, li) {
            checkedItems[counter] = $(li).text();
            counter++;
        });
        $('#display-json').html(JSON.stringify(checkedItems, null, '\t'));
        
        $('#todo').val(JSON.stringify(checkedItems, null, '\t'));//Edited
    });
});
</script>

<script>
$('#cname').change(function(){

	$('#cname0').val($('#cname option:selected').text());
});

	$(document).ready(function () {

    var navListItems = $('div.setup-panel div a'),
            allWells = $('.setup-content'),
            allNextBtn = $('.nextBtn');

    allWells.hide();

    navListItems.click(function (e) {
        e.preventDefault();
        var $target = $($(this).attr('href')),
                $item = $(this);

        if (!$item.hasClass('disabled')) {
            navListItems.removeClass('btn-primary').addClass('btn-default');
            $item.addClass('btn-primary');
            allWells.hide();
            $target.show();
            $target.find('input:eq(0)').focus();
        }
    });

    allNextBtn.click(function(){
        var curStep = $(this).closest(".setup-content"),
            curStepBtn = curStep.attr("id"),
            nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
            curInputs = curStep.find("input[type='text'],input[type='url']"),
            isValid = true;

        $(".form-group").removeClass("has-error");
        for(var i=0; i<curInputs.length; i++){
            if (!curInputs[i].validity.valid){
                isValid = false;
                $(curInputs[i]).closest(".form-group").addClass("has-error");
            }
        }

        if (isValid)
            nextStepWizard.removeAttr('disabled').trigger('click');
    });

    $('div.setup-panel div a.btn-primary').trigger('click');
});
</script>
	@endsection




@section('style')

body{ 
    margin-top:40px; 
}

.stepwizard-step p {
    margin-top: 10px;
}

.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}

.stepwizard-step button[disabled] {
    opacity: 1 !important;
    filter: alpha(opacity=100) !important;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;

}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 30px;
  height: 30px;
  text-align: center;
  padding: 6px 0;
  font-size: 12px;
  line-height: 1.428571429;
  border-radius: 15px;
}

@endsection