<!DOCTYPE html>
<html>
<body>
<?php

$quote = "In three words I can sum up everything I've learned about life: it goes on.";

//1)Count the total number of words in the quote.
echo "Total number of words is: ";
echo str_word_count($quote);
echo "<br>";

//2)Convert the entire quote to lowercase.
echo "Lowercase: ";
echo strtolower($quote);
echo "<br>";

//3)Capitalize the first letter of each word in the quote.
echo "The first letter of each word is capital: ";
echo ucwords($quote);
echo "<br>";

?>

</body>
</html>