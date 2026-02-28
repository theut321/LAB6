<?php

$conn = mysqli_connect("localhost:3308", "root", "") or die("Connection failed: " . mysqli_connect_error());
$use = mysqli_select_db($conn, "easypc");

?>