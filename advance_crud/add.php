<?php
include 'conne.php';
include 'allfunction.php';
if(isset($_POST['submit'])){
    $data = array(
        "name" => "'".$_POST['name']."'",
        "email" => "'".$_POST['email']."'",
        "mobile" => "'".$_POST['mobile']."'"
        
    );

    insert('enquiry',$data);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Add</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Add Data</h2>
  <form method="post">
    <div class="mb-3 mt-3">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="mb-3 mt-3">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="mb-3 mt-3">
      <label for="mobile">Mobile:</label>
      <input type="mobile" class="form-control" id="mobile" placeholder="Enter mobile" name="mobile">
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
