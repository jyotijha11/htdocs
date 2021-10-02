<?php
if(!empty($_POST['country'])){
   require('conn.php');
   $countryId = $_POST['country'];
   $sql = mysqli_query($conn, 'SELECT * FROM state WHERE countryId = "'.$countryId.'" ORDER BY state');
   
   echo "<option>Select State...</option>";
   while($state = mysqli_fetch_array($sql)){
      echo "<option value='" . $state['id'] . "'>" . $state['state'] . "</option>";
   }
}
?>