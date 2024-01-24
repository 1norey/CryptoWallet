<?php

include 'Database.php';

class LoginController {
    private $user;

    public function __construct($user) {
        $this->user = $user;
    }

    public function attemptLogin($username, $password) {
        $user = $this->user->authenticate($username, $password);

        if ($user !== null) {
            if ($user['role'] == 'admin') {
                header("Location: dashboard.php");
                exit();
            } else {
                header("Location: home-page.php");
                exit();
            }
        } else {
            echo "Invalid username or password.";
        }
    }
}
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $loginController->attemptLogin($username, $password);
    }

            $database->closeConnection();


?>