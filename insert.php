

<?php

function insert($t, $data) {
    $columns = array();
    $values = array();

    foreach ($data as $field => $value) {
        $columns[] = "`$field`";
        $values[] = "'$value'";
    }

    $columnsString = implode(", ", $columns);
    $valuesString = implode(", ", $values);

    echo "INSERT INTO {$t} ({$columnsString}) VALUES ({$valuesString});";
}

insert('asd', ['name' => 'sam', 'sdhsgd' => 'cjhcgf']);

die;
?>

Delete Function:

<?php

function delete($t, $wh) {
    $whereCon = array();

    foreach ($wh as $field => $value) {
        $whereCon[] = "$field = '$value'";
    }

    $whereConString = implode(" AND ", $whereCon);

    echo "DELETE FROM {$t} WHERE {$whereConString};";
}

delete('asd', ['id' => 3, 'email' => 'sdsa@.com']);

die;
?>
