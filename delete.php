<html>
<body>
<table width = "500" border = "1" cellpadding = "1" cellspacing = "1">
<tr>
  <th>Account Name</th>
  <th>Address</th>
  <th>Contact No.</th>
  <th>Status</th>
  <th>Setting</th>
</tr>
<?php
include("db.php");
$sql = "SELECT username, address, contactnumber from user";
$result = $conn-> query($sql);

if($result-> num_rows >0){
	while($row = $result-> fetch_assoc()){

	echo "<tr>
  <td>" . $row["username"] . "</td>
   <td>" . $row["address"] . "</td>
   <td>" . $row["contactnumber"] . "</td>
   </tr>";
	}
echo "</table>";
}
	else {echo "0 result";}
	$conn-> close();
?>
</table>
</body>
</html>
