<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If else if else</title>
</head>
<body>
    <h1>If else if else statement in php</h1>
    <?php 
        $d = date('D');
        if ($d == 'Sun') {
            echo "Relax! it's Sunday....";
        } 
        elseif ($d=='Sat') {
            echo "Have A nice weakend";
        }
        else {
            echo "Have a nice day...";
            # code...
        }
        
    ?>
</body>
</html>