<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total Sale</title>
    <link rel="stylesheet" href="style.css">
    <?php include ("link.php"); ?>
</head>
<body>
    <?php
    include ("connection.php");

    $query3 = "select sum(total) from complete_orders_data";
    $final3 = mysqli_query ($con,$query3);
    $row3 = mysqli_fetch_array($final3); 
       
    ?>
    <div id="total_sale">
     <h5> Your Current Sale Is: Rs.(<?php echo $row3["sum(total)"]; ?>)</h5>
    </div>
</body>
</html>