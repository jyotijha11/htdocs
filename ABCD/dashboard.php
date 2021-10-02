  <?php
  include('header.php');

  if(!isset($_SESSION['id']) || empty($_SESSION['id']))
  {
     header("location:emp-login.php");
  }
  require('conn.php');
  ?>
               
  <section class="row justify-content-center">

              <div class="col-sm-12">
                <div class="table-responsive bg-white p-4">
                  
                     <?php

                      $sql = "SELECT id,emp_name,leave_type,request_date,leave_days,status,start_date,end_date,emp_id FROM emp_leaves WHERE id=".$_SESSION['id'];
                       $result = mysqli_query($conn, $sql);

                       $arr_emp = array();
                       
                       while ($row = mysqli_fetch_assoc($result)) 
                       {
                           $arr_emp[] = $row;  
                       }  
                  ?>
                  <div class="mb-4 text-center"> <h1>Employee Dashboard</h1> </div>
                  <table id="emp">
                      <thead>
                        
                          <th>S.No</th>
                          <th>Employee Name</th>
                          <th>Leave Type</th>
                           <th>Requested Date </th>
                          <th>Start Date</th>
                          <th>End Date</th>
                          <th>Status</th>
                          <th>Emp ID</th>
                          
                         
                      </thead>
                      <tbody>
                          <?php if(!empty($arr_emp)) { ?>
                              <?php foreach($arr_emp as $emp) { ?>
                                  <tr>
                                   
                                      <td><?php echo $emp['emp_id']; ?></td>
                                      <td><?php echo $emp['emp_name']; ?></td>
                                      <td><?php echo $emp['leave_type']; ?></td>
                                      <td><?php echo $emp['request_date']; ?></td>
                                      <td><?php echo $emp['leave_days']; ?></td>
                                      <td><?php echo $emp['start_date']; ?></td>
                                      <td><?php echo $emp['end_date']; ?></td>
                                      <td><?php echo $emp['status']; ?></td>
                                       <a class="btn btn-sm btn-success" href="empupdate.php?id=<?php echo $emp['id'];?>"> <i class="fa fa-edit"></i> Update </a> 
                                      
                                       </td>
                                        <td>
                                       <a class="btn btn-sm btn-success" href="Empstatus.php?id=<?php echo $emp["id"];?>"> <i class="fa fa-edit"></i> Status </a> 
                                      
                                       </td>
                                  </tr>
                              <?php } ?>
                          <?php } ?>
                      </tbody>
                  </table>

                </div>

              </div>

           </section>

                  </div>

                </div>

             </section>
     <!--end-table-section-start--> 
  <?php
  include('footer.php');
  ?>