<?php
    /*
    ===================================
    = Data Types
    = ---------------------------------
    = Boolean + converting To Boolean
    ===================================
    */

    var_dump((bool) ""); // False
    echo "<br>";
    var_dump((bool) array()); // False
    echo "<br>";
    var_dump((bool) True); // True
    echo "<br>";
    var_dump((bool) False); // False
    echo "<br>";
    var_dump((bool) 0); // False
    echo "<br>";
    var_dump((bool) "Hossam"); // True
    echo "<br>";
    var_dump((bool) "0"); // False
    echo "<br>";
    var_dump((bool) array(1)); // True
    echo "<br>";
    var_dump((bool)[1]); // True
    echo "<br>";
    var_dump((bool) 100); // True
    echo "<br>";
    var_dump((bool) -100); // True
    echo "<br>";
    var_dump((bool) 10.5); // True
    echo "<br>";
    var_dump((bool) -10.5); // True
    echo "<br>";
