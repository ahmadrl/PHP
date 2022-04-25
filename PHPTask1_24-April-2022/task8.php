<?php
/*Write PHP script to calculate the monthly electricity bill according to these rules
 
a.	For first 50 units – 2.50 JOD/Unit
b.	For next 100 units – 5.00 JOD/Unit
c.	For next 100 units – 6.20 JOD/Unit
d.	For units above 250 – 7.50 JOD/Unit
*/
function cal($units){
    if($units<=50)
    {
        echo $units*2.50;
    }
    if($units>50 && $units<=150)
    {
        echo $units*5.00;
    }
    if($units>150 && $units<=250)
    {
        echo $units*6.20;
    }
    if($units>250)
    {
        echo $units*7.50;
    }

}
cal(100);
?>
