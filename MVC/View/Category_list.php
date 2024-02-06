<?php

include 'sql/connection.php';

$query = "SELECT name FROM ccc_category ORDER BY cat_id";
$result = mysqli_query($conn, $query);

?>

<!DOCTYPE html>
<html lang="en">
<pre>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Category Name</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>{$row['name']}</td>";
                echo '</tr>';
            }
            ?>
        <tbody>
    </table>
</body>

</html>