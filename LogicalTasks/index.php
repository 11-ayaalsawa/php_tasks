<?php
////////////////////////////// TASK 1 //////////////////////
echo "<h1>TASK 1</h1>";

$year = 2013;  
 
if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
{
echo "This year is a leap year";    
}
 
else  
{  
echo "This year is not a leap year";    
};

////////////////////////////// TASK 2 //////////////////////
echo "<hr><h1>TASK 2</h1>";

$temp= 27;
 if($temp<20)
 {
     echo "we are in winter ";
 }
 else 
 {
     echo "It is summertime!";
 };

 ////////////////////////////// TASK 3 //////////////////////
echo "<hr><h1>TASK 3</h1>";

function sum($x,$y){
  $z= ($x+$y)*3;
  if ($z<20){
 
      echo "It is summertime! ";
  }
  else 
  {
      echo "we are in winter ";
  };
   
};

echo sum(2,2);

 ////////////////////////////// TASK 4 //////////////////////
 echo "<hr><h1>TASK 4</h1>";

 function summ($a,$b){
     $c=$a+$b;
     
     if($c == 30){
         echo "True";
     }
     else {
         echo "False";
     }

 }

 echo(summ(10,10));

  ////////////////////////////// TASK 5 //////////////////////
  echo "<hr><h1>TASK 5</h1>";

  function positive($x){
      if($x%3==0){
        echo "True";
      }
      else {
        echo "False";
    }
  }

  echo(positive(20));



 ////////////////////////////// TASK 6 //////////////////////
 echo "<hr><h1>TASK 6</h1>";
  function check($x) {

  if ($x >= 20  || $x <= 50){
    echo "True";  
  } 
  else {
 echo "False";
}
}

echo (check(50));


////////////////////////////// TASK 7 //////////////////////
echo "<hr><h1>TASK 7</h1>";

function largest($x,$y,$z){
    if($x>$y && $x>$z){
        echo $x;
    }

    elseif ($y>$x && $y>$z){
        echo $y;
    }

    elseif ($z>$x && $z>$y){
        echo $z;
    }


}

echo(largest(1,5,9));



////////////////////////////// TASK 8 //////////////////////
echo "<hr><h1>TASK 8</h1>";

function bill($x){
    if($x>0 && $x<=50){
        echo($x*2.5);
    }

    elseif ($x>50 && $x<=100){
        echo($x*5);
    }

    elseif ($x> 100 && $x<=200){
        echo($x*6.2);
    }

    elseif ($x>200 && $x<=250){
        echo($x*7.5);
    }
};

echo(bill(50)."<br>");
echo(bill(100)."<br>");
echo(bill(200)."<br>");
echo(bill(250)."<br>");



////////////////////////////// TASK 9 //////////////////////
echo "<hr><h1>TASK 9</h1>";


function calculator($x, $y, $z){
    if ($z == "+"){
        echo($x+$y);
    }
    elseif ($z == "-"){
        echo($x-$y);
    }
    elseif ($z == "*"){
        echo($x*$y);
    }
    elseif ($z == "/"){
        echo($x/$y);
    }
};


echo calculator(4,5,"+")."<br>";
echo calculator(10,5,"-")."<br>";
echo calculator(5,5,"*")."<br>";
echo calculator(10,5,"/")."<br>";


////////////////////////////// TASK 10 //////////////////////
echo "<hr><h1>TASK 10</h1>";

function age($x){
    if($x>=18){
        echo "is eligible to vote";
    }

    else {
        echo "is no eligible to vote";
    }
}

echo(age(15));

////////////////////////////// TASK 11 //////////////////////
echo "<hr><h1>TASK 11</h1>";

function num($x){
    if ($x < 0){
        echo "Negative";
    }
    elseif ($x > 0){
        echo "Positive";
    }
    else{
        echo "Zero";
    }
}

echo(num(-60));


////////////////////////////// TASK 12 //////////////////////
echo "<hr><h1>TASK 12</h1>";

$score=array(60,86,95,63,55,74,79,62,50);
$array1=array_sum($score);
$array2=count($score);
$avg=$array1/$array2;

function grade($x){
    if($x<60){
        echo "F";
    }
    elseif ($x<70){
        echo "D";
    }
    elseif ($x<80){
        echo "C";
    }
    elseif ($x<90){
        echo "B";
    }
    elseif ($x<100){
        echo "A";
    }
}

echo grade($avg);



?>