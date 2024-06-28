<?php
    $a = "Elzero";
    $b = "Web";
    $c = "School";
    
    // Method One
    $d = $a . " " . $b . " " . $c;
    echo $d; // Elzero Web School
    echo "<br>";

    // Method Two
    $d = "{$a} {$b} {$c}";
    echo $d; // Elzero Web School
    echo "<br>";

    // Method Three
    $d = $a;
    $d .= " " . $b;
    $d .= " " . $c;
    echo $d; // Elzero Web School
    echo "<br>";
    
    // Method Four
    $d = implode(" ", [$a, $b, $c]);
    echo $d; // Elzero Web School
