<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h1>lets learn php</h1>
        <?php

        // if else
        
        $age = 14;

        if ($age > 18) {
            echo " You can go to party";
        } else {
            echo " You are out";
        }
        echo "<br>";

        // Array
        
        $languages = array("python", "C", "C++");
        echo $languages[2];
        echo "<br>";
        echo "The total languages are ", +count($languages);
        echo "<br>";


        // Loops in php
        
        $a = 1;
        while ($a <= 10) {
            echo "The value of a is: ";
            echo $a;
            echo "<br>";
            $a++;
        }

        echo "<br>";

        $a = 0;
        while ($a < count($languages)) {
            echo "The languages are: ";
            echo $languages[$a];
            echo "<br>";
            $a++;
        }

        echo "<br>";
        
        // Function
        
        function print2()
        {
            echo "Affan is learning PHP";
        }
        $x;
        for ($x = 0; $x <= 5; $x++) {
            print2();
            echo "<br>";
        }


        ?>
    </div>
</body>

</html>