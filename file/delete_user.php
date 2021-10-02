<?php
  require('conn.php');
  $id = $_GET['id'];
  $sql = mysqli_query($conn, "delete from user where id ='$id'");
  header("location:dashboard.php");
?>