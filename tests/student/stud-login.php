<?php
  session_start();
  require('conn.php');
  if(isset($_POST['submit']))
  {
      $email = $_POST['email'];
      $password =$_POST['password'];
      $sql = "select id from student where email = '$email' AND password = '$password'";
      $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) == 1)
      {
        $data = mysqli_fetch_assoc($result);
        $_SESSION['id'] = $data['id']; 
        header("location:dashboard.php");
      }
      else
      {
        echo "Invalid User or Password";
      }
  }
?>
<!DOCTYPE html>

<head>
    <title>Student Login</title>
</head>
<body>
	<div class="container">
		<div class="row justify-content-center mt-5">
			<div class="col-sm-5">	
				<div class="login-box">
					<div class="mb-4 text-center"> 
						<h2> Student Login  </h2> 
					</div>
					<form action=" " method="post">
    					<div class="form-group">
      						<input type="email" class="form-control" placeholder="Email" name="email">
   					    </div>
					    <div class="form-group">
					        <input type="password" class="form-control" placeholder="Password" name="password">
					    </div>
					    <button type="submit" name="submit" class="btn btn-success btn-block"><i class="fa fa-sign-in"></i> Login </button>
  					</form>
  					<div class="login-footer">
  						<p> Forgot <a href="forgot.html  "> Password? </a></p>
  				</div>
			</div>
		</div>
	</div>
</body>
</html>