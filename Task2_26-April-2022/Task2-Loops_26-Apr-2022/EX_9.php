<?php
/*
Write a PHP program to generate and display the first n lines of a Floyd triangle **  Required **

Sample output:
1
2 3
4 5 6
7 8 9 10
11 12 13 14 15
*/
$counter=1;
for($i=1;$i<=5;$i++)
{
    for($j=1;$j<=$i;$j++){
    echo $counter.' ';
    $counter++;
    
}
echo '<br>';
}