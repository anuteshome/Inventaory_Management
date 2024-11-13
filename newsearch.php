<?php
include 'db.php';

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// query
$itemName = $_GET['search'] ?? '';
$sql = $conn->prepare("SELECT * FROM main WHERE itemName LIKE ?");
$searchTerm = "%" . $itemName . "%"; // Use LIKE for partial matching
$sql->bind_param("s", $searchTerm);
$sql->execute();
$result = $sql->get_result();

$rows = $result->fetch_assoc();

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
  <a class="btn btn-info my-2" href="add.php">ADD</a>     <a class="btn btn-secondary my-2" href="main.php">Home</a> <a class=" btn btn-warning ms-2 my-2" href="read.php">Items</a><a class="position-absolute top-0 end-0 btn btn-success my-2" href="search.php">Search</a>
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
  <form action="" method="GET">
            <input type="text" name="search" placeholder="Search by item name" />
            <input type="submit" value="Search"class="btn btn-primary ms-4" name="submit"/>
        </form>
  <tbody>

 <?php if ($rows): ?>
        <tr>
            <td><?= htmlspecialchars($rows['itemNo']) ?></td>
            <td><?= htmlspecialchars($rows['itemName']) ?></td>
            <td><?= htmlspecialchars($rows['pprice']) ?></td>
            <td><?= htmlspecialchars($rows['sprice']) ?></td>
            <td><?= htmlspecialchars($rows['quantity']) ?></td>
            <td><?= htmlspecialchars($rows['pprice'] * $rows['quantity']) ?></td>
            <td>
                <!-- <a href="update.php"><button>Update</button></a> -->
     
                <a href="update.php?updateid='.$id.'"><button type="button" class="btn btn-primary">Update</button></a> 
                
                <form action="delete.php" method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($rows['itemNo']) ?>">
                    <input type="submit" name="delete" class="btn btn-danger" value="Delete">
                </form>
            </td>
        </tr>
        <?php else: ?>
        <tr>
            <td colspan="7">No data found.</td>
        </tr>
        <?php endif; ?>
</table>
  </body>
</html>