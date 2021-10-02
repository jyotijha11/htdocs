<?php
require(conn.php);
if(isset($_POST[submit]))
{
	$fname=$_POST['first_name'];
	$lname=$_POST['last_name'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$password=$_POST['password'];
	$role=0;
	$sql = "INSERT INTO user(first_name,last_name,phone,email,role) VALUES('$fname', '$lname', '$phone', '$email', '$password', '$role')";
	
}