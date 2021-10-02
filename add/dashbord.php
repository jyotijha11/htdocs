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
?>
//login
<?php 
session_start();
require('conn.php');
if ($_POST['submit']) 
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
                echo "Error:".mysqli_error($conn);
              }
    }
?>
//dashbord 
<?php 
session_start();
require('conn.php');
if(!isset($_SESSION['id'])||empty(($_SESSION['id']))
{
   header("location:index.php");
}

?>