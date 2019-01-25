<?php

if(isset($_POST['insert']))
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

$name = $_POST['name'];
$username = $_POST['username'];
$address = $_POST['address'];
$contactnumber = $_POST['contactnumber'];
$password = $_POST['password'];

$sql = "INSERT INTO user (name, username, address, contactnumber, password)
VALUES ('{$name}', '{$username}', '{$address}', '{$contactnumber}', '{$password}')";
if(!mysqli_query($conn, $sql)){
echo 'not inserted';
}
else{
echo 'inserted';
}
}
header("location:accounts.php")
?>
