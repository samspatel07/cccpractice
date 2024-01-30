<?php
function  sql_autoload_register($classname){
    include_once "classes/$classname.php";
}

$abc = new ABC();
$xyz = new XYZ();
?>