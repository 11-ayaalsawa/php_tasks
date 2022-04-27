
       <?php 

if (isset($_POST['submit'])) {
    $result1 = $_POST['numb1'];
    header('Location: '.$result1);

    

}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="post">
            <input type="text" name="numb1">
           
            <button type="submit" name="submit" value="submit">Search</button>
         </form>
</body>
</html>