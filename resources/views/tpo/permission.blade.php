@extends('tpo.layout.tpolayout')

@section('content')
<div class="panel panel-default">
  <div class="panel-heading">Account Permission</div>
  <div class="panel-body">
          <table class="table table-bordered table-hover text-center">
                      <thead>
                          <tr>
                              <th class="text-center">Gr No.</th>
                              <th class="text-center">Name</th>
                              <th class="text-center">Permission Requested</th>
                              <th class="text-center">Institute</th>
                              <th class="text-center">Permission</th> 
                            </tr>
                        
                        </thead>
                        
                        <tbody>

                          
<?php
                          if(count($result)>0){
                            for($i=0;$i<count($result);$i++)
                            {
                              echo "
                                <tr>
                                  <td> ".$result[$i]['gr_no'] ."</td>   
                                  <td>".$result[$i]['fname']."</td>";

                                  if($result[$i]['type']==0)
                                  {
                                    echo "<td>Student</td>";
                                  }
                                  else if($result[$i]['type']==1)
                                  {
                                    echo "<td>Staff</td>"; 
                                  }

                                  else if($result[$i]['type']==2)
                                  {
                                    echo "<td>T.P.O</td>"; 
                                  }
                                  else if($result[$i]['type']==3)
                                  {
                                    echo "<td>Administrator</td>"; 
                                  }
                                  else
                                  {
                                    echo "<td>Unknown type</td>"; 
                                  }
                            
                                echo"
                                  <td>".$result[$i]['scope']."</td> ";  
                            
                                echo "
                                  <td><a href='admin/allow/".$result[$i]['gr_no'] ."'><span class='glyphicon glyphicon-ok'></span></a> &nbsp;
                                  <a href='admin/deny/".$result[$i]['gr_no'] ."'><span class='glyphicon glyphicon-remove'></span></a>
                                  </td>
                              </tr>   ";                           
                            }
                          }
                          ?>
                                                  
                        </tbody>

                    </table>
  </div>
  </div>              

@endsection
