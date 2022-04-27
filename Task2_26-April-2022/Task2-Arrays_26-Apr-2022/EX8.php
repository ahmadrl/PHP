<?php
/*	
**  Required ** Write a PHP script to get the shortest/longest string length from an array. 

Sample Input:

 $words =  array("abcd","abc","de","hjjj","g","wer")

Expected Output : 
/*  

The shortest array length is 1. The longest array length is 4.
*/
$words =  array("abcd","abc","de","hjjj","g","wer");
$len=array();
foreach ($words as $key=>$val)
  {  
     array_push( $len, strlen($val));
  }
  echo 'The shortest array length is'.' '. min($len).'<br>';

echo 'The longest array length is'.' '. max($len);
?>