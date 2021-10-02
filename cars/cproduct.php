 <?php
 $conn = mysqli_connect("localhost", "root", "", "product");
	if (mysqli_connect_errno()) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit();
	}
	if(isset($_POST['save']))
	{
		$cname = $_POST['name'];
		$ccat = $_POST['cataegory'];
		$cprice = $_POST['car_price'];
		$csprice = $_POST['sale_price'];
		$ccolor = $_POST['color'];
		$chigh = $_POST['highlight'];
		$cimg = $_FILES["image"]["name"];
		$cdes = $_POST['description'];
		$pay =$_POST['cod'].",".$_POST['online'];
	    $sql = "INSERT INTO user(name,cat,price,sprice,color,feed,image,des,pay) VALUES('$pname','$pcat','$pprice','$sprice','$pcolor','$high','$pimg','$pdes','$pay')";
		if (mysqli_query($conn, $sql)) 
    	{
	        $filename = $_FILES["image"]["name"];
	        $tempname = $_FILES["image"]["tmp_name"];   
	        $folder = "upload/".$filename;
	        if (move_uploaded_file($tempname, $folder))  {
	            $msg = "Image uploaded successfully";
	        }
        else{
            $msg = "Failed to upload image";
        }
        echo "New record created successfully";
    }
    else 
    {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cars Products</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<div class="container">
    <div class="row">
        <div class="col-sm-12">
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-8 col-sm-offset-2">
    		<form method="post" action="" enctype="multipart/form-data">
    			Car Name: <br><input type="text" name="name" value=" "><br><br>
    			<label>Car Cataegory</label><br>
    			<select name="cataegory" value=" ">
    			<option value = "" selected>Category</option>
    			<option value="honda">Honad Amaze</option>
    			<option value="honda city">Honda City</option>
    			<option value="honda wr-v">Honda WR-V</option>
    			<option value="hinda jazz">Honda Jazz</option>
    		   </select><br><br>
    			Product Price: <br> <input type="text" name="car_price"><br><br>
    			Sale Price:  <br><input type="text" name="sale_price"><br>
    			<label>Cars Color</label><br>
                 <select name = "color">
                    <option value = "" selected>Color </option>
                    <option value = "red">red</option>
                    <option value = "black">black</option>
                    <option value = "Blue">Blue</option>
                </select><br><br>
                Feedback:<br>
                <textarea rows = "5" cols = "50" name = "highlight"> </textarea><br><br>
                Product Image: <br><input type="file" name="image"><br><br>
                Descriotion: <br>
                <textarea rows="5" cols="50"name="description"></textarea><br><br>
               <label>Payment Method</label><br>
                <input type = "radio" name = "cod" value = "on"> COD<br>
                <input type = "radio" name = "online" value = "on"> Online<br><br>
                <div class="row submit-row">
                <button type="submit" name="save" class="btn btn-block submit-form">Submit</button>
                </div>
    		</form>
    	</div>
    	
    </div>
</body>
</html>