<?php
session_start();
require('conn.php');
if(isset($_POST['submit']))
{
   $location_id = $_POST['location_id'];
   $date = $_POST['date'];
   $sql ="UPDATE schedule SET location_id = $location_id, sdate = '$date' WHERE id=".$_SESSION['id'];
   echo $sql;

    mysqli_query($conn, $sql);
  header("location:user-profile.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Reschedule</title>
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
          background-image: url('https://cloudfront-us-east-2.images.arcpublishing.com/reuters/VEKSCTM4ERJNFDZX7ZKNEJZP2A.jpg');`
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
          <li class="active"><a href="reschedul.php">Reschedul</a></li>
        </ul>
      </div>
    </nav>
  <div class="container-fluid">
    <div class="row" id="location_modal">
        <div class="col-6 border-left" id="frm-field">
            <div class="formwrap">
                <h3>Reschedule:</h3>
                <form id="schedule_form" method="POST" action="">
                    <input type="hidden" name="lid" >
                    <input type="hidden" name="date_sched">
                        <div class="form-group">
                              <label for="location">Location</label>
                              <select name="location_id" class="form-control" id="location">
                                <option value="<?php echo $row['id'];?>">Select</option>
                                <?php $sql = mysqli_query($conn, "select id, location from location");
                                while($row=mysqli_fetch_assoc($sql))
                                {
                                  ?>
                                    <option value="<?php echo $row['id']; ?>" <?php if($_SESSION['location_id'] == $row['id']) { echo "selected"; } ?>><?php echo $row['location']; ?></option>
                                  <?php
                                }
                                ?>
                              </select>
                        </div>
                        <div class="form-group">
                            <label for="date" class="control-label">date</label>
                            <input type="date" class="form-control" name="date" required>
                        </div>
                         <button type="submit" name="submit" class="btn btn-primary">Save <i class="fa fa-send"></i> </button>
               </form>
            </div>
        </div>
      </div>
</div>
</body>
</html>