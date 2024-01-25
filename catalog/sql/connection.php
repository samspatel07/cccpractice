<?php

// Database variables
// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "ccc_product";

// // Create connection
// /*$conn = new mysqli($host, $user, $password, $dbname);

// // Check the connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// }

// echo "Connected successfully";

// // Close the connection
// $conn->close();*/
// $con=mysqli_connect($servername,$username,$password,$dbname);

// if($con){
//     echo"established";
// }
// else{
//     echo"DB";
// }



            $con = mysqli_connect("localhost", "root", "", "ccc_practice");

            // Check connection
            if ($con === false) {
                die("<h3 style='color: red;'>ERROR: Could not connect. "
                    . mysqli_connect_error() . "</h3>");
            }
?>
