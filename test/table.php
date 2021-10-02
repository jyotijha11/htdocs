<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Table</title>
</head>
<body>
<?php 
for($i=2;$i<=25;$i++)
{
	for($j=1;$j<=10;$j++)
	{
		echo $i." X ".$j." = ".$i*$j;
		echo "<br>";

	}
	echo "*******<br>";
}
?>
</body>
</html>