<?php
/* 
Write a PHP script to check the season depending on the inserted temperature if the temperature is below 20,
 we are in winter otherwise the season is summer.
Sample Input: 27
Sample Output: ‘It is summertime!’
*/

$temp=27;
if($temp<20)
echo 'the season is winter';
else
echo 'the season is summer';


?>