<?php
$conn = mysqli_connect("localhost", "root", "", "lde");
	$sql =  "SELECT * FROM cartadded ORDER BY ID ASC";
	$run = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
		 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		 <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
		 <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
		 <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />

</head>
	<body>
		<div class="container">
		<div class="table-responsive">
		<table id="data" class="table table-striped table-bordered">
		<thead>
		    <tr>
					<td> Order Name</th>
		      <td>Business Name</td>
		      <td>Quantity</td>
					<td> Price</td>
		      <td>Size</td>
		    </tr>
		</thead>

		<?php

			while($row = mysqli_fetch_array($run))
				{
					$id=$row["id"];
					$productname = $row["productname"];
					$business = $row['business'];
					$quantity = $row["quantity"];
					$price = $row["price"];
					$size = $row["size"];

					echo "<tr>
									<td>".$row["productname"]."</td>
									<td>".$row["business"]."</td>
									<td>".$row["quantity"]."</td>
									<td>".$row["price"]."</td>
									<td>".$row["size"]."</td>
									<td>" </td>
									<i class='fa fa-trash-o' aria-hidden='true'></i></button> "</td>
								</tr>";
}
echo "</table>";

		?>

		</div>
		</div>
		<script type="text/javascript" >
		$(document).ready(function(){
				$('#data').DataTable();
		});
		</script>
	</body>
</html>
