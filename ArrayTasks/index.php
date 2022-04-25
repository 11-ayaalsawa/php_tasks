<!-- ////////////////////////////// TASK 1 ///////////////////////////////// -->

<?php

echo "<h1>TASK 1</h1>";
$color= [ 'red','green', 'white'];
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the $color[0] carpet, the $color[1] lawn, the $color[2] house, the leaden sky. The new president and his first lady. - Richard M. Nixon";



 ////////////////////////////////// TASK 2 /////////////////////////////////// -->
echo "<hr><h1>TASK 2</h1>";

$colors = array('white', 'green', 'red');
for($i=0; $i<count($colors); $i++) { 
 echo "<li>{$colors[$i]}\n</li>";
}

/////////////////////////////// TASK 3 ////////////////////////////////
echo "<hr><h1>TASK 3</h1>";

	$cities= array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid" ); 

    $country= array_keys($cities);

    echo "The capital of $country[11] is $cities[Netherlands]<br>";
    echo "The capital of $country[9] is $cities[Greece]<br>";
    echo "The capital of $country[8] is $cities[Germany]<br>";


//////////////////////////// TASK 4 ///////////////////////////////////////  

echo "<hr><h1>TASK 4</h1>";

$colorss = array (4 => 'white', 6 => 'green', 11=> 'red');
$first = reset($colorss);

echo $first;

///////////////////////////// TASK 5 ////////////////////////////////

echo "<hr><h1>TASK 5</h1>";

$num = array( 1, 2, 3, 4, 5 );
$inserted = array( '$' );
 
$result= array_splice( $num, 3, 0, $inserted );

print_r( $num);

//////////////////////////// TASK 6 ///////////////////////////

echo "<hr><h1>TASK 6</h1>";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");

asort($fruits);

foreach($fruits as $x=>$x_value)
   {
   echo  $x . "=" . $x_value;
   echo "<br>";
   }

/////////////////////////// TASK 7 ///////////////////////////
echo "<hr><h1>TASK 7</h1>";

$temp=array(78, 60, 68, 71, 68, 73, 85, 66, 76, 63, 75, 73, 68, 62, 73, 72, 65, 74, 65, 64, 68, 73, 75, 79, 73);

$avg= array_sum($temp)/count($temp);

echo "Average Temperature is: $avg <br>";

rsort($temp);
echo "List of five highest temperatures:" ;

for ($i = 0; $i <= 4; $i++)
echo $temp[$i] . "," ;
echo "<br>";
sort($temp);
echo "List of five lowest temperatures:" ;

for ($i = 0; $i <= 4; $i++)
echo $temp[$i] . ",";

///////////////////////////////////// TASK 8 //////////////////////////
echo "<hr><h1>TASK 8</h1>";

$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);

print_r(array_merge($array1,$array2));


////////////////////////////////// TASK 9 ///////////////////////

echo "<hr><h1>TASK 9</h1>";

$colors = array("red","blue", "white","yellow");

$upp= array_map('strtoupper', $colors);

print_r($upp);


//////////////////////////////// TASK 10 /////////////////////////

echo "<hr><h1>TASK 10</h1>";

$colors = array("RED","BLUE", "WHITE","YELLOW");

$lower= array_map('strtolower', $colors);

print_r($lower);

//////////////////////////////// TASK 11 //////////////////////
echo "<hr><h1>TASK 11</h1>";

for($i=200 ; $i <= 250; $i++){
    if($i%4==0){
        echo $i ." , ";
    }
}


////////////////////////////////// TASK 12 //////////////////////

echo "<hr><h1>TASK 12</h1>";

$words =  array("abcd","abc","de","hjjj","g","wer");
$eachword=array_map('strlen', $words);

echo "The shortest array length is " . min($eachword) .
". The longest array length is " . max($eachword).'.';


///////////////////////////////// TASK 13 ///////////////////////

echo "<hr><h1>TASK 13</h1>";

$numbers= range(11,20);
shuffle($numbers);
print_r($numbers);

///////////////////////////// TASK 14 ////////////////////////
echo "<hr><h1>TASK 13</h1>";

$array = array( 2, 0, 10, 12, 6); 

// for($i=1 ; $i<=5; $i==)
//     $m=min($array)
//     echo $array[$i];
// $nums = [-1, 0, 1, 12, -100];

function min_values_not_zero(Array $values) 
{
return min(array_diff(array_map('intval', $values), array(0)));
}
print_r(min_values_not_zero($array)."\n");



?>

