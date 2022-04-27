<?php
/*
1.	Write a PHP script to check if the inserted number is a prime number 

Sample Input:  3
Expected Output: 3 is a prime number 
*/
function IsPrime($n)
{
 for($x=2; $x<$n; $x++)
   {
      if($n %$x ==0)
      {
	      
		   return 0;
		  }
   }  
    
  return 1;
}
$num=3;  
$check = IsPrime($num);
if ($check==0)
echo $num.' '.'is not a prime number';
else
echo $num.' '.'is a prime number';
echo '<br>';

/*
2.	Write a PHP script to reverse a string 

Sample Input:  remove
Expected Output: evomer
*/
function reverse($str)
{
    echo strrev($str);
}
$word='remove';
reverse($word);
echo '<br>';

/*
3.	 Write a PHP script to check if the all string characters are lower cases

Sample Input:  remove
Expected Output: Your String is Ok 
*/
function isLowerCase($str)
{
if (ctype_lower($str)) 
{
echo " Your String is Ok";
}
else
{
echo " Your String is not Ok ";
}
}
$string='remove';
isLowerCase($string);
echo '<br>';
/*
4.	Write a PHP function to swap to variables?

Sample Input:  x = 12     y= 10
Expected Output: y=12   x=10 
*/
function swap($x,$y)
{
    $z=$x;
    $x=$y;
    $y=$z;
    echo 'x= '.$x.'<br>';
    echo 'y= '.$y.'<br>';

}
$num1=12;
$num2=10;
swap($num1,$num2);
echo '<br>';

/

/*
5.	Write a PHP function to check if a number is an Armstrong number or not ?
**Armstrong number is a number that is equal to the sum of cubes of its digits.

Sample Input:  407
Expected Output: 407 is Armstrong Number 
*/
function armstrong($num)
{
     
$total=0;  
$x=$num;  
while($x!=0)  
{  
$rem=$x%10;  
$total=$total+$rem*$rem*$rem;  
$x=$x/10;  
}  
if($num==$total)  
{  
echo $num.' '."is an Armstrong number";  
}  
else  
{  
    echo $num.' '."is not an Armstrong number";  
}  
}
$number=407;  

armstrong($number);
echo '<br>';

/*

6.	Write a PHP function that checks whether a passed string is a palindrome or not?
Sample Input:  Eva, can I see bees in a cave?
Expected Output: Yes it is a palindrome 
*/
function palindrome($string) 
{
  if ($string == strrev($string))
  echo 'Yes it is a palindrome';
      
  else
  echo 'it is not a palindrome';

	
}
palindrome('Eva, can I see bees in a cave');
echo '<br>';


/*

7.	Write a PHP function to remove duplicates from an array ?

Sample Input:  

$array1 = array(2, 4, 7, 4, 8, 4);


Expected Output:

$array1 = array(2, 4, 7, 8);
*/
function removeDuplicates($arr)
{
    echo '<pre>';
    print_r(array_unique($arr));
}
$arr=array(2, 4, 7, 4, 8, 4);
removeDuplicates($arr);
?>

 
