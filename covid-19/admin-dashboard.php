<?php
  session_start();
  require('conn.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dashboard</title>
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <link href='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.css' rel='stylesheet' />
  <link href='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.print.css' rel='stylesheet' media='print' />
  <script src='https://cdn.jsdelivr.net/npm/moment@2.24.0/min/moment.min.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css"/>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script type="text/javascript" src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
      <script>
       $(document).ready(function() {
       $('#users').DataTable();
   });
      </script>
      <style type="text/css">
    .formwrap{
      width: 70%;
      margin: 0 auto;
      margin-top: 85px;
      padding: 25px;
      background: #eee;
      border: 1px solid #00000047;
    }
     body
        {
          background-image: url('https://cloudfront-us-east-2.images.arcpublishing.com/reuters/VEKSCTM4ERJNFDZX7ZKNEJZP2A.jpg');
          background-repeat: no-repeat;
          background-size: cover;


        }
  </style>
      </head> 
      <body>
  
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand" href="location.php">CovinApp</a>
        </div>
        <ul class="nav navbar-nav">
          <li class="active"><a href="location.php">Home</a></li>
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="location.php">Location<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="add-location.php">Add Location</a></li>
              <li><a href="location-list.php">Location List</a></li>
              <!-- <li><a href="scheduled.php">Scheduled Booking</a></li> -->
            </ul>
          </li>
        </ul>
      </div>
    </nav>
    <?php
       $sql= "SELECT * FROM schedule";
       $result = mysqli_query($conn, $sql);
       $arr_users = array();       
       while ($row = mysqli_fetch_assoc($result)) 
       {
           $arr_users[] = $row;  
       } 
      ?>
        <div class="mb-4 text-center"> <h1></h1> </div>
          <table  id="users">
              <thead>
                  <th>S.No</th>
                  <th>name</th>
                  <th>gender</th>
                  <th>adhar</th>
                  <th>phone</th>
                  <th>address</th>
                  <th>dob</th>
                  <th>stime</th>
                  <th>sdate</th>
                  <th>&nbsp;</th> 
              </thead>
              <tbody>
                  <?php if(!empty($arr_users)) { ?>
                      <?php foreach($arr_users as $users) { ?>
                          <tr>
                            <td><?php echo $users['id']; ?></td>
                            <td><?php echo $users['name']; ?></td>
                            <td><?php echo $users['gender']; ?></td>
                            <td><?php echo $users['adhar']; ?></td>
                            <td><?php echo $users['phone']; ?></td>
                            <td><?php echo $users['address']; ?></td>
                            <td><?php echo $users['dob']; ?></td>
                            <td><?php echo $users['stime']; ?></td>
                            <td><?php echo $users['stime']; ?></td>        
                            <td><button type="submit">DONE</button></td>
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
