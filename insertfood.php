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
$foodname = $_POST['foodname'];

$sql = "INSERT INTO food (restaurant, foodname)
VALUES ('{$restaurant}', '{$foodname}' )";
if(!mysqli_query($conn, $sql)){
echo 'not inserted';
}
else{
echo 'inserted';
}
}
// header("location:menu.html")
?>
