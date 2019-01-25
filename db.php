<?php
$conn = mysqli_connect("localhost", "root", "", "lde");
if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              if ($conn->connect_error){
                      die ('connect:' . $conn->connect_error);
                    }
                    $sql = "SELECT username, address, contactnumber from user";
                    $result = $conn-> query($sql);

                    if($result-> num_rows >0){
                    	while($row = $result-> fetch_assoc()){

                    	echo "<tr>
                      <td>" . $row["username"] . "</td>
                       <td>" . $row["address"] . "</td>
                       <td>" . $row["contactnumber"] . "</td>
                      <td> <button class='pd-setting'>Active</button>". "</td>
                      <td> <button data-toggle='modal' data-target='#edit-business' title='Edit'
                      class='pd-setting-ed'><i class='fa fa-pencil-square-o' aria-hidden='true'></i>
                    </button> <button data-toggle='tooltip' title='Trash' class='pd-setting-ed'>
                      <i class='fa fa-trash-o' aria-hidden='true'></i></button>
                       </tr>";
                    	}
                    echo "</table>";
                    }
                    	else {echo "0 result";}
                    	$conn-> close();
?>
