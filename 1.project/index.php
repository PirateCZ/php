<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    This is the login page <br>
    <form action="index.php" method="post">
        <label for="">username</label><br>
        <input type="text" name="username"><br>
        <label for="">password</label><br>
        <input type="password" name="password" id=""><br>
        <input type="submit" name="login"><br>
    </form>
</body>
</html>
<?php
if(isset($_POST["login"])){
    if(!empty($_POST["username"] && !empty($_POST["password"]))){
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        echo $_SESSION["username"] . "<br>";   
        echo $_SESSION["password"] . "<br>";

        header("Location: home.php");
    }
    else{
        echo "Missing username/password";
    }
}

?>