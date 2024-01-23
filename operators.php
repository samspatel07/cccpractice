<!DOCTYPE html>
<html>
<body>

<?php

//PHP operators
//1. Arithmetic Operators:
     //1. Addition:(`$a + $b`)
     $x = 10;  
     $y = 6;
     echo "Addition is: ";
     echo $x + $y;
     echo "<br>";
     //2. Subtraction:(`$a - $b`)
     $x = 10;  
     $y = 6;
     echo "Substraction is: ";
     echo $x - $y;
     echo "<br>";
     //3. Multiplication:(`$a * $b`)
     $x = 10;  
     $y = 6;
     echo "Multiplication is: ";
     echo $x * $y;
     echo "<br>";
     //4. Division:(`$a / $b`)
     $x = 10;  
     $y = 6;
     echo "Divison is: ";
     echo $x / $y;
     echo "<br>";
     //5. Modulus (Remainder):(`$a % $b`)
     $x = 10;  
     $y = 6;
     echo "modulus is: ";
     echo $x % $y;
     echo "<br>";
     //6. Exponentiation:(`$a  $b` (PHP 5.6 and later))
     $x = 10;  
     $y = 3;
     echo "Exponentiation is: ";
     echo $x ** $y;
     echo "<br>";

//2. Assignment Operators:

     //7. Assignment:(`$a = $b`)
     $x = 10;  
     $y = $x;
     echo $y;
     echo "<br>";
     //8. Addition Assignment:(`$a += $b`)
     $x = 20;  
     $x += 100;
     echo $x; 
     echo "<br>"; 
     //9. Subtraction Assignment:(`$a -= $b`)
     $x = 50;
     $x -= 30;
     echo $x;
     echo "<br>";
     //10. Multiplication Assignment:(`$a *= $b`)
     $x = 5;
     $x *= 6;
     echo $x;
     echo "<br>";  
     //11. Division Assignment:(`$a /= $b`)
     $x = 10;
     $x /= 5;
     echo $x;
     echo "<br>";  
     //12. Modulus Assignment:(`$a %= $b`)
     $x = 15;
     $x %= 4;
     echo $x;
     echo "<br>";
     
//3)Comparison Operators:

     //13. Equal:(`$a == $b`)
     $x = 100;  
     $y = "100";
     var_dump($x == $y); // returns true because values are equal 
     echo "<br>";
     //14. Identical:(`$a === $b`)
     $x = 100;  
     $y = "100";
     var_dump($x === $y); // returns false because types are not equal
     echo "<br>";    
     //15. Not Equal:(`$a != $b` or `$a <> $b`)
     $x = 100;  
     $y = "100";
     var_dump($x != $y); // returns false because values are equal  
     echo "<br>";
     
     $x = 100;  
     $y = "100";

     var_dump($x <> $y); // returns false because values are equal
     echo "<br>";
     //16. Not Identical:(`$a !== $b`)
     $x = 100;  
     $y = "100";
     var_dump($x !== $y); // returns true because types are not equal
     echo "<br>";
     //17. Greater Than:(`$a > $b`)
     $x = 100;
     $y = 50;
     var_dump($x > $y); // returns true because $x is greater than $y  
     echo "<br>"; 
     //18. Less Than:(`$a < $b`)
     $x = 10;
     $y = 50;
     var_dump($x < $y); // returns true because $x is less than $y 
     echo "<br>";
     //19. Greater Than or Equal To:(`$a >= $b`)
     $x = 50;
     $y = 50;
     var_dump($x >= $y); // returns true because $x is greater than or equal to $y
     echo "<br>";
     //20. Less Than or Equal To:(`$a <= $b`)
     $x = 50;
     $y = 50;
     var_dump($x <= $y); // returns true because $x is less than or equal to $y
     echo "<br>";
    
//4. Logical Operators:
     //21. Logical AND:(`$a && $b`)
     //Write a message if both conditions are true
     $x = 100;  
     $y = 50;
     if ($x == 100 && $y == 50) {
       echo "Hello world!";
     }   
     echo "<br>";
     //22. Logical OR:(`$a || $b`)
     //Write a message if at least one of the conditions are true
     $x = 100;  
     $y = 50;
     if ($x == 100 || $y == 80) {
       echo "Hello world!";
     }  
     echo "<br>";  
     //23. Logical NOT:(`!$a`)
     //Write a message if the condition is NOT true
     $x = 100;  
     if (!($x == 90)) {
      echo "Hello world!";
     }  
     echo "<br>";
     
//5. Increment and Decrement Operators:

     //24. Increment:(`++$a` or `$a++`)
     //The PHP increment operators are used to increment a variable's value.
     $x = 10;  
     echo ++$x;
     echo "<br>";
     $r = 11;  
     echo $r++;
     echo "<br>";
     //25. Decrement:(`--$a` or `$a--`)
     //The PHP decrement operators are used to decrement a variable's value.
     $x = 10;  
     echo --$x;
     echo "<br>";
     $x = 10;  
     echo $x--;
     echo "<br>";

//6. String Operators:

     //26. Concatenation:(`$a . $b`)
     $txt1 = "Hello";
     $txt2 = "world!";
     echo $txt1 . $txt2;
     echo "<br>";
     //27. Concatenation Assignment:(`$a .= $b)
     $txt1 = "Hello";
     $txt2 = " world!";
     $txt1 .= $txt2;
     echo $txt1;
     echo "<br>";

//7. Conditional (Ternary) Operator:

     //33. Ternary:(`$a ? $b : $c`)
     //Variable = (Condition) ? (Statement1) : (Statement2);
     /*In this example, if the value of $a is greater than 15, 
      then 20 will be returned and will be assigned to $b, else 5 will be returned and assigned to $b.*/
     $a = 10;
     $b = $a > 15 ? 20 : 5;
     print ("Value of b is " . $b);
     echo "<br>";

     /*In this example, if the value of $age is more than or equal to 18, 
      “Adult” is passed to print function and printed, else “Not Adult” is passed and printed.*/
      $age = 20;
      print ($age >= 18) ? "Adult" : "Not Adult";
      echo "<br>";

?>

</body>
</html>