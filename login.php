<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <label for="email">Username: </label>
        <input type="text" name="email"><br>
        <label for="password">Password: </label>
        <input type="password" name="password">
        <input type="submit" value="submit">
    </form>

    <?php 
        $user = "admin";
        $pass = "1234";

        if (isset($_POST["email"])) {
            echo"Please input password";
        } header(url("process.php"));
    ?>
    
</body>
</html>