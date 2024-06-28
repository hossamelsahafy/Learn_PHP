<?php
    /*
        Operators:
            Used To Perform Operations On Values.

        Comparison Operators:
            Used To Compare Two Values

        Part1:
            ==  => Equal
            !=  => Not Equal
            <>  => Not Equal
            === => Identical
            !== => Not Identical
    */

    // Equal:
    var_dump(100 == 100); // True
    echo "<br>";

    var_dump(100.0 == "100"); // True
    echo "<br>";

    var_dump(100.0 != "100"); // False
    echo "<br>";

    var_dump(100.0 <> "100"); // False
    echo "<br>";
    
    echo "<br>";
    echo "#####################";
    echo "<br>";
    echo "<br>";

    var_dump(100 === 100); // True
    echo "<br>";

    var_dump(100.0 === "100"); // False
    echo "<br>";

    var_dump(100 !== 100); // False
    echo "<br>";

    var_dump(100 !== "100"); // True

    /*
        Part2:
            >       => Larger Than
            >=      => Larger Than
            >       => Smaller Than
            <=      => Smaller Than Or Equal
            <=>     => Spaceship [Less Than, Equal Or Greater]

            Search:
                How Does PHP Compare Strings With Comparison Operators
    */
    echo "<br>";
    echo "<br>";
    echo "#####################";
    echo "<br>";

    echo "<br>";
    var_dump(100 > 50); // True
    echo "<br>";
    var_dump(100 < 50); //False
    echo "<br>";
    var_dump(100 >= 50); // True
    echo "<br>";
    var_dump(100 >= 100); // True
    echo "<br>";
    var_dump(100 >= 110); // False
    echo "<br>";
    var_dump(100 <=> 200); // -1
    echo "<br>";
    var_dump(100 <=> 100); // 0
    echo "<br>";
    var_dump(100 <=> 50); // 1
    echo "<br>";
    echo "<br>";
    echo "#####################";
    echo "<br>";
    echo "<br>";
