
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="mystyle.css">
</head>
<body style=" background: #9FE2BF">
	<div style= "text-align: center";>
		<?php 
	   if(isset($_POST["save"]) && $_POST["save"]=="SAVE")
	  {
		echo "USERNAME: ".$_POST["username"]."<br>";
		echo "FIRSTNAME: ".$_POST["firstname"]."<br>";
		echo "EMAIL: ".$_POST["email"]."<br>";
		echo "PHONE: ".$_POST["phone"]."<br>";
		echo "DIGIT: ".$_POST["digit"]."<br>";
		echo "COUNTRY: ".$_POST["country"]."<br>";
		echo "STATE: ".$_POST["state"]."<br>";
		echo "GENDER: ".$_POST["gender"]."<br>";
		echo "Hobbies: <br>";
		if(!empty($_POST["hobbies"]))
		{
			foreach($_POST["hobbies"] as $hobby)
			{
				echo $hobby."<br>";
			}
		}
		echo "MESSAGE: ".$_POST["message"]."<br>";
	}
?>
</div>
	<div class="container">
		<div class="row">
			<div class="col-md-8" style="margin: 0 auto;">
	
<h1 style="text-align: center;">Register Here</h1>
	<form action="" method="POST">

		<div class="form-group row">
			<label class="col-md-2">Username;</label>
			<div class="col-md-10">
				<input type="text" name="username"  class="form-control"/>
			</div>			
		</div>

    <div class="form-group row">
		<label class="col-md-2">Fullname:</label>
		<div class="col-md-10">
		<input type="text" name="firstname" id="" class="form-control"/>
	 </div>
	</div>
		<div class="form-group row">
		<label class="col-md-2">Email:</label>
		<div class="col-md-10">
		<input type="email" name="email" id="" class="form-control"/>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-2">Phone:</label>
		<div class="col-md-9">
		<div class="col-md-2 phone">+91</div>
		<input type="tel" name="phone" id="" class="form-control phone-text col-md-10"/>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-2">Digit:</label>
		<div class="col-md-9">
		<div class="col-md-2 phone">+91</div>
		<input type="number" name="digit" id="" class="form-control phone-text col-md-10"/>
	</div>
	</div>
		<div class="form-group row">
		<label class="col-md-2">Country:</label>
		<div class="col-md-10">
		<select name="country" id="" class="form-control">
			<option value="india">India</option>
			<option value="China">China</option>
			<option value="Pakistan">Pakistan</option>
			<option value="Srilanka">Srilanka</option>
		</select>
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-2">State:</label>
		<div class="col-md-10">
		<select name="state" id="" class="form-control">
			<option value="Jharkhand">Jharkhand</option>
			<option value="Bihar">Bihar</option>
			<option value="Utrakhand">Utrakhand</option>
			<option value="Jaamu & Kashmir">Jaamu & Kashmir</option>
		</select>
 	</div>
 </div>
   <div class="form-group row">
		<label class="col-md-2">Gender:</label>
		<div class="col-md-10">
		<input type="radio" name="gender" value="Male"/>Male<br>
		<input type="radio" name="gender" value="Female"/>Female
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-2">Hobbies:</label>
		<div class="col-md-10">
		<input type="checkbox" name="hobbies[]" value="Playing Cricket"/>Playing Cricket<br>
		<input type="checkbox" name="hobbies[]" value="Singing"/>Singing<br>
		<input type="checkbox" name="hobbies[]" value="Dancing"/>Dancing<br>
		<input type="checkbox" name="hobbies[]" value="Fighting"/>Fighting
		</div>
	</div>
	<div class="form-group row">
		<label class="col-md-2">Message:</label>
		<div class="col-md-10">
		<textarea name="message" class="form-control"></textarea>
		<input type="submit" name="save" class="btn-btn-primary" value="SAVE"/>
	</div>
</div>
	</form>
			</div>
		</div>
	
	</div>
</body>
</html>