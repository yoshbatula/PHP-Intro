<?php 
    session_start();

    include 'dbconnect.php';

    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $email = $_POST["username"];
        $password = $_POST["password"]; 

        $sql = "SELECT * FROM anga WHERE Username = '$email' AND Password = '$password'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) == 0) {
            $row = mysqli_fetch_assoc($result);

            $_SESSION['username'] = $email;
            $_SESSION['username'] = $row['username'];
            $_SESSION['loggedin'] = true;

            header("location: dashboard.php");
        } else {
            echo "Invalid username and password.";
        }
    }
?>