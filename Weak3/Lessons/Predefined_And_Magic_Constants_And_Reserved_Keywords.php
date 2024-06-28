<?php
    /*
        Pre-Defined Constants [Case Sensitive]
            PHP _VERSION
            PHP_OS_FAMILY
            PHP_INT_MAX
            DEFAULT_INCLUDE_PATH

        Magic Constants [Case Insensitive]
            __LINE__
            __FILE__
            __DIR__
        
        Reserved KeyWords
            break
            clone
        
        Search
            PHP Predefined Constants
            Compile Time vs Runtime
            List Of Reserved Words
    */
    define("CLONES", "VALUE");
    echo php_uname();
    echo "<br>";
    echo PHP_VERSION;
    echo "<br>";
    echo PHP_OS_FAMILY;
    echo "<br>";
    echo PHP_INT_MAX;
    echo "<br>";
    echo DEFAULT_INCLUDE_PATH;
    echo "<br>";
    echo __LINE__;
    echo "<br>";
    echo __FILE__;
    echo "<br>";
    echo __dir__;
    echo "<br>";
    echo CLONES;
    echo "<br>";

    // No Problem Here
    function Hello() {
        return "Hello";
    };
    echo Hello();

    /*Incase We Used Reserved Words (abs)
    function abs(){
        return "Meow";
    }
    echo abs();
    We Will Get That Error:
    Fatal error: Cannot redeclare abs() in
    */
