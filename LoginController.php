<?php
session_start();
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

                $_SESSION["user_data"] = array(
                    "id"=>$userData['id'],
                    "name" => $userData['name'], 
                    "role" => $userData['role'],
                );

                if ($userData['role'] == 'admin') {
                    header("Location: home-page.php");
                } elseif ($userData['role'] == 'user') {
                    header("Location: home-page.php");
                } else {
                    echo "Unknown user role.";
                    exit;
                }
            } else {
                echo "<script> alert('Your username or password is incorrect!'); window.location.href='log-in.php'; </script>";
            }
        } else {
            echo "<script> alert('Database Connection Failed!'); window.location.href='log-in.php'; </script>";
        }
    }
}

?>