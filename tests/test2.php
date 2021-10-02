<?php  
	$num=121; 
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