<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Users</title>
  <?php include ("link.php"); ?>
</head>
<body>

<form method= "post">

<input type="search" name="srch_bar" id="srch" placeholder= "Search-Here">
<input type="submit" value="Search" name= "srch">

</form>

<?php
    $con = mysqli_connect("localhost","root","","ecommerce");
    if(isset($_POST["srch"])) {
        $srch_br = $_POST["srch_bar"];

        $query= "select * from sign_up where email= '$srch_br' && role= 'user'";

        $abc = mysqli_query($con,$query);

        if(mysqli_num_rows($abc)>=0) {
            while($row = mysqli_fetch_assoc($abc)) {


                echo $row["name"];


            }

                    }
                    
                }

                // include 'refresh btn.php';

?>

<br>
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Contact</th>
      <th scope="col">Password</th>
      <th scope="col">role</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
    <?php
    include ("connection.php");

$query = "select * from sign_up where role= 'user'";

$final = mysqli_query($con,$query);

while($row=mysqli_fetch_assoc($final)) { ?>



  <tbody>
    <tr>
      <td><?php echo $row["name"]; ?></td>
      <td><?php echo $row["email"]; ?></td>
      <td><?php echo $row["contact"]; ?></td>
      <td><?php echo $row["password"]; ?></td>
      <td><?php echo $row["role"]; ?></td>
      <td><a href="#">Delete</a></td>
    </tr>
  </tbody>
  <?php } ?>
</table>
</body>
</html>