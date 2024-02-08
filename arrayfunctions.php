<!DOCTYPE html>
<html>
<body>

<?php
/*1. Array Creation and Initialization:
    1. array() or []:
    Creates a new array.*/

    //Creating an array using array()
    $empty_array = array();
    //the following defines an array that has three numbers:
    $scores = array(1, 2, 3);

    //Creating an array using the [] syntax
    $empty_array = [];
    //The following example uses the [] syntax to create a new array that consists of three numbers:
    $scores = [1, 2, 3];
    var_dump($scores);
    echo "<br>";

    /*To make the output more readable, 
      you can wrap the output of the print_r() function inside a <pre> tag. For example:*/
      $scores = [1, 2, 3];

      echo '<pre>';
      print_r($scores);
      echo '</pre>';

    //It’s more convenient to define a function that prints out an array like this:
    function print_array($data)
    {   
	echo '<pre>';
	print_r($data);
	echo '</pre>';
    }

    $scores = [1, 2, 3];

    print_array($scores);
    echo "<br>";

    /*2. array_merge($array1, $array2):
    Merges two or more arrays.

    Syntax : array_merge(array1, array2, array3, ...)*/
    //merge to array into one array
    $a1=array("red","green");
    $a2=array("blue","yellow");
    print_r(array_merge($a1,$a2));
    echo "<br>";
 
    //Using only one array parameter with integer keys:
    $a=array(3=>"red",4=>"green");
    print_r(array_merge($a));
    echo "<br>";

    /*3. array_combine($keys, $values):
    Creates an array by using one array for keys and another for its values.

    Syntax : array_combine(keys, values) */
    //Create an array by using the elements from one "keys" array and one "values" array:
    $fname=array("Peter","Ben","Joe");
    $age=array("35","37","43");

    $c=array_combine($fname,$age);
    print_r($c);
    echo "<br>";

    /*4. range($start, $end, $step):
    Creates an array containing a range of elements.

    Syntax : range(low, high, step) */
    //Create an array containing a range of elements from "0" to "5":
    $number = range(0,5);
    print_r ($number);
    echo "<br>";

    //Return an array of elements from "0" to "50" and increment by 10.
    $number = range(0,50,10);
    print_r ($number);
    echo "<br>";

    //Using letters - return an array of elements from "a" to "d"
    $letter = range("a","d");
    print_r ($letter);
    echo "<br>";

/*2. Array Modification:
    5. array_push($array, $element) or $array[] = $element:
    Adds one or more elements to the end of an array.

    Syntax : array_push(array, value1, value2, ...)*/
    //Insert "blue" and "yellow" to the end of an array:
    $a=array("red","green");
    array_push($a,"blue","yellow");
    print_r($a);
    echo "<br>";

    //An array with string keys:
    $a=array("a"=>"red","b"=>"green");
    array_push($a,"blue","yellow");
    print_r($a);
    echo "<br>";

    /*6. array_pop($array):
    Removes the last element from an array.

    Syntax : array_pop(array)*/
    //Delete the last element of an array:
    $a=array("red","green","blue");
    array_pop($a);
    print_r($a);
    echo "<br>";

    /*7. array_unshift($array, $element):
    Adds one or more elements to the beginning of an array.

    Syntax : array_unshift(array, value1, value2, value3, ...)*/
    /*The array_unshift() function inserts new elements to an array. 
      The new array values will be inserted in the beginning of the array.*/
    //Insert the element "blue" to an array:
    $a=array("a"=>"red","b"=>"green");
    array_unshift($a,"blue");
    print_r($a);
    echo "<br>";
    //Show the return value:
    $a=array("a"=>"red","b"=>"green");
    print_r(array_unshift($a,"blue"));
    echo "<br>";
    //Using numeric keys:
    $a=array(0=>"red",1=>"green");
    array_unshift($a,"blue");
    print_r($a);
    echo "<br>";

    /*8. array_shift($array):
    Removes the first element from an array.

    Syntax : array_shift(array)*/
    //Remove the first element (red) from an array, and return the value of the removed element:
    $a=array("a"=>"red","b"=>"green","c"=>"blue");
    echo array_shift($a);
    print_r ($a);
    echo "<br>";
    //Using numeric keys:
    $a=array(0=>"red",1=>"green",2=>"blue");
    echo array_shift($a);
    print_r ($a);
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";

    /*9. array_splice($array, $start, $length, $replacement):
    Removes a portion of the array and replaces it with something else.

    Syntax : array_splice(array, start, length, array)*/
    /*The array_splice() function removes selected elements from an array and replaces 
      it with new elements. The function also returns an array with the removed elements.*/
    //Remove elements from an array and replace it with new elements:
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("a"=>"purple","b"=>"orange");
    array_splice($a1,0,2,$a2);
    print_r($a1);
    echo "<br>";
    //The same example as the example on top of the page, but the output is the returned array:
    $a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
    $a2=array("a"=>"purple","b"=>"orange");
    print_r(array_splice($a1,0,2,$a2));
    echo "<br>";
    //With the length parameter set to 0:
    $a1=array("0"=>"red","1"=>"green");
    $a2=array("0"=>"purple","1"=>"orange");
    array_splice($a1,1,0,$a2);
    print_r($a1);
    echo "<br>";

