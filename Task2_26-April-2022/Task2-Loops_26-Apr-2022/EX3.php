<?php
/*
Create a script to generate the following pattern, using the nested for loop. . **  Optional **

Expected Output:

1 1 1 1 1 
1 1 1 2 2 
1 1 3 3 3 
1 4 4 4 4 
5 5 5 5 5
*/
$arr=array('1','2','3','4','5');
for($x=1;$x<=5;$x++)
{
   for ($y=1;$y<=4;$y++)
    {
	 echo "1".$arr[$x];
	    if($y< $x)
		 {
		   echo " ";
		 }
     }
 echo "\n";
}
