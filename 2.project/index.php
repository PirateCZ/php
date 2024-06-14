<?php
    include("database.php");
    /*
    $username = "Spongebob";
    $password = "pineapple321";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    $sql = "INSERT INTO users (username, password)
           VALUES ('$username', '$hash')";


    try{
        mysqli_query($conn, $sql);
    }
    catch(mysqli_sql_exception){
        echo "something went wrong <br>";
    }
    

    $sql = "SELECT * FROM users ";
    $result = mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){

            echo $row["id"] . "<br>";
            echo $row["username"] . "<br>";
            echo $row["regDate"] . "<br>";
        }
    }
    else{
        echo "No user Found";
    }

    mysqli_close($conn);
    */
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Database</title>
</head>
<body>
</body>
</html>