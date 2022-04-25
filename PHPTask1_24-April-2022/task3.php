<?php
/* Write a PHP script to calculate the sum of the two integers.
 If the two values are the same, then calculate the triple of their sum.
Sample Input: [ firstInteger  =>  2 , secondInteger => 2]
Sample Output: ( 2 + 2 ) * 3 = 12
Sample Output: ‘It is summertime!’
*/
$value1=2;
$value2=2;
if($value1==$value2)
{
    $output=($value1+$value2)*3;
    echo $output .' '. "‘It is summertime!’";
}
?>