<?php
for($i=2;$i<=5;$i++)
{
	for($j=1;$j<=10;$j++)
	{
		echo $i ."X". $j ."=". $i*$j;
		echo "<br>";
	}
	echo "-------------------<br>";
}
?>
<?php 
function even($num)
{
	if($num%2==0)
	{
		echo $num. " is even no.";
	}
	else
	{
		echo $num. " is odd no.";
	}
}
echo even(3);
echo "<br>----------------<br>";
?>
<?php
	function leap($year)
	{
		if($year%4==0)
		{
			echo $year. " is leap year.";
		}
		else
		{
			echo $year. " is not a leap year.";
		}
	}
	echo leap(2001);
	echo "<br>--------------<br>";
?>
<?php 
$a=10;
$b=20;
$sum=$a+$b;
echo $sum;
?>