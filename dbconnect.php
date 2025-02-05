<?php
    $user = "root";
    $pass = "";
    $servername = "localhost";
    $dbname = "kevin";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if (!$conn ) {
        die("Connection Failed: " . mysqli_connect_error());
    } else {
        echo "<button>Hi kevin</button>";
    }
?>