<?php
include 'db.php';
$id =$_GET['id'];
$conn -> query("DELETE FROM cpu WHERE id = '$id'");
header("Location: read.php");

?>