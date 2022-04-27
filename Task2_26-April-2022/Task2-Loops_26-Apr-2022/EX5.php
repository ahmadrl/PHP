<?php
/*
Write a program to calculate and print the factorial of a number using a for loop. 
The factorial of a number is the product of all integers up to and including that number. **  Required **

Sample Input: 5
Expected Output: 120
*/
$x=5;
while($x>0)
{
    $x*=$x;
    $x--;
}
global $x;
echo $x;
?>