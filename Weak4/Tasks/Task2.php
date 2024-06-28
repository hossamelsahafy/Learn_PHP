<?php
    /*
        Transfer String to integer
    */
    echo "Method 1 :";
    echo "<br>";
    $a = "10";
    $b = (int)$a;
    echo $b;
    echo "<br>";
    echo gettype($b);
    echo "<br>";
    echo "<br>";

    echo "Method 2 :";
    echo "<br>";
    $b = (integer)$a;
    echo $b;
    echo "<br>";
    echo gettype($b);
    echo "<br>";
    echo "<br>";

    echo "Method 3 :";
    $b = (intval($a));
    echo "<br>";
    echo $b;
    echo "<br>";
    echo gettype($b);
    echo "<br>";

    echo "<br>";
    echo "Method 4 :";
    $b = (float)$a;
    $b = (int)$b;
    echo "<br>";
    echo $b;
    echo "<br>";
    echo gettype($b);
    echo "<br>";
    echo "<br>";

    echo "Method 5 :";
    echo "<br>";
    $b = (json_decode($a)); 
    echo $b;
    echo "<br>";
    echo gettype($b);
