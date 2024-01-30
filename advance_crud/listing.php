<?php
include 'conne.php';
include 'allfunction.php';

if (isset($_GET['delid']))
{
    deletedata('enquiry',$_GET['delid']);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Listing</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Listing</h2>           
  <table class="table">
    <thead>
      <tr>
        <th>Name</th>
        <th>Email</th>
        <th>Mobile</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
    <?php 
    $resultdata=fetchalldata('enquiry');
    while($data=mysqli_fetch_array($resultdata)){?>
      <tr>
        <td><?php echo $data['name'];?></td>
        <td><?php echo $data['email'];?></td>
        <td><?php echo $data['mobile'];?></td>
        <td><a href="edit_enquiry.php?editid=<?php echo $data['id'];?>">Edit</a></td>
        <td><a href="listing.php?delid=<?php echo $data['id'];?>" onclick="return confirm('Do You Want Delete This Data')">Delete</a></td>
      </tr>
    <?php } ?>
    </tbody>
  </table>
</div>

</body>
</html>
