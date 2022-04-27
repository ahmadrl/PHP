<?php
$arr=array('1','2','3','4','5');
for($x=0;$x<=5;$x++)
{
   for ($y=4;$y>$x;$y--)
    {
	 echo "1";
    }
     if($y==$x){
        for($k=0;$k<=$y;$k++)
        echo $arr[$x];
        }
    
 echo "<br>";
}

?>