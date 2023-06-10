<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pending Order</title>
    <?php include 'link.php'; ?>
</head>
<body>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Customer ID</th>
      <th scope="col">Order Date</th>
      <th scope="col">Customer Name</th>
      <th scope="col">Customer Contact</th>
      <th scope="col">Customer Address</th>
      <th scope="col">Product Name</th>
      <th scope="col">Product Image</th>
      <th scope="col">Price</th>
      <th scope="col">QTY</th>
      <th scope="col">Total</th>
      <th scope="col">Shipped</th>
     
    </tr>
  </thead>
    <?php

    include ("connection.php");

    $query = "select * from pending_order";

    $final = mysqli_query ($con,$query);

    while($row=mysqli_fetch_assoc($final)) { ?>
        
        <tbody>
            <td><?php echo $row["customer ID"]; ?></td>
            <td><?php echo $row["day"]; echo "&nbsp" . $row["month"]; echo "&nbsp" . $row["year"];  ?></td>
            <td><?php echo $row["customer name"]; ?></td>
            <td><?php echo $row["customer contact"]; ?></td>
            <td><?php echo $row["address"]; ?></td>
            <td><?php echo $row["product name"]; ?></td>
            <td><img src="product_images/<?php echo $row["product image"]; ?>" width= "80px"></td>
            <td><?php echo $row["price"]; ?></td>
            <td><?php echo $row["qty"]; ?></td>
            <td><?php echo $row["total"]; ?></td>
            <td> <form method= "post"><input type="submit" value= "Shipped" id= "shipped" name= "shipped" formaction= "complete orders data.php?id=<?php echo $row["id"]; ?>"></form></td> 
   

        </tbody>


        <?php


         } ?>




</body>
</html>