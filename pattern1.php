<?php
// Returns maximum in array
function getMax($array) 
{
   $n = count($array); 
   $max = $array[0];
   for ($i = 1; $i < $n; $i++) 
       if ($max < $array[$i])
           $max = $array[$i];
    return $max;       
}
 
// Returns maximum in array
function getMin($array) 
{
   $n = count($array); 
   $min = $array[0];
   for ($i = 1; $i < $n; $i++) 
       if ($min > $array[$i])
           $min = $array[$i];
    return $min;       
}
 
// Driver code
$array = array(1,3,5,7,9);
echo(getMax($array));
echo("\n");
echo(getMin($array));


//  for($i=0;)
// for()

?>