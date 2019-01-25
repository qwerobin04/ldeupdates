<?php
$conn = mysqli_connect("localhost", "root", "", "lde");
	$run = mysqli_query($conn,"SELECT * FROM food ORDER BY ID ASC");

  $rows = array();
  while($row = mysqli_fetch_array($run))
  {
    $rows[] = $row;

  }
  echo json_encode($rows);
?>
