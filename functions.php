<!DOCTYPE html>
<html>
<body>

<?php
// 1) Returns the length of a string
$len = "Hello World!";
echo strlen($len);
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

$ar = array("Hey", "Cybercom", "Creation!");
echo implode(" ",$ar);
echo'<br>';

// 9)Splits a string into an array by a specified delimiter.
// $delimiter = Required. Specifies where to break the string
$string = "Hello world! , Have a nice day";
print_r (explode(" ", $string));
echo '<br>';

$str = 'one,two,three,four';

// zero limit
print_r(explode(',',$str,0));
echo '<br>';
// positive limit
print_r(explode(',',$str,2));
echo '<br>';
// negative limit
print_r(explode(',',$str,-1));
echo '<br>';

// 10)Converts special characters to HTML entities.(Convert the predefined characters "<" (less than) and ">" (greater than) to HTML entities:)
$str1 = "This is some <b>bold</b> text.";
echo htmlspecialchars($str1);
echo'<br>';

/*Cybercom &amp; 'Creation'<br>
Cybercom &amp; &#039;Creation&#039;<br>
Cybercom &amp; 'Creation'*/

$str2 = "Cybercom & 'Creation'";
echo htmlspecialchars($str2, ENT_COMPAT); // Will only convert double quotes
echo '<br>';
echo htmlspecialchars($str2, ENT_QUOTES); // Converts double and single quotes
echo '<br>';
echo htmlspecialchars($str2, ENT_NOQUOTES); // Does not convert any quotes
echo'<br>';

// 11)Converts all applicable characters to HTML entities.
$str3 = '<a href="https://www.cybercomcreation.com">Go to cybercomcreation.com</a>';
echo htmlentities($str3);
echo'<br>';

$str = "I Love 'PHP'";
echo htmlentities($str, ENT_COMPAT); // Will only convert double quotes
echo'<br>';
echo htmlentities($str, ENT_QUOTES); // Converts double and single quotes
echo'<br>';
echo htmlentities($str, ENT_NOQUOTES); // Does not convert any quotes
echo'<br>';
?> 



</body>
</html>