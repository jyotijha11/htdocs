<?php 
require('conn.php');
$servername = "localhost";
$username = "root";
$password = "";
$db = "task";
if(isset($_POST['submit']))
{
  $name = $_POST['name'];
  $email = $_POST['email'];
  $state = $_POST['state'];
  $sqlgetAmount= mysqli_query($conn,"SELECT amount from state where id=".$state);
  $fetchAmount= mysqli_fetch_assoc($sqlgetAmount);
  $paid_amt= $fetchAmount["amount"];
  $sql = "INSERT INTO payment_details(name,email,state, paid_amount) VALUES('$name', '$email','$state','$paid_amt')";
   $result= mysqli_query($conn, $sql);
        header("location:thanku.php");
}
$conn = mysqli_connect($servername, $username, $password, $db);

$sql = mysqli_query($conn, "SELECT * FROM state ORDER BY state_name ASC");

?>
<html lang="en">
<head>
  <title>Check Out Box</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css2? 
    family=Roboto+Slab:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script>
         function getamount(stateId){
            $("#amount").show();
            $("#amountDropdown").html('<option>Loading...</option>');
            $.ajax({
               method: "POST",
               url: "state.php",
               dataType: "html",
               data: {state: stateId}
            })
               .done(function(data){
               $("#amountDropdown").html(data);
            });
         }  
      </script>
</head>
<body>

  <div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-sm-7">
          <div class="login-box">
          <div class="mb-4 text-center"> <h2> Check Out  </h2> </div>
            <form action="" method="post">

              <div class="row">
                 <div class="col-sm-12 mb-4">
                   <input type="text" class="form-control" placeholder="Name" name="name">   
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12 mb-4">
                   <input type="email" class="form-control" placeholder="E-mail" name="email">   
                </div>
              </div>

              <div class="row">
                <div class="col-sm-12 mb-4">
              <select name="state" class="form-control">
              <option value=" ">Select</option>

              <?php 
              $sql = "SELECT * FROM state";
              $result = mysqli_query($conn,$sql);
              while($row=mysqli_fetch_assoc($result))
              {
                ?>
                  <option value="<?php echo $row['id']; ?>"><?php echo $row['state_name']; ?></option>
                <?php
              }
              ?>
              </select>
            </div>
              </div>
              <button type="submit" name="submit" class="btn btn-success btn-block"> Pay Now <i class="fa fa-send"></i> </button>
            </form>
          </div>
        </div>
    </div>
  </div>
</body>
</html>