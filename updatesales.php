<?php
require 'db.php';


include 'db.php';
$id=$_GET['updateid'];
$sql="SELECT * FROM sales WHERE itemNo=$id";
$result=$conn->query($sql);
$rows=$result->fetch_assoc();
   $name=$rows['itemName']; 
   $price=$rows['price']; 
   $quantity=$rows['quantity']; 
//    $quantity=$rows['itemNo']; 

if(isset($_POST['update'])){
    $name=$_POST['name']; 
   $price=$_POST['price']; 
   $quantity=$_POST['quantity']; 
   $total=$price*$quantity;

$sql="update sales set itemName='$name',price='$price',quantity='$quantity', total='$total' where itemNo=$id";
$result=$conn->query($sql);

if($result){
    header("location:salesdis.php");
}else{
    echo "updating error";
}
}
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Updating</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <body>
   
    <div class="container my-5">
        <form action="" method="POST">
        <form>
  <div class="mb-3">
    <label>Item Name</label>
    <input type="text" class="form-control" name="name" autocomplete="off" >
    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label  class="form-label">Purchase price</label>
    <input type="number" class="form-control" name="price" autocomplete="off">
  </div>
  <div class="mb-3">
    <label  class="form-label">Sell price</label>
    <input type="number" class="form-control" name="quantity" autocomplete="off">
  </div>
  <!-- <div class="mb-3">
    <label  class="form-label">quantity</label>
    <input type="number" class="form-control" name="quantity"autocomplete="off">
  </div> -->
  <button type="submit" name="update" class="btn btn-dark ">Submit</button>
</form>
        </form>
    </div>
  </body>
</html>


?>