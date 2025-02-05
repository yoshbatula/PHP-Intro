<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <form action="" method="POST">
            <button type="submit" name="submit">Logout</button>
        </form>

    <?php
        if(isset($_SESSION["name"]) && isset( $_SESSION["email"]) && isset( $_SESSION["age"])) {
            echo "HELLO " . $_SESSION["name"] . "<br>" . "Your email is: " . $_SESSION["email"] . "<br>". " Your age is: " . $_SESSION["age"];
        } else {
            echo "You didn't fill up";
        }
    ?>

    <?php 
        if(isset($_POST["submit"])) {
            session_destroy();

            echo "<a href = session.php</a>";   
        }
    ?>
</body>
</html>