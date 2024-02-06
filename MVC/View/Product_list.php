<?php






$host = 'localhost';
$username = 'root';
$password = '';
$database = 'ccc_practice';

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['deleteProductId'])) {
    $deleteProductId = $_POST['deleteProductId'];

    $sql = "DELETE FROM ccc_product WHERE product_id = $deleteProductId";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }
}


mysqli_close($conn);

$conn = mysqli_connect($host, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query for last 20 records.
$sql = "SELECT product_id, product_name, sku, category FROM ccc_product ORDER BY product_id DESC LIMIT 20";
$result = mysqli_query($conn, $sql);
?>

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

        th,
        td {
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

    <h2>List of Last 20 Records of Product Name, SKU, Category</h2>

    <table>
        <thead>
            <tr>
                <!-- <th>Product ID</th> -->
                <th>Product Name</th>
                <th>SKU</th>
                <th>Category</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                // echo "<td>{$row['product_id']}</td>";
                echo "<td>{$row['product_name']}</td>";
                echo "<td>{$row['sku']}</td>";
                echo "<td>{$row['category']}</td>";
                echo "<td><button onclick='editProduct({$row['product_id']})' >Edit</button></td>";
                echo "<td><button onclick='deleteProduct({$row['product_id']})'>Delete</button></td>";
                echo "</tr>";
            }
            ?>
            <script>
                function editProduct(productId) {
                    var form = document.createElement('form');
                    form.method = 'post';
                    form.action = 'product.php';

                    var input = document.createElement('input');
                    input.type = 'hidden';
                    input.name = 'editProductId';
                    input.value = productId;

                    form.appendChild(input);
                    document.body.appendChild(form);

                    form.submit();
                    window.location.href = "product.php";
                }
                function deleteProduct(productId) {
                    let temp = confirm("Are you sure?");
                    if (temp) {
                        var form = document.createElement('form');
                        form.method = 'post';
                        form.action = '';

                        var input = document.createElement('input');
                        input.type = 'hidden';
                        input.name = 'deleteProductId';
                        input.value = productId;

                        form.appendChild(input);
                        document.body.appendChild(form);

                        form.submit();
                    }
                };
            </script>
        </tbody>
    </table>

</body>

</html>