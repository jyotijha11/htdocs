<?php
function even($x)
{
  if($x%2==0)
  {
    echo $x. " is a even no.";
  }
  else
  {
    echo $x. " is a odd no.";
  }
}
//echo even(4);
echo even(4);
echo "<br>";
?>
<?php
$num = 100;

for($i = 1; $i <= 10; $i++)
{ 
  for($j =1; $j <= $num; $j++)
  {
    $m = ($i * $j);
    echo "<td>$j  x $i =  $m</td>";
    echo "<br>";
  }
}
?>