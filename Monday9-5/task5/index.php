<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  
        <h2>How's the weather?</h2>
         
        <?php
        //Create array.
        $weather=array(
          "rain",
          "sunshine",
          "clouds",
          "hail",
          "sleet",
          "snow",
          "wind" 
          );
         
        //Use array in a sentence. 
        echo "<p>We've seen all kinds of weather this month. At the beginning of the month, ";
        echo "we had $weather[5] and $weather[6]. Then came $weather[1] with a few $weather[2] ";
        echo "and some $weather[0]. At least we didn't get any $weather[3] or $weather[4].</p>";
        ?>
      
</body>
</html>