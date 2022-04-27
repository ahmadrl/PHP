<?php
/*
Create a script to generate the following pattern, using the nested for loop. **  Optional **

Expected Output:

A A A A A 
A A A B B 
A A C C C 
A D D D D 
E E E E E
*/
global $arr=array('A','B','C','D','E');
for($i=0;$i<=count($arr);$i++)
{
    for($j=0;$j<=5;$j++)
    {
        echo $arr[$i];
    }
    echo '<br>';
}