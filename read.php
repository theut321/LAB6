<?php
include 'db.php';
$read = $conn->query("SELECT * FROM cpu");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CPU LIST</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
    <h2>CPU List</h2>
     <a href="create.php">Add New</a>
    <table>
        <tr>
            <th>ID</th><th>Brand</th><th>Generation</th><th>Model</th><th>Price</th><th>Stock Quantity</th><th>Date Added</th><th>Actions</th>
    </tr>
    <?php
    while($row = $read->fetch_assoc()): 
    ?>
    <tr>
        <td><?= $row['id'] ?></td>>
        <td><?= $row['brand'] ?></td>>
        <td><?= $row['generation'] ?></td>>
        <td><?= $row['model'] ?></td>>
        <td><?= $row['price'] ?></td>>
        <td><?= $row['stock_quantity'] ?></td>>
        <td><?= $row['date_added'] ?></td>>
        <td>
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            <a href="update.php?id=<?= $row['id'] ?>" >Update</a>
        </td>
    </tr>
    <?php endwhile; 
    ?>
</table>

</body>
</html>