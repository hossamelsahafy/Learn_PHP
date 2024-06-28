<?php
    /*
        Control Error Message
    */

    $a = @$b or die("Not Valid");
    
    $f = @file("File.txt") or die("Not_A_File");
    
    (@include("File.php")) or die("Not_A_File");
