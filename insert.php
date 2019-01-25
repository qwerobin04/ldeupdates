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

$fullname = $_POST['fullname'];
$username = $_POST['username'];
$business = $_POST['business'];
$businesslocation = $_POST['businesslocation'];
$password = $_POST['password'];
$emailaddress = $_POST['emailaddress'];
//
// $today = date("Y-m-d H:i:s");

$sql = "INSERT INTO business (fullname, username, business, businesslocation, password, emailaddress )
VALUES ('{$fullname}', '{$username}', '{$business}', '{$businesslocation}', '{$password}', '{$emailaddress}')";
if(!mysqli_query($conn, $sql)){
echo 'not inserted';
}
else{
echo 'inserted';
}
}
header("location:business.html")
?>
