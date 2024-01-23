<!DOCTYPE html>
<html>
<body>
<?php

//Exercise 9: Fibonacci Sequence
    
//Write a PHP function to generate the Fibonacci sequence up to a specified number of terms.

function generateFibonacci($numTerms) {
    $fibo = array(0, 1);

    for ($i = 2; $i < $numTerms; $i++) {
        // Each term is the sum of the two preceding terms
        $fibo[] = $fibo[$i - 1] + $fibo[$i - 2];
    }

    return $fibo;
}

// Example usage
$numberOfTerms = 10; // Replace with your desired number of terms
$fibonacciResult = generateFibonacci($numberOfTerms);

//The implode() function returns a string from the elements of an array.
echo "Fibonacci sequence up to $numberOfTerms terms: " . implode(", ", $fibonacciResult) . "\n"; 

?>

</body>
</html>