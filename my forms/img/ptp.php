<?php
session_start();
require('conn.php');
if(!isset($_SESSION['id'])||empty($_SESSION['id']))
{
	header("loction.login.phph");
}
?>
<?php
session_start();
require('conn.php');
if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$password = md5($_POST['password'])
	$sql = "select id from employees where email='$email' password='$password'";
	$result = mysqli_query($conn,$sql);
	if(mysqli_num_row($result)==1)
	{
		$data = mysqli_fetch_assoc($result);
		$_SESSION['id'] = $data[id] 
	}
}
?>