<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form action="" method="POST">
        <label for="age">Age Checker:</label><br>
        <input type="text" name="age" required><br>
        <input type="submit" value="check">
    </form>

    <?php
        echo "hi";
        $age = $_POST["age"];

        if ($age >= 18) {
            echo "Your age is legal <br>";
        } elseif($age < 18) {
            echo "Your a minnor <br>";
        } else {
            echo "Please fill out the inputs <br>";
        }
    ?>
</body>
</html>