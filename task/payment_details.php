<?php
  session_start();
  require('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title> Payment Detalis </title>
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
<script src="js/script.js"></script>

<!-- Datatable Jquery/CSS -->
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
            <nav class="navbar navbar-inverse">
        <div class="navbar-header">
          <a class="navbar-brand" href="logout.php">Admin Logout</a>
        </div>
      </div>
      <div class="row">
            <nav class="navbar navbar-inverse">
        <div class="navbar-header">
          <a class="navbar-brand" href="check_out.php">Check Out</a>
        </div>
      </div>
    </nav>
        <main class="container-fluid"> 
           <section class="row justify-content-center">

              <div class="col-sm-12">
                <div class="table-responsive bg-white p-4">
                   <?php
                      $sql = "SELECT payment_details.name, payment_details.email,payment_details.state,payment_details.paid_amount,payment_details.status, state.id,state.state_name FROM payment_details INNER JOIN state on state.id=payment_details.state";
                       $result = mysqli_query($conn, $sql);
                       $arr_users = array();
                        while ($row = mysqli_fetch_assoc($result)) 
                       {
                           $arr_users[] = $row;  
                       }
                         
                  ?>
                  <table id="users">
                      <thead>
                          <th>S.No</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>State</th>
                          <th>Paid Amount</th>
                          <th>status</th>
                      </thead>
                      <tbody>
                          <?php if(!empty($arr_users)) { ?>
                              <?php foreach($arr_users as $user) { ?>
                                  <tr>
                                      <td><?php echo $user['id']; ?></td>
                                      <td><?php echo $user['name']; ?></td>
                                      <td><?php echo $user['email']; ?></td>
                                      <td><?php echo $user['state_name']; ?></td>
                                      <td><?php echo $user['paid_amount']; ?></td>
                                      <td><a href="#?id=<?php echo $user['id']; ?>"><?php if($user['status'] == 0) echo "Pending"; else{ echo "Approved";} ?></a></td>
                                  </tr>
                              <?php } ?>
                          <?php } ?>
                      </tbody>
                  </table>

                </div>

              </div>

           </section>
   <!--end-table-section-start--> 

               </main>
            </div>
         </div>
      </div>
   </body>
</html>






