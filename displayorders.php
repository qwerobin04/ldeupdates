<?php
$conn = mysqli_connect("localhost", "root", "", "lde");
if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              if ($conn->connect_error){
                      die ('connect:' . $conn->connect_error);
                    }
                    $sql = "SELECT business, productname, quantity, price from cartadded";
                    $result = $conn-> query($sql);

                    if($result-> num_rows >0){
                    	while($row = $result-> fetch_assoc()){

                    	echo "<tr>
                       <td>" . $row["business"] . "</td>
                       <td>" . $row["productname"] . "</td>
                       <td>" . $row["quantity"] . "</td>
                       <td>" . $row["price"] . "</td>
                       </tr>";
                    	}
                    echo "</table>";
                    }
                    	else {echo "0 result";}
                    	$conn-> close();
?>
