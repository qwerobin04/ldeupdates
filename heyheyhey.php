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

$productname = $_POST['product_name'];
$quantity = $_POST['quantity'];
$price = $_POST['product_price'];
$total = 0;
// $total = $total + ($_POST["quantity"] * $_POST["hidden_price"]);
$sql = "INSERT INTO cartadded (productname, quantity, price) VALUES ('{$productname}', '{$quantity}', '{$price}')";
if(!mysqli_query($conn, $sql)){
echo 'not inserted';
}
else{
echo 'inserted';
}
}
// header("location:index.php")
?>
