<?php
include 'db.php';

if(isset($_POST['Submit'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $price=$_POST['price'];
    $quantity=$_POST['quantity'];
    $total=$price*$quantity;
    $time=time();


    $sql="INSERT INTO sales (itemNo,itemName,price,quantity,total,timee) VALUES ('$id','$name','$price','$quantity','$total','$time')";
    $result=$conn->query($sql);

    if($result){
        // echo "Success";
        header("location:salesdis.php");

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
    <title>Add sales</title>
    <!-- <link rel="stylesheet" href="style/login.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="box">
        
        <form action="" method="post">
        <a href="main.php" class="btn btn-success my-4">Home</a>
        <h1  class="my-1">Add Sales Here </h1>
        <div class="mb-3">
    <label  class="form-label">Item No</label>
    <input type="number" class="form-control" name="id" autocomplete="off">
  </div>
        <div class="mb-3">
    <label>Item Name</label>
    <input type="text" class="form-control" name="name" autocomplete="off" >
    <div id="emailHelp" class="form-text"></div>
  </div>
  <div class="mb-3">
    <label  class="form-label">price</label>
    <input type="number" class="form-control" name="price" autocomplete="off">
  </div>
  <div class="mb-3">
    <label  class="form-label">Quantity</label>
    <input type="number" class="form-control" name="quantity" autocomplete="off">
  </div>
  <!-- <div class="mb-3">
    <label  class="form-label">Total</label>
    <input type="number" class="form-control" name="total"autocomplete="off">
  </div> -->
  <button type="submit" value="submit" name="Submit" class="btn btn-dark ">Submit</button>
I want show sales<a href="salesdis.php" class="btn btn-success my-2">Sales</a><br><br>
</form>


</div>
</body>
</html>