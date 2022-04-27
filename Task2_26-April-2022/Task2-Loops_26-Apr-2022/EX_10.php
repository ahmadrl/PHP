<?php
/*
Write a PHP program to print the following pattern. . **  Optional **
   
Expected Output:

     A 
    A B 
   A B C 
  A B C D 
 A B C D E 
  A B C D 
   A B C 
    A B 
     A
*/

       $counter = 65;		
		for ($i = 1; $i <= 5; $i++)
		{
			for ( $j = 1; $j <= $i; $j++)
			{
				echo chr($counter + $j - 1) ;
			}
            echo '<br>';

        }
        for ($i = 5; $i >= 1; $i--)
		{
			for ($j = 1; $j <= $i; $j++)
			{
				echo chr($counter + $j - 1);
			}
            echo '<br>';
		}