<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>welcomepage</title>
</head>
<body>
    <?php 
        $username = $_SESSION["username"];

        echo "<h1> Welcome to the dashboard {$username}</h1>";

        if (isset($_POST['logout'])) {
            header("location: /login1.php");
        }
    ?>

    <form action="login1.php" method="POST">
        <input type="submit" value="logout" name="logout">
    </form>

    <?php
        if (isset($_POST["logout"])) {
            session_destroy();
            header("location: /login1.php");
        }
    ?>
</body>
</html>