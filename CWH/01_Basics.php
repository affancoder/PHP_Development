<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - first class</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="conatiner">
        <p>This is my first PHP class</p>

        <?php echo " Hello i am learing PHP" ?>
    </div>

    <?php

    // Arithemtic Operator
    
    $variable1 = 69;
    $variable2 = 45;

    echo "The addition of $variable1 and $variable2 is ", $variable1 + $variable2;
    echo "<br>";
    echo "The subtraction is ", $variable1 - $variable2;
    echo "<br>";

    // Assignment Operator 

    $newVar = $variable1;
    echo "Variable1 assign to newVar = ", $newVar;

    // Comparison Operator
    echo "<br>";
    echo var_dump(5==6);
    echo "<br>";
    echo var_dump(6==6);

    // Increment/Decrement
    echo "<br>";
    echo $variable1++;
    echo "<br>";
    echo ++$variable1;
    echo "<br>";

    // Logical Operator 

    $var = 56;
    echo var_dump($var);

    echo"<br>";

    $var = 54.23;
    echo var_dump($var);

    echo "<br>";

    $var = True;
    echo var_dump($var);

    echo"<br>";

    define("PI",3.14);
    echo PI;

    ?>

    <body>

</html>