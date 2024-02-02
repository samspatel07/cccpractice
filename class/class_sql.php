<!-- <?php
$conne = mysqli_connect('localhost', 'root','', 'advancecrud');
// if($conne){
//     echo "ok";
// }else{
//     echo "no";
// }

class queryBuilder1{

    //update
    function update($table,$data,$where){
    foreach($data as $column=>$value){
        $update = ("UPDATE $table SET $column=$value WHERE id='$where'");
        mysqli_query($GLOBALS['conne'],$update);
    }
}
    //delete
    function deletedata($tablename,$id){
    $sql = "DELETE FROM $tablename WHERE id=$id";
    $result = mysqli_query($GLOBALS['conne'],$sql);
    if($result){
        echo 'deleted';
    }else{
        echo 'ERROR';
    }  
}

    //select
    function fetchalldata($tablename){
    $sql = "SELECT * FROM $tablename";
    $result = mysqli_query($GLOBALS['conne'],$sql);
    if($result){
        return $result;
    }else{
        echo 'ERROR';
    }   
}

    function insert ($tablename,$data){
    $columns = "";
    $values = "";
    foreach($data as $column=>$value){
        $columns .= ($columns == "" ) ? "" : ", ";
        $columns .= $column;

        $values .= ($values == "" ) ? "" : ", ";
        $values .= $value;
    }
    $sql = "insert into $tablename ($columns) values ($values)";
    //echo $sql;
    $result = mysqli_query($GLOBALS['conne'],$sql);
    if($result){
        echo 'INSERTED';
    }else{
        echo 'ERROR';
    }    
}
}
?> -->
<pre>
    <?php

    class QueryBuilder
    {
        function __construct()
        {
            $this->servername = 'localhost';
            $this->username = 'root';
            $this->password = '';
            $this->database = 'ccc_practice';

            $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->database);
            if ($this->conn->connect_error) {
                die("Connection failed: " . $this->conn->connect_error);
            } else {
                echo "Connected";
            }
        }
        function update($t, $d = [], $where = [])
        {
            $columns = $whereCond = [];
            foreach ($d as $field => $vale) {
                $columns[] = " `$field` = '$vale'";
            }
            foreach ($where as $field => $vale) {
                $whereCond[] = " `$field` = '$vale'";
            }
            $columns = implode(",", $columns);
            $whereCond = implode(" AND ", $whereCond);
            echo "UPDATE {$t} SET {$columns} WHERE {$whereCond};";

        }

        function fetch($table_name, $condition = "")
        {
            $sql = "SELECT * FROM {$table_name}";
            if (!empty($condition)) {
                $sql .= " WHERE {$condition}";
            }
            $result = mysqli_query($this->conn, $sql);

            if ($result) {
                while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>{$row['product_name']} - {$row['sku']} - {$row['product_type']} - {$row['category']} - {$row['manufacturer_cost']} - {$row['shipping_cost']} - {$row['total_cost']} - {$row['price']} - {$row['status']} - {$row['created_at']} - {$row['updated_at']}</li>";
            }

                // return $data;
            } else {
                echo "Error executing query: " . mysqli_error($this->conn);
                return false;
            }

        }

        function delete($table, $where = [])
        {
            $whereConditions = [];
            foreach ($where as $field => $value) {
                $whereConditions[] = "`$field` = '$value'";
            }
            $whereClause = implode(" AND ", $whereConditions);
            $sql = "DELETE FROM {$table} WHERE {$whereClause};";
            $result = mysqli_query($this->conn, $sql);

        }
        // die;
    
        // insert("ABC", $_POST["group1"]);
        // echo "<pre>";
    
        // update('xyz', ['pnam' => 'Test', 'type' => 'Typetest'], ['id' => 3, 'email' => '@.com']);
        // echo "<pre>";
    
        // delete('ABC', ['id' => 1, 'status' => 'active']);
    }


    $qb = new QueryBuilder();
    $qb->fetch('ccc_product');
    $qb->delete('ccc_product', ['product_id' => 10]);
    echo "<br><br>";
    $qb->fetch('ccc_product');

    // $qb->update('xyz', ['pnam' => 'Test', 'type' => 'Typetest'], ['id' => 3, 'email' => '@.com']);
    ?>