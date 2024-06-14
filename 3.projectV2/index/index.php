<?php
    session_start();
    include("../database.php");
    include("index.html");

    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["signup"])){
        header("Location: ../signup/signup.php");
    }
    elseif($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])){
        header("Location: ../login/login.php");
    }
    else{
        echo "something broke";
    }   


    mysqli_close($connect);
?>