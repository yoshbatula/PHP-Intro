<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <form action="login1.php" method="POST">
        <label for="email">Username: </label><br>
        <input type="text" name="username"><br>

        <label for="password">Password: </label><br>
        <input type="password" name="password"><br><br>

        <input type="submit" value="submit">
    </form>

    <?php
        if (isset($_POST["username"]) && isset($_POST["password"])) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            if ($_POST["username"] == "admin" && $_POST["password"] == "password123") {
                header("location: /welcome.php");
            } else {
            echo "Incorrect username or Password.";
            }
        }
    ?>
</body>
</html>