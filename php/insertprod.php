<?php
//insert.php
$connect = mysqli_connect("localhost", "root", "", "lde");
if(isset($_POST["productname"]))
{
     $productname = mysqli_real_escape_string($connect, $_POST["productname"]);
     $quantity = mysqli_real_escape_string($connect, $_POST["quantity"]);
     $size = mysqli_real_escape_string($connect, $_POST["size"]);
     $price = mysqli_real_escape_string($connect, $_POST["price"]);
     $business = mysqli_real_escape_string($connect, $_POST["business"]);
     $sql = "INSERT INTO cartadded(productname, size, quantity, price, business) VALUES ('{$productname}', '{$quantity}', '{$size}', '{$price}', '{$business}')";
     if(mysqli_query($connect, $sql))
     {
          echo "Product added";
     }
}
?>
