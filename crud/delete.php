<?php
include 'conn1.php';
extract($_GET);
$query = "DELETE FROM USER WHERE id='$id'";
mysqli_query($conn1,$query);
header('location:display.php');
?>