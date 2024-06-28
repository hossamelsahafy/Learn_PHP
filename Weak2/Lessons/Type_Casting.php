<?php
    /*
        Type Casting
        = ---------------------
        = "Boolean" Or "bool"
        = "integer" Or "Int"
        = "Float" Or "Double"
        = "String"
        = "Array"
        = "Object"
        = "Null
        = ----------------------
        = Search For Settype
        = ========================
    */
    echo 5 + (int) "5 Lessons"; // 10 without Warning
    echo "<br>";
    echo gettype(5 + (int) "5 lessons"); // integer
    echo "<br>";
    echo str_repeat("=", 50);

    echo "<br>";
    echo 10 + (int) 15.5; // 25
    echo "<br>";
    echo gettype(10 + (int) 15.5); // Integer
    echo "<br>";
    echo str_repeat("=", 50);

    echo "<br>";
    echo 10.5 + 10.5; // 21
    echo "<br>";
    echo gettype(10.5 + 10.5); // Double
    echo "<br>";
    echo str_repeat("=", 50);

    echo "<br>";
    echo (int) 10.5 + 10.5; // 20.5
    echo "<br>";
    echo gettype((int) 10.5 + 10.5); // Double
    echo "<br>";
    echo str_repeat("=", 50);

    echo "<br>";
    echo (int) 10.5 + (int) 10.5; // 20
    echo "<br>";
    echo gettype((int) 10.5 + (int) 10.5); // Integer
    echo "<br>";
    echo str_repeat("=", 50);

    echo "<br>";
    echo (int) (10.5 + 10.5); // 21
    echo "<br>";
    echo gettype((int)(10.5 + 10.5)); // Integer
    echo "<br>";
    echo str_repeat("=", 50);
