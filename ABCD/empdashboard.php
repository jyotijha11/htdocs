<?php
include('header.php');
  
  if(!isset($_SESSION['id']) || empty($_SESSION['id']))
  {
     header("location:emplogin.php");
  }
  require('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <title> Employee Dashboard </title>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
      <link rel="stylesheet" href="css/style.css">
      <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
      <script src="js/script.js"> 
      </script>
         <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script>
       $(document).ready(function() {
       $('#users').DataTable();
   });
      </script>

   </head>
   <body>
      <div class="container-fluid">
         <div class="row">
            
            <div class="col-md-3 col-lg-2 px-0 position-fixed h-100 bg-white shadow-sm sidebar" id="sidebar">
               <div class="list-group rounded-0">
                 <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#user-collapse" style="background-color: #00ffff;height: 72px">
                     <div>
                        <span class="bi bi-person"></span>
                       <h5 style="color: white;">Option</h5>
                     </div>
                     <span class="bi bi-chevron-down small"></span>
                  </button>
                  <div class="collapse" id="user-collapse" data-parent="#sidebar">
                     <div class="list-group">
                        <!-- <a href="addemp.php" class="list-group-item list-group-item-action border-0 pl-5">
                           Add Employee 
                        </a>
                        <a href="addemp.php" class="list-group-item list-group-item-action border-0 pl-5">
                           Manage Employee 
                        </a> -->
                     </div>
                  </div> 
                 
                  

                  <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#purchase-collapse">
                    
                  <div class="collapse" id="purchase-collapse" data-parent="#sidebar">
                     <div class="list-group">
                        <!-- <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Sellers</a>
                        <a href="#" class="list-group-item list-group-item-action border-0 pl-5">Purchase Orders</a> -->
                     </div>
                  </div>
               </div>
            </div>
            <!-- overlay to close sidebar on small screens -->
            <div class="w-100 vh-100 position-fixed overlay d-none" id="sidebar-overlay"></div>
            <!-- note: in the layout margin auto is the key as sidebar is fixed -->
            <div class="col-md-9 col-lg-10 ml-md-auto px-0">
               <!-- top nav -->
               <nav class="w-100 bg-primary d-flex px-4 py-2 mb-4 shadow-sm"><center> <h1 style="color: white;">Employee Dashboard</h1></center>
                  <!-- close sidebar -->
                  <button class="btn py-0 d-lg-none" id="open-sidebar">
                  <span class="bi bi-list text-white h3"></span>
                  </button>
                  <div class="dropdown ml-auto">
                     <button class="btn py-0 d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
                     <span class="bi bi-person text-white h4"></span>
                     <span class="bi bi-chevron-down ml-1 text-white mb-2 small"></span>
                     </button>
                     <div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown">
                        <a class="dropdown-item" href="emplogin.php">Logout</a>
                       
                     </div>
                  </div>
               </nav>
               <!-- main content -->

               <main class="container-fluid">
                  <section class="row">
                     <div class="col-md-6 col-lg-4">
                        <!-- card -->
                       <!--  <article class="p-4 bg-primary shadow-sm  
                           mb-4">
                           <a href="#" class="d-flex align-items-center">
                              <span class="bi bi-box h5 text-white"></span>
                              <h5 class="ml-2 h5 text-white"></h5>
                           </a>
                        </article> -->
                     </div>

                     <div class="col-md-6 col-lg-4">
                        <!-- card -->
                        <!-- <!-- <article class="p-4 bg-info shadow-sm  
                           mb-4">
                           <!-- <a href="#" class="d-flex align-items-center"> -->
                              <!-- <span class="bi bi-cart-plus h5 text-white"></span>
                              <h4>Employee Leaderboard</h4>
                              <h5 class="ml-2 h5 text-white"> </h5>
                           </a>
                        </article> --> 
                     </div>

                      <div class="col-md-6 col-lg-4">
                        <!-- card -->
                        <!-- <article class="p-4 bg-success shadow-sm  
                           mb-4">
                           <a href="#" class="d-flex align-items-center">
                              <span class="bi bi-cart-dash h5 text-white"></span>
                              <h5 class="ml-2 h5 text-white">  </h5>
                           </a>
                        </article> -->
                     </div>
                     
                     
                  </section>

                   
                  <!--table-section-start--> 
           <section class="row justify-content-center">

              <div class="col-sm-12">
                <div class="table-responsive bg-white p-4">
                  
                    <?php

                       $sql = "SELECT id,username,emp_pass,emp_name,emp_email,date_of_join,designation,emp_type,update_status,date_of_birth FROM employees WHERE id=".$_SESSION['id'];

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
                          <th>Username</th>
                          <th>Leave_Days</th>
                          <th>Start_Date</th>
                          <th>End_Date</th>
                          <th>Requested_Date </th>
                          <th>Status </th>
                          
                         
                      </thead>
                      <tbody>
                          <?php if(!empty($arr_users)) { ?>
                              <?php foreach($arr_users as $users) { ?>
                                  <tr>
                                   
                                      <td><?php echo $users['id']; ?></td>
                                      <td><?php echo $users['emp_name']; ?></td>
                                      <td><?php echo $users['leave_type']; ?></td>
                                      <td><?php echo $users['request_date']; ?></td>
                                      <td><?php echo $users['leave_days']; ?></td>
                                      <td><?php echo $users['status']; ?></td>
                                      <td><?php echo $users['start_date']; ?></td>
                                      <td><?php echo $users['Status']; ?></td>
                                      
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
   <!--end-table-section-start--> 

            <?php include('footer.php');