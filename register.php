 <?php
include 'db.php';

if(isset($_POST['register'])){
    $user=$_POST['fname'];
    $pass=$_POST['password'];
    $email=$_POST['email'];
    $sex=$_POST['sex'];


    $sql="INSERT INTO users (firstname,Password,email,sex) VALUES ('$user','$pass','$email','$sex')";
    $result=$conn->query($sql);

    if($result){
        // echo "Success";
        header("location:Login.php");

    }else{
        echo"Error";
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
        <h1 >register Here </h1>
<input class="border" type="text" name="fname" id="" placeholder="Enter Username"><br><br>
<input class="border" type="password" name="password" id="" placeholder="Enter Password"><br><br>
<input class="border" type="email" name="email" id="" placeholder="Enter Email"><br><br>
<input class="border" type="text" name="sex" id="" placeholder="Enter sex"><br><br>
<input class="button" type="submit" value="register"name="register"><br><br>
Not yet a member<a href="Login.php" style="color:#ddc107;">SIGNUP</a><br><br>
</form>


</div>
</body>
</html>