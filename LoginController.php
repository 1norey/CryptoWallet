<?php

include_once 'Database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['loginBtn'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if (empty($username) || empty($password)) {
            echo "Username and password are required.";
            exit;
        }

        $dbConnection = new Database();
        $conn = $dbConnection->startConnection();

        if ($conn) {
            $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
            $stmt->bindParam(':username', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $userData = $stmt->fetch(PDO::FETCH_ASSOC);

                if ($userData['role'] == 'admin') {
                    header("Location: dashboard.php");
                } elseif ($userData['role'] == 'user') {
                    header("Location: home-page.php");
                } else {
                    echo "Unknown user role.";
                    exit;
                }
            } else {
                echo "Invalid username or password.";
            }
        } else {
            echo "Database connection failed.";
        }
    }
}

?>