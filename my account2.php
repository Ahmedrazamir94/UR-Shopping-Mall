<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Account</title>  
   <?php include ("link.php"); ?>
</head>
<body>

    <?php
    include ("navbar.php");
    include ("connection.php");

?>





<br><br><br><br>
<?php
  if(isset($_GET["email"])) {
        $email2 = $_GET["email"];
        $query2 = "select * from pending_order where email= '$email2'";
        $final2 = mysqli_query($con,$query2);


?>

<br>
<table class="table table-bordered">
  <thead>

    <tr>
      <th scope="col">Customer ID</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">QTY</th>
      <th scope="col">Total</th>
      <th scope="col">Order</th>
    </tr>
  </thead>
  <?php
        while($row=mysqli_fetch_assoc($final2)) {
            
            ?>
<tbody>
    <tr>
      <td><?php echo $row["customer ID"]; ?></td>
      <td><img src="product_images/<?php echo $row["product image"]; ?>" height= "100px"></td>
      <td><?php echo $row["product name"]; ?></td>
      <td><?php echo $row["price"]; ?></td>
      <td><?php echo $row["qty"]; ?></td>
      <td><?php echo $row["total"]; ?></td>
      <td><?php echo $row["pending order"]; ?></td>

    </tr>

        
<?php        
        

    }
}
?>

<?php
    
    if(isset($_GET["email"])) {
        if(isset($_GET["id"])) {
        $id = $_GET["id"];
        $email = $_GET["email"];
        $query = "select * from place_orders where email= '$email' && prod_id= '$id'";

        $final = mysqli_query($con,$query);

        while($row=mysqli_fetch_assoc($final)) { ?>

                    <div id="container">
                    <div class="row" id= "roww">
                        <div class="col-9" id= "macol1">
                            <br><br>
                        <h5>
                            Do You Want To Change Your Any Details ???
                        </h5>
                        <br><br>
                        <?php echo "<span id= 'ls'>Your ID: &nbsp;</span>". $row["customer ID"]; ?>
                        <br>
                        <?php echo "<span id= 'ls'>Your Name: &nbsp; </span>". $row["customer name"]; ?>
                        <br>
                        <?php echo "<span id= 'ls'>Contact No: &nbsp; </span>". $row["customer contact"]; ?>
                        <br>
                        <?php echo "<span id= 'ls'>Email: &nbsp; </span>". $row["email"]; ?>
                        <br>
                        <?php echo "<span id= 'ls'>Address: &nbsp; </span>". $row["address"] ."."; ?>
<br><br>
                        <a href="#">Change</a>

                        </div>
                        <div class="col" id= "macol2">
                            <br>
                            <h3>
                                Your Order
                            </h3>
                            <br><br>
                        <div id="incol">
                            <span id="ls">
                        Customer ID:
                        <br>
                        Order Date:
                        <br>
                        Price:
                        <br>
                        Quantity:
                        <br>
                        Total:
                        </span>
                        </div>
                        <div id="incol" class= "text-right">

                        <?php echo $row["customer ID"]; ?> 
                        <br>
                        <?php echo $row["day"];echo "-". $row["month"];echo "-".$row["year"]; ?>     
                        <br>
                        <?php echo "Rs. ".$row["price"]; ?>
                        <br>
                        <?php echo $row["qty"]; ?>
                        <br>
                        <?php echo "<b>Rs. ".$row["total"] . "</b> "; ?>
                        <br><br>
                        </div>
                        
                        <center>
                        <form method= "post">
                        
                        <input type="submit" value="Place Order" name = "place_order" class= "myaccount">
                        <input type="submit" value="Cencil" name= "cencil" class= "myaccount">
                        </form>
                        </center>
                        </div>
                    </div>
                    </div>

            <?php

                if(isset($_POST["cencil"])) {
                    $query6 = "delete from place_orders where email= '$email' && prod_id= '$id'";
                    $final6 = mysqli_query ($con,$query6);
                    if($final6) {
                        echo "<center>Order Cencil !!!</center>";
                    }
                    else {
                        echo "error";
                    }
                }

            ?>
<?php 

if(isset($_POST["place_order"])) {
    $prod_id = $row["prod_id"];
    $idc = $row["customer ID"];
    $day = $row["day"];
    $month = $row["month"];
    $year = $row["year"];
    $name = $row["customer name"];
    $email = $row["email"];
    $cont = $row["customer contact"];
    $add = $row["address"];
    $prod_name = $row["product name"];
    $prod_img = $row["product image"];
    $price = $row["price"];
    $qty = $row["qty"];
    $total = $row["total"];

    $query_p_order = "insert into pending_order values ('','$prod_id','$idc','$day','$month','$year','$name','$email','$cont','$add','$prod_name','$prod_img','$price','$qty','$total','Pending')";

   $final_p_order = mysqli_query ($con,$query_p_order);

   if($final_p_order) { 
    // echo "insert successfully";
    // header("location:delete place order.php?email=".$rows["email"]."prod_id=".$rows["prod_id"]);
                    $query5 = "delete from place_orders where email= '$email' && prod_id= '$id'";
                    $final5 = mysqli_query ($con,$query5);
                    if($final5) {
                        echo "<center>Your Order Placed !!!</center>";
                    }
                    else {
                        echo "error";
                    }
   }
   


        }
    }
}
    
    echo "<br><br>";
    
    }

?>
<h4>
    Pending Orders:
</h4>
<br>
</table>
<br><br>
<h4>
    Shipped Orders:
</h4> 
<br>
<table class="table table-bordered">
  <thead>

    <tr>
      <th scope="col">Customer ID</th>
      <th scope="col">Product Image</th>
      <th scope="col">Product Name</th>
      <th scope="col">Price</th>
      <th scope="col">QTY</th>
      <th scope="col">Total</th>
      <th scope="col">Order</th>
    </tr>
  </thead>
<?php

    $query5 = "select * from complete_orders_data where email= '$email2'";
    $final5 = mysqli_query($con,$query5);

    while($rowss=mysqli_fetch_assoc($final5)) { ?>
<tr>     
     <td><?php echo $rowss["customer ID"]; ?></td>
     <td><img src="product_images/<?php echo $rowss["product image"]; ?>" height= "100px"></td>
      <td><?php echo $rowss["product name"]; ?></td>
      <td><?php echo "Rs. ". $rowss["price"]; ?></td>
      <td><?php echo $rowss["qty"]; ?></td>
      <td><?php echo $rowss["total"]; ?></td>
      <td><?php echo $rowss["complete order"]; ?></td>
      </tr>

<?php  }
$query3 = "select sum(total) from complete_orders_data where email= '$email2'";
$final3 = mysqli_query ($con,$query3);
$row3 = mysqli_fetch_array($final3); 
   
?>
      <tr>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td><?php echo "<b>Total Amount: ". $row3["sum(total)"]; echo "/Rs </b>" ?></td>
        <td></td>
      </tr>
</body>
</html>