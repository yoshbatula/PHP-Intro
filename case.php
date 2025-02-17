<?php
    $grade = "B";

    switch ($grade) {
        case "A":
            echo "You did fucking great";
            break;
        case "B":
            echo "You did a good job";
            break;
        case "C":
            echo "You did good";
            break;
        case "D":
            echo "Good job";
            break;
        case "F":
            echo "You failed";
            break;
        default:
            echo "{$grade} that's not a grade";
            break;
    }
?>