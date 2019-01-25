<?php
$conn = mysqli_connect("localhost", "root", "", "lde");
	$run = mysqli_query($conn,"SELECT * FROM checkout ORDER BY idcheckout ASC");

  $rows = array();
  while($row = mysqli_fetch_array($run))
  {
    $rows[] = $row;

  }
  echo json_encode($rows);
?>
