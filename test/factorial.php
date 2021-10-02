<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Factorial</title>
</head>
<body>
<?php 
$num = 4;  
$fact = 1;  
for ($x=$num; $x>=1; $x--)   
{  
  $fact = $fact * $x;  
}  
echo "Factorial of  ". $num. "  is  ".  $fact;  
?>
</body>
</html>