<!DOCTYPE html>
<html>
<body>

<?php

//1)if statement - executes some code if one condition is true
/*<?php
$condition = true;

if ($condition) {
    // Code to be executed if the condition is true
    echo "Condition is true.";
}

// Rest of the code
?>*/
if (5 > 3) {
    echo "Have a good day!";
  }
echo "<br>";

$t = 14;
if ($t < 20) {
  echo "Have a good day!";
}
echo "<br>";

/*2)If-Else Statement:The `if-else` statement allows you to execute one block of code if a 
    condition is true and another block if the condition is false.*/
/*<?php
$condition = false;

if ($condition) {
     // Code to be executed if the condition is true
     echo "Condition is true.";
} else {
     // Code to be executed if the condition is false
     echo "Condition is false.";
    }

// Rest of the code
?>*/
$t =10;

if ($t < 4) {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
echo "<br>";

/*3) If-Elseif-Else Statement:The `if-elseif-else` statement allows you to check multiple conditions in sequence.
    <?php
    $number = 10;

    if ($number > 0) {
        echo "Number is positive.";
    } elseif ($number < 0) {
        echo "Number is negative.";
    } else {
        echo "Number is zero.";
    }

    // Rest of the code
    ?>*/
$t =55;
if ($t < 10) {
    echo "Have a good morning!";
} elseif ($t < 15) {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
echo "<br>";

/*4)Nested If Statements:You can also nest `if` statements inside each other to create more complex 
                         conditional logic.
    <?php
    $condition1 = true;
    $condition2 = false;

    if ($condition1) {
        if ($condition2) {
            // Code to be executed if both conditions are true
            echo "Both conditions are true.";
        } else {
            // Code to be executed if only the first condition is true
            echo "Only the first condition is true.";
        }
    } else {
        // Code to be executed if the first condition is false
        echo "The first condition is false.";
    }

    // Rest of the code
    ?>*/
$a = 13;

if ($a > 10) {
    echo "Above 10";
    if ($a > 20) {
        echo " and also above 20";
    } else {
            echo " but not above 20";
        }
    }
    echo "<br>";
?>

</body>
</html>