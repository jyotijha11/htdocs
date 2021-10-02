<?php 
require('conn.php');
if(isset($_POST['save']))
{
   $name = $_POST['name'];
     $email = ($_POST['email']);
     $address = $_POST['address'];
     $country = $_POST['country'];
     $state= $_POST['state'];
     $quantity = $_POST['quantity'];
     
    $sql = "INSERT INTO user(name, email, address, country, state, quantity) VALUES ( '$name','$email','$address','$country','$state','$quantity')";
    if (mysqli_query($conn, $sql)) 
     {
      
        echo "Data inserted successfully";
        
     } 
     else 
     {
        echo "Error: " . mysqli_error($conn);
     }
}
$sql2 = mysqli_query($conn, "SELECT * FROM country ORDER BY country ASC");

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Order Form</title>
    <meta charset="utf-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='https://use.fontawesome.com/releases/v5.0.6/css/all.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.css' rel='stylesheet' />
    <link href='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.print.css' rel='stylesheet' media='print' />
    <script src='https://cdn.jsdelivr.net/npm/moment@2.24.0/min/moment.min.js'></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='https://cdn.jsdelivr.net/npm/fullcalendar@3.10.2/dist/fullcalendar.min.js'></script>
     <script>
         function getStates(countryId){
            //$("#state").show();
            $("#stateDropdown").html('<option>Loading...</option>');
            $.ajax({
               method: "POST",
               url: "getStates.php",
               dataType: "html",
               data: {country: countryId}
            })
               .done(function(data){
               $("#stateDropdown").html(data);
            });
         }  
      </script>
   <style type="text/css">
    .formwrap{
      width: 70%;
      margin: 0 auto;
      margin-top: 85px;
      padding: 25px;
      background: #eee;
      border: 1px solid #00000047;
    }
     body
        {
          background-image: url('https://www.google.com/imgres?imgurl=https%3A%2F%2Fpng.pngtree.com%2Fthumb_back%2Ffh260%2Fbackground%2F20200714%2Fpngtree-modern-double-color-futuristic-neon-background-image_351866.jpg&imgrefurl=https%3A%2F%2Fpngtree.com%2Ffree-backgrounds&tbnid=v88-M_AJ_P6MCM&vet=12ahUKEwiGsr_9_MjyAhXAkksFHYKwBusQMygAegUIARDOAQ..i&docid=nrS8yXEy4V6zEM&w=555&h=260&q=background%20image&ved=2ahUKEwiGsr_9_MjyAhXAkksFHYKwBusQMygAegUIARDOAQ');          
          background-repeat: no-repeat;
          background-size: cover;


        }
  </style>
</head>
<body>
<div class="modal-header border-0">
    <button type="button" class="close" data-dismiss="modal"><i class="fa fa-times"></i></button>
</div>
<div class="container-fluid">
    <div class="row" id="location_modal">
        <div class="col-6 border-left" id="frm-field">
            <div class="formwrap">
                <h3>Order Form:</h3>
                <form action="" method="POST" >
                                    
                        <div class="form-group">
                            <label for="name" class="control-label">Fullname</label>
                            <input type="text" class="form-control" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email" class="control-label">Email</label>
                            <input type="text" class="form-control" name="email" required>
                        </div>
                        
                           <div class="form-group">
                   <label for="country" class="control-label">Country:</label>
                   <select class="form-control" id="country" name="country" onChange="getStates(this.value)">
                        <option value="">Select Country</option>
                     <?php
                     while($country = mysqli_fetch_array($sql2)){
                        echo "<option value='" . $country['id'] . "'>" . $country['country'] . "</option>";
                     }
                     ?>
                        </select>
                    </div>
                         <div class="form-group" id="state">
                       <label for="state" class="control-label">State:</label>
                        <select class="form-control" id="stateDropdown" name="state">
                        </select>
                       </div>
                                
                        <div class="form-group">
                            <label for="address" class="control-label">Address</label>
                            <textarea class="form-control" name="address" required></textarea>
                        </div>
                        <div class="form-group">
                            <label for="quantity" class="control-label">Quantity</label>
                            <input type="number" class="form-control" name="quantity" required>
                        </div>
                        
                         <button  type="submit" name="save" class="btn btn-primary" value="save">SAVE</button>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>