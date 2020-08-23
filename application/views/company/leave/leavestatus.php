<?php
$addperemployee = $controller->gettablecolumns('addperemployee');
$addperemployeevalues = array();
?>
<style>
         .material-switch > input[type="checkbox"] {
                  display: none;   
         }
         .material-switch > label {
                  cursor: pointer;
                  height: 0px;
                  position: relative; 
                  width: 40px;  
         }

         .material-switch > label::before {
                  background: rgb(0, 0, 0);
                  box-shadow: inset 0px 0px 10px rgba(0, 0, 0, 0.5);
                  border-radius: 8px;
                  content: '';
                  height: 16px;
                  margin-top: -8px;
                  position:absolute;
                  opacity: 0.3;
                  transition: all 0.4s ease-in-out;
                  width: 40px;
         }
         .material-switch > label::after {
                  background: rgb(255, 255, 255);
                  border-radius: 16px;
                  box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.3);
                  content: '';
                  height: 24px;
                  left: -4px;
                  margin-top: -8px;
                  position: absolute;
                  top: -4px;
                  transition: all 0.3s ease-in-out;
                  width: 24px;
         }
         .material-switch > input[type="checkbox"]:checked + label::before {
                  background: inherit;
                  opacity: 0.5;
         }
         .material-switch > input[type="checkbox"]:checked + label::after {
                  background: inherit;
                  left: 20px;
         }
</style>
<div class="row" id="addperemployeeconfig">
         <div class="col-sm-12">
                  <!-- start: TEXT FIELDS PANEL -->
                  <!--<div class="panel panel-white">-->
                  <div class="panel-heading">
                           <h4 class="panel-title"> LEAVE <span class="text-bold">APPROVAL</span></h4>
                           <div class="panel-tools">
                                    <div class="dropdown">
                                             <a data-toggle="dropdown" class="btn btn-xs dropdown-toggle btn-transparent-grey">
                                                      <i class="fa fa-cog"></i>
                                             </a>
                                             <?php echo $this->load->view('part/include/formconfig', '', TRUE); ?>
                                    </div>
                           </div>
                  </div>
                  <div class="panel-body">
                           <table id="leaveapproval" class="table-bordered table-responsive table">
                                    <thead>
                                    <th class="col-lg-1">EmplNo</th>
                                    <th>Name</th>
                                    <th>Leave Type</th>
                                    <th>From</th>
                                    <th>To </th>
                                    <th>Total Days</th>
                                    <th></th>
                                    </thead>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                           </table>

                  </div>
         </div>
</div>

