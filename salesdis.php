<?php
include 'db.php';
// query
$sql="SELECT * FROM sales ORDER BY no DESC";
$result=$conn->query($sql);

// 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tsion_Construction_material_supplier</title>
    <!-- <link rel="stylesheet" href="style/display.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>


<a class="btn btn-info my-2" href="salesin.php">ADD</a>     <a class="btn btn-secondary my-2" href="main.php">Home</a> 
<!-- <a class="position-absolute top-0 end-0 btn btn-success my-2" href="search.php">Search</a> -->
    <table class="table">
  <thead class="table-dark">
  <td>Item_ID</td>
  <td>Item Name</td>
   <td>Price</td>
    <td>Quantity</td>
     <td>Total</td>
     <td>Update</td>
     <td>Delete</td>
  </thead>
  <tbody>
  <?php if($result){
    while($rows=$result->fetch_assoc()){ 
        $id=$rows['itemNo'];
        $name=$rows['itemName'];
        $price=$rows['price'];
        $quantity=$rows['quantity'];
        $total=$rows['total'];
        ?>
        <?php 
echo'
<tr> 
     <td>'.$id.'</td> 
<td>'.$name.' </td> 
<td>'.$price.' </td> 
<td>'.$quantity.'</td> 
<td>'.$total.'</td>

 <td>

 <a href="updatesales.php?updateid='.$id.'"><button type="button" class="btn btn-primary">Update</button></a> 
 <form action="deletesales.php" method="post">
    <input type="hidden" name="id" value="'.$id.'">
    <td> <input type="submit" value="Delete" name="delete" class="btn btn-danger">   </td>
 </form> </td> </tr> ';?>
<?php          }
}else{
    echo"Invalid entry";
}?>
  </tbody>
</table>
<div>
</body>
</html>