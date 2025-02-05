<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <form action="" method="POST">

        <label for="name">Name</label>
        <input type="text" placeholder="Please put your email" name="name"><br><br>

        <label for="email">Email</label>
        <input type="email" placeholder="PLease put your email" name="email"><br><br>

        <label for="age">Age</label>
        <input type="number" name="age" max="100" min="2"><br><br>

        <input type="submit" value="Submit">

    </form>

    <?php

        if (isset($_POST["name"]) && isset( $_POST["email"]) && isset( $_POST["age"])) {

            $_SESSION['name'] = $_POST['name'];
            $_SESSION['email'] = $_POST['email'];
            $_SESSION['age'] = $_POST['age'];

            header("location: session1.php");
            // echo $_POST["name"] . "<br>";
            // echo $_POST["email"] . "<br>";
            // echo $_POST["age"] . "<br>";
        } else {
            echo "Fill out the forms";
        }
    ?>
</body>
</html>