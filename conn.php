<?php

/*function update($t, $d = [], $where = []) {
    $columns = $whereCond = [];
    foreach($d as $field => $vale) {
        $columns[] = " `$field` = '$vale'";
        
    }

    foreach($where as $field => $vale) {
        $whereCond[] = " `$field` = '$vale'";
    }
    $columns = implode(",",$columns);
    $whereCond = implode(" AND ",$whereCond);
    echo "UPDATE {$t} SET {$columns} WHERE {$whereCond};";

}
update('xyz',['pnam'=>'Test','type'=>'Typetest'],['id'=>3,'email'=>'@.com']);
die;
function insert($table_name,$data){
    $columns = $VALUES = [];
    foreach($data as $col => $val){
        $columns[] = "`$col`";
        $VALUES[] = "'". addslashes($val). "'";
    }
    $columns = implode(", ",$columns);
    $VALUES = implode(", ",$VALUES);
    echo "INSERT INTO {$table_name} ({$columns}) VALUES ({$VALUES})";
    //echo "UPDATE {$table_name} SET ";
    //UPDATE table_name SET column1=value1,column2=value2, WHERE column_name = col_name
    
}*/
//insert("ABC",$_POST["product"]);
// echo "<pre>";
// print_r($_POST["product"]);
// //print_r($_POST["product1"]);
// die;
$servername = "localhost";
$username = "root";
$password = "";
$database = "ccc_practice";

$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $product_name = $_POST['product_name'];
    $sku = $_POST['sku'];
    $product_type = $_POST['product_type'];
    $category = $_POST['category'];
    $manufacturer_cost = $_POST['manufacturer_cost'];
    $shipping_cost = $_POST['shipping_cost'];
    $total_cost = $_POST['total_cost'];
    $price = $_POST['price'];
    $status = $_POST['status'];
    $created_at = $_POST['created_at'];
    $updated_at = $_POST['updated_at'];

    $insertQuery = "INSERT INTO ccc_product (product_name, sku, product_type, category, manufacturer_cost, shipping_cost, total_cost, price, status, created_at, updated_at) 
    VALUES ('$product_name', '$sku', '$product_type', '$category', '$manufacturer_cost', '$shipping_cost', '$total_cost', '$price', '$status', '$created_at', '$updated_at')";
    if ($conn->query($insertQuery) === TRUE) {
        echo "data added";
    }

}



?>