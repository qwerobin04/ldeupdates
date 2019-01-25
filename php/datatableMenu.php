<?php
  $conn = mysqli_connect("localhost", "root", "", "lde");
	$run = mysqli_query($conn,"SELECT idmenu, restaurant, menuname, dtcreated FROM menu ORDER BY idmenu ASC");
  $rows = array();
  $i = 0;
  while($row = mysqli_fetch_array($run))
  {
    $rows[$i] = $row;
    $i = $i + 1;
  }
  echo json_encode($rows);
?>
