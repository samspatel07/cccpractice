

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Record List last 10</title>
    <style>
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin-bottom: 10px;
            padding: 10px;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<?php
// Include your database connection file here
include('conn.php');

// Function to get the last 10 records from the 'asd' table
function getLast10Records($conn) {
    $query = "SELECT * FROM asd ORDER BY id DESC LIMIT 10";
    $result = mysqli_query($conn, $query);

    if ($result) {
        return mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        return array(); // Return an empty array if there's an error
    }
}

// Get the last 10 records
$records = getLast10Records($conn);

// Display the records in a UL/LI list
if (!empty($records)) {
    echo '<ul>';
    foreach ($records as $record) {
        echo '<li>';
        echo 'ID: ' . $record['id'] . '<br>';
        echo 'Name: ' . $record['name'] . '<br>';
        echo 'Email: ' . $record['email'] . '<br>';
        echo '</li>';
    }
    echo '</ul>';
} else {
    echo '<p>No records found.</p>';
}

// Close the database connection
mysqli_close($conn);
?>

</body>
</html>