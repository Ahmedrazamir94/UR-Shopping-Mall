<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <?php include 'link.php'; ?>

</head>
<body>
<?php
  include 'navbar.php'; 
  ?>


<?php
    include ("connection.php");

        if(isset($_GET["email"])) {
            $id = $_GET["email"];  
            
            $query = "select * from sign_up where email='$id'";

            $final = mysqli_query ($con,$query);

            while($rows=mysqli_fetch_assoc($final)) { ?>


  <div id="main">

 
<div id="container">
<!-- <br><br><br><br> -->
    <h1>
        UR Ecommerce Shop
    </h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic rerum a sint <br> placeat iure earum maiores nobis consequatur ipsum nihil cum, velit illo, aut eius, incidunt tempore labore?</p>
    <input type="submit" value="Shop" id= "btn">
</div>
</div>


        <div id="mainpart">
            <h2>Shop</h2>
<br><br>
            <div class="row align-items-center mainrow">       
<?php

$con = mysqli_connect("localhost","root","","ecommerce");

$query = "select * from product_data";

$final = mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($final)) {   
  ?>
    
    
          <a href="add to cart.php?email=<?php echo $rows["email"]; ?>&& id=<?php echo $row["id"]; ?>">
   
    <div class="coll">
    <img src="product_images/<?php echo $row["product image"]; ?>">
        <br>
        <div id="p_name"><?php echo $row["product name"]; ?></div>
        
        <div id="p_price"><?php echo "Rs. " . $row["price"]; ?></div>

        <span class="fa fa-star checked1" id= "check"></span>
        <span class="fa fa-star checked" id= "check"></span>
        <span class="fa fa-star checked" id= "check"></span>
        <span class="fa fa-star checked" id= "check"></span>
        <span class="fa fa-star checked" id= "check"></span>
        <br>
    </div>    
  </a>



<?php }?>
</div>
        </div>
        <footer id= "without">
          <center>
          <label id= "footerld">Email: </label><a href="#" id= "email"> ahmedrazamir94@gmail.com</a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label id= "footerld">Contact No: </label><span id="footerd"> 03172183709-03122517156 </span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          <label id= "footerld">Address: </label><span id="footerd">  Shahnawaz Bhutto Colony North Karachi,KARACHI.</span> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
          </center>
        </footer>
        <footer id= "responsive_footer">
          <label id= "footerld">Email: </label><a href="#" id= "email"> ahmedrazamir94@gmail.com</a> 
          <br>
          <label id= "footerld">Contact No: </label><span id="footerd"> 03172183709-03122517156 </span> 
          <br>
          <label id= "footerld">Address: </label><span id="footerd">  Shahnawaz Bhutto Colony North Karachi,KARACHI.</span>
        </footer>

        <?php }} ?>

</body>
</html>