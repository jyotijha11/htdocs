<?php
$conn = mysqli_connect("localhost", "root", "", "ppt");
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}
if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email'];
	$password = md5($_POST['password']);
    $sql = "INSERT INTO user(name, phone, email, password) VALUES('$name' , '$phone' , '$email','$password')"; 
		$result = mysqli_query($conn,$sql);
		$row = mysqli_num_rows($result);
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
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>sign_up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css2? 
    family=Roboto+Slab:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
	<div class="row justify-content-center mt-5">
		<div class="col-sm-8">
			<div class="login-box">
				<div class = "md-4 text-center">
					<h1>Sign Up</h1>
					<form method="post" action=" ">
						<div class="row">
						<div class="col-sm-6 mb-4">
							<label>Username</label>
							<input type="text" class="container" name="name" placeholder="Name">
						</div>
						<div class="col-sm-6 mb-4">
							<label>Phone</label>
							<input type="text" class="container" name="phone" placeholder="Phone">
						</div>
						<div class="col-sm-6 mb-4">
							<label>Email</label>
							<input type="email" class="container" name="email" placeholder="Email">
						</div>
						<div class="col-sm-6 mb-4">
							<label>Password</label>
						    <input type="password" class="container" name="password" placeholder="Password">
						</div>
						<button type="submit" name="submit" class="btn btn-success btn-block"> Sign up <i class="fa fa-send"></i> </button>
					</div>
					</form>
				</div>
			</div>
			
		</div>
	</div>
	
</div>
</body>
</html>