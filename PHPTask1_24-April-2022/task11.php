<?php
/*11.	Write php script to make a calculator, the calculator should contain the four main operations 

e.	Addition
f.	Subtraction
g.	Multiplication
h.	Division
*/
function cal($num1,$num2,$operator)
{
    if($operator=='+' && is_numeric($num1) && is_numeric($num2))
    {
        echo $num1+$num2;
    }
    elseif ($operator=='-' && is_numeric($num1) && is_numeric($num2))
    {
        echo $num1-$num2;
    }
    elseif ($operator=='*'&& is_numeric($num1) && is_numeric($num2))
    {
        echo $num1*$num2;
    }
    elseif ($operator=='/' && is_numeric($num1) && is_numeric($num2))
    {
        echo $num1/$num2;
    }
}
cal(5,9,'/');
?>