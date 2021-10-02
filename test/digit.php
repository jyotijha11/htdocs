<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Digits</title>
</head>
<body>
 <?php  
    $num = 1487;  
    $sum=0; 
    $rem=0;  
  for ($i =0; $i<=strlen($num);$i++)  
     {  
      $rem=$num%10;  
       $sum = $sum + $rem;  
       $num=$num/10;  
      }  
  echo "Sum of digits =  ". $sum;  
 ?>  
</body>
</html>