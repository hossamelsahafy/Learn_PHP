<?php
    /*
        bool   => boolean
        int    =? integer
        float  => float point number | double
        string
        array
        other types
        gettype()
    */

    echo gettype(True);
    echo '<br>';
    # That Will Print Boolean

    echo gettype(False);
    echo '<br>';
    # That Will Print Boolean

    echo gettype(1);
    echo '<br>';
    # That Will Print Integer

    echo gettype(0);
    echo '<br>';
    # That Will Print Integer

    echo gettype(1.5);
    echo '<br>';
    # That Will Print Float

    echo gettype("Adam");
    echo "<br>";
    # That Will Print String

    echo gettype([1,2,3,"Ahmed"]);
    echo "<br>";
    # That Will Print Array

    echo gettype(array("EG" => "Egypt", "KSA" => "Saudi Arab"));
    echo "<br>";
    # That Will Print Array
?>
