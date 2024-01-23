<!DOCTYPE html>
<html>
<body>

<?php
/*function fun($hp){
    $a=100;
    $b=(100*($a))/($a+$hp);
    return 100-$b;
}

$hp = 10;
$c = fun($hp);
echo "if a is $hp% higher than b, then b is $c% lower than a";
echo "<br>";*/

/*function calculateLowerAmount($a) {
    $b = $a / 1.1; // Assuming $a is 10% higher than $b
    return $a - $b;
}

// Example usage
$a = 110; // Replace with your actual value for $a
$lowerAmount = calculateLowerAmount($a);
echo "$b is $lowerAmount lower than $a";*/
function calculateLowerAmount($a) {
    $b = $a * 0.9; // Assuming $a is 10% higher than $b
    return $a - $b;
}

// Example usage
$a = 110; // Replace with your actual value for $a
$lowerAmount = calculateLowerAmount($a);
echo "\$b is $lowerAmount lower than \$a";

/*Function Definition:function calculateLowerAmount($a) {
This line defines a PHP function named calculateLowerAmount that takes one parameter, $a.
Calculating $b:$b = $a * 0.9;
Here, it assumes that $a is 10% higher than $b. To find $b, it multiplies $a by 0.9, 
representing a 10% decrease.
Calculating Lower Amount:return $a - $b;
This line calculates the lower amount by subtracting the calculated $b from $a.
Example Usage:
$a = 110; // Replace with your actual value for $a
$lowerAmount = calculateLowerAmount($a);
echo "\$b is $lowerAmount lower than \$a";
It sets the value of $a (you can replace it with your actual value), calls the calculateLowerAmount 
function, and then prints the result in a sentence using echo.
So, for the given example with $a = 110, it will calculate that $b is 10 units lower than $a 
(since $a is assumed to be 110% of $b). The echo statement outputs a sentence indicating this relationship.*/
?> 

</body>
</html>
