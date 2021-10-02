<?php
if(isset($_POST['Submit'])){
	echo $Name = $_POST['Name']. "</br>";
	echo $Course = $_POST['Course']. "</br>";
	echo $Gender = $_POST['Gender']. "</br>";
	echo $Phone = $_POST['Phone']. "</br>";
	echo $Email = $_POST['Email']. "</br>";
}
?>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="backClass"> 
<br>  
<form class= "myfirstid"> 

<label > Firstname: &nbsp</label>          
<input type="text" name="firstname"  size="10"/> <br> <br>   
<label> Middlename:</label>     
<input type="text" name="middlename"  size="10"/> <br> <br>  
<label> Lastname: &nbsp</label>         
<input type="text" name="lastname"  size="10"/> 
<br> <br>  
  
<label>   
Course :  
</label>   
<select>  
<option value="Course">Course</option>  
<option value="BCA">BCA</option>  
<option value="BBA">BBA</option>  
<option value="B.Tech">B.Tech</option>  
<option value="MBA">MBA</option>  
<option value="MCA">MCA</option>  
<option value="M.Tech">M.Tech</option>  
</select>  
  
<br>  
<br>  
<label>   
Gender :  
</label><br>  
<input type="radio" name="male"/> Male <br>  
<input type="radio" name="female"/> Female <br>  
<input type="radio" name="other"/> Other  <br>  
<br>  
<label>   
Phone :  
</label>  
<input type="text" name="country code"  value="+91" size="2"/>   
<input type="text" name="phone" size="10"/> <br> <br>  
Address  
<br>  
<textarea cols="80" rows="5" value="address">  
</textarea>
<br> <br>  
Email:  
<input type="email" id="email" name="email"/> <br>    
<br> <br>   
<input type="button" value="Submit"/>  
</form>
</div>
</body>  
</html>