<?php
    /*
        Operators:
            Used To Perform Operations On Values.
        
        Operator Precedence:
        "||" Has A Greater Precedence Than "or"
        "&&" Has A Greater Precedence Than "and
    */

    echo 2 + 4 * 5; // 22
    echo '<br>';
    echo (2 + 4) * 5; // 30
    echo '<br>';

    echo 10 || false; // 1 True=> 1
    echo "<br>"; 
    echo true; // 1

    echo "<br>";
    var_dump(10 || false || [] || "" );
    echo "<br>";
    $a = 10 || false;
    echo $a; // 1

    echo "<br>";
    $b = 10 or false;
    echo $b; // 10
    echo "<br>";
