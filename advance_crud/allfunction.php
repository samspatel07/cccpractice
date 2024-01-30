<?php
//update
function update($table,$data,$where){
    foreach($data as $column=>$value){
        $update = ("UPDATE $table SET $column=$value WHERE id='$where'");
        mysqli_query($GLOBALS['conne'],$update);
    }
}
//edit
function selectdatabyid($tablename,$id){
    $sql = "SELECT * FROM $tablename WHERE id=$id";
    $result = mysqli_query($GLOBALS['conne'],$sql);
    if($result){
        $data = mysqli_fetch_array($result);
        return $data;
    }else{
        echo 'ERROR';
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
?>