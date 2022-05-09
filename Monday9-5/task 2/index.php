<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Document</title>
</head>
<body>

 
<?php

if (!isset($_POST['submit'])){
?>
 
<form method="post" action="./index.php">

Please enter your favorite city:  <br />
<input type="text" name="city" />

<input type="submit" name="submit" value="submit" />
</form>
 
<?php

}else{
 
$city = $_POST['city'];
echo "Your favorite city is $city.";
 
}
?>
 
</body>

</html>