<script src="Practice/js/jquery-3.3.1.js" type= "text/javascript"></script>
<script>

    $(document).ready(function(e){
      $('#insert').click(function(){
        var product_name = $('#product_name').val();
        var quantity = $('#quantity').val();
        var product_price = $('#product_price').val();
        var product_business = $('#product_business').val();
        $.ajax({
          type: 'POST',
          data: {product_name:product_name, quantity:quantity, product_price:product_price, product_business:product_business},
          url: "shoppingcart.php",
          success: function(result){
            alert(result);
          }
        })

      })

    });

</script>
<?php
$connect = mysqli_connect("localhost", "root", "", "lde");
 ?>
<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	</head>
	<body>
		<br />
		<div class="container">
			<br />
			<br />
			<br /><br />
			<?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="Practice/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["productname"]; ?></h4>
            <h5 class="text-danger"><?php echo $row["business"]; ?></h5>
						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="text" id = "quantity" name="quantity" value="1" class="form-control" />

            <input type="hidden" id = "product_business" name="product_business" value="<?php echo $row["business"]; ?>" />

						<input type="hidden" id = "product_name" name="product_name" value="<?php echo $row["productname"]; ?>" />

						<input type="hidden" id = "product_price" name="product_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" onclick="add" name="add" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
include("shoppingcart.php");
			?>
