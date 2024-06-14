<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
</head>
<body>
    <form action="home.php" method="post">
        <input type="submit" value="Log Out">
    </form>
</body>
</html>
<?php 
    if($_SERVER["REQUEST_METHOD"] == "POST"){
        session_destroy();
        header("Location: ./index.php");
    }
?>