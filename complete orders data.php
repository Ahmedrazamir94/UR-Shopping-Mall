<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Orders Data</title>
    <?php include 'link.php'; ?>
</head>
<body>
    <br><br>
<center>
    <h2>
        Shipped Orders Data !
    </h2>
    </center>
<br><br>
    <?php

    include ("connection.php");
    if(isset($_GET["id"])) {

        $id = $_GET["id"];

    $query = "select * from pending_order where id= '$id'";

    $final = mysqli_query ($con,$query);

    while($row=mysqli_fetch_assoc($final)) { 
             
             $row["prod_id"];
             $row["day"];
             $row["customer ID"]; 
             $row["day"];
             $row["month"];
             $row["year"];
             $row["customer name"]; 
             $row["email"];
             $row["customer contact"]; 
             $row["address"]; 
             $row["product name"]; 
             $row["product image"]; 
             $row["price"]; 
             $row["qty"]; 
             $row["total"]; 
             ?>
             <br>
           
            <h3>Do You Want to Shipped Order ?</h3>
<br>
            <form method= "post" id= "cod">
            <center>
            <input type="submit" value="Done" name = "done" id= "done"></form>
            <input type="submit" value="Go Back" name = "back" id= "done" formaction= "pending order AP.php">
            </center>
            </form>
            <br><br>
        
     

        <?php
        if(isset($_POST["done"])) {           
        $prod_id = $row["prod_id"];
        $c_ID= $row["customer ID"];
        $day = $row["day"];
        $month = $row["month"];
        $year = $row["year"];
        $c_name = $row["customer name"];
        $email = $row["email"];
        $c_cont = $row["customer contact"];
        $add = $row["address"]; 
        $p_name = $row["product name"];
        $p_img = $row["product image"];
        $price = $row["price"];
        $qty = $row["qty"];
        $total = $row["total"];
    
        $query2 = "insert into complete_orders_data values ('','$prod_id','$c_ID','$day','$month','$year','$c_name','$email','$c_cont','$add','$p_name','$p_img','$price','$qty','$total','Shipped')";
    
        $final2 = mysqli_query ($con,$query2);
    
        if($final2) {
            $query5 = "delete from pending_order where id= '$id'";
            $final5 = mysqli_query ($con,$query5);
            if($final5) {
                echo "<center>Order Shipped !!!</center>";
            }
            else {
                echo "delete error";
            }
        }
        else {
            echo " some error";
        }
    
     }  
    }
    } ?>
    
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
      <!-- <th scope="col">Delete</th> -->
      
    </tr>
  </thead>

   <?php $query = "select * from complete_orders_data";

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
            <?php $price = $row["total"]; ?>
            <td><?php echo $price; ?></td>
            <!-- <td><a href="delete complete orders data.php?id=<?php echo $row["id"]; ?>">Delete</a></td> -->

        </tbody>

       


   <?php } ?>
   <?php
   
$query3 = "select sum(total) from complete_orders_data";
$final3 = mysqli_query ($con,$query3);
$row3 = mysqli_fetch_array($final3); 
   


?>
<tbody>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td><b>Rs.<?php echo $row3["sum(total)"]; ?></b></td>

</tbody>
</body>
</html>