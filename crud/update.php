<?php
include 'conn1.php';
if(count($_POST)!=0){
    extract($_POST);
    extract($_GET);
    $query = "UPDATE USER SET username='$username', password='$password' WHERE id='$id'";
    //echo $query;
    $result = mysqli_query($conn1,$query);
    if($result==true){
        echo "Record Inserted";
    }else{
        echo "Failed";
    }
    // if ($conn1->query($query) === TRUE) {
    //     echo "New record created successfully";
    // } else {
    //     echo "Error: " . $query . "<br>" . $conn1->error;
    // }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <form method="post">
                <div class="card">
                    <div class="card-header bg-dark">
                        <h1 class="text-center text-white">Update Operation</h1>
                    </div>
                    <div class="form-group">
                        <label for="username">UserName</label>
                        <input type="text" class="form-control" name="username">
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="text" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
                </form>
                <h5><a href="display.php"><input type="button" class="btn btn-primary" value="View User"></a></h5>
            </div>
        </div>
    </div>
</body>
</html>