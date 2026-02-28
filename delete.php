<?php
include 'db.php';
$id =$_GET['id'];
$conn -> query("DELETE FROM cpu WHERE id = '$id'");
header("Location: read.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete CPU</title>
</head>
<body>
    <h2>Delete CPU</h2>
    
</body>
</html>