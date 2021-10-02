//prime
<?php 
echo "<br>__________________________<br>";
function prime($num)
{
    if ($num== 1)
    return 0;
    for ($i = 2; $i <= $num/2; $i++)
    {
        if ($num % $i == 0)
            return 0;
    }
    return 1;
}
$num = 21;
$flag = prime($num);
if ($flag == 1)
    echo $num. " is a prime number";
else
    echo $num. " is not a prime number";
echo "<br>__________________________<br>";

?>
//reverse
<?php
echo "<br>__________________________<br>";
function reverse($num)
{
    $reverse = 0;
    while ($num > 0)
      {
        $reverse = $reverse * 10;
        $reverse = $reverse + $num % 10;
        $num = (int)($num/10);
      }
     return $reverse;
}
echo reverse(12345);
echo "<br>__________________________<br>";
?>
//table
<?php
echo "<br>__________________________<br>";
for($s=15;$s<=30;$s++)
{
	for($r=1;$r<=10;$r++)
	{
		echo $s ."X". $r ."=". $s*$r;
		echo "<br>";
	}
	echo "<br>________________<br>";
}
?>