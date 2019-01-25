
<?php
 $connect = mysqli_connect("localhost", "root", "", "lde");
 $sql = "DELETE FROM checkout WHERE business = '".$_POST["businessid"]."'";
 if(mysqli_query($connect, $sql))
 {
      echo 'Data Deleted';
 }
 ?>
