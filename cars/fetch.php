<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<table class="table table-bordered">
			    <thead>
			      <tr>
			        <th>Product Name</th>
			        <th>Category</th>
			        <th>Price</th>
			        <th>Sale Price</th>
			        <th>Color</th>
			        <th>Highlight</th>
			        <th>Image</th>
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
		while($row = mysqli_fetch_array($result)){
			?>

			      <tr>
			        <td><?php echo $row['product_name']; ?></td>
			        <td>Category</td>
			        <td>Price</td>
			        <td>Sale Price</td>
			        <td>Color</td>
			        <td>Highlight</td>
			        <td>Image</td>
			        <td>Description</td>
			        <td>Payment Method</td>
			        <td>Date</td>
			      </tr>
				
			<?php
		}
	?>
	</tbody>
			</table>
</body>
</html>