<?php 
    $user = "yoshie";
    $pass = "yosh12345";

    $currentUser = $_GET["username"];
    $currentPassword = $_GET["password"];

    if ($currentUser == $user && $currentPassword == $pass) {
        echo "<h2>Welcome, $user!</h2>";
    } else {
        echo "<h2>Error: Invalid username or password.</h2>";
        echo "<a href='login.php'>Go back to Login</a>";
    }
?>