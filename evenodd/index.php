<?php
function number($mynumber){
	if($mynumber%2==0)
	echo " is an Even no";
	else
	echo " is an Odd no";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="from.css">
</head>

<centre>
<body>
	<div>
</div>
	<div class="container">
		<div class="row">
			<div class="col-md-4 mx-auto">
	<form action="" method="POST">
		<div class="form-group">
			<label>Enter Value</label>
			<input type="text" name="user_value" id="" class="form-control"/>
		</div>
		<div class="form-group">
			<label>Enter Second Value</label>
			<input type="text" name="second_value" id="" class="form-control"/>
		</div>
		
		<input type="submit" name="save" value="Display"/>
		<div class="form-group"><h3>
			<?php
				if(isset($_POST['save'])){
					echo $uvalue = $_POST['user_value'];
					$second = $_POST['second_value'];
					$sum = $uvalue + $second;
					echo number($sum);
					echo "</br>";
					echo "Sum of two numbers is ".$sum;
					echo number($uvalue);
					}
			?>
		</h3>
		</div>
	</form>
	
			</div>
		</div>
	
	</div>
</body>
</center>
</html>