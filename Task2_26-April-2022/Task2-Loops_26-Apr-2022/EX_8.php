<?php
/*
Write a PHP program that repeats integers from 1 to 50. For multiples of three, 
print "Fizz" instead of the number, and for multiples of five print "Buzz".
 For numbers that are multiples of both three and five, print "FizzBuzz".. **  Optional **
 Expected Output: 1 2 Fizz 4 Buzz Fizz 7 8 Fizz …….
 */
for($i=0;$i<=50;$i++)
{
    if($i%3==0 && $i%3==5)
    echo "FizzBuzz".' ';
    elseif($i%3==0)
    echo "Fizz".' ';
    elseif($i%5==0)
    echo "Buzz".' ';
    else echo $i.' ';
}