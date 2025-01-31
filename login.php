<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
</head>
<body>

    <h2>Login Form</h2>

    <form action="process.php" method="POST">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <br><br>

        <button type="submit">Login</button>

        <?php

    $correctUsername = "admin";
    $correctPassword = "1234";


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    
    if ($username === $correctUsername && $password === $correctPassword) {
        header("Location: login.php");
        echo "<h2>Welcome, $username!</h2>";
    } 
} 
?>
    </form>

</body>
</html>