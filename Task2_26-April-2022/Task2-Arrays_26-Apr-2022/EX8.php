<?php
/*	
**  Required ** Write a PHP script to get the shortest/longest string length from an array. 

Sample Input:

 $words =  array("abcd","abc","de","hjjj","g","wer")

Expected Output : 

The shortest array length is 1. The longest array length is 4.
*/
$words =  array("abcd","abc","de","hjjj","g","wer")
for($i=0;$i<=count($words);$i++)
{
  echo  strlen(min($words));
}
?>