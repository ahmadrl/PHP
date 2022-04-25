<?php
/*Write a PHP to find the grade for the student,
 after calculating the average of his score in all the subject 
 Sample Inputs: [60,86,95,63,55,74,79,62,50]
Sample Output: ‘D’

Range  Grade
<60	    F
<70     D
<80  	C
<90	    B
<100	A
*/
function cal($g1,$g2,$g3,$g4,$g5,$g6,$g7,$g8,$g9)
{
    $avg=($g1+$g2+$g3+$g4+$g5+$g6+$g7+$g8+$g9)/9;

    if ($avg<60 )
     echo 'F';
    elseif ($avg>=60 && $avg<70) 
    echo 'D';
    elseif ($avg>=70 && $avg<80)
     echo 'C';
    elseif ($avg>=80 && $avg<90)
     echo 'B';
    elseif ($avg>=90 && $avg<100)
     echo 'A';
}
 cal(60,86,95,63,55,74,79,62,50);
 ?>