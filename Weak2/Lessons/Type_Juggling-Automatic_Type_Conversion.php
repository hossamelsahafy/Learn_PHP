<?php
    /*
        => Data Type
        = -----------------------------------------
        => Type Juggling + Automatic Type Conversion
        ============================================
    */

    echo 1 + "2"; // 3
    echo '<br>';
    echo gettype(1 + "2"); // integer
    echo '<br>';
    echo str_repeat("=", 50);

    echo '<br>';
    echo True; //1
    echo '<br>';
    echo gettype(True); // boolean
    echo '<br>';
    echo True + True; // 2
    echo '<br>';
    echo gettype(True + True); // integer
    echo '<br>';
    echo str_repeat("=", 50);

    echo "<br>";
    echo 5 + '5 Meow'; // 10 => warning
    echo '<br>';
    echo gettype(5 + '5 Meow'); // integer -> warning
    echo '<br>';
    echo str_repeat("=", 50);

    echo "<br>";
    echo 10 + 15.5; // 25.5
    echo '<br>';
    echo gettype(10 + 15.5); // Double => Float
