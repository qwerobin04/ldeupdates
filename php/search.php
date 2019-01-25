<?php
if(!empty($_GET['q']))
{
  $connect = mysqli_connect("localhost", "root", "", "lde");
  $q = $_GET['q'];
  $query = "SELECT * from tbl_product WHERE productname like '%$q%'";
  $result = mysqli_query($connect, $query);
  while ($row = mysqli_fetch_array($result)) {
     echo include("./goDisplay.php");
  }
}
?>
