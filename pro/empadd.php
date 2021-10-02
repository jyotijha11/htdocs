<?php
session_start();
require('conn1.php');
if(!isset($_SESSION['id']) || empty($_SESSION['id'])){
      header("location:emp-add.php");
}

$id=$_GET['id'];
$sql = mysqli_query($conn1, "select * from user where id= '$id'");
$result = mysqli_fetch_assoc($sql);

if(isset($_POST['submit'])){
  $fname= $_POST['first_name'];
  $lname= $_POST['last_name'];
  $mobile= $_POST['mobile'];
  $email= $_POST['email'];
  $sql ="UPDATE user SET first_name = '$fname', last_name = '$lname', mobile = '$mobile', email = '$email' WHERE id='$id'";
  mysqli_query($conn1, $sql);
  header("location:dashboard.php");
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>  Employee Login </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

<!--form-Login-->

<div class="row justify-content-center mt-5">
<div class="col-sm-7">
<div class="login-box">
<div class="mb-4 text-center"> <h2> Employee  </h2> </div>
  <form action="" method="POST">

    <div class="row">
       <div class="col-sm-6 mb-4">Username
         <input type="text" class="form-control" placeholder="Username" name="username">   
      </div>
      <div class="col-sm-6 mb-4">Employee Password
          <input type="text" class="form-control" placeholder="Employee-Pass" name="emp-pass"> 
      </div>
    </div>

    <div class="row">
       <div class="col-sm-6 mb-4">Employee Name
         <input type="text" class="form-control" placeholder="Employee-Name" name="emp-name">   
      </div>
      <div class="col-sm-6 mb-4">Employee Email
         <input type="email" class="form-control" placeholder="Employee-Email" name="emp-email">   
      </div>
    </div>
    <div class="row">
    <div class="col-sm-6 mb-4">Date Of Join
        <input type="date" class="form-control" placeholder="Date-Of-Join" name=" date-of-join">
    </div>
    <div class="col-sm-6 mb-4">Employee Type
        <input type="text" class="form-control" placeholder="Employee-Type" name="emp-type">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-6 mb-4">Designation
         <input type="text" class="form-control" placeholder="Designation" name="designation">
    </div>
    <div class="col-sm-6 mb-4">Update Status
        <input type="date" class="form-control" placeholder="Update-Status" name="update-status">
    </div>
  </div>
   <div class="row">
    <div class="col-sm-6 mb-4">Date of Birth
        <input type="date" class="form-control" placeholder="Date-Of-Birth" name="date-of-birth">
    </div>
  </div>
    <button type="submit" name="submit"class="btn btn-success btn-block"> Save <i class="fa fa-send"></i> </button>
  </form>
  <div class="login-footer">
  </div>
</div>
</div>
</div>
<!--Login-end-->

</div>
</body>
</html>
