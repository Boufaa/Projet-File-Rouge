<!-- include database -->

<?php

  include('../model/connection.php');
 
  // sorry need to get id 

  $id = $_POST['delete_id'];
  $query = mysqli_query($con,"DELETE FROM Trainer WHERE Trainer_id='$id'");

  

 ?>