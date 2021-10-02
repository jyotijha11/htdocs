<?php 
session_start();
  require('conn.php');
  if(!isset($_SESSION['id']) || empty($_SESSION['id']))
  {
     header('location:dashboard.php');
  }
  else
  {
    $id = $_SESSION['id'];
  }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>DASHBOARD</title>
	
<script>
$(document).ready(function() 
{
    $('#users').DataTable();
});
</script>
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4 col-lg-2 px-0 position-fixed h-100 bg-white shadow-sm sidebar">
			<div class="list-group rounded-0">
				<div class="list-group" >
				    <button class="list-group-item list-group-item-action border-0 d-flex justify-content-between align-items-center" data-toggle="collapse" data-target="#user-collapse" style="background-color: #DAF7A6;height: 72px">
                     <div>
                        <span class="bi bi-person"></span>
                       <h5 style="color: pink;">Option</h5>
                     </div>
                     <span class="bi bi-chevron-down small"></span>
                    </button>

				</div>
			</div>
		</div>
		<div class = "w-100 vh-100 position-fixed overlay d-none" id="sidebar-overlay" ></div>
		<div class="col-md-8 col-lg-10 ml-md-auto px-0">
			<nav class="w-100 bg-primary d-flex px-4 py-2 mb-4 shadow-sm">
				<center><h1 style="color: white;">Dashboard</h1></center>
				<button class="btn py-0 d-lg-none" id="open-sidebar">
					<span class="bi bi-list text-white h3"></span>
				</button>
				<div class="dropdown ml-auto">
					<button class="btn py-0 d-flex align-items-center" id="logout-dropdown" data-toggle="dropdown" aria-expanded="false">
						<span claclass="bi bi-person text-white h4"></span>
						<span class="bi bi-chevron-down ml-1 text-white mb-2 small"></span>
					</button>
					<div class="dropdown-menu dropdown-menu-right border-0 shadow-sm" aria-labelledby="logout-dropdown"></div>
					<a class="dropdown-item" href="stud-login.php">Logout</a>
					<a class="dropdown-item" href="update_user.html">Settings</a>
				</div>
			</nav>
			<main class="container-fluid">
				<section class="row justify-content-center">

              <div class="col-sm-12">
                <div class="table-responsive bg-white p-4">
            <div class="container">
			<div class="row justify-content-center mt-5">
			<div class="col-sm-7">
			<div class="login-box">
			<div class="mb-4 text-center"> <h1>Apply for Leave</h1> </div>
			<form action="" method="POST" enctype="multipart/form-data">
 				<div class="row">
			       <div class="col-sm-12 mb-4">
			         <h3>Request Date</h3><input type="Date" class="form-control" placeholder="" name="request_date">   
			      </div>
			    </div>
			      <div class="row">
			      <div class="col-sm-12 mb-4">
			         <h3>Leave Days</h3><input type="text" class="form-control" placeholder="" name="leaves_days">   
			      </div>
			    </div> 
			    <button type="submit"  name="submit" value="submit" class="btn btn-primary btn-block"><a href="emp_dashboard.php"></a> Apply <i class="fa fa-send"></i> </button>
			  </form>
			  <div class="login-footer">
			     
	        </div>
			</div>
			</div>
			</div>
			</div>
			</body>
			</html>
			<?php
			      require('conn.php');
			       if(isset($_POST['submit']) && $_POST['submit'] = "submit")
			       {  
			      
			        $request_date=$_POST['request_date'];
			        $leaves_days =$_POST['leaves_days'];

			        $sql = "INSERT INTO  leave (request_date,leaves_days) VALUES('$request_date','leaves_days')";
			        if (mysqli_query($conn, $sql)) 
			          {
			          
			            echo "New record created successfully";
			          }
			       else 
			          {
			            echo "Error: " . mysqli_error($conn);
			          }
			    }
			  ?>