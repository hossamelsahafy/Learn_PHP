<?php
    /*
        Operators
            Used To Perform Operation On Values

        Arithmetic Operators
            Used To Do Arithmetical Operations & Conversion

            $a [+]  $b => Addition
            $a [-]  $b => Subtraction
            $a [*]  $b => Multiplication
            $a [/]  $b => Division
            $a [%]  $b => Modulus
            $a [**] $b => Exponentiation
            +$a        => Identity
            -$a        => Negation
    */
    echo 10 + 20; // 30
    echo '<br>';
    echo gettype(10 + 20); // integer

    echo '<br>';
    echo 9.5 + 20.5; // 30
    echo '<br>';
    echo gettype(9.5 + 20.5); // Double

    echo '<br>';
    echo 10 - 20; // -10
    echo '<br>';
    echo gettype(10 - 20); // integer

    echo '<br>';
    echo 40 / 20; // 2
    echo '<br>';
    echo gettype(40 + 20); // integer

    echo '<br>';
    echo 20 / 8; // 2.5
    echo '<br>';
    echo gettype(20 /8); // Double

    echo '<br>';
    echo 21 % 10; // 1
    echo '<br>';
    echo gettype(21 % 10); // integer
    echo '<br>';
    echo 23 % 10; // 3
    echo '<br>';
    echo gettype(23 % 10); // integer
    echo '<br>';
    echo 30 % 10; // 0
    echo '<br>';
    echo gettype(30 % 10); // integer

    echo '<br>';
    echo 2 ** 4; // 16
    echo '<br>';
    echo 2 * 2 * 2 * 2; // 16
    echo '<br>';
    echo 3 ** 5; // 243
    echo '<br>';
    echo 3 * 3 * 3 * 3 * 3; // 243
    echo '<br>';

    echo "100"; // 100
    echo '<br>';
    echo gettype("100"); // String 
    echo '<br>';
    echo +"100"; // 100
    echo "<br>";
    echo gettype(+"100"); // integer

    echo "<br>";
    echo "-100"; // -100
    echo '<br>';
    echo gettype("-100"); // String 
    echo '<br>';
    echo -"-100"; // 100
    echo "<br>";
    echo gettype(-"-100"); // integer