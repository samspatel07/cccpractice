<!DOCTYPE html>
<html>
<body>
<?php

$sentence = "The quick brown fox jumps over the lazy dog";

//1)Find the position of the word "fox" in the sentence.
echo "The position of the word is: ";
echo strpos($sentence, "fox");
echo "<br>";

//2)Check if the word "cat" is present in the sentence.
$word = 'cat';
 
$result = str_contains($sentence, $word) ? 'is' : 'is not';
 
echo "The word {$word} {$result} present in the sentence \"{$sentence}\" ";
echo "<br>";

//3)Extract and print the first 20 characters of the sentence
echo "The first 20 characters is: ";
echo substr($sentence, 0, 20);
echo "<br>";

?>

</body>
</html>