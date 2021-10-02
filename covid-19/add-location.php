<?php
 require('conn.php');
 if(isset($_POST['search']))
 {
  $location = $_POST['location'];
  $description = $_POST['description'];
  $slot = $_POST['slot'];
  $sql = "INSERT INTO location (location,description,slot) VALUES('$location','$description','$slot')";
  if(mysqli_query($conn,$sql))
  {
     echo "New record created successfully";
  }
  else
  {
    echo "Error: " . mysqli_error($conn);
  }
 }
?>
<!DOCTYPE html>
<html>
<head>
  <title>ADD LOCATION</title>
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  
  <link href='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.css' rel='stylesheet' />
  <link href='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.print.css' rel='stylesheet' media='print' />
  <script src='https://cdn.jsdelivr.net/npm/moment@2.24.0/min/moment.min.js'></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.js'></script>
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
<div class="container">
  <div class="row">
    <div class="col-md-12">
      <div class="formwrap">
        <h2>Add Location</h2>
          <form action="" method="POST">
            <div class="form-group">
              <label for="location">Location</label>
              <input type="text" name="location" class="form-control">
            </div>
            <div class="form-group">
              <label for="location">Description</label></br>
              <textarea class="form-control" id="form4Example3" name ="description" rows="4"></textarea>
            </div>
            <div class="form-group">
              <label for="location">slot</label>
              <input type="text" name="slot" class="form-control">
            </div>
            <button  type="submit" name="search" class="btn btn-primary" value="SEARCH">ADD</button>
          </form>
        </div>
    </div>
  </div>
</div>

</body>
</html>