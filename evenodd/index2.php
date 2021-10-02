<?php
$cars = array (
  array("Appel",22,18),
  array("Banana",15,13),
  array("Mango",5,2),
);
    
for ($i = 0; $i < 3; $i++) {
  echo "<p>Row number $i</p>";
  echo "<ul>";
  for ($j = 0; $j < 3; $j++) {
    echo "<li>".$cars[$i][$j]."</li>";
  }
  echo "</ul>";
}
?>
<?php
 echo "<br>";
$x =3;  
$count=0;  
for ( $i=1; $i<=$x; $i++)  
{  
if (($x%$i)==0)  
{  
$count++;  
}  
}  
if ($count<3)  
{  
echo $x. " is a prime number.";  
}
else
{
echo "$x is not a prime number."; 
}
?>
<?php 
 echo "<br>";
	function even($no)
	{
		for($i=1; $i<=10; $i++)
		{
			echo $no*$i;
			echo "<div>";
		}
	}
	echo even(2);
?>
<?php
 echo "<br>";
class Car {
  public $color;
  public $model;
  public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }
  public function message() {
    return "My car is a " . $this->color . " " . $this->model . "!";
  }
}

$myCar = new Car("blue", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("black", "Toyota");
echo $myCar -> message();
?>
<?php 
 echo "<br>";
$age = array("Sonam"=>"24", "Juli"=>"22", "Jyoti"=>"23");
echo "Sonam is " . $age['Sonam'] . " years old.<br>";
echo "Juli is " . $age['Juli'] . " years old.<br>";
echo "Jyoti is " . $age['Jyoti'] . " years old.<br>";
?>
