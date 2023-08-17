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
        switch ($d) {
            case 'Mon':
                echo "Today is Monday";
                break;
            case 'Tue':
                echo "Today is Tuesday";                                                                                
                break;
            case 'Wed':
                echo "Today is Wednesday";
                break;
            case 'Thu':
                echo "Today is Thrusday";
                break;
            case 'Fri':
                echo "Today is Friday";
                break;
            case 'Sat':
                echo "Today is Satday";
                break;
            case 'Sun':
                echo "Today is Sunday";
                break;
            
            default:
                echo "Wonder! which day is this??";
                break;
        }
               
    ?>
</body>
</html>