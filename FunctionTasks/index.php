<?php
///////////////////////////// TASK 1 //////////////////////////

echo "<h1>TASK 1</h1>";

function check_prime($num)
{
   if ($num == 1)
   return 0;
   for ($i = 2; $i <= $num/2; $i++)
   {
      if ($num % $i == 0)
      return 0;
   }
   return 1;
}
$num = 3;
$flag_val = check_prime($num);
if ($flag_val == 1)
   echo "$num is a prime number";
else
   echo "$num is a non-prime number";


///////////////////////////// TASK 2 //////////////////////////

echo "<hr><h1>TASK 2</h1>";

function Reverse($str){
    return strrev($str);
}
  

$str = " remove";
echo Reverse($str);


/////////////////////////// TASK 3 //////////////////////////

echo "<hr><h1>TASK 3</h1>";

function lower($str1)
   {
    for ($sc = 0; $sc < strlen($str1); $sc++) {
	      if (ord($str1[$sc]) >= ord('A') &&
          ord($str1[$sc]) <= ord('Z')) {
      return 'Your String is not Ok' ;
         }
         }
      return 'Your String is Ok' ;
       }
echo(lower('remove'));


/////////////////////////// TASK 4 //////////////////////////

echo "<hr><h1>TASK 4</h1>";

function swap( $x, $y) 
{
    $x=  $x+$y;
   $y = $x - $y;
   $x =  $x- $y;
   echo "X:".  $x . "<br>";
   echo "Y:". $y;
 }

 $x=12;
 $y= 10;

 echo (swap($x, $y));


 /////////////////////////// TASK 5 //////////////////////////

echo "<hr><h1>TASK 5</h1>";

function armstrongCheck($number){
    $sum = 0; 
    $x = $number; 
    while($x != 0) 
    { 
        $rem = $x % 10; 
        $sum = $sum + $rem*$rem*$rem; 
        $x = $x / 10; 
    } 
    
    if ($number == $sum)
        return 1;
     

    return 0;   
}
 

$number = 407;
$flag = armstrongCheck($number);
if ($flag == 1)
    echo "$number is Armstrong Number ";
else
    echo "$number is not an Armstrong Number ";


    
 /////////////////////////// TASK 6 //////////////////////////

echo "<hr><h1>TASK 6</h1>";

function check_plaindrome($string) {
    //remove all spaces
    $string = str_replace(' ', '', $string);

    //remove special characters
    $string = preg_replace('/[^A-Za-z0-9\-]/', '', $string);

    //change case to lower
    $string = strtolower($string);

    //reverse the string
    $reverse = strrev($string);

    if ($string == $reverse) {
        echo " Yes it is a palindrome ";
    } 
    else {
        echo " No it is not a palindrome ";
    }
}

$string = " Eva, can I see bees in a cave?";
check_plaindrome($string);


 /////////////////////////// TASK 7 //////////////////////////

 echo "<hr><h1>TASK 7</h1>";

 $array1 = array(2, 4, 7, 4, 8, 4);
$result = array_unique($array1);
print_r($result);


 





?>