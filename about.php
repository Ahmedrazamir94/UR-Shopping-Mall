<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>
    <?php include 'link.php' ?>
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
      <a href="" id= "arm">ARM !!!</a>
    </div>
    <div class="col-4 navcol2">
    <a href="user.php?email=<?php echo $rows["email"]; ?>">Home</a>
    <a href="about.php?email=<?php echo $rows["email"]; ?>" id= "home">About</a>
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
    <li><a href="#">About</a></li>
    <li><a href="contact us.php">Contact US</a></li>
    <li><a class="myaccount text-success" id= "myaccount1" href="my account2.php?email=<?php echo $rows["email"]; ?>">My Account</a></li>
  </ul>
</div>
<?php }} ?>

    <br><br><br><br><br>
    <center>
    <h1>
        About By Owner "Ahmed Raza Mir"
    </h1>
    </center>
    <div id="containerabout">
    <div id="lineLeft">

        <div id="boxOne"><img src="my img.jpg" id= "myimg"></div>

    </div>
    <div id="lineRight">

        <div id="image">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo facere porro quia quo corrupti magnam aspernatur dolor perspiciatis nesciunt, recusandae ratione repellat, laboriosam accusantium placeat enim officia nulla. Placeat aliquam facilis maxime laborum doloribus, nam iusto quos eum voluptatum architecto officiis iste expedita, unde ratione optio culpa praesentium quis modi hic veniam! Aperiam, mollitia quaerat obcaecati error ea laboriosam soluta eum perspiciatis, dolor voluptatum unde dolores architecto hic dolore quae ex distinctio nesciunt a quidem. Nemo a facilis incidunt excepturi repellat. Delectus quibusdam ipsum voluptates eos sint, dolorum soluta, fuga exercitationem quas quasi obcaecati eligendi consectetur, illum maxime sunt. Suscipit eius eum consectetur deleniti ratione illum obcaecati ea, sit molestiae numquam distinctio vitae veniam inventore quam ipsam, reiciendis est non. Ullam, aliquid qui illum, mollitia maxime sunt, accusamus consectetur rerum sit suscipit minus quibusdam voluptas hic ipsa corporis neque impedit ipsum eveniet quam est id libero saepe doloremque. Autem, illo.</p>
        </div>

    </div>
</div>

<center>
    <h1>
        About By Company "ARM Shopping Family"
    </h1>
    </center>
    <div id="containerabout">
    <div id="lineLeft">

        <div id="boxOne"><img src="https://www.the-glazine.com/wp-content/uploads/2020/12/AU3-627x420.jpg" id= "myimg"></div>

    </div>
    <div id="lineRight">

        <div id="image">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo facere porro quia quo corrupti magnam aspernatur dolor perspiciatis nesciunt, recusandae ratione repellat, laboriosam accusantium placeat enim officia nulla. Placeat aliquam facilis maxime laborum doloribus, nam iusto quos eum voluptatum architecto officiis iste expedita, unde ratione optio culpa praesentium quis modi hic veniam! Aperiam, mollitia quaerat obcaecati error ea laboriosam soluta eum perspiciatis, dolor voluptatum unde dolores architecto hic dolore quae ex distinctio nesciunt a quidem. Nemo a facilis incidunt excepturi repellat. Delectus quibusdam ipsum voluptates eos sint, dolorum soluta, fuga exercitationem quas quasi obcaecati eligendi consectetur, illum maxime sunt. Suscipit eius eum consectetur deleniti ratione illum obcaecati ea, sit molestiae numquam distinctio vitae veniam inventore quam ipsam, reiciendis est non. Ullam, aliquid qui illum, mollitia maxime sunt, accusamus consectetur rerum sit suscipit minus quibusdam voluptas hic ipsa corporis neque impedit ipsum eveniet quam est id libero saepe doloremque. Autem, illo.</p>
        </div>

    </div>
</div>
</body>
</html>