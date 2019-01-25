<?php
$conn = mysqli_connect("localhost", "root", "", "lde");
if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
              }

              if ($conn->connect_error){
                      die ('connect:' . $conn->connect_error);
                    }
if(isset($_POST['insert']))
 {

      $id = $_GET['id'];
      $qry = "SELECT * FROM cartadded ORDER BY id ASC";
      $run = mysqli_query($conn,$qry);

        while($row = mysqli_fetch_array($run))
          {
            $id = $row["id"];
            $business = $_row['business'];
            $productname = $row["productname"];
            $size = $row["size"];
            $quantity = $row["quantity"];
            $price = $row["price"];
            $total = $row["price"] * $row["quantity"];
              $sql = "INSERT INTO checkout (business, productname, size, quantity, price, total)
              VALUES ('{$business}', '{$productname}', '{$size}', '{$quantity}', '{$price}', '{$total}')";
              if(!mysqli_query($conn, $sql))
              {
                echo 'not inserted';
              }
  else{
   echo 'inserted';
   header("location:../displaytheitems.php");
   }
 }
}

if(isset($_POST["update"]))
{

	if(isset($_POST["quantity"]))
	{
		$quaty = $_POST["quantity"];
		$ids = $_POST["id"];
		$array = array_combine($quaty, $ids);

		foreach ($array as $q => $i)
		{
			$query = "UPDATE cartadded set quantity='$q' where id = '$i' ";
			mysqli_query($conn,$query);
      header("location:../displaytheitems.php");
		}

	}
}
if(isset($_POST["delete"]))
{
	if(isset($_POST["check"]))
	{
      $dele = $_POST["check"];
      foreach ($dele as $del)
      {
      $query = "DELETE from cartadded where id = '$del'";
      mysqli_query($conn,$query);
      header("location:../displaytheitems.php");
      }
  }
}
?>