/*3.Array Access:
    10.count($array):
    Counts the number of elements in an array.

    Syntax : count(array, mode)*/
    //Return the number of elements in an array:
    $cars=array("Volvo","BMW","Toyota");
    echo count($cars);
    echo "<br>";
    //Count the array recursively:
    $cars=array
   (
   "Volvo"=>array
   (
   "XC60",
   "XC90"
   ),
   "BMW"=>array
   (
   "X3",
   "X5"
   ),
   "Toyota"=>array
   (
   "Highlander"
   )
   ); 
   echo "Normal count: " . count($cars)."<br>";
   echo "Recursive count: " . count($cars,1). "<br>";

   /*11. sizeof($array):
    Alias of count().

   Syntax : sizeof(array, mode)*/
   //Return the number of elements in an array:
   $cars=array("Volvo","BMW","Toyota");
   echo sizeof($cars);
   echo "<br>";
   /*mode	Optional. Specifies the mode. Possible values:
    0 - Default. Does not count all elements of multidimensional arrays
    1 - Counts the array recursively (counts all the elements of multidimensional arrays)*/

    /*12. array_key_exists($key, $array):
    Checks if the given key or index exists in the array.

    Syntax : array_key_exists(key, array)*/
    $a=array("Volvo"=>"XC90","BMW"=>"X5");
    if (array_key_exists("Volvo",$a))
    {
        echo "Key exists!";
    }
    else
    {
        echo "Key does not exist!";
    }
    echo "<br>";
    //Check if the integer key "0" exists in an array:
    $a=array("Volvo","BMW");
    if (array_key_exists(0,$a))
    {
        echo "Key exists!";
    }
    else
    {
        echo "Key does not exist!";
    }
    echo "<br>";

    /*13. array_keys($array):
    Returns all the keys or a subset of the keys of an array.

    Syntax : array_keys(array, value, strict)*/
    //Return an array containing the keys:
    $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
    print_r(array_keys($a));
    echo "<br>";
    //Using the value parameter:
    $a=array("Volvo"=>"XC90","BMW"=>"X5","Toyota"=>"Highlander");
    print_r(array_keys($a,"Highlander"));
    echo "<br>";
    //Using the strict parameter, false:
    $a=array(10,20,30,"10");
    print_r(array_keys($a,"10",false));
    echo "<br>";
    //Using the strict parameter, true:
    $a=array(10,20,30,"10");
    print_r(array_keys($a,"10",true));
    echo "<br>";

    /*14. array_values($array):
    Returns all the values of an array.

    Syntax : array_values(array)*/

    $a=array("Name"=>"Peter","Age"=>"41","Country"=>"USA");
    print_r(array_values($a));
    echo "<br>";
?>

</body>
</html>