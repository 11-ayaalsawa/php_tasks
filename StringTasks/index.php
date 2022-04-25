<?php
///////////////////////////// TASK 1 //////////////////////////

echo "<h1>TASK 1</h1>";
echo "<h4>Convert the entered string to uppercase.</h4>";
echo(strtoupper("hello world!"))."<br>";
echo "<h4>Convert the entered string to lowercase.</h4>";
echo(strtolower("hello world!"))."<br>";
echo "<h4>Make the first letter of the string uppercase.</h4>";
echo(ucfirst("hello world!"))."<br>";
echo "<h4>Make the first letter of each word capitalized.</h4>";
echo(ucwords("hello world!"))."<br>";


//////////////////////////// TASK 2 //////////////////////
echo "<hr><h1>TASK 2</h1>";


$DATE = "085119";

echo date("Y-m-d",(strtotime($DATE)));

///////////////////////// TASK 3 /////////////////////
echo "<hr><h1>TASK 3</h1>";

$str1 = 'I am a full stack developer at orange coding academy’';
if (strpos($str1,'orange') !== false) 
 {
    echo 'Word Found!';
 }
else
 {
    echo "the word doesn't exist";
 }

///////////////////////// TASK 4 /////////////////////////

echo "<hr><h1>TASK 4</h1>";

$url = 'www.orange.com/index.php';
$file_name = basename(parse_url($url, PHP_URL_PATH));
echo $file_name;

///////////////////////// TASK 5 /////////////////////////

echo "<hr><h1>TASK 5</h1>";

$parts = explode("@", 'info@orange.com');
$username = $parts[0];

echo $username;

///////////////////////// TASK 6 /////////////////////
echo "<hr><h1>TASK 6</h1>";
$str1 = 'info@orange.com';
echo substr($str1, -3)."\n";


///////////////////////// TASK 7 /////////////////////
echo "<hr><h1>TASK 7</h1>";

function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  echo password_generate(7)."\n";


  
///////////////////////// TASK 8 /////////////////////
echo "<hr><h1>TASK 8</h1>";

$str = 'That new trainee is so genius.';
echo preg_replace('/That/', 'Our', $str, 1)."\n"; 

///////////////////////// TASK 9 /////////////////////
echo "<hr><h1>TASK 9</h1>";

$string1 = 'dragonball';
$string2 = 'dragonboll';
$pos = strspn($string1 ^ $string2, "\0");

printf(
    'First difference at position %d: "%s" vs "%s"',
    $pos, $string1[$pos], $string2[$pos]
);

///////////////////////// TASK 10 /////////////////////
echo "<hr><h1>TASK 10</h1>";

$str = ["Twinkle", "twinkle", "little star","Twinkle", "twinkle", "little star"];
// $arra1 = explode("<br>", $str);
var_dump($str);


///////////////////////// TASK 11 /////////////////////
echo "<hr><h1>TASK 11</h1>";

$ch = 'a';
$next_ch = ++$ch; 
if (strlen($next_ch) > 1) { // if you go beyond z or Z reset to a or A
 $next_ch = $next_ch[0];

}

echo  $next_ch;
echo "<br>";
$ch = 'z';
$next_ch = ++$ch; 
if (strlen($next_ch) > 1) { // if you go beyond z or Z reset to a or A
 $next_ch = $next_ch[0];

}

echo  $next_ch;


///////////////////////// TASK 12 /////////////////////
echo "<hr><h1>TASK 12</h1>";

$sentence = 'The brown fox';
$string = 'quick';
$position = '4';
  
echo substr_replace( $sentence, $string.' ', $position, 0 )."<br>";

$s = 'The quick brown fox';
$arr1 = explode(' ',trim($s));
echo $arr1[0]."\n";

///////////////////////// TASK 13 /////////////////////
echo "<hr><h1>TASK 13</h1>";

$x = '000065722.24';
$str1 = ltrim($x, '0');
echo $str1."\n";


///////////////////////// TASK 14 /////////////////////
echo "<hr><h1>TASK 14</h1>";

$my_str = 'The quick brown fox jumps over the lazy dog';
echo str_replace("fox", " ", $my_str)."\n";



///////////////////////// TASK 15 /////////////////////
echo "<hr><h1>TASK 15</h1>";

$dashh="The quick brown fox jumps over the lazy dog---";
//php string replace
echo str_replace("-", " ", $dashh);


///////////////////////// TASK 16 /////////////////////
echo "<hr><h1>TASK 16</h1>";

function clean($string) {
    $string = str_replace(' ', '-', $string); // Replaces all spaces with hyphens.
 
    return preg_replace('/[^A-Za-z0-9\-]/', '', $string); // Removes special chars.
 }

 echo clean('\"\1+2/3*2:23/4*3');

///////////////////////// TASK 17 /////////////////////
echo "<hr><h1>TASK 17</h1>";
$my_string = 'The quick brown fox jumps over the lazy dog';
echo implode(' ', array_slice(explode(' ', $my_string), 0, 5))."\n";

///////////////////////// TASK 18 /////////////////////
echo "<hr><h1>TASK 18</h1>";

$str1 = "2,543.12";
$x = str_replace( ',', '', $str1);
if( is_numeric($x))
  {
  echo $x."\n";
  }

  
///////////////////////// TASK 19 /////////////////////
echo "<hr><h1>TASK 19</h1>";

for ($i = 'a'; $i != 'aa'; $i++) 
    echo "$i\n"; 
?>

