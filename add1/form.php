<?php
$conn = mysqli_connect("localhost", "root", "", "add1");
   if (mysqli_connect_errno()) {
      echo "Failed to connect to MySQL: " . mysqli_connect_error();
      exit();
   }

if(isset($_POST['submit'])){
   $name =$_POST['name'];
   $email =$_POST['email'];
   $phone= $_POST['phone'];
   $sql =  "INSERT INTO user(name,email,phone) VALUES ('$name','$email','$phone')";  
      if(mysqli_query($conn,$sql))
      {
        echo "New record created successfully";
      }
      else 
      {
       echo "Error:" .$sql. "<br>". mysqli_error($conn);
      }
      
          }
?>


<html>
   <head>
      <title>form</title>
    </head> 
<body>
   <form action="" method="post"><br><br>
    <label>Name</label>
   <input type="text" name="name"><br><br>
   <label>Phone</label>
   <input type="text" name="phone"><br><br>
    <label>E-mail</label>
    <input type="email" name="email"><br><br>
      <input type="submit" name="submit">
      </form>
   </body>
</html> 
