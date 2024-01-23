<!DOCTYPE html>
<html>
<body>
<?php

$name = "John";

//1)Pad the string with underscores (`_`) on the left side to make its total length 10 characters.
echo "Pad on the left side is: ";
$result1 = str_pad($name,10,"_",STR_PAD_LEFT);
echo $result1;
echo "<br>";

//2)Pad the string with asterisks (`*`) on the right side to make its total length 8 characters.
echo "Pad on the right side is: ";
$result2 = str_pad($name,8,"*");
echo $result2;
echo "<br>";

//3)Print the resulting strings.
echo $result1;
echo "<br>";
echo $result2;
echo "<br>";


?>

</body>
</html>