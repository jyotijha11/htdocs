<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "data";
$conn = mysqli_connect($servername, $username, $password, $db);
$sql = mysqli_query($conn, "SELECT * FROM states ORDER BY state_name ASC");

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>STATES</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
      <script>
      	function getdistrict(state_id) 
      	{
      		$("#district").show();
            $("#districtDropdown").html('<option>Loading...</option>');
            $.ajax({
               method: "POST",
               url: "getdistrict.php",
               dataType: "html",
               data: {state: state_id}
            })
               .done(function(data){
               $("#districtDropdown").html(data);
            });

      	}
      </script>
</head>
<body>
	<div class="container">
		<form class="form-horizontal">
			<div class="form-group">
				<label for="state" class="col-sm-2 control-label">State:</label>
				<div class="col-sm-4">
					<select class="form-control" onChange="getdistrict(this.value)">
						<option value="">Select State</option>
						<?php
						while($state = mysqli_fetch_array($sql)){
							echo "<option value='".$state['id']."'>".$state['state_name']."</option>";
						}
						?>
					</select>
				</div>
			</div>
			<div class="form-group" id="district">
               <label for="district" class="col-sm-2 control-label">district:</label>
               <div class="col-sm-4">               
                  <select class="form-control" id="districtDropdown">
                  </select>
               </div>
            </div>
		</form>
	</div>
</body>
</html>