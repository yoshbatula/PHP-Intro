<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="calculator.css">
</head>
<body>
    <div class="container">
        <div class="calculator-container">
            <form action="#" method="POST">
            <div class="calculator-inputs">
                <input type="text" value="">
            </div>
            <div class="numbers">
                <input type="submit" class="num1" value="1" name="num1">
                <input type="submit" class="num2" value="2" name="num2">
                <input type="submit" class="num3" value="3" name="num3">
                <input type="submit" class="num4" value="4" name="num4">
                <input type="submit" class="num5" value="5" name="num5">
                <input type="submit" class="num6" value="6" name="num6">
                <input type="submit" class="">
                <input type="submit">
                <input type="submit">
                <input type="submit">
            </div>
            <div class="operators">
                <input class="Additiion" type="submit" value="+" name="Addition">
                <input type="submit" class="Subtraction" value="-" name="Subtraction">
                <input type="submit" class="Multiplication" value="*" name="Multiplication">
                <input type="submit" class="Division" value="/" name="Multiplication">
                <input type="submit" class="Result" value="Result" name="Result">
            </div>
            </form>
        </div>
    </div>

    <?php
        $result = 0;

        $addition = $_POST["Addition"];

    ?>
</body>
</html>