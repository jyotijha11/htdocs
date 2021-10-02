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
			<input type="text" name="first_value" id="" class="form-control"/>
		</div>
		<div class="form-group">
			<label>Enter Second Value</label>
			<input type="text" name="second_value" id="" class="form-control"/>
		</div>
		
		<input type="submit" name="save" value="Display"/>
		<div class="form-group">
	 <h3>
		<?php 
			if(isset($_POST['save']))
		         {
		         	if
		         	(isset($_POST['save'])){
					$first = $_POST['first_value'];
					$second = $_POST['second_value'];
					$sum = $first + $second;
					$minus = $first - $second;

		         } 
	    ?>
		</h3>
		</div>
	</form>
	
			</div>
		</div>
	
	</div>
</body>
</html>