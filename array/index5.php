<?php 
$ar = array (1,2,3,8,5,6);   
$arr = array (1,2,5,4,5,6);   
echo $ar[3]. "<br>" .$arr[2]; 
echo "<br>";
$re= $ar[3]+$arr[2];
echo $re;
echo "<br>";
array_push($ar, $re);
print_r($ar);

foreach ($ar as $jyoti => $value) {
	if($jyoti == 2){
		$ar[2] = $re;
	}
}

print_r($ar);
?>