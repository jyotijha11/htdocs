<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Prime</title>
</head>
<body>
<?php 
function prime($num){
    if ($num== 1)
    return 0;
    for ($i = 2; $i <= $num/2; $i++){
        if ($num % $i == 0)
            return 0;
    }
    return 1;
} 
$num = 22;
$flag = prime($num);
if ($flag == 1)
    echo $num. " is a prime number";
else
    echo $num. " is not a prime number";
?>
</body>
</html>