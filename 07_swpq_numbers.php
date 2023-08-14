<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swap Numbers</title>
</head>
<body>
    <h1>This program is to Swap two Numbers</h1>
    <?php 
      $a=2;
      $b=3;
      echo"Before Swapping : <br>";
      echo"a = $a and b = $b";  
      $c = $a;
      $a = $b;
      $b = $c;
      echo"<br>After Swapping : <br>";
      echo"a = $a and b = $b";  
    ?>
</body>
</html>