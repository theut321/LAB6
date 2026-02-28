<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add CPU</title>
</head>
<body>
    <h2>Insert CPU Information</h2>
        <form method="post">

            <label for ="brand">Brand:</label><br>
                <input type="text" id="brand" name="brand"><br>
            <label for ="generation">Generation:</label><br>
                <input type="text" id="generation" name="generation"><br>
            <label for ="model">Model:</label><br>
                <input type="text" id="model" name="model"><br>
            <label for ="price">Price:</label><br>
                <input type="text" id="price" name="price"><br>
            <label for ="stock_quantity">Stock Quantity:</label><br>
                <input type="text" id="stock_quantity" name="stock_quantity"><br>
            <label for ="date_added">Date Added:</label><br>
                <input type="text" id="date_added" name="date_added"><br>
            <input type="submit" value="Submit">
        </form>
    <?php
        include 'db.php';
        $brand = $_POST['brand'];
        $generation = $_POST['generation'];
        $model = $_POST['model'];
        $price = $_POST['price'];
        $stock_quantity = $_POST['stock_quantity'];
        $date_added = $_POST['date_added'];

        $insert = "INSERT INTO cpu VALUES (NULL,'$brand', '$generation', '$model' , '$price', '$stock_quantity', '$date_added')";

        if (mysqli_query($conn, $insert)) {
            echo "Employee inserted successfully.";
        } else {
            echo "Error: " . $insert . "<br>" . mysqli_error($conn);
        }

        mysqli_close($conn);

       

    ?>
</body>
</html>