<?php
    /*
    ================================
    = Data Types
    = ------------------------------
    = String And Escaping
    = ------------------------------
    = nl2br()
    ================================
    */
    echo "Hello PHP";
    echo "<br>";
    echo "Hello 'PHP'"; // Hello 'PHP'
    echo "<br>";
    echo 'Hello "PHP"'; // Hello "PHP"
    echo '<br>';
    echo 'Hello \'PHP\''; // Hello 'PHP'
    echo '<br>';
    echo "Hello \"PHP\""; // Hello "PHP"
    echo "<br>";
    echo "Hello PHP \\"; // Hello PHP \
    echo "<br>";
    echo nl2br("Hello PHP
    On Multiple
    Lines
    ");
