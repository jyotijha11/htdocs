<?php 

for ($i=1; $i <=2 ; $i++) 
{ 
	for ($j=1; $j <=10 ; $j++)
	{
		echo $i. "X" .$j. "=" .$i*$j;
		echo "<br>";
	}
	echo "<br>";
}
?>
<?php
function even($num)
{
	if ($num%2==0) {
		echo $num. " is even numbeer";
	}
	else{
		echo $num." is odd number";
	}
}
echo even(3);
?>
<?php
  echo "<br>";
$a1=array(2,3,4);
$a2=array(6,5,4);
$a3=array_merge($a1,$a2);
echo "<br>";
print_r(array_reverse($a3));
for ($i=1; $i <=$a3 ; $i++) 
{ 
	for ($j=1; $j <=5 ; $j++)
	{
		echo $i. "X" .$j. "=" .$i*$j;
		echo "<br>";
	}
	echo "<br>";
}
?>