<?php

include 'database.php';
$target = $_POST["id"];
$sql = "DELETE FROM radcheck WHERE id=$target";
$query = mysqli_query($conn, $sql);

// redirect to the user-list.php
header('Location: user-list.php');

?>