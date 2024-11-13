<?php
include 'db.php';
// query
$sql="SELECT * FROM main";
$result=$conn->query($sql);

// 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tsion_Construction_material_supplier</title>
    <!-- <link rel="stylesheet" href="style/dis.css"> -->
</head>
<body>


<a href="add.php">Back</a>     <a href="main.php">Home</a> <a href="search.php">Search</a><h1 class="title">All Datas of items<h1>
<div class="tb">
    <table class="tb" >
    
    <span class="header">  <tr><td>Item_ID</td> <td>Item Name</td> <td>Purchase Price</td> <td>Sell Price</td> <td>Quantity</td> <td>Capital</td><td>Oprations</td></tr> </span>  
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
 <a href="update.php?updateid='.$id.'"><button>Update1<button></a>
 <form action="delete.php" method="post">
    <input type="hidden" name="id" value="'.$id.'">
    <td> <input type="submit" name="delete" class="dbtn">   </td>
 </form> </td> </tr> ';?>
<?php          }
}else{
    echo"Invalid entry";
}?>

</table>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Item name</th>
      <th scope="col">Purchase price</th>
      <th scope="col">sell price</th>
      <th scope="col">Quantity</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
<div>
</body>
</html>