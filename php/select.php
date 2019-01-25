<?php

 if(isset($_POST["employee_id"]))
 {
      $output = '';
      $connect = mysqli_connect("localhost", "root", "", "lde");
      $query = "SELECT * FROM cartadded";
      $result = mysqli_query($connect, $query);
      $output .= '

      <div class="table-responsive">
           <table class="table table-bordered">
           <th>Product Name</th>
           <th>Business Name</th>
           <th>Size</th>
           <th>Quantity</th>
           <th>Price Total</th>';

      while($row = mysqli_fetch_array($result))
      {
        $quantity = $row["quantity"];
        $qprice = $row["price"]*$quantity;
           $output .= '
           <form action="../insertprod.php" method="post">
                <tr>
                     <td width="70%">'.$row["productname"].'</td>
                     <td width="70%">'.$row["business"].'</td>
                     <td width="70%">'.$row["size"].'</td>
                     <td width="70%">'.$row["quantity"].'</td>
                     <td width="70%">'.$qprice.'</td>

                </tr>
                </form>
                ';
      }

      $output .= "</table></div>";
      echo $output;
 }
 ?>
