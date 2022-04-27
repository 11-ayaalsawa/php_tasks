<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>ToDo List</title>
</head>
<body>
<div class="cont">

  <form action="" method="post">
  <p>Add a task: <input type="text" size="50" value="" name="new">
  <input type="submit" value="Submit" name="submit"></p>
  </form>


</div>
</body>
</html>

<?php

if (isset($_POST['submit'])){
 $result1 = $_POST['new'];

 echo'<input type="checkbox" name="'. $result1.'" id="'. $result1.'">
 <label for="">'. $result1.'</label>';
}




?>

