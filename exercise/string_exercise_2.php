<!DOCTYPE html>
<html>
<body>
<?php

$text = "Hello, World! How are you doing?";
//1)find the length of string
echo "The length of my string is: " . strlen($text);
echo "<br>";

//2)Convert the entire string to lowercase.
echo "Lowercase is: " . strtolower($text);
echo "<br>";

//3)Convert the entire string to uppercase.
echo "Uppercase is: " . strtoupper($text);
echo "<br>";

//4)Replace "How are you doing?" with "Fine, thank you!".
echo str_replace("How are you doing?","Fine, thank you!",$text);
echo "<br>";

//5)Extract and print the first 10 characters of the string.
echo substr($text, 0, 10);
echo "<br>";

//6)Extract and print the substring starting from the 8th character to the end
echo substr($text,8);
echo "<br>";
?>

</body>
</html>