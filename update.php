<?php

function update($t, $data, $wh) {
    $columns = array();
    $whereCon = array();

    foreach ($data as $field => $value) {
        $columns[] = "`$field` = '$value'";
    }

    foreach ($wh as $field => $value) {
        $whereCon[] = "`$field` = '$value'";
    }

    $columnsString = implode(", ", $columns);
    $whereConString = implode(" AND ", $whereCon);

    echo "UPDATE {$t} SET {$columnsString} WHERE {$whereConString};";
}

update('asd', ['name' => '', 'sdhsgd' => 'cjhcgf'], ['id' => 3, 'email' => 'sdsa@.com']);

die;
?>