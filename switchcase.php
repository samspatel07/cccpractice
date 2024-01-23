<!DOCTYPE html>
<html>
<body>

<?php
//The switch statement is used to perform different actions based on different conditions
//Use the switch statement to select one of many blocks of code to be executed.

/* SYNTAX : 
    switch (expression) {
  case label1:
    //code block
    break;
  case label2:
    //code block;
    break;
  case label3:
    //code block
    break;
  default:
    //code block
}*/

/* This is how it works:

The expression is evaluated once
The value of the expression is compared with the values of each case
If there is a match, the associated block of code is executed
The break keyword breaks out of the switch block
The default code block is executed if there is no match */

//Default example
echo "FIRST EXAMPLE" . "<br>";
$favcolor = "black";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br>";

echo "SECOND EXAMPLE" . "<br>";
$favcolor = "blue";

switch ($favcolor) {
  case "red":
    echo "Your favorite color is red!";
    break;
  case "blue":
    echo "Your favorite color is blue!";
    break;
  case "green":
    echo "Your favorite color is green!";
    break;
  default:
    echo "Your favorite color is neither red, blue, nor green!";
}
echo "<br>";


$d = 4;

switch ($d) {
  case 6:
    echo "Today is Saturday";
    break;
  case 0:
    echo "Today is Sunday";
    break;
  default:
    echo "Looking forward to the Weekend";
}
echo "<br>";

//Common Code Blocks
//If you want multiple cases to use the same code block, you can specify the cases like this:
  $d = 3;

switch ($d) {
  case 1:
  case 2:
  case 3:
  case 4:
  case 5:  
    echo "The weeks feels so long!";
    break;
  case 6:
  case 0:
    echo "Weekends are the best!";
    break;
  default:
    echo "Something went wrong";
}
?>

</body>
</html>