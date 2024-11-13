<?php
$fname="";
$password="";
// database connection
include 'db.php';
if(isset($_POST['login'])){
    $user=$_POST['fname'];
    $pass=$_POST['password'];

$sql= "SELECT * FROM users";
$result=$conn->query($sql);

while($row=$result->fetch_assoc()){
    $dbusername=$row['firstname'];
    $dbpassword=$row['Password'];

    if($user==$dbusername && $pass == $dbpassword){
        header("location:main.php");
    }
    
    
   

}

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style/login.css">
</head>
<body>
    <div class="box">
        
        <form action="" method="post">
        <h1>Login Here </h1>
<input class="border" type="text" name="fname" id="" placeholder="Enter Username"><br><br>
<input class="border" type="password" name="password" id="" placeholder="Enter Password"><br><br>
<input class="button" type="submit" value="login"name="login"><br><br>
Not yet a member<a href="register.php" style="color:#ddc107;">SIGNUP</a><br><br>
</form>


</div>
</body>
</html>