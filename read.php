<?php
include 'db.php';

// query
$sql="SELECT * FROM main";
$result=$conn->query($sql);


?>




<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>All ITEMS</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
  <a class="btn btn-info my-2" href="add.php">ADD</a>     <a class="btn btn-secondary my-2" href="main.php">Home</a> <a class="position-absolute top-0 end-0 btn btn-success my-2" href="newsearch.php">Search</a>
    <table class="table">
  <thead class="table-dark">
  <td>Item_ID</td>
  <td>Item Name</td>
   <td>Purchase Price</td>
    <td>Sell Price</td> 
    <td>Quantity</td>
     <td>Capital</td>
     <td>Update</td>
     <td>Delete</td>
  </thead>
  <tbody>
  <?php if($result){
    while($rows=$result->fetch_assoc()){ 
        $id=$rows['itemNo'];
        $name=$rows['itemName'];
        $pprice=$rows['pprice'];
        $sprice=$rows['sprice'];
        $quantity=$rows['quantity'];
        $capital=$rows['pprice']*$rows['quantity'];
        ?>
        <?php 
echo'
<tr> 
     <td>'.$id.'</td> 
<td>'.$name.' </td> 
<td>'.$pprice.' </td> 
<td>'.$sprice.'</td> 
<td>'.$quantity.'</td>
<td>'.$capital.' </td>
 <td>

 <a href="update.php?updateid='.$id.'"><button type="button" class="btn btn-primary">Update</button></a> 
 <form action="delete.php" method="post">
    <input type="hidden" name="id" value="'.$id.'">
    <td> <input type="submit" value="Delete" name="delete" class="btn btn-danger">   </td>
 </form> </td> </tr> ';?>
<?php          }
}else{
    echo"Invalid entry";
}?>
  </tbody>
</table>
  </body>
</html>