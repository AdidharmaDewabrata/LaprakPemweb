<?php

session_start();

if($_SERVER["REQUEST_METHOD"] == 'POST'){
    $username = $_POST["username"];
    $password = $_POST["password"];

    $admin_usn = "admin";
    $admin_pass = "123";

    $user_usn = "user";
    $user_pass = "123";

    if($username === $admin_usn && $password === $admin_pass){
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("location: welcome.php");
    }
    elseif(($username === $admin_usn && $password === $admin_pass) 
        || ($username === $user_usn && $password === $user_pass)){
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("location: user.php");
        }
    elseif($username != null && $password != null){
        $_SESSION["loggedin"] = true;
        $_SESSION["username"] = $username;
        header("location: everyone.php");
    }
    else{
        echo "Incorrect username or password.";
    }
}

?>