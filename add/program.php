<?php
for($i=2;$i<=2;$i++)
{
	for($j=1;$j<=10;$j++)
	{
		echo $i ."X". $j ."=". $i*$j;
		echo "<br>";
	}
	echo "__________________<br>";
}
?>
<?php
  function even($num)
	{
		if($num%2==0)
		{
			echo $num. " is even no..";
		}
		else
		{
			echo $num. " is odd no..";
		}
	}
	echo even(4);
?>
<?php

  <form name="signup" action="#" method="POST">
      <input type="text" name="first_name" />
      <input type="text" name="last_name" />
      <input type="email" name="email" />
      <input type="text" name="mobile">
      <input type="password" name="password">
      <select name="country">
        <option value="India">India</option>
        <option value="USA">USA</option>
      </select>
  </form>
?>