<?php



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
  
    <title>Document</title>
</head>
<body>
    
    <form action="" method="" id="form">
        <div class="radio">
            <div class="frst">
                <label for="get">GET</label>
                <input type="radio" name="method" id="get">
            </div>
            <div class="scnd">
                <label for="post">POST</label>
                <input type="radio" name="method" id="post">
            </div>
        </div>

        <div class="input">
            <input type="email" name="email" id="email" placeholder="Enter Your Email">
            <br><br>
            <input type="password" name="password" id="password" placeholder="Enter Your Password">
        </div>

        <input type="submit" id="submit">
    </form>


<script>
     document.getElementById("get").onclick = function(){
        document.getElementById("form").setAttribute("method", "get");
     }

     document.getElementById("post").onclick = function(){
        document.getElementById("form").setAttribute("method", "post");
     }
</script>
</body>
</html> 