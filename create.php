<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add CPU</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <h2>Insert CPU Information</h2>
        <form method="post" action="">

            <label for ="brand">Brand:</label><br>
                <input type="text" id="brand" name="brand"required> <br>

            <label for ="generation">Generation:</label><br>
                <input type="number" id="generation" name="generation"required><br>

            <label for ="model">Model:</label><br>
                <input type="text" id="model" name="model"required><br>

            <label for ="price">Price:</label><br>
                <input type="number" id="price" name="price"required><br>

            <label for ="stock_quantity">Stock Quantity:</label><br>
                <input type="number" id="stock_quantity" name="stock_quantity"required><br>

            <input type="submit" name="submit" value="Submit">
        </form>

    <?php

    if(isset($_POST['submit'])){
        include 'db.php';


        $brand = $_POST['brand'];
        $generation = filter_var($_POST['generation'],FILTER_VALIDATE_INT);
        $model = $_POST['model'];
        $price = filter_var($_POST['price'], FILTER_VALIDATE_FLOAT);
        $stock_quantity = filter_var($_POST['stock_quantity'],FILTER_VALIDATE_INT);

        if($generation === false || $price === false || $stock_quantity === false){
            echo"<p>Error: Invalid inputs provided</p>";
        } else {
        $insert = "INSERT INTO cpu VALUES (NULL,'$brand', '$generation', '$model' , '$price', '$stock_quantity', CURRENT_DATE)";
        

        if (mysqli_query($conn, $insert)) {
            echo "<p>Item inserted successfully. </p>";
        } else {
            echo "<p>Error: " . $insert . "<br>" . mysqli_error($conn) . "</p>";
        }
        }
        mysqli_close($conn);
    }
       

    ?>
</body>
</html>