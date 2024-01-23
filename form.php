<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
<h2>Product form</h2>
<form action="conn.php" method="post">
    <label for="product_name">Product Name:</label>
    <input type="text" id="product_name" name="group1[product_name]"><br>

    <label for="sku">SKU</label>
    <input type="text" id="sku" name="group1[sku]"><br>

    <label> Product type: </label><br>
    <input type="radio" id="product_type" name="group1[product_type]" value="simple">
    <label for="product_type">simple</label><br>
    <input type="radio" id="product_type" name="group1[product_type]" value="bundle">
    <label for="product_type">bundle</label><br>

    <label for="category">Category:</label>
        <select id="category" name="group2[category]">
            <option value="Bar_Game_Room">Bar & Game Room</option>
            <option value="Bedroom">Bedroom</option>
            <option value="Decor">Decor</option>
            <option value="Dining_Kitchen">Dining & Kitchen</option>
            <option value="Lighting">Lighting</option>
            <option value="Living_Room">Living Room</option>
            <option value="Mattresses">Mattresses</option>
            <option value="Office">Office</option>
            <option value="Outdoor">Outdoor</option>
        </select><br>

    <label for="manufacturer_cost">Manufacturer Cost:</label>
    <input type="text" id="manufacturer_cost" name="manufacturer_cost"><br>

    <label for="shipping_cost">Shipping Cost:</label>
    <input type="text" id="shipping_cost" name="shipping_cost" ><br>

    <label for="total_cost">Total Cost:</label>
    <input type="text" id="total_cost" name="total_cost"><br>

    <label for="price">Price:</label>
    <input type="text" id="price" name="price"><br>

    <label for="status">Status:</label>
        <select id="status" name="status">
            <option value="Enabled">Enabled</option>
            <option value="Disabled">Disabled</option>
        </select><br>

    <label for="created_at">Created At:</label>
    <input type="date" id="created_at" name="created_at"><br>

    <label for="updated_at">Updated At:</label>
    <input type="date" id="updated_at" name="updated_at"><br>

    <input type="submit" value="Submit">
</form>
</body>
</html>