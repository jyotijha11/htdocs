<?php
include('header.php');
  
  if(!isset($_SESSION['id']) || empty($_SESSION['id']))
  {
     header("location:index.php");
  }
  require('conn.php');
?>


    <div class="container">
                   
                  <!--table-section-start--> 
           <section class="row justify-content-center">

              <div class="col-sm-12">
                <div class="table-responsive bg-white p-4">
                  
                    <?php

                       $sql = "SELECT id,roll_no,leaves_days, request_date, status FROM emp_leaves WHERE id=".$_SESSION['id'];

                       $result = mysqli_query($conn, $sql);

                       $arr_users = array();
                       
                       while ($row = mysqli_fetch_assoc($result)) 
                       {
                           $arr_users[] = $row;  
                       } 
                        
                  ?>
                  <div class="mb-4 text-center"> <h1>Employee Dashboard</h1> </div>
                  <table id="users">
                      <thead>
                        
                          <th>S.No</th>
                          <th>roll_no</th>
                          <th>leaves_days</th>
                          <th>request_date </th>
                          <th>status </th>
                          
                         
                      </thead>
                      <tbody>
                          <?php if(!empty($arr_users)) { ?>
                              <?php foreach($arr_users as $users) { ?>
                                  <tr>
                                   
                                      <td><?php echo $users['id']; ?></td>
                                      <td><?php echo $users['roll_no']; ?></td>
                                      <td><?php echo $users['leaves_days']; ?></td>
                                      <td><?php echo $users['request_date']; ?></td>
                                      <td><?php echo $users['status']; ?></td>
                                      
                                       <a class="btn btn-sm btn-success" href="empupdate.php?id=<?php echo $users["id"];?>"> <i class="fa fa-edit"></i> Edit </a> 
                                      
                                       </td>
                                        <td>
                                       <a class="btn btn-sm btn-success" href="Empstatus.php?id=<?php echo $users["id"];?>"> <i class="fa fa-edit"></i> Status </a> 
                                      
                                       </td>
                                  </tr>
                              <?php } ?>
                          <?php } ?>
                      </tbody>
                  </table>

                </div>

              </div>

           </section>
         <?php 
         		header("location:footer.php")
          ?>