<?php ;
    $cookie_name = "user";
    $cookie_value = "John Doe";

    setcookie($cookie_name, $cookie_value, time() + (66400 * 30),"/");

    if (isset($_COOKIE[$cookie_name])) {
        echo "Cookie named " . $cookie_name . "is not set!";
    } else {
        echo "Cookie " . $cookie_name . " is set! <br>";
        echo "Value is: " . $cookie_value . "is set <br>";
    }
?>