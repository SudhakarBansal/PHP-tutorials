<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Global Keyword</title>
</head>
<body>
   <h1>This is to show the use of Global Keyword.</h1> 
   <?php
    $x=5;
    $y=10;
    function test(){
        global $x,$y;
        $y=$x+$y;
    }
    test();
    echo "x + y = $y";
   ?>
</body>
</html>