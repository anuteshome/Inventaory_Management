<?php
// database connection
include 'db.php';
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// query
$itemName= $_GET['search'] ?? '';
$sql = $conn->prepare("SELECT * FROM machine WHERE item LIKE ?");
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
       <a class="btn btn-secondary my-2" href="main.php">Home</a>
    <table class="table">
  <thead class="table-dark">
  <td>Number</td>
  <td>Item Name</td>
  
  </thead>
  <form action="" method="GET">
            <input type="text" name="search" placeholder="Search by item name" />
            <input type="submit" value="Search"class="btn btn-primary ms-4" name="submit"/>
        </form>
  <tbody>

 <?php if ($rows): ?>
        <tr>
            <td><?= htmlspecialchars($rows['no']) ?></td>
            <td><?= htmlspecialchars($rows['item']) ?></td>
       
          
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