<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add To Cart</title>
    <?php include 'link.php'; ?>
</head>
<body>  
  <?php
  include 'navbar.php'; 
  ?>
  
<br><br><br><br>
<?php
            
    include ("connection.php");

    if(isset($_GET["id"])) {
        $id = $_GET["id"];

        $query = "select * from product_data where id='$id'";

        $final = mysqli_query ($con,$query);
        
        while($rows=mysqli_fetch_assoc($final)) {  ?>
    
         <div id="row2">
                <div id="col2">
               <img src="product_images/<?php echo $rows["product image"]; ?>" width= "180px" height= "180px">
            </div>
            <div id="col3"> 
               <div class="prod_name"><?php
                 echo $rows["product name"]; 
                 ?></div>
                 
                 <div class="price"><?php 
                 echo "Rs. ". $rows["price"];                    
                ?></div>

                <div class="descrip"><?php
                echo $rows["description"];
                ?></div>
               <br>
               <?php
        if(isset($_GET["email"])) {
            $id = $_GET["email"];  
            
            $query = "select * from sign_up where email='$id'";

            $final = mysqli_query ($con,$query);

            while($row=mysqli_fetch_assoc($final)) { ?>
               <form method= "post">
                <input type="number" name="qty" value= "1" id= "qty">
                <br><br>
                <input type="submit" value="Buy Now" name= "bn" id= "bn">
                <!-- <a href="my account.php?email=<?php echo $row["email"];?>&& id=<?php echo $rows["id"]; ?>" id= "bn">Buy Now</a> -->
                
                <!-- <input type="submit" value="Add To Cart" name= "atc" id= "atc"> -->
               </form>
               <!-- <a href="#" name= "bn">buy now</a> -->
               </div>
            </div>
        <!-- GET USER DATA -->
<?php

date_default_timezone_set("Asia/karachi");

$today = getdate();
$day1 = $today["mday"];
$one = "1";
$day2 = $day1-$one;
       if(isset($_POST["bn"])) {
   $prod_id = $rows["id"];     
   $month = $today["month"];
   $year = $today["year"];   
   $customer_ID = $row["customer ID"];     
   $cutomer_name = $row["name"];
   $email = $row["email"];
   $cont = $row["contact"];
   $add = $row["address"];
   $prod_name = $rows["product name"];
   $prod_img = $rows["product image"];
   $price = $rows["price"];
   $qty = $_POST["qty"];
   $total = ($price*$qty);
   $query_p_order = "insert into place_orders values ('','$prod_id','$customer_ID','$day2','$month','$year','$cutomer_name','$email','$cont','$add','$prod_name','$prod_img','$price','$qty','$total')";
   
   $final_p_order = mysqli_query ($con,$query_p_order);

        if($final_p_order) {
            header("location:my account2.php?id=". $rows["id"]."&& email=".$row["email"]);
        }
        else {
            echo "error";
        }

       }
      
     } 

    }
            
}
 }
                
       

   
            
?>
</body>
</html>