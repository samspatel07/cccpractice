
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

<h2>List of Last 20 Records</h2>
<?php
            // include 'php_sql_function.php';
            $conn = mysqli_connect("localhost", "root", "", "ccc_practice");
            // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }
            // fetch($conn, "ccc_product", );
            $sql = "SELECT * FROM ccc_product ORDER BY product_id DESC LIMIT 20";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                $i = 1;
                echo ("<table>
                        <tr>
                            <th width='100vh'>Product ID</th>
                            <th width='200vh'>Product Name</th>
                            <th width='100vh'>SKU</th>
                            <th width='250vh'>Category</th>
                            <th width='100vh'>Edit</th>
                            <th width='100vh'>Delete</th>
                        </tr>");
                // output data of each row
                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td class = 'column'>" . $row["product_id"] . "</td><td class = 'column'>" . $row["product_name"] . "</td><td class = 'column'>" . $row["sku"] . "</td><td class = 'column'>" . $row['category'] . "</td>" ?>
                    <td align='center' class = 'btn'> <a href='product.php?name=<?php echo $row['product_id'] ?>'><button class='upd'>Edit</button></a> </td>
                    <td align='center' class = 'btn'> <a href='#'><button class='del'>Delete</button></a> </td>
                    </tr><?php
                        }
                echo "</table> <br>";
            } else {
                echo "0 results";
            }
            $conn->close();
            ?>
