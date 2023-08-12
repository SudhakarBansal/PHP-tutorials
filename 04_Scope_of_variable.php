<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope of variables</title>
</head>
<body>
    <h1>this is to show the Scope of variables</h1>
    <?php 
        $x="this is X";
        function test(){
            echo"Inside Function body <br>";
            $y = "this is Y";
            // echo "$x <br>"; --->this will not work
            echo "$y <br>";
        }
        test();
        echo"Outside Function body <br>";
        echo "$x <br>";
        // echo "$y <br>";   --->this will not work

    ?>
</body>
</html>