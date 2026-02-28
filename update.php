<?php
include 'db.php';
$id = $_GET['id'];
$read = $conn->query("SELECT * FROM cpu WHERE id = '$id'")-> fetch_assoc();
$opts = $conn->query("SELECT id, model FROM cpu WHERE id != $id");

if ($_SERVER['REQUEST_METHOD'] == "POST"){
    $brand = $_POST['brand'];
    $generation = $_POST['generation'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $stock_quantity = $_POST['stock_quantity'];
    $update  = $conn-> prepare("UPDATE cpu SET brand= ?, generation=?, model= ?, price=?, stock_quantity=?, date_added=? WHERE id=?");
    $update->bind_param("sisdii", $brand, $generation, $model, $price, $stock_quantity, $id);
    $update->execute();
    header("Location: read.php");
    exit;
} else {
    echo "Error updating record: " . $conn->error;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit CPU List</title>
</head>
    <h2>Edit CPU List</h2>

<body>
    <form method="POST">
        Brand: <input name="brand" required value="<?= htmlspecialchars($read['brand']) ?>"><br>
         Generation: <input name="generation" required value="<?= htmlspecialchars($read['generation']) ?>"><br>
          Model: <input name="model" required value="<?= htmlspecialchars($read['model']) ?>"><br>
           Price: <input name="price" required value="<?= htmlspecialchars($read['price']) ?>"><br>
            Stock Quantity: <input name="stock_quantity" required value="<?= htmlspecialchars($read['stock_quantity']) ?>"><br>
             Date Added: <input name="date_added" required value="<?= htmlspecialchars($read['date_added']) ?>"><br>

            <?php while ($o = $opts-> fetch_assoc()): 
                endwhile
                ?>
            <br>
            <button>Update</button>
            </form>    
    
</body>
</html>