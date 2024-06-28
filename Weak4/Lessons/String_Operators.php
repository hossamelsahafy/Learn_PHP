<?php
    /*
        Operators:
            Used To Perform Operations On Values

        String Operators:
            Concatenate Strings
    */

    define("Hossam", "1");
    $a = "Meow";
    $b = "Cat";
    $c = "Meow";

    echo "$a $b $c";
    echo "<br>";
    echo "{$a} {$b} {$c}";
    echo "<br>";
    echo $a . " " . $b . " " . $c;
    echo "<br>";
    echo $a . " " . $b . " " . $c . " " . Hossam. " " . Testing();
    echo "<br>";

    function Testing() {
        return 1;
    }

    $x = "Cat";
    $x .= " Meow "; // $x = $x . "Meow" => CatMeow
    $x .= "White"; // $x = $x . "White" => CatMeowWhite
    echo $x;
