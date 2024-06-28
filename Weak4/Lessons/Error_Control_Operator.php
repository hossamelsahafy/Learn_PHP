<?php
    /*
        Operators:
            Used To Perform Operations On Values
    
        Error Control Operator:
            Control The Errors

        @
            Variable
            File
            Include
    */

    $a = 10;
    $b = @$a or die("Variable Not Found"); // That Will Control in The Error
    echo "Test $b";
    echo "<br>";

    // File:
    $f = file("File.txt");
    echo "<pre>";
    print_r($f);
    echo "</pre>";

    // File:
    $f = @file("File.txt") or die("File Not Found");
    echo "<pre>";
    print_r($f);
    echo "</pre>";
    
    // include:
    (@include("File.php")) or die("File Not Found!");
