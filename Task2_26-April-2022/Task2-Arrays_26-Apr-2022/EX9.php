<?php
/*
**  Optional ** Write a PHP script to generate unique random 10 numbers within a specific range. 

Sample Input: (11, 20)
Sample Output: 17 16 13 20 14 19 18 15 11 12
*/
$x=11;
$y=20;
for($i=1;$i<=10;$i++)
{
    echo rand($x,$y).' ';
}
?>