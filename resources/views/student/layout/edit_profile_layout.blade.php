@extends('student.layout.studentlayout')
@section('content')





        

    


        
        <div class="panel panel-default">
            <div class="panel-heading" style="background-color: #fff">
                <ul class="nav nav-pills">
                    <li id='personal' role="presentation"><a href="personal">Personal Details</a></li>
                    <li id='academic' role="presentation" ><a href="academic"> Academic Details</a></li>
                    <li id='other' role="presentation" ><a href="other">Other Details</a></li>
                    <li id='career' role="presentation" ><a href="career">Career Options</a></li>
                </ul>

            </div>

            <div class="panel-body">

            @yield('tabs')
                
            </div>

       
        
        
        </div>

    
    <!--Internal Panel-->




@endsection


@section('script')
    @yield('script')
@endsection