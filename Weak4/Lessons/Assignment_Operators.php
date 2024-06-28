<?php
    /* 
        Operators:
            Used To Perform Operations On values
        
        Assignment Operators:
            Used To Write value To Another

            - $a [+=]  $b = Addition
            - $a [-=]  $b = Subtraction
            - $a [*=]  $b = Multiplication
            - $a [/=]  $b = Division
            - $a [%=]  $b = Modulus
            - $a [**=] $b = Exponentiation
    */

    $a = 10;
    $a = $a + 20;
    echo $a; // 30
    echo '<br>';
    
    $b = 5;
    $b += 20;
    echo $b; // 25
    echo '<br>'; 

    $c = 10;
    $c -= 5;
    echo $c; // 5
    echo '<br>';

    $d = 10;
    $d *= 10;
    echo $d; // 100
    echo '<br>';

    $e = 4;
    $e /= 2;
    echo $e; // 2
    echo '<br>';

    $f = 2;
    $f **= 4;
    echo $f; // 16
    echo '<br>';
