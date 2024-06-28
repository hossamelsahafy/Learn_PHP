<?php
    // Printing Word "Web" In Five Methods Using echo

    $name = "elzero";
    $$name = "Web";

    echo "Web";
    echo "<br>";
    
    echo $$name;
    echo "<br>";
    
    echo ${$name};
    echo "<br>";

    echo ${"elzero"};
    echo "<br>";

    echo $elzero;
    echo "<br>";

    $variable_name = "elzero";
    echo $$variable_name;
