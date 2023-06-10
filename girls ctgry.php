<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Girls Category</title>
    <?php include 'link.php'; ?>
</head>
<body>
<table class="table table-bordered">
  <thead>
    <tr>

      <th scope="col">Product Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Category</th>
      <th scope="col">Price</th>    
      <th scope="col">Stock</th>  
      <th scope="col">Sale Out</th>   
      <th scope="col">Balance</th>  
      <th scope="col">Description</th>
    </tr>
  </thead>
<?php
include ("connection.php");

   $query = "select * from product_data where category='Girls'";

   $final = mysqli_query($con,$query);

   while($row=mysqli_fetch_assoc($final)) { 
    
    $id = $row["id"];
    
    ?>
   <tbody><tr>
    <td><img src="product_images/<?php echo $row["product image"]; ?> " width= "80px"></td>
    <td><?php echo $row["product name"]; ?></td>
    <td><?php echo $row["category"]; ?></td>
    <td><?php echo $row["price"]; ?></td>
    <td>
      <?php
      echo $row["stock"];
      ?>
       </td>
       <td>
        
       <?php
          $query3 = "select sum(qty) from complete_orders_data where prod_id= '$id'";
          $final3 = mysqli_query ($con,$query3);
          $row3 = mysqli_fetch_array($final3); 
            $qty = $row3["sum(qty)"];
            echo $qty;

       ?>
       
       </td>
       <td>
      <?php

       $stock = $row["stock"]; 
       $total = $stock-$qty;
       echo $total;

      ?>
       </td>
    <td><?php echo $row["description"]; ?></td>

    </tr></tbody>

  <?php }
    
?>
</body>
</html>