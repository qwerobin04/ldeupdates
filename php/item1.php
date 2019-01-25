<?php
$connect = mysqli_connect("localhost", "root", "", "lde");
 ?>

<!DOCTYPE html>
<html>
	<head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="Practice/js/jquery-3.3.1.js" type= "text/javascript"></script>

	</head>
	<body>
    <p id="message"></p>
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
				<form action="./php/insertprod.php" method="post">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="Practice/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["productname"]; ?></h4>
            <h5 class="text-danger"><?php echo $row["business"]; ?></h5>
						<h4 class="text-danger">P <?php echo $row["price"]; ?></h4>
            <select id ="size" class="field small-field" name = "size" required>
              <option value="">Sizes</option>
              <option value="Small">S</option>
              <option value="Large">L</option>
              <option value="Extra Large">XL</option>
            </select>
						<input type="number" id = "quantity" name="quantity" value="1" class="form-control" />

            <input type="hidden" name="id" value="<?php echo $row["id"]; ?>" />

            <input type="hidden" id = "business" name="business" value="<?php echo $row["business"]; ?>" />

						<input type="hidden" id = "productname" name="productname" value="<?php echo $row["productname"]; ?>" />

						<input type="hidden" id = "price" name="price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" id = "insert1"  name="insert1" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>


      

      <!-- <script src="Practice/js/jquery-3.3.1.js" type= "text/javascript">
function saveData(){
            $(document).ready(function(e){
              $('#insert1').click(function(){
                var business = $('#business').val();
                var productname = $('#productname').val();
                var size = $('#size').val();
                var quantity = $('#quantity').val();
                var price = $('#price').val();
                $.ajax({
                  type: 'POST',
                  data: {business:business, productname:productname, size:size, quantity:quantity, price:price},
                  url: "./insertprod.php",
                  success: function(msg){

                  }
                })
              })
            });
}
        </script> -->
</body>
