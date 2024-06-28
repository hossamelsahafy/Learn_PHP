<?php
    /*
        3 Methods To Print The Type Of Data
    */
    echo var_dump(intval(100)); // Method One
    echo "<br>";
    echo gettype(intval(100)); // Method two
    echo "<br>";
    echo is_int(100); // Method Three It Will Return 1
