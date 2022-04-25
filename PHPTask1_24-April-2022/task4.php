<?php
/*Write PHP to check if the sum of the two given numbers equals 30, 
if the condition is true the return their sum otherwise return false
Sample Input: [ firstInteger  =>  10 , secondInteger => 10]
Sample Output: ‘false’
*/
$num1=10;
$num2=10;
$sum=$num1+$num2;
function cal(){
    global $num1,$num2,$sum;
if($sum==30)
{
    return $sum; 
}
else
return 'false';
}
echo cal();