<?php
session_start();
    include("connection.php");
    include("functions.php");
    $user_data = check_login($con);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Hello 
    </p>
        <?php echo $user_data["user_name"]; ?>

    <p></p>
    <?php 
        echo $user_data["user_id"];
    ?>
    <a href="logout.php">Logout</a> <br>
    <a href="../questions/questions.php">Post a question</a> <br>
    <a href="../questions/displayq.php">See questions</a>
    
</body>
</html> 