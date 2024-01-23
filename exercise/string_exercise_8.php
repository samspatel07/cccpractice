<!DOCTYPE html>
<html>
<body>
<?php
//Exercise 8: Prime Numbers
  //Write a PHP function to determine whether a given number is prime.

  function isPrime($number) {
    // 1 and numbers less than 2 are not prime
    if ($number < 2) {
        return false;
    }

    // Check for divisibility starting from 2 up to half of the number
    for ($i = 2; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            return false; // Not a prime number
        }
    }

    return true; // Prime number
}

// Example usage
$testNumber = 15; 
if (isPrime($testNumber)) {
    echo $testNumber . " is a prime number.\n";
} else {
    echo $testNumber . " is not a prime number.\n";
}
?>

</body>
</html>