<?php
    session_start();

    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] != true) {
        header('location: login.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        Welcome to dashboard, <?php $_SESSION['username'] ?>
    </h2>
</body>
</html>