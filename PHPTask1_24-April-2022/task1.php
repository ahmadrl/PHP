<?php
$year=2013;
if(($year % 4==0) && ( $year % 100!=0) || ( $year % 400==0))
{
echo "its a leap year";
}
else
echo "its not a leap year";
?>