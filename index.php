<?php 

    if(!isset($_GET["email"]) && !isset($_GET["password"])){
        $email = $_GET["email"];
        echo $email;
    }else{
        echo "Please fill out the inputs.";
    }
  
?>