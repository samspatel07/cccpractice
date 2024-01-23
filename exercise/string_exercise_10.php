<!DOCTYPE html>
<html>
<body>
<?php

function calculateFactorial($number) {
    if ($number < 0) {
        return "Factorial is undefined for negative numbers.";
    }

    $factorial = 1;

    for ($i = 2; $i <= $number; $i++) {
        $factorial *= $i;
    }

    return $factorial;
}

// Example usage
$testNumber = 5; // Replace with your desired number
$result = calculateFactorial($testNumber);

echo "Factorial of $testNumber is: $result\n";

?>

</body>
</html>