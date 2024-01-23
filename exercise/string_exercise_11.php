<!DOCTYPE html>
<html>
<body>
<?php
//Exercise 11: Bubble Sort
    
/*Implement the Bubble Sort algorithm to sort an array. (Do not use array sort function)
    $arrayToSort = [64, 34, 25, 12, 22, 11, 90];*/


    function bubbleSort($arr) {
        $n = count($arr);
    
        for ($i = 0; $i < $n - 1; $i++) {
            for ($j = 0; $j < $n - $i - 1; $j++) {
                // Swap if the element found is greater than the next element
                if ($arr[$j] > $arr[$j + 1]) {
                    $temp = $arr[$j];
                    $arr[$j] = $arr[$j + 1];
                    $arr[$j + 1] = $temp;
                }
            }
        }
    
        return $arr;
    }
    
    // Example usage
    $arrayToSort = [64, 34, 25, 12, 22, 11, 90];
    
    echo "Original Array: " . implode(", ", $arrayToSort) . "\n" . "<br>";
    
    // Sorting the array using Bubble Sort
    $sortedArray = bubbleSort($arrayToSort);
    
    echo "Sorted Array: " . implode(", ", $sortedArray) . "\n";
?>

</body>
</html>