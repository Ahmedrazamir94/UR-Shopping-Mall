<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Complete Orders Data</title>
</head>
<body>
<?php
        include ("connection.php");
        if(isset($_GET["id"])) {
            $id = $_GET["id"];
    
        $query = "delete from complete_orders_data where id= '$id'";
    
        $final = mysqli_query ($con,$query);

        if($final) {
            header("location:complete orders data.php");
        }
        else {
            echo "error";
        }

        }

?>
</body>
</html>