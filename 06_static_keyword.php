<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Static Keyword</title>
</head>
<body>
    <h1>This is to show the use of Static Keyword</h1>
    <?php 
        function testx(){
            static $x = 0;     //--->With static keyword
            echo "$x <br>";
            $x++;
        }        
        function testy(){
            $y = 0;            //--->Without static keyword
            echo "$y <br>";
            $y++;
        }        
        testx();
        testx();
        testx();
        testx();
        testx();
        echo " -----------------------------------<br>";
        testy();
        testy();
        testy();
        testy();
        testy();
    ?>
</body>
</html>