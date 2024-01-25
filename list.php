<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of Last 20 Records</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>List of Last 10 Records</h2>
<?php

include 'conn.php';

$query = "SELECT * FROM ccc_product ORDER BY product_id DESC LIMIT 10";
$result = mysqli_query($conn, $query);

echo '<table>
<tr>
<th>product name</th>
<th>sku</th>
<th>product_type</th>
<th>category</th>
<th>manufacturer_cost</th>
<th>shipping_cost </th>
<th>total_cost</th>
<th>price </th>
<th>status </th>
<th>created_at</th>
<th>updated_at</th>

</tr>';
if(mysqli_num_rows($result)>0){
    while ($row = mysqli_fetch_assoc($result)){
        echo '<tr>';
        echo '<td>'.$row['product_name'].'</td>';
        echo '<td>'.$row['sku'].'</td>';
        echo '<td>'.$row['product_type'].'</td>';
        echo '<td>'.$row['category'].'</td>';
        echo '<td>'.$row['manufacturer_cost'].'</td>';
        echo '<td>'.$row['shipping_cost'].'</td>';
        echo '<td>'.$row['total_cost'].'</td>';
        echo '<td>'.$row['price'].'</td>';
        echo '<td>'.$row['status'].'</td>';
        echo '<td>'.$row['created_at'].'</td>';
        echo '<td>'.$row['updated_at'].'</td>';
        echo '</tr>';
    }
}
echo "</table>";

mysqli_close($conn);

?>