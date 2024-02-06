<?php

$host = 'localhost';
$username = 'root';
$password = '';
$database = 'ccc_practice';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $new_cat = $_POST['new_cat'];
    $insertQuery = "INSERT INTO ccc_category (name) VALUES ('$new_cat')"; 
    $result = mysqli_query($conn, $insertQuery);

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="" method="post">
    <input type="text" placeholder="Add new category here" name="new_cat">
    <button type="submit">Add</button>
        <br>
    </form>
</body>

</html>