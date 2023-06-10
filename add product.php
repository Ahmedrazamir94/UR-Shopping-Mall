<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <?php include 'link.php'; ?>
</head>
<body>
<?php

$con = mysqli_connect("localhost","root","","ecommerce");

if (isset($_POST["btn"])) {
    $img_file = $_FILES["img"]["name"];
    $img = $_FILES["img"]["tmp_name"];
    $pid = $_POST["pid"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $stock = $_POST["stock"];
    $descrip = $_POST["descrip"];
    $ctgry = $_POST["ctgry"];

    if(move_uploaded_file($img, "product_images/".$img_file)) 
    {
 
        
    $query = "insert into product_data values ('','$pid','$img_file','$name','$ctgry','$price','$stock','$descrip')";

    $at = mysqli_query($con,$query);

        // header("location:prod data for admin.php");
        if($at){
            echo "<center>Product Add Successfully</center>";
        }
        else {
            echo "error";
        }
    }
    
}

?>

<div id="header">
    <br>
    <center>
    <h1>Product Entry</h1>
    </center>
    <br>
</div>



<form method= "post" enctype= "multipart/form-data" id= "prod_add">
    <br><br>
    <label>Product ID*</label>
    <br>
    <input readonly type="text" name= "pid" value= "<?php echo "ARMP".rand(1000,9999); ?>" id= "name2">
    <br><br>
    <input type="file" name="img" id="img">
    <br><br>
    <label>Product Name*</label>
    <br>
    <input type="text" name= "name" id= "name" maxlength= "35">
    <br><br>
    <label>Product Price*</label>
    <input type="text" name= "price" id= "name">
    <br><br>
    <label>How Many Stock ?</label>
    <br>
    <input type="number" name="stock" id="stock">
    <br><br>
    <label>Choose Category*</label>
    <br>
    <select name="ctgry" id= "ctgry">
        <option value="Boys">Boys</option>
        <option value="Girls">Girls</option>
        <option value="Other">Other</option>
    </select>
    <br><br>
    <label>Description*</label>
    <br>
    <textarea name="descrip" id="descrip"></textarea>
    <br><br>
    <center>
    <input type="submit" value="Add Product" id= "add_prod" name= "btn">
    </center>

</form>

</body>
</html>