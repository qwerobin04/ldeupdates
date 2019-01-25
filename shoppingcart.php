<script src="js/jquery-3.3.1.js" type= "text/javascript"></script>
<script type= "text/javascript">

  $(document).ready(function(){

    $("#go").click(function(event){
      event.preventDefault();
      $.ajax({
        url: "heyheyhey.php",
        type: "post",
        data: $('form').serialize(),
        dataType: "text",
        success: function(strMessage){
          $("#message").text(strMessage)
        }
      })
    })
  });
</script>
<head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<?php
// session_start();
$connect = mysqli_connect("localhost", "root", "", "lde");

if(isset($_POST["add"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
        'item_business'			=>	$_POST["product_business"],
				'item_name'			=>	$_POST["product_name"],
				'item_price'		=>	$_POST["product_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
      'item_business'			=>	$_POST["product_business"],
			'item_name'			=>	$_POST["product_name"],
			'item_price'		=>	$_POST["product_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}

}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $_values)
		{
			if($_values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="shoppingcart.php"</script>';
			}
		}
	}
}
?>
<div style="clear:both"></div>
<br />
<h3>Order Details</h3>
<div class="table-responsive">
  <table class="table table-bordered">
    <tr>
      <th width="10%">Business Name</th>
      <th width="40%">Item Name</th>
      <th width="10%">Quantity</th>
      <th width="20%">Price</th>
      <th width="15%">Total</th>
      <th width="5%">Action</th>
    </tr>
    <span id = "message"></span>
    <?php
    if(!empty($_SESSION["shopping_cart"]))
    {
      $total = 0;
      foreach($_SESSION["shopping_cart"] as $keys => $_values)
      {

					if(isset($_values["item_name"]) && ($_values["item_quantity"]) && ($_values["item_price"]) && ($_values["item_business"])){
					$item_business = $_values["item_business"];
				$item_name = $_values["item_name"];
				$item_quantity = $_values["item_quantity"];
				$item_price = $_values["item_price"];

    ?>
    <tr>
			<form>
      <td><?php echo "$item_business"; ?> <input type="hidden" name="product_business" value="<?php echo $_values["item_business"] ?>"> </td>
      <td><?php echo "$item_name"; ?> <input type="hidden" name="product_name" value="<?php echo $_values["item_name"]; ?>"> </td>
      <td><?php echo "$item_quantity"; ?> <input type="hidden" name="quantity" value="<?php echo  $_values["item_quantity"]; ?>"></td>
      <td>$ <?php echo "$item_price"; ?> <input type="hidden" name="product_price" value="<?php echo $_values["item_price"]; ?>"></td>
      <td>$ <?php echo number_format($_values["item_quantity"] * $_values["item_price"], 2);?></td>
      <td><a href="shoppingcart.php?action=delete&id=<?php echo $_values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
			<
    </tr>

    <?php

        $total = $total + ($_values["item_quantity"] * $_values["item_price"]);
      }}
    ?>
    <tr>
      <td colspan="3" align="right">Total</td>
      <td align="right">$ <?php echo number_format($total, 2); ?></td>
      <td></td>
    </tr>
		<tr>
			<td colspan="5" align="right"> <input type="submit" id = "go" name = "insert" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" > </td>
		</tr>
	</form>
    <?php
    }
    ?>

  </table>
</div>
</div>
</div>
<br />
</body>
</html>
