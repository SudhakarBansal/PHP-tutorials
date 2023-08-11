<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo"This is Title";?></title>
</head>
<body>
    <h1>Today we will use variables in Php</h1>
    <?php
    $salary = 100.5;
    $name = "Sudhakar";
    $birthyear = 2004;
    $currentYear = 2023;
    $age = $currentYear-$birthyear;
    echo"I am $name and My annual income is $salary K<br>" ;
    echo"I am $age years old";
    ?>
</body>
</html>