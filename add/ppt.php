//signup
<?php 
require('conn.php');
if ($_POST['submit']) 
{
  $fname = $_POST['first_name'];
  $lname = $_POST['last_name'];
  $mobile = $_POST['mobile'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $role = 0;
  
  $sql = "INSERT INTO(first_name,last_name,mobile,email,password,role) VALUES('$fname','$lname','$mobile','$email','$password','$role')";
  if(mysqli_query($conn,$sql))
  {
     echo "New recode created successfully";
  }
  else
  {
    echo "Error:".mysqli_error($conn);
  }
}
?>
//login
<?php 
session_start();
require('conn.php');
if (isset($_POST['submit']))
{
        $email = $_POST['email'];
        $password = $_POST['password'];
        $result =mysqli_query($conn,$sql);
        $row = mysqli_fetch_assoc($result);
        $count = mysli_num_row($result);
          if($count==1)
              {
                  echo "New recode created successfully";
              }
          else
              {
                  echo "Invalid User or Password";
              }
}
?>
//dashbord 
<?php 
session_start();
require('conn.php');
if(!isset($_SESSION['id'])||empty($_SESSION['id']))
{
   header"location:index.php";
}

?>
//delete
<?php 
require('conn.php');
$id = $_GET['id'];
$sql = mysqli_query($conn"delete from user where id = $id"); 
header("location:dashoard.php");
?>
//edit
<?php
 session_start();
require('conn.php');
    if(!isset($_SESSION['id'])||empty($_SESSION['id']))
    {
       header"location:index.php";
    } 
    $id = $_GET['id'];
    $sql = mysqli_query($conn"delete from user where id = $id");
    $result = mysqli_fetch_assoc($sql);
  if ($_POST['submit']) 
  {
      $email = $_POST['email'];
      $password = $_POST['password'];
      $result =mysqli_query($conn,$sql);
      $row = mysqli_fetch_assoc($result);
      $count = mysli_num_row($result);
      if(isset($_POST['submit'])){
          $fname= $_POST['first_name'];
          $lname= $_POST['last_name'];
          $mobile= $_POST['mobile'];
          $email= $_POST['email'];
          $sql ="UPDATE user SET first_name = '$fname', last_name = '$lname', mobile = '$mobile', email = '$email' WHERE id='$id'";
          mysqli_query($conn, $sql);
          header("location:dashboard.php");
}
}
?>
//add in form 
<?php 
if(isset($_POST['save'])
{
 if(isset($_POST['save'])){
          $first = $_POST['first_value'];
          $second = $_POST['second_value'];
          $sum = $first + $second;
          $minus = $first - $second;
          echo "</br>";
          echo "Sum of ".$first."+".$second." = ".$sum;
          echo "</br>";
          echo "Minus = ".$minus
}

?>
<?php
for($i=2;$i<=10;$i++)
{
  for($j=1;$j<=10;$j++)
  {
    echo $i."X".$j."=".$i*$j;
  }
}
?>
