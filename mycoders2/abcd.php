<?php
  session_start();
  require('conn.php');
  if(isset($_POST['submit'])){
      $email = $_POST['email'];
      $password = md5($_POST['password']);
      $sql = "select id, first_name, last_name from user where email = '$email' AND password = '$password'";
      $result = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result);
      $count=mysqli_num_row($result);
      if($count==1)
      {
      	$_SESSION['id'] = $row['id'];
      	$_SESSION['username'] = $row['first_name']." ".$row['last_name'];
      	header("location:dashboard.php");
      }
      else
      {
      	echo "Invalid User or Password";
      }
   }   
?>