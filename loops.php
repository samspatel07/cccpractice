<!DOCTYPE html>
<html>
<body>

<?php
echo "FOR LOOPS" . "<br>";
/*1. For Loop:
The `for` loop is used when you know in advance how many times the loop should run.        
<?php
// Example: Print numbers from 1 to 5 using a for loop
for ($i = 1; $i <= 5; $i++) {
    echo $i . " ";
}
// Output: 1 2 3 4 5
?>*/
/*Syntax:

for (initialization expression; test condition; update expression) {
    // code to be executed
}*/
for ($num = 1; $num <= 10; $num += 2) { 
    echo "$num \n" . "<br>"; 
} 

echo "WHILE LOOP" . "<br>";
/*2. While Loop:

    The `while` loop is used when you don't know in advance how many times the loop should run, and it continues as long as a specified condition is true.

        <?php

        // Example: Print numbers from 1 to 5 using a while loop
        $i = 1;
        while ($i <= 5) {
            echo $i . " ";
            $i++;
        }

        // Output: 1 2 3 4 5

        ?>*/
    /*syntax:
    while (if the condition is true) {
    // Code is executed
     }*/


      // Declare a number 
      $num = 10; 
  
      // While Loop 
      while ($num < 20) { 
          echo $num . "\n" . "<br>"; 
          $num += 2;
        }

echo "FOREACH LOOP" . "<br>";
/*3. Foreach Loop:
    The `foreach` loop is specifically designed for iterating over arrays.
    
            <?php
            // Example: Iterate over an array and print each element
            $colors = array("Red", "Green", "Blue");
            foreach ($colors as $color) {
                echo $color . " ";
            }
             // Output: Red Green Blue
              ?>*/
    /*Syntax:

        foreach( $array as $element ) {
        // PHP Code to be executed
         }*/
// Declare an array 
$arr = array("green", "blue", "pink", "white");  
  
// Loop through the array elements 
foreach ($arr as $element) { 
    echo "$element " . "<br>"; 
} 

    /*Syntax:
      foreach( $array as $key => $element) {
        // PHP Code to be executed
          }*/
$employee = array(  
    "name" => "Robert",  
    "email" => "robert112233@mail.com",  
    "age" => 18,  
    "gender" => "male"
        );  
          
    // Loop through employee array  
    foreach($employee as $key => $element) {  
        echo $key . ": " . $element . "<br>";  
        }  
?>

</body>
</html>