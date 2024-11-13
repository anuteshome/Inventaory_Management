<?php
include 'db.php';

// query
$itemName = $_GET['search'] ?? '';
$sql = $conn->prepare("SELECT * FROM main WHERE itemName LIKE ?");
$searchTerm = "%" . $itemName . "%"; // Use LIKE for partial matching
$sql->bind_param("s", $searchTerm);
$sql->execute();
$result = $sql->get_result();

$rows = $result->fetch_assoc();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tsion Construction Material Supplier</title>
    <link rel="stylesheet" href="style/dis.css">
</head>
<body>

<a href="add.php">Back</a>
<a href="main.php">Home</a>
<h1 class="title">All Datas of Items</h1>
<div class="tb">
    <table class="tb">
        <tr>
            <td>Item_ID</td>
            <td>Item Name</td>
            <td>Purchase Price</td>
            <td>Sell Price</td>
            <td>Quantity</td>
            <td>Capital</td>
            <td>Operations</td>
        </tr>
        
        <form action="" method="GET">
            <input type="text" name="search" placeholder="Search by item name" />
            <input type="submit" name="submit"/>
        </form>

        <?php if ($rows): ?>
        <tr>
            <td><?= htmlspecialchars($rows['itemNo']) ?></td>
            <td><?= htmlspecialchars($rows['itemName']) ?></td>
            <td><?= htmlspecialchars($rows['pprice']) ?></td>
            <td><?= htmlspecialchars($rows['sprice']) ?></td>
            <td><?= htmlspecialchars($rows['quantity']) ?></td>
            <td><?= htmlspecialchars($rows['pprice'] * $rows['quantity']) ?></td>
            <td>
                <a href="update.php"><button>Update</button></a>
                <a href="update1.php?updateid=<?= htmlspecialchars($rows['itemNo']) ?>">up</a>
                
                <form action="delete.php" method="post" style="display:inline;">
                    <input type="hidden" name="id" value="<?= htmlspecialchars($rows['itemNo']) ?>">
                    <input type="submit" name="delete" class="dbtn" value="Delete">
                </form>
            </td>
        </tr>
        <?php else: ?>
        <tr>
            <td colspan="7">No data found.</td>
        </tr>
        <?php endif; ?>
    </table>




    
</div>
</body>
</html>
