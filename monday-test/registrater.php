<?php
require('conn.php');
	if(isset($_POST['registrater'])){

		$name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $password =$_POST['password'];

    $temp = explode(".", $_FILES["img"]["name"]);

		$newfilename = round(microtime(true)) . '.' . end($temp);


      $sql = "INSERT INTO user (name,email,address,gender,dob,password,img) VALUES('$name','$email','$address','$gender','$dob','$password', '$newfilename')";

      $result = mysqli_query($conn, $sql);

      if($result)
      {
      	move_uploaded_file($_FILES["img"]["tmp_name"], "upload/".$newfilename);

        $data = mysqli_fetch_assoc($result);
        
          header("location:login.php");
      }
      else 
      {
          echo "Data not inserted";
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
    .formwrap{
      width: 100%;
      margin: 0 auto;
      margin-top: 85px;
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
				<div class="mb-4 text-center"> <h2> Registrater Here:- </h2> </div></div>
				<form action="" method="POST" enctype="multipart/form-data">
				<div class="formwrap">
					<div class="row">
						<div class="col-sm-6 mb-4">
							<label>Name</label>
							<input type="text" class="form-control" placeholder="Name" name="name" required> 
						</div>
					</div>
					<div class="row">
						<div class="col-sm-6 mb-4">
						<label>E-mail</label>
				         <input type="email" name="email" class="form-control" placeholder="Email" required >
				      </div>
				  </div>
					<div class="row">
						<div class="col-sm-6 mb-4">
						<label>Address</label>
				         <input type="text" class="form-control" placeholder="Address" name="address" required>   
				      </div>
					</div>				
					<div class="row">
				       <div class="form-group">
				         <label>Gender</label><br>
				         <select name="gender">
				         	<option value=" ">Select</option>
				         	<option value="female">Female</option>
				         	<option value="male">Male</option>
				         	<option value="other">Other</option>
				         </select>
	 				   </div>
				   </div>
			       <div class="row">
			       	<div class="form-group">
			       		<label>Date of Birth</label>
			        	<input type="date" class="form-control" placeholder="Date of Birth" name="dob"><br>
			        </div>
			       </div>
			       <div class="form-group">
                <label for="img" class="control-label">Upload Profile Image</label>
                <input type="file" class="form-control" name="img" required>
            </div>
				    <div class="row">
				    	<div class="form-group">
				    	<label>Password</label>
				         <input type="password" class="form-control" placeholder="Password" name="password">
				        </div>
				    </div>
				    <button type="submit" name="registrater" class="btn btn-success btn-block"><i class="fa fa-send"></i>Registrater</button>
				  </div>
				</form>
			</div>
		</div>
	</div>
</div>
</body>
</html>
