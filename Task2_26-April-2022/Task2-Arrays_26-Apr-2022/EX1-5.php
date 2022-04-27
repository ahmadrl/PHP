<?php
/*
1.	**  Required ** $colors = array('white', 'green', 'red') 
Write a PHP script that will display the colors as unordered list : 
Expected Output:  
•	green
•	red
•	white
 */
$colors = array('white', 'green', 'red');
echo "<ul>";
foreach ($colors as $key=>$value) 
{
  echo "<li> $value </li>";
}
echo "</ul>";
            

/*
2.	**  Required ** $cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

Create a PHP script to displays the capital and country name from the above array $cities. Sort the list by the capital of the country. 
Expected Output:
The capital of Netherlands is Amsterdam 
The capital of Greece is Athens 
The capital of Germany is Berlin 

*/
$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 
asort($cities);
foreach ($cities as $key => $value) 
{
 echo "The capital of $key is $value <br>";
}

/*



3.	**  Required ** $color = array (4 => 'white', 6 => 'green', 11=> 'red'); 

Write a PHP script to display the first element of the above array. 
Expected Output:  white
 
 */
$color = array (4 => 'white', 6 => 'green', 11=> 'red'); 
echo $color['4'];
 /*
4.	**  Required ** Write a PHP script to sort the following associative array depending on the key value [asc] :  

Sample Input: 

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

Expected Output:

c = apple
b = banana
d = lemon
a = orange
*/
$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
krsort($fruits);
foreach ($fruits as $key => $value)
 {
 echo $key . "= " . $value . "<br>";
 }

 /*
5.	**  Optional ** Write a PHP script to calculate and display the average temperature for the recorded reads, also the script should display the list of the five lowest and the five highest temperatures. 

Sample Input:  78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73

Expected Output:
Average Temperature is: 70.6 
List of seven lowest temperatures: 60, 62, 63, 63, 64, 
List of seven highest temperatures: 76, 78, 79, 81, 85,
*/