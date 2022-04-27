<?php
/*
Write a program to calculate and print the Fibonacci sequence using a for loop.
Fibonacci is a series of numbers where a number is the sum of previous two numbers.
 Starting with 0 and 1, the sequence goes 0, 1, 1, 2, 3, 5, 8, 13, 21, and so on. 

Expected Output: 0, 1, 1, 2, 3, 5, 8, 13, 21, … **  Required **
*/

$num1=0;
$num2=1;
echo $num1.' '.$num2.' ';
for($x=0;$x<=15;$x++)
{
    $result=$num1+$num2;
    $num1=$num2;
    $num2=$result;
    echo $result.' ';;

}


