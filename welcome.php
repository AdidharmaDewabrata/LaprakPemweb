<?php
session_start();

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: loginpage.php");
    exit;
}

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="interface.css">
    <title>Document</title>
</head>
<body>
    <div class="parent">
        <h1 class="header">Welcome <?php echo $_SESSION["username"];?>!</h1>
        <h3>This is a page that can be <br>accessed by admin only</h3>
        <div class="child">
            <img src="admin monkey.jpg" class="image">
            <a href="logout.php">Logout</a>
        </div>
    </div>
</body>

</html>