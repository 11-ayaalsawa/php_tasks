
       <?php 

if (isset($_POST['submit'])) {
    $result1 = $_POST['numb1'];
    $result2 = $_POST['numb2'];
    $operator = $_POST['operator'];
    
    switch ($operator) {
       
        case 'Add':
            $Result= $result1 + $result2;
            break;
        case 'Subtract':
            $Result= $result1 - $result2;
            break;
        case 'Multiply':
            $Result= $result1 * $result2;
            break;
        case 'Divide':
            $Result= $result1 / $result2;
            break;
       
    }
}


?>

<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
      
        <title>Calculator</title>
    
    </head>
    <body>


 

         <form method="post">
            <input type="text" name="numb1">
            <input type="text" name="numb2">
            <select name="operator" id="">
             
               <option>Add</option>
               <option>Subtract</option>
               <option>Multiply</option>
               <option>Divide</option>
         
            </select>
         


            <button type="submit" name="submit" value="submit">Calculate</button>
         </form>

        <h1>Result: <?php echo $Result?></h1>
       
  

    </body>
    </html>