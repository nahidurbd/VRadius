<?php

// set variables
$username = $_POST["username"];
$password = $_POST["password"];

// SQL connection
include 'database.php';
$sql = "INSERT INTO radcheck (username, attribute, op, value) VALUES ('$username', 'User-Password', '==', '$password')";
mysqli_query($conn, $sql);

// redirect to user-list
header('Location: user-list.php');

?>