<?php
/*
Create a script to generate the following pattern, using the nested for loop. **  Required **

Expected Output:

1 0 0 0 0 
0 2 0 0 0 
0 0 3 0 0 
0 0 0 4 0 
0 0 0 0 5
*/


<?php
 

$arr=array('1','2','3','4','5');
for($i=0;$i<count($arr);$i++)
{
   for($j=1;$j<=5;$j++)
   {
     
       if($j==$arr[$i])

       echo $arr[$i];        
       echo '0';

}


echo '<br>';
}
