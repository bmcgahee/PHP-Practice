<?php
/*Author: Ben McGahee
Title: Random Numbers and Operations
Date: 4/12/2016
Purpose:  This program selects two random numbers between 1 and 100 and selects a random operation to operate on the two numbers.*/
$x = rand(1, 100);
$y = rand(1, 100);
$operations = array("Addition", "Subtraction", "Multiplication", "Division", "Power", "Modulus", "Compare", "Average");
$op = $operations[array_rand($operations)]; //select a random operation from the $operations array.
switch($op)
{
   case "Addition":
     $add = $x + $y;
     echo "$x + $y = " . $add;
     break;
   case "Subtraction":
     $subtract = $x - $y;
     echo "$x - $y = " .$subtract;
     break;
   case "Multiplication":
     $mult = $x * $y;
     echo "$x x $y = " .$mult;
     break;
   case "Division":
     $div = $x / $y;
     echo "$x / $y = " .$div;
     break;
   case "Power":
     $pow = pow($x, $y);
     echo "$x ^ $y = " .$pow;
     break;
   case "Modulus":
     $mod = fmod($x, $y);
     echo "$x mod $y = " .$mod;
     break;
   case "Compare":
     if($x > $y)
       echo "$x > $y";
     else if($x < $y)
       echo "$x < $y";
     else
       echo "$x = $y";
     break;
   case "Average":
     $avg = ($x + $y) / 2;
     echo "The average of $x and $y is " .$avg;
     break;
   default:
     echo "You have an undefined operation.";
     break;
}
?>