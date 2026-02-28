<?php
include 'db.php';
$read = $conn->query("SELECT * FROM cpu");
$total_items = $read->num_rows;
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
        <td><?= htmlspecialchars($row['id'] )?></td>
        <td><?= htmlspecialchars($row['brand'] )?></td>
        <td><?= htmlspecialchars($row['generation'])?></td>
        <td><?= htmlspecialchars($row['model'])?></td>
        <td><?= htmlspecialchars($row['price']) ?></td>
        <td><?= htmlspecialchars($row['stock_quantity']) ?></td>
        <td><?= htmlspecialchars($row['date_added']) ?></td>
        <td>
            <a href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            <a href="update.php?id=<?= $row['id'] ?>" >Update</a>
        </td>
    </tr>
    <?php endwhile; 
    ?>
</table>
    <?php
    echo "<p>Total items: "  .$total_items . "</p>"; 
    ?>
</body>
</html>