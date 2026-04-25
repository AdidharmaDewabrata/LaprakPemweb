<?php
    include ("database.php");

    $crud = new CRUD();
    $users = $crud->readAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet"/>
    <title>Admin Page</title>
</head>

<body>
    <div class="h-1"><h1>User Administration System</h1></div>
    
    <div class="title">
        <h2 id="t-1">List of User</h2>
        <a id="c-btn" href = "createPage.php" role = "button" id="add-btn">New User</a>
    </div>

    <div class="table">
        <table>
            <tr id="h-2">
                <th style="width: 50px">ID</th>
                <th style="width: 250px">Username</th>
                <th style="width: 250px">Email</th>
                <th style="width: 350px">Phone Number</th>
                <th style="width: 300px">Password</th>
                <th style="width: 100px">Edit</th>
                <th style="width: 100px">Delete</th>
            </tr>
            <?php foreach ($users as $row): ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['username'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['phone_number'] ?></td>
                <td><?= $row['password'] ?></td>

                <td>
                    <form method="GET" action="editPage.php">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <button type="submit" class="e-btn">Edit</button>
                    </form>
                </td>

                <td>
                    <form method="POST" action="process.php">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="id" value="<?= $row['id'] ?>">
                        <button type="submit" class="d-btn">Delete</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
    </div>

</body>
</html>