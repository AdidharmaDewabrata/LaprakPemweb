<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet"/>
    <title>Create Page</title>
</head>
<body>
    <div class="h-e-1"><h1 id="h-e">Add User</h1></div>

    <div class="form">
        <form action = "process.php" method="post">
            <!-- ini tuh buat manggil method create di crud nya -->
            <input type="hidden" name="action" value="create">

            <div class="lbl"><label>Username:</label>
            <input class="input" type="text" name="usn"></div> <br>
            <div class="lbl">
            <label>Password:</label> 
            <input class="input" type="password" name="pwd"></div> <br>
            <div class="lbl">
            <label>Email:</label> 
            <input class="input" type="text" name="email"></div><br>
            <div class="lbl">
            <label>Phone Number:</label> 
            <input class="input" type="text" name="phone"></div><br>
            <div class="buttons">
                <div class="cancel-btn"><a href="page.php">Cancel</a></div>
                <input class="submit" type="submit" value="Submit"> 
            </div>
        </form>
    </div>
</body>
</html>