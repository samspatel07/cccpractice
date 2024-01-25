<?php

include 'sql/connection.php';
include 'sql/function.php';
// update();
// $product_id = $_GET['product_id'];
// rest of your code
$product_id = null; 
if (isset($_GET['product_id'])) { 
    $product_id = $_GET["product_id"];
}
echo "$product_id";
$sql = "SELECT * FROM ccc_product WHERE product_id='$product_id'";
$result = mysqli_query($con, $sql);
echo "$sql";
// $result = $con->query($sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Product Information Form</title>
    <style>
        .content form .user-details {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            margin: 20px 0 0px 0;
        }
    </style>
</head>

<body>
    <div class="box">
        <div class="container">
            <div class="title">Product Information</div>
            <div class="content">
                <form action="product.php" method="post">
                    <div class="user-details">
                        <div class="input-box">
                            <span class="details" for="product_id">Product ID</span>
                            <?php
                                if ($result->num_rows > 0) {
                                    while ($row = $result->fetch_assoc()) {
                                        $product_id = $row["product_id"]; // Store product_id in a variable
                                        // echo $product_id;
                                        // Form for each product
                                        ?>
                                        <form action="product.php" method="get"> <!-- Set method to get or post based on your requirement -->
                                            <input type="text" placeholder="Enter Product ID" name="group1[product_id]" value="<?php echo $product_id; ?>" readonly>
                                            <!-- Add other form fields as needed -->
                                            <input type="submit" value="Submit">
                                        </form>
                                        <?php
                                    }
                                } else {
                                    echo "No records available";
                                }
                                ?>
                        </div>
                        <div class="input-box">
                            <span class="details" for="product_name">Product Name</span>
                            <input type="text" placeholder="Enter Product Name" id="product_name" name="group1[product_name]" required>
                        </div>
                        <div class="input-box">
                            <span class="details" for="sku">SKU</span>
                            <input type="text" placeholder="Enter SKU" id="sku" name="group1[sku]" required>
                        </div>
                        <div class="input-box-1" style="justify-content:left">
                            <span class="details" for="product_type">Product Type</span>
                            <input type="radio" id="simpleType" name="group1[product_type]" value="Simple">
                            <span for="simpleType">Simple</span> <br>
                            <input type="radio" id="bundleType" name="group1[product_type]" value="Bundle">
                            <span for="bundleType">Bundle</span>
                        </div>
                        <div class="input-box">
                            <span class="details" for="category">Category</span>
                            <select id="category" name="group1[category]" class="input-box" required>
                                <option value="select">--Select --</option>
                                <option value="Bar & Game Room">Bar & Game Room</option>
                                <option value="Bedroom">Bedroom</option>
                                <option value="Decor">Decor</option>
                                <option value="Dining & Kitchen">Dining & Kitchen</option>
                                <option value="Lighting">Lighting</option>
                                <option value="Living Room">Living Room</option>
                                <option value="Mattresses">Mattresses</option>
                                <option value="Office">Office</option>
                                <option value="Outdoor">Outdoor</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <span class="details" for="manufacturer_cost">Manufacturer Cost</span>
                            <input type="text" placeholder="Enter Manufacturer Cost" id="manufacturer_cost" name="group1[manufacturer_cost]" required>
                        </div>
                        <div class="input-box">
                            <span class="details" for="shipping_cost">Shipping_cost </span>
                            <input type="text" placeholder="Enter Shipping Cost" id="shipping_cost" name="group1[shipping_cost]" required>
                        </div>
                        <div class="input-box">
                            <span class="details" for="price">Price</span>
                            <input type="text" placeholder="Enter Price" id="price" name="group1[price]" required>
                        </div>
                        <div class="input-box">
                            <span class="details" for="status">Status</span>
                            <select id="status" name="group1[status]" class="input-box" required>
                                <option value="select">--Select --</option>
                                <option value="Enabled">Enabled</option>
                                <option value="Disabled">Disabled</option>
                            </select>
                        </div>
                        <div class="input-box">
                            <span class="details" for="created_at">Created At</span>
                            <input type="date" id="created_at" name="group1[created_at]" required>
                        </div>
                        <div class="input-box">
                            <span class="details" for="updated_at">Updated At</span>
                            <input type="date" id="updated_at" name="group1[updated_at]" required>
                        </div>
                    </div>
                    <div class="button">
                        <input type="submit" value="submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
<?php

$con->close();
?>/

<!-- <?php

include 'sql/connection.php'; // Include database connection file
include 'sql/function.php'; 
if (isset($_POST['product']['submit'])) {
    
    $product_data = $_POST['product'];
    if(isset($_GET['edit']))
    {
        global $conn;
        $product_id= $_GET['edit'];
        // var_dump($product_id);
        $product = $con-> query("SELECT * FROM ccc_product WHERE product_id=$product_id")->fetch_assoc();
        // var_dump($product);
        $result = update("ccc_product",$product_data,$product_id);
        // var_dump($result);
        $conn->query($result);
        echo "Data change Successfully";

    }else{

        // Exclude the 'submit' key from the product data
        unset($product_data['submit']);
    
        // Assuming you have a table named 'ccc_product'
        $table_name = 'ccc_product';
    
        // Use the insert function to create the SQL query for insertion
        $insert_query = insert($table_name, $product_data);
    
        // Execute the query
        $result = mysqli_query($con, $insert_query);
    
        if ($result) {
            echo "Product added successfully!";
        } else {
            echo "Error: " . mysqli_error($con);
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
</head>
<body>

    <h2>Product Information</h2>

    <form  action="" method="post">

        <label for="product_name">Product Name:</label>
        <input type="text" id="product_name" name="product[product_name]" placeholder="product name"><br><br>

        <label for="sku">SKU:</label>
        <input type="text" id="sku" name="product[sku]"><br><br>

        <label>Product Type:</label><br>
        <input type="radio" id="simple" name="product[product_type]" value="Simple" >
        <label for="simple">Simple</label>
        <input type="radio" id="bundle" name="product[product_type]" value="Bundle">
        <label for="bundle">Bundle</label><br><br>

        <label for="category">Category:</label>
        <select id="category" name="product[category]">
            <option value="Bar & Game Room">Bar & Game Room</option>
            <option value="Bedroom">Bedroom</option>
            <option value="Decor">Decor</option>
            <option value="Dining & Kitchen">Dining & Kitchen</option>
            <option value="Lighting">Lighting</option>
            <option value="Living Room">Living Room</option>
            <option value="Mattresses">Mattresses</option>
            <option value="Office">Office</option>
            <option value="Outdoor">Outdoor</option>
        </select><br><br>

        <label for="manufacturer_cost">Manufacturer Cost:</label>
        <input type="text" id="manufacturer_cost" name="product[manufacturer_cost]"><br><br>

        <label for="shipping_cost">Shipping Cost:</label>
        <input type="text" id="shipping_cost" name="product[shipping_cost]"><br><br>

        <label for="total_cost">Total Cost:</label>
        <input type="text" id="total_cost" name="product[total_cost]"><br><br>

        <label for="price">Price:</label>
        <input type="text" id="price" name="product[price]"><br><br>

        <label for="status">Status:</label>
        <select id="status" name="product[status]">
            <option value="Enabled">Enabled</option>
            <option value="Disabled">Disabled</option>
        </select><br><br>

        <label for="created_at">Created At:</label>
        <input type="date" id="created_at" name="product[created_at]"><br><br>

        <label for="updated_at">Updated At:</label>
        <input type="date" id="updated_at" name="product[updated_at]"><br><br>

        <input type="submit" value="Submit" name="product[submit]">

    </form>

</body>
</html> -->