<?php
    session_start();
    include("database.php");
    include("index.html");



    if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["submit"])){
        if(true){
            header("Location: ./home.php");
        }
        if(!empty($_POST["username"] && !empty($_POST["password"]))){
            $username = $_POST["username"];
            $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

            $_SESSION["username"] = $username;
            $_SESSION["password"] = $password;

            $sql = "INSERT INTO users (username, password)
           VALUES ('$username', '$password')";

           try{
            mysqli_query($connect, $sql);
           }
           catch(mysqli_sql_exception){echo "error importing data";}

           $_SERVER["REQUEST_METHOD"] = "GET";
            header("Location: ./home.php");
        }

    }
 





    
    mysqli_close($connect);
?>