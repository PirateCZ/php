<?php
    $dbServer = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "myfirstdatabase";
    $conn = "";

    try{
        $conn = mysqli_connect($dbServer, $dbUser, $dbPass, $dbName);
    }
    catch(mysqli_sql_exception){
        echo "could not connect <br>";
    }
