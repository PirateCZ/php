<?php
    session_start();
    include("../database.php");
    include("login.html");

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(isset($_POST["return"])){
            header("Location: ../index/index.php");
        }
    }


    mysqli_close($connect);
?>