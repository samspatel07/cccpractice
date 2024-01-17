<!DOCTYPE html>
<html>
<body>

<?php
// 1) Returns the length of a string
$a = "Hello World!";
echo strlen($a);
echo '<br>';

// 2) Replaces all occurrences of a substring with another substring in a given string.
$search = "World";
$replace = "Peter";
$subject = "Hello world";
echo str_replace("world","Peter","Hello world!");
echo '<br>';

// 3) Finds the position of the first occurrence of a substring in a string.
// haystack = The string to search in.
$haystack = "I Love PHP";
// needle = The string to search for.
$needle = "I Love PHP Tool";
echo strpos("I love php, I love php too!","php");
echo'<br>';

// 4) Returns a part of a string starting from the specified position and with a specified length.
$string = "Cybercom Creation";
$start = 2;
$length = 9;
echo substr("Cybercom Creation", 2, 9);
echo '<br>';

// 5) Converts a string to lowercase.
$x = "CyBErCOM CrEaTION";
echo strtolower($x);
echo '<br>';

// 6) Converts a string to uppercase.
$y = "CyBErCOM CrEaTION";
echo strtoupper($y);
echo '<br>';

// 7) Removes whitespace or other predefined characters from the beginning and end of a string.
$p = ",cybercom creation.";
echo trim($p, ",cn.");
echo'<br>';

// 8) Joins array elements with a string.
$arr = array("Hello", "Cybercom", "Creation!");
echo implode(" ",$arr);
?> 

</body>
</html>