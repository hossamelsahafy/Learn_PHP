<?php
    /*
    Arithmetic Operators:
        Result Must Be 0,
        Mustn't Change Any Number
        Replace ? With Arithmetic Operators
        echo 10 ? 20 ? 15 ? 3 ? 190 ? 10 ? 400; // 0
    */
    echo (10 * 20 + (15 % 3) + 190 + 10) % 400;
