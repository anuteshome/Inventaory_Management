<?php
include 'db.php'; //connection
if(isset($_POST['Add'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $pprice=$_POST['pprice'];
    $sprice=$_POST['sprice'];
    $quantity=$_POST['quantity'];
    if($id || $name||  $pprice|| $sprice || $quantity !== " "){
$sql="INSERT INTO main (itemNo,itemName,pprice,sprice,quantity) VALUES('$id','$name','$pprice','$sprice','$quantity')";
$result=$conn->query($sql);

    if($result){
    header("location:read.php");
}else{
    echo"Invalid entry";
}
}else{
    echo "Please a data";
}



}

//Ending of Algorithm
?>



<!DOCTYPE html>
<html lang="en">
<head><!--- head   -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Item</title>
    <!-- <link rel="stylesheet" href="style/login.css">
      -->
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="box">
        
        <form action="" method="post">
            <a href="main.php" class="btn btn-success my-2">Home</a>
        <h1 >Add item Here </h1>
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
    <label  class="form-label">Purchase price</label>
    <input type="number" class="form-control" name="pprice" autocomplete="off">
  </div>
  <div class="mb-3">
    <label  class="form-label">Sell price</label>
    <input type="number" class="form-control" name="sprice" autocomplete="off">
  </div>
  <div class="mb-3">
    <label  class="form-label">quantity</label>
    <input type="number" class="form-control" name="quantity"autocomplete="off">
  </div>
  <button type="submit" value="add" name="Add" class="btn btn-dark ">Submit</button>
<!-- <input class="button" type="submit" value="add"name="Add"><br><br> -->
I want to show <a href="read.php" class="btn btn-info my-2"  >ITEMS</a><br><br>
</form>


</div>
</body>
</html>