<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>
<body>
	<table class="table table-bordered">
			    <thead>
			      <tr>
			      	<th>Image</th>
			        <th>Product Name</th>
			        <th>Category</th>
			        <th>Price</th>
			        <th>Sale Price</th>
			        <th>Color</th>
			        <th>Highlight</th>
			        <th>Description</th>
			        <th>Payment Method</th>
			        <th>Date</th>
			      </tr>
			    </thead>
			    <tbody>
	<?php
		require('conn.php');
		$sql = "select * from user";
		$result = mysqli_query($conn, $sql);
		while($row = mysqli_fetch_assoc($result)){
			?>
			      <tr>
			      	<td><img src="upload/<?php echo $row['product_img']; ?>" height="50" /></td>
			        <td><?php echo $row['product_name']; ?></td>
			        <td><?php echo $row['product_cat']; ?></td>
			        <td><?php echo $row['product_price']; ?></td>
			        <td><?php echo $row['sale_price']; ?></td>
			        <td><?php echo $row['product_color']; ?></td>
			        <td><?php echo $row['highlight']; ?></td>
			        <td><?php echo $row['product_des']; ?></td>
			        <td><?php echo $row['pay']; ?></td>
			        <td><?php echo $row['created']; ?></td>
			      </tr>
				
			<?php
		}
	?>
	</tbody>
			</table>
</body>
</html>