<?php

class CRUD {
    private $conn = "";

    public function __construct() {
        $db_server = "localhost";
        $db_username = "root";
        $db_password = "";
        $db_name = "systemdb";

        try {
            $this->conn = new PDO("mysql:host=$db_server;dbname=$db_name;charset=utf8mb4", $db_username, $db_password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function create($username, $email, $password, $phone_number) {

        $sql = "INSERT INTO user (username, email, phone_number, password)
                VALUES (:username, :email, :phone_number, :password)";

        $stmt = $this->conn->prepare($sql);

        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone_number', $phone_number);
        $stmt->bindParam(':password', $password);

        $stmt->execute();

        echo "New record created successfully<br>";
    }

    public function readAll() {
        $sql = "SELECT * FROM user";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function delete($id) {
    $sql = "DELETE FROM user WHERE id = :id";
    $stmt = $this->conn->prepare($sql);

    return $stmt->execute([
        ':id' => $id
    ]);
}
}
?>