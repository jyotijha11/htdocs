//1 echo
<?php 
echo "<br>_____________________<br>";

echo "MyCoders";

echo "<br>_____________________<br>";
echo "<br>";
?>
//2 explode
<?php 
echo "<br>_____________________<br>";

$s = "Hello Friends . Welcom to My Coders .";
print_r(explode( " " , $s));

echo "<br>_____________________<br>";
echo "<br>";
?>
//3 htimlspecialchar
<?php 
echo "<br>_____________________<br>";
$s = "Hey!how are you <b> now </b>.";
echo htmlentities($s);

echo "<br>_____________________<br>";
echo "<br>";
?>
//4 implode
<?php 
echo "<br>_____________________<br>";
$as = array('Hello', 'Friends','!', 'this', 'Is', 'MyCoders', '.');
echo implode("*",$as);
echo "<br>_____________________<br>";
echo "<br>";
?>
//5 lcfirst
<?php 
echo "<br>_____________________<br>";
echo lcfirst("Hello friends");
echo "<br>_____________________<br>";
echo "<br>";
?>
//6 ltrim
<?php 
echo "<br>_____________________<br>";
$s = "Welcom to My Coders!";
echo $s. "<br>";
echo ltrim($s,"Welcom");
echo "<br>_____________________<br>";
echo "<br>";
?>
//7 md5
<?php 
echo "<br>_____________________<br>";
$p = "hi";
echo md5($p);
echo "<br>_____________________<br>";
echo "<br>";
?>
//8number_format
<?php 
echo "<br>_____________________<br>";
echo number_format("100000000",5)."<br>";
echo "<br>_____________________<br>";
echo "<br>";
?>
//9 nl2br
<?php 
echo "<br>_____________________<br>";
echo nl2br("Hey! Friends.\n How are you?");
echo "<br>_____________________<br>";
echo "<br>";
?>
//10 strlen
<?php
echo "<br>_____________________<br>";
echo strlen("Hello");
echo "<br>_____________________<br>";
echo "<br>";
?>