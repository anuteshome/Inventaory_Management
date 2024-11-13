<?php
include 'db.php';
if($conn){
    echo"";
}else{
    die("Error".$conn->error);
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link rel="stylesheet" href="style/style.css">
</head>
<body>
    <header class="head">
        <div class="div_logo">
<h1 class="logo">T.</h1>
</div>
<div>
<a href="read.php">ITEMS</a>
<a href="salesdis.php">SALES</a>
<a href="salesin.php">ADD SALES</a>
<a href="add.php">ADD ITEMS</a>
<a href="machine.php">FOR MACHINES</a>
<a href="Login.php">LOGOUT</a>
</div>
</header>

<section>
    <h1 class="name" > TSION<BR>
         BUILDING AND SANITARY
         MATERIAL SHOP<br>
        MANAGEMENT SYSTEM <br><span class="ad">ADMIN DASHBOARD</span> </h1>
<div>
<!-- <img src="style/BUSSINES.jpg" alt=""/> -->
</div>

</section>
 
</body>
</html>