<?php
/*
Write a PHP script that returns the lowest integer in the array  that is not 0. 

Sample Input: $array1 = array( 2, 0, 10, 12, 6) 
Sample Output:  2
*/
$array1 = array( 2, 0, 10, 12, 6);
$array2=array();
for($i=0;$i<=count($array1);$i++)
{
    if($array1[$i]==0)
    continue;
    array_push($array2,$array1[$i])

}
echo min($array2);

?>