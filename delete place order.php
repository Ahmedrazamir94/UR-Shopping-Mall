<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete place Order Data</title>
</head>
<body>
    <?php
        include ("connection.php");
        if(isset($_GET["email"])) {
            $email = $_GET["email"];
            // $id = $_GET["id"];
    
        $query = "delete from place_orders where email= '$email'";
    
        $final = mysqli_query ($con,$query);

        if($final) {
            header("location:my account.php?email=".$_GET["email"]. "&& prod_id=".$_GET["prod_id"]);
            // echo "success";
        }
        else {
            echo "error";
        }

        }

?>
</body>
</html>