<?php

if(isset($_POST['insert']) && isset($_POST['restaurant']))
{

$conn = mysqli_connect("localhost", "root", "", "lde");
if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              if ($conn->connect_error){
                      die ('connect:' . $conn->connect_error);
                    }
//
// $fname = $_POST['firstname'];
// $lname = $_POST['lastname'];
// $Age = $_POST['age'];
$restaurant = $_POST['restaurant'];
$menuname = $_POST['menuname'];


$sql = "INSERT INTO menu (restaurant, menuname)
VALUES ('{$restaurant}', '{$menuname}' )";
if(!mysqli_query($conn, $sql)){
echo 'not inserted';
}
else{
echo 'inserted';
}
}
// header("location:menu.html")
?>
