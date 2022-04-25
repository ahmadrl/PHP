<?php
/*7.	Write PHP script to find the largest number between the three integers
Sample Input: [ 1, 5, 9 ]
Sample Output: 9
*/
$num1=1;
$num2=5;
$num3=9;
if($num1>$num2 && $num1>$num3)
echo $num1;
elseif ($num2>$num1 && $num2>$num3)
echo $num2;
elseif ($num3>$num1 && $num3>$num2)
echo $num3;
else
echo 'not found'
?>