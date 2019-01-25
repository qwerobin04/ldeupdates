<?php
 $connect = mysqli_connect("localhost", "root", "", "lde");
 $query = "SELECT * FROM cartadded";
 $run = mysqli_query($connect, $query);
 ?>
 <!DOCTYPE html>
 <html>
      <head>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

             <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

             <link rel="stylesheet" type="text/css" href="css-landing/bootstrap.css" />
             <link rel="stylesheet" type="text/css" href="css-landing/lokal-restaurant.css" />
             <link rel="stylesheet" type="text/css" href="css-landing/font-awesome.css" />
             <link rel="stylesheet" type="text/css" href="css-landing/animate.css">
             <link rel="stylesheet" type="text/css" href="css-landing/responsive.css" />
      </head>
      <body>
        <section class="section1">
          <div class="container">
            <div class="row">
              <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="menu">
                  <div class="mobile-nav-container"> </div>
                  <div class="mobile-nav-btn"><img class="nav-open" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6214/nav-open.png" alt="Nav Button Open" /> <img class="nav-close" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/6214/nav-close.png"
                      alt="Nav Button Close" /> </div>
                  <nav>
                    <ul>
                      <li><a href="./landing-page.php">Home</a></li>
                      <li><a href="./restaurant.php">Restaurants</a></li>
                      <li><a href="./about.php">About</a></li>
                    </ul>
                  </nav>
                </div>
                <!-- <div class="logo-lokal">
                  <img src="images/lokal-logo-black.png" alt="">
                </div> -->
                <div class="login">
                  <ul>
                    <li><a href="#">Login</a></li>
                    <li><a href="#">Register</a></li>
                  </ul>
                </div><!-- /.login -->
              </div>
            </div><!-- /.row -->
          </div> <!-- /.container -->
        </section>
           <br /><br />
           <div class="container" style="width:700px;">
                <br />
                <div class="table-responsive">
                     <table class="table table-bordered">
                          <tr>
                               <th width="70%">Mark</th>
                               <th width="70%">Business Name</th>
                               <th width="30%">Product Name</th>
                               <th width="70%">Size </th>
                               <th width="30%">Quantity</th>
                               <th width="30%">Price</th>
                                <th width="30%">Total</th>
                          </tr>
                          <?php
                          while($row = mysqli_fetch_array($run))
                    				{
                    					$id=$row["id"];
                    					$productname = $row["productname"];
                    					$business = $row['business'];
                    					$quantity = $row["quantity"];
                    					$price = $row["price"];
                    					$size = $row["size"];

                    					$qprice = $row["price"]*$quantity;
                    					@$total += $row["price"]*$quantity;

                    		?>
                    		<tr>
                    		  <form action="./php/shoppingcart1.php" method="post">
                    			<td><input type="checkbox"  name="check[]" value="<?php echo $row["id"] ?>" multiple/> </td>
                    		  <td><?php echo  $row["business"] ?> <input type="hidden" id="business" name="business" value="<?php echo $row["business"] ?>"> </td>
                    		  <td><?php echo $row["productname"]; ?> <input type="hidden" id="productname" name="productname" value="<?php echo $row["productname"]; ?>">  </td>
                    			<td><?php echo $row["size"]; ?> <input type="hidden" id="size" name="size" value="<?php echo $row["size"]; ?>">
                    			<td>
                    				<input type="hidden" name="id[]" value="<?php echo $row["id"]; ?>">
                    				<input type="text" name="quantity[]" value="<?php echo $row["quantity"]; ?>">
                    			</td>
                    		  <td>P <?php echo $row["price"]; ?> <input type="hidden"  id="price" name="price" value="<?php echo $row["price"]; ?>"></td>
                    			<td>P <?php echo $qprice; ?>.00</td>
                    		</tr>
                    		<?php
                    			}
                    		$connect-> close();
                    		?>
                        <tr>
                         <td colspan="5" align="right">Total</td>
                         <td colspan="4"  name="total"> <?php echo $total;  ?></td>
                       </tr>
                         <td colspan="1" align="left"> <input class="btn btn-info btn-xs" type="submit" id="delete" name="delete" value="Delete" > </td>
                         <td colspan="5"  align = "center"> <input class="btn btn-info btn-xs " type="submit" id="update" name="update" value="Update" > </td>
                         <td colspan="4" > <input type="button" name="view"   value="Checkout" id="<?php echo $row["id"]; ?>" class="btn btn-info btn-xs view_data" data-toggle="modal" data-target="#dataModal"> </td>
</form>
                     </table>
                </div>
           </div>
      </body>
 </html>

 <div id="dataModal" class="modal fade">
   <form class="" action="shoppingcart1.php" method="post">
     <td><?php echo  $row["business"] ?> <input type="hidden" id="business" name="business" value="<?php echo $row["business"] ?>"> </td>
     <td><?php echo $row["productname"]; ?> <input type="hidden" id="productname" name="productname" value="<?php echo $row["productname"]; ?>">  </td>
     <td><?php echo $row["size"]; ?> <input type="hidden" id="size" name="size" value="<?php echo $row["size"]; ?>"> </td>
     <td>P <?php echo $row["price"]; ?> <input type="hidden"  id="price" name="price" value="<?php echo $row["price"]; ?>"></td>
     <input type="hidden" name="quantity" value="<?php echo $row["quantity"]; ?>">
     <td>P <?php echo $qprice; ?>.00</td>
     <td colspan="4"  name="total"> <?php echo $total;  ?></td>
      <div class="modal-dialog">
           <div class="modal-content">
                <div class="modal-header">
                     <button type="button" class="close" data-dismiss="modal">&times;</button>
                     <h4 class="modal-title">Checkout Details</h4>
                </div>
                <div class="modal-body" id="employee_detail">
                </div>
                <div class="modal-footer">
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                     <button type="submit" class="btn btn-default" name = "insert" id="insert1">Save</button>
                </div>
           </div>
      </div>
    </form>
 </div>
 <script>
 $(document).ready(function(){
      $('.view_data').click(function(){
           var employee_id = $(this).attr("id");
           $.ajax({
                url:"./php/select.php",
                method:"post",
                data:{employee_id:employee_id},
                success:function(data){
                     $('#employee_detail').html(data);
                     $('#dataModal').modal("show");
                }
           });
      });
 });
 </script>
