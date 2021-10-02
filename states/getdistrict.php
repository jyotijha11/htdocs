<?php 
if(!empty($_POST['state']))
{
	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "data";
	$conn = mysqli_connect($servername, $username, $password, $db);
	$state_id = $_POST['state'];
	$sql = mysqli_query($conn, 'SELECT * FROM district WHERE state_id = "'.$state_id.'"ORDER BY district_name');
	echo "<option> Select District..</option>";
	while($district = mysqli_fetch_array($sql))
	{
		echo "<option value = '".$district['id']."'>". $district['district_name']."</option>";
	}
}