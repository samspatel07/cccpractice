<!DOCTYPE html>
<html>
<body>

<?php
//Data types:

//The PHP var_dump() function returns the data type and value:
//1)integer : Represents whole numbers without a decimal point.
$integerVar = 42;   
var_dump ($integerVar);
echo "<br>";

//2)float : Represents numbers with a decimal point.
$floatVar = 3.14;
var_dump($floatVar);
echo "<br>";

//3)string : Represents a sequence of characters.
$stringVar = "Hello, PHP!";
var_dump($stringVar);
echo "<br>";

//4)boolean : Represents either `true` or `false`.
$boolVar = true;
var_dump($boolVar);
echo "<br>";

//5)array = Represents an ordered map that can hold multiple values.
$arrayVar = array(1, 2, 3, "PHP");
var_dump($arrayVar);
echo "<br>";

//6) NULL : Represents the absence of a value or a variable without a value.
$nullVar = null;
var_dump($nullVar);
echo "<br>";

// Type Casting: 

//1)(string) - Converts to data type String
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "Cybercom Creation"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $d;
$e = (string) $e;

//To verify the type of any object in PHP, use the var_dump() function:
/*Note that when casting a Boolean into string it gets the value "1", and when casting NULL into string 
it is converted into an empty string "".*/
var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";


//2)(int) - Converts to data type Integer
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "Cybercom Creation 12"; // String
$d = "7 sumit patel"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (int) $a;
$b = (int) $b;
$c = (int) $c;
$d = (int) $d;
$e = (int) $e;
$f = (int) $f;
$g = (int) $g;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";
var_dump($f);
echo "<br>";
var_dump($g);
echo "<br>";
/*Note that when casting a string that starts with a number, the (int) function uses that number. 
If it does not start with a number, the (int) function convert strings into the number 0.*/

//3)(float) - Converts to data type Float
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "25 kilometers"; // String
$d = "kilometers 25"; // String
$e = "hello"; // String
$f = true;    // Boolean
$g = NULL;    // NULL

$a = (float) $a;
$b = (float) $b;
$c = (float) $c;
$d = (float) $d;
$e = (float) $e;
$f = (float) $f;
$g = (float) $g;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";
var_dump($f);
echo "<br>";
var_dump($g);
echo "<br>";
/*Note that when casting a string that starts with a number, the (float) function uses that number. 
If it does not start with a number, the (float) function convert strings into the number 0.*/

//4)(bool) - Converts to data type Boolean
$a = 5;       // Integer
$b = 5.34;    // Float
$c = 0;       // Integer
$d = -1;      // Integer
$e = 0.1;     // Float
$f = "Cybercom creation"; // String
$g = "";      // String
$h = true;    // Boolean
$i = NULL;    // NULL

$a = (bool) $a;
$b = (bool) $b;
$c = (bool) $c;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$g = (bool) $g;
$h = (bool) $h;
$i = (bool) $i;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";
var_dump($f);
echo "<br>";
var_dump($g);
echo "<br>";
var_dump($h);
echo "<br>";
var_dump($i);
echo "<br>";
/*If a value is 0, NULL, false, or empty, the (bool) converts it into false, otherwise true. 
Even -1 converts to true.*/

//5)(array) - Converts to data type Array
$a = 5;       // Integer
$b = 5.34;    // Float
$c = "Cybercom Creation"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (array) $a;
$b = (array) $b;
$c = (array) $c;
$d = (array) $d;
$e = (array) $e;

var_dump($a);
echo "<br>";
var_dump($b);
echo "<br>";
var_dump($c);
echo "<br>";
var_dump($d);
echo "<br>";
var_dump($e);
echo "<br>";

//When converting into arrays, most data types converts into an indexed array with one element.</p>

//NULL values converts to an empty array object.

//6)(unset) - Converts to data type NULL
/*$a = 5;       // Integer
$b = 5.34;    // Float
$c = "hello"; // String
$d = true;    // Boolean
$e = NULL;    // NULL

$a = (unset) $a;
$b = (unset) $b;
$c = (unset) $c;
$d = (unset) $d;
$e = (unset) $e;

var_dump($a);
var_dump($b);
var_dump($c);
var_dump($d);
var_dump($e);*/

// math function
//1. Basic Arithmetic
   /*abs($number): 
   The abs() function returns the absolute (positive) value of a number.*/
   echo(abs(6.7) . "<br>");
   echo(abs(-6.7) . "<br>");
   echo(abs(-3) . "<br>");
   echo(abs(3) . "<br>");
   /*ceil($number): 
   Rounds a number up to the nearest integer.*/
   echo(ceil(0.60) . "<br>");
   echo(ceil(0.40) . "<br>");
   echo(ceil(5) . "<br>");
   echo(ceil(5.1) . "<br>");
   echo(ceil(-5.1) . "<br>");
   echo(ceil(-5.9) . "<br>");
   /*`floor($number)`: 
   Rounds a number down to the nearest integer.*/
   echo(floor(0.60) . "<br>");
   echo(floor(0.40) . "<br>");
   echo(floor(5) . "<br>");
   echo(floor(5.1) . "<br>");
   echo(floor(-5.1) . "<br>");
   echo(floor(-5.9) . "<br>");
   /*`round($number, $precision)`: 
   Rounds a number to the nearest integer or specified number of decimal places.*/
   echo(round(0.60) . "<br>");
   echo(round(0.50) . "<br>");
   echo(round(0.49) . "<br>");
   echo(round(-4.40) . "<br>");
   echo(round(-4.60) . "<br>");

//2)Power Functions
   /*pow($base, $exponent)`: 
   Returns the value of a base raised to the power of an exponent.*/
   //The pow() function returns x raised to the power of y.
   echo(pow(2,4) . "<br>");
   echo(pow(-2,4) . "<br>");
   echo(pow(-2,-3) . "<br>");
   echo(pow(-2,-3.2) . "<br>");
   /*sqrt($number)`: 
   Returns the square root of a number.*/
   echo(sqrt(0) . "<br>");
   echo(sqrt(1) . "<br>");
   echo(sqrt(9) . "<br>");
   echo(sqrt(0.64) . "<br>");
   echo(sqrt(-9) . "<br>");

//3)Random Number Generation
   /*rand($min, $max)`: 
   Generates a random integer between the specified minimum and maximum
   The rand() function generates a random integer.
   If you want a random integer between 10 and 100 (inclusive), use rand (10,100).*/
   echo(rand() . "<br>");
   echo(rand() . "<br>");
   echo(rand(10,100) . "<br>");
   
//4)Number Formatting
   /*number_format($number, $decimals, $decimal_point, $thousands_separator)`: 
    Formats a number with grouped thousands and a specified number of decimals.*/
    //syntax = number_format(number,decimals,decimalpoint,separator)
    /*The number_format() function formats a number with grouped thousands.
    This function supports one, two, or four parameters (not three).*/
    echo number_format("1000000")."<br>";
    echo number_format("1000000",2)."<br>";
    echo number_format("1000000",2,",",".") . "<br>";
   
   

?>

</body>
</html>