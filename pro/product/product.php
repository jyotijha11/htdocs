<?php 
require('conn.php');
if(isset($_POST['save']))
{
    $pname = $_POST['product_name'];
    $pcat = $_POST['category'];
    $pprice =$_POST['product_price'];
    $sprice =$_POST['sale_price'];
    $pcolor =$_POST['color'];
    $high =$_POST['highlight'];
    //File name
    $pimg = $_FILES["image"]["name"];
    $pdes =$_POST['description'];
    $pay =$_POST['cod'].",".$_POST['online'];
    $sql = "INSERT INTO user(product_name,product_cat,product_price,sale_price,product_color,highlight,product_img,product_des,pay) VALUES('$pname','$pcat','$pprice','$sprice','$pcolor','$high','$pimg','$pdes','$pay')";
    if (mysqli_query($conn, $sql)) 
    {
        //File upload Code
        $filename = $_FILES["image"]["name"];
        $tempname = $_FILES["image"]["tmp_name"];   
        $folder = "upload/".$filename;
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
        }
        else{
            $msg = "Failed to upload image";
        }
        //File upload code end here
        echo "New record created successfully";
    }
    else 
    {
        echo "Error: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<head>
    <title>Product</title>
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
                 Product Name: <input type = "text" name = "product_name" value="" ><br><br>
                 <label>Product Cataegory</label>
                 
                 <select name = "category">
                    <option value = "" selected>Category</option>
                    <option value = "Wired">Wired</option>
                    <option value = "Wireless">Wireless</option>
                    <option value = "Bluetooth">Bluetooth</option>
                </select><br><br>
                Product Price: <input type = "text" name = "product_price" value="" /><br><br>
                Sale Price:    <input type="text" name="sale_price" value=""><br><br>
                <label>Product Color</label>
                 <select name = "color">
                    <option value = "" selected>Color </option>
                    <option value = "red">red</option>
                    <option value = "black">black</option>
                    <option value = "Blue">Blue</option>
                </select><br><br>
                Highlight: <br>
                <textarea rows = "5" cols = "50" name = "highlight"> </textarea><br><br>
                Product Image: <input type="file" name="image"><br><br>
                Product Description: <br>
                <textarea rows = "5" cols = "50" name = "description"></textarea><br><br>
                <label>Payment Method</label><br>
                <input type = "checkbox" name = "cod" value = "COD"> COD<br>
                <input type = "checkbox" name = "online" value = "online"> Online<br><br>
                <div class="row submit-row">
                <button type="submit" name="save" class="btn btn-block submit-form">Submit</button>
                </div>
             </form>
        </div>   


</body>
</htm>
