<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <?php include 'link.php'; ?>
</head>
<body>
    <br>
    <center>
    <form method= "post" id= "regis_form">

    <h1>
        Registration Form
    </h1>
<br>
    <label>User ID:</label><br>
    <input readonly type="text" name= "cid" value= "<?php echo "ARMC".rand(1000,9999); ?>" id= "name3">
    <br><br>
    <label>User Name:</label><br> 
    <input type="text" placeholder= "User Name" name= "name" id="name">
    <br><br>
    <label>Email:</label> <br>
    <input type="text" name="email" id="name" placeholder= "Email">
    <br><br>
    <label>Contact No:</label><br> 
    <input type="number" name="cont" id="name" placeholder= "Contact No">
    <br><br>
    <label>Password:</label><br> 
    <input type="password" name="pass" id="name" placeholder= "Password">
    <br><br>
    <label>Address:</label><br> 
    <textarea name="add" id="add" placeholder= "Current Address"></textarea>
    <br><br>
    <input type="submit" value="Sign Up" name= "sign_up" id= "sign_up">

    </form>
    </center>
    
    <?php 

    include ("connection.php");
    if(isset($_POST["sign_up"])) {
        
        $uname = $_POST["name"];
        $cID = $_POST["cid"];
        $email = $_POST["email"];
        $cont = $_POST["cont"];
        $pass = $_POST["pass"];
        $add = $_POST["add"];

    $query = "insert into sign_up values ('','$cID','$uname','$email','$cont','$pass','$add','user')";
        $final = mysqli_query($con,$query);

    if($final) {
        $query2 = "select * from sign_up where email='$email' && password='$pass'";
        $final2 = mysqli_query($con,$query2);
        $rows = mysqli_num_rows($final2); 
        while($data = mysqli_fetch_assoc($final2)) {
            
            $role = $data["role"];

    if($rows>=1 && $role=="user") {
        header('location: user.php?email=' . $data["email"]); 
    }
    else {
        echo "error";
    }
    }   
}
}


?>


</body>
</html>