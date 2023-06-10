<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<?php include 'link.php'; ?>
</head>
<body>
    <div id="dashboard_navbar">
<ul>

<li><a href="welcome back admin.php" target= "navbar">Dashboard</a></li>

<?php

include ("connection.php");
$query = "select * from pending_order";
$final = mysqli_query($con,$query);
$result = mysqli_num_rows($final); ?>

<li>
    <a href="pending order AP.php" target= "navbar"> <?php echo $result."</span>"; ?>/Pending Orders</a>
</li>


<li><a href="add product.php" target= "navbar">Add Product</a></li>
<div class="dropdown show">
<li><a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown">
Stock
</a>

<div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
<a class="dropdown-item" href="boys ctgry.php" target= "navbar" name= "boys">Boys</a>
<a class="dropdown-item" href="girls ctgry.php" target= "navbar">Girls</a>
<a class="dropdown-item" href="other ctgry.php" target= "navbar">Other Things</a></li>
</div>
<?php

include ("connection.php");
$query2 = "select * from complete_orders_data";
$final2 = mysqli_query($con,$query2);
$result2 = mysqli_num_rows($final2); ?>
<li><a href="complete orders data.php" target= "navbar"><?php echo $result2; ?>/Shipped Orders</a></li>
<?php

include ("connection.php");
$query3 = "select * from sign_up where role= 'user'";
$final3 = mysqli_query($con,$query3);
$result3 = mysqli_num_rows($final3); ?>
<li><a href="all users.php" target= "navbar"><?php echo $result3; ?>/All Users</a></li>
<li><a href="dashboard.php" target= "navbar">User FeedBack</a></li>
<li><a href="total sale.php" target= "navbar">Total Sale</a></li>
</div>  
 
</ul>
</div>
</body>
</html>