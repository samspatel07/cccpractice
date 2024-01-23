<!DOCTYPE html>
<html>
<body>

<?php
/*4. Array Search:

  15. in_array($needle, $haystack):
  Checks if a value exists in an array.

  Syntax : in_array(search, array, type)*/
  //Search for the value "Glenn" in an array and output some text:
  $people = array("Peter", "Joe", "Glenn", "Cleveland");

  if (in_array("Glenn", $people))
    {
      echo "Match found";
    }
  else
    {
      echo "Match not found";
    }
  echo "<br>";

  /*16. array_search($needle, $haystack):
  Searches an array for a given value and returns the corresponding key.

  Syntax : array_search(value, array, strict)*/
  //Search an array for the value 5 and return its key (notice the ""):
  $a=array("a"=>"5","b"=>5,"c"=>"5");
  echo array_search(5,$a,true);
  echo "<br>";

  /*17. array_reverse($array):
  Returns an array with elements in reverse order.

  Syntax : array_reverse(array, preserve)*/
  //Return an array in the reverse order:
  $a=array("a"=>"Volvo","b"=>"BMW","c"=>"Toyota");
  print_r(array_reverse($a));
  echo "<br>";

/*5. Array Sorting:

  18. sort($array):
      - Sorts an array.*/
  //The following example sorts the elements of the $cars array in ascending alphabetical order:
  $cars = array("Volvo", "BMW", "Toyota");
  sort($cars);
  $clength = count($cars);
  for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
  }
  echo "<br>";
  //The following example sorts the elements of the $numbers array in ascending numerical order:
  $numbers = array(4, 6, 2, 22, 11);
  sort($numbers);
  $arrlength = count($numbers);
  for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
  }
  echo "<br>";

  /*19. rsort($array):
      - Sorts an array in reverse order.*/
  //The following example sorts the elements of the $cars array in descending alphabetical order:
  $cars = array("Volvo", "BMW", "Toyota");
  rsort($cars);
  $clength = count($cars);
  for($x = 0; $x < $clength; $x++) {
  echo $cars[$x];
  echo "<br>";
  }
  echo "<br>";
  //The following example sorts the elements of the $numbers array in descending numerical order:
  $numbers = array(4, 6, 2, 22, 11);
  rsort($numbers);
  $arrlength = count($numbers);
  for($x = 0; $x < $arrlength; $x++) {
  echo $numbers[$x];
  echo "<br>";
  }
  echo "<br>";

  /*20. asort($array):
      - Sorts an associative array by values.*/
  //The following example sorts an associative array in ascending order, according to the value:
  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  asort($age);
  foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
  echo "<br>";

  /*21. ksort($array):
      - Sorts an associative array by keys.*/
  //The following example sorts an associative array in ascending order, according to the key:
  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  ksort($age);
  foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
  echo "<br>";

  /*22. arsort($array):
      - Sorts an associative array in reverse order by values.*/
  //The following example sorts an associative array in descending order, according to the value:
  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  arsort($age);
  foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
  echo "<br>";

  /*23. krsort($array):
      - Sorts an associative array in reverse order by keys.*/
  //The following example sorts an associative array in descending order, according to the key:
  $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
  krsort($age);
  foreach($age as $x => $x_value) {
    echo "Key=" . $x . ", Value=" . $x_value;
    echo "<br>";
  }
  echo "<br>";

/*6. Array Filtering:
  24. array_filter($array, $callback):
  - Filters elements of an array using a callback function.
  Syntax : array_filter(array, callbackfunction, flag)*/
  //The array_filter() function filters the values of an array using a callback function.
  function test_odd($var)
  {
  return($var & 1);
  }

  $a1=array(1,3,2,3,4);
  print_r(array_filter($a1,"test_odd"));
  echo "<br>";

  /*25. array_map($callback, $array):
  - Applies a callback function to each element of an array.

  Syntax : array_map(myfunction, array1, array2, array3, ...)*/
  /*The array_map() function sends each value of an array to a user-made function, 
      and returns an array with new values, given by the user-made function*/
  function myfunction($num)
  {
     return($num*$num);
  }
      
  $a=array(1,2,3,4,5);
  print_r(array_map("myfunction",$a));
  echo "<br>";

  /*26. array_reduce($array, $callback, $initial):
  - Iteratively reduces the array to a single value using a callback function.

  Syntax : array_reduce(array, myfunction, initial)*/
  /*The array_reduce() function sends the values in an array to a user-defined function, 
    and returns a string.*/
    /*function myfunction($v1,$v2)
    {
    return $v1 . "-" . $v2;
    }
    $a=array("Dog","Cat","Horse");
    print_r(array_reduce($a,"myfunction",5));
    echo "<br>";*/

/*7. Array Slicing:

    27. array_slice($array, $offset, $length, $preserve_keys):
        - Extracts a portion of the array.
    
    Syntax : array_slice(array, start, length, preserve)*/
    //Start the slice from the third array element, and return the rest of the elements in the array:
    $a=array("red","green","blue","yellow","brown");
    print_r(array_slice($a,2));
    echo "<br>";
    //Start the slice from from the second array element, and return only two elements:
    $a=array("red","green","blue","yellow","brown");
    print_r(array_slice($a,1,2));
    echo "<br>";
    //Using a negative start parameter:
    $a=array("red","green","blue","yellow","brown");
    print_r(array_slice($a,-2,1));
    echo "<br>";
    //With the preserve parameter set to true:
    $a=array("red","green","blue","yellow","brown");
    print_r(array_slice($a,1,2,true));
    echo "<br>";
    //With both string and integer keys:
    $a=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow","e"=>"brown");
    print_r(array_slice($a,1,2));
    echo "<br>";
    $a=array("0"=>"red","1"=>"green","2"=>"blue","3"=>"yellow","4"=>"brown");
    print_r(array_slice($a,1,2));
    echo "<br>";

    /*28. array_splice($array, $offset, $length, $replacement):
        - Removes a portion of the array and replaces it with something else.

    Syntax : array_splice(array, start, length, array)*/
    /*The array_splice() function removes selected elements from an array and replaces it with new elements. 
      The function also returns an array with the removed elements.*/
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
?>

</body>
</html>