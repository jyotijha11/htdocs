<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Armstong</title>
</head>
<body>
<?php  
	$num=407; 
	$t=0;  
	$x=$num;  
	while($x!=0)  
	{  
		$r=$x%10;  
		$t=$t+($r*$r*$r);  
		$x=$x/10;  
	}  
	if($num==$t)  
	{  
		echo $num. " is an Armstrong number";  
	}  
	else  
	{  
		echo $num. " is not an Armstrong number";  
	}  
?>  
</body>
</html>
