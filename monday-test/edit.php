<?php
session_start();
require('conn.php');
if(!isset($_SESSION['id']) && !empty($_SESSION['id']))
{
    header("location:login.php");
}

$id=$_SESSION['id'];
$sql = "SELECT * FROM user where id= '$id'";
$res = mysqli_query($conn,$sql);
$result = mysqli_fetch_assoc($res);

if(isset($_POST['update'])){
      $name = $_POST['name'];
      $address = $_POST['address'];
      $dob = $_POST['dob'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      
      if(isset($_POST['password']) && !empty($_POST['password'])){
      	$password = md5($_POST['password']);
      	$sql = "UPDATE user SET name = '$name', address = '$address', dob = '$dob', gender = '$gender', email = '$email', password = '$password' WHERE id='$id'";
      }else{
      	$sql = "UPDATE user SET name = '$name', address = '$address', dob = '$dob', gender = '$gender', email = '$email', password = '$password' WHERE id='$id'";
      }

      if (mysqli_query($conn, $sql)) 
      {
      	header("location:my_profile.php");
      } else 
      {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
      }  
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Registration</title>
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
  <style type="text/css">
    .formwrap
    {
      width: 100%;
      margin: 0 auto;
      margin-top: 5px;
      padding: 25px;
      background: #eee;
      border: 1px solid #00000047;
    }
    /*body
        {
          background-image: url('https://res.cloudinary.com/grohealth/image/upload/$wpsize_!_cld_full!,w_2143,h_1398,c_scale/v1588092341/iStock-495067660.jpg');
          background-size: cover;


        }*/
  </style>
</head>
<body style="background-color:powderblue;">
<div class="container">
	<div class="row justify-content-center mt-5">
		<div class="col-sm-7">
			<div class="login-box">
				<div class="mb-4 text-center"> <h2> Edit Profile </h2> </div>
				<form action="" method="POST">
				<div class="formwrap">
					<div class="row">
						<div class="form-group">							
							<input type="text" class="form-control" placeholder="Name" name="name"  value="<?php echo $result['name'];?>"> 
						</div>
					</div>
					<div class="row">
						<div class="form-group">
				         <input type="date" name="dob" class="form-control" placeholder="Date of Birth"  value="<?php echo $result['dob'];?>">
				      </div>
				  </div>
					<div class="row">
						<div class="form-group">
				         <input type="text" class="form-control" placeholder="Address" name="address"  value="<?php echo $result['address'];?>">   
				      </div>
					</div>				
					<div class="row">
				       <div class="form-group">
				         <input type="text" class="form-control" placeholder="gender" name="gender"  value="<?php echo $result['gender'];?>"> 
	 				   </div>
				   </div>
			       	<div class="row">
				    	<div class="form-group">
				         <input type="email" class="form-control" placeholder="Email" name="email" value="<?php echo $result['email'];?>">
				        </div>
				    </div>
				    <div class="row">
				    	<div class="form-group">
				         <input type="password" class="form-control" placeholder="Password" name="password">
				        </div>
				    </div>
				    <button type="submit" name="update" class="btn btn-success btn-block"><i class="fa fa-send"></i>Update</button>
				  </div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>
</body>
</html>
