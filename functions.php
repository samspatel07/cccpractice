<!DOCTYPE html>
<html>
<body>

<?php
// 1) Returns the length of a string
//strlen($string):
$len = "Hello World!";
echo strlen($len);
echo "<br>";

// 2) Replaces all occurrences of a substring with another substring in a given string.
//str_replace($search, $replace, $subject):
echo str_replace("world","Peter","Hello world!");
echo "<br>";

// 3) Finds the position of the first occurrence of a substring in a string.
//strpos($haystack, $needle):
// haystack = The string to search in.
$haystack = "I Love PHP";
// needle = The string to search for.
$needle = "I Love PHP Tool";
echo strpos("I love php, I love php too!","php");
echo "<br>";

// 4) Returns a part of a string starting from the specified position and with a specified length.
//substr($string, $start, $length):
$string = "Cybercom Creation";
$start = 2;
$length = 9;
echo substr("$string", $start, $length);
echo "<br>";

// 5) Converts a string to lowercase.
//strtolower($string):
$x = "CyBErCOM CrEaTION";
echo strtolower($x);
echo "<br>";

// 6) Converts a string to uppercase.
//strtoupper($string):
$y = "CyBErCOM CrEaTION";
echo strtoupper($y);
echo "<br>";

// 7) Removes whitespace or other predefined characters from the beginning and end of a string.
//trim($string):
$p = ",cybercom creation.";
echo trim($p, ",cn.");
echo "<br>";

// 8) Joins array elements with a string.
//implode($glue, $pieces):
$arr = array("Hello", "Cybercom", "Creation!");
echo implode(" ",$arr);
echo "<br>";

$ar = array("Hey", "Cybercom", "Creation!");
echo implode(" ",$ar);
echo "<br>";

// 9)Splits a string into an array by a specified delimiter.
//explode($delimiter, $string):
// $delimiter = Required. Specifies where to break the string
$string = "Hello world! , Have a nice day";
print_r (explode(" ", $string));
echo "<br>";

$str = 'one,two,three,four';

// zero limit
print_r(explode(',',$str,0));
echo "<br>";
// positive limit
print_r(explode(',',$str,2));
echo "<br>";
// negative limit
print_r(explode(',',$str,-1));
echo "<br>";

// 10)Converts special characters to HTML entities.(Convert the predefined characters "<" (less than) and ">" (greater than) to HTML entities:)
//htmlspecialchars($string):
$str1 = "This is some <b>bold</b> text.";
echo htmlspecialchars($str1);
echo "<br>";

/*Cybercom &amp; 'Creation'<br>
Cybercom &amp; &#039;Creation&#039;<br>
Cybercom &amp; 'Creation'*/

$str2 = "Cybercom & 'Creation'";
echo htmlspecialchars($str2, ENT_COMPAT); // Will only convert double quotes
echo "<br>";
echo htmlspecialchars($str2, ENT_QUOTES); // Converts double and single quotes
echo "<br>";
echo htmlspecialchars($str2, ENT_NOQUOTES); // Does not convert any quotes
echo "<br>";

// 11)Converts all applicable characters to HTML entities.
//htmlentities($string):
$str3 = '<a href="https://www.cybercomcreation.com">Go to cybercomcreation.com</a>';
echo htmlentities($str3);
echo "<br>";

$str = "I Love 'PHP'";
echo htmlentities($str, ENT_COMPAT); // Will only convert double quotes
echo "<br>";
echo htmlentities($str, ENT_QUOTES); // Converts double and single quotes
echo "<br>";
echo htmlentities($str, ENT_NOQUOTES); // Does not convert any quotes
echo "<br>";

// 12) Repeats a string a specified number of times.
//str_repeat($string, $multiplier):
// $multiplier = Required. Specifies the number of times the string will be repeated. Must be greater or equal to 0
echo str_repeat("Wow",13);
echo "<br>";

// 13)Reverses a string.
//strrev($string):
echo strrev("Cybercom Creation!");
echo "<br>";

// 14)Randomly shuffles all characters in a string.
//str_shuffle($string):
echo str_shuffle("Cybercom Creation!");
   // This function will randomly shuffle all characters each time.
echo "<br>";

// 15)Converts a string to an array, breaking it into smaller chunks
//str_split($string, $length):
// $length = Optional. Specifies the length of each array element. Default is 1
$string = "Cybercom Creation";
$length = 5;
print_r(str_split("$string",$length));
echo "<br>";

// 16)Returns the number of words in a string.
//str_word_count($string):
// The str_word_count() function counts the number of words in a string.
echo str_word_count("Cybercom Creation");
echo "<br>";
   // Return an array with the words from the string:
print_r(str_word_count("Cybercom Creation!",1));
echo "<br>";
   // Return an array where the key is the position of the word in the string, and value is the actual word:
print_r(str_word_count("Cybercom Creation!",2));
echo "<br>";
   // Without and with the char parameter:
print_r(str_word_count("Hello world & Have a good day!",1));
echo "<br>";
print_r(str_word_count("Hello world & Have a good day!",1,"&"));
echo "<br>";

// 17) Replaces a portion of a string with another string.
//substr_replace($string, $replacement, $start, $length):
echo substr_replace("Hello","world",0);
echo "<br>";
  //Insert "Hello" at the beginning of "world":
echo substr_replace("Hello","world",0,0);
echo "<br>";
  //Replace multiple strings at once. Replace "AAA" in each string with "BBB":
$replace = array("1: AAA","2: AAA","3: AAA");
echo implode("<br>",substr_replace($replace,'BBB',3,3));
echo "<br>";

// 18)Pads a string to a certain length with another string.
//str_pad($string, $length, $pad_string, $pad_type):
$str = "Hello World";
echo str_pad($str,20,".");
echo "<br>";

$str = "Hello World";
echo str_pad($str,20,".",STR_PAD_LEFT);
echo "<br>";

$str = "Hello World";
echo str_pad($str,20,".:",STR_PAD_BOTH);
echo "<br>";

// 19)Locale based string comparison.
//strcoll($string1, $string2):
echo strcoll("Hello sam!","Hello sam!");
echo "<br>";

echo strcoll("Hello sam!","Hello sam!");
echo "<br>";
//If this function returns 0, the two strings are equal.

// 20)Finds the length of the initial segment not matching a mask.
//strcspn($string, $mask, $start, $length):
echo strcspn("Hello sam!","s");
echo "<br>";

echo strcspn("Hello sam!","s",0,6); // The start position is 0 and the length of the search string is 6.
echo "<br>";

// 21)Case-insensitive search for the first occurrence of a string.
// stristr(string,search,before_search)
//Find the first occurrence of "world" inside "Hello world!", and return the rest of the string:
echo stristr("Hello world!","WORLD");
echo "<br>";

   // Return the part of the string before the first occurence of "world":
echo stristr("Hello world!","WORLD",true);
echo "<br>";

// 22)Reverses a string.
//strrev($string):
echo strrev("Cybercom Creation");
echo "<br>";

// 23)Converts the first character of a string to uppercase.
//ucfirst($string):
echo ucfirst("cybercom creation");
echo "<br>";

// 24)Converts the first character of each word in a string to uppercase.
//ucwords($string):
echo ucwords("cybercom creation");
echo "<br>";
?> 



</body>
</html>