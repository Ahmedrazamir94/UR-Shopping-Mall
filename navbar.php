<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Navbar</title>


</head>
<body>
<?php
    include ("connection.php");

        if(isset($_GET["email"])) {
            $id = $_GET["email"];  
            
            $query = "select * from sign_up where email='$id'";

            $final = mysqli_query ($con,$query);

            while($rows=mysqli_fetch_assoc($final)) { ?>


  <div class="row navbarrow fixed-top" id= "withresponsiverow">
    <div class="col-4 navcol1">
      <a href="" id= "arm">UR !!!</a>
    </div>
    <div class="col-4 navcol2">
    <a href="user.php?email=<?php echo $rows["email"]; ?>" id= "home">Home</a>
    <a href="about.php?email=<?php echo $rows["email"]; ?>">About</a>
    <a href="contact us.php?email=<?php echo $rows["email"]; ?>">Contact US</a>
    </div>
    <div class="col-4 navcol3">
    <a class="myaccount" href="my account2.php?email=<?php echo $rows["email"]; ?>">My Account</a>
    
    </div>
</div>

<div id="responsivenavbar">
  <ul>
    <li><a href="" id= "arm">ARM !!!</a></li>
    <li><a href="user.php?email=<?php echo $rows["email"]; ?>">Home</a></li>
    <li><a href="about.php?email=<?php echo $rows["email"]; ?>">About</a></li>
    <li><a href="contact us.php">Contact US</a></li>
    <li><a class="myaccount text-success" id= "myaccount1" href="my account2.php?email=<?php echo $rows["email"]; ?>">My Account</a></li>
  </ul>
</div>
<?php }} ?>
</body>
</html>