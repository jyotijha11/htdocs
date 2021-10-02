<?php 
session_start();
require('conn.php');
if(isset($_POST['submit']))
{
  
  
 $username = $_POST['username'];
 $password = $_POST['password'];
  $sql = "select id from admin where username = '$username' AND password = '$password'";
  $result = mysqli_query($conn,$sql);
  if((mysqli_num_rows($result))==1)
  {
     $data = mysqli_fetch_assoc($result);
     $_SESSION['id'] = $data['id'];
     header('location:admin-dashboard.php');
  }
  else
      {
        echo "Invalid User or password";
      }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>  Admin Login </title>

  <meta charset="utf-8">  
  <meta username="viewport" content="width=device-width, initial-scale=1">
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
      width: 70%;
      margin: 0 auto;
      margin-top: 85px;
      padding: 25px;
      background: #eee;
      border: 1px solid #00000047;
    }
     body
        {
          background-image: url('https://www.google.com/imgres?imgurl=https%3A%2F%2Fpng.pngtree.com%2Fthumb_back%2Ffh260%2Fbackground%2F20200714%2Fpngtree-modern-double-color-futuristic-neon-background-image_351866.jpg&imgrefurl=https%3A%2F%2Fpngtree.com%2Ffree-backgrounds&tbnid=v88-M_AJ_P6MCM&vet=12ahUKEwiGsr_9_MjyAhXAkksFHYKwBusQMygAegUIARDOAQ..i&docid=nrS8yXEy4V6zEM&w=555&h=260&q=background%20image&ved=2ahUKEwiGsr_9_MjyAhXAkksFHYKwBusQMygAegUIARDOAQ');
          background-repeat: no-repeat;
          background-size: cover;


        }
  </style>
</head>
<body>

<div class="container">

<!--form-Login-->

<div class="row justify-content-center mt-5">
<div class="col-sm-5">
<div class="login-box">
   <div class="formwrap">
      <div class="mb-4 text-center"> <h2> Admin Login  </h2> </div>
      <form action="" method="post">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Username" name="username">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Password" name="password">
        </div>
        <button type="submit" name="submit" class="btn btn-success btn-block"> <i class="fa fa-sign-in"></i> Login </button>
      </form>
      
   </div>
</div>
</div>
</div>
</div>
</body>
</html>
