<?php

include("database.php");

$crud = new CRUD();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $action = $_POST["action"];

    switch ($action) {

        case "create":
            $username = $_POST["usn"];
            $email = $_POST["email"];
            $phone_number = $_POST["phone"];
            $password = password_hash($_POST["pwd"], PASSWORD_DEFAULT);

            $crud->create($username, $email, $password, $phone_number);
            break;

        case "update":
            $id = $_POST["id"];
            $username = $_POST["usn"];
            $email = $_POST["email"];
            $phone_number = $_POST["phone"];
            $password = password_hash($_POST["pwd"], PASSWORD_DEFAULT);

            $crud->update($id, $username, $email, $phone_number, $password);
            break;

        case "delete":
            $id = $_POST["id"];
            $crud->delete($id);
            break;
    }

    header("Location: page.php");
    exit();
}
?>