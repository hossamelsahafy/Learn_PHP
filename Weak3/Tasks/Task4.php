<?php
    /* USING Predefined Variables To Get That OutPut:
        "C:/xampp/htdocs"
        "localhost"
        "C:\WINDOWS"
        "C:/xampp/apache/bin/openssl.cnf"
    */

    echo $_SERVER["DOCUMENT_ROOT"]; 
    echo "<br>";
    echo $_SERVER["HTTP_HOST"];
    echo "<br>";
    echo $_SERVER['SystemRoot'];
    echo "<br>";
    echo $_SERVER["OPENSSL_CONF"];
